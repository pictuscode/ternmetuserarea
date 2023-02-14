
$(function(){
	
$('#filter_close').click(function(e){
			$('#filter_more').stop().fadeOut();
			e.stopPropagation();
		})
$('.drop_down_base .dropdown-menu').click(function(e) {
		e.stopPropagation();
	});
})

	$(document).ready( function(){
	var margin_fix = $('.search_header_base').height();
		$('.saved_list_base').css('margin-top',margin_fix);
	})
	$(document).ready( function(){
	var margin_fixbottom = $('.bottom_next_continue ').height();
		$('.listing_base_inner').css('margin-bottom',margin_fixbottom+25);
	})

$(function(){
		
		$('#menu_filter').click(function(e){
			$('#filter_more').stop().fadeToggle();
			e.stopPropagation();
			$('.filters .dropdown').removeClass('open');
			   $(".overlay").removeClass("active");
		})
		$('.filters .dropdown').click(function(){
			$('#filter_more').stop().fadeOut();
		})
		$('#filter_more').click(function(e){
			e.stopPropagation();
		})
		
});

$(function(){
		var height_head = $('.head_base').height();
		$('.head_base').addClass('body_search');
		$('.serach_result_content').css({'margin-top':height_head+25 })

		$('.language_currency').click(function(){
			$('.footer_base').css({'z-index':'9','position': 'absolute','left': '0','right': '0','bottom': '0','background':'#fff'})
			$('.footer_base').slideToggle();
			$('.language_close').show();
    
 
   
		})
		
		$('.language_close').click(function(){
		$('.footer_base').slideToggle();
		$('.language_close').hide();
		})

	})
	$(function(){
		$('.map_mob').click(function(){
			$(this).text(function(i, v){
               return v === 'Map' ? 'Result' : 'Map'
            })
				$('.map_rgt').fadeToggle();
				$('.serach_results_lft').fadeToggle();
				initMap();
				google.maps.event.trigger(map, 'resize');
				

		})

	});
	
$(function(){
if ($(window).width() < 767) {
  $('.footer_base').show();
  $('.language_currency').hide();
}
});
$(function(){
$('.filters .dropdown').click(function(){
if($(".dropdown").hasClass("open")){
	$(document).click(function(){
    $(".overlay").removeClass("active");
});
$('.overlay').removeClass('active');

}
else{
	$('.overlay').addClass('active');
	$(document).click(function(){
    $(".overlay").removeClass("active");
});
}
}) 

})
$(function() {
  $(".dropdown-menu").click(function(e) {
    e.stopPropagation()
  });
});
$(function(){
		$('#see_all_mob').click(function(){
			$('#ament_1').slideToggle();
		})
		
});
$(function(){
	$('.filter_mob').click(function(){
			$('.mobile_fiters_base').fadeToggle()

	})
	$('.close_head_mobfiltter').click(function(){
			$('.mobile_fiters_base').fadeToggle();

	})
});
$(function(){
		$('#see_all_mob1').click(function(){
			$('#ament_2').slideToggle();
		})
});
$(function(){

$('.drop_down_base .dropdown-menu').click(function(e) {
		e.stopPropagation();
	});
})

	$(document).ready( function(){
	var margin_fix = $('.search_header_base').height();
		$('.saved_list_base').css('margin-top',margin_fix);
	})
	$(document).ready( function(){
	var margin_fixbottom = $('.bottom_next_continue ').height();
		$('.listing_base_inner').css('margin-bottom',margin_fixbottom+25);
	})

$(document).ready(function(){
init_autocomplete();	
})

