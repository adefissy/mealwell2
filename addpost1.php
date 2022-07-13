<?php include_once "porterheader.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 mt-3">
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

                            foreach ($categ as $key => $value) {
                                $categid = $value['category_id'];
                                $categname = $value['category_name'];

                                echo "<option value='categid'>$categname</option>";

                            }
                        ?>

                    </select>
  			    </div>
        
					
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