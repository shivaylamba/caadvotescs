var siteUrl=$("#siteUrl").attr('href');

$(document).on('click','.blog-like',function() {
	$("#pageloaddiv").fadeIn();
	var id = $(this).attr('rel');
	var like_value = $(this).attr('data-like');
	var action_type = "save-blog-likes";

	$.ajax({
		url : siteUrl+'controller/CommonController.php',
		type : 'POST',
		data:'id='+id+'&like_value='+like_value+'&action_type='+action_type,
		success : function(result) {
			$.ajax({
				url : siteUrl+'blog/blog-likes.php',
				type : 'GET',
				data:'id='+id,
				success : function(result){
					$("#pageloaddiv").fadeOut();
					$('.like-dislike-tag').html(result);
				}
			});
		}
	});
});


$(document).on('click','.review-contactfrm',function() {
	$("#pageloaddiv").fadeIn();
	var id = $(this).attr('rel');
	$.ajax({
		url : siteurl+'review-frm.php',
		type : 'GET',
		data:'id='+id,
		success : function(result) {
			$("#pageloaddiv").fadeOut(2000);
			$(".getin_touchfrm").html(result);
			$(document).bind('keypress', function(e) {
				if(e.keyCode==13){
					$('#isValidReview').trigger('click');
				}
			});
		}
	});
});
$(document).on('click','#isValidReview',function() {
		if (isValidReview()) {
			$("#pageloaddiv").fadeIn();
			var frm = $(".review-frm").serialize();
			$.ajax({
				url : siteurl+'review-mail.php',
				data : frm,
				type : 'GET',
				success : function(result) {
					$("#pageloaddiv").fadeOut(2000);
					$('#msg_contactsend').hide();
					if (result.indexOf("done") > -1) {
						$(".Sign_up_right").html("<div class='spacer'></div></div><div class='spacer'></div><div class='success_message'><h2>Thank you</h2><h6>Your review has been successfully submitted.</h6></div><div class='spacer'></div><div class='spacer'></div><div class='spacer'></div>");
					} else if (result.indexOf("fail") > -1) {
						$('#msg_contactsend').show();
						$('#msg_contactsend').html("Please try again later.");
					}
				}
			});
		}
	});
	
function isValidReview() {
	var contact_name = $("input[name='contact_name']").val();
	var contact_email = $("input[name='contact_email']").val();
	var contact_msg = $("textarea[name='contact_msg']").val();
	var valid = true;
	
	$(".message").css("color", "red");
	$(".message").html("&nbsp;");
	$(".message").css("font-size", "10px");
	$(".message").css("margin", "0");
	$(".message").css("padding", "0");
	$(".message").hide();
	$("textarea[name='contact_msg']").css("height","70px");
	if (contact_name.length == 0) {
		valid = false;
		$("#msg_contact_name").html('Please enter name');
		$("#msg_contact_name").show();
	}if (contact_email.length == 0 || isEmailValidate(contact_email)==false) {
		valid = false;
		$("#msg_contact_email").html('Please enter email');
		$("#msg_contact_email").show();
	}if (contact_msg.length == 0) {
		valid = false;
		$("#msg_contact_msg").html('Please enter msg');
		$("#msg_contact_msg").show();
	}
	return valid;
}

