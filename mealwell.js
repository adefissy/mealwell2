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