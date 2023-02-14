<?php $this->load->view('site/search/header_search');	?>
	<section>
		<div class="col-md-12 col-sm-12 col-xs-12 saved_list_base">
		<div class="container">
		<div class="saved_list_inner col-md-12 col-sm-12 col-xs-12">

		<div class="col-md-12 col-sm-12 col-xs-12 save_list_tab no_margin_top">
		<div class="tab-content">
		<div role="tabpanel " class="tab-pane active  fade in" id="trips">


		<div class="container">
		<div class="col-md-12 col-sm-12 col-xs-12 your_listing_base your_trip_base">
		<div class="col-md-2 col-sm-2 col-xs-12 listing_tab_menu_lft ">
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#currenttrip" aria-controls="listing_you" role="tab" data-toggle="tab"><?php echo get_lang_site_key($lang_key,"home_lang","your_trips"); ?></a></li>
				<li role="presentation"><a href="#prevtrip" aria-controls="reserve" role="tab" data-toggle="tab"><?php echo get_lang_site_key($lang_key,"home_lang","previous_trips"); ?></a></li>
			</ul>
		</div>
		<div class="col-md-10 col-sm-10 col-xs-12 listing_tab_menu_rgt">
				<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="currenttrip">
							<div class="com-md-12 col-sm-12 col-xs-12 all_listing_filter_base">
								<h3><?php echo get_lang_site_key($lang_key,"home_lang","your_trips"); ?></h3>
								<div class="col-md-7 col-sm-7 col-xs-12 search_trips">
										<div class="col-md-9 col-sm-9 col-xs-12 search_trips_box">
											<input type="text" class="input-control" placeholder="<?php echo get_lang_site_key($lang_key,"home_lang","search_your_trips"); ?>" id="trips_search_box_current">
										</div>
										<div class="col-md-3 col-sm-3 col-xs-12 search_trip_btn">
												<button class="login_btn" id="trips_search_btn_current"><?php echo get_lang_site_key($lang_key,"home_lang","search"); ?></button>
										</div>
								</div>
							</div>
								<div class="col-md-12 col-sm-12 col-xs-12 reservation_details_base table-responsive">
								<table class="reservaion_table custom_width_class" id="table_current">
										<thead class="reservation_details_head">
												<tr class="table_head_tr">
														<th class="reserve_list_1"><?php echo get_lang_site_key($lang_key,"home_lang","booked_on"); ?></th>
														<th class="reserve_list_2"><?php echo get_lang_site_key($lang_key,"home_lang","booking_details"); ?></th>
														<th class="reserve_list_3"><?php echo get_lang_site_key($lang_key,"header_footer_lang","host"); ?></th>
														<th class="reserve_list_4"><?php echo get_lang_site_key($lang_key,"profile_lang","amount"); ?></th>
														<th class="reserve_list_5"><?php echo get_lang_site_key($lang_key,"home_lang","payment_status"); ?></th>
														<th class="reserve_list_6"> <?php echo get_lang_site_key($lang_key,"home_lang","approval_status"); ?></th>
												</tr>
											</thead>
											<tbody>
													<?php if($current_trips->num_rows()>0){ foreach($current_trips->result() as $ctrips){?>
													<tr class="hide_current_trip_<?php echo $ctrips->bid;?>">
														<td class=""><p><?php echo get_lang_site_key($lang_key,"common_lang",strtolower(date('M',strtotime($ctrips->bcreated)))).' '.date("d, Y",strtotime($ctrips->bcreated));?></p></td>
														<td>
																<h5><?php echo get_lang_site_key($lang_key,"common_lang",strtolower(date('M',strtotime($ctrips->checkin)))).' '.date("d",strtotime($ctrips->checkin));?> - <?php echo get_lang_site_key($lang_key,"common_lang",strtolower(date('M',strtotime($ctrips->checkout)))).' '.date("d, Y",strtotime($ctrips->checkout));?></h5>
																<a href="<?php echo base_url();?>rooms/<?php echo $ctrips->pid;?>"><h4 title="<?php echo $ctrips->listing_title;?>" class="search_filter_content" data-class="hide_current_trip_<?php echo $ctrips->bid;?>"><?php if(strlen($ctrips->listing_title)>20){echo (mb_substr($ctrips->listing_title,0,20))."...";} else { echo $ctrips->listing_title;}?></h4></a>
																<p><?php echo $ctrips->address;?></p>
																<p><?php echo get_lang_site_key($lang_key,"profile_lang","booking_no"); ?> : <span class="search_filter_content" data-class="hide_current_trip_<?php echo $ctrips->bid;?>" ><?php echo $ctrips->booking_id;?></span></p>
														</td>
														<?php if($ctrips->photo==""){ $img=base_url().'images/site/profile/avatar.png';} else { $img=base_url().'images/site/profile/'.$ctrips->photo;}?>
														<td class="user_img_table"><a href="<?php echo base_url();?>users/show/<?php echo $ctrips->host_id;?>"><img src="<?php echo $img;?>"></a></td>
														<td><p class="search_filter_content" data-class="hide_current_trip_<?php echo $ctrips->bid;?>"><?php echo $currency_symbol.round($currency_rate*$ctrips->total_price);?></p></td>
														<?php 
														if($ctrips->booking_status==3){ 
														$payment_status= get_lang_site_key($lang_key,"home_lang","paid");
														$payment_class="listed_sign";
														} 
														else if($ctrips->booking_status==4){ 
														$payment_status= get_lang_site_key($lang_key,"home_lang","cancelled");
														$payment_class="declined_cls";
														} 
														else {	
															if($ctrips->booking_status==0 || $ctrips->booking_status==2|| $ctrips->booking_status==5){ 
															$payment_status=  get_lang_site_key($lang_key,"profile_lang","pending");
															$payment_class="pending_for_apporval";} 
															else if($ctrips->booking_status==1){ 
															$payment_status=  'Pay';
															$payment_class="";}
															
														}
														if($ctrips->binstant_booking==0){
														if($ctrips->booking_status==0){ 
														$app_status= get_lang_site_key($lang_key,"profile_lang","pending");
														$app_class="pending_for_apporval";
														}
														else if($ctrips->booking_status==1|| $ctrips->booking_status==3){ 
														$app_status=  get_lang_site_key($lang_key,"home_lang","accepted");
														$app_class="listed_sign";
														}
														else if($ctrips->booking_status==2){
														$app_status=  get_lang_site_key($lang_key,"home_lang","declined");
														$app_class= "declined_cls";
														}
														else if($ctrips->booking_status==5){
														$app_status=  get_lang_site_key($lang_key,"home_lang","expired");
														$app_class="pending_for_apporval";
														}
													    }else{
														$app_status=  get_lang_site_key($lang_key,"product_lang","instant_booking");
														$app_class="listed_sign";	
														}
														
														?>
														<td>
														<p class="<?php echo $payment_class;?>">
														<?php if($payment_status=="Pay"){?><a href="<?php echo base_url();?>request_book_payment/<?php echo $ctrips->bid;?>"class="search_filter_content" data-class="hide_current_trip_<?php echo $ctrips->bid;?>"><?php echo get_lang_site_key($lang_key,"common_lang","pay") ?></a> <?php } else {?><span class="search_filter_content" data-class="hide_current_trip_<?php echo $ctrips->bid;?>"><?php echo $payment_status; }?></span></p>
														<?php if($ctrips->booking_status==3){?>
														<p><a href="javascript:void(0);" data-bid="<?php echo $ctrips->bid;?>" data-pid="<?php echo $ctrips->pid;?>" class="get_invoce cancellation_btn"><?php echo get_lang_site_key($lang_key,"common_lang","cancel") ?></a></p>
														<p><a href="<?php echo base_url();?>invoice/<?php echo $ctrips->bid;?>" class="get_invoce"><?php echo get_lang_site_key($lang_key,"home_lang","get_invoice") ?></a></p>
														<?php } ?>
														</td>
														<td><p class="<?php echo $app_class;?> search_filter_content" data-class="hide_current_trip_<?php echo $ctrips->bid;?>"><?php echo $app_status;?></p></td>
														
													</tr>
													<?php }} else {?>
													<tr class="noresultrr">
														<td class="custom_no_trips"><p><?php echo get_lang_site_key($lang_key,"home_lang","no_trips") ?>...</p></td>
														
														
													</tr>
													<?php } ?>
											</tbody>
								</table>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="prevtrip">
							<div class="com-md-12 col-sm-12 col-xs-12 all_listing_filter_base">
								<h3><?php echo get_lang_site_key($lang_key,"home_lang","previous_trips"); ?></h3>
								<div class="col-md-7 col-sm-7 col-xs-12 search_trips">
										<div class="col-md-9 col-sm-9 col-xs-12 search_trips_box">
											<input type="text" class="input-control" placeholder="<?php echo get_lang_site_key($lang_key,"home_lang","search_your_trips"); ?>" id="trips_search_box_prev">
										</div>
										<div class="col-md-3 col-sm-3 col-xs-12 search_trip_btn">
												<button class="login_btn" id="trips_search_btn_prev"><?php echo get_lang_site_key($lang_key,"home_lang","search") ?></button>
										</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 reservation_details_base table-responsive">

								<table class="reservaion_table custom_width_class" id="table_prev">
										<thead class="reservation_details_head">
												<tr class="table_head_tr">
														<th class="reserve_list_1"><?php echo get_lang_site_key($lang_key,"home_lang","booked_on"); ?></th>
														<th class="reserve_list_2"><?php echo get_lang_site_key($lang_key,"home_lang","booking_details"); ?></th>
														<th class="reserve_list_3"><?php echo get_lang_site_key($lang_key,"header_footer_lang","host"); ?></th>
														<th class="reserve_list_4"><?php echo get_lang_site_key($lang_key,"profile_lang","amount"); ?></th>
														<th class="reserve_list_5"><?php echo get_lang_site_key($lang_key,"home_lang","payment_status"); ?></th>
														<th class="reserve_list_6"> <?php echo get_lang_site_key($lang_key,"home_lang","approval_status"); ?></th>
												</tr>
											</thead>
																							<tbody>
													<?php if($previous_trips->num_rows()>0){ foreach($previous_trips->result() as $ctrips){?>
													<tr class="hide_current_trip_prev_<?php echo $ctrips->bid;?>">
														<td class=""><p><?php echo get_lang_site_key($lang_key,"common_lang",strtolower(date('M',strtotime($ctrips->bcreated)))).' '.date("d, Y",strtotime($ctrips->bcreated));?></p></td>
														<td>
																<h5><?php echo get_lang_site_key($lang_key,"common_lang",strtolower(date('M',strtotime($ctrips->checkin)))).' '.date("d",strtotime($ctrips->checkin));?> - <?php echo get_lang_site_key($lang_key,"common_lang",strtolower(date('M',strtotime($ctrips->checkout)))).' '.date("d, Y",strtotime($ctrips->checkout));?></h5>
																<a href="<?php echo base_url();?>rooms/<?php echo $ctrips->pid;?>"><h4 title="<?php echo $ctrips->listing_title;?>" class="search_filter_content_prev" data-class="hide_current_trip_prev_<?php echo $ctrips->bid;?>"><?php if(strlen($ctrips->listing_title)>20){echo (mb_substr($ctrips->listing_title,0,20))."...";} else { echo $ctrips->listing_title;}?></h4></a>
																<p><?php echo $ctrips->address;?></p>
																<p><?php echo get_lang_site_key($lang_key,"profile_lang","booking_no"); ?> : <span class="search_filter_content_prev" data-class="hide_current_trip_prev_<?php echo $ctrips->bid;?>" ><?php echo $ctrips->booking_id;?></span></p>
														</td>
														<?php if($ctrips->photo==""){ $img=base_url().'images/site/profile/avatar.png';} else { $img=base_url().'images/site/profile/'.$ctrips->photo;}?>
														<td class="user_img_table"><a href="<?php echo base_url();?>users/show/<?php echo $ctrips->host_id;?>"><img src="<?php echo $img;?>"></a></td>
														<td><p class="search_filter_content_prev" data-class="hide_current_trip_prev_<?php echo $ctrips->bid;?>"><?php echo $currency_symbol.round($currency_rate*$ctrips->total_price);?></p></td>
														<?php 
														if($ctrips->booking_status==3){ 
														$payment_status= get_lang_site_key($lang_key,"home_lang","paid");
														$payment_class="listed_sign";
														} 
														else if($ctrips->booking_status==4){ 
														$payment_status= get_lang_site_key($lang_key,"home_lang","cancelled");
														$payment_class="declined_cls";
														} 
														else {	
															if($ctrips->booking_status==0 || $ctrips->booking_status==2|| $ctrips->booking_status==5){ 
															$payment_status=  get_lang_site_key($lang_key,"profile_lang","pending");
															$payment_class="pending_for_apporval";} 
															else if($ctrips->booking_status==1){ 
															$payment_status=  'Pay';
															$payment_class="";}
															
														}
														if($ctrips->binstant_booking==0){
														if($ctrips->booking_status==0){ 
														$app_status= get_lang_site_key($lang_key,"profile_lang","pending");
														$app_class="pending_for_apporval";
														}
														else if($ctrips->booking_status==1|| $ctrips->booking_status==3){ 
														$app_status=  get_lang_site_key($lang_key,"home_lang","accepted");
														$app_class="listed_sign";
														}
														else if($ctrips->booking_status==2){
														$app_status=  get_lang_site_key($lang_key,"home_lang","declined");
														$app_class= "declined_cls";
														}
														else if($ctrips->booking_status==5){
														$app_status=  get_lang_site_key($lang_key,"home_lang","expired");
														$app_class="pending_for_apporval";
														}
													    }else{
														$app_status=  get_lang_site_key($lang_key,"product_lang","instant_booking");
														$app_class="listed_sign";	
														}
														
														?>
														<td>
														<p class="<?php echo $payment_class;?>">
														<?php if($payment_status=="Pay"){?><a href="<?php echo base_url();?>request_book_payment/<?php echo $ctrips->bid;?>"class="search_filter_content_prev" data-class="hide_current_trip_prev_<?php echo $ctrips->bid;?>"><?php echo get_lang_site_key($lang_key,"common_lang","pay") ?></a> <?php } else {?><span class="search_filter_content_prev" data-class="hide_current_trip_prev_<?php echo $ctrips->bid;?>"><?php echo $payment_status; }?></span></p>
														<?php if($ctrips->booking_status==3){?>
														<p><a href="<?php echo base_url();?>invoice/<?php echo $ctrips->bid;?>" class="get_invoce"><?php echo get_lang_site_key($lang_key,"product_lang","invoice") ?></a></p>
														<?php if($ctrips->total_rate_value==""){?>
														<p><a href="javascript:void(0);" data-toggle="modal" data-target="#reviewModal" class="write_review_btn" data-pid="<?php echo $ctrips->pid;?>" data-booking_id="<?php echo $ctrips->bid;?>"><?php echo get_lang_site_key($lang_key,"home_lang","write_review") ?></a></p>
														<?php } } ?>
														</td>
														<td><p class="<?php echo $app_class;?> search_filter_content_prev" data-class="hide_current_trip_prev_<?php echo $ctrips->bid;?>"><?php echo $app_status;?></p></td>
														
													</tr>
													<?php }} else {?>
													<tr class="noresultrr">
														<td class=""><p><?php echo get_lang_site_key($lang_key,"home_lang","no_trips") ?>...</p></td>
														
														
													</tr>
													<?php } ?>
											</tbody>
										</table>
							</div>
						</div>
				</div>
		</div>
		</div>

		</div>


		</div>
		<div role="tabpanel" class="tab-pane fade " id="inbox">

		</div>
		</div>
		</div>

		</div>
		</div>
		</div>
