<?php
//class definition

class Common {

    //member functions
    public function  uploadAnyFile($dest, $size, $ext){

        // creating variables for file upload

    $filename = $_FILES['myfile']['name'];
    $filpath = $_FILES['myfile']['full_path'];
    $filesize = $_FILES['myfile']['size'];
    $filetype = $_FILES['myfile']['type'];
    $tempname = $_FILES['myfile']['tmp_name'];
    $fileerror = $_FILES['myfile']['error'];

    // check if file was uploaded
    if ($fileerror > 0) {
        $uploadresponse['error'] = "You've not uploaded any file";
        return $uploadresponse;
    }

    //check for file size
    if ($filesize > $size) {
        $uploadresponse['error'] = "File cannot be more than $size";
        return $uploadresponse;
    }

    // pick the file type
    $filename_arr = explode(".", $filename);
    $file_ext = end($filename_arr);

    // check if extensions is allow;
    if (!in_array(strtolower($file_ext), $ext)) {
        return "File not allowed";
    }

    // destination folder
    $newfilename = "ch".rand().time().".".$file_ext;
    $destination = $dest.$newfilename;

    // check if file upload was successful
    if(move_uploaded_file($tempname, $destination)){

        $uploadresponse['success'] = $newfilename;
        return $uploadresponse;
     }else {
        $uploadresponse['error'] = "File cannot be uploaded";
        return $uploadresponse;
     }

    }
}


?>