$(document).ready(function() {
	$("#signupForm").validate({
	ignore: ":hidden:not(.selectpicker)",
	//ignore: ":hidden:not(.hidden)",
	rules: {
		firstname:"required",
		lastname :"required",	
		username: {
			required : true,
			minlength:5
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
		},
		bloodGroup:{
			required: true,
		},
		year:{
			required: true,
		},
		qualifications:{
			required: true,
		},
		gender:{
			required:true,
		},
		terms:{
			required:true,
		},
		interest:{
			required:true,
		}
		},
		messages: {
				firstname:"*Enter your Firstname",
				lastname :"*Enter your Lastname",
				bloodGroup: {
					required: "*Select your Blood Group",
				},
				year: {
					required: "*Select your birthday",
				},
				qualifications: {
					required: "*Select your qualifications",
				},
				gender: {
					required: "*Select your Gender",
				},
				interest: {
					required: "*Select your interests",
				},
				username :{
					required:"*Enter a username",
					minlength:"Your Username should consists of atleast 5 characters",
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
				email:{
					required: "*Provide your Email",
					email: "You should have a valid email",
				},
				terms:"Please Agree the terms",
				mobile :{
					required:"Please provide a 10 digit mobile number",
					digits:"Mobile number should be in digits!! ",
				},

		}
	 })
});
