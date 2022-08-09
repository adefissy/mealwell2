<!DOCTYPE html>
<html lang="en">
<head>
	<title>Meal Well</title>

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
   <?php session_start();
   
   if (!isset($_SESSION['mylogger']) && $_SESSION['mylogger']!='mEaLwElL_dB') {

    # redirect to login

   echo "<p class='alert alert-danger'>You need to login to access this page!</p>";
    
    header("Location: login.php");

    exit;
}
 
 
 ?>


			<!--navigation-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<nav class="navbar blue navheight text-white" >
					<ul class="nav justify-content-right">
						<li class="nav-item">
							<a class="navbar-brand text-white" href="dashboard.php">
      							
    						     MealWell
    						</a>
		          		</li>
		        		<li class="nav-item">
		         		 	<a class="nav-link text-white topfont typos links" href="nutrisafe.php">Nutri-Safe</a>
		        		</li>
		        		<li class="nav-item">
		          			<a class="nav-link text-white topfont typos links" href="healthyeating.php">Healthy Eating</a>
		        		</li>
		       			<li class="nav-item">
		          		    <a class="nav-link text-white topfont typos links" href="healthyrecipes.php">Healthy Recipes</a>
		        		</li>

		        		<li class="nav-item">
		          		    <p class="nav-link"> Hello 
							  
								<?php 
                                    if (isset($_SESSION['firstname'])) {
                                    echo $_SESSION['firstname'];
                                    
                                    }
             
                                 ?>
                            </p>
		        		</li>
						<li class="nav-item">
		          		    <a href="logout.php" class="nav-link typos links"> Logout</a>
		        		</li>

                       
		      		</ul>
				</nav>
			</div>
		</div>
		
	</div>
					<!-----navigation ends here ------>