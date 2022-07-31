<?php
        include_once("dashheader.php");

        include_once ("bonds/post.php");


        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id= $_REQUEST['id'];
        
            $obj = new Post();
            $objpost = $obj->getPost($id); //changes getpost

            // echo"<pre>";
            // print_r($objpost);
            // echo"</pre>";

            $title = $objpost['post_title'];
            $date = $objpost['date_posted'];
            $image = $objpost['post_image'];
            $content = $objpost['post_contents'];
            
           
            // $category = $objpost['category_id']; //snouldnt be there

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
                //$objpost[''];
              
            } ?>
                <img src="photos/<?php echo $image ?>" alt="post image" class="img-fluid">

            <p><?php echo $content ?></p>

        </div>



        <div>
            <form action="" method="post">
                <p>Leave a Comment:</p>
                
                <textarea name="comment" id="comment" cols="20" rows="5" class="typos"></textarea>

                <button type="submit" class="btn btn-success typos">Comment</button>
            </form>
        </div>
        
        
        </div>
    </div>
<!-- </div> -->

