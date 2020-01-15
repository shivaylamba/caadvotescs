var siteUrl = $("#siteUrl").attr('href');

$(document).on('click',"#authenticateClient",function() {
	if (authenticateClient()) {
		$("#pageloaddiv").fadeIn();
		var frm = $("#register-frm").serialize();
		var action_type = $("#register-frm").attr('data-action');
		$.ajax({
			url : siteUrl+'controller/CommonController.php',
			type : 'POST',
			data : frm+'&action_type='+action_type,
			success : function(result) {
				$("#pageloaddiv").fadeOut();
				$(".message").hide();
				if (result.indexOf("1") > -1) {
					$("#msgemail").show();
					$("#msgemail").html("Email-Id already exist.");
				}else if (result.indexOf("2") > -1) {
					$("#msgmobile").show();
					$("#msgmobile").html("Mobile no. already exist.");
				}else if (result.indexOf("3") > -1) {
					$(".register-form").html("<div class='spacer'></div></div><div class='spacer'></div><div class='success_message'><h2>Thank you</h2><h6>You are successfully registered. Please Check your mail to activate your account.</h6></div><div class='spacer'></div><div class='spacer'></div><div class='spacer'></div>");
				}else if (result.indexOf("4") > -1) {
					$("#msgemail").show();
					$("#msgemail").html("Please try again later.");
				}
			}
		});
	}	
});


function authenticateClient() {

	var valid = true;
	var fname = $("input[name='fname']").val();
	var lname = $("input[name='lname']").val();
	var email = $("input[name='email']").val();
	var mobile = $("input[name='mobile']").val();
	var password = $("input[name='password']").val();
	var c_password = $("input[name='c_password']").val();
	var state = $("select[name='state']").val();
	var city = $("select[name='city']").val();

	$(".message").html("&nbsp;");
	$(".message").css("color", "red");
	$(".message").css("font-size", "12px");
		$(".message").hide();
	if (fname.length == 0) {
		valid = false;
		$("#msgfname").html("Enter first name");
		$("#msgfname").show();
	}if (lname.length == 0) {
		valid = false;
		$("#msglname").html("Enter last name");
		$("#msglname").show();
	}if (email.length == 0 || checkEmail(email) == false) {
		valid = false;
		$("#msgemail").html("Enter valid email id");
		$("#msgemail").show();
	}if (mobile.length == 0 || checkMobile(mobile) == false) {
		valid = false;
		$("#msgmobile").html("Enter 10 digit mobile no.");
		$("#msgmobile").show();
	}if (password.length == 0) {
		valid = false;
		$("#msgpassword").html("Enter password");
		$("#msgpassword").show();
	} else if (password.length <= 7) {
		valid = false;
		$("#msgpassword").html("Enter password to short");
		$("#msgpassword").show();
	}if (c_password.length == 0) {
		valid = false;
		$("#msgcpassword").html("Please enter password");
		$("#msgcpassword").show();
	}else if (password != c_password) {
		valid = false;
		$("#msgcpassword").html("Password mis match");
		$("#msgcpassword").show();
	}if (state == 0) {
		valid = false;
		$("#msgstate").html("Select state");
		$("#msgstate").show();
	}if (city == 0) {
		valid = false;
		$("#msgcity").html("Select city");
		$("#msgcity").show();
	}
	return valid;
}


$(document).on('click',"#authenticateLogin",function() {
	if (authenticateLogin()) {
		$("#pageloaddiv").fadeIn();
		var frm = $("#login-frm").serialize();
		var action_type = $("#login-frm").attr('data-action');
		$.ajax({
			url : siteUrl+'controller/CommonController.php',
			type : 'POST',
			data : frm+'&action_type='+action_type,
			success : function(result) {
				$("#pageloaddiv").fadeOut();
				$(".message").hide();
				if (result.indexOf("1") > -1) {
					window.location.replace(siteUrl+"cart");
				}else if (result.indexOf("2") > -1) {
					$("#msgemail").show();
					$("#msgemail").html("Invalid email & password.");
				}
			}
		});
	}	
});

