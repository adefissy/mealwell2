<?php 
include_once "mw_constants.php"; 

include_once('commonfiles.php');


class Post{
    //member variable
    public $posttitle;
    public $category;
    public $postcontents;
    // public $postimage;
    public $konn; //db handler


    public function __construct(){
        $this->konn = new mysqli (DBASE_HOST,DBASE_USERNAME,DBASE_PASSWORD,DBASE_DATABASENAME);

        if ($this->konn->connect_error) {
         die("Connection Failed ".$this->konn->connect_error);
        }

    }

    public function inputPost($posttitle, $postcontents, $category){
        //preppare statement
        $statement = $this->konn->prepare("INSERT INTO post (post_title, post_contents, category_id) VALUES(?,?,?)");

        // $ext = array('jpg', 'png', 'jpeg', 'gif');
        // $obj = new Common;
        //     $postimage = $obj->uploadAnyFile("photos/", 1048576, $ext);

        //     echo "<pre>";
        //     print_r($postimage);
        //     echo "</pre>";
        //     exit();
            

            // if (array_key_exists('success', $postimage)) {

            //     $filenamep = $postimage['success'];


        $statement->bind_param("ssi",$posttitle,$postcontents,$category);

        $statement->execute();

        if ($statement->affected_rows == 1) {
           return true;
        }else{
            return $statement->error;
        }

    // }else{
    //     return $postimage ['error'];
    // }

    }

    #begin list clubs

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
}

?>

 