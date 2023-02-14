$(function(){

		$('.icon_menu').click(function(){
			$('.mobile_menu').stop().slideToggle(400,"swing");
			$('body').toggleClass('body_class');
		})	
});
$(function(){
	$('.any_whr_btn').click(function(){
		$('.mobile_search_drop').slideDown();
		
	})
	$('.slide_up_arrow').click(function(){
		$('.mobile_search_drop').slideUp();
	});
});
$(function(){
		
		$('.location_search').click(function(){
			$('.search_anywhere').stop().slideToggle(400,"swing");
			$('body').toggleClass('body_class');
		})
		$('.close_x').click(function(){
			$('.search_anywhere').stop().slideUp(400,"swing");
			$('body').removeClass('body_class');

		})
});
$(function(){
		
		$('.date_search').click(function(){
			$('.search_datecalendar').stop().slideToggle(400,"swing");
			$('body').toggleClass('body_class');
		})
		$('.close_x').click(function(){
			$('.search_datecalendar').stop().slideUp(400,"swing");
			$('body').removeClass('body_class');
		})
});
$(function(){
		
		$('.guest_search').click(function(){
			$('.search_guest').stop().slideToggle(400,"swing");
			$('body').toggleClass('body_class');
		})
		$('.close_x').click(function(){
			$('.search_guest').stop().slideUp(400,"swing");
			$('body').removeClass('body_class');

		})

$('#user_signup_btn').click(function(){
	 var day = $('#dobDay').val();
		  var month = $('#dobMonth').val();
		  var year = $('#dobYear').val();
		  var date=month+"/"+day+"/"+year;
	     if(month!="" && year!="" && date!=""){     
			 if(isDate(date))
			  {
				  $("#register-form").submit();
				  $("#dob_error").hide();
				  $("#dob_error").text("");
			  }
			  else
			  {
				  $("#dob_error").show();
				  $("#dob_error").text("Enter valid dob date...");
			  }	
		 }
		 else
		 {
			  $("#register-form").submit();
		 }
	
})
function isDate(txtDate)
{
	var currVal = txtDate;
	if(currVal == '')
		return false;
	
	var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/; //Declare Regex
	var dtArray = currVal.match(rxDatePattern); // is format OK?
	
	if (dtArray == null) 
		return false;
	
	//Checks for mm/dd/yyyy format.
	dtMonth = dtArray[1];
	dtDay= dtArray[3];
	dtYear = dtArray[5];        
	
	if (dtMonth < 1 || dtMonth > 12) 
		return false;
	else if (dtDay < 1 || dtDay> 31) 
		return false;
	else if ((dtMonth==4 || dtMonth==6 || dtMonth==9 || dtMonth==11) && dtDay ==31) 
		return false;
	else if (dtMonth == 2) 
	{
		var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
		if (dtDay> 29 || (dtDay ==29 && !isleap)) 
				return false;
	}
	return true;
}
$("#lang_box").change(function(){
	window.location.href=$(this).val();
});
$("#currency_box").change(function(){
	window.location.href=$(this).val();
});
$("#guest_plus_btn").click(function(){
	var ex_count=$(".guest_count").attr('data-value'); 
    if(ex_count>=0)
	{
	   if(ex_count=="0" || ex_count=="1")
	   {
		   var counttext=guest;
	   }
	   else{
		   var counttext=guest;
	   }
	   $(".guest_count").attr('data-value',parseInt(ex_count)+1); 
	   $(".guest_count").val(parseInt(ex_count)+1); 
	   $(".guest_count_text").text(parseInt(ex_count)+1+" "+counttext); 
	}		
	})
$("#guest_minus_btn").click(function(){
	var ex_count=$(".guest_count").attr('data-value'); 
    if(ex_count>1)
	{
	   if(ex_count=="1")
	   {
		   var counttext=guest;
	   }
	   else{
		   var counttext=guest;
	   }
	   $(".guest_count").attr('data-value',parseInt(ex_count)-1); 
	   $(".guest_count").val(parseInt(ex_count)-1); 
	   $(".guest_count_text").text(parseInt(ex_count)-1+" "+counttext); 
	}		
	})
});
/*wishlist*/
$(document).on("click",".wishlistbtn",function(){
	var pid=$(this).attr("data-pid");
	var ajax_data={};
    ajax_data[csrf_key]=csrf_value;
	$.post(baseurl+"site/search/get_wishlist_list",ajax_data,function(data){
		var data=JSON.parse(data);
		if(data.status==1){
		   $("#wishlist_pop_names").html("");	
		   var result_set=data.wish_list;
		   for(var i=0;i<result_set.length;i++){ 
			  if(result_set[i]['products_id']!=""){
				  var product_id_json= JSON.parse(result_set[i]['products_id']);
			  }
			  else{
				  var product_id_json =[];
			  }
			  console.log(product_id_json);
			   /* alert(result_set[i]['products_id']); */
			  /* if(result_set[i]['products_id'].indexOf(pid) ==-1)  */
			  console.log(result_set[i]['products_id'].indexOf(pid));
			  console.log(result_set[i]['products_id'][0]);
			   console.log(($.inArray(pid,product_id_json)));
			   
			     if($.inArray(pid, product_id_json) !== -1)  
			   
		   {
			   var wish_li='<li><p>'+result_set[i]['wishlist_name']+'</p><span class="wish_icon"><a href="javascript:void(0)" class="wish_click" data-id="'+result_set[i]['wishlist_id']+'" data-status="1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.8 19.16"><title></title><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M20,1.78a6,6,0,0,0-8.54,0l-.59.6-.61-.61a6,6,0,0,0-8.53,0,6,6,0,0,0,0,8.53L10.45,19a.63.63,0,0,0,.88,0L20,10.32a6,6,0,0,0,0-8.54Z" style="fill:#fb4b57"/></g></g></svg></a> </span></li>';   
		   }
		   else
		   {
			   var wish_li='<li><p>'+result_set[i]['wishlist_name']+'</p><span class="wish_icon"><a href="javascript:void(0)" class="wish_click" data-id="'+result_set[i]['wishlist_id']+'" data-status="0"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.5 18.86"><title></title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M19.61,1.86a5.85,5.85,0,0,0-8.28,0l-.58.58-.58-.59A5.85,5.85,0,1,0,1.9,10.13l8.42,8.41a.58.58,0,0,0,.42.18.65.65,0,0,0,.43-.17l8.43-8.41a5.85,5.85,0,0,0,0-8.28Z" style="fill:#fff"/><path d="M1.73,10l8.68,8.68a.47.47,0,0,0,.66,0l8.7-8.67a5.88,5.88,0,1,0-8.31-8.32l-.7.7L10,1.73A5.88,5.88,0,0,0,0,5.88,5.82,5.82,0,0,0,1.73,10ZM2.39,2.4a4.93,4.93,0,0,1,7,0l1.05,1.05a.48.48,0,0,0,.67,0l1-1A5,5,0,0,1,15.62,1,5,5,0,0,1,20.55,5.9a4.93,4.93,0,0,1-1.44,3.49h0l-8.36,8.33-.1-.1L2.4,9.38a4.94,4.94,0,0,1,0-7Z" style="fill:#606060"/></g></g></svg></a> </span></li>';   
			
		   }
		   $("#wishlist_pop_names").append(wish_li);
		  
		   }
		}
		else
		{
			$("#wishlist_pop_names").html("");
		}
		$('#wishlist_pop').modal('toggle');
		$("#wishlist_pop_names").attr("data-pid",pid);
	})
	
	
})
$(document).on("click",".create_new_wishlist_btn",function(){
	$(".create_new_wishlist_btn").hide(100);
	$(".create_new_wishlist_box").show(100);
})
$(document).on("click",".wishlist_cancelbtn",function(){	
	$(".create_new_wishlist_box").hide(100);
	$(".create_new_wishlist_btn").show(100);
})
$(document).ready(function(){
$(".wishlist_createbtn").click(function(){	
   var wishname=$("#wishlist_name").val();
   $("#wishlist_name_label").html("");
   if(wishname!=""){
	var ajax_data={"wishlist_name":wishname};
    ajax_data[csrf_key]=csrf_value;
	   $.post(baseurl+"site/search/save_wishlist",ajax_data,function(data){
		   var data=JSON.parse(data);
		   if(data.status==1){
			    var wish_li='<li><p>'+wishname+'</p><span class="wish_icon"><a href="javascript:void(0)" class="wish_click" data-id="'+data.id+'" data-status="0"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.5 18.86"><title></title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M19.61,1.86a5.85,5.85,0,0,0-8.28,0l-.58.58-.58-.59A5.85,5.85,0,1,0,1.9,10.13l8.42,8.41a.58.58,0,0,0,.42.18.65.65,0,0,0,.43-.17l8.43-8.41a5.85,5.85,0,0,0,0-8.28Z" style="fill:#fff"/><path d="M1.73,10l8.68,8.68a.47.47,0,0,0,.66,0l8.7-8.67a5.88,5.88,0,1,0-8.31-8.32l-.7.7L10,1.73A5.88,5.88,0,0,0,0,5.88,5.82,5.82,0,0,0,1.73,10ZM2.39,2.4a4.93,4.93,0,0,1,7,0l1.05,1.05a.48.48,0,0,0,.67,0l1-1A5,5,0,0,1,15.62,1,5,5,0,0,1,20.55,5.9a4.93,4.93,0,0,1-1.44,3.49h0l-8.36,8.33-.1-.1L2.4,9.38a4.94,4.94,0,0,1,0-7Z" style="fill:#606060"/></g></g></svg></a> </span></li>';   
				$("#wishlist_pop_names").prepend(wish_li);
				$("#wishlist_name").val('');
				$(".create_new_wishlist_box").hide(100);
	            $(".create_new_wishlist_btn").show(100);
		   }
		   else
		   {
			   $("#wishlist_name_label").html("Already wish list name exist.");
		   }
	   })
   }
   else
   {
	   $("#wishlist_name").focus();return false;
   }
})
});
$(document).on("keyup","#wishlist_name",function(){	
	if($(this).val().length>0){
	   $('.wishlist_createbtn').css('opacity','1');
	   $('.wishlist_createbtn').css('cursor','pointer');
	}
	else
	{
		$('.wishlist_createbtn').css('opacity','0.2');
	    $('.wishlist_createbtn').css('cursor','not-allowed');
	}
})
$(document).on("click",".wish_click",function(){	
    var pid=$("#wishlist_pop_names").attr("data-pid");
	var wid=$(this).attr("data-id");
	var status=$(this).attr("data-status");
	if(status==0){
	$(this).html('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.8 19.16"><title></title><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M20,1.78a6,6,0,0,0-8.54,0l-.59.6-.61-.61a6,6,0,0,0-8.53,0,6,6,0,0,0,0,8.53L10.45,19a.63.63,0,0,0,.88,0L20,10.32a6,6,0,0,0,0-8.54Z" style="fill:#fb4b57"/></g></g></svg>');
	$(this).attr("data-status",1);
	var ajax_data={"pid":pid,"wid":wid};
    ajax_data[csrf_key]=csrf_value;
	$.post(baseurl+"site/search/save_wishlist_product",ajax_data,function(data){
				
	});
	}
	else
	{
		$(this).html('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.5 18.86"><title></title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M19.61,1.86a5.85,5.85,0,0,0-8.28,0l-.58.58-.58-.59A5.85,5.85,0,1,0,1.9,10.13l8.42,8.41a.58.58,0,0,0,.42.18.65.65,0,0,0,.43-.17l8.43-8.41a5.85,5.85,0,0,0,0-8.28Z" style="fill:#fff"></path><path d="M1.73,10l8.68,8.68a.47.47,0,0,0,.66,0l8.7-8.67a5.88,5.88,0,1,0-8.31-8.32l-.7.7L10,1.73A5.88,5.88,0,0,0,0,5.88,5.82,5.82,0,0,0,1.73,10ZM2.39,2.4a4.93,4.93,0,0,1,7,0l1.05,1.05a.48.48,0,0,0,.67,0l1-1A5,5,0,0,1,15.62,1,5,5,0,0,1,20.55,5.9a4.93,4.93,0,0,1-1.44,3.49h0l-8.36,8.33-.1-.1L2.4,9.38a4.94,4.94,0,0,1,0-7Z" style="fill:#606060"></path></g></g></svg>');
		$(this).attr("data-status",0);	
		var ajax_data={"pid":pid,"wid":wid};
        ajax_data[csrf_key]=csrf_value;
	    $.post(baseurl+"site/search/remove_wishlist_product",ajax_data,function(data){
			
	    });
	}
});

