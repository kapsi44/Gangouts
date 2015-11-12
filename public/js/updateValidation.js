$(document).ready(function() {
	$("#update").validate({
	rules: {
		firstname:"required",
		lastname :"required",	
		username: {
			required : true,
			minlength:2
		},
		password : {
			required:true,
			minlength:5
		},
		confirm_password: {
			required:true,
			minlength:5,
			equalTo: "#password"
		},
		email: {
			required:true,
			email: true
		},
		mobile: {
			required:true,
			digits: true
		}
		},
		messages: {
				firstname:"Please enter your Firstname",
				lastname :"Please enter your Lastname",
				username :{
					required:"Please enter a username",
					minlength:"Your Username should consists of atleast 2 characters",
				},
				password :{
					required:"Please provide a password",
					minlength:"Your Password must be atleast 5 characters long",
				},
				confirm_password :{
					required:true,
					minlength:"Your Password should consists of atleast 5 characters",
					equalTo : password,
				},
				mobile :{
					required:"Please provide a 10 digit mobile number",
					digits:"mobile number should be in digits!! ",
				},
		}
	 })
});
