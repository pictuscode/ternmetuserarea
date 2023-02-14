var start;
var stop;	
var blockval;
var date_array_save=[];
var date_array_remove=[];
var date_array_saveid=[];	
var cal_status="";	
var datearray=[];
$(document).ready( function(){
var margin_fix = $('.search_header_base').height();

if($("#calendar_box").length==1){
get_calendar();
}
if($(window).width()<=767){
	$("#calendar_box").show();
	$("#price_box").show();
	 flatpickr("#selected_dates", { 
						altInput: true,
						mode: "range",
						altFormat: "j-n-Y",
						defaultDate: [new Date(),new Date()],
						minDate: "today",
						onChange: function(selectedDates, dateStr, instance) {
						 datearray=[];	
						 strarray=dateStr.split('to');
						 if(strarray[0]!="" && strarray[1]!="" ){
						 start_date=strarray[0].trim();
						 end_date=strarray[1].trim();	
						   var start = new Date(start_date); 
						   var end = new Date(end_date);                            
							while(start <= end){
								var mm = ((start.getMonth()+1)>=10)?(start.getMonth()+1):'0'+(start.getMonth()+1);
								var dd = ((start.getDate())>=10)? (start.getDate()) : '0' + (start.getDate());
								var yyyy = start.getFullYear();
								start = new Date(start.setDate(start.getDate() + 1)); 
								datearray.push(yyyy+'-'+mm+'-'+dd);
							
								
								
							}
							
						 }
                         }						
					}); 
}
})
function get_calendar(link=''){
	var pid=$("#selected_product").attr("data-id");
	if(link==""){
	$.post(baseurl+"site/product/ajax_cal_listing_cal",{"pid":pid},function(data){ 
	  $("#calendar_box").html(data);
	});
	}
	else{
		$.get(link,{},function(data){
			$("#calendar_box").html(data);
		});
	}	
}
$(document).on('click','#nav_prev,#nav_next',function(){ 
		$.get($(this).attr('data-value'),{},function(data){
			$("#calendar_box").html(data);
		});
});
$(document).on('click','#prodcut_dropdown li',function(){  
		var pid=$(this).attr("data-id");
		var title=$(this).attr("data-title");
		var img=$(this).attr("data-img");
		$(".main_selected_img").attr("src",img);
		$(".main_selected_text").html(title);
		$("#selected_product").attr("data-id",pid);
		get_calendar();
		
});
function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('-');
}
$(document).ready(function(){
	$(document).on('click','#beforepublish td',function(){ 
	    if($(window).width()<=767){ 
			$("#price_textbox").focus();
		}
		else{
		if($(this).hasClass("block") && !$(this).hasClass("inactive") && !$(this).hasClass("past_date")){ datearray=[];
		$(this).removeClass("block");
		$(this).addClass("selected");
		$(this).addClass("first_selected");
		$(this).addClass("last_selected");
		$(this).append("<span class='calnav-left calhandler'><</span><span class='calnav-right calhandler'>></span>");
		$("#price_box").slideDown("slow");
		$("#selected_dates").val($(this).attr("data-value")+" to "+$(this).attr("data-value"));
        flatpickr("#selected_dates", { 
						altInput: true,
						mode: "range",
						altFormat: "j-n-Y",
						defaultDate: [$(this).attr("data-value"),$(this).attr("data-value")],
						minDate: "today",
						onChange: function(selectedDates, dateStr, instance) {
						 datearray=[];	
						 strarray=dateStr.split('to');
						 if(strarray[0]!="" && strarray[1]!="" ){
						 start_date=strarray[0].trim();
						 end_date=strarray[1].trim();	
						   var start = new Date(start_date); 
						   var end = new Date(end_date); 

							while(start <= end){

								var mm = ((start.getMonth()+1)>=10)?(start.getMonth()+1):'0'+(start.getMonth()+1);
								var dd = ((start.getDate())>=10)? (start.getDate()) : '0' + (start.getDate());
								var yyyy = start.getFullYear();
								start = new Date(start.setDate(start.getDate() + 1)); 
								datearray.push(yyyy+'-'+mm+'-'+dd);
							}
							
						 }
                         }	
					}); 		
		}
		else if(!$(this).hasClass("inactive") && !$(this).hasClass("past_date")  && $('.calhandler').length==0 ){ datearray=[];
		$(this).addClass("selected");
		$(this).addClass("first_selected");
		$(this).addClass("last_selected");
		$(this).append("<span class='calnav-left calhandler'><</span><span class='calnav-right calhandler'>></span>");
		$("#price_box").slideDown("slow");
		$("#selected_dates").val($(this).attr("data-value")+" to "+$(this).attr("data-value"));
		 flatpickr("#selected_dates", { 
						altInput: true,
						mode: "range",
						altFormat: "j-n-Y",
						defaultDate: [$(this).attr("data-value"),$(this).attr("data-value")],
						minDate: "today",
						onChange: function(selectedDates, dateStr, instance) {
						 datearray=[];	
						 strarray=dateStr.split('to');
						 if(strarray[0]!="" && strarray[1]!="" ){
						 start_date=strarray[0].trim();
						 end_date=strarray[1].trim();	
						   var start = new Date(start_date); 
						   var end = new Date(end_date); 
                           /* $(".calhandler").remove();
                           $("td").removeClass("first_selected");
                           $("td").removeClass("remove_selected");
                           $("td").removeClass("selected");
						   var fstart=formatDate(start);
						   var fend=formatDate(end);
						   $("#"+fstart).addClass("first_selected");
						   $("#"+fstart).addClass("selected");
						   $('#'+fstart).append("<span class='calnav-left calhandler'><</span>");	
						   $("#"+fend).addClass("last_selected");
						   $("#"+fend).addClass("selected");
						   $('#'+fend).append("<span class='calnav-right calhandler'>></span>"); */	
							while(start <= end){

								var mm = ((start.getMonth()+1)>=10)?(start.getMonth()+1):'0'+(start.getMonth()+1);
								var dd = ((start.getDate())>=10)? (start.getDate()) : '0' + (start.getDate());
								var yyyy = start.getFullYear();
								start = new Date(start.setDate(start.getDate() + 1)); 
								datearray.push(yyyy+'-'+mm+'-'+dd);
								var dformate=yyyy+'-'+mm+'-'+dd;
								/* $("#"+dformate).addClass("selected");
								$("#"+dformate).removeClass("block"); */
								
							}
							
						 }
                         }						
					}); 
		}
		}	
	})
	  
    $(document).on("mousedown",".calhandler",function() {
		 blockval=$('.data_id'+start).hasClass("block");
		 var move_direction="";
		 if($(this).hasClass("calnav-left")){
			 move_direction="left";
		 }
		 else{
			 move_direction="right";
		 }
		 start=$(this).attr('data-id');		
		$(document).on("mouseover","td",function() {
		 stop=$(this).attr('data-id');  
		if(move_direction=="left" && !$(this).hasClass('past_date')){
			var last_id=$(".calnav-left").parent().attr("data-id");
			$(".calnav-left").remove();
			$('.data_id'+stop).append("<span class='calnav-left calhandler'><</span>");
			$("td").removeClass("first_selected");
			$(this).addClass("first_selected");
			var first=parseInt($(".first_selected").attr("data-id"));
			var last=parseInt($(".last_selected").attr("data-id"));
			$("td").not(".first_selected,.last_selected").removeClass("selected");
			console.log(first+"!"+last);
			if(first<=last ){
			for(i=first;i<=last;i++){ 
				$('.data_id'+i).addClass("selected");
				$('.data_id'+i).removeClass("block");
			}
			}
			else{
				$("td").removeClass("selected");
				$("td").removeClass("first_selected");
				$("td").removeClass("last_selected");
				$(".calhandler").remove();
				$("#price_box").slideUp("fast"); 
				$("#price_textbox").val(""); 
				$(".alwayscheck").prop("checked",true);
				$("#calendar_price_base").slideDown("fast"); 
			}
			
		}else if(move_direction=="right" && !$(this).hasClass('past_date')){
			$(".calnav-right").remove();
			$('.data_id'+stop).append("<span class='calnav-right calhandler'>></span>");						
			var first=parseInt($(".first_selected").attr("data-id"));
			var last=parseInt($(".last_selected").attr("data-id"));
			$("td").not(".first_selected,.last_selected").removeClass("selected");			
			$("td").removeClass("last_selected");
            $(this).addClass("last_selected");			
			if(first<=last ){
			for(i=first+1;i<=last;i++){ 
				$('.data_id'+i).addClass("selected");
				$('.data_id'+i).removeClass("block");
			}
			}  
			else{
				$("td").removeClass("selected");
				$("td").removeClass("first_selected");
				$("td").removeClass("last_selected");
				$(".calhandler").remove();
				$("#price_box").slideUp("fast"); 
				$("#price_textbox").val(""); 
				$(".alwayscheck").prop("checked",true);
				$("#calendar_price_base").slideDown("fast"); 
			}
			
		}

		})
		$(document).on("mouseup","td",function() { 
			 stop=$(this).attr('data-value'); 
			 $(document).off('mouseover','td');
			 datearray=[];	
			 var first_date=$(".first_selected").attr("data-value");
			var last_date=$(".last_selected").attr("data-value");
			if(first_date!=undefined && last_date!=undefined){
			 $("#selected_dates").val(first_date+" to "+last_date);
			 
			 flatpickr("#selected_dates", { 
						altInput: true,
						mode: "range",
						altFormat: "j-n-Y",
						defaultDate: [first_date,last_date],
						minDate: "today",
						onChange: function(selectedDates, dateStr, instance) {
						 datearray=[];	
						 strarray=dateStr.split('to');
						 if(strarray[0]!="" && strarray[1]!="" ){
						 start_date=strarray[0].trim();
						 end_date=strarray[1].trim();	
						   var start = new Date(start_date); 
						   var end = new Date(end_date); 

							while(start <= end){

								var mm = ((start.getMonth()+1)>=10)?(start.getMonth()+1):'0'+(start.getMonth()+1);
								var dd = ((start.getDate())>=10)? (start.getDate()) : '0' + (start.getDate());
								var yyyy = start.getFullYear();
								start = new Date(start.setDate(start.getDate() + 1)); 
								datearray.push(yyyy+'-'+mm+'-'+dd);
							}
							
						 }
                         }	
					}); 
			}else{
			 $("#selected_dates").val('');	
			}
           			
			})
             var first_date=$(".first_selected").attr("data-value");
			 var last_date=$(".last_selected").attr("data-value");
			if(first_date!=undefined && last_date!=undefined){
			 $("#selected_dates").val(first_date+" to "+last_date);		
			}	
   
    });
	
	

})
if($(window).width()<=767){
	$(document).on("click","#savecalendar",function(){
	         var date_array_save_final=[]; 
			
				date_array_save_final= datearray;
			 
			 var st=$(".statuscheck:checked").val();
			 var sp=$("#price_textbox").val();
			 if($("#selected_dates").val()==""){
				 $("#selected_dates").focus();return false;
			 }
			 if(st==2){
				 if(sp==""){
					 $("#price_textbox").focus();return false;
				 }
			 }
			 else{
				sp=""; 
			 }
			
			 var pid=$("#selected_product").attr("data-id");
			 if(date_array_save_final.length!=0){
				 $.post(baseurl+"site/product/save_calendar_dates_listing",{'st':st,'sp':sp,'pid':pid,'block_dates':date_array_save_final},function(data){ 
				 var data=JSON.parse(data);
				if(data.status==1){
				$("#price_box").slideUp("fast"); 
				$("td").removeClass("selected");
				$("td").removeClass("first_selected");
				$("td").removeClass("last_selected");
				$(".calhandler").remove();
				$("#price_textbox").val(""); 
				$(".alwayscheck").prop("checked",true);
				$("#price_box").slideDown("fast"); 
				get_calendar($("#current_month_link").val());
				 }else{
					 window.localcation.href=baseurl;
				 }
				 
				 date_array_save_final=[];
				 datearray=[];
				 })
				}
				flatpickr("#selected_dates", { 
						altInput: true,
						mode: "range",
						altFormat: "j-n-Y",
						defaultDate: [new Date(),new Date()],
						minDate: "today",
						onChange: function(selectedDates, dateStr, instance) {
						 datearray=[];	
						 strarray=dateStr.split('to');
						 if(strarray[0]!="" && strarray[1]!="" ){
						 start_date=strarray[0].trim();
						 end_date=strarray[1].trim();	
						   var start = new Date(start_date); 
						   var end = new Date(end_date);                            
							while(start <= end){
								var mm = ((start.getMonth()+1)>=10)?(start.getMonth()+1):'0'+(start.getMonth()+1);
								var dd = ((start.getDate())>=10)? (start.getDate()) : '0' + (start.getDate());
								var yyyy = start.getFullYear();
								start = new Date(start.setDate(start.getDate() + 1)); 
								datearray.push(yyyy+'-'+mm+'-'+dd);
							
								
								
							}
							
						 }
                         }						
					}); 
				$(".alwayscheck").prop("checked",true); 
				$("#calendar_price_base").show();	
				
})
}
else{
$(document).on("click","#savecalendar",function(){
	         var date_array_save_final=[]; 
			 if(datearray.length==0){
			 $(".selected").each(function(i){						
							 date_array_save_final.push($(this).attr("data-value")); 
             });
			 }
			 else{
				date_array_save_final= datearray;
			 }
			 var st=$(".statuscheck:checked").val();
			 var sp=$("#price_textbox").val();
			 if(st==2){
				 if(sp==""){
					 $("#price_textbox").focus();return false;
				 }
			 }
			 else{
				sp=""; 
			 }
			
			 var pid=$("#selected_product").attr("data-id");
			 if(date_array_save_final.length!=0){
				 $.post(baseurl+"site/product/save_calendar_dates_listing",{'st':st,'sp':sp,'pid':pid,'block_dates':date_array_save_final},function(data){ 
				 var data=JSON.parse(data);
				if(data.status==1){
				$("#price_box").slideUp("fast"); 
				$("td").removeClass("selected");
				$("td").removeClass("first_selected");
				$("td").removeClass("last_selected");
				$(".calhandler").remove();
				$("#price_textbox").val(""); 
				$(".alwayscheck").prop("checked",true);
				$("#calendar_price_base").slideDown("fast"); 
				get_calendar($("#current_month_link").val());
				 }else{
					 window.localcation.href=baseurl;
				 }
				 
				 date_array_save_final=[];
				 datearray=[];
				 })
				}
				$(".alwayscheck").prop("checked",true); 
				$("#calendar_price_base").show();	
})
}

