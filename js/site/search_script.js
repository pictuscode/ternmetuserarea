
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
		

$('.footer_base').hide();
$('.language_close').hide();
});

$(function(){
		var height_head = $('.head_base').height();
		$('.head_base').addClass('body_search');
	

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
				$('.mobile_fiters_base').fadeOut()
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
     initMap();
	/*  make_marker_initial();  */
});
var infowindow = new google.maps.InfoWindow({ 
	size: new google.maps.Size(150,150)
});
var map;
var markers=[];  
var gmarkers=[];  
  function initMap(){  
		var myOptions = {
		scrollwheel: false,
		zoom:13,
		zoomControl:true,
		zoomControlOptions: {
		style:google.maps.ZoomControlStyle.SMALL,
		 position: google.maps.ControlPosition.LEFT_TOP
		},
		center: new google.maps.LatLng($("#lat_current").val(),$("long_current").val()),
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
		dosearch();
		} );
		google.maps.event.addListener(map, 'zoom_changed', function() {
		dosearch();
			});
		if($('.map_rgt').css('display') != 'none')
		{   var i=0; 
			google.maps.event.addListener(map, "idle", function() {
				var sw = new google.maps.LatLng($("#min_lat").val(),$("#min_long").val());
				var ne = new google.maps.LatLng($("#max_lat").val(),$("#max_long").val());
				var bounds = new google.maps.LatLngBounds(sw, ne);
				if(i < 2)map.fitBounds(bounds);
				i++;
			});
		}
		else 
		{ 
			make_marker_initial();
		}
	}
	
