<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
    <title> ADMIN DASHBOARD </title>

                             <!--Bootstrap CSS Stylesheet-->

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

                            <!--external CSS-->

    <link rel="stylesheet" type="text/css" href="mealwell.css">

                            <!---fontawesome----->

    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

                            <!-- Fonts Links --->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

<style type="text/css">
  .links:hover{
      background-color: rgb(191,219,247);
      border-radius: 5px;
  }

</style>

</head>
<body style ="background-color: rgb(191, 219, 247);">
  <div class="container-fluid">
  <?php

#start session
session_start();

if (!isset($_SESSION['adminlogger']) && $_SESSION['adminlogger']!='ADDmEaLwElL_dB') {

    # redirect to login

    $msg = "You need to login to access this page!";
    
    header("Location: adminlogin.php?m=$msg");

    exit;
}

function sanitizeInputs($data){
    
  $data = trim($data); // trim spaces
  $data = htmlspecialchars($data); // avoid html entities
  $data = addslashes($data); // escape slashes

  return $data;
}


?>
    <div class="row">
      <div class="col-sm-12">
      
        <nav class="navbar blue navheight text-white">
          <ul class="nav">
            <li class="nav-item">
              <a class="navbar-brand text-white" href="#">
                    
                     MealWell
                </a>
                  </li>
                <li class="nav-item" style="margin-left: 350px">
                  <a class="nav-link text-white typos links" href="admindashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white typos links" href="#">See All Users</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link text-white typos links" href="postitems.php">View post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white typos links" href="contactmessage.php">View Message</a>
                </li>
                <li class="nav-item">
                      <a class="nav-link text-white typos links" href="#">Comments</a>
                </li>

                <li class="nav-item">
                      <a href="adminlogout.php" target="_blank" class=" nav-link text-white typos links">Logout</a>
                </li>
                </ul>   
        </nav>
      </div>
    </div>
    
  </div>
                                <!--- /HEADER--->