function init_autocomplete() {
	  autocomplete = new google.maps.places.Autocomplete(
		 (document.getElementById('search_autocomplete')),
		  { types: ['geocode'] });
		google.maps.event.addListener(autocomplete, 'place_changed', function() {
			var data = $("#search_autocomplete").serialize();
			window.location.href=baseurl+"s?city="+ $("#search_autocomplete").val();
			return false;
		}
	  );
    
}

 $(function(){ 
     if($("#map_view").length!=0){
	  initMap();
	  $("#map_view").css('height',$('.map_rgt').height()); 
	  setTimeout(function(){ make_marker_initial();},200)
	 }
	
});
var infowindow = new google.maps.InfoWindow({ 
	size: new google.maps.Size(150,150)
});
var map,bounds;
var markers=[];  
var gmarkers=[];  
  function initMap(){  
		var myOptions = {
		scrollwheel: false,
		zoom:2,
		zoomControl:true,
		zoomControlOptions: {
		style:google.maps.ZoomControlStyle.SMALL,
		 position: google.maps.ControlPosition.LEFT_TOP
		},
		center:{lat:0, lng: 0},
		mapTypeControl: true,
		mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
			navigationControl: true,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		map = new google.maps.Map(document.getElementById("map_view"),myOptions);
		
		google.maps.event.addListener(map, 'click', function() {
			infowindow.close();
		});
		google.maps.event.addListener(map, 'dragend', function() { 
		
		} );
		google.maps.event.addListener(map, 'zoom_changed', function() {
		
			});
		bounds = new google.maps.LatLngBounds();
		
		
	}
	
function make_marker_initial()
{       

		$("#product_list_box").html("");
		var product_list_json=JSON.parse($("#product_list_json").val());
		var wishlist_array=($("#wishlist_array").val());
		var left_sidebar_html='';
        if(product_list_json.length>0){	var j=1;	
	    product_list_json.forEach(function(i){	
		var photos=i.cover_photo==""?'product_img.png':i.cover_photo;
		var rmtype=shared_room;
		var beds=i.beds_count==0?i.beds_count+' '+bed_lang:i.beds_count+' '+beds_lang;
		if(i.room_type=="entire_home"){ rmtype= entire_place;}else if(i.room_type=='private_room'){ rmtype= private_room;} else{ rmtype=shared_room; } 
		if($("#logincheck").val()==""){
		   var wishlist='<a href="#" data-toggle="modal" data-target="#sign_in"><div class="fav_heart_new fav_heart_new_'+i.id+'"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.5 18.86"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M19.61,1.86a5.85,5.85,0,0,0-8.28,0l-.58.58-.58-.59A5.85,5.85,0,1,0,1.9,10.13l8.42,8.41a.58.58,0,0,0,.42.18.65.65,0,0,0,.43-.17l8.43-8.41a5.85,5.85,0,0,0,0-8.28Z" style="fill:rgba(0,0,0,0.2)"/><path d="M1.73,10l8.68,8.68a.47.47,0,0,0,.66,0l8.7-8.67a5.88,5.88,0,1,0-8.31-8.32l-.7.7L10,1.73A5.88,5.88,0,0,0,0,5.88,5.82,5.82,0,0,0,1.73,10ZM2.39,2.4a4.93,4.93,0,0,1,7,0l1.05,1.05a.48.48,0,0,0,.67,0l1-1A5,5,0,0,1,15.62,1,5,5,0,0,1,20.55,5.9a4.93,4.93,0,0,1-1.44,3.49h0l-8.36,8.33-.1-.1L2.4,9.38a4.94,4.94,0,0,1,0-7Z" style="fill:#fff"/></g></g></svg></div></a>';
		}
		else
		{
			var ws_style="";
			ws_style="fill:#fb4b57";
			ws_status=1;
		    var wishlist='<a href="#" class="remove_wishlistbtn" data-pid="'+i.id+'" data-status="'+ws_status+'"><div class="fav_heart_new fav_heart_new_'+i.id+'"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.5 18.86"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M19.61,1.86a5.85,5.85,0,0,0-8.28,0l-.58.58-.58-.59A5.85,5.85,0,1,0,1.9,10.13l8.42,8.41a.58.58,0,0,0,.42.18.65.65,0,0,0,.43-.17l8.43-8.41a5.85,5.85,0,0,0,0-8.28Z" style="'+ws_style+'"/><path d="M1.73,10l8.68,8.68a.47.47,0,0,0,.66,0l8.7-8.67a5.88,5.88,0,1,0-8.31-8.32l-.7.7L10,1.73A5.88,5.88,0,0,0,0,5.88,5.82,5.82,0,0,0,1.73,10ZM2.39,2.4a4.93,4.93,0,0,1,7,0l1.05,1.05a.48.48,0,0,0,.67,0l1-1A5,5,0,0,1,15.62,1,5,5,0,0,1,20.55,5.9a4.93,4.93,0,0,1-1.44,3.49h0l-8.36,8.33-.1-.1L2.4,9.38a4.94,4.94,0,0,1,0-7Z" style="fill:#fff"/></g></g></svg></div></a>';	
		}
		var arrow_class="";
		if(JSON.parse(i.photos).length==0)
		{
			arrow_class="left_right_arrow_hide";
		}
		var overall='<div class="col-md-4 col-sm-12 col-xs-12 search_slider mapmarker_hover list_id_'+i.id+'" data-id="'+i.id+'" marker-id="'+j+'" ><div class="searchbar_img" data-images=\''+i.photos+'\' data-id="-1" data-imgcount="'+JSON.parse(i.photos).length+'" data-proid="'+i.id+'"><a href="'+baseurl+'rooms/'+i.id+'"><div class="slider_img responsive_img_base mapimgclass'+i.id+'" data-img="'+i.cover_photo+'" style="background:url('+baseurl+'images/site/product/'+photos+');"></div></a><span class="search_img_previous_map '+arrow_class+'"> <i class="fa fa-angle-left"></i> </span><span class="search_img_next_map '+arrow_class+'"> <i class="fa fa-angle-right"> </i></span></div><div class="slider_content"><h3>'+currency_symbol+''+Math.round((currency_rate*i.price))+' <span>'+i.listing_title+'</span></h3><p>'+rmtype+' - '+beds+'</p><div class="clearfix"></div>';
		
		var reviews='<div class="reviews"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><span>1 '+lang_reviews+'</span></div></div>'+wishlist+'</div>';
		
		var html='<div class="col-md-4 col-sm-12 col-xs-12 search_slider mapmarker_hover list_id_'+i.id+'" data-id="'+i.id+'" marker-id="'+j+'"><div class="searchbar_img" data-images=\''+i.photos+'\' data-id="-1" data-imgcount="'+JSON.parse(i.photos).length+'" data-proid="'+i.id+'"><a href="'+baseurl+'rooms/'+i.id+'"><div class="slider_img responsive_img_base imgclass'+i.id+'" data-img="'+i.cover_photo+'" style="background:url('+baseurl+'images/site/product/'+photos+');"></div></a><span class="search_img_previous '+arrow_class+'"> <i class="fa fa-angle-left"></i> </span><span class="search_img_next '+arrow_class+'"><i class="fa fa-angle-right"></i></span></div><div class="slider_content"><h3>'+currency_symbol+''+Math.round((currency_rate*i.price))+' <span>'+i.listing_title+'</span></h3><p>'+rmtype+' - '+beds+'</p><div class="clearfix"></div>';
		
		left_sidebar_html=left_sidebar_html+html+reviews;
		
		var contentString = overall+reviews; 
		var marker = new MarkerWithLabel({
		   position:  new google.maps.LatLng(i.latitude,i.longitude),
		   map: map,
		   draggable: false,
		   raiseOnDrag: false,
		   labelContent: currency_symbol+''+Math.round((currency_rate*i.price)),
		   labelAnchor: new google.maps.Point(3, 30),
		   labelClass: "marker_box mapmarker"+i.id, 
		   labelInBackground: false,
		   icon:" "
		 });
		bounds.extend(marker.position);
		map.fitBounds(bounds);
		google.maps.event.addListener(map, 'idle', function(event) {});
	  

		google.maps.event.addListener(marker, 'click', function() {
			infowindow.setContent(contentString); 
			infowindow.open(map,marker);
		});

		google.maps.event.addListener(marker, "mouseover", function() {
			  marker.setZIndex(100);
		});
		google.maps.event.addListener(marker, "mouseout", function() {
			  marker.setZIndex(1);
		});
		markers.push(marker);
		gmarkers.push(marker);
		$("#product_list_box").html(left_sidebar_html);		j++;
		});
		}
		else
		{
		$("#product_list_box").html("<span>"+no_avalible_list+".</span>");	
		}
		$("#rentals_count").text(product_list_json.length);
		

}	
	function marker_reset(map) {
		for (var i = 0; i < markers.length; i++) {
			markers[i].setMap(map);
		}
	}
	$(document).on("mouseover",".mapmarker_hover",function(){   
   var prop_id=$(this).attr('data-id');
   $(".mapmarker"+prop_id).addClass("mover");
  /*  moveToLocation(1,3); */
	}); 
	$(document).on("mouseout",".mapmarker_hover",function(){  
	   var prop_id=$(this).attr('data-id');
	   $(".mapmarker"+prop_id).removeClass("mover");
	});

   $(document).on("click",".remove_wishlistbtn",function(){
	 var pid=$(this).attr("data-pid");
	 var wid=$("#wishlist_id").val();
	 swal({
		  title: you_want_remove_home+"?",
		  text: "",
		  type: "",
		  showCancelButton: true,
		  confirmButtonColor: "#DD6B55",
		  confirmButtonText: yes_remove,
		  cancelButtonText: cancel,
		  closeOnConfirm: true,
		  closeOnCancel: true
		},
		function(isConfirm){
		  if (isConfirm) {
			var ajax_data={"pid":pid,"wid":wid};
			ajax_data[csrf_key]=csrf_value;
			 $.post(baseurl+"site/search/remove_wishlist_product",ajax_data,function(data){   });	
			 var marker_id=$(".list_id_"+pid).attr("marker-id");
			 $(".list_id_"+pid).remove();
			 $(".mapmarker"+pid).remove();
			 /*  new code add by surya */
			if ($("#product_list_box").is(':empty')){
				 $("#product_list_box").html("<span>"+no_avalible_list+".</span>");	 
			}
			/*  new code add by surya */
		  } 
		  
});
	
 })	
 $(document).on("click",".new_wishlist_createbtn",function(){
	 var wishlist_name=$("#new_wishlist_name").val();
	if(wishlist_name==""){
		$("#new_wishlist_name").focus(); return false;
	}
	var ajax_data={"wishlist_name":wishlist_name};
			ajax_data[csrf_key]=csrf_value;
	 $.post(baseurl+"site/search/save_wishlist",ajax_data,function(data){
		var data=JSON.parse(data);
		if(data.status==1){
			swal({title: success, text: wish_list_create_success+'.', type: "success"},
					function(){ 
							window.location.reload();	   
						  	}
								);
			

		}
		else{
			swal(oops,soming_went_wrong,'error');
			swal({title: error, text: soming_went_wrong, type: "error"},
											   function(){ 
												  window.location.reload();	   
												   }
												);
		}
	   });
   
})	
 $(document).on("click",".delete_wishlist",function(){
	 var wid=$(this).attr("data-wid");
	 swal({
		  title: want_remove_list+"?",
		  text: "",
		  type: "",
		  showCancelButton: true,
		  confirmButtonColor: "#DD6B55",
		  confirmButtonText: yes_remove,
		  cancelButtonText: cancel,
		  closeOnConfirm: true,
		  closeOnCancel: true
		},
		function(isConfirm){
		  if (isConfirm) {
			var ajax_data={"wid":wid};
			ajax_data[csrf_key]=csrf_value;
			 $.post(baseurl+"site/search/remove_wishlist",ajax_data,function(data){   });	
			$(".wishlist_id_"+wid).remove();
			 /*  new code add by surya */
			 if ($.trim($('.save_list_prop_base').html())=="") {
				$(".save_list_prop_base").html(no_wish_list);	 
		   }
		   /*  new code add by surya */
			
		  } 
});
	
 })	
  $(document).on("click",".search_img_next",function(){   
   var img_data=JSON.parse($(this).parent().attr('data-images'));
   var img_count=$(this).parent().attr('data-imgcount');
   var data_proid=$(this).parent().attr('data-proid');
   var data_id=$(this).parent().attr('data-id');
   if(img_count!=0){
   if(data_id=="-1")
   {
	   $(this).parent().attr('data-id',0);
	   $(".imgclass"+data_proid).attr("style","background:url('"+baseurl+"images/site/product/"+img_data[0]+"')");
   }
   else if(data_id==(img_count-1)){
	   $(this).parent().attr('data-id',-1);
	   $(".imgclass"+data_proid).attr("style","background:url('"+baseurl+"images/site/product/"+ $(".imgclass"+data_proid).attr("data-img")+"')");
   }
   else
   {
	   $(this).parent().attr('data-id',parseInt(data_id)+1);
	   $(".imgclass"+data_proid).attr("style","background:url('"+baseurl+"images/site/product/"+img_data[parseInt(data_id)+1]+"')");
   }
   }
  
});
   $(document).on("click",".search_img_previous",function(){ 	
   var img_data=JSON.parse($(this).parent().attr('data-images'));
   var img_count=$(this).parent().attr('data-imgcount');
   var data_proid=$(this).parent().attr('data-proid');
   var data_id=$(this).parent().attr('data-id');
   if(img_count!=0){
   if(data_id=="-1")
   {
	   $(this).parent().attr('data-id',parseInt(img_count)-1);
	   $(".imgclass"+data_proid).attr("style","background:url('"+baseurl+"images/site/product/"+img_data[parseInt(img_count)-1]+"')");
   }
   else if(data_id==0){
	   $(this).parent().attr('data-id',-1);
	   $(".imgclass"+data_proid).attr("style","background:url('"+baseurl+"images/site/product/"+ $(".imgclass"+data_proid).attr("data-img")+"')");
   }
   else
   {
	   $(this).parent().attr('data-id',parseInt(data_id)-1);
	   $(".imgclass"+data_proid).attr("style","background:url('"+baseurl+"images/site/product/"+img_data[parseInt(data_id)-1]+"')");
   }
   }
  
}); 
$(document).on("click",".search_img_next_map",function(){   
   var img_data=JSON.parse($(this).parent().attr('data-images'));
   var img_count=$(this).parent().attr('data-imgcount');
   var data_proid=$(this).parent().attr('data-proid');
   var data_id=$(this).parent().attr('data-id');
   if(img_count!=0){
   if(data_id=="-1")
   {
	   $(this).parent().attr('data-id',0);
	   $(".mapimgclass"+data_proid).attr("style","background:url('"+baseurl+"images/site/product/"+img_data[0]+"')");
   }
   else if(data_id==(img_count-1)){
	   $(this).parent().attr('data-id',-1);
	   $(".mapimgclass"+data_proid).attr("style","background:url('"+baseurl+"images/site/product/"+ $(".mapimgclass"+data_proid).attr("data-img")+"')");
   }
   else
   {
	   $(this).parent().attr('data-id',parseInt(data_id)+1);
	   $(".mapimgclass"+data_proid).attr("style","background:url('"+baseurl+"images/site/product/"+img_data[parseInt(data_id)+1]+"')");
   }
   }
  
});
    $(document).on("click",".search_img_previous_map",function(){   
   var img_data=JSON.parse($(this).parent().attr('data-images'));
   var img_count=$(this).parent().attr('data-imgcount');
   var data_proid=$(this).parent().attr('data-proid');
   var data_id=$(this).parent().attr('data-id');
   if(img_count!=0){
   if(data_id=="-1")
   {
	   $(this).parent().attr('data-id',parseInt(img_count)-1);
	   $(".mapimgclass"+data_proid).attr("style","background:url('"+baseurl+"images/site/product/"+img_data[parseInt(img_count)-1]+"')");
   }
   else if(data_id==0){
	   $(this).parent().attr('data-id',-1);
	   $(".mapimgclass"+data_proid).attr("style","background:url('"+baseurl+"images/site/product/"+ $(".mapimgclass"+data_proid).attr("data-img")+"')");
   }
   else
   {
	   $(this).parent().attr('data-id',parseInt(data_id)-1);
	   $(".mapimgclass"+data_proid).attr("style","background:url('"+baseurl+"images/site/product/"+img_data[parseInt(data_id)-1]+"')");
   }
   }
	});
 
 $(document).on("click","#trips_search_btn_current",function(){
	 var search_val=$("#trips_search_box_current").val().toLowerCase();
	 if(search_val!=""){ 
		if($('#table_current tr:not(".noresultrr")').length==1){ return false;} 
        $('#table_current tr').removeClass("hidetrrow"); 
        var array_ex=[];		
		$(".search_filter_content").each(function() { 
		   var htmlvalue=$(this).text().toLowerCase(); 		   
		   if(htmlvalue.match(search_val)){		   
			   if($.inArray($(this).attr('data-class'), array_ex) == -1){
				 array_ex.push($(this).attr('data-class'));
			   }
		   }		   
		 });
		 $('#table_current tr:not(.table_head_tr)').addClass("hidetrrow");
		 $.each(array_ex,function(index, value){ 			   
		       $("."+value).removeClass("hidetrrow");
   	    }); 
		
	   if(array_ex.length==0){
		 $(".noresult").remove();  
		 $('#table_current tr:last').after('<tr class="noresult"><td>'+no_trips+'.</td></tr>');	 
		 }
		 else{
			 $(".noresult").remove();
		 }
	
	 }
	 else{
	 $('#table_current tr').removeClass("hidetrrow"); 
	 }
 }) 
 $(document).on("click","#trips_search_btn_prev",function(){ 
	 var search_val=$("#trips_search_box_prev").val().toLowerCase(); console.log($('#table_prev tr').length);
	 if($('#table_prev tr:not(".noresultrr")').length==1){ return false;} 
	 if(search_val!=""){
		
        $('#table_prev tr').removeClass("hidetrrow_prev"); 
        var array_ex_prev=[];		
		$(".search_filter_content_prev").each(function() { 
		   var htmlvalue=$(this).text().toLowerCase(); 		   
		   if(htmlvalue.match(search_val)){		   
			   if($.inArray($(this).attr('data-class'), array_ex_prev) == -1){
				 array_ex_prev.push($(this).attr('data-class'));
			   }
		   }		   
		 });
		 $('#table_prev tr:not(.table_head_tr)').addClass("hidetrrow_prev");
		 $.each(array_ex_prev,function(index, value){ 			   
		       $("."+value).removeClass("hidetrrow_prev");
   	     })
		 if(array_ex_prev.length==0){
		 $(".noresult").remove();	 
		 $('#table_prev tr:last').after('<tr class="noresult"><td>'+no_trips+'.</td></tr>');	 
		 }
		 else{
			 $(".noresult").remove();
		 }
	
	
	 }
	 else{
	 $('#table_prev tr').removeClass("hidetrrow_prev"); 
	 }
 }) 

$(document).on("click",".cancellation_btn",function(){
	var bid=$(this).attr("data-bid");
	var pid=$(this).attr("data-pid");
	var ajax_data={"pid":pid,"bid":bid};
	ajax_data[csrf_key]=csrf_value;
	$.post(baseurl+'site/product/check_cancellation',ajax_data,function(data){
		var data=JSON.parse(data);
		if(data.status==1){
			swal({
			  title: want_cancel_booking+"?",
			  text: refundable_amount+" <b style='color:green'>"+data.currency+""+Math.round(currency_rate*data.refund_amount)+"</b>",
			  type: "warning",
			  html:true, 
			  showCancelButton: true,
			  showLoaderOnConfirm: true,
			  confirmButtonClass: "btn-danger",
			  confirmButtonText: yes_cancel_it+"!",
			  cancelButtonText: cancel,
			  closeOnConfirm: false
			},
			function(){
				var ajax_data={"pid":pid,"bid":bid};
	ajax_data[csrf_key]=csrf_value;
			  $.post(baseurl+'site/product/proceed_cancellation',ajax_data,function(data){
		       var data=JSON.parse(data);
			     if(data.status==1){
					 swal({title: success, text: data.message, type: "success"},
											   function(){ 
												  window.location.reload();	   
												   }
												);
						
				 }
				 else if(data.status==0){
					swal({title: oops, text: data.message, type: "error"},
											   function(){ 
												  window.location.reload();	   
												   }
												);
					}		
					else{
						 swal({title: oops, text: soming_went_wrong, type: "error"},
											   function(){ 
													   location.href=baseurl;
												   }
												);
					}	
			  });
			});
		}	
		else if(data.status==0){
			 swal({title: oops, text: cancellation_time_expired+"...", type: "error"},
								   function(){ 
										   
									   }
									);
		}		
		else{
			 swal({title: oops, text: soming_went_wrong, type: "error"},
								   function(){ 
										   location.href=baseurl;
									   }
									);
		}	
	});
}) 