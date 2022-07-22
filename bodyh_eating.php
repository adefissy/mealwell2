<div class="container">
    <div class="row">
        <div class="col-sm-12">

        <?php


        include_once ("bonds/post.php");

        $objpost = new Post();

        $outputindex = $objpost->postIndex();
                // echo "<pre>";
                // print_r($outputindex);
                // echo "</pre>";
    

        if (count($outputindex)>0) {
           
            foreach ($outputindex as $key => $value) {
            $postid = $value['post_id']
        ?>

       
            <div class="col-sm-6">
                <h3> <?php echo $value['post_title'] ?></h3>
               
                <b> <?php echo date('l jS F', strtotime($value['date_posted'])) ?></b>  
                <hr>

                <?php if (isset($value['post_image'])) {
              
                } ?>
                    <img src="photos/<?php echo $value['post_image'] ?>" alt="post image" class="img-fluid" style="width: 200px; height:200px">
                <?php ?>

            </div>
            <div class="col-sm-12">
            
            <p> <?php echo $value['post_contents'] ?> </p>
             
            </div>

        <?php
            
         }
        
        }

        ?> 
        </div>
    </div>
</div>

