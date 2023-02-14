(function($,W,D)
{
    $.validator.addMethod("passwordCheck_uppercase",
        function(value, element, param) {
            if (this.optional(element)) {
                return true;
            } else if (!/[A-Z]/.test(value)) {
                return false;
            } else if (!/[!"#$%&'()*+,-./:;<=>?@[\]^_`{|}~]/.test(value)) {
                return false;
            } else if (!/[0-9]/.test(value)) {
                return false;
            }

            return true;
        },
        password_uppercase);
   
	var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
		$.validator.addMethod("pwcheck", function(value) {
		   return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
			   && /[a-z]/.test(value) // has a lowercase letter
			   && /\d/.test(value) // has a digit
		});
	    $.validator.addMethod("nameRegex", function(value, element) {

        return this.optional(element) || /^[a-z\- . ]+$/i.test(value);

        }, name_albhabets);		
		$.validator.addMethod('dob', function(value, element, param) {
		  var day = $('#dobDay').val();
		  var month = $('#dobMonth').val();
		  var year = $('#dobYear').val();
		  var date = new Date(year, month - 1, day);
		  return this.optional(element) || !/Invalid|NaN/.test(date);
		}, valid_dob);
				csrfkey=$('#register-form :input[name="'+csrf_key+'"]').attr('name');
	        	 csrfval= 	$('#register-form :input[name="'+csrf_key+'"]').val();
             $("#register-form").validate({				     
				  groups: {
					dob: 'dobDay dobMonth dobYear'
				  },
                rules: {
					 dobDay: {
					  required: true,
					  dob: true
					},
					dobMonth: {
					  required: true,
					  dob: true
					},
					dobYear: {
					  required: true,
					  dob: true
					},
                    first_name: {required:true,
								 nameRegex:true },
                    last_name:  {required:true,
								 nameRegex:true },
                    email: {
                        required: true,
                        email: true,
						remote:
						{
						  url: baseurl+'site/user/check_email',
						  type: "post",
						  data:
						  {
							[csrfkey]:csrfval,
							email: function()
							{
						  
								return $('#register-form :input[name="email"]').val();
							}
							
						  }
						}
                    },
                    password: {
                        required: true,
						pwcheck:true,
                        minlength: 5
                    },
					zipcode:
					{
					required:true
					}
				   },
                messages: {
                     first_name: {
                        required: required_first_name,
                        nameRegex: first_name_caps
                    }, 
					last_name: {
                        required: required_lastname,
                        nameRegex: last_name_albha
                    },
					password: {
                        required: required_password,
                        pwcheck: strong_password,
                        minlength: length_password
                    },
                    email: {
						required: required_mail,
						email:valid_mail,
						remote:already_exist
					},
					zipcode:"Please enter your zipcode",					
					dobDay:required_dob,
					dobMonth:required_dob,
					dobYear:required_dob,
					},
                submitHandler: function(form) {
                    $.ajax(
						{
							type: "POST",
							url: baseurl+'site/user/signup_process',
							dataType: "json",
							data: $('#register-form').serialize(),
							success: function(data)
							{ 
								if (data['result'] == 'error')
								{
								  swal({title: oops, text: register_mail_exist, type: "error"},
								   function(){ 
										   location.reload();
									   }
									);
								}
								else
								{
								   
								   swal({title: good_job, text: create_success, type: "success"},
								   function(){ 
										  
										   if(data['redirecturl']==''){	
										   location.href=baseurl;}
										   else{location.href=data['redirecturl'];}
									   }
									);
								}
							},
							error: function(xhr, textStatus, errorThrown)
							{
								alert('ajax loading error... ... '+url + query);
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
            //form validation rules
            $("#login-form").validate({
                rules: {
                    login_email: {
                        required: true,
                        email: true
					},
                    login_password: {
                        required: true,
                        minlength: 5
                    }
				   },
                messages: {
                    login_password: {
                        required: required_password,
                        minlength: length_password
                    },
                    login_email: {
						required: required_mail,
						email:valid_mail,
					}
					},
                submitHandler: function(form) {
                    $.ajax(
						{
							type: "POST",
							url: baseurl+'site/user/login_process',
							dataType: "json",
							data: $('#login-form').serialize(),
							success: function(data)
							{ 
								if (data['status'] == 1)
								{
								   swal({title: success, text: login_success, type: "success"},
								   function(){ 
										   	
										   if(data['redirecturl']==''){	
										   location.href=baseurl;}else{
											   location.href=data['redirecturl'];
										   }
									   }
									);								  
								}
								else if (data['status'] == 2)
								{
								   swal(oops,data['message'],'error');
								}
								else
								{
								  swal(oops,data['message'],'error');
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
            $("#save_review_form").validate({
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
							data: $('#save_review_form').serialize(),
							success: function(data)
							{ 
								if (data['status'] == 1)
								{
								   $('.modal_close_svg').click();
								   $("#rate_acc").val(0);
								   $("#rate_loc").val(0);
								   $("#rate_com").val(0);
								   $("#rate_checkin").val(0);
								   $("#rate_clean").val(0);
								   $("#rate_value").val(0);
								   $("#total_rate_value").val('');
								   $("#rate_pid").val("");
								   $("#rate_booking_id").val("");
								   $("#comments").val("");
								   $(".hide_review_star_before").hide();
								   swal({title: success, text: feedback_success_save+".", type: "success"},
								   function(){ 
										   	if($("#write_review_html").length==1){
												write_review_list();
											}else{
										    location.href=baseurl+"trips";
											}
									   }
									);								  
								}
								else if (data['status'] == 2)
								{
								   $('.modal_close_svg').click();
								   $("#rate_acc").val(0);
								   $("#rate_loc").val(0);
								   $("#rate_com").val(0);
								   $("#rate_checkin").val(0);
								   $("#rate_clean").val(0);
								   $("#rate_value").val(0);
								   $("#total_rate_value").val('');
								   $("#rate_pid").val("");
								   $("#rate_booking_id").val("");
								   $("#comments").val("");
								   $(".hide_review_star_before").hide();
								   swal(oops,already_review_book+".",'error');
								}
								else
								{
								  swal({title: oops, text: soming_went_wrong+'.', type: "error"},
								   function(){ 
										   	
										    if($("#write_review_html").length==1){
												write_review_list();
											}else{
										    location.href=baseurl+"trips";
											}
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
	$("#save_review_form").submit();
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
$(document).on("click",".more_stat_review",function(){
	var data_id=$(this).attr("data-class");
	if($(this).attr("data-more")==0){
	$(this).attr("data-more",1);
	$(this).text($(this).attr("data-less_text"));
	$("."+data_id).slideDown();
	$("."+$(this).attr("data-bclass")).slideUp();
	}
	else{
	$(this).attr("data-more",0);
    $(this).text($(this).attr("data-more_text"));
    $("."+$(this).attr("data-bclass")).slideDown();	
	$("."+data_id).slideUp();	
	} 
	
})


$(document).on("click",".review_block_btn_flag",function(){
	var r_no=$(this).attr("data-value");
	var status=$(this).attr("data-status");
	var pid=$("#pid").val();
	$("#review_block_id").val(r_no);
	if(status==0){
	$('#review_block_flag_Modal').modal('show');
	}else{
	$('#review_block_flag_done_Modal').modal('show');	
	}
	
})
$(document).on("click",".review_block_flag_submit_btn",function(){
	var r_value=$(this).attr("data-id");
	var r_no=$("#review_block_id").val();
	var ajax_data={"rno":r_no,"r_value":r_value};
	ajax_data[csrf_key]=csrf_value;
    $.post(baseurl+"site/user/review_block_process",ajax_data,function(data){
		$(".flag_no_"+r_no).attr("data-status",1);$('#review_block_flag_Modal').modal('hide');
	})
	
	
})	




/* Script for default margin top */
$(document).ready( function(){
	var margin_fix = $('.search_header_base').height();
		$('.saved_list_base').css('margin-top',margin_fix);
    $('.calendar_block_head_base').css('margin-top',margin_fix);
    $('.back_to_inbox').css('margin-top',margin_fix);
    $('.your_listing_base').css('margin-top',margin_fix);
    
    if($(window).width() < 850)
        {
            $('.saved_list_base').css('margin-top',0);
            $('.calendar_block_head_base').css('margin-top',0);
            $('.product_details_base').css('margin-top',0);
            $('.listing_base').css('margin-top',0);
            $('.your_listing_base').css('margin-top',0);
            $('.back_to_inbox').css('margin-top',0);
        }
	})

$(document).ready(function(){
   $('.custom_home_guest_filter').on('click', function(e) {
      if($(this).hasClass('guest_filter')) {
          e.stopPropagation();
      }
});
});

$(document).ready(function(){
    $('#view_photo').click(function(){ 
       $(".detailpagebanner_img").click();
    });
});
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
/* $(document).on("click",".host_notification_msg_delete_btn",function(){
	var nid=$(this).attr("data-bid");
	var thisval=$(this);
	$.post(baseurl+"site/user/delete_host_notification_msg",{"nid":nid},function(data){
		var data=JSON.parse(data);
		if(data.status==1){
			thisval.parent("li").remove();
		}else{
			window.location.href=baseurl;
		}
	})
}); */

$(document).ready(function(){
	$(".host_notification_msg_delete_btn").click(function(){ 
	var nid=$(this).attr("data-bid");
	var thisval=$(this);
	var ajax_data={"nid":nid};
	ajax_data[csrf_key]=csrf_value;
	$.post(baseurl+"site/user/delete_host_notification_msg",ajax_data,function(data){
		var data=JSON.parse(data);
		if(data.status==1){
			thisval.parent("li").remove();
		}else{
			window.location.href=baseurl;
		}
	})
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
            $("#forgot-form").validate({
                rules: {
                    login_email: {
                        required: true,
                        email: true
					}
				   },
                messages: {
                    
                    login_email: {
						required: required_mail,
						email:valid_mail
					}
					},
                submitHandler: function(form) {
                    $.ajax(
						{
							type: "POST",
							url: baseurl+'site/user/send_forgot_password',
							dataType: "json",
							data: $('#forgot-form').serialize(),
							success: function(data)
							{ 
								if (data['status'] == 1)
								{
								   swal({title: success, text: forget_password_success, type: "success"},
								   function(){ 
										  location.href=baseurl;
									   }
									);								  
								}
								else if (data['status'] == 2)
								{
								   swal(oops,data['message'],'error');
								}
								else
								{
								  swal(oops,data['message'],'error');
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

function printDiv(div_id) 
{

  var divToPrint=document.getElementById(div_id);

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');
  newWin.document.write('<link rel="stylesheet" href="'+baseurl+'css/site/bootstrap.min.css" type="text/css" />');
  newWin.document.write('<link rel="stylesheet" href="'+baseurl+'css/site/style.css" type="text/css" />');

 newWin.document.close();

  setTimeout(function(){newWin.close();},1000);

}