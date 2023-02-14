$(document).on("click",".drop_down_base_guest .dropdown-menu",function(e) {
        e.stopPropagation();
});
$(document).ready(function(){
   
    var header_height = $('.search_header_base').height();
    if($('.edit_mode_base').length>0){
	  edit_mode = $('.edit_mode_base').height();
	}
	else{
	  edit_mode=0;	
	}
    product_banner = $('.product_images_base').height();
   total_height = header_height +  edit_mode + product_banner - 50;
   rgt_width = $('#rgt_checkin').outerWidth();
   product_content_height = $('.product_content_base').height();
   side_bar_height = $('.product_details_rgt_base').height();
   bottom_fixed = product_content_height -25;
   top_fixed = product_content_height +  total_height - 21;
$('.product_details_base').css('margin-top',header_height);
$('.product_details_rgt_base').css('width','319');
$('.contact_host_main_width').css('width','350');
$('#rgt_checkin').css('width', rgt_width);

$(window).scroll(function() { 
    if( $(this).scrollTop() > total_height ) {
        $('#rgt_checkin').css({
           "position": "fixed",
           "background": "#fff",
            "z-index":"5",
            "top": header_height + 25
            
        });
     

  } else{
    $('#rgt_checkin').css({
           "position": "inherit",
           "background": "#fff",
            "z-index":"5",
            "top": "inherit",
            
        });
  }
  
    
});
    
$(window).scroll(function() {
    if( $(this).scrollTop() > top_fixed  ) {
        $('#rgt_checkin').css({
           "position": "absolute",
           "background": "#fff",
            "z-index":"5",
            "top": bottom_fixed - 21
            
        });

    } 
});
})
$('#main_bannner').owlCarousel({
    loop:false,
    margin:15,
    nav:false,
	lazyLoad: true,
    responsive:{
        0:{
            items:1
        },
        600:{
			
            items:1
        },
        1000:{
	
            items:1
        }
    }
})
$('#sleep_arrange').owlCarousel({
    loop:false,
    margin:13,
	  nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
			
            items:3
        },
        1000:{
	
            items:3
			
        }
    }
	
})
 $('#hme_slider').owlCarousel({
            loop:false,
            margin:15,
            nav:true,
            navText:['<img src="'+baseurl+'images/slider_rgt.png">','<img src="'+baseurl+'images/slider_lft.png">'],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    nav:true,
                    items:2
                },
                1000:{
                    nav:true,
                    items:3,
                    
                }
            }
        })
    $('.edit_button_product').click(function(e){
    var tab = e.target.hash;  
    $('li > a[href="' + tab + '"]').tab("show"); 
	if(tab=="#location")
	{
		loadmap_tab();
	}
	else if(tab=="#bedroom")
	{    loadroom_tab();
	}
	else if(tab=="#amenities")
	{
		loadamenties_tab();
	}
	else if(tab=="#houserules")
	{
		loadhouserule_tab();
	}
	else if(tab=="#booking_price")
	{
		loadbooking_tab();
	}
});
$('.photo_edit').click(function(e){ 
    var tab = e.target.hash;  
    $('li > a[href="' + tab + '"]').tab("show");
	
	if(tab=="#location")
	{
		loadmap_tab();
	}
	else if(tab=="#bedroom")
	{    loadroom_tab();
	}
	else if(tab=="#amenities")
	{
		loadamenties_tab();
	}
	else if(tab=="#houserules")
	{
		loadhouserule_tab();
	}
	else if(tab=="#booking_price")
	{
		loadbooking_tab();
	}
});
$(document).ready(function(){
    $('#modal_detail').modal({
        show: false,
    keyboard: false,
    backdrop: 'static'
})
  var $gallery = $('.gallery-main').gallerie({});

})
$(document).ready(function(){
init_autocomplete();
similar_listing();	
})
function similar_listing()
{
	var pid=$("#pid").val(); 
	var left_sidebar_html="";
	var ajax_data={"pid":pid};
	ajax_data[csrf_key]=csrf_value;
	$.post(baseurl+"site/product/similar_listing",ajax_data,function(data){
		var product_list_json1=JSON.parse(data); 
		if(product_list_json1.status==1){
		product_list_json=product_list_json1.similar_listing;
		wishlist_array=product_list_json1.wishlist_array; 
		if(product_list_json.length>0){		
	    product_list_json.forEach(function(i){
		var photos=i.cover_photo==""?'product_img.png':i.cover_photo;
		var rmtype=shared_room;
		var beds=i.beds_count==0?i.beds_count+' '+bed_lang:i.beds_count+' '+beds_lang;
		if(i.room_type=="entire_home"){ rmtype= entire_place;}else if(i.room_type=="private_room"){ rmtype= private_room;} else{ rmtype=shared_room; } 
		if($("#logincheck").val()==""){
		   var wishlist='<a href="#" data-toggle="modal" data-target="#sign_in"><div class="fav_heart_new fav_heart_new_'+i.id+'"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.5 18.86"><title>AssetAsset 2</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M19.61,1.86a5.85,5.85,0,0,0-8.28,0l-.58.58-.58-.59A5.85,5.85,0,1,0,1.9,10.13l8.42,8.41a.58.58,0,0,0,.42.18.65.65,0,0,0,.43-.17l8.43-8.41a5.85,5.85,0,0,0,0-8.28Z" style="fill:rgba(0,0,0,0.2)"/><path d="M1.73,10l8.68,8.68a.47.47,0,0,0,.66,0l8.7-8.67a5.88,5.88,0,1,0-8.31-8.32l-.7.7L10,1.73A5.88,5.88,0,0,0,0,5.88,5.82,5.82,0,0,0,1.73,10ZM2.39,2.4a4.93,4.93,0,0,1,7,0l1.05,1.05a.48.48,0,0,0,.67,0l1-1A5,5,0,0,1,15.62,1,5,5,0,0,1,20.55,5.9a4.93,4.93,0,0,1-1.44,3.49h0l-8.36,8.33-.1-.1L2.4,9.38a4.94,4.94,0,0,1,0-7Z" style="fill:#fff"/></g></g></svg></div></a>';
		}
		else
		{
			var ws_style="";
			if($.inArray(i.id,wishlist_array)!==-1){
				ws_style="fill:#fb4b57";
				ws_status=1;
			}
			else
			{
				 ws_style="fill:rgba(0,0,0,0.2)";
				 ws_status=0;
			}
		    var wishlist='<a href="#" class="wishlistbtn" data-pid="'+i.id+'" data-status="'+ws_status+'"><div class="fav_heart_new fav_heart_new_'+i.id+'"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.5 18.86"><title>AssetAsset 2</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M19.61,1.86a5.85,5.85,0,0,0-8.28,0l-.58.58-.58-.59A5.85,5.85,0,1,0,1.9,10.13l8.42,8.41a.58.58,0,0,0,.42.18.65.65,0,0,0,.43-.17l8.43-8.41a5.85,5.85,0,0,0,0-8.28Z" style="'+ws_style+'"/><path d="M1.73,10l8.68,8.68a.47.47,0,0,0,.66,0l8.7-8.67a5.88,5.88,0,1,0-8.31-8.32l-.7.7L10,1.73A5.88,5.88,0,0,0,0,5.88,5.82,5.82,0,0,0,1.73,10ZM2.39,2.4a4.93,4.93,0,0,1,7,0l1.05,1.05a.48.48,0,0,0,.67,0l1-1A5,5,0,0,1,15.62,1,5,5,0,0,1,20.55,5.9a4.93,4.93,0,0,1-1.44,3.49h0l-8.36,8.33-.1-.1L2.4,9.38a4.94,4.94,0,0,1,0-7Z" style="fill:#fff"/></g></g></svg></div></a>';	
		}
		var arrow_class="";
		if(product_list_json.length<3)
		{
			arrow_class="left_right_arrow_hide";
		}
		var reviewval=i.total_rate_value==null?"0":parseInt(i.total_rate_value);
		var review_string="";
		if(reviewval!=0){
		if(reviewval<1){ review_string='<i class="fa fa-star-o" aria-hidden="true"></i>';}else{ review_string='<i class="fa fa-star" aria-hidden="true"></i>';}
		if(reviewval<2){ review_string+='<i class="fa fa-star-o" aria-hidden="true"></i>';}else{ review_string+='<i class="fa fa-star" aria-hidden="true"></i>';}
		if(reviewval<3){ review_string+='<i class="fa fa-star-o" aria-hidden="true"></i>';}else{ review_string+='<i class="fa fa-star" aria-hidden="true"></i>';}
		if(reviewval<4){ review_string+='<i class="fa fa-star-o" aria-hidden="true"></i>';}else{ review_string+='<i class="fa fa-star" aria-hidden="true"></i>';}
		if(reviewval<5){ review_string+='<i class="fa fa-star-o" aria-hidden="true"></i>';}else{ review_string+='<i class="fa fa-star" aria-hidden="true"></i>';}
		}else{
			review_string='<i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>';
		}
		var reviewst=i.total_reviews_count>1?"s":"";
		var reviews='<div class="reviews">'+review_string+'<span>'+i.total_reviews_count+' '+lang_reviews+'</span></div></div>'+wishlist+'</div>';
		
		var html='<div class="item"><div class="col-md-4 col-sm-6 col-xs-12 search_slider mapmarker_hover" data-id="'+i.id+'"><div class="searchbar_img" data-images=\''+i.photos+'\' data-id="-1" data-imgcount="'+i.photos.length+'" data-proid="'+i.id+'"><a href="'+baseurl+'rooms/'+i.id+'"><div class="slider_img responsive_img_base imgclass'+i.id+'" data-img="'+i.cover_photo+'" style="background:url('+baseurl+'images/site/product/'+photos+');"></div></a><span class="search_img_previous '+arrow_class+'"> <i class="fa fa-angle-left"></i> </span><span class="search_img_next '+arrow_class+'"><i class="fa fa-angle-right"></i></span></div><div class="slider_content"><h3>'+currency_symbol+''+Math.round((currency_rate*i.price))+' <span>'+i.listing_title+'</span></h3><p>'+rmtype+' - '+beds+'</p><div class="clearfix"></div>';
		
		left_sidebar_html=left_sidebar_html+html+reviews;
		$("#hme_slider").html(left_sidebar_html); 		
		});
		}
		else
		{
		$("#hme_slider").html("<span>"+no_avalible_list+".</span>");	
		}
		}
		else{
			$("#similar_list_slider").hide();
		}
	})
}
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
   {	   $(this).parent().attr('data-id',parseInt(data_id)-1);
	   $(".mapimgclass"+data_proid).attr("style","background:url('"+baseurl+"images/site/product/"+img_data[parseInt(data_id)-1]+"')");
   }
   }
	});
