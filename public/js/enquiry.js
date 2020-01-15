var siteUrl = $("#siteUrl").attr('href');

function findService(obj){
	$("#pageloaddiv").fadeIn();
	var category = obj.value;
	$.ajax({
		url : siteUrl+'findService.php',
		data : 'category='+category,
		type : 'POST',
		success : function(result) {
			$("#pageloaddiv").fadeOut();
			$("#lead_subcat").html(result);	
		}
	});
}

function findCity(obj){
	$("#pageloaddiv").fadeIn();
	var state = obj.value;
	$.ajax({
		url : siteUrl+'cityListByState.php',
		data : 'state='+state,
		type : 'POST',
		success : function(result) {
			$("#pageloaddiv").fadeOut();
			$("#city-data").html(result);	
			$(".service-city-data").html(result);
		}
	});
}


$(document).on('click','#authenticateLeadEnquiry',function() {
	if (authenticateLeadEnquiry()) {
		$("#pageloaddiv").fadeIn();
		var frm = $("#lead-frm").serialize();
		$.ajax({
			url : siteUrl+'controller/EnquiryController.php',
			data : frm,
			type : 'POST',
			success : function(result) {
				$("#pageloaddiv").fadeOut();
				if (result.indexOf("1") > -1) {
					$(".quick-call-inner").html("<div class='success_message'><h2>Thank you</h2><h6 style='color:#fff !important;'>Your quotation has been successfully delivered. <br>Please check you e-mail. <br><br>Questions? Call us at +91 844 7037 100<br>Our Consultant would love to serve you the best. </h6></div>");
				} else if (result.indexOf("2") > -1) {
					$('#msglead_category').show();
					$('#msglead_category').html("Please try again later.");
				}
			}
		});
	}
});
	
function authenticateLeadEnquiry() {
	var lead_category = $("select[name='lead_category']").val();
	var lead_subcat = $("select[name='lead_subcat']").val();
	var lead_name = $("input[name='lead_name']").val();
	var lead_email = $("input[name='lead_email']").val();
	var lead_mobile = $("input[name='lead_mobile']").val();
	var lead_state = $("select[name='lead_state']").val();
	var lead_city = $("select[name='lead_city']").val();
	var valid = true;
	
	$(".message").css("color", "red");
	$(".message").html("&nbsp;");
	$(".message").css("font-size", "10px");
	$(".message").css("margin-top", "-20px");
	$(".message").css("padding", "0");
	$(".message").css("float", "right");
	$(".message").hide();
	
	if (lead_category == 0) {		
		valid = false;
		$("#msglead_category").html('Select category');
		$("#msglead_category").show();
	}if (lead_subcat == 0) {		
		valid = false;
		$("#msglead_subcat").html('Select service');
		$("#msglead_subcat").show();
	}if (lead_name.length == 0) {
		valid = false;
		$("#msglead_name").html('Enter name');
		$("#msglead_name").show();
	}if (lead_email.length == 0 || validateEmail(lead_email)==false) {
		valid = false;
		$("#msglead_email").html('Enter email');
		$("#msglead_email").show();
	}if (lead_mobile.length == 0 || validateNumber(lead_mobile) == false) {
		valid = false;
		$("#msglead_mobile").html('Enter mobile');
		$("#msglead_mobile").show();
	}if (lead_state == 0) {		
		valid = false;
		$("#msglead_state").html('Select state');
		$("#msglead_state").show();
	}if (lead_city == 0) {		
		valid = false;
		$("#msglead_city").html('Select city');
		$("#msglead_city").show();
	}
	return valid;
}