function authenticateLogin() {

	var valid = true;
	var email = $("input[name='email']").val();
	var password = $("input[name='password']").val();

	$(".message").html("&nbsp;");
	$(".message").css("color", "red");
	$(".message").css("font-size", "12px");
		$(".message").hide();
	if (email.length == 0 || checkEmail(email) == false) {
		valid = false;
		$("#msgemail").html("Enter valid email id");
		$("#msgemail").show();
	}if (password.length == 0) {
		valid = false;
		$("#msgpassword").html("Enter password");
		$("#msgpassword").show();
	} else if (password.length <= 7) {
		valid = false;
		$("#msgpassword").html("Enter password to short");
		$("#msgpassword").show();
	}
	return valid;
}

$(document).on('click',"#authenticateforgotPassword",function() {
	if (authenticateforgotPassword()) {
		$("#pageloaddiv").fadeIn();
		var frm = $("#forgot-password-frm").serialize();
		var action_type = $("#forgot-password-frm").attr('data-action');
		$.ajax({
			url : siteUrl+'controller/CommonController.php',
			type : 'POST',
			data : frm+'&action_type='+action_type,
			success : function(result) {
				$("#pageloaddiv").fadeOut();
				$(".message").hide();
				if (result.indexOf("1") > -1) {
					$(".register-form").html("<div class='spacer'></div></div><div class='spacer'></div><div class='success_message'><h2>Confidential</h2><h6>Your login details has been sent to your registered e-mail.</h6><h6>Please log in to view.</h6></div><div class='spacer'></div><div class='spacer'></div><div class='spacer'></div>");
				}else if (result.indexOf("2") > -1) {
					$("#msgemail").show();
					$("#msgemail").html("Invalid Email-Id.");
				}
			}
		});
	}	
});

function authenticateforgotPassword() {

	var valid = true;
	var email = $("input[name='email']").val();

	$(".message").html("&nbsp;");
	$(".message").css("color", "red");
	$(".message").css("font-size", "12px");
	$(".message").hide();
	if (email.length == 0 || checkEmail(email) == false) {
		valid = false;
		$("#msgemail").html("Enter valid email id");
		$("#msgemail").show();
	}
	return valid;
}


$(document).on('click',"#authenticateUpdateProfile",function() {
	if (authenticateUpdateProfile()) {
		$("#pageloaddiv").fadeIn();
		var frm = $("#profile-frm").serialize();
		$.ajax({
			url : siteUrl+'controller/ClientController.php',
			type : 'POST',
			data : frm,
			success : function(result) {
				$("#pageloaddiv").fadeOut();
				$(".message").hide();
				if (result.indexOf("1") > -1) {
					window.location.replace(siteUrl+"dashboard/edit-profile");
				}else if (result.indexOf("2") > -1) {
					$("#msgemail").show();
					$("#msgemail").html("Please try again later.");
				}
			}
		});
	}	
});


function authenticateUpdateProfile() {

	var valid = true;
	var fname = $("input[name='fname']").val();
	var lname = $("input[name='lname']").val();	
	var password = $("input[name='password']").val();
	var state = $("select[name='state']").val();
	var city = $("select[name='city']").val();
	var address = $("textarea[name='address']").val();
	var pincode = $("input[name='pincode']").val();
	
	$(".message").html("&nbsp;");
	$(".message").css("color", "red");
	$(".message").css("font-size", "12px");
		$(".message").hide();
	if (fname.length == 0) {
		valid = false;
		$("#msgfname").html("Enter first name");
		$("#msgfname").show();
	}if (lname.length == 0) {
		valid = false;
		$("#msglname").html("Enter last name");
		$("#msglname").show();
	}if (password.length == 0) {
		valid = false;
		$("#msgpassword").html("Enter password");
		$("#msgpassword").show();
	} else if (password.length <= 7) {
		valid = false;
		$("#msgpassword").html("Enter password to short");
		$("#msgpassword").show();
	}if (state == 0) {
		valid = false;
		$("#msgstate").html("Select state");
		$("#msgstate").show();
	}if (city == 0) {
		valid = false;
		$("#msgcity").html("Select city");
		$("#msgcity").show();
	}if (address.length == 0) {
		valid = false;
		$("#msgaddress").html("Enter address");
		$("#msgaddress").show();
	}if (pincode.length == 0) {
		valid = false;
		$("#msgpincode").html("Enter pincode");
		$("#msgpincode").show();
	}
	return valid;
}

function checkEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}
function checkMobile(mobile) {
	var contactRegexStr = /^\d{10}$/;
	var isvalid = contactRegexStr.test(mobile);
	return isvalid;
}