<div class="modal fade request_accept_modal" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">

  <!-- Modal content-->
    <div class="modal-content model_text custom_review_modal_base">
	<?php
			$attributes = array('method' => 'post', 'id' => 'save_review_form');
			echo form_open('#', $attributes); ?>

	 
      <a href="javascript:void(0);"  data-dismiss="modal"><span class="modal_close_svg"><img src="<?php echo base_url();?>images/site/close.png"></span></a>
		<h2 class="head_padd"><?php echo get_lang_site_key($lang_key,"profile_lang","rate_your_host") ?> <span class="all_rating hide_review_star_before"><?php echo get_lang_site_key($lang_key,"profile_lang","over_all") ?> </span><span class="rating_in_number total_rate_value hide_review_star_before">4.1</span><span class="rating_image hide_review_star_before"><img src="<?php echo base_url();?>images/site/star1.png"></span></h2>
		<ul class="list-unstyled rating_list custom_review_modal">
			<li class="right"><span class="rating_title"><?php echo get_lang_site_key($lang_key,"product_lang","accuracy") ?></span><span class="ratings_stars"><input type="text" class="rating rating-loading " id="rate_acc" name="rate_acc"  value="0" data-size="xs" title=""></span></li>
			<li class="left"><span class="rating_title"><?php echo get_lang_site_key($lang_key,"product_lang","location") ?></span><span class="ratings_stars"><input type="text" class="rating rating-loading " id="rate_loc" name="rate_loc"  value="0" data-size="xs" title=""></span></li>
			<li class="right"><span class="rating_title"><?php echo get_lang_site_key($lang_key,"product_lang","communication") ?></span><span class="ratings_stars"><input type="text" class="rating rating-loading " id="rate_com" name="rate_com"  value="0" data-size="xs" title=""></span></li>
			<li class="left"><span class="rating_title"><?php echo get_lang_site_key($lang_key,"product_lang","check_in") ?></span><span class="ratings_stars"><input type="text" class="rating rating-loading " id="rate_checkin" name="rate_checkin"  value="0" data-size="xs" title=""></span></li>
			<li class="right"><span class="rating_title"><?php echo get_lang_site_key($lang_key,"product_lang","cleanliness") ?></span><span class="ratings_stars"><input type="text" class="rating rating-loading " id="rate_clean"  name="rate_clean"  value="0" data-size="xs" title=""></span></li>
			<li class="left"><span class="rating_title"><?php echo get_lang_site_key($lang_key,"product_lang","value") ?> </span><span class="ratings_stars"><input type="text" class="rating rating-loading " id="rate_value"  name="rate_value"  value="0" data-size="xs" title=""></span></li>
		</ul>
		<h2 class="head_padd"><?php echo get_lang_site_key($lang_key,"profile_lang","review_trip") ?></h2>
		<textarea name="comments"></textarea>
		<input type="hidden" id="total_rate_value"  name="total_rate_value"  value="" >
		<input type="hidden" id="rate_pid"  name="pid"  value="" >
		<input type="hidden" id="rate_booking_id"  name="booking_id"  value="" >
		<div class="close_btn_base submit_base">		
		  <a href="javascript:void(0);" class="accept" id="save_review_btn" ><?php echo get_lang_site_key($lang_key,"common_lang","submit") ?></a>
		</div>
	   </form>	
    </div>
  </div>
</div>		
</section><script src="<?php echo base_url();?>js/site/owl.carousel.min.js"></script>		

	<script src="<?php echo base_url();?>js/site/jquery-ui.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=<?php echo $this->config->item('gmap_key');?>"></script>	
  </script>
<link rel="stylesheet" href="<?php echo base_url();?>css/site/star-rating.min.css" media="all" type="text/css"/>    
<script src="<?php echo base_url();?>js/site/star-rating.min.js" type="text/javascript"></script>  
 <script src="<?php echo base_url();?>js/site/wishlist_script.js"></script> 
<?php $this->load->view('site/search/footer_search');?>