$(document).on('click','#authenticateServiceLeadEnquiry',function() {
	if (authenticateServiceLeadEnquiry()) {
		$("#pageloaddiv").fadeIn();
		
		var lead_type = $("input[name='lead_type']").val();
		var associate_service_id = $("input[name='associate_service_id']").val();
		var associate_id = $("input[name='associate_id']").val();
		var lead_subcat = $("input[name='lead_subcat']").val();
		var action_type = $("input[name='action_type']").val();		
		var lead_name = $("input[name='service_lead_name']").val();
		var lead_email = $("input[name='service_lead_email']").val();
		var lead_mobile = $("input[name='service_lead_mobile']").val();	
		var lead_state = $("select[name='service_lead_state']").val();
		var lead_city = $("select[name='service_lead_city']").val();	
		
		var frm = 'action_type='+action_type+'&lead_type='+lead_type+'&associate_service_id='+associate_service_id+'&associate_id='+associate_id+'&lead_subcat='+lead_subcat+'&lead_name='+lead_name+'&lead_email='+lead_email+'&lead_mobile='+lead_mobile+'&lead_state='+lead_state+'&lead_city='+lead_city;
		
		$.ajax({
			url : siteUrl+'controller/EnquiryController.php',
			data : frm,
			type : 'POST',
			success : function(result) {
				$("#pageloaddiv").fadeOut();				
				if (result.indexOf("1") > -1) {
					$("#call-back-msg").html("<div class='success_message'><h2>Thank you</h2><h6 style='color:#000 !important;'>Your quotation has been successfully delivered. <br>Please check you e-mail. <br><br>Questions? Call us at +91 844 7037 100<br>Our Consultant would love to serve you the best. </h6></div>");
				} else if (result.indexOf("2") > -1) {
					$('#msgservice_lead_name').show();
					$('#msgservice_lead_name').html("Please try again later.");
				}
			}
		});
	}
});
	
function authenticateServiceLeadEnquiry() {
	var lead_name = $("input[name='service_lead_name']").val();
	var lead_email = $("input[name='service_lead_email']").val();
	var lead_mobile = $("input[name='service_lead_mobile']").val();
	var lead_state = $("select[name='service_lead_state']").val();
	var lead_city = $("select[name='service_lead_city']").val();	
	var valid = true;
	
	$(".message").css("color", "red");
	$(".message").html("&nbsp;");
	$(".message").css("font-size", "10px");
	$(".message").css("margin-top", "-8px");
	$(".message").css("padding", "0");
	$(".message").css("position", "absolute");
	$(".message").hide();
	
	if (lead_name.length == 0) {
		valid = false;
		$("#msgservice_lead_name").html('Enter name');
		$("#msgservice_lead_name").show();
	}if (lead_email.length == 0 || validateEmail(lead_email)==false) {
		valid = false;
		$("#msgservice_lead_email").html('Enter email');
		$("#msgservice_lead_email").show();
	}if (lead_mobile.length == 0 || validateNumber(lead_mobile) == false) {
		valid = false;
		$("#msgservice_lead_mobile").html('Enter mobile');
		$("#msgservice_lead_mobile").show();
	}if (lead_state == 0) {
		valid = false;
		$("#msgservice_lead_state").html('Select state');
		$("#msgservice_lead_state").show();
	}if (lead_city == 0) {
		valid = false;
		$("#msgservice_lead_city").html('Select city');
		$("#msgservice_lead_city").show();
	}
	return valid;
}




$(document).on('click','#authenticateServiceLeadEnquiryCopy',function() {
	if (authenticateServiceLeadEnquiryCopy()) {
		$("#pageloaddiv").fadeIn();
		
		var lead_type = $("input[name='lead_type']").val();
		var associate_service_id = $("input[name='associate_service_id']").val();
		var associate_id = $("input[name='associate_id']").val();
		var lead_subcat = $("input[name='lead_subcat']").val();
		var action_type = $("input[name='action_type']").val();		
		var lead_name = $("input[name='service_lead_name_copy']").val();
		var lead_email = $("input[name='service_lead_email_copy']").val();
		var lead_mobile = $("input[name='service_lead_mobile_copy']").val();	
		var lead_state = $("select[name='service_lead_state_copy']").val();
		var lead_city = $("select[name='service_lead_city_copy']").val();
		
		var frm = 'action_type='+action_type+'&lead_type='+lead_type+'&associate_service_id='+associate_service_id+'&associate_id='+associate_id+'&lead_subcat='+lead_subcat+'&lead_name='+lead_name+'&lead_email='+lead_email+'&lead_mobile='+lead_mobile+'&lead_state='+lead_state+'&lead_city='+lead_city;
		
		$.ajax({
			url : siteUrl+'controller/EnquiryController.php',
			data : frm,
			type : 'POST',
			success : function(result) {
				$("#pageloaddiv").fadeOut();				
				if (result.indexOf("1") > -1) {
					$("#call-back-msg_copy").html("<div class='success_message'><h2>Thank you</h2><h6 style='color:#000 !important;'>Your quotation has been successfully delivered. <br>Please check you e-mail. <br><br>Questions? Call us at +91 844 7037 100<br>Our Consultant would love to serve you the best. </h6></div>");
				} else if (result.indexOf("2") > -1) {
					$('#msgservice_lead_name').show();
					$('#msgservice_lead_name').html("Please try again later.");
				}
			}
		});
	}
});
	
