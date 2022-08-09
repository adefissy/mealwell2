<?php include_once ("dashheader.php"); ?>	
                            <!---Index contents-->	
							
                                <!--Section 1-->

    <div class="container-fluid">
		<div class="row mt-4 mb-3">
			<div class="col-7">
				<img src="images/nutrisafe1.jpg" alt="picture" width="100%">
	
			</div>
			<div class="col-5 blue minisection">
				<h2 class="heading mt-2">NutriSafe</h2>
				
				<p class="typos text-white">Everything Food Safety. Safe food begins from purchase and storage to preparation</p>
				<a href="nutrisafe.php" class="btn buttonLinks">More</a>
			</div>
			
		</div>
	</div>
					
					<!--Section 2 Card placed here-->


	<div class="container-fluid blue ">
		
		<div class="row healthyCards">
			    <div>
					<h1 class="heading mt-5" id="healthyTitle">Healthy Eating</h1>
				</div>
			
			<div class="col-3">

				<a href="healthyeating.php" target="_blank" class="cardDecoration">
						<div class="card links">
							<img src="images/nutrisafe2.jpg" class="card-img-top" alt="Card picture">
						

							<div class="card-body">
								<h5 class="card-title headingBlue">Cooking Tips</h5>
								<p class="card-text typos">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								
							</div>
						</div>
					
				</a>
				
			</div>
			<div class="col-3">
				<a href="healthyeating.php" target="_blank" class="cardDecoration">
					<div class="card links">
						<img src="images/fruit.jpg" class="card-img-top" alt="Card picture">

						<div class="card-body">
						<h5 class="card-title headingBlue">Fruits, Anyone?

						</h5>
						<p class="card-text typos">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						
						</div>
					</div>
				</a>
				
			</div>
			<div class="col-3">
				<a href="healthyeating.php" target="_blank" class="cardDecoration">
					<div class="card links">
						<img src="images/water.jpg" class="card-img-top" alt="Card picture">

						<div class="card-body">
							<h5 class="card-title headingBlue">Water is Life</h5>
							<p class="card-text typos">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							
						</div>
					</div>
				</a>	
			</div>
			
			<div id="healthyButton">
				<a href="healthyeating.php" class="btn buttonLinks mb-5 mt-5" >Find Out More</a>
			</div>
		</div>

		
		
	</div>

				
								<!--Section 3-BMI CALC--->

								<!-- Form and Paragragh here-->

	<div class="container-fluid p-5" id="bmiBg">
		<div class="row">
			<div class="col-6 bmi" id="bmiForm">
				<form id="bmiForm">
  					<div class="mt-3">
    					<label for="bmiHeight" class="form-label headingBlue">Height</label>
    					<input type="number" class="form-control" placeholder="height in cm" id="bmiHeight" min="54" max="272">
    				</div>
    					
  					<div class="mt-3">
   						 <label for="bmiWeight" class="form-label headingBlue">Weight</label>
    					<input type="number" class="form-control" placeholder="weight in kg" id="bmiWeight" min="1" max="635">
 					</div>
  						
  						<button type="button" class="btn btn-outline buttonLinks mt-5 mb-3 center" id="btnCalc" onclick="calcBMI();">Calculate</button>
					<div id="result"></div>
				</form>
			
			</div>

			<div class="col-4 p-5 bmi" id="bmiText">
				
				<h2 class="headingBlue">Body Mass Index (BMI)</h2>
				<hr>
				<p class="typos">
					To know your body mass index, just enter your height in metres, weight kilograms and click calculate
				</p>
				
			</div>
		</div>
	</div>

	<!--section 4- Healthy recipes with carousel-->

				<div class="container-fluid">
					
					<div class="row mb-3">
						<div class="col-4 blue minisection2">
						<h2 class="heading">When in need of recipes
								</h2>

								<p class="typos text-white">Everything Food Safety. Safe food begins from purchase and storage to preparation</p>

								<a href="healthyrecipes.php" class="btn buttonLinks">More Recipes</a>

						</div>
						
						<div class="col-8">

							<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="images/recipe6.jpg" class="d-block w-100" alt="">
									</div>
									<div class="carousel-item">
										<img src="images/recipe7.jpg" class="d-block w-100" alt="">
									</div>
									<div class="carousel-item">
										<img src="images/nutrisafe3.jpg" class="d-block w-100" alt="">
									</div>
								</div>
							</div>

							
							
						</div>
						

						</div>
						
					</div>
				
						
						
					
				</div>
    <!---index footer -->
<?php include_once ("dashfooter.php"); ?>