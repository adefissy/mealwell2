     <?php

        include_once("dashheader.php");
        include_once ("bonds/post.php");


        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
        
            $obj = new Post();
            $objpost = $obj->getPost($id); 
            
            // echo"<pre>";
            // print_r($objpost);
            // echo"</pre>";

            $title = $objpost['post_title'];
            $date = $objpost['date_posted'];
            $image = $objpost['post_image'];
            $content = $objpost['post_contents'];

            var_dump("$title");
           
           
        } 

        ?>

    <?php
            
            if(isset($_POST['commentBtn'])) {
            
                if (empty($_POST['commentText'])) {
                   
                    $errors['commentText'] = "Please Fill comment";

                //empty button ends here
                }
    
                   if (empty($errors)) {
              
                    $userid = $_SESSION['myuserid'];
                    $comment = $_POST['commentText'];
                    $postid = $_REQUEST['id'];
    
              include_once('bonds/post.php');
              $commentobj = new Post();
               $commentOutput = $commentobj->insertComment($userid,$postid,$comment);
       
               if ($commentOutput == true) {
                    
                $msg = "Comment was added";
             }else{
                    $errors[] = "Something went wrong";
                }
            }

            //isset button ends here
        }
    
                
            
            
            ?>
              

  
        <div class="container">

        <div class="row">
        <div class="submenu">
            <nav aria-label="breadcrumb" class="mt-5">
            <ul class="breadcrumb submenu">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item"><a href="healthyeating.php">Healthy Eating</a></li>
                <li class="breadcrumb-item active" aria-current="page"> <?php echo $title; ?></li>
            </ul>
            </nav>
        </div>
        <div class="col-sm-8">

            <h2> <?php  echo $title ?></h2>

            <?php if (isset($objpost['post_image'])) {
                
              
            } ?>
                <img src="photos/<?php echo $image ?>" alt="post image" class="img-fluid">

            <p><?php echo $content ?></p>

        </div>

        <div>
           <?php
        
        if (!empty($errors)) {

              echo "<ul class='alert alert-danger'>";

          foreach ($errors as $key => $value) {
              echo "<li>$value</li>";
          }

          echo "</ul>";
        }
        
        ?>
            
        </div>
        
        
        </div>


        <div class="row">
            <div class="col-md-10">
            <form action="" method="POST">

      

        <p>Leave a Comment:</p>

       <textarea name="commentText" id="commentText" cols="60" rows="3" class="typos"></textarea><br>

       <button type="submit" class="btn btn-success typos" id="commentBtn" name="commentBtn">Comment</button>
</form>
            </div>
        </div>
    </div>



    


