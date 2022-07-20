<?php 
include_once "mw_constants.php"; 

include_once('commonfiles.php');


class Post{
    //member variable
    public $posttitle;
    public $category;
    public $postcontents;
    public $postimage;
    public $konn; //db handler


    public function __construct(){
        $this->konn = new mysqli (DBASE_HOST,DBASE_USERNAME,DBASE_PASSWORD,DBASE_DATABASENAME);

        if ($this->konn->connect_error) {
         die("Connection Failed ".$this->konn->connect_error);
        }

    }

    public function inputPost($posttitle, $postcontents, $category){
        
        //preppare statement
        $statement = $this->konn->prepare("INSERT INTO post(post_title, post_contents, category_id, post_image) VALUES(?,?,?,?)");

        $ext = array('jpg', 'png', 'jpeg', 'gif');

        $obj = new Common;
            $postimage = $obj->uploadAnyFile("photos/", 1048576, $ext);

            // echo "<pre>";
            // print_r($postimage);
            // echo "</pre>";
            // exit();
            

        if (array_key_exists('success', $postimage)) {

        $filenamep = $postimage['success'];
// var_dump($posttitle, $postcontents, $category, $filenamep);
// exit;

        $statement->bind_param("ssis", $posttitle, $postcontents, $category, $filenamep);

        $statement->execute();


            if ($statement->affected_rows == 1) {
                return true;
            }else{
                return $statement->error;
            }


        }else{
            return $postimage ['error'];
        }

   
    }

    

    function listpost(){

        #prepare statement

        $statement = $this->konn->prepare("SELECT * FROM post JOIN category ON category.category_id = post.category_id");

        #execute

        $statement->execute();

        #get result
        $result = $statement->get_result();

        //fetch records
        $records = array();

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){

                     $records[] = $row;
            }

          
        }
         return $records;
    }

    public function getCategory(){
        $stmt = $this->konn->prepare("SELECT category_id, category_name FROM category");

        $stmt->execute();

        $results = $stmt->get_result();

        $record = array();
        if ($results->num_rows > 0) {
            while ($row = $results->fetch_assoc()) {
               $record[] = $row;
            }
        }
        return $record;
    }

    function getPost($postid){

        #prepare statement
        $statement = $this->konn->prepare("SELECT * FROM post WHERE post_id=?");

        #bind parameter

        $statement->bind_param("i", $postid);

        #execute
        $statement->execute();

        #get result
        $result = $statement->get_result();

        return $result->fetch_assoc();
     }

     function updatePost($posttitle, $postcontents, $category, $postid){

        //prepare statement
        $statement = $this->konn->prepare("UPDATE post SET post_title=?, post_contents=?, category_id=? WHERE post_id=?");

        //bind parameters

        $statement->bind_param("ssii",$posttitle, $postcontents, $category, $postid);

        //execute
        $statement->execute();

        //check if record was updated
         return $statement->affected_rows;
        

    }

    public function deletePost($postid){

        //prepare statement
        $stmt = $this->konn->prepare("DELETE FROM post WHERE post_id=?");

        //bind parameter
        $stmt->bind_param("i",$postid);

        $stmt->execute();

        //check
        if ($stmt->affected_rows == 1) {
           $msg = "Post was successfully deleted!";

           header("Location: postitems.php?info=$msg");
           exit();

        }else{
            $msg = "Post could not be deleted!";

            header("Location: postitems.php?err=$msg");
            exit;
        }



    }
}

?>

 