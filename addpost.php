<?php include_once "porterheader.php";?>


<?php 

if (isset($_POST['btnaddpost'])) {

#validate

if (empty($_POST['posttitle'])) {
  
  $errors['posttitle'] = "Post title field cannot be empty";
}

if (empty($_POST['postcontent'])) {
  
  $errors['postcontent'] = "Posts contents field cannot be empty";
}

if (empty($errors)) {

  //sanitize
  include_once ("bonds/sanitize.php");

  $postobj = new Sanitize;

$ptitle = $postobj->sanitizeInputs($_POST['posttitle']);
$pcontent = $_POST['postcontent'];
$category = $_POST['category'];





    include_once('bonds/post.php');

    $objpost = new Post();

    $output = $objpost->inputPost($ptitle,$pcontent,$category);

    if ($output == true) {
      $msg = "Post was successfully added";

      //redirect

      header("Location: postitems.php?m=$msg");
      
    }else{

      $errors[] = "Oops! Could not add post ".$statement->error;
    }
}



}

?>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mt-3">
            <?php
        
        if (!empty($errors)) {

              echo "<ul class='alert alert-danger'>";

          foreach ($errors as $key => $value) {
              echo "<li>$value</li>";
          }

          echo "</ul>";
        }
        
        ?>
 
              <form action="" method="post"  name="addpost" enctype="multipart/form-data">
                <label for="ptitle" class="form-label typosBlue">Post Title</label>
                <input type="text" name="posttitle" id="ptitle" class="form-control"/>

       
            <div class="col-sm-6 mt-3">
              <label class="form-label typosBlue"> Category </label>
              <select name="category" id="category">
                <option value="">Choose Category</option>
                <?php 

                      include_once('bonds/post.php');

                      #create object

                      $obj = new Post();

                      #make reference to get country
                      $categ = $obj->getCategory();

                      foreach ($categ as $key => $value)  {
                        $categid = $value['category_id'];
                        $categname = $value['category_name'];

                        echo "<option value='$categid'>$categname</option>";

                      }
                      
                ?>

              </select>
  			    </div>
            <div class="col-sm-8 mt-3">
              <label for="image" class="form-label typosBlue">Image</label>
              <input type="file" class="form-control" id="image" name="myfile">
            </div>
            <!-- <div class="col-sm-8 mt-3">
              <label for="video" class="form-label typosBlue">Video</label>
              <input type="file" class="form-control" id="video" name="myfile">
            </div> -->
					
            <div class="col-sm-12 mt-3">
                <p class="typosBlue">Post Contents</p>

               <textarea name="postcontent" id="editor"></textarea> 

            </div>


            <div class="col-sm-3 mt-3">
                <input type="submit" class="form-control btn btn-success mb-3" id="btnaddpost" name="btnaddpost" value="Add Post">
            </div>
        </div>
</div>
    
</form>

<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>


    <script>

        ClassicEditor
                .create(document.querySelector('#editor'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });
    </script>

<?php include_once "porterfooter.php"; ?> 