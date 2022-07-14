<?php include_once "porterheader.php" ?>

<div class="container">
    <h1 class="mt-4 mb-3">
      <small>POSTS</small>
    </h1>
    <div class="row">
        <div class="col-sm-6">
            <a href="addpost.php" class="btn btn-primary mb-3">Add Post</a>

            <?php
      if (isset($_REQUEST['m'])) {
        # code...
      ?>
        <div class="alert alert-success">

        <?php echo $_REQUEST['m']; ?>
        </div>

        <?php  }?>


        <?php
      if (isset($_REQUEST['info'])) {
        # code...
      ?>
        <div class="alert alert-info">

        <?php echo $_REQUEST['info']; ?>
        </div>

        <?php  }?>


        <?php
      if (isset($_REQUEST['err'])) {
        # code...
      ?>
        <div class="alert alert-danger">

        <?php echo $_REQUEST['err']; ?>
        </div>

        <?php  }?>

            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <th>#</th>
                    <th>Post Title</th>
                    <th>Category</th>
                    <th>Post Contents</th>
                   
                    <th>Image</th>
                   
                  
                </thead>
                <tbody>
                <?php
                #include class

                include_once('bonds/post.php');

                #create  object
                $objpost = new Post();
                
                $output = $objpost->listpost();

                echo "<pre>";
                print_r($output);
                echo "</pre>";


                if (count($output)>0) {

                    foreach($output as $key => $value){
                        $postid = $value['post_id'];

                    
                ?>
                    <tr>
                        <td> <?php echo $postid ?></td>
                        <td><?php echo $value ['post_title'] ?></td>
                        <td><?php echo $value ['category_name'] ?></td>
                        <td><?php echo $value ['post_contents'] ?></td>
                        
                        <td><?php 
                            if (!empty($value['post_image'])) {
                              # code...
                            ?>
                              <img src="photos/<?php echo $value['post_image']?>" alt="<?php echo $category_name?> picture" class="img-fluid">
                            <?php  } ?></td>
                            
                            
                    </tr>
                 
                    <?php }
                        
                        
                    }

                
                ?>

                </tbody>

            </table>
        </div>
    </div>
</div>

<?php include_once "porterfooter.php" ?>