<?php $this->load->view('site/host/host_header');	?>
    <section>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 main_base">
	<div class="container">
	  <div class="col-md-12 col-sm-12 col-xs-12 your_listing_base listin_modified">
		<?php $this->load->view("site/host/host_listsidebar");?>
		<div class="col-md-9 col-sm-9 col-xs-12 listing_tab_menu_rgt">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content_base">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 house_content">
				<section class="beach_house">
					<div class="section_heading">
						<h2><?php echo get_lang_site_key($lang_key,"home_lang","about_property") ?></h2>
						<h3 class="remove_clock_timer"><span class="clock_icon"><img src="<?php echo base_url();?>images/site/clock.png"></span><?php echo get_lang_site_key($lang_key,"home_lang","expires_in") ?> <span class="clock_time booking_clock_timer" >00:00:00</span>
						<span id="booking_created_time" data-time="<?php echo $get_bookings->bcreated;?>" data-now="<?php echo date('Y/m/d H:i:s');?>"></span></h3>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 payments_details">
						<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 title_name">
							<h2><?php echo get_lang_site_key($lang_key,"home_lang","property") ?></h2>
						</div>
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 title_content">
							<p title="<?php echo $get_bookings->listing_title;?>"><?php if(strlen($get_bookings->listing_title)>25){echo (mb_substr($get_bookings->listing_title,0,25))."...";} else { echo $get_bookings->listing_title;}?></p>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 title_link">
							<a href="<?php echo base_url();?>rooms/<?php echo $get_bookings->pid;?>"><?php echo get_lang_site_key($lang_key,"home_lang","view_property") ?></a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 payments_details">
						<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 title_name">
							<h2><?php echo get_lang_site_key($lang_key,"home_lang","trip_details") ?></h2>
						</div>
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 title_content">
					
							<p><?php echo date("d",strtotime($get_bookings->checkin)).'-'.get_lang_site_key($lang_key,"common_lang",strtolower(date('M',strtotime($get_bookings->checkin)))).'-'.date("Y",strtotime($get_bookings->checkin));?> - <?php echo date("d",strtotime($get_bookings->checkout)).'-'.get_lang_site_key($lang_key,"common_lang",strtolower(date('M',strtotime($get_bookings->checkout)))).'-'.date("Y",strtotime($get_bookings->checkout));?></p>
							<p><?php echo $get_bookings->guest_count;?> <?php echo $get_bookings->guest_count==1?get_lang_site_key($lang_key,"header_footer_lang","guest"):get_lang_site_key($lang_key,"product_lang","guests")?></p>
							<p><?php echo $get_bookings->no_of_nights;?> <?php echo $get_bookings->no_of_nights==1?get_lang_site_key($lang_key,"home_lang","night"):get_lang_site_key($lang_key,"product_lang","nights")?></p>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 title_link">
							<a href="<?php echo base_url();?>calendar?pid=<?php echo $get_bookings->pid;?>"><?php echo get_lang_site_key($lang_key,"home_lang","view_calender") ?></a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 payments_details">
						<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 title_name">
							<h2><?php echo get_lang_site_key($lang_key,"header_footer_lang","payment") ?></h2>
						</div>
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 title_content">
							<div class="rate_inner_base">
								<p><?php echo get_lang_site_key($lang_key,"home_lang","rate") ?> (<?php echo get_lang_site_key($lang_key,"product_lang","per_night") ?>)<span class="cost"><?php echo $currency_symbol.round($currency_rate*$get_bookings->price);?></span></p>
								<?php $nights=$get_bookings->no_of_nights==1?get_lang_site_key($lang_key,"home_lang","night"):get_lang_site_key($lang_key,"product_lang","nights");?>
								<p><?php echo $currency_symbol.round($currency_rate*($get_bookings->sub_price/$get_bookings->no_of_nights));?> x <?php echo $get_bookings->no_of_nights;?> <?php echo $nights;?><span class="cost"><?php echo $currency_symbol.round($currency_rate*$get_bookings->sub_price);?></span></p>
							</div>
							<div class="fee_inner_base">
								<?php if($get_bookings->cleaning_fee!=0){?>
								<p><?php echo get_lang_site_key($lang_key,"product_lang","cleaning_fee") ?><span class="cost"><?php echo $currency_symbol.round($currency_rate*$get_bookings->cleaning_fee);?></span></p>
								<?php } ?>
								<p><?php echo get_lang_site_key($lang_key,"home_lang","host_fee") ?><span class="cost"><?php echo $currency_symbol.round($currency_rate*$host_fee);?></span></p>
							</div>
							<p class="sum_amount"><?php echo get_lang_site_key($lang_key,"product_lang","total") ?> (<?php echo $currency_code;?>)<span class="cost total_bold"><?php echo $currency_symbol.round($currency_rate*($get_bookings->sub_price-$host_fee));?></span></p>
						</div>
						
					</div>
				</section>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 house_content">
				<section class="beach_house">
					<div class="section_heading">
						<h2><?php echo get_lang_site_key($lang_key,"home_lang","about_guest") ?></h2>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 about_content">
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 profile_content">
							<div class="profile_photo">
							    <?php if($get_bookings->uphoto==""){ $img=base_url().'images/site/profile/avatar.png';} else { $img=base_url().'images/site/profile/'.$get_bookings->uphoto;} ?>
								<img src="<?php echo $img;?>">
								<div class="profile_detail">
									<h2><?php echo ucfirst($get_bookings->ufirst_name.' '.$get_bookings->ulast_name);?></h2>
									<p><span class="city"><?php echo ucfirst($get_bookings->uwhere_live);?></span></p>
									<?php 
									  if($get_bookings->uid_verified=="Yes"){$verified="";}else{ 
									  $verified="_wrong"; }
									  if($get_bookings->uemail_verified=="Yes"){$emverified="";}else{ 
									  $emverified="_wrong"; }
									 if($get_bookings->uphone_verified=="Yes"){$phverified="";}else{ 
									  $phverified="_wrong"; }
									 if($get_bookings->uid_verified=="Yes"){$gverified="";}else{ 
									  $gverified="_wrong"; }
									 if($get_bookings->ufb_verified=="Yes"){$fbverified="";}else{ 
									  $fbverified="_wrong"; }
									?>
									<ul class="verifiy_inner list-inline">
										<li><p><?php if($verified==""){?><span class="image_icon"><img src="<?php echo base_url();?>images/site/verified.png"></span> <?php }?>  <?php echo get_lang_site_key($lang_key,"product_lang","verified") ?></p></li>
										<li><p><span class="image_icon orange_tag"><?php echo $total_review_user==""?"0":$total_review_user;?></span><?php echo $total_review_user>1?get_lang_site_key($lang_key,"common_lang","reviews"):get_lang_site_key($lang_key,"home_lang","review")?></p></li>
									</ul>
								</div>
								<div class="verify_inner_info">
								<h2><?php echo get_lang_site_key($lang_key,"profile_lang","virified_info") ?></h2>
									<ul class="info">
										<li><p><span><img src="<?php echo base_url();?>images/site/icon<?php echo $emverified;?>.png"></span><?php echo get_lang_site_key($lang_key,"common_lang","email") ?></p></li>
										<li><p><span><img src="<?php echo base_url();?>images/site/icon<?php echo $phverified;?>.png"></span><?php echo get_lang_site_key($lang_key,"common_lang","phone_number") ?></p></li>
										<li><p><span><img src="<?php echo base_url();?>images/site/icon<?php echo $gverified;?>.png"></span><?php echo get_lang_site_key($lang_key,"home_lang","govt_id") ?></p></li>
										<li><p><span><img src="<?php echo base_url();?>images/site/icon<?php echo $fbverified;?>.png"></span><?php echo get_lang_site_key($lang_key,"common_lang","facebook") ?></p></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 about_content_inner">
							<?php if($get_bookings->uabout!=""){?>
							<h2><?php echo get_lang_site_key($lang_key,"profile_lang","about") ?></h2>
							<p title="<?php echo $get_bookings->uabout;?>"><?php if(strlen($get_bookings->uabout)>25){echo mb_substr($get_bookings->uabout,0,25)."...";} else { echo $get_bookings->uabout;}?>
							</p>
							<?php }?>
							<?php if($get_bookings->uwork!=""){?>
							<h2><?php echo get_lang_site_key($lang_key,"profile_lang","work") ?></h2>
							<p><?php echo $get_bookings->uwork;?></p>
							<?php } if($get_bookings->uschool!=""){?>
							<h2><?php echo get_lang_site_key($lang_key,"home_lang","eduction") ?></h2>
							<p><?php echo $get_bookings->uschool;?></p>
							<?php }?>
							<?php if($get_bookings->ulanguage!=""){?>
							<h2><?php echo get_lang_site_key($lang_key,"home_lang","language_know") ?></h2>
							<p><?php echo $get_bookings->ulanguage;?></p>
							<?php }?>
						</div>
					</div>
				</section>
				
				
			</div>	
		</div>	
	
						</div>
					</div>
				</div>

	</div>
