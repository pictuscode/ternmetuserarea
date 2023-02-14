<?php  if($logincheck==$get_bookings->tid){ $this->load->view('site/host/host_header');} else { $this->load->view('site/search/header_search');}	?>
    <section>
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 main_base">
	<div class="container">
		<div class="back_to_inbox">
			<a href="<?php  if($logincheck==$get_bookings->tid){echo base_url('inbox');}else{echo base_url('user_inbox'); } ?>"><span class="custom_back_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.74 30.18"><title>Asset 34</title><path d="M15.46,14.3,1.71.3A1,1,0,1,0,.29,1.7L13.43,15.09.29,28.48a1,1,0,1,0,1.43,1.4l13.75-14a1,1,0,0,0,.27-.79A1,1,0,0,0,15.46,14.3Z" style="fill:#606060"/></svg></span><span class="custom_back_to_inbox"><?php echo get_lang_site_key($lang_key,"home_lang","back_toinbox") ?></span></a>
		</div>
		
		<div class="chat_base_container">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 base_outer">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 content_base_inner">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 profile_content">
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 profilebase_inner">
						 <?php		 if($logincheck!=$get_bookings->tid){
									 if($get_bookings->tphoto==""){ $img=base_url().'images/site/profile/avatar.png';} else { $img=base_url().'images/site/profile/'.$get_bookings->tphoto;} }else{
										 if($get_bookings->uphoto==""){ $img=base_url().'images/site/profile/avatar.png';} else { $img=base_url().'images/site/profile/'.$get_bookings->uphoto;} 
									 }?>
							<img src="<?php echo $img;?>">
						</div>						
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 profilebase_content">
							<div class="profile_detail">
								<h2><?php if($get_bookings->user_id!=$logincheck){ echo ucfirst($get_bookings->tfirst_name.' '.$get_bookings->tlast_name);}else{ echo ucfirst($get_bookings->ufirst_name.' '.$get_bookings->ulast_name);}?></h2>
								<p><span class="city"><?php if($get_bookings->user_id!=$logincheck){ echo ucfirst($get_bookings->twhere_live);}else{ echo ucfirst($get_bookings->uwhere_live);}?></span></p>
								<ul class="verifiy_inner list-inline">
								    <?php if($get_bookings->user_id!=$logincheck){ if($get_bookings->tid_verified=="Yes"){$verified="";}else{ $verified=get_lang_site_key($lang_key,"profile_lang","not");}}else{ if($get_bookings->uid_verified=="Yes"){$verified="";}else{ $verified=get_lang_site_key($lang_key,"profile_lang","not");}}?>
									<li><p><?php if($verified==""){?><span class="image_icon custom_verified_img_icon"><svg viewBox="0 0 27.71 30.02"><path d="M21.91,27.31a.81.81,0,0,0,.77-.57L24,22.61l3.39-2.55a.83.83,0,0,0,.29-.92L26.36,15l1.3-4.13a.82.82,0,0,0-.29-.91L24,7.41l-1.3-4.13a.81.81,0,0,0-.77-.57H17.72L14.33.16a.81.81,0,0,0-1,0L10,2.71H5.79A.81.81,0,0,0,5,3.28L3.72,7.41.33,10a.84.84,0,0,0-.29.92L1.34,15,0,19.14a.83.83,0,0,0,.29.92l3.4,2.55L5,26.74a.81.81,0,0,0,.77.57H10l3.39,2.55a.79.79,0,0,0,.48.16.77.77,0,0,0,.48-.16l3.39-2.55Z" style="fill:#5bb534"/><path d="M14.56,19.34l.11-.11L27,6.83,25.94,5.76,13.51,18.24,7.33,12.06,6.27,13.13l6.05,6.07.11.12,1.06,1.08Z" style="fill:#fff;stroke:#fff;stroke-miterlimit:10;fill-rule:evenodd"/></svg></span><?php }?> <?php echo $verified;?> <?php echo get_lang_site_key($lang_key,"product_lang","verified") ?></p></li>
									<li><p><span class="image_icon orange_tag"><?php echo $total_review_user==""?"0":$total_review_user;?></span><?php echo $total_review_user>1?get_lang_site_key($lang_key,"common_lang","reviews"):get_lang_site_key($lang_key,"home_lang","review")?></p></li>
								</ul>
							</div>
						</div>	
					<div class="verify_inner_info">
						<h2><?php echo get_lang_site_key($lang_key,"profile_lang","virified_info") ?></h2>
						<ul class="info list-inline">
						    <?php if($get_bookings->user_id!=$logincheck){ if($get_bookings->temail_verified=="Yes"){$emverified="";}else{ $emverified=get_lang_site_key($lang_key,"profile_lang","not");}}else{ if($get_bookings->uemail_verified=="Yes"){$emverified="";}else{ $emverified=get_lang_site_key($lang_key,"profile_lang","not");}}?>
						    <?php if($get_bookings->user_id!=$logincheck){ if($get_bookings->tphone_verified=="Yes"){$phverified="";}else{ $phverified=get_lang_site_key($lang_key,"profile_lang","not");}}else{ if($get_bookings->uphone_verified=="Yes"){$phverified="";}else{ $phverified=get_lang_site_key($lang_key,"profile_lang","not");}}?>
							<li><p><?php echo $phverified.' ';?><?php echo get_lang_site_key($lang_key,"common_lang","phone_number") ?>,</p></li>
							<li><p><?php echo $emverified.' ';?><?php echo get_lang_site_key($lang_key,"common_lang","email") ?></p></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 room_view_base">
						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 room_content">
							<h2 title="<?php echo $get_bookings->listing_title;?>"><?php if(strlen($get_bookings->listing_title)>25){echo (substr($get_bookings->listing_title,0,25))."...";} else { echo $get_bookings->listing_title;}?></h2>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 room_img">
							<img src="<?php echo base_url();?>images/site/product/<?php echo $get_bookings->cover_photo==""?"product.png":$get_bookings->cover_photo; ?>">
						</div>					
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 trip_details">
						<h2><?php echo get_lang_site_key($lang_key,"home_lang","trip_details") ?></h2>
						<ul class="info">
							<li><p><span class="custom_calendar_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.82 16.32"><title>Asset 22</title><path d="M15.68,16.32H4.14A4.15,4.15,0,0,1,0,12.17V5.72A4.15,4.15,0,0,1,4.14,1.58H15.68a4.15,4.15,0,0,1,4.14,4.14v6.45A4.15,4.15,0,0,1,15.68,16.32ZM4.14,2.58A3.14,3.14,0,0,0,1,5.72v6.45a3.14,3.14,0,0,0,3.14,3.14H15.68a3.14,3.14,0,0,0,3.14-3.14V5.72a3.14,3.14,0,0,0-3.14-3.14Z" style="fill:#383838"/><rect x="5.36" width="1" height="3.99" style="fill:#383838"/><rect x="13.46" width="1" height="3.99" style="fill:#383838"/></svg></span><?php echo date("d",strtotime($get_bookings->checkin)).'-'.get_lang_site_key($lang_key,"common_lang",strtolower(date('M',strtotime($get_bookings->checkin)))).'-'.date("Y",strtotime($get_bookings->checkin));?> - <?php echo date("d",strtotime($get_bookings->checkout)).'-'.get_lang_site_key($lang_key,"common_lang",strtolower(date('M',strtotime($get_bookings->checkout)))).'-'.date("Y",strtotime($get_bookings->checkout));?></p></li>
							<li><p><span class="custom_guest_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.44 15.51"><title>Asset 21</title><path d="M22.55,15.51H18.93A1.89,1.89,0,0,1,17,13.62v-1.2a3.73,3.73,0,0,0-1.9-3.1l-1-.63,1.13-.27a4.6,4.6,0,0,1,1.18-.12c2.34,0,8,1.19,8,4.13v1.2A1.89,1.89,0,0,1,22.55,15.51ZM16.69,9.29A4.45,4.45,0,0,1,18,12.42v1.2a.89.89,0,0,0,.89.89h3.61a.89.89,0,0,0,.89-.89v-1.2C23.44,10.56,19.13,9.36,16.69,9.29ZM14,15.51H1.89A1.89,1.89,0,0,1,0,13.62v-1.2C0,9.48,5.62,8.29,8,8.29s8,1.19,8,4.13v1.2A1.89,1.89,0,0,1,14,15.51ZM8,9.29c-2.39,0-7,1.22-7,3.13v1.2a.89.89,0,0,0,.89.89H14a.89.89,0,0,0,.89-.89v-1.2C14.91,10.51,10.35,9.29,8,9.29Zm8.52-2.07a3.61,3.61,0,1,1,3.7-3.61A3.61,3.61,0,0,1,16.48,7.22Zm0-6.22a2.61,2.61,0,1,0,0,5.22,2.61,2.61,0,1,0,0-5.22ZM8,7.22A3.61,3.61,0,1,1,8,0,3.61,3.61,0,1,1,8,7.22ZM8,1A2.61,2.61,0,1,0,8,6.22,2.61,2.61,0,1,0,8,1Z" style="fill:#383838"/></svg></span><?php echo $get_bookings->guest_count;?> <?php echo $get_bookings->guest_count==1?get_lang_site_key($lang_key,"header_footer_lang","guest"):get_lang_site_key($lang_key,"product_lang","guests")?></p></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 payments_details">
						<h2><?php echo get_lang_site_key($lang_key,"header_footer_lang","payment") ?></h2>						 
						<?php $nights=$get_bookings->no_of_nights==1? get_lang_site_key($lang_key,"home_lang","night"): get_lang_site_key($lang_key,"product_lang","nights");?>
						<p><?php echo $currency_symbol.round($currency_rate*($get_bookings->sub_price/$get_bookings->no_of_nights));?> x <?php echo $get_bookings->no_of_nights;?> <?php echo $nights;?><span><?php echo $currency_symbol.round($currency_rate*$get_bookings->sub_price);?></span></p> 
						<?php if($get_bookings->cleaning_fee!=0){?>
						<p><?php echo get_lang_site_key($lang_key,"product_lang","cleaning_fee") ?><span><?php echo $currency_symbol.round($currency_rate*$get_bookings->cleaning_fee);?></span></p> 
						<?php }?>
						<p class="service_fee"><?php echo get_lang_site_key($lang_key,"product_lang","service_fee") ?><span><?php echo $currency_symbol.round($currency_rate*$get_bookings->service_fee);?></span></p> 
						<p class="sum_amount"><?php echo get_lang_site_key($lang_key,"product_lang","total") ?> (<?php echo $currency_code;?>)<span class="total_bold"><?php echo $currency_symbol.round($currency_rate*$get_bookings->total_price);?></span></p>
					</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 chat_base_inner">
				
				<?php if($get_bookings->host_id==$logincheck && $get_bookings->binstant_booking==0){ ?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 profile_chat">
				<div class="chat_head">
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 chat_title">
						<h2><?php echo get_lang_site_key($lang_key,"home_lang","respond_to") ?> <?php echo ucfirst($get_bookings->tfirst_name);?><?php echo get_lang_site_key($lang_key,"home_lang","s_request") ?> </h2>
						<?php if($get_bookings->booking_status==0){?>
						<p class="remove_clock_timer"><span class="custom_clock_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.13 18.13"><path d="M9.06,0a9.06,9.06,0,1,0,9.06,9.06A9.07,9.07,0,0,0,9.06,0Zm0,17.13a8.06,8.06,0,1,1,8.06-8.06A8.07,8.07,0,0,1,9.06,17.13Z"/><polygon points="9.56 3.5 8.56 3.5 8.56 10.34 12.79 13.05 13.33 12.2 9.56 9.79 9.56 3.5"/></svg></span><?php echo get_lang_site_key($lang_key,"home_lang","respond_within") ?> <span class="booking_clock_timer">00:00:00</span> <?php echo get_lang_site_key($lang_key,"home_lang","to_maintain_response") ?></p>
						<?php } ?>
						<span id="booking_created_time" data-time="<?php echo $get_bookings->bcreated;?>" data-now="<?php echo date('Y/m/d H:i:s');?>"></span>
					</div>
					<?php if($get_bookings->checkin>date('Y-m-d H:i:s') && $get_bookings->booking_status==0){?>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 booking_button">
						<a href="<?php echo base_url();?>request_approve/<?php echo $get_bookings->bid;?>" id="booking_respond_nowbtn"><?php echo get_lang_site_key($lang_key,"home_lang","respond_now") ?></a>				
					</div>
					<?php } ?>
					<?php if(date('Y-m-d',strtotime($get_bookings->checkin))<=date('Y-m-d')){ if($get_bookings->booking_status==0 || $get_bookings->booking_status==5 ){?>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 booking_button">
						<a href="javascript:void(0);" id="expired_btn"><?php echo get_lang_site_key($lang_key,"home_lang","expired") ?></a>				
					</div>
					<?php }} ?>
				</div>
				</div>
				<?php } else { if($get_bookings->booking_status==2){?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 profile_chat">
				<div class="chat_head">
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 chat_title">
						<h2><?php echo ucfirst($get_bookings->tfirst_name);?><?php echo get_lang_site_key($lang_key,"home_lang","s_home_trip") ?>. </h2>
						
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 booking_button">
						<a href="<?php echo base_url().'rooms/'.$get_bookings->pid;?>"><?php echo get_lang_site_key($lang_key,"home_lang","keep_search") ?></a>				
					</div>
				</div>
				</div>
				<?php } else if($get_bookings->booking_status==0){ ?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 profile_chat">
				<div class="chat_head">
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 chat_title">
						<h2><?php echo ucfirst($get_bookings->tfirst_name);?><?php echo get_lang_site_key($lang_key,"home_lang","s_invitation") ?> </h2>
						
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 booking_button">
						<a href="<?php echo base_url().'rooms/'.$get_bookings->pid;?>"><?php echo get_lang_site_key($lang_key,"home_lang","keep_book") ?></a>				
					</div>
				</div>
				</div>	
				<?php }} ?>
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 chat_area">
						<ul class="list-unstyled msg_conversation_base" id="chatbox">
							
							<?php if($get_all_message->num_rows()>0){ foreach($get_all_message->result() as $me){ ?>
							<li class="msg_list">
								<div class="msg_conversation <?php if($logincheck==$me->tid){?>conversation_right <?php } else { echo "conversation_left"; } ?>">
									<div class="right">
										<div class="inbox_msg_content">
											<p><?php echo $me->message;?></p>
										</div>
										<div class="regards_text">
											<h4><?php echo timeago($me->created);?></h4>
										</div>
									</div>
									 <?php 
									 if($logincheck==$me->tid){
									 if($me->tphoto==""){ $img=base_url().'images/site/profile/avatar.png';} else { $img=base_url().'images/site/profile/'.$me->tphoto;} }else{
										 if($me->uphoto==""){ $img=base_url().'images/site/profile/avatar.png';} else { $img=base_url().'images/site/profile/'.$me->uphoto;} 
									 }?>
									<div class="chat_profile_img custom_img_profile">
										<img src="<?php echo $img;?>">
									</div>
								</div>
							</li>
							<?php }} ?>
							
						</ul>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 chat_text_msg_box">
						<textarea class="text-control" placeholder="<?php echo get_lang_site_key($lang_key,"home_lang","write_msg"); ?>" name="input_msg" id="message_textarea"></textarea>
						<a href="javascript:void(0);" id="send_msg_btn" data-viewerid="<?php if($logincheck==$get_bookings->host_id){ echo $get_bookings->buser_id; }else{ echo $get_bookings->host_id; }?>" data-bid="<?php echo $get_bookings->bid;?>" class="send"><?php echo get_lang_site_key($lang_key,"home_lang","send") ?></a>
					</div>
			</div>
		</div>
		</div>
       </div>
    </div>       
   </section>
	    
<script src="<?php echo base_url();?>js/site/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>js/site/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/flatpickr.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/highlight.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/moment.min.js"></script>
<script src="<?php echo base_url();?>js/site/hostlisting_script.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=<?php echo $this->config->item('gmap_key');?>"></script>	
 <script src="<?php echo base_url();?>js/site/wishlist_script.js"></script> 
<?php $this->load->view('site/search/footer_search');?>