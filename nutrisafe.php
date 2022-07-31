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



            <table>
                <tbody>
                    <?php
                    include_once ("bonds/post.php");

                    $objpost = new Post();
                    $outputindex = $objpost->postNutriSafe(); //changes....from postindex
                            // echo "<pre>";
                            // print_r($outputindex);
                            // echo "</pre>";
                    if (count($outputindex)>0) {
                       
                        foreach ($outputindex as $key => $value) {
                        $postid = $value['post_id'];
                        // $category = $value['category_id']; //changes...not there
                    ?>
                    <tr>
                        <td>
                            
                           
                                <?php if (isset($value['post_image'])) { ?>
                                   <img src="photos/<?php echo $value['post_image'] ?>" alt="post image" class="img-fluid" style="width: 200px; height:200px; margin-bottom: 10px;">
                                <?php } ?>
                          
                            
                   
                       
                        
                                <a href="page_nutrisafe.php?id=<?php echo $postid //$category ?>"> <?php echo $value['post_title'] ?>
                                </a>
            
                                <b> <?php echo date('l jS F', strtotime($value['date_posted'])) ?></b>
                       
                             <hr>

                                
                            
                      
                            
                        </td>
                    </tr>
                    <?php 
                            }
                    
                         }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
    

<?php include_once"dashfooter.php"; ?>


