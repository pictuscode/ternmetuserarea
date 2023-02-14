$(document).ready( function(){
	var margin_fix = $('.listing_base_head').height();
		$('.listing_base').css('margin-top',margin_fix);
	var margin_fixbottom = $('.bottom_next_continue ').height();
		$('.listing_base_inner').css('margin-bottom',margin_fixbottom+25);
	$('.drop_down_base .dropdown-menu').click(function(e) {
		e.stopPropagation();
	});
})
$(document).ready(function(){
	$(".lsread_more").click(function(){ 
	if($(this).attr("data-show")=="lsamentity_hide" || $(this).attr("data-show")=="lsrules_hide"){ 
		if($(this).attr('data-val')==0){
		$('.'+$(this).attr("data-show")).attr('style','display:inline-block !important');
		$(this).attr('data-val',1);
		$(this).html($(this).attr('data-hide-val'));
		}
		else{
			$('.'+$(this).attr("data-show")).attr('style','display:none !important');
			$(this).attr('data-val',0);
			$(this).html($(this).attr('data-show-val'));
		}
	}
	else{
	if($(this).attr('data-val')==0){
		$('.'+$(this).attr("data-show")+"-show").hide(1000);
		$('.'+$(this).attr("data-show")+"-hide").show(1000);
		$(this).attr('data-val',1);
		$(this).html($(this).attr('data-hide-val'));
	}
	else{
		$('.'+$(this).attr("data-show")+"-hide").hide(1000);
		$('.'+$(this).attr("data-show")+"-show").show(1000);
		$(this).attr('data-val',0);
		$(this).html($(this).attr('data-show-val'));
	}
	}
	})
})

$(document).on("click","#booking_step1_continue",function(){
	
  window.location.href=baseurl+"payment/book/whos-coming";

});	
$(document).on("click","#booking_step2_continue",function(){
	
 var message=$("#messagebox").val();
  $("#messagebox").css("border","1px solid #eaeaea");
 if(message==""){
	 $("#messagebox").css("border","1px solid red");
	 $("#messagebox").focus();
	 return false;
 }
 var ajax_data={"message":message};
 ajax_data[csrf_key]=csrf_value;
 $.post(baseurl+"site/product/ajax_booking_check",ajax_data,function(data){ 
							  var data=JSON.parse(data);
							  if(data.status==1){
							     window.location.href=baseurl+"payment/book/confirm-and-pay";
							  }
							  else {
								 window.location.href=baseurl;
							  }
							 
							});

});	

$(document).on("change","#payment_type",function(){
	
  if($(this).val()=="Stripe"){
	  $("#paypal_payment_form").slideUp('fast');
	  $("#stripe_payment_form").slideDown('fast');
	  $("#paybtn").html(pay_creditcard);
  }
  else if($(this).val()=="Paypal"){
	  $("#stripe_payment_form").slideUp('fast');
	  $("#paybtn").html(pay_paypal);
	  
  }
  else {
	  $("#stripe_payment_form").slideUp('fast');
	  $("#paybtn").html(pay);
	  
  }

});	
$(document).on("click","#paybtn",function(){
	
 var payment_type=$("#payment_type").val();
 if(payment_type==""){
	$("#payment_type").focus(); return false;
 }
 if(payment_type=="Stripe"){
	 $("#stripe_payment_form").submit();
 }
 if(payment_type=="Paypal"){
	 window.location.href=baseurl+"site/product/booking_confirm_paypal";
 }
 

});	

$(document).on("click","#request_paybtn",function(){
	
  window.location.href=baseurl+"site/product/booking_confirm_request_book";
 

});