$(document).ready(function(){
	$("#edit_mode").click(function(){
		$(".host_mode_show").prop("style","display:inline-block !important");
	});	
	$("#prev_mode").click(function(){
		$(".host_mode_show").prop("style","display:none !important");
	});
	showmap();
	$(".close_icon_edit").click(function(){
		get_ajax_listinfo();
		$('#modal_detail').modal('hide');
	});
})

function get_ajax_listinfo()
{
	var ajax_data={"pid":$(".listing_base").attr('data-id')};
	ajax_data[csrf_key]=csrf_value;
	$.post(baseurl+"site/product/get_ajax_listing_detail",ajax_data,function(data){ 
    var data=JSON.parse(data);
	var photo_div='<div class="item"><a href="'+baseurl+'images/site/product/'+data.product_detail.cover_photo+'"><div class="detailpagebanner_img" style=background:url('+baseurl+'images/site/product/'+data.product_detail.cover_photo+'); alt="gallery"></div></a></div>';
	if(data.product_detail.photos==null || data.product_detail.photos==" " || data.product_detail.photos==""){
		var photos_length=0;
	}else{
	var photos_length=JSON.parse(data.product_detail.photos).length;
	var parray=JSON.parse(data.product_detail.photos);}
	if(photos_length>0)
	{    for(i=0;i<photos_length;i++){
		 photo_div=photo_div+'<div class="item"><a href="'+baseurl+'images/site/product/'+parray[i]+'"><div class="detailpagebanner_img" style=background:url('+baseurl+'images/site/product/'+parray[i]+'); alt="gallery"></div></a></div>'
	     }
	}
	$("#main_bannner").html('');
	$("#main_bannner").html(photo_div);
	$('#main_bannner').owlCarousel('destroy');
	 $('#main_bannner').owlCarousel({
		loop:false,
		margin:15,
		nav:false,
		responsive:{
			0:{
				items:1
			},
			600:{
				
				items:1
			},
			1000:{
		
				items:1
			}
		}
	})
	  var $gallery = $('.gallery-main').gallerie({}); 	
	  $gallery.gallerie('load');
	 $("#rtype_text").text(data.product_detail.rtype); 
	 if(data.product_detail.listing_title.length>25){
	     var listing_title_text=data.product_detail.listing_title.substr(0,25)+'...';
	 }
	 else{
		 var listing_title_text=data.product_detail.listing_title;
	 }
	 $("#listing_title_text").text(listing_title_text); 
	 $("#listing_title_text").attr('title',data.product_detail.address); 
	 
	 if(data.product_detail.address.length>25){
	     var address_text=data.product_detail.address.substr(0,25)+'...';
	 }
	 else{
		 var address_text=data.product_detail.address;
	 }
	 $("#address_text").text(address_text); 
	 $("#address_text").parent().attr('title',data.product_detail.address); 
	 $("#price_text").text(data.currency_symbol+data.product_detail.price); 
	 $("#guest_count_text").text(data.product_detail.guest_count); 
	 $("#beds_count_text").text(data.product_detail.beds_count); 
	 $("#bathroom_count_text").text(data.product_detail.bathroom_count); 
	 $("#bedroom_count_text").text(data.product_detail.bedroom_count); 
	 
	 if(data.product_detail.description.length>250){
	     var description_text=data.product_detail.description.substr(0,250)+'...';
		 $(".lsdescription").removeClass("hide_description");
		 $(".lsdescription-show").text(description_text);
		 $(".lsdescription-hide").text(data.product_detail.description);
	 }
	 else{
		 var description_text=data.product_detail.description;
		 $(".lsdescription").addClass("hide_description");
		 $(".lsdescription-show").text(description_text);
		 $(".lsdescription-hide").text(description_text);
	 }
	 if(data.beds_list!="")
	 {
	 $("#sleep_arrange").html('');
	 $("#sleep_arrange").html(data.beds_list);
	 $('#sleep_arrange').owlCarousel('destroy');
	 $('#sleep_arrange').owlCarousel({
			loop:false,
			margin:13,
			  nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					
					items:3
				},
				1000:{
			
					items:5
					
				}
			}
			
		})
	 }
     if(data.amt_count>1){
		 $("#amenities_text").html(data.amt_list); 
		 if(data.amt_count>5){
			$(".amt_readmore").removeClass("amenities_more_btn_hide"); 
		 }
		 else{
			$(".amt_readmore").addClass("amenities_more_btn_hide");  
		 }
	 }
	 
	 $("#rules_text").html(data.mainrule);
	 $("#rules_more_text").html(data.addrule);
	 if(data.extra_rule_count>0){
		 $(".extrarules_more").removeClass('hideextrarule');
	 }
	 else{
		 $(".extrarules_more").addClass('hideextrarule');
	 }
		
	});	
}
var map,marker;
function showmap() { 
	var myLatLng = {lat: parseFloat($(".mapaddress_box_btn").attr("data-lat")), lng: parseFloat($(".mapaddress_box_btn").attr("data-long"))};

	  map = new google.maps.Map(document.getElementById('mapaddress_box'), {
	  zoom: 15,
	  center: myLatLng,
	  fullscreenControl:false,
	  mapTypeControl:false,
	  draggable: true
	});
    
	 var marker = new google.maps.Marker({
		position: myLatLng,
		icon: baseurl+"images/site/location_pin.png",
		map: map
	  });             
	 $('a[href="#mapaddress_box"]').on('shown', function(e) {
            google.maps.event.trigger(map, 'resize');
        });
  }
 $(document).ready(function(){
	 $("#show_map_pin_location").click(function(){
		 var myLatLng = {lat: parseFloat($(".mapaddress_box_btn").attr("data-lat")), lng: parseFloat($(".mapaddress_box_btn").attr("data-long"))};
		map.setCenter(myLatLng); 
	 })
	 
 })

