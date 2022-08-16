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
            $video = $objpost['post_video'];
           
            
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
                                    <li class="breadcrumb-item"><a href="dashboard.php"><b>Home</b></a></li>
                                    <li class="breadcrumb-item text-dark"><a href="healthyrecipes.php"><b>Healthy Recipes</b></a></li>
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

                            </div>
                            <div>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                </iframe>
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
                            
                            <form id="form">

                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter full names" class="form-control mb-3" required>

                            <label for="msg" class="form-label">Leave a comment</label>
                            <textarea id="msg" cols="5" rows="5" class="form-control" required></textarea>

                            
                            <button class="btn btn-primary mb-3 mt-3 w-25" id="btn"> Post Comment </button>


                            </form>
                        </div>
                        <div id="content">

                        </div>
                    </div>

        </div>

        


<?php  include_once("dashfooter.php"); ?>

<script>
$(document).ready(function(){
    function loadData(){
        $.ajax({
            url: 'selectdata.php',
            type: 'POST',
            success: function(data){
                $("#content").html(data);
            }
        });
    }

    loadData();

    $("#btn").on("click", function(e){
        e.preventDefault();
        var name = $("#name").val();
        var msg = $("#msg").val();

        $.ajax({
            url: 'insertdata.php',
            type: 'POST',
            data: {name: name, msg: msg},
            success: function(data){
                if (data == 1) {
                    loadData();
                    // alert('Comment Submitted Successfully.');
                    $("#form").trigger("reset");
                }else {
                    // alert("Comment Can't Submit.");
                }
            }
        });
    });
});
</script>