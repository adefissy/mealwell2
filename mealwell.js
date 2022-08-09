$(document).ready(function(){
		$('#loginBtn').click(function(){
	
			var email = $('#emailLogin').val();
			var pswd = $('#pswd').val();
	
			if (email == "" || pswd == "") {
	
				alert('Please input all fields to login');
				
			}
	
	
		});
	});
	
	$(document).ready(function(){
		$('#signBtn-').click(function(){
			var firstname = $('#fname').val();
			var lastname = $('#lname').val();
	
			if (firstname == "" || lastname == "") {
	
				alert('Please fill both firstname and lastname');
				
			}
		});
	
	});
	
	
	function calcBMI(){


			// alert("available");
		  
		 	var wt = document.getElementById("bmiWeight").value;   //wt for weight
		  
		 	var ht = document.getElementById("bmiHeight").value;   //ht for height
			   var result = document.getElementById("result");
		  
		   
		if(ht == ""){
		  result.innerHTML = "Provide a valid Height!";
		  
		   }else if(wt == ""){
		  
			result.innerHTML= "Provide a valid Weight!";
		  
	  }else{
		  
			 let bmi = (wt / ((ht * ht)  / 10000)).toFixed(2);
		  
			 if (bmi < 18.5) {
			 result.innerHTML = bmi + " - Underweight";
		   } else if (bmi < 25) {
			 result.innerHTML = bmi + " - Normal weight";
	   } else if (bmi < 30) {
		 	 result.innerHTML = bmi + " - Pre-obesity";
		   } else if (bmi < 35) {
		 	 result.innerHTML = bmi + " - Obesity class I";
		   } else if (bmi < 40) {
		 	 result.innerHTML = bmi + " - Obesity class II";
		  } else {
		 	 result.innerHTML = bmi + " - Obesity class III";
		   }
		   return false;
		  
		   }
		   
		  
		   
		   
		  }

// $(document).ready(function(){

// 	$("#btnCalc").click(function(){
// 		// alert ("yes");

		
// 		let  wt = parseInt(document.getElementById("bmiWeight").value),  //wt for weight
  
// 	   ht = parseInt(document.getElementById("bmiHeight").value),    //ht for height
// 	   result = document.getElementById("result");

// 	});

// });
  