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
              
            } ?>
                <img src="photos/<?php echo $image ?>" alt="post image" class="img-fluid">

            <p><?php echo $content ?></p>



<form action="" method="post">
    <textarea name="comment" id="comment" cols="30" rows="10">Leave a Comment</textarea>

    <button>Comment</button>
</form>