<div class="request_fixed">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 request_fixed_base container">
		<div class="col-sm-8 col-md-8 col-lg-8 request_accept_base">
		<div class="col-sm-8 col-md-8 col-lg-8 request_accept_inner">
			<h2><?php echo get_lang_site_key($lang_key,"home_lang","accept_request") ?>?</h2>
			<p><?php echo get_lang_site_key($lang_key,"home_lang","no_accept_decline") ?></p>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4 expires_inner">
			<h3 class="remove_clock_timer"><span><img src="<?php echo base_url();?>images/site/clock.png"></span><?php echo get_lang_site_key($lang_key,"home_lang","expires_in") ?> <span class="booking_clock_timer">00:00:00</span></h3>
		</div>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 accept_button_base">
			<ul class="btn_action list-inline">
				<li class="accept"><a href="javascript:void(0);" data-toggle="modal" data-target="#accept_modal"><?php echo get_lang_site_key($lang_key,"home_lang","accept") ?></a></li>
				<li><a href="javascript:void(0);" data-toggle="modal" data-target="#declined_modal" data-toggle="modal" data-target="#accept_modal"><?php echo get_lang_site_key($lang_key,"home_lang","decline") ?></a></li>
				<li><a href="<?php echo base_url();?>request_response/<?php echo $get_bookings->bid;?>"><?php echo get_lang_site_key($lang_key,"home_lang","chat") ?></a></li>
			</ul>
		</div>
	</div>
