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
	<?php
	  session_start();
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		include_once "bonds/user.php";

		$userobj = new User();

        //makerefer
        $result = $userobj->login($_POST['emailaddress'],$_POST['pword']);
		if ($result == true) {

			header("Location: dashboard.php");
            	exit();
			
			}else{
				echo "<div class='alert alert-danger'>Invalid email or password</div>";	
		}

	}

	if (isset($error)) {
  
	  echo $error;
	 
	}
	
	if (isset($_REQUEST['m'])) {
  
	  echo "<div class='alert alert-danger'>". $_REQUEST['m']."</div>";
	}
	 ?>

	<div class="container-fluid">
		<div class="row" id="loginGradient">
			<div class="col-sm-12 typosBlue">
				<div class="bg-white" style="height: 350px; width:350px;padding: 30px;margin-left: 350px; margin-top:150px;/*">
				<h2 class="headingBlue" style="color: rgb(103,148,54);text-shadow:2px 3px 1px rgb(191,219,247);
			">Login</h2>

				<form action="" method="post">
						
					<div class="col-sm-12 mt-3">
					
						<label class="form-label" for="emailLogin" id="logalert">Email Address</label>
						<input class="form-control" type="email" name="emailaddress" id="emailLogin">
					</div>
					<div class="col-sm-12 mt-3">
						<label class="form-label" for="pswd">Password</label>
						<input class="form-control "type="password" name="pword" id="pswd">
					</div>
					<span style="font-size:12px;color:rgb(103,148,54);">Forgotten password?</span>
					<div class="col-sm-12 mt-3">
						<button type="submit" class="btn buttonLinks heading" style="box-shadow: 4px 3px 2px white;" id="loginBtn">Login</button>
						<a href="signup.html" class="headingBlue">Sign up</a>
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