function authenticateServiceLeadEnquiryCopy() {
	var lead_name = $("input[name='service_lead_name_copy']").val();
	var lead_email = $("input[name='service_lead_email_copy']").val();
	var lead_mobile = $("input[name='service_lead_mobile_copy']").val();
	var lead_state = $("select[name='service_lead_state_copy']").val();
	var lead_city = $("select[name='service_lead_city_copy']").val();
	var valid = true;
	
	$(".message").css("color", "red");
	$(".message").html("&nbsp;");
	$(".message").css("font-size", "10px");
	$(".message").css("margin-top", "-8px");
	$(".message").css("padding", "0");
	$(".message").css("position", "absolute");
	$(".message").hide();
	
	if (lead_name.length == 0) {
		valid = false;
		$("#msgservice_lead_name_copy").html('Enter name');
		$("#msgservice_lead_name_copy").show();
	}if (lead_email.length == 0 || validateEmail(lead_email)==false) {
		valid = false;
		$("#msgservice_lead_email_copy").html('Enter email');
		$("#msgservice_lead_email_copy").show();
	}if (lead_mobile.length == 0 || validateNumber(lead_mobile) == false) {
		valid = false;
		$("#msgservice_lead_mobile_copy").html('Enter mobile');
		$("#msgservice_lead_mobile_copy").show();
	}if (lead_state == 0) {
		valid = false;
		$("#msgservice_lead_state_copy").html('Select state');
		$("#msgservice_lead_state_copy").show();
	}if (lead_city == 0) {
		valid = false;
		$("#msgservice_lead_city_copy").html('Select city');
		$("#msgservice_lead_city_copy").show();
	}
	return valid;
}

$(document).on('click','#authenticateFooterLeadEnquiry',function() {
	if (authenticateFooterLeadEnquiry()) {
		$("#pageloaddiv").fadeIn();
		var frm = $("#lead-frm").serialize();
		$.ajax({
			url : siteUrl+'controller/EnquiryController.php',
			data : frm,
			type : 'POST',
			success : function(result) {
				$("#pageloaddiv").fadeOut();
				if (result.indexOf("1") > -1) {
					$(".quick-call-inner").html("<div class='success_message'><h2>Thank you</h2><h6 style='color:#fff !important;'>Your quotation has been successfully delivered. <br>Please check you e-mail. <br><br>Questions? Call us at +91 844 7037 100<br>Our Consultant would love to serve you the best. </h6></div>");
				} else if (result.indexOf("2") > -1) {
					$('#msglead_category').show();
					$('#msglead_category').html("Please try again later.");
				}
			}
		});
	}
});
	
function authenticateFooterLeadEnquiry() {
	var lead_category = $("select[name='lead_category']").val();
	var lead_subcat = $("select[name='lead_subcat']").val();
	var lead_name = $("input[name='lead_name']").val();
	var lead_email = $("input[name='lead_email']").val();
	var lead_mobile = $("input[name='lead_mobile']").val();
	var valid = true;
	
	$(".message").css("color", "#fff");
	$(".message").html("&nbsp;");
	$(".message").css("font-size", "10px");	
	$(".message").css("padding", "0");
	$(".message").css("float", "left");
	$(".message").hide();
	
	if (lead_category == 0) {		
		valid = false;
		$("#msglead_category").html('Select category');
		$("#msglead_category").show();
	}if (lead_subcat == 0) {		
		valid = false;
		$("#msglead_subcat").html('Select service');
		$("#msglead_subcat").show();
	}if (lead_name.length == 0) {
		valid = false;
		$("#msglead_name").html('Enter name');
		$("#msglead_name").show();
	}if (lead_email.length == 0 || validateEmail(lead_email)==false) {
		valid = false;
		$("#msglead_email").html('Enter email');
		$("#msglead_email").show();
	}if (lead_mobile.length == 0 || validateNumber(lead_mobile) == false) {
		valid = false;
		$("#msglead_mobile").html('Enter mobile');
		$("#msglead_mobile").show();
	}
	return valid;
}