$(document).on("click",".close_modal",function(data){
	var count=0;
	$(".wish_click").each(function(i){
		if($(this).attr('data-status')=="1"){
			count=count+1; 
		}
	
	})
	
	var pid=$("#wishlist_pop_names").attr("data-pid");
	
	if(count>0){
		$(".fav_heart_new_"+pid).html('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.5 18.86"><title>AssetAsset 2</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M19.61,1.86a5.85,5.85,0,0,0-8.28,0l-.58.58-.58-.59A5.85,5.85,0,1,0,1.9,10.13l8.42,8.41a.58.58,0,0,0,.42.18.65.65,0,0,0,.43-.17l8.43-8.41a5.85,5.85,0,0,0,0-8.28Z" style="fill:#fb4b57"></path><path d="M1.73,10l8.68,8.68a.47.47,0,0,0,.66,0l8.7-8.67a5.88,5.88,0,1,0-8.31-8.32l-.7.7L10,1.73A5.88,5.88,0,0,0,0,5.88,5.82,5.82,0,0,0,1.73,10ZM2.39,2.4a4.93,4.93,0,0,1,7,0l1.05,1.05a.48.48,0,0,0,.67,0l1-1A5,5,0,0,1,15.62,1,5,5,0,0,1,20.55,5.9a4.93,4.93,0,0,1-1.44,3.49h0l-8.36,8.33-.1-.1L2.4,9.38a4.94,4.94,0,0,1,0-7Z" style="fill:#fff"></path></g></g></svg>');
		$(this).attr("data-status",1);
		$("#wishlish_btn_saved").html(saved);
	}
	else{
		$(".fav_heart_new_"+pid).html('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.5 18.86"><title>AssetAsset 2</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M19.61,1.86a5.85,5.85,0,0,0-8.28,0l-.58.58-.58-.59A5.85,5.85,0,1,0,1.9,10.13l8.42,8.41a.58.58,0,0,0,.42.18.65.65,0,0,0,.43-.17l8.43-8.41a5.85,5.85,0,0,0,0-8.28Z" style="fill:rgba(0,0,0,0.2)"></path><path d="M1.73,10l8.68,8.68a.47.47,0,0,0,.66,0l8.7-8.67a5.88,5.88,0,1,0-8.31-8.32l-.7.7L10,1.73A5.88,5.88,0,0,0,0,5.88,5.82,5.82,0,0,0,1.73,10ZM2.39,2.4a4.93,4.93,0,0,1,7,0l1.05,1.05a.48.48,0,0,0,.67,0l1-1A5,5,0,0,1,15.62,1,5,5,0,0,1,20.55,5.9a4.93,4.93,0,0,1-1.44,3.49h0l-8.36,8.33-.1-.1L2.4,9.38a4.94,4.94,0,0,1,0-7Z" style="fill:#fff"></path></g></g></svg>');
		$(this).attr("data-status",0);
		$("#wishlish_btn_saved").html(save);
	}
	
})
/*wishlist*/




/* backtoinbox dynamic height */
/*$(document).ready( function(){
    var margin_fix = $('.search_header_base').height();
    $('.main_base').css('margin-top',margin_fix);
})*/