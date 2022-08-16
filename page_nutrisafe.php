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
   
} 

?>

<style>

    .center{
        margin-left:350px;
    }

</style>
<div class="container center">

        <div class="row">
                <div class="submenu">
                    <nav aria-label="breadcrumb" class="mt-5">
                    <ul class="breadcrumb submenu">
                        <li class="breadcrumb-item"><a href="dashboard.php"  class="submenu"><b>Home</b></a></li>
                        <li class="breadcrumb-item"><a href="nutrisafe.php"><b>NutriSafe</b></a></li>
                        <li class="breadcrumb-item active text-dark" aria-current="page"> <?php echo $title; ?></li>
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
            <div class="col-md-6">
                
                <form id="form2">

                <label for="nameNutri" class="form-label">Name</label>
                <input type="text" name="nameNutri" id="nameNutri" placeholder="Enter full names" class="form-control mb-3" required>

                <label for="msgNutri" class="form-label">Leave a comment</label>
                <textarea id="msgNutri" cols="5" rows="5" class="form-control" required></textarea>

                
                <button class="btn btn-success mb-3 mt-3 w-25" id="btn"> Post Comment </button>


                </form>
            </div>
            <div id="contentNutri">

            </div>
        </div>


    </div>

  
</div>



<?php  include_once("dashfooter.php"); ?>

<script>
$(document).ready(function(){
    function loadData(){
        $.ajax({
            url: 'selectdata_nutri.php',
            type: 'POST',
            success: function(data){
                $("#contentNutri").html(data);
            }
        });
    }

    loadData();

    $("#btn").on("click", function(e){
        e.preventDefault();
        var name = $("#nameNutri").val();
        var msg = $("#msgNutri").val();

        $.ajax({
            url: 'insertdata_nutri.php',
            type: 'POST',
            data: {name: name, msg: msg},
            success: function(data){
                if (data == 1) {
                    loadData();
                    // alert('Comment Submitted Successfully.');
                    $("#form2").trigger("reset");
                }else {
                    // alert("Comment Can't Submit.");
                }
            }
        });
    });
});
</script>








