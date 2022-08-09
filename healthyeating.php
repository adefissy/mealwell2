<?php include_once "dashheader.php"; ?>
<div class="container">
        <nav aria-label="breadcrumb" class="mt-5">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Healthy Eating</li>
          </ol>
        </nav>
    <div class="row">
        <div class="col-sm-12">
                    <?php
                    include_once ("bonds/post.php");

                    $objpost = new Post();
                    $outputindex = $objpost->postHealthyEating(); 

                    if (count($outputindex)>0) {
                       
                        foreach ($outputindex as $key => $value) {
                        $postid = $value['post_id'];  ?>
                        
                 
                    <a href="page_healthyeating.php?id=<?php echo $postid ?>">
                        <div class="d-flex px-5">
                                <div class="">
                                    <?php if (isset($value['post_image'])) { ?>
                                       <img src="photos/<?php echo $value['post_image'] ?>" alt="post image" class="img" style="width: 200px; height:200px; margin-bottom: 10px;">
                                    <?php } ?>

                                </div>

                                <div class="">
                                    <p> <?php echo $value['post_title'] ?> </p>
                
                                    <span><b> <?php echo date('l jS F', strtotime($value['date_posted'])) ?></b></span>
                                </div>
                                <hr>   
                        
                        <?php 
                            }
                    
                         }?>
                        </div>
                        
                    </a>
              </div>  
        </div>
    </div>







    

<?php include_once"dashfooter.php"; ?>