$(document).on("click",".statuscheck",function(){
	     if($(".statuscheck:checked").val()==1)
		 {
			 $("#calendar_price_base").slideUp("fast");
		 }
		 else{
			 $("#calendar_price_base").slideDown("fast"); 
		 }
})
$(document).on("click","#closecalendar",function(){
	           $("#price_box").slideUp("fast"); 
				$("td").removeClass("selected");
				$("td").removeClass("first_selected");
				$("td").removeClass("last_selected");
				$(".calhandler").remove();
				$("#price_textbox").val(""); 
				$(".alwayscheck").prop("checked",true);
				$("#calendar_price_base").slideDown("fast"); 
})
$(document).on('keydown', '.numbervalidate', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||(/65|67|86|88/.test(e.keyCode)&&(e.ctrlKey===true||e.metaKey===true))&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
$(function() {


});

	
	
function traveler_tabbtn(){
  $("#filter_host").hide();
  $("#filter_host1").hide();
  $("#filter_user").show();
  $("#filter_user1").show();
}	
	
function host_tabbtn(){
  $("#filter_user1").hide();
  $("#filter_user").hide();
  $("#filter_host1").show();
  $("#filter_host").show();
}

$(document).ready(function(){
	if($("#filter_host").length==1 ||$("#filter_user").length==1 || $("#filter_host1").length==1 ||$("#filter_user1").length==1 ){
	$("#filter_host option:eq(0)").html("All Messages ("+$(".msgul_host").length+")");
	$("#filter_host option:eq(1)").html("All Read ("+$(".hread").length+")");
	$("#filter_host option:eq(2)").html("All Unread ("+$(".hunread").length+")");	
	$("#filter_user option:eq(0)").html("All Traveling Messages("+$(".msgul_user").length+")");
	$("#filter_user option:eq(1)").html("All Read ("+$(".uread").length+")");
	$("#filter_user option:eq(2)").html("All unead ("+$(".uunread").length+")");
	$("#filter_host1 option:eq(0)").html("All Messages ("+$(".msgul_host").length+")");
	$("#filter_host1 option:eq(1)").html("All Read ("+$(".hread").length+")");
	$("#filter_host1 option:eq(2)").html("All Unread ("+$(".hunread").length+")");	
	$("#filter_user1 option:eq(0)").html("All Traveling Messages("+$(".msgul_user").length+")");
	$("#filter_user1 option:eq(1)").html("All Read ("+$(".uread").length+")");
	$("#filter_user1 option:eq(2)").html("All unead ("+$(".uunread").length+")");
	}
});

$(document).on("change","#filter_host,#filter_host1",function(){
	
 var value=$(this).val();
 if(value==1){
	 $(".hread").show();
	 $(".hunread").show();
 }
 else if(value==2){
	 $(".hread").show();
	 $(".hunread").hide();
 }
 else if(value==3){
	 $(".hread").hide();
	 $(".hunread").show();
 }
 

});
$(document).on("change","#filter_user,#filter_user1",function(){
	
 var value=$(this).val();
 if(value==1){
	 $(".uread").show();
	 $(".uunread").show();
 }
 else if(value==2){
	 $(".uread").show();
	 $(".uunread").hide();
 }
 else if(value==3){
	 $(".uread").hide();
	 $(".uunread").show();
 }
 

});

$(document).on("click","#send_msg_btn",function(){
	
 var booking_id=$(this).attr("data-bid");
 var viewer_id=$(this).attr("data-viewerid");
 var message=$("#message_textarea").val();
	if(message==""){
		$("#message_textarea").focus(); return false;
	}
	else{
		$.post(baseurl+"site/user/sent_message",{'booking_id':booking_id,'viewer_id':viewer_id,'message':message},function(data){
        var data=JSON.parse(data);
		if(data.status==1){	
		$('#chatbox').append('<li class="msg_list"><div class="msg_conversation conversation_left "><div class="right"><div class="inbox_msg_content"><p>'+data.msg+'</p></div><div class="regards_text"><h4>'+data.ago+'</h4></div></div><div class="chat_profile_img"><img src="'+data.img+'"></div></div></li>');
		}
		else{ window.location.href=baseurl;}
		});
	}
});
var myVar;
$(document).ready(function()
{  if($(".booking_clock_timer").length>0){
    myVar= setInterval('updateClock()', 1000);
   }
});
function updateClock()
 {		
 	var dateStr=$("#booking_created_time").attr("data-time");
 	var currentTime = new Date(dateStr.replace(/-/g,'/'));
 	var nowTime = new Date();
	currentTime.setDate(currentTime.getDate() + 1); 
    var ms = moment(currentTime,"YYYY-MM-DD HH:mm:ss").diff(moment(nowTime,"YYYY-MM-DD HH:mm:ss"));
    var d = moment.duration(ms);   
	if(d._data.hours>=0 && d._data.minutes>0){
   	$(".booking_clock_timer").html(d._data.hours+":"+d._data.minutes+":"+d._data.seconds); 
	}
	else{
		 var booking_id=$("#send_msg_btn").attr("data-bid");
		$(".remove_clock_timer").remove();
		if($("#expired_btn").length==1){ var expired="exp";}else{
			var expired="";
		}
		$.post(baseurl+"site/user/update_booking_expire_status",{'booking_id':booking_id,'expired':expired},function(data){
        var data=JSON.parse(data);
		if(data.status==1){	
		clearInterval(myVar);
		}
		else{ window.location.href=baseurl;}
		});
	}	
 }

$(document).on("click","#accept_booking_request_btn",function(){
	 $("#request_accept_form").submit();
});
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            $("#request_accept_form").validate({
                rules: {
                    message: {
                        required: true
                        
					},
                    agree: {
                        required: true
                    }
				   },
                messages: {
                    message: {
                        required: "Please enter a message."
                    },
                    agree: {
						required: "Please agree our terms and conditions"
					}
					},
                submitHandler: function(form) {
                    $.ajax(
						{
							type: "POST",
							url: baseurl+'site/user/save_request_approve',
							dataType: "json",
							data: $('#request_accept_form').serialize(),
							success: function(data)
							{ 
								if (data['status'] == 1)
								{  $('.request_accept_modal').modal('hide');
								   swal({title: "Success", text: "Request Accepted successfully.", type: "success"},
								   function(){						   	
										   
										   location.href=baseurl;
									   }
									);								  
								}
								else if (data['status'] == 2)
								{  $('.request_accept_modal').modal('hide');
								    swal({title: "Oops", text: "Something went to wrong.", type: "success"},
								   function(){						   	
										   
										   location.href=baseurl;
									   }
									);	
								}
								else
								{ $('.request_accept_modal').modal('hide');
								   swal({title: "OOps", text: "Something went to wrong.", type: "success"},
								   function(){						   	
										   
										   location.href=baseurl;
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
$(document).on("click","#decline_booking_request_btn",function(){
	 $("#request_decline_form").submit();
});
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            $("#request_decline_form").validate({
                rules: {
                    message: {
                        required: true
                        
					},
                    agree: {
                        required: true
                    }
				   },
                messages: {
                    message: {
                        required: "Please enter a message."
                    },
                    agree: {
						required: "Please agree our terms and conditions"
					}
					},
                submitHandler: function(form) {
                    $.ajax(
						{
							type: "POST",
							url: baseurl+'site/user/save_request_approve',
							dataType: "json",
							data: $('#request_decline_form').serialize(),
							success: function(data)
							{ 
								if (data['status'] == 1)
								{  $('.request_accept_modal').modal('hide');
								   swal({title: "Success", text: "Request Declined successfully.", type: "success"},
								   function(){						   	
										   
										   location.href=baseurl;
									   }
									);								  
								}
								else if (data['status'] == 2)
								{  $('.request_accept_modal').modal('hide');
								    swal({title: "Oops", text: "Something went to wrong.", type: "success"},
								   function(){						   	
										   
										   location.href=baseurl;
									   }
									);	
								}
								else
								{ $('.request_accept_modal').modal('hide');
								   swal({title: "OOps", text: "Something went to wrong.", type: "success"},
								   function(){						   	
										   
										   location.href=baseurl;
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

$(document).ready(function(){
	if($("#listing_filter_box").length==1 ){
	$("#listing_filter_box option:eq(0)").html("All Listing ("+$(".list_row_count").length+")");
	$("#listing_filter_box option:eq(1)").html("All Inprogress ("+$(".listing_filter_status_pending").length+")");
	$("#listing_filter_box option:eq(2)").html("All Listed ("+$(".listing_filter_status_listed").length+")");	
	}
});
$(document).on("change","#listing_filter_box",function(){
	
 var value=$(this).val();
 if(value==""){
	 $(".listing_filter_status_pending").show();
	 $(".listing_filter_status_listed").show();
 }
 else if(value==1){
	 $(".listing_filter_status_pending").show();
	 $(".listing_filter_status_listed").hide();
 }
 else if(value==2){
	 $(".listing_filter_status_pending").hide();
	 $(".listing_filter_status_listed").show();
 }
 

});
$(document).on("change","#res_filter_box",function(){
	
 var value=$(this).val();
 if(value==""){
	 $(".res_paid").show();
	 $(".res_pending").show();
 }
 else if(value==1){
	 $(".res_paid").show();
	 $(".res_pending").hide();
 }
 else if(value==2){
	 $(".res_paid").hide();
	 $(".res_pending").show();
 }
 

});


$(document).on("click","#requirement_verification",function(){

var req_value="0";	
if($(this).is(":checked")){
	var req_value="1";
}
else{
	var req_value="0";
}
 $.post(baseurl+"site/user/save_requirement_verification",{"req_value":req_value},function(data){ 
	  
	});

});

$(document).ready(function(){
	if($("#stat_year").length==1){
		get_stat();
	}
});

function get_stat(){
	var st_year=$("#stat_year").val();
	var st_month=$("#stat_month").val();
	 $.post(baseurl+"site/user/get_stat",{"st_year":st_year,"st_month":st_month},function(data){ 
	 var data=JSON.parse(data);
	 if(data.status==1){
		 $(".stat_year").text(data.year);
		 $(".monthname_stat").text(data.month_name);
		 $(".total_stat").text(data.payamount);
		 $(".paid_stat").text(data.paid_amount==null?"0":data.paid_amount);
		 $(".cleaningfee_stat").text(data.cleaning_amount);
		 $(".cancellation_stat").text(data.cleaningfee_stat);
		 $(".bookednights_stat").text(data.total_nights);
		 $(".unbookednights_stat").text(data.unbooked_nights);
	 }
	 else
	 {
		 //window.location.href=baseurl;
	 }
	});
}

$(document).on("change","#room_based_review_select",function(){
	
 var value=$(this).val();
 if(value==""){
	 $(".hide_before_select_product").hide();
	 swal("error","Choose a room and view ratings","error"); return false;
 }
 else{
	$.post(baseurl+"site/user/get_stat_review",{"pid":value},function(data){
		$("#product_listing_review_lists_html").html(data);
		$(".hide_before_select_product").show();
	});
 }

});

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
$(document).on("change","#review_number_based_sort",function(){
	var r_no=$(this).val();
	var pid=$("#room_based_review_select").val();
	$.post(baseurl+"site/user/review_number_based_sort",{"rno":r_no,"pid":pid},function(data){
		$("#stat_review_html").html(data);
	})
	
	
})
$(document).on("click",".review_block_btn_flag",function(){
	var r_no=$(this).attr("data-value");
	var status=$(this).attr("data-status");
	var pid=$("#room_based_review_select").val();
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
	
    $.post(baseurl+"site/user/review_block_process",{"rno":r_no,"r_value":r_value},function(data){
		$(".flag_no_"+r_no).attr("data-status",1);$('#review_block_flag_Modal').modal('hide');
	})
	
	
})