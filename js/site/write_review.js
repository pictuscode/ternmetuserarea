 $(document).ready(function(){
	 $('.rating').change(function(){ 
		$("#"+$(this).attr("id")).val($(this).val()); 
		var rate_acc=($("#rate_acc").val());
		var rate_loc=($("#rate_loc").val());
		var rate_com=($("#rate_com").val());
		var rate_checkin=($("#rate_checkin").val());
		var rate_clean=($("#rate_clean").val());
		var rate_value=($("#rate_value").val());
		if(rate_acc!="" && rate_loc!="" && rate_com!="" && rate_checkin!="" && rate_clean!="" && rate_value!=""){
			var total_rate=((parseFloat(rate_acc)+parseFloat(rate_loc)+parseFloat(rate_com)+parseFloat(rate_checkin)+parseFloat(rate_clean)+parseFloat(rate_value))/6);
			$("#total_rate_value").val(total_rate.toFixed(1));
			$(".total_rate_value").text(total_rate.toFixed(1));
			$(".hide_review_star_before").show();
		}
	}); 
 });
 
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#save_review_form_new").validate({
                rules: {
                    comments: {
                        required: true
					}
				   },
                messages: {
                    comments: {
                        required: require_feedback
                    }
					},
                submitHandler: function(form) {
                    $.ajax(
						{
							type: "POST",
							url: baseurl+'site/user/save_review',
							dataType: "json",
							data: $('#save_review_form_new').serialize(),
							success: function(data)
							{ 
								if (data['status'] == 1)
								{
								   $('.modal_close_svg').click();
								   swal({title: success, text: feedback_success_save+".", type: "success"},
								   function(){ 
										    write_review_list();
									   }
									);								  
								}
								else if (data['status'] == 2)
								{
								   $('.modal_close_svg').click();
								   swal(oops,already_review_book+".",'error');
								}
								else
								{
								  swal({title: oops, text: soming_went_wrong+".", type: "error"},
								   function(){ 
										   	
										    write_review_list();
									   }
									);
								}	
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

$(document).on("click","#save_review_btn",function(){
	if($("#total_rate_value").val()!=0 &&$("#total_rate_value").val()!=""){
	$("#save_review_form_new").submit();
	}
	else{
		swal(oops,please_give_rating+".","error"); return false;
	}
	
})
$(document).on("click",".write_review_btn",function(){
	$("#rate_pid").val($(this).attr("data-pid"));
	$("#rate_booking_id").val($(this).attr("data-booking_id"));
})

$(document).ready(function(){
	if(popup_error_type!="" &&popup_message!=""){
		swal(popup_error_type,popup_message,popup_error_type);
	}
})