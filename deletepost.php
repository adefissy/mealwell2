<?php include_once ("porterheader.php"); ?>
<?php include_once ("bonds/commonfiles.php"); ?>

<div class="container">
    <h1>Delete Post</h1>

    <?php 
    if (isset($_REQUEST['deletebtn'])) {
        
        include_once "bonds/post.php";

        $obj = new Post();

        $obj->deletePost($_REQUEST['postid']);
    }
    

    
    if (isset($_REQUEST['cancelbtn'])) {

       $msg = "Could not perform action!";
       header("Location: postitems.php?info=$msg");

       exit();
    }
    ?>

    <div class="row">
        <div class="col-sm-7">

        <?php if (isset($_REQUEST['postid'])) {
            # code...
        ?>
     
            <div class="alert alert-warning">
                <h2><b> Do you want to delete <?php echo $_REQUEST['posttitle'] ?>? </b></h2>
            </div>

            <form action="deletepost.php?postid=<?php echo $_REQUEST['postid'] ?>&posttitle=<?php echo $_REQUEST['posttitle'] ?>" method="post">

          <button type="submit" name="deletebtn"class="btn btn-danger">YES</button>
          <button type="submit" name="cancelbtn" class="btn btn-info">NO</button>

            
            
            </form>

            <?php } ?>
        
        </div>
    </div>
</div>



<?php include_once ("porterfooter.php"); ?>