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
                
                <?php if (isset($value['post_image'])) {
              
                } ?>
                    <img src="photos/<?php echo $value['post_image'] ?>" alt="post image" class="img-fluid" style="width: 200px; height:200px">
                <?php ?>

            </div>

        <div class="col-sm-6">
            <a href="bodyh_eating.php?postid=<?php echo $postid ?>"> <?php echo $value['post_title'] ?></a> 
            <hr>
            <b> <?php echo date('l jS F', strtotime($value['date_posted'])) ?></b>     
        </div>
          


        <?php
            
         }
        
        }

        ?> 
        </div>
    </div>
</div>