function make_marker_initial()
{   

		$("#product_list_box").html("");
		var product_list_json=JSON.parse($("#product_list_json").val());
		var wishlist_array=($("#wishlist_array").val());
		var left_sidebar_html='';
        if(product_list_json.length>0){		
	    product_list_json.forEach(function(i){	
		var photos=i.cover_photo==""?'product_img.png':i.cover_photo;
		var rmtype=shared_room;
		var beds=i.beds_count==0?i.beds_count+' '+bed_lang:i.beds_count+' '+beds_lang;
		if(i.room_type=="entire_home"){ rmtype=entire_place;}else if(i.room_type=="private_room"){ rmtype= private_room;} else{ rmtype=shared_room; } 
		if($("#logincheck").val()==""){
		   var wishlist='<a href="#" data-toggle="modal" data-target="#sign_in"><div class="fav_heart_new fav_heart_new_'+i.id+'"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.5 18.86"><title>AssetAsset 2</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M19.61,1.86a5.85,5.85,0,0,0-8.28,0l-.58.58-.58-.59A5.85,5.85,0,1,0,1.9,10.13l8.42,8.41a.58.58,0,0,0,.42.18.65.65,0,0,0,.43-.17l8.43-8.41a5.85,5.85,0,0,0,0-8.28Z" style="fill:rgba(0,0,0,0.2)"/><path d="M1.73,10l8.68,8.68a.47.47,0,0,0,.66,0l8.7-8.67a5.88,5.88,0,1,0-8.31-8.32l-.7.7L10,1.73A5.88,5.88,0,0,0,0,5.88,5.82,5.82,0,0,0,1.73,10ZM2.39,2.4a4.93,4.93,0,0,1,7,0l1.05,1.05a.48.48,0,0,0,.67,0l1-1A5,5,0,0,1,15.62,1,5,5,0,0,1,20.55,5.9a4.93,4.93,0,0,1-1.44,3.49h0l-8.36,8.33-.1-.1L2.4,9.38a4.94,4.94,0,0,1,0-7Z" style="fill:#fff"/></g></g></svg></div></a>';
		}
		else
		{
			var ws_style="";
			var wishlist_json=JSON.parse(wishlist_array)
			if($.inArray(i.id,wishlist_json)!==-1){
				ws_style="fill:#fb4b57";
				ws_status=1;
			}
			else
			{
				 ws_style="fill:rgba(0,0,0,0.2)";
				 ws_status=0;
			}
		/* 	if($.inArray(i.id,wishlist_array)!==-1){
				ws_style="fill:#fb4b57";
				ws_status=1;
			}
			else
			{
				 ws_style="fill:rgba(0,0,0,0.2)";
				 ws_status=0;
			} */
		    var wishlist='<a href="#" class="wishlistbtn" data-pid="'+i.id+'" data-status="'+ws_status+'"><div class="fav_heart_new fav_heart_new_'+i.id+'"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.5 18.86"><title>AssetAsset 2</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M19.61,1.86a5.85,5.85,0,0,0-8.28,0l-.58.58-.58-.59A5.85,5.85,0,1,0,1.9,10.13l8.42,8.41a.58.58,0,0,0,.42.18.65.65,0,0,0,.43-.17l8.43-8.41a5.85,5.85,0,0,0,0-8.28Z" style="'+ws_style+'"/><path d="M1.73,10l8.68,8.68a.47.47,0,0,0,.66,0l8.7-8.67a5.88,5.88,0,1,0-8.31-8.32l-.7.7L10,1.73A5.88,5.88,0,0,0,0,5.88,5.82,5.82,0,0,0,1.73,10ZM2.39,2.4a4.93,4.93,0,0,1,7,0l1.05,1.05a.48.48,0,0,0,.67,0l1-1A5,5,0,0,1,15.62,1,5,5,0,0,1,20.55,5.9a4.93,4.93,0,0,1-1.44,3.49h0l-8.36,8.33-.1-.1L2.4,9.38a4.94,4.94,0,0,1,0-7Z" style="fill:#fff"/></g></g></svg></div></a>';	
		}
		var arrow_class="";
		var pcount=0;
		if((i.photos)=="" || i.photos==" " || JSON.parse(i.photos).length==0)
		{
			arrow_class="left_right_arrow_hide";
			var pcount=0;
		}
		else{
			var pcount=JSON.parse(i.photos).length;
		}
		var overall='<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 search_slider mapmarker_hover" data-id="'+i.id+'"><div class="searchbar_img" data-images=\''+i.photos+'\' data-id="-1" data-imgcount="'+pcount+'" data-proid="'+i.id+'"><a href="'+baseurl+'rooms/'+i.id+'"><div class="slider_img responsive_img_base mapimgclass'+i.id+'" data-img="'+i.cover_photo+'" style="background:url('+baseurl+'images/site/product/'+photos+');"></div></a><span class="search_img_previous_map '+arrow_class+'"> <i class="fa fa-angle-left"></i> </span><span class="search_img_next_map '+arrow_class+'"> <i class="fa fa-angle-right"> </i></span></div><div class="slider_content"><h3>'+currency_symbol+''+Math.round((currency_rate*i.price))+' <span>'+i.listing_title+'</span></h3><p>'+rmtype+' - '+beds+'</p><div class="clearfix"></div>';
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
		var reviewst=i.total_reviews_count>1?s:"";
		var reviews='<div class="reviews">'+review_string+'<span>'+i.total_reviews_count+' '+lang_reviews+reviewst+'</span></div></div>'+wishlist+'</div>';
		
		var html='<div class="col-md-6 col-sm-6 col-xs-12 col-lg-4 search_slider mapmarker_hover" data-id="'+i.id+'"><div class="searchbar_img" data-images=\''+i.photos+'\' data-id="-1" data-imgcount="'+pcount+'" data-proid="'+i.id+'"><a href="'+baseurl+'rooms/'+i.id+'"><div class="slider_img responsive_img_base imgclass'+i.id+'" data-img="'+i.cover_photo+'" style="background:url('+baseurl+'images/site/product/'+photos+');"></div></a><span class="search_img_previous '+arrow_class+'"> <i class="fa fa-angle-left"></i> </span><span class="search_img_next '+arrow_class+'"><i class="fa fa-angle-right"></i></span></div><div class="slider_content"><h3>'+currency_symbol+''+Math.round((currency_rate*i.price))+' <span>'+i.listing_title+'</span></h3><p>'+rmtype+' - '+beds+'</p><div class="clearfix"></div>';
		
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
		$("#product_list_box").html(left_sidebar_html);		
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
	function dosearch()
	{   
		var checkin = $("#checkin").val();
		var checkout = $("#checkout").val();
		var zoom = map.getZoom();
		var bounds = map.getBounds();
		var minLat = bounds.getSouthWest().lat();
		var minLong = bounds.getSouthWest().lng();
		var maxLat = bounds.getNorthEast().lat();
		var maxLong = bounds.getNorthEast().lng();
        if(zoom==1){
			var minLat = $("#min_lat").val();
			var minLong =$("#min_long").val();
			var maxLat = $("#max_lat").val()
			var maxLong = $("#max_long").val();
		}
	    var formData = [];
	    var rmtype = [];
		$(".rmtype").each(function(i){
			if($(this).hasClass("rmtype_apply")){
				if($(this).is(":checked"))
				{
					rmtype.push($(this).val());
				}
			}
		});		
		
		var amtype = [];
		$(".amtype").each(function(i){
			if($(this).hasClass("morefilter_applied")){
				if($(this).is(":checked"))
				{
					amtype.push($(this).val());
				}
			}
		});		
		
		var proptype  = [];
		$(".proptype").each(function(i){
			if($(this).hasClass("morefilter_applied")){
				if($(this).is(":checked"))
				{
					proptype.push($(this).val());
				}
			}
		});		
		
		var rulestypes = [];
		$(".rulestypes").each(function(i){
			if($(this).hasClass("morefilter_applied")){
				if($(this).is(":checked"))
				{
					rulestypes.push($(this).val());
				}
			}
		});		
		
			
		
		var guest_count=$("#total_guest").attr("data-value");		
		var beds_count=$("#total_beds").attr("data-value");		
		var bedroom_count=$("#total_bedrooms").attr("data-value");		
		var bathroom_count=$("#total_bathrooms").attr("data-value");		
		var pagination_no=$("#pagination_no").val();
		if($("#min_price").hasClass("price_apply")){
		  var min_price=$("#min_price").val();
		  var max_price=$("#max_price").val();
		}
		else
		{
			var min_price=0;
			var max_price=0;
		}
		var instant_booking=0;
		if($("#cmn-toggle-1").hasClass("instant_apply")){
			if($("#cmn-toggle-1").is(":checked"))
				{
		          var instant_booking=1;
				}
		}
		
		formData.push({ name: "rmtype", value: rmtype });
		formData.push({ name: "amtype", value: amtype });
		formData.push({ name: "proptype", value: proptype });
		formData.push({ name: "rulestypes", value: rulestypes });
        formData.push({ name: "guest_count", value: guest_count });
        formData.push({ name: "beds_count", value: beds_count });
        formData.push({ name: "bedroom_count", value: bedroom_count });
        formData.push({ name: "bathroom_count", value: bathroom_count });
        formData.push({ name: "min_price", value: min_price });
        formData.push({ name: "max_price", value: max_price });
        formData.push({ name: "instant_booking", value: instant_booking });
        formData.push({ name: "zoom", value: zoom });
        formData.push({ name: "min_lat", value: minLat });
        formData.push({ name: "min_long", value: minLong });
        formData.push({ name: "max_lat", value: maxLat });
        formData.push({ name: "max_long", value: maxLong });
        formData.push({ name: "pagination_no", value: pagination_no });
        formData.push({ name: "checkin", value: checkin });
        formData.push({ name: "checkout", value: checkout });
        $.post(baseurl+"site/search/ajax_search",formData,function(data){
			 var data1=JSON.parse(data);
			 marker_reset(null);
			 $("#product_list_json").val(JSON.stringify(data1.product_list_json));
			 $("#wishlist_array").val(JSON.stringify(data1.wishlist_array));
			 $("#page_link").html(data1.page_link);
			 $("#page_link_details").html(data1.page_link_details);
			 make_marker_initial();
		 });
	}
	
	function dosearch_mobile()
	{   
		
		
		/* var zoom = map.getZoom();
		var bounds = map.getBounds();
		var minLat = bounds.getSouthWest().lat();
		var minLong = bounds.getSouthWest().lng();
		var maxLat = bounds.getNorthEast().lat();
		var maxLong = bounds.getNorthEast().lng();
         */
		var checkin = $("#checkin").val();
		var checkout = $("#checkout").val();
		var minLat = $("#min_lat").val();
		var minLong =$("#min_long").val();
		var maxLat = $("#max_lat").val()
		var maxLong = $("#max_long").val();
	    var formData = [];
	    var rmtype = [];
		$(".mrmtype").each(function(i){
			
				if($(this).is(":checked"))
				{
					rmtype.push($(this).val());
				}
			
		});		
		
		var amtype = [];
		$(".mamtype").each(function(i){
			if($(this).is(":checked"))
				{
					amtype.push($(this).val());
				}
			
		});		
		
		var proptype  = [];
		$(".mproptype").each(function(i){
			if($(this).is(":checked"))
				{
					proptype.push($(this).val());
				}
		});		
		
		var rulestypes = [];
		$(".rulestypes").each(function(i){
			if($(this).hasClass("morefilter_applied")){
				if($(this).is(":checked"))
				{
					rulestypes.push($(this).val());
				}
			}
		});		
		
			
		
		var guest_count=$("#total_guest").attr("data-value");		
		var beds_count=$("#total_beds").attr("data-value");		
		var bedroom_count=$("#total_bedrooms").attr("data-value");		
		var bathroom_count=$("#total_bathrooms").attr("data-value");		
		var pagination_no=$("#pagination_no").val();		
		  var min_price=$("#min_price").val();
		  var max_price=$("#max_price").val();
		
		var instant_booking=0;
		
			if($("#cmn-toggle-1").is(":checked"))
				{
		          var instant_booking=1;
				}
	
		
		formData.push({ name: "rmtype", value: rmtype });
		formData.push({ name: "amtype", value: amtype });
		formData.push({ name: "proptype", value: proptype });
		formData.push({ name: "rulestypes", value: rulestypes });
        formData.push({ name: "guest_count", value: guest_count });
        formData.push({ name: "beds_count", value: beds_count });
        formData.push({ name: "bedroom_count", value: bedroom_count });
        formData.push({ name: "bathroom_count", value: bathroom_count });
        formData.push({ name: "min_price", value: min_price });
        formData.push({ name: "max_price", value: max_price });
        formData.push({ name: "instant_booking", value: instant_booking });
        formData.push({ name: "zoom", value: zoom });
        formData.push({ name: "min_lat", value: minLat });
        formData.push({ name: "min_long", value: minLong });
        formData.push({ name: "max_lat", value: maxLat });
        formData.push({ name: "max_long", value: maxLong });
        formData.push({ name: "pagination_no", value: pagination_no });
		formData.push({ name: "checkin", value: checkin });
        formData.push({ name: "checkout", value: checkout });
        $.post(baseurl+"site/search/ajax_search",formData,function(data){
			 var data1=JSON.parse(data);
			 marker_reset(null);
			 $("#product_list_json").val(JSON.stringify(data1.product_list_json));
			 $("#page_link").html(data1.page_link);
			  $("#wishlist_array").val(JSON.stringify(data1.wishlist_array));
			 $("#page_link_details").html(data1.page_link_details);
			 make_marker_initial();
		 });
	}
	
	$(document).on("click",".mobfilter",function(){
		var mob_fil_count=0;
		$(".mobfilter").each(function(i){
			if($(this).is(":checked")){
				mob_fil_count++;
			}
		})
		$("#mob_fil_count").text("("+mob_fil_count+")");
		dosearch_mobile();
	})
	$(document).on("click","#mobclearfilter",function(){
		
		$("#mob_fil_count").text("(0)");
		$(".mobfilter").each(function(i){
			$(this).prop("checked",false);
		});
		var $slider = $("#slider-range1");
        $slider.slider("values", 0, 0);
        $slider.slider("values", 1, $("#max_price").attr('data-value'));
        $( "#amount1" ).val( currency_symbol+"0"+
      " - "+currency_symbol+"" + $( "#max_price" ).attr( "data-value" ) );
	  $("#dates_drop1").text(dates);
	  $("#checkin").val("");
	  $("#checkout").val("");
		dosearch_mobile();
	})
	
	$(function() {
		 paginate();
	 });

	 function paginate() {
		 $(document).on('click', '#ajax_pg li a', function(event) {
			 var url = $(this).attr('href');
			 $("#pagination_no").val(url.replace("/","").replace("#",""));
			 dosearch();
			 return false;
		 }).click(); //to trigger click event 
	 }	

$(document).ready(function(){
	$(".show_more_amt").click(function(){
		var data_val=$(this).attr("data-value");
		var data_class=$(this).attr("data-class");
		if(data_val=="more"){
		  $("."+data_class).attr("style","display:inline-block !important");
		  $(this).attr("data-value","less");
		  $(this).text(show_less_amenities+".");
		}
		else
		{ 
		  $("."+data_class).attr("style","display:none !important");
		  $(this).attr("data-value","more");
		  $(this).text(show_more_amenities+".");
		}	
	})


$(".countingbox_plus").click(function(){   
   var ex_count=parseInt($(this).prev('span').attr('data-value'))+1;
   $(this).prev('span').attr('data-value',ex_count);
   $(this).prev('span').text(ex_count);
   var colum_name=$(this).prev('span').attr('data-name');   
   var colum_value=ex_count;  
});
$(".countingbox_minus").click(function(){   
   if(parseInt($(this).next('span').attr('data-value'))>parseInt($(this).next('span').attr('data-min'))){ 
	   var cur_count=parseInt($(this).next('span').attr('data-value'));
	   var ex_count=parseInt($(this).next('span').attr('data-value'))-1;
	   $(this).next('span').attr('data-value',ex_count);
	   $(this).next('span').text(ex_count);
	   var colum_name=$(this).next('span').attr('data-name');   
	   var colum_value=ex_count;           
   }
});
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
$(document).on("mouseover",".mapmarker_hover",function(){   
   var prop_id=$(this).attr('data-id');
   $(".mapmarker"+prop_id).addClass("mover");
}); 
$(document).on("mouseout",".mapmarker_hover",function(){  
   var prop_id=$(this).attr('data-id');
   $(".mapmarker"+prop_id).removeClass("mover");
});

$(".apply_rmtype").click(function(){
	var rm_count=0;
	$(".rmtype").each(function(i){
			if($(this).is(":checked")){
				$(this).addClass("rmtype_apply");
				rm_count++;
			}
			else{
				$(this).removeClass("rmtype_apply");
			}	
		})
	$('.overlay').removeClass("active");
	$('#room_type_drop').text(rm_count+" "+$('#room_type_drop').attr("data-text"));
	dosearch();
	$("#room_type_drop").dropdown("toggle");
	$("#room_type_drop").addClass("selected_active");
});
$(".clear_rmtype").click(function(){
	$('.rmtype').removeClass("rmtype_apply");
	$('.overlay').removeClass("active");
	$('.rmtype').prop("checked",false);
	dosearch();
	$("#room_type_drop").dropdown("toggle");
	$('#room_type_drop').text($('#room_type_drop').attr("data-text"));
	$("#room_type_drop").removeClass("selected_active");
});
$("#room_type_drop").click(function(){
	$(".rmtype").each(function(i){
			if($(this).hasClass("rmtype_apply")){
				$(this).prop("checked",true);
			}
			else{
				$(this).prop("checked",false);
			}
		})
	
});

$(".apply_guest").click(function(){
	$('.overlay').removeClass("active");
	$("#total_guest").addClass("guest_apply");
	$("#guest_drop").dropdown("toggle");
	$("#guest_drop").addClass("selected_active");
	$("#guest_drop").html($("#total_guest").attr("data-value")==1?"Guests":$("#total_guest").attr("data-value")+" "+$("#guest_drop").attr("data-texts"));
	dosearch();
});
$(".clear_guest").click(function(){
	$('.overlay').removeClass("active");	
	$("#guest_drop").dropdown("toggle");
	$("#total_guest").attr("data-value",0);
	$("#total_guest").text(0);
	$("#total_guest").removeClass("guest_apply");
	$("#guest_drop").removeClass("selected_active");
	$("#guest_drop").html($('#total_guest').attr("data-text"));
	dosearch();
	
});
$("#guest_drop").click(function(){
	if(!$("#total_guest").hasClass("guest_apply"))
	{
		$("#total_guest").attr("data-value",1);
	    $("#total_guest").text(1);
	}
	
});
$(".apply_morefilter").click(function(){
	$('.overlay').removeClass("active");
	$(".apply_filter").addClass("morefilter_applied");
	$("#total_bedrooms").addClass("morefilter_applied");
	$("#total_beds").addClass("morefilter_applied");
	$("#total_bathrooms").addClass("morefilter_applied");
	$('#filter_more').stop().fadeOut();
	dosearch();
});
$(".clear_morefilter").click(function(){
	$('.overlay').removeClass("active");	
	$(".apply_filter").removeClass("morefilter_applied");
	$("#total_bedrooms").attr("data-value",0);
	$("#total_bedrooms").text(0);
	$("#total_bedrooms").removeClass("morefilter_applied");
	$("#total_beds").attr("data-value",0);
	$("#total_beds").text(0);
	$("#total_beds").removeClass("morefilter_applied");
	$("#total_bathrooms").attr("data-value",0);
	$("#total_bathrooms").text(0);
	$("#total_bathrooms").removeClass("morefilter_applied");
	$(".apply_filter").each(function(i){
			if($(this).hasClass("morefilter_applied")){
				$(this).prop("checked",true);
			}
			else{
				$(this).prop("checked",false);
			}
		})
	dosearch();
	
});
 
$(".apply_price").click(function(){
	$('.overlay').removeClass("active");
	$('#price_drop').text(currency_symbol+$("#min_price").val()+" - "+currency_symbol+$("#max_price").val());	
	$("#min_price").addClass("price_apply");
	$("#price_drop").dropdown("toggle");
	$("#price_drop").addClass("selected_active");
	dosearch();
});
$(".clear_price").click(function(){
	$('.overlay').removeClass("active");	
	$("#price_drop").dropdown("toggle");
	$('#price_drop').text($('#price_drop').attr("data-text"));
	$("#min_price").removeClass("price_apply");
	$("#price_drop").removeClass("selected_active");
	dosearch();
	
});
$("#price_drop").click(function(){
	if(!$("#min_price").hasClass("price_apply"))
	{
		var $slider = $("#slider-range");
        $slider.slider("values", 0, 0);
        $slider.slider("values", 1, $("#max_price").attr('data-value'));
        $( "#amount" ).val( currency_symbol+"0"+
      " - "+currency_symbol+"" + $( "#max_price" ).attr( "data-value" ) );
	}
	
});  
$(".apply_instant").click(function(){
	$('.overlay').removeClass("active");	
	$("#instant_drop").dropdown("toggle");	
	$("#cmn-toggle-1").addClass("instant_apply");
	if($("#cmn-toggle-1").is(":checked"))
	{
          $("#instant_drop").addClass("selected_active");		  
	}
	dosearch();
});
$(".clear_instant").click(function(){
	$('.overlay').removeClass("active");	
	$("#instant_drop").dropdown("toggle");
	$("#cmn-toggle-1").removeClass("instant_apply");
	$("#cmn-toggle-1").prop("checked",false); 
    $("#instant_drop").removeClass("selected_active");	
	dosearch();
	
});
$("#instant_drop").click(function(){
	if(!$("#cmn-toggle-1").hasClass("instant_apply"))
	{
          $("#cmn-toggle-1").prop("checked",false);  
	}
	
});  
    	
});
 $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: $("#max_price").val(),
      values: [ 0, 50000 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( currency_symbol + ui.values[ 0 ] + " - "+currency_symbol+"" + ui.values[ 1 ] );
		$("#min_price").val(ui.values[ 0 ]);
		$("#max_price").val(ui.values[ 1 ]);
      }
    });
    $( "#amount" ).val( currency_symbol + $( "#slider-range" ).slider( "values", 0 ) +
      " - "+currency_symbol+"" + $( "#slider-range" ).slider( "values", 1 ) );
  } );

  $( function() {
    $( "#slider-range1" ).slider({
      range: true,
      min: 0,
      max: $("#max_price").val(),
      values: [ 0, 50000 ],
      slide: function( event, ui ) {
        $( "#amount1" ).val( currency_symbol + ui.values[ 0 ] + " - "+currency_symbol+"" + ui.values[ 1 ] );
		$("#min_price").val(ui.values[ 0 ]);
		$("#max_price").val(ui.values[ 1 ]);
		dosearch_mobile(); 
      }
    });
    $( "#amount1" ).val( currency_symbol + $( "#slider-range1" ).slider( "values", 0 ) +
      " - "+currency_symbol+"" + $( "#slider-range1" ).slider( "values", 1 ) );
	  
  } );


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
$(document).ready(function(){
	$('.gm-style-iw').parent('div').css('background', 'red');
})
$(function() {

    var start = $("#checkin").val(); 
    var end = $("#checkout").val();
	
    function cb(start, end) {
         var start_string=get_language_month(start.format('MM-D'));
		 var end_string=get_language_month(end.format('MM-D'));	 
		 $("#checkin").val(start.format('YYYY-M-D'));
	     $("#checkout").val(end.format('YYYY-M-D'));
		 $('#dates_drop').html(start_string + ' - ' + end_string);
		 $('#dates_drop').removeClass("dropdown");
		 $('#dates_drop').addClass("selected_active");
		 dosearch();
    }
    if(start!=""){
    $('#dates_drop').daterangepicker({
        startDate: start,
        endDate: end,
		minDate:new Date(),
		locale: {
			"daysOfWeek": [sun,mon,tue,wed,thu,fri,sat]       
			, 
			"monthNames": [january,february,march,april,may,june,july,august,september,october,november,december],
		  format: 'YYYY-MM-DD',
		  cancelLabel: clear,
		  applyLabel: apply,
		}
       
    }, cb);
	}
	else{

	 $('#dates_drop').daterangepicker({

        minDate:new Date(),
		locale: { 
			"daysOfWeek": [sun,mon,tue,wed,thu,fri,sat]       
			, 
			"monthNames": [january,february,march,april,may,june,july,august,september,october,november,december],
			
			format: 'YYYY-MM-DD',
			cancelLabel: clear,
		    applyLabel: apply,
		}
       
    }, cb);	
	}
	if(start!="" && end!=""){
		var start_string=get_date_format(start);
		var end_string=get_date_format(end);
		
		 $('#dates_drop').html(start_string + ' - ' + end_string);
		 $('#dates_drop').removeClass("dropdown");
		 $('#dates_drop').addClass("selected_active");
	}
	
   $('#dates_drop').on('cancel.daterangepicker', function(ev, picker) {  
     $(this).html(dates);
	 $("#checkin").val('');
	 $("#checkout").val('');
	 $('#dates_drop').removeClass("selected_active");
	 $('#dates_drop').addClass("dropdown");
	 reset();
	 dosearch();
  });
  $('#dates_drop').on('apply.daterangepicker', function(ev, picker) {  
     dosearch();
  });
  
  function reset(){
	  function cb(start, end) { 
		var start_string=get_language_month(start.format('MM-D'));
		var end_string=get_language_month(end.format('MM-D'));
		 $("#checkin").val(start.format('YYYY-M-D'));
	     $("#checkout").val(end.format('YYYY-M-D'));
		 $('#dates_drop').html(start_string + ' - ' + end_string);
		 $('#dates_drop').removeClass("dropdown");
		 $('#dates_drop').addClass("selected_active");
         dosearch();
    }

    $('#dates_drop').daterangepicker({
        minDate:new Date(),
		locale: {
			"daysOfWeek": [sun,mon,tue,wed,thu,fri,sat]       
			, 
			"monthNames": [january,february,march,april,may,june,july,august,september,october,november,december],
		  format: 'YYYY-MM-DD',
		  cancelLabel: clear,
		  applyLabel: apply,
		}
       
    }, cb);
 $('#dates_drop').on('cancel.daterangepicker', function(ev, picker) {  
     $(this).html(dates);
	 $("#checkin").val('');
	 $("#checkout").val('');
	 $('#dates_drop').removeClass("selected_active");
	 $('#dates_drop').addClass("dropdown");
	 reset();
	 dosearch();
  });
   $('#dates_drop').on('apply.daterangepicker', function(ev, picker) {  
     dosearch();
  });
  }
   

});
/*for mobile*/
$(function() {

    var start = $("#checkin").val(); 
    var end = $("#checkout").val();
	
    function cb(start, end) {
         var start_string=get_date_format(start.format('YYYY-M-D'));
		 var end_string=get_date_format(end.format('YYYY-M-D'));
		 $("#checkin").val(start.format('YYYY-M-D'));
	     $("#checkout").val(end.format('YYYY-M-D'));
		 $('#dates_drop1').html(start_string + ' - ' + end_string);
		 $('#dates_drop1').removeClass("dropdown");
		 $('#dates_drop1').addClass("selected_active");
		 dosearch_mobile();
    }
    if(start!=""){
    $('#dates_drop1').daterangepicker({
        startDate: start,
        endDate: end,
		minDate:new Date(),
		locale: {
			"daysOfWeek": [sun,mon,tue,wed,thu,fri,sat]       
			, 
			"monthNames": [january,february,march,april,may,june,july,august,september,october,november,december],
		  format: 'YYYY-MM-DD',
		  cancelLabel: clear,
		  applyLabel: apply,
		}
       
    }, cb);
	}
	else{
	 $('#dates_drop1').daterangepicker({
        minDate:new Date(),
		locale: {
			"daysOfWeek": [sun,mon,tue,wed,thu,fri,sat]       
			, 
			"monthNames": [january,february,march,april,may,june,july,august,september,october,november,december],
		  format: 'YYYY-MM-DD',
		  cancelLabel: clear,
		  applyLabel: apply,
		}
       
    }, cb);	
	}
	if(start!="" && end!=""){
		 
		 var start_string=get_date_format(start);
		 var end_string=get_date_format(end);
		 $('#dates_drop1').html(start_string + ' - ' + end_string);
		 $('#dates_drop1').removeClass("dropdown");
		 $('#dates_drop1').addClass("selected_active");
	}
	
   $('#dates_drop1').on('cancel.daterangepicker', function(ev, picker) {  
     $(this).html('Dates');
	 $("#checkin").val('');
	 $("#checkout").val('');
	 $('#dates_drop1').removeClass("selected_active");
	 $('#dates_drop1').addClass("dropdown");
	 reset();
	 dosearch_mobile();
  });
  $('#dates_drop1').on('apply.daterangepicker', function(ev, picker) {  
     dosearch_mobile();
  });
  
  function reset(){
	  function cb(start, end) { 
	     var start_string=get_date_format(start.format('YYYY-M-D'));
		 var end_string=get_date_format(end.format('YYYY-M-D'));
		 $("#checkin").val(start.format('YYYY-M-D'));
	     $("#checkout").val(end.format('YYYY-M-D'));
		 $('#dates_drop1').html(start_string + ' - ' + end_string);
		 $('#dates_drop1').removeClass("dropdown");
		 $('#dates_drop1').addClass("selected_active");
         dosearch_mobile();
    }

    $('#dates_drop1').daterangepicker({
        minDate:new Date(),
		locale: {
			"daysOfWeek": [sun,mon,tue,wed,thu,fri,sat]       
			, 
			"monthNames": [january,february,march,april,may,june,july,august,september,october,november,december],
		  format: 'YYYY-MM-DD',
		  cancelLabel: clear,
		  applyLabel: apply,
		}
       
    }, cb);
 $('#dates_drop1').on('cancel.daterangepicker', function(ev, picker) {  
     $(this).html('Dates');
	 $("#checkin").val('');
	 $("#checkout").val('');
	 $('#dates_drop1').removeClass("selected_active");
	 $('#dates_drop1').addClass("dropdown");
	 reset();
	 dosearch_mobile();
  });
   $('#dates_drop1').on('apply.daterangepicker', function(ev, picker) {  
     dosearch_mobile();
  });
  }
   

});
/*for mobile*/
function get_date_format(dat){ 
	var dat_array=dat.split("-"); 
	var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
	return (dat_array[2]+' '+months[dat_array[1]-1]);
}
function updateQueryStringParameter(uri, key, value) {
  var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
  var separator = uri.indexOf('?') !== -1 ? "&" : "?";
  if (uri.match(re)) {
    return uri.replace(re, '$1' + key + "=" + value + '$2');
  }
  else {
    return uri + separator + key + "=" + value;
  }
}
function get_language_month(month){
var dat_array=month.split("-"); 
var language_months = [jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dec];
return (dat_array[1]+' '+language_months[dat_array[0]-1]);
}