$(function() {
var fulldate=[];
var fulldate1=[];
flatpickr("#check_in_flat", { 
						"plugins": [new rangePlugin({ input: "#check_out_flat"})],
						altInput: true,
						altFormat: "j-n-Y",
						minDate: "today",
						locale: {
							weekdays: {
							shorthand: [sun,mon,tue,wed,thu,fri,sat],       
							}, 
							months: {
							longhand: [january,february,march,april,may,june,july,august,september,october,november,december],
							},
						},
						disable:JSON.parse(blockdate_array),
						onChange: function(selectedDates, dateStr, instance){ 
						fulldate=dateStr.split('to'); 
						checkin=formatDate(fulldate[0]);
						checkout=formatDate(fulldate[1]); 
						var pid=$("#pid").val();
						var total_guest_count=$("#total_guest_count").attr('data-value'); 
						if(checkin!="NaN-NaN-NaN" && checkout!="NaN-NaN-NaN" && checkin!="" && checkout!=""){
							$("#check_in_flat").attr('data-value',checkin);
							$("#check_out_flat").attr('data-value',checkout);
							var ajax_data={"pid":pid,'checkin':checkin,'checkout':checkout,'guest_count':total_guest_count};
	          				ajax_data[csrf_key]=csrf_value;
							$.post(baseurl+"site/product/ajax_get_price",ajax_data,function(data){ 
							  var data=JSON.parse(data);
							  if(data.status==1){
							  $("#ajax_load_html").html(data.result);
							  if(data.spl_date_price_text!=""){
								 $('.append_price_list').attr('title',data.spl_date_price_text); 
								 $('.append_price_list').html(' <i class="fa fa-question-circle"></i>'); 
								 tool_tip();
							  }
							  }
							  else if(status==0){
								  $("#ajax_load_html").html(data.message);
							  }
							});
						}
						}		
					}); 

flatpickr("#check_in_flat1", { 
						"plugins": [new rangePlugin({ input: "#check_out_flat1"})],
						altInput: true,
						altFormat: "j-n-Y",
						minDate: "today",
						'static': true,
						locale: {
							weekdays: {
							shorthand: [sun,mon,tue,wed,thu,fri,sat],       
							}, 
							months: {
							longhand: [january,february,march,april,may,june,july,august,september,october,november,december],
							},
						},
						disable:JSON.parse(blockdate_array),
						onChange: function(selectedDates, dateStr, instance){ 
						fulldate1=dateStr.split('to'); 
						checkin=formatDate(fulldate1[0]);
						checkout=formatDate(fulldate1[1]); 
						var pid=$("#pid").val();
						var total_guest_count=$("#total_guest_count1").attr('data-value'); 
						if(checkin!="NaN-NaN-NaN" && checkout!="NaN-NaN-NaN" && checkin!="" && checkout!=""){ 
							$("#check_in_flat1").attr('data-value',checkin);
							$("#check_out_flat1").attr('data-value',checkout);
							var ajax_data={"pid":pid,'checkin':checkin,'checkout':checkout,'guest_count':total_guest_count};
							ajax_data[csrf_key]=csrf_value;
							$.post(baseurl+"site/product/ajax_get_price_for_contact_host",ajax_data,function(data){ 
							  var data=JSON.parse(data);
							  if(data.status==1){
							  $("#ajax_load_html1").html(data.result);
							  if(data.spl_date_price_text!=""){
								 $('.append_price_list1').attr('title',data.spl_date_price_text); 
								 $('.append_price_list1').html(' <i class="fa fa-question-circle"></i>'); 
								 tool_tip();
							  }
							  }
							  else if(status==0){
								  $("#ajax_load_html1").html(data.message);
							  }
							});
						}
						}		
					}); 
 
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

$(document).on("click",".countingbox_plus_detail",function(){ 
     
   var ex_count=parseInt($(this).prev('span').attr('data-value'))+1;
 if(ex_count<=parseInt($(this).prev('span').attr('data-max'))){  
   $(this).prev('span').attr('data-value',ex_count);
   $(this).prev('span').text(ex_count);
   if(ex_count==1){
	   var textval=ex_count+' '+guest;
   }
   else{
	   var textval=ex_count+' '+guests;
   }
   $("#guest_dropdown").html(textval);
   var guest_count1=$("#total_guest_count").attr("data-value");
   var ajax_data={"guest_count":guest_count1};
	ajax_data[csrf_key]=csrf_value;
   $.post(baseurl+"site/product/save_guest_for_booking",ajax_data,function(data){})
  }
});
$(document).on("click",".countingbox_minus_detail",function(){   
   if(parseInt($(this).next('span').attr('data-value'))>parseInt($(this).next('span').attr('data-min'))){ 
		   var cur_count=parseInt($(this).next('span').attr('data-value'));
		   var ex_count=parseInt($(this).next('span').attr('data-value'))-1;
		   $(this).next('span').attr('data-value',ex_count);
		   $(this).next('span').text(ex_count);
		   if(ex_count==1){
	       var textval=ex_count+' '+guest;
		   }
		   else{
			   var textval=ex_count+' '+guests;
		   }
		   $("#guest_dropdown").html(textval);
		    var guest_count1=$("#total_guest_count").attr("data-value");
			var ajax_data={"guest_count":guest_count1};
			ajax_data[csrf_key]=csrf_value;
            $.post(baseurl+"site/product/save_guest_for_booking",ajax_data,function(data){})
		   }
});

$(document).on("click",".countingbox_plus_detail1",function(){ 
     
   var ex_count=parseInt($(this).prev('span').attr('data-value'))+1;
 if(ex_count<=parseInt($(this).prev('span').attr('data-max'))){  
   $(this).prev('span').attr('data-value',ex_count);
   $(this).prev('span').text(ex_count);
   if(ex_count==1){
	   var textval=ex_count+' '+guest;
   }
   else{
	   var textval=ex_count+' '+guests;
   }
   $("#guest_dropdown1").html(textval);
   var guest_count1=$("#total_guest_count1").attr("data-value");
   var ajax_data={"guest_count":guest_count1};
			ajax_data[csrf_key]=csrf_value;
   $.post(baseurl+"site/product/save_guest_for_booking",ajax_data,function(data){})
  }
});
$(document).on("click",".countingbox_minus_detail1",function(){   
   if(parseInt($(this).next('span').attr('data-value'))>parseInt($(this).next('span').attr('data-min'))){ 
		   var cur_count=parseInt($(this).next('span').attr('data-value'));
		   var ex_count=parseInt($(this).next('span').attr('data-value'))-1;
		   $(this).next('span').attr('data-value',ex_count);
		   $(this).next('span').text(ex_count);
		   if(ex_count==1){
	       var textval=ex_count+' '+guest;
		   }
		   else{
			   var textval=ex_count+' '+guests;
		   }
		   $("#guest_dropdown1").html(textval);
		    var guest_count1=$("#total_guest_count1").attr("data-value");
			var ajax_data={"guest_count":guest_count1};
			ajax_data[csrf_key]=csrf_value;
            $.post(baseurl+"site/product/save_guest_for_booking",ajax_data,function(data){})
		   }
});
$(document).on("click","#submit_booking_contact_host_btn",function(){
	
  if($('.ajax_load_html_booking_okay1').length==1)
  {
	 
  	  var message_box=$("#message_box").val(); 
	  if(message_box==""){
		  $("#message_box").focus(); return false;
	  }
  	  var pid=$("#pid").val();
	  var checkin=$("#check_in_flat1").attr('data-value');
	  var checkout=$("#check_out_flat1").attr('data-value');
	  var ajax_data={'message_box':message_box};
			ajax_data[csrf_key]=csrf_value;
	  $.post(baseurl+"site/product/save_enquiry",ajax_data,function(data){
		  var data=JSON.parse(data);
		  if(data.status==1){
			  swal({title: success, text: enquiry_send_success+"...", type: "success"},
								   function(){ 
										   location.reload();
									   }
			);
		  }
		  else{
			   swal({title: oops, text: try_again+"...", type: "error"},
								   function(){ 
										   location.reload();
									   }
			);
		  }
	  })
		   
  }
  else{
	  swal(oops,choose_date,"error");
	  $("#check_in_flat1").focus();
  }

});

$(document).on("click","#submit_booking_btn",function(){
	
  if($('.ajax_load_html_booking_okay').length==1)
  {
	  var pid=$("#pid").val();
	  var checkin=$("#check_in_flat").attr('data-value');
	  var checkout=$("#check_out_flat").attr('data-value');
	  window.location.href=baseurl+"payment/book/house-rules?checkin="+checkin+"&checkout="+checkout+"room="+pid;
  }
  else{
	  swal(oops,choose_date,"error");
	  $("#check_in_flat").focus();
  }

});

$(document).on("change","#review_number_based_sort",function(){
	var r_no=$(this).val();
	var pid=$("#pid").val();
	var ajax_data={"rno":r_no,"pid":pid};
			ajax_data[csrf_key]=csrf_value;
	$.post(baseurl+"site/user/review_number_based_sort",ajax_data,function(data){
		$("#stat_review_html").html(data);
	})
	
	
})	