<!DOCTYPE html>
<html>
<head>
	<title>MealWell Login Page</title>

							<!-- required meta tags-->
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

							<!--Bootstrap CSS Stylesheet-->

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

							<!--external CSS-->

	<link rel="stylesheet" type="text/css" href="mealwell.css">


							<!-- Fonts Links --->

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
<?php session_start() ?>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){


// include class file 
include_once('bonds/user.php');

//create object of user class

$userobj = new User();

$output = $userobj->adminlogin($_POST['adminuser'], $_POST['adminpsd']);

// echo $output;

if ($output == false) {

  $error ="<div class='alert alert-danger'> Invalid username or password </div>";

}else{

		#login successful , then redirect to landing page

		header("Location: admindashboard.php");
		exit();

}


}   


?>
    
	<div class="container-fluid">
	<?php

  if (isset($error)) {

    echo $error;
   
  }
  

//   if (isset($_REQUEST['m'])) {

//     echo "<div class='alert alert-danger'>". $_REQUEST['m']."</div>";
//   }
   ?>
		<div class="row" id="loginGradient">
			<div class="col-sm-12 typosBlue">
				<div class="bg-white" style="height: 350px; width:350px;padding: 30px;margin-left: 350px; margin-top:150px;/*">
				<h2 class="headingBlue" style="color: rgb(103,148,54);text-shadow:2px 3px 1px rgb(191,219,247);
			">ADMIN Login</h2>

				<form action="" method="post">
						
					<div class="col-sm-12 mt-3">
					
						<label class="form-label" for="adminLogin" id="logalert">Username</label>
						<input class="form-control" type="username" name="adminuser" id="adminLogin">
					</div>
					<div class="col-sm-12 mt-3">
						<label class="form-label" for="pass">Password</label>
						<input class="form-control "type="password" name="adminpsd" id="pass">
					</div>
					
					<div class="col-sm-12 mt-3">
						<button type="submit" class="btn buttonLinks heading" style="box-shadow: 4px 3px 2px white;" id="aLoginBtn">Login</button>
				
					</div>
					
				</form>
				
			    </div>
			</div>
		</div>
	</div>


						<!---EXTERNAL JQUERY--->

	<script type="text/javascript" src="jquerydownload.js"></script>

						<!---JQUERY--->

	<script type="text/javascript" src="mealwell.js"></script>


						<!-- JS Files-->
	<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>


</body>
</html>