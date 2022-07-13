<?php include_once ("indexheader.php"); ?>	
                            <!---Index contents-->							
                                <!--Section 1-->

    <div class="container">
		<div class="row">
			<div class="col-sm-7 mt-5">
				<img src="images/nutrisafe1.jpg" alt="picture">
	
			</div>
			<div class="col-sm-5 blue minisection">
				<h1 class="heading">NutriSafe</h1>
				<p class="typos text-white">Everything Food Safety. Safe food begins from purchase and storage to preparation</p>

				<button class="btn buttonLinks">More</button>
			</div>
		</div>
	</div>
					
					<!--Section 2 Card placed here-->


	<div class="container-fluid blue ">
		
		<div class="row">
			    <div>
					<h1 class="heading mt-5" style="margin-left: 550px;">Healthy Eating</h1>
				</div>
			<div class="col-sm-3"  style="margin-left: 150px;">

				<a href="facebook.com" target="_blank" class="cardDecoration">
					<div class="card links">
  					<img src="images/nutrisafe2.jpg" class="card-img-top" alt="Card picture">

 				 <div class="card-body">
  	  				<h5 class="card-title headingBlue">Cooking Tips</h5>
    				<p class="card-text typos">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    				
  				</div>
				</div>
			</a>
				
			</div>
			<div class="col-sm-3">
			<a href="facebook.com" target="_blank" class="cardDecoration">
				<div class="card links">
  					<img src="images/fruit.jpg" class="card-img-top" alt="Card picture">

 				    <div class="card-body">
  	  				  <h5 class="card-title headingBlue">Fruits, Anyone?</h5>
    				  <p class="card-text typos">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    				
  				    </div>
				</div>
			</a>
				
			</div>
			<div class="col-sm-3">
			<a href="facebook.com" target="_blank" class="cardDecoration">
				<div class="card links">
  					<img src="images/water.jpg" class="card-img-top" alt="Card picture">

 				 <div class="card-body">
  	  				<h5 class="card-title headingBlue">Water is Life</h5>
    				<p class="card-text typos">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    				
  				</div>
				</div>
			</a>	
			</div>
		</div>
		<button class="btn buttonLinks mb-5 mt-5"  style="margin-left: 550px;">Find Out More</button>
	</div>

				
								<!--Section 3-BMI CALC--->

								<!-- Form and Paragragh here-->

	<div class="container-fluid p-5" id="bmiBg">
		<div class="row">
			<div class="col-sm-6 bmi" id="bmiForm">
				<form>
  					<div class="mt-3">
    					<label for="bmiHeight" class="form-label headingBlue">Height</label>
    					<input type="text" class="form-control" placeholder="height in cm" id="bmiHeight">
    				</div>
    					
  					<div class="mt-3">
   						 <label for="bmiWeight" class="form-label headingBlue">Password</label>
    					<input type="text" class="form-control" placeholder="weight in kg" id="bmiWeight">
 					</div>
  						
  						<button type="submit" class="btn btn-outline buttonLinks mt-5 mb-3 center">Calculate</button>
				</form>
			
			</div>

			<div class="col-sm-4 p-5 bmi" id="bmiText">
				
				<h2 class="headingBlue">Body Mass Index (BMI)</h2>
				<hr>
				<p class="typos">
					To know your body mass index, just enter your height in metres, weight kilograms and click calculate
				</p>
				
			</div>
		</div>
	</div>

	<!--section 4- Healthy recipes with carousel-->

				<div class="container">
					
					<div class="row">
						<div class="col-sm-12">

							<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
						  	<div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="images/recipe6.jpg" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="images/recipe7.jpg" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="images/nutrisafe3.jpg" class="d-block w-100" alt="...">
						    </div>
						  	</div>
							</div>				
						</div>
						
					</div>
					<div class="row">
						<div class="col-sm-5 blue minisection2 mb-5">
							<h1 class="heading">When in need of recipes</h1>
							

							<button class="btn buttonLinks mb-3">More Recipes</button>
							
						</div>
						
					</div>
				</div>
    <!---index footer -->
<?php include_once ("indexfooter.php"); ?>