$(document).on('click','#authenticateAssociateForm',function() {
	if (authenticateAssociateForm()) {
		$("#pageloaddiv").fadeIn();
		var frm = $("#associate-frm").serialize();		
		$.ajax({
			url : siteUrl+'controller/EnquiryController.php',
			data : frm,
			type : 'POST',
			success : function(result) {
				$("#pageloaddiv").fadeOut();
				if (result.indexOf("1") > -1) {
					$('#msgassociate_email').show();
					$('#msgassociate_email').html("Email already exist");
				}else if (result.indexOf("2") > -1) {
					$(".quick-call-inner-form").html("<div class='success_message'><h2>Thank you</h2><h6 style='color:#fff !important;'>Your enquiry has been successfully submitted. <br>Our relationship manager will get in touch with you <br>to proceed further once evaluation is completed.<br>Generally it takes 7 business days.<br><br>Questions? Call us at 844 7037 100</h6></div>");
				} else if (result.indexOf("3") > -1) {
					$('#msgassociate_profession').show();
					$('#msgassociate_profession').html("Please try again later.");
				}
			}
		});
	}
});
	
function authenticateAssociateForm() {
	var category = $("select[name='associate_category']").val();
	var profession = $("select[name='associate_profession']").val();
	var state = $("select[name='associate_state']").val();
	var city = $("select[name='associate_city']").val();
	var name = $("input[name='associate_name']").val();
	var email = $("input[name='associate_email']").val();
	var mobile = $("input[name='associate_mobile']").val();
	var valid = true;
	
	$(".message").css("color", "red");
	$(".message").html("&nbsp;");
	$(".message").css("font-size", "10px");
	$(".message").css("margin-top", "-20px");
	$(".message").css("padding", "0");
	$(".message").css("float", "right");
	$(".message").hide();
	
	if (category == 0) {		
		valid = false;
		$("#msgassociate_category").html('Select category');
		$("#msgassociate_category").show();
	}if (profession == 0) {		
		valid = false;
		$("#msgassociate_profession").html('Select profession');
		$("#msgassociate_profession").show();
	}if (state == 0) {		
		valid = false;
		$("#msgassociate_state").html('Select state');
		$("#msgassociate_state").show();
	}if (city == 0) {		
		valid = false;
		$("#msgassociate_city").html('Select city');
		$("#msgassociate_city").show();
	}if (name.length == 0) {
		valid = false;
		$("#msgassociate_name").html('Enter name');
		$("#msgassociate_name").show();
	}if (email.length == 0 || validateEmail(email)==false) {
		valid = false;
		$("#msgassociate_email").html('Enter valid email ');
		$("#msgassociate_email").show();
	}if (mobile.length == 0 || validateNumber(mobile) == false) {
		valid = false;
		$("#msgassociate_mobile").html('Enter valid 10 digit mobile no.');
		$("#msgassociate_mobile").show();
	}
	return valid;
}


$(document).on('click','#isValidContactEnquiry',function() {
		if (isValidContactEnquiry()) {
		    $("#pageloaddiv").fadeIn();
			var frm = $(".frm-contact").serialize();
			$.ajax({
				url : siteUrl+'controller/EnquiryController.php',
				data : frm,
				type : 'POST',
				success : function(result) {
					
					$("#pageloaddiv").fadeOut();
					if (result.indexOf("1") > -1) {
						$("#contact-msg").html("<div class='success_message'><h2>Thank you</h2><h6 style='color:#fff !important;'>Your enquiry has been successfully submitted. Our Relationship Manager will contact you soon.</h6></div>");
					} else if (result.indexOf("2") > -1) {
						$('#msg_contact_email').show();
						$('#msg_contact_email').html("Please try again later.");
					}
				}
			});
		}
	});
	