</div>
<!-- Modal -->
  <div class="modal fade request_accept_modal" id="accept_modal" role="dialog">
    <div class="modal-dialog">
	
      <!-- Modal content-->
      <div class="modal-content model_text">
	  <a href="#"  data-dismiss="modal"><span class="modal_close_svg"><img src="<?php echo base_url();?>images/site/close.png"></span></a>
		<h2><?php echo get_lang_site_key($lang_key,"home_lang","accept_request") ?>?</h2>
		<h3><?php echo get_lang_site_key($lang_key,"home_lang","type_optional_msg") ?></h3>
		<?php
			$attributes = array( 'id' => 'request_accept_form','method'=>'post');
			echo form_open('#', $attributes); ?>
		<textarea id="accept_booking_request_msg" name="message"></textarea>
		<p><span><input type="checkbox" name="agree"></span><?php echo get_lang_site_key($lang_key,"product_lang","i_agree_to") ?> <span class="red"><?php echo get_lang_site_key($lang_key,"home_lang","host_policy") ?></span><?php echo get_lang_site_key($lang_key,"common_lang","and") ?><span class="red"><?php echo get_lang_site_key($lang_key,"common_lang","terms_service") ?></span>.</p>
		<label for="agree" generated="true" class="error"></label>
		<div class="close_btn_base p-20">
		  <a href="#" class="accept" id="accept_booking_request_btn"><?php echo get_lang_site_key($lang_key,"home_lang","accept") ?></a>
		  <a href="#" class="close_btn" data-dismiss="modal"><?php echo get_lang_site_key($lang_key,"common_lang","cancel") ?></a>
		</div>
		<input type="hidden" name="booking_id" value="<?php echo $get_bookings->bid;?>"/>
		<input type="hidden" name="bstatus" value="Accept"/>
		</form>
      </div>
    </div>
  </div>
 <div class="modal fade request_accept_modal" id="declined_modal" role="dialog">
    <div class="modal-dialog">
	
      <!-- Modal content-->
      <div class="modal-content model_text">
	  <a href="#"  data-dismiss="modal"><span class="modal_close_svg"><img src="<?php echo base_url();?>images/site/close.png"></span></a>
		<h2><?php echo get_lang_site_key($lang_key,"home_lang","decline_request"); ?>?</h2>
		<h3><?php echo get_lang_site_key($lang_key,"home_lang","type_optional_msg") ?></h3>
		<?php
			$attributes = array( 'id' => 'request_decline_form','method'=>'post');
			echo form_open('#', $attributes); ?>
		<textarea id="decline_booking_request_msg" name="message"></textarea>
		<p><span><input type="checkbox" name="agree"></span><?php echo get_lang_site_key($lang_key,"product_lang","i_agree_to") ?> <span class="red"><?php echo get_lang_site_key($lang_key,"home_lang","host_policy") ?></span><?php echo get_lang_site_key($lang_key,"common_lang","and") ?><span class="red"><?php echo get_lang_site_key($lang_key,"common_lang","terms_service") ?></span>.</p>
		<label for="agree" generated="true" class="error"></label>
		<div class="close_btn_base p-20">
		  <a href="#" class="accept" id="decline_booking_request_btn"><?php echo get_lang_site_key($lang_key,"home_lang","decline") ?></a>
		  <a href="#" class="close_btn" data-dismiss="modal"><?php echo get_lang_site_key($lang_key,"common_lang","cancel") ?></a>
		</div>
		<input type="hidden" name="booking_id" value="<?php echo $get_bookings->bid;?>"/>
		<input type="hidden" name="bstatus" value="Declined"/>
		</form>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="accept_msg" role="dialog">
    <div class="modal-dialog">
	
      <!-- Modal content-->
      <div class="modal-content model_accept_dialog">
		<p class="accept_img"><img src="<?php echo base_url();?>images/site/accept.png"></p>
		<h2><?php echo get_lang_site_key($lang_key,"home_lang","done") ?></h2>
      </div>
    </div>
  </div>
	</section>
	<script>
	var swtOk="<?php echo get_lang_site_key($lang_key,"common_lang","alert_text_ok")?>";
</script> 
<script src="<?php echo base_url();?>js/site/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>js/site/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>js/site/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/flatpickr.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/highlight.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/sweetalert.min.js"></script>
<script src="<?php echo base_url();?>js/site/hostlisting_script.js"></script> 
