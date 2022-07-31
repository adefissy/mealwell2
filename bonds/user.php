<?php 

//include constant files
include_once "bonds/mw_constants.php";

//define class

class User {

    //member variables
    public $user_firstname;
    public $user_lname;
    public $user_email;
    public $user_password;
    public $user_gender;
    public $user_dob;
    public $admin_username;
    public $admin_password;
    public $konn; //database connection handler

    //member functions
    #begin constructor
    public function __construct(){
        //create object mysql
        $this->konn = new mysqli(DBASE_HOST,DBASE_USERNAME,DBASE_PASSWORD,DBASE_DATABASENAME);

        //check if connected to db
        if ($this->konn->connect_error) {
            die("Connection Failed ".$this->konn->connect_error);
        }
    }
    #end constructor

    #begin function signup
    public function signup($fname,$lname,$email,$password,$gender,$dob){
        //initialize member variables
        $this->user_firstname = $fname;
        $this->user_lname = $lname;

        //hash password
        $pwd = password_hash ("$password",PASSWORD_DEFAULT);

        //prepare statement
        $statement = $this->konn->prepare("INSERT INTO user(user_firstname,user_lname,user_email,user_password,user_gender,user_dob) VALUES(?,?,?,?,?,?)");

        //bind params
        $statement->bind_param("ssssss",$fname,$lname,$email,$pwd,$gender,$dob);

        //execute
        $statement->execute();
        
        if ($statement->affected_rows==1) {
          return true;
        }else{
            return false;
        }
    }
    #end function signup

    #begin function login 
    public function login($email,$password){
        $statement = $this->konn->prepare("SELECT * FROM user WHERE user_email=?");

        $statement->bind_param("s",$email);

        $statement->execute();

        $rslt = $statement->get_result();

        if ($rslt->num_rows == 1) {
          $row = $rslt->fetch_assoc();

          if (password_verify($password,$row['user_password'])) {

            session_start();


            $_SESSION['myuserid'] = $row['user_id'];
    
            $_SESSION['lastname'] = $row['user_lname'];
            $_SESSION['firstname'] = $row['user_firstname'];
            $_SESSION['mylogger'] = "mEaLwElL_dB";
             
              return true;
            }else{
              return false;
          }

        }else{
            return false;
        }
        
      }
    #end function login
        
      public function adminlogin($username,$password){
        $statement = $this->konn->prepare("SELECT * FROM admin WHERE admin_username=?");

        $statement->bind_param("s",$username);

        $statement->execute();

        $adminresult = $statement->get_result();

        if ($adminresult->num_rows == 1) {
          
          $row = $adminresult->fetch_assoc();

          if (password_verify($password,$row['admin_password'])) {

            session_start();


            $_SESSION['myadminid'] = $row['admin_id'];
            $_SESSION['myadminname'] = $row['admin_username'];
            $_SESSION['adminlogger'] = "ADDmEaLwElL_dB";
             
            
            return true;

            }else{
              return false;
          }

        }else{
            return false;
        }
        
      }


      public function logout(){

        session_start();
        session_destroy();
  
        header("Location: login.php");
        exit();
      }
      

       public function insertComment($comment, $userid){
        
        //preppare statement
        $statement = $this->konn->prepare("INSERT INTO comment(comment, userid) VALUES(?,?)");

        $statement->bind_param("si", $comment, $userid);

        $statement->execute();


            if ($statement->affected_rows == 1) {
                
                return true;
           
            }else{
                return $statement->error;
            }
   
    }

    public function getComment($comment){

        #prepare statement
        $statement = $this->konn->prepare("SELECT * FROM comment JOIN post ON post.comment_id = post.category_id");

        #bind parameter

        $statement->bind_param("i", $postid);

        #execute
        $statement->execute();

        #get result
        $result = $statement->get_result();

        return $result->fetch_assoc();
     }



  

      
    }
   
    
?>