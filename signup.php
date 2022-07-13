<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>

	<!-- required meta tags-->
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

							<!--Bootstrap CSS Stylesheet-->

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

							<!--external CSS---->

	<link rel="stylesheet" type="text/css" href="mealwell.css">

							<!---external JS---->

	<link rel="stylesheet" type="text/css" href="mealwell.js">

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
	if (isset($_POST['signbtn'])) {
		if (empty($_POST['fname'])) {
			$errors ['fname'] = "Please fill first name field";
		}

		if (empty($_POST['lname'])) {
			$errors ['lname'] = "Pleaase fill last name field";
		}
		
		if (empty($_POST['email'])) {
			$errors ['email'] = "Email field is required";
		}

		if (empty($_POST['newpassword'])) {
			$errors ['newpassword'] = "Password field is required";
		}

		if (empty($_POST['gender'])) {
			$gen = $_POST['gender'];
			$errors ['gender'] = "Please fill your gender";
		}

		if (empty($_POST['dateofbirth'])) {
			$errors ['dateofbirth'] = "Please fill date of birth";
		}

		if (empty($errors)) {
			//sanitation

			include_once "bonds/sanitize.php";
			$comobj = new Common;

			$firstname = $comobj->sanitizeInputs($_POST['fname']);
			$surname = $comobj->sanitizeInputs($_POST['lname']);
			$mail = $comobj->sanitizeInputs($_POST['email']);
			$gender = $comobj->sanitizeInputs($_POST['gender']);
			$dateob = $comobj->sanitizeInputs($_POST['dateofbirth']);
			$pswd=$_POST['newpassword'];
			//create user class

			include_once "bonds/user.php";
			$userobj = new User();

			$output = $userobj->signup($firstname,$surname,$mail,$pswd,$gender,$dateob);

			if ($output == true) {
				//rediretc to success page
				header("Location: success_signup.php");
			}else{
				$errors[] = "Snap :( something went wrong. Try again";
			}
		}
	}



	?>
	<!--navigation-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<nav class="navbar blue navheight text-white">
					<ul class="nav justify-content-right">
						<li class="nav-item">
							<a class="navbar-brand text-white" href="#">
      							
    						     MealWell
    						</a>
		          		</li>
		        		<li class="nav-item">
		         		 	<a class="nav-link text-white typos links" href="#" style="font-size: 25px;">Nutri-Safe</a>
		        		</li>
		        		<li class="nav-item">
		          			<a class="nav-link text-white typos links" href="#" style="font-size: 25px;">Healthy Eating</a>
		        		</li>
		       			<li class="nav-item">
		          		    <a class="nav-link text-white typos links" href="#" style="font-size: 25px;">Healthy Recipes</a>
		        		</li>
		      			</ul>

		      			<form class="d-flex" style="margin-right: 15px; font-family:'Roboto', serif;">
					        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					        <button class="btn buttonLinks" type="submit">Search</button>
					    </form>
				</nav>
			</div>
		</div>
		
	</div>
					<!-----navigation ends here ------>

					<!-- TEXT & FORM HERE--->

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 p-5">
				<h3 class="headingBlue">We MealWell ;)</h3>
				<h6 class="typosBlue">Sign up with us, lets have ride in living healthy</h6><hr>
				<img src="images/healthyEating3.jpg" class="img-fluid" alt="image"/>
			</div>
			<div class="col-sm-6 p-5 typosBlue">
				<h2 class="headingBlue">Be an Insider</h2>
				<?php  
					if (!empty($errors)) {
						echo "<ul class='alert alert-danger'>";
						foreach ($errors as $key => $value) {
							echo "<li>$value</li>";
						}
						echo "</ul>";
					
					}
				?>
				
				<form action="" method="post" class="row g-3">
					<div class="col-sm-6">
						 <input type="text" name="fname" class="form-control" placeholder="First name" id="fname">
					</div>
					<div class="col-sm-6">
						 <input type="text" name="lname" class="form-control" placeholder="Last name" id="lname">
					</div>
					<div class="col-sm-12">
						 <input type="email" name="email" class="form-control" placeholder="Email address" id="emailSign">
					</div>
					<div class="col-sm-12">
						 <input type="password" name="newpassword" class="form-control" placeholder="New password" id="pswdSign">
					</div>
					
					<div class="col-sm-6">
						<!-- <h6 class="typosBlue">Date of Birth</h6> -->
						<input type="date" name="dateofbirth" class="form-control"  id="date">
					</div>
					
					
					<div class="col-sm-3 form-check-block typosBlue">
  						<input class="form-check-input" id="femaleradio" type="radio" name="gender" value="Female">
  						<label class="form-check-label" for="femaleradio">Female</label>
  					</div>
  					<div class="col-sm-3 form-check-block typosBlue">

						<input class="form-check-input" id="maleradio" type="radio" name="gender" value="Male">
  						<label class="form-check-label" for="maleradio">Male</label>
					</div>
					
					<div class="col-12">
						<button type="submit" class="btn buttonLinks heading" name="signbtn" id="signBtn">Sign up</button>
						<a href="login.php" class="headingBlue">Login</a>
					</div>
				</form>

				
			</div>
			
		</div>
		
	</div>

							<!---Footer--->

	<div class="container-fluid blue footer">
		<div class="row">
			<div class="col-sm-5 p-3" style="margin-left: 55px;">
				<ul>
					<li>
						<a class="text-white typos links" href="about_us.html" target="_blank">About Us</a>
					</li>
					<li>
						<a class="text-white typos links" href="contact_us.html" target="_blank">Contact Us</a>
					</li>
					<li>
						<a class="text-white typos links" href="#">Policy</a>
					</li>
					<li>
						<a class="text-white typos links" href="#">Partner</a>
					</li>
				</ul>

				
				
			</div>
			<div class="col-sm-6 ">
				

				<!-- iconify goes here -->

				

				<a href="">
					<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" style="vertical-align: -0.125em;" width="3em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512" class="icon"><path fill="white" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48c27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
				</a>

				<a href="">
					<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" style="vertical-align: -0.125em;" width="3em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20" class="icon"><path fill="white" d="M13 10a3 3 0 1 1-6 0c0-.171.018-.338.049-.5H6v3.997c0 .278.225.503.503.503h6.995a.503.503 0 0 0 .502-.503V9.5h-1.049c.031.162.049.329.049.5zm-3 2a2 2 0 1 0-.001-4.001A2 2 0 0 0 10 12zm2.4-4.1h1.199a.301.301 0 0 0 .301-.3V6.401a.301.301 0 0 0-.301-.301H12.4a.301.301 0 0 0-.301.301V7.6c.001.165.136.3.301.3zM10 .4A9.6 9.6 0 0 0 .4 10a9.6 9.6 0 0 0 9.6 9.6a9.6 9.6 0 0 0 9.6-9.6A9.6 9.6 0 0 0 10 .4zm5 13.489C15 14.5 14.5 15 13.889 15H6.111C5.5 15 5 14.5 5 13.889V6.111C5 5.5 5.5 5 6.111 5h7.778C14.5 5 15 5.5 15 6.111v7.778z"/></svg>
				</a>

				<a href="">
					<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" style="vertical-align: -0.125em;" width="3em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20" class="icon"><path fill="white" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4zm3.905 7.864c.004.082.005.164.005.244c0 2.5-1.901 5.381-5.379 5.381a5.335 5.335 0 0 1-2.898-.85c.147.018.298.025.451.025c.886 0 1.701-.301 2.348-.809a1.895 1.895 0 0 1-1.766-1.312a1.9 1.9 0 0 0 .853-.033a1.892 1.892 0 0 1-1.517-1.854v-.023c.255.141.547.227.857.237a1.89 1.89 0 0 1-.585-2.526a5.376 5.376 0 0 0 3.897 1.977a1.891 1.891 0 0 1 3.222-1.725a3.797 3.797 0 0 0 1.2-.459a1.9 1.9 0 0 1-.831 1.047a3.799 3.799 0 0 0 1.086-.299a3.834 3.834 0 0 1-.943.979z"/></svg>
				</a>

				<p class="typos text-white">Copyright &copy; MealWell 2022</p>

			</div>
		</div>
	</div>

	<link rel="stylesheet" type="text/css" href="jquerydownload.js">
						<!-- JS Files-->
	<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
		

</body>
</html>