$(document).on("change","#payment_type_request_book",function(){
	
  if($(this).val()=="Stripe"){
	  $("#paypal_payment_form_request").slideUp('fast');
	  $("#stripe_payment_form_request").slideDown('fast');
	  $("#paybtn_request_book").html(pay_creditcard);
  }
  else if($(this).val()=="Paypal"){
	  $("#stripe_payment_form_request").slideUp('fast');
	  $("#paybtn_request_book").html(pay_paypal);
	  
  }
  else {
	  $("#stripe_payment_form_request").slideUp('fast');
	  $("#paybtn_request_book").html(pay);
	  
  }

});	
$(document).on("click","#paybtn_request_book",function(){
	
 var payment_type=$("#payment_type_request_book").val();
 if(payment_type==""){
	$("#payment_type_request_book").focus(); return false;
 }
 if(payment_type=="Stripe"){
	 $("#stripe_payment_form_request").submit();
 }
 if(payment_type=="Paypal"){
	 var booking_id=$("#booking_id").val();
	 window.location.href=baseurl+"site/product/booking_confirm_paypal_request_book/"+booking_id;
 }
 

});	

(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
		
				
             $("#stripe_payment_form").validate({
                rules: {
                    number: {
                        required: true                       
                    },
                    exp_month: {
                        required: true                       
                    },
                    exp_year: {
                        required: true                       
                    },
                    cvc: {
                        required: true                       
                    }                    
				   },
                messages: {
                     
                     number: {
                        required: require_card_number
                    },
					 exp_month: {
                        required: require_card_month
                    },
					 exp_year: {
                        required: require_card_year
                    },
					 cvc: {
                        required: require_cvv
                    }
					},
                submitHandler: function(form) {
				    $('#paybtn').prop('disabled',true);
                    $.ajax(
						{   
							type: "POST",
							url: baseurl+'site/product/booking_confirm_stripe',
							dataType: "json",
							data: $('#stripe_payment_form').serialize(),
						    beforeSend:function(){ 
								$('#paybtn').html('<img src="'+baseurl+'images/site/sivaloader.gif" style="margin:0 auto;width:25;height:25px;">');
							   },
								success:function(e){ 
									if(e['error_new']!='')
										{
										swal(error,e['error_new'],'error');
										$('#paybtn').html(pay);	
										$('#paybtn').prop('disabled',false);
										}
										else
										{
										$('#paybtn').html('Success');	
										 swal({title: good_job, text: booked_successfully+"...", type: "success"},
										   function(){ 
												   location.href=baseurl+'trips';
											   }
										);
										}										
								
							},
							error: function(xhr, textStatus, errorThrown)
							{
								alert('ajax loading error... ... ');
								return false;
							}
						});
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);


(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
		
				
             $("#stripe_payment_form_request").validate({
                rules: {
                    number: {
                        required: true                       
                    },
                    exp_month: {
                        required: true                       
                    },
                    exp_year: {
                        required: true                       
                    },
                    cvc: {
                        required: true                       
                    }                    
				   },
                messages: {
                     
                     number: {
                        required: require_card_number
                    },
					 exp_month: {
                        required: require_card_month
                    },
					 exp_year: {
                        required: require_card_year
                    },
					 cvc: {
                        required: require_cvv
                    }
					},
                submitHandler: function(form) {
				    $('#paybtn_request_book').prop('disabled',true);
					var booking_id=$("#booking_id").val();
                    $.ajax(
						{   
							type: "POST",
							url: baseurl+'site/product/booking_confirm_stripe_request_book/'+booking_id,
							dataType: "json",
							data: $('#stripe_payment_form_request').serialize(),
						    beforeSend:function(){ 
								$('#paybtn_request_book').html('<img src="'+baseurl+'images/site/sivaloader.gif" style="margin:0 auto;width:25;height:25px;">');
							   },
								success:function(e){ 
									if(e['error_new']!='')
										{
										swal(error,e['error_new'],'error');
										$('#paybtn_request_book').html('Pay');	
										$('#paybtn_request_book').prop('disabled',false);
										}
										else
										{
										$('#paybtn_request_book').html('Success');	
										 swal({title: good_job, text:booked_successfully+"...", type: "success"},
										   function(){ 
												   location.href=baseurl+'trips';
											   }
										);
										}										
								
							},
							error: function(xhr, textStatus, errorThrown)
							{
								alert('ajax loading error... ... ');
								return false;
							}
						});
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
$(document).ready(function(){ 
       $('[data-toggle="tooltip"]').tooltip({
        placement: "bottom",
        html:true
    });  
});

function tool_tip() {
     $('[data-toggle="tooltip"]').tooltip({
        placement: "bottom",
        html:true
    });  
}