function isValidContactEnquiry() {
	var contact_name = $("input[name='contact_name']").val();
	var contact_email = $("input[name='contact_email']").val();
	var contact_mobile = $("input[name='contact_mobile']").val();
	var contact_msg = $("textarea[name='contact_msg']").val();
	var valid = true;
	
	$(".message").css("color", "red");
	$(".message").html("&nbsp;");
	$(".message").css("font-size", "10px");
	$(".message").css("margin-top", "-20px");
	$(".message").css("padding", "0");
	$(".message").css("float", "right");
	$(".message").hide();
	$("textarea[name='contact_msg']").css("height","70px");
	if (contact_name.length == 0) {
		valid = false;
		$("#msg_contact_name").html('Please enter name');
		$("#msg_contact_name").show();
	}
	if (contact_email.length == 0 || validateEmail(contact_email)==false) {
		valid = false;
		$("#msg_contact_email").html('Please enter email');
		$("#msg_contact_email").show();
	}
	if (contact_mobile.length == 0 || validateNumber(contact_mobile) == false) {
		valid = false;
		$("#msg_contact_mobile").html('Please enter mobile');
		$("#msg_contact_mobile").show();
	}
	if (contact_msg.length == 0) {
		valid = false;
		$("#msg_contact_msg").html('Please enter msg');
		$("#msg_contact_msg").show();
	}
	return valid;
}



$(document).on('click','#authenticateReferEarnForm',function() {
	if (authenticateReferEarnForm()) {
		$("#pageloaddiv").fadeIn();
		var frm = $("#refer-earn-frm").serialize();		
		$.ajax({
			url : siteUrl+'controller/EnquiryController.php',
			data : frm,
			type : 'POST',
			success : function(result) {
				$("#pageloaddiv").fadeOut();
				if (result.indexOf("1") > -1) {
					$('#msgassociate_email').show();
					$('#msgassociate_email').html("Email already exist");
				}else if (result.indexOf("2") > -1) {
					$(".quick-call-inner-form").html("<div class='success_message'><h2>Thank you</h2><h6 style='color:#fff !important;'>Your enquiry has been successfully submitted. <br>Our relationship manager will get in touch with you <br>to proceed further once evaluation is completed.<br>Generally it takes 7 business days.<br><br>Questions? Call us at 844 7037 100</h6></div>");
				} else if (result.indexOf("3") > -1) {
					$('#msgassociate_profession').show();
					$('#msgassociate_profession').html("Please try again later.");
				}
			}
		});
	}
});
	
function authenticateReferEarnForm() {
	var profession = $("input[name='associate_profession']").val();
	var state = $("select[name='associate_state']").val();
	var city = $("select[name='associate_city']").val();
	var name = $("input[name='associate_name']").val();
	var email = $("input[name='associate_email']").val();
	var mobile = $("input[name='associate_mobile']").val();
	var valid = true;
	
	$(".message").css("color", "red");
	$(".message").html("&nbsp;");
	$(".message").css("font-size", "10px");
	$(".message").css("margin-top", "-20px");
	$(".message").css("padding", "0");
	$(".message").css("float", "right");
	$(".message").hide();
	
	if (profession.length == 0) {		
		valid = false;
		$("#msgassociate_profession").html('Enter profession');
		$("#msgassociate_profession").show();
	}if (state == 0) {		
		valid = false;
		$("#msgassociate_state").html('Select state');
		$("#msgassociate_state").show();
	}if (city == 0) {		
		valid = false;
		$("#msgassociate_city").html('Select city');
		$("#msgassociate_city").show();
	}if (name.length == 0) {
		valid = false;
		$("#msgassociate_name").html('Enter name');
		$("#msgassociate_name").show();
	}if (email.length == 0 || validateEmail(email)==false) {
		valid = false;
		$("#msgassociate_email").html('Enter valid email ');
		$("#msgassociate_email").show();
	}if (mobile.length == 0 || validateNumber(mobile) == false) {
		valid = false;
		$("#msgassociate_mobile").html('Enter valid 10 digit mobile no.');
		$("#msgassociate_mobile").show();
	}
	return valid;
}



$(document).on('click','#authenticateSubscription',function() {
	if (authenticateSubscription()) {
		$("#pageloaddiv").fadeIn();
		var frm = $("#subscribe-frm").serialize();		
		$.ajax({
			url : siteUrl+'controller/EnquiryController.php',
			data : frm,
			type : 'POST',
			success : function(result) {
				$("#pageloaddiv").fadeOut();
				if (result.indexOf("1") > -1) {
					$('#msgsubscribe_email').show();
					$('#msgsubscribe_email').html("Email already exist");
				}else if (result.indexOf("2") > -1) {
					$('#msgsubscribe_email').show();
					$("input[name='subscribe_email']").val('');
					$("#msgsubscribe_email").html("You have successfully subscribe our news letter.");
				} else if (result.indexOf("3") > -1) {
					$('#msgsubscribe_email').show();
					$('#msgsubscribe_email').html("Please try again later.");
				}
			}
		});
	}
});
	
