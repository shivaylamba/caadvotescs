var siteUrl=$("#siteUrl").attr('href');

$(document).on('click','.service-addtocart',function(){
	$("#pageloaddiv").fadeIn();
	var associate_service_id = $(this).attr('rel');
	var action = $(this).attr('data-action');	
	var frm = 'associate_service_id='+associate_service_id+'&action_type='+action;
	$.ajax({
		url: siteUrl+'controller/CommonController.php',
		type: 'POST',
		data: frm,
		success:function(result){
			cartQty();
		}
	});
});

$(document).on('click','.service-buynow',function(){
	$("#pageloaddiv").fadeIn();
	var associate_service_id = $(this).attr('rel');
	var action = $(this).attr('data-action');	
	var frm = 'associate_service_id='+associate_service_id+'&action_type='+action;
	$.ajax({
		url: siteUrl+'controller/CommonController.php',
		type: 'POST',
		data: frm,
		success:function(result){
			if (result.indexOf("1") > -1) {
				window.location.replace(siteUrl+"cart");
			} else if (result.indexOf("2") > -1) {
				alert("Please try again later.");
			}
			
		}
	});
});

$(document).on('click','.addto-wishlist',function(){
	$("#pageloaddiv").fadeIn();
	var associate_service_id = $(this).attr('rel');
	var action = $(this).attr('data-action');	
	var frm = 'associate_service_id='+associate_service_id+'&action_type='+action;
	$.ajax({
		url: siteUrl+'controller/CommonController.php',
		type: 'POST',
		data: frm,
		success:function(result){
			$("#pageloaddiv").fadeOut();
		}
	});
});

function cartQty(){
	$.ajax({
		url: siteUrl+'cart-data/cart-qty.php',
		type: 'GET',
		success:function(result){
			$("#pageloaddiv").fadeOut();
			$(".cart_qty").html(result);
		}
	});
}


$(function(){
	$('.ezee-service-search').comboSelect();
      $('.js-select').change(function(e, v){
          $('.idx').text(e.target.selectedIndex)
          $('.val').text(e.target.value)
      });
	  $('.js-select-open').click(function(e){
        $('.js-select').focus()
        e.preventDefault();
      });

      $('.js-select-close').click(function(e){
        $('.js-select').trigger('comboselect:close')
        e.preventDefault();
      });

});


$(document).on("click",".service-compare",function(){
	$(this).addClass('remove-compare compare-active');
	$(this).removeClass('service-compare');
	$(this).html('<i class="fa fa-check-square-o" aria-hidden="true"></i> Compare');	
	var checked_checkboxes = $(".compare-active").length;	
	if(parseInt(checked_checkboxes)>=parseInt(2) && parseInt(checked_checkboxes)<parseInt(4)){
		$(".service-compare-btn").html('<span class="compare-checked-service" data-toggle="modal" data-target="#myModal_1"><i class="fa fa-exchange" aria-hidden="true"></i> Click to Compare</span>');
	}else if(parseInt(checked_checkboxes)>=parseInt(2) && parseInt(checked_checkboxes)<=parseInt(3)){
		$(".service-compare-btn").html('<span class="compare-checked-service" data-toggle="modal" data-target="#myModal_1"><i class="fa fa-exchange" aria-hidden="true"></i> Click to Compare</span>');
	}else{
		$(".service-compare-btn").html('');
	}if(parseInt(checked_checkboxes)>=parseInt(4)){
		$(this).removeClass('remove-compare compare-active');
		$(this).addClass('service-compare');
		$(this).html('Add to Compare');
		alert("You have already selected 3 services.");
	}	    
});

$(document).on("click",".remove-compare",function(){
	$(this).removeClass('remove-compare compare-active');
	$(this).addClass('service-compare');
	$(this).html('Add to Compare');	
	var checked_checkboxes = $(".compare-active").length;	
	if(parseInt(checked_checkboxes)>=parseInt(2) && parseInt(checked_checkboxes)<parseInt(4)){
		$(".service-compare-btn").html('<span class="compare-checked-service" data-toggle="modal" data-target="#myModal_1"><i class="fa fa-exchange" aria-hidden="true"></i> Click to Compare</span>');
	}else{
		$(".service-compare-btn").html('');
	}	    
});


$(document).on('click','.compare-checked-service',function(){
	var checked_checkboxes = $(".compare-active").length;
    var associate_service_id = [];
            $.each($(".compare-active"), function(){            
                associate_service_id.push($(this).attr('data-associate-service'));
            });			
	var service_id = $("#products-div").attr('data-service');			
	if(parseInt(checked_checkboxes)>=parseInt(2) && parseInt(checked_checkboxes)<parseInt(4)){ 		
		$.ajax({
			url: siteUrl+'cart-data/compare-service.php',
			type: 'GET',
			data: 'associate_service_id='+associate_service_id+'&service_id='+service_id,
			success:function(result){
				$("#pageloaddiv").fadeOut();
				$("#compare-data").html(result);
			}
		});
	}
});



(function($) {
  "use strict";

  $.fn.numericFlexboxSorting = function(options) {
    const settings = $.extend({
      elToSort: "#products-div grid-products"
    }, options);

    const $select = this;
    const ascOrder = (a, b) => a - b;
    const descOrder = (a, b) => b - a;

    $select.on("change", () => {
      const selectedOption = $select.find("option:selected").attr("data-sort");
      sortColumns(settings.elToSort, selectedOption);
    });

    function sortColumns(el, opt) {
      const attr = "data-" + opt.split(":")[0];
      const sortMethod = (opt.includes("asc")) ? ascOrder : descOrder;
      const sign = (opt.includes("asc")) ? "" : "-";

      const sortArray = $(el).map((i, el) => $(el).attr(attr)).sort(sortMethod);

      for (let i = 0; i < sortArray.length; i++) {
        $(el).filter(`[${attr}="${sortArray[i]}"]`).css("order", sign + sortArray[i]);
      }
    }

    return $select;
  };
})(jQuery);

// call the plugin
$(".b-select").numericFlexboxSorting();