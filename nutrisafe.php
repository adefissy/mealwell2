<?php include_once "dashheader.php"; ?>
<div class="container">
        <div class="submenu">
            <nav aria-label="breadcrumb" class="mt-5">
            <ol class="breadcrumb submenu">
                <li class="breadcrumb-item"><a href="dashboard.php"><b>Home</b></a></li>
                <li class="breadcrumb-item active text-dark" aria-current="page">NutriSafe</li>
            </ol>
            </nav>
        </div>
    <div class="row">
       
       <?php  
       //  include_once ("bonds/post.php");

       //  $objpost = new Post();
       //  $outputindex = $objpost->postHealthyEating(); 
       
       include_once ('bonds/config.php');
        $query = "SELECT * FROM post  WHERE category_id=2";
        $query_run = mysqli_query($conn, $query);
        $healthy = mysqli_num_rows($query_run) > 0;

        if ($healthy)
        {
          while ($row = mysqli_fetch_assoc($query_run))
          {
            $postid = $row['post_id']; 
               ?>
                   <div class="col-sm-3">   
                       <div class="">
                       <a href="page_nutrisafe.php?id=<?php echo $postid?>" class="healthypost">
                                   <img src="photos/<?php echo $row['post_image'] ?>" class="card-img-top" alt="post picture" width="250px" height="200px">
                               </a>
                           <div class="card-body">
                           
                               
                           <a href="page_nutrisafe.php?id=<?php echo $postid?>" class="healthypost">
                                   <h5 class="card-title"> <?php echo $row['post_title']; ?> </h5>
                           </a>
                           <hr>
                             
                               <span class="card-text dateposted"><i><?php echo date('l jS F', strtotime($row['date_posted'])) ?></i></span>
                           </div>
                       </div>
                   </div>  
               <?php
          
          }
        }else{
          echo "No post found";
        }

       
       ?>
           
   </div>
</div>







    

<?php include_once"dashfooter.php"; ?>


