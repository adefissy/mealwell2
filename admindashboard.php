<?php  include_once "porterheader.php";  ?>
                                <!---PAGE CONTENTS---->

    <div class="container-fluid">

      <h2>ADMIN <small>Dashboard</small></h2>

        <div class="row">
                                <!----CARDS HERE---->
            <div class="col-sm-2">
                <div class="card border-success mb-3" style="width: 200px;">
                    <div class="card-header bg-success border-success">
                      <i class="fa-solid fa-user" style="font-size:25px;"></i>
                       <div>Users</div>
                    </div>
                   
                    <div class="card-body text-success">
                      <?php
                      include "bonds/config.php";
                      $query = "SELECT user_id FROM user";
                      $user_run = mysqli_query($conn, $query);

                      $row = mysqli_num_rows($user_run);

                      echo  "<h5 class='card-title'> " .$row. " Users</h5>";
                      ?>
                     
                    </div>
                    <div class="card-footer bg-transparent border-success"></div>
                </div>

            </div>
            <div class="col-sm-2">
                  <div class="card border-warning mb-3" style="width: 200px;">
                    <div class="card-header bg-warning border-warning">
                    <i class="fa-solid fa-comments" style="font-size:25px;"></i>
                    <div>Comments</div>
                  </div>
                    <div class="card-body text-warning">
                    
                    <?php
                    include "bonds/config.php";
                    $query = "SELECT comment_id FROM comment";
                    $comment_run = mysqli_query($conn, $query);

                    $row = mysqli_num_rows($comment_run);

                    echo  "<h5 class='card-title'> " .$row. " Comments</h5>";
                    ?>
                     
                      
                    </div>
                    <div class="card-footer bg-transparent border-warning">
                
                    </div>
                  </div>

            </div>
            <div class="col-sm-2">
                  <div class="card border-primary mb-3" style="width: 200px;">
                    <div class="card-header bg-primary border-primary">
                      <i class="fa-solid fa-newspaper" style="font-size:25px;"></i>
                      <div>Healthy Eating</div>
                    </div>
                
                    <div class="card-body text-primary">
                        <?php
                        include "bonds/config.php";
                        $query = "SELECT post_id FROM post WHERE category_id=1";
                        $post_run = mysqli_query($conn, $query);

                        $row = mysqli_num_rows($post_run);

                        echo  "<h5 class='card-title'> " .$row. " Posts</h5>";
                        ?>
                          
                    </div>
                    <div class="card-footer bg-transparent border-primary"></div>
                  
                  </div>

            </div>

            <div class="col-sm-2">
                  <div class="card border-danger mb-3" style="width: 200px;">
                    <div class="card-header bg-danger border-danger">
                    <i class="fa-solid fa-newspaper" style="font-size:25px;"></i>
                      <div>NutriSafe</div>
                    </div>

                    <div class="card-body text-danger">
                        <?php
                        include "bonds/config.php";
                        $query = "SELECT post_id FROM post WHERE category_id=2";
                        $post_run = mysqli_query($conn, $query);

                        $row = mysqli_num_rows($post_run);

                        echo  "<h5 class='card-title'> " .$row. " Posts</h5>";
                        ?>
                      
                    </div>
                    <div class="card-footer bg-transparent border-danger"></div>
                  </div>

            </div>
            <div class="col-sm-2">
                  <div class="card border-info mb-3" style="width: 200px;">
                    <div class="card-header bg-info border-info">
                    <i class="fa-solid fa-bowl-food" style="font-size:25px;"></i>
                      <div>Healthy Recipes</div>
                    </div>

                    <div class="card-body text-info">
                        <?php
                        include "bonds/config.php";
                        $query = "SELECT post_id FROM post WHERE category_id=3";
                        $post_run = mysqli_query($conn, $query);

                        $row = mysqli_num_rows($post_run);

                        echo  "<h5 class='card-title'> " .$row. " Posts</h5>";
                        ?>
                      
                    </div>
                    <div class="card-footer bg-transparent border-info"></div>                 
                  </div>

            </div>
            
        </div>
    </div>

                                 
                                  
<?php  include_once "porterfooter.php";  ?>

    


                        