function authenticateSubscription() {
	var email = $("input[name='subscribe_email']").val();
	var valid = true;
	
	$("#msgsubscribe_email").css("color", "red");
	$("#msgsubscribe_email").html("&nbsp;");
	$("#msgsubscribe_email").css("font-size", "10px");
	$("#msgsubscribe_email").css("padding", "0");
	$("#msgsubscribe_email").hide();
	
	if (email.length == 0 || validateEmail(email)==false) {
		valid = false;
		$("#msgsubscribe_email").html('Enter valid email ');
		$("#msgsubscribe_email").show();
	}
	return valid;
}

function headerAutoComplete() {
	var keyword = $('#header-service-search').val();
	$.ajax({
		url: siteUrl+'service_search.php',
		type: 'POST',
		data: {keyword:keyword},
		success:function(data){
			$('#header-service-search-list').show();
			$('#header-service-search-list').html(data);
			if(keyword==""){
				set_item();
			}
		}
	});
}
function homeAutoComplete() {
	var keyword = $('#home-service-search').val();
	$.ajax({
		url: siteUrl+'service_search.php',
		type: 'POST',
		data: {keyword:keyword},
		success:function(data){
			$('#home-service-search-list').show();
			$('#home-service-search-list').html(data);
			if(keyword==""){
				set_item();
			}
		}
	});
}
function set_item() {	
	$('#header-service-search-list').hide();
	$('#home-service-search-list').hide();
}

(function(){
  $('.menu-left').click(function(){
    $('header').toggleClass('active')
    $('.intro').toggleClass('active')
    $('section').toggleClass('active')
    $('#menu-left').toggleClass('active')
    $('footer').toggleClass('active')
  })
})();

$(document).on('click','#authenticatePopupEnquiry',function() {
	if (authenticatePopupEnquiry()) {
		$("#pageloaddiv").fadeIn();
		var frm = $("#popup-enquiryfrm").serialize();
		var thankyou_msg = $("input[name='thankyou_msg']").val();
		$.ajax({
			url : siteUrl+'controller/EnquiryController.php',
			data : frm,
			type : 'POST',
			success : function(result) {
				$("#pageloaddiv").fadeOut();
				if (result.indexOf("1") > -1) {
					$(".quick-popup-msg").html("<div class='spacer'></div><div class='spacer'></div><div class='spacer'></div><div class='spacer'></div><div class='spacer'></div><div class='success_message'><h2>Thank you</h2><h6>"+thankyou_msg+"</h6></div>");
				} else if (result.indexOf("2") > -1) {
					$('#messagevalidate').show();
					$('#messagevalidate').html("Please try again later.");
				}
			}
		});
	}
});
	
function authenticatePopupEnquiry() {
	var name = $("input[name='popup_enquiry_name']").val();
	var email = $("input[name='popup_enquiry_email']").val();
	var mobile = $("input[name='popup_enquiry_mobile']").val();
	var valid = true;
	
	$(".message").css("color", "red");
	$(".message").html("&nbsp;");
	$(".message").css("font-size", "10px");
	$(".message").css("margin-top", "-20px");
	$(".message").css("padding", "0");
	$(".message").css("float", "right");
	$(".message").hide();
	
	if (name.length == 0) {
		valid = false;
		$("#msgpopup_enquiry_name").html('Enter name');
		$("#msgpopup_enquiry_name").show();
	}if (email.length == 0 || validateEmail(email)==false) {
		valid = false;
		$("#msgpopup_enquiry_email").html('Enter email');
		$("#msgpopup_enquiry_email").show();
	}if (mobile.length == 0 || validateNumber(mobile) == false) {
		valid = false;
		$("#msgpopup_enquiry_mobile").html('Enter mobile');
		$("#msgpopup_enquiry_mobile").show();
	}
	return valid;
}


function validateEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}

function validateNumber(mobile) {
	var contactRegexStr = /^\d{10}$/;
	var isvalid = contactRegexStr.test(mobile);
	return isvalid;
}