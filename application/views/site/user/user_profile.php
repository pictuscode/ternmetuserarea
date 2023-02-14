<?php $this->load->view('site/search/header_search');	?>
<section>
            <div class="col-md-12 col-sm-12 col-xs-12 host_profile_base custom_host_profile_base">
              <div class="container">
						<div class="col-md-12 col-sm-12 col-xs-12 host_profile_inner">
							<!-- sidebar start -->
								<div class="col-md-3 col-sm-4 col-xs-12 host_image_proof">
										<div class="host_img col-md-12 col-sm-12 col-xs-12 text-center">
											<img src="<?php echo base_url();?>images/site/profile/<?php echo $user->photo==""?"avatar.png":$user->photo;?>">
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12 verified_info">
											<div class="col-md-12 col-sm-12 col-xs-12 verified_info_inner">
												<h2><?php  echo get_lang_site_key($lang_key,"profile_lang","virified_info");  ?></h2>
												<ul class="list-unstyled verified_id">
														<li class="<?php if($user->id_verified=="No"){ echo "unverified_icon";}?>"><?php echo get_lang_site_key($lang_key,"home_lang","govt_id"); ?></li>
														<li class="<?php if($user->email_verified=="No"){ echo "unverified_icon";}?>"><?php echo get_lang_site_key($lang_key,"common_lang","email"); ?></li>
														<li class="<?php if($user->phone_verified=="No"){ echo "unverified_icon";}?>"><?php echo get_lang_site_key($lang_key,"common_lang","phone_number"); ?></li>
												</ul>
												<a href="#"><?php echo get_lang_site_key($lang_key,"profile_lang","learn_more"); ?> &gt;</a>
											</div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12 verified_info">
											<div class="col-md-12 col-sm-12 col-xs-12 verified_info_inner">
												<h2><?php  echo get_lang_site_key($lang_key,"home_lang","about_me");  ?></h2>
												<div class="lang_verified">
														<p><b><?php  echo get_lang_site_key($lang_key,"product_lang","language");  ?></b></p>
														<p><?php echo $user->language==""? get_lang_site_key($lang_key,"home_lang","no_select_language").'.' :$user->language;?></p>
												</div>

											</div>
											
										</div>
								</div>
								<!-- sidebar end -->
								<?php 
								$report_user=json_decode($user->report,true);										
								if(!empty($report_user) && array_key_exists($logincheck,$report_user)){
									$report_user_popup=1;
								}
								else{
									$report_user_popup=0;
								}?>
								<div class="col-md-9 col-sm-8 col-xs-12 host_profile_details_base custom_host_profile_base">
										<div class="host_profile_name">
											<h1><?php  echo get_lang_site_key($lang_key,"home_lang","hey_iam");  ?> <?php echo $user->first_name==""?get_lang_site_key($lang_key,"header_footer_lang","guest"):ucfirst($user->first_name);?>!</h1>
											<p><?php echo $user->where_live;?>. <span><?php  echo get_lang_site_key($lang_key,"product_lang","joined_in");  ?> <?php echo get_lang_site_key($lang_key,"common_lang",strtolower(date('M',strtotime($user->created)))).' '.date("Y",strtotime($user->created));?></span></p>
											<a href="javascript:void(0);" class="user_block_flag" <?php if($logincheck==""){?>data-toggle="modal" data-target="#sign_in"<?php }else{ if($logincheck==$user->id){?> onclick="swal('<?php echo get_lang_site_key($lang_key,'common_lang','error') ?>','<?php echo  get_lang_site_key($lang_key,'home_lang','this_is_your_ac').'.' ?>','error');"<?php } else if($report_user_popup==0){?>data-toggle="modal" data-target="#user_block_model" <?php }else{ ?>data-toggle="modal" data-target="#user_block_model_done" <?php } }?> data-id="0"><span class="report_span"> &nbsp;</span><?php  echo get_lang_site_key($lang_key,"home_lang","report_this");  ?></a>
										</div>
										<div class="host_profile_about">
												<p><?php echo $user->about;?></p>
										</div>
										<div class="review_references_verrfied">
												<ul class="list-inline">
														<li><a href="#"><span class="orange_tag"> <?php echo $total_review_user->row()->total_review_count;?></span><?php  echo get_lang_site_key($lang_key,"home_lang","review");  ?> </a></li>
														<li><a href="#"><span class="<?php echo $user->id_verified=="No"?"not_":"";?>verified_tag">&nbsp;</span><?php  echo get_lang_site_key($lang_key,"product_lang","verified");  ?></a></li>
												</ul>
										</div>
										<div class="reviews_base_host col-md-12 col-sm-12 col-xs-12">
												<h3><?php  echo get_lang_site_key($lang_key,"common_lang","reviews");  ?>s <span>(<?php echo $total_review_user->row()->total_review_count;?>)</span></h3>
												<h4><?php  echo get_lang_site_key($lang_key,"home_lang","reviews_from_guests");  ?></h4>
											<div id="ajax_profile_review" data-id="0" data-uid="<?php echo $user->id;?>">
											<?php if($profile_review->num_rows()>0){ foreach($profile_review->result() as $st_rv){  
											$report=json_decode($st_rv->report,true);
											
											if(!empty($report) && array_key_exists($logincheck,$report)){
												$report_popup=1;
											}
											else{
												$report_popup=0;
											}
											?>	
												<div class="col-md-12 col-sm-12 col-xs-12 reviews_host_profile">
														<div class="col-md-1 col-sm-2 col-xs-12 reviewer_img_host text-center">
														       <?php if($st_rv->photo==""){ $img=base_url().'images/site/profile/avatar.png';} else { $img=base_url().'images/site/profile/'.$st_rv->photo;}?>
																<a href="<?php echo base_url();?>users/show/<?php echo $st_rv->uid;?>">
																<img src="<?php echo $img;?>">
																<p><?php echo ucfirst($st_rv->first_name);?></p></a>
														</div>
														<div class="col-md-11 col-sm-10 col-xs-12 reviewer_message_host">
																<p class="show_basic_review_aboutyou  stat_basic_review_<?php echo $st_rv->rid;?>"><?php if(strlen($st_rv->comments)>150){echo mb_substr($st_rv->comments,0,150)."...";} else { echo $st_rv->comments;}?></p>
																<p class="hide_full_review_stat  stat_review_<?php echo $st_rv->rid;?>"> <?php  echo $st_rv->comments;?> </p>
																<a href="javascript:void(0);" class="<?php if(strlen($st_rv->comments)<150){echo "stat_review_hide"; }?> more_stat_review" data-class="stat_review_<?php echo $st_rv->rid;?>" data-bclass="stat_basic_review_<?php echo $st_rv->rid;?>" data-more="0" data-more_text="+ More" data-less_text="- Less" >+ <?php  echo get_lang_site_key($lang_key,"product_lang","more");  ?></a>
																<div class="country_dates_host">
																		<p><?php  echo get_lang_site_key($lang_key,"profile_lang","from");  ?> <a href="<?php echo base_url();?>s?city=<?php echo $st_rv->where_live;?>"> <?php echo $st_rv->where_live;?></a> <span> <i class="fa fa-circle" aria-hidden="true"></i>  <?php echo get_lang_site_key($lang_key,"common_lang",strtolower(date('M',strtotime($user->created)))).' '.date("Y",strtotime($st_rv->ucreated));?> <i class="fa fa-circle" aria-hidden="true"></i> </span> <a href="javascript:void(0);" <?php if($logincheck==$st_rv->uid){?>onclick="swal('<?php  echo get_lang_site_key($lang_key,'common_lang','error');  ?>','<?php  echo get_lang_site_key($lang_key,'product_lang','this_your_review');  ?>','error');"<?php } else{ ?>class="review_block_btn_flag flag_no_<?php echo $st_rv->rid;?>"<?php }?> data-status="<?php echo $report_popup;?>" data-value="<?php echo $st_rv->rid;?>" > <span class="report_span"> &nbsp;</span></a></p>
																</div>
														</div>
												</div>
											<?php }} else { ?><div class="custom_no_reviews_updates"><?php  echo get_lang_site_key($lang_key,"home_lang","no_review_found");  ?>.</div> <?php } ?>	
										   </div>
										   <a href="javascript:void(0);" class="<?php if($total_review_user->row()->total_review_count==0){echo "hide_showmore_profile_btn"; }?>" id="showmore_profile_review"><?php  echo get_lang_site_key($lang_key,"home_lang","show_more_reviews");  ?></a>
										</div>
										
								</div>
						</div>
				</div>
			
			</div>
   </section>
<div class="modal fade review_block_flag_Modal" id="review_block_flag_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">

  <!-- Modal content-->
    <div class="modal-content model_text custom_modal_msg">
	  <a href="javascript:void(0);" data-dismiss="modal"><span class="modal_close_svg"><img src="<?php echo base_url();?>images/site/close.png"></span></a>		
		
		<h2 class="head_padd custom_modal_msg"><?php echo get_lang_site_key($lang_key,"common_lang","do_you_want_report_review") ?>?</h2>
		<ul class="list-inline report"><li>
		<a href="javascript:void(0);" class="login_btn review_block_flag_submit_btn" data-id="0"><?php echo get_lang_site_key($lang_key,"common_lang","report_one"); ?></a></li><li>
		<a href="javascript:void(0);" class="login_btn review_block_flag_submit_btn" data-id="1"><?php echo get_lang_site_key($lang_key,"common_lang","report_two"); ?></a></li><li>
		<a href="javascript:void(0);" class="login_btn review_block_flag_submit_btn" data-id="2"><?php echo get_lang_site_key($lang_key,"common_lang","report_three"); ?> </a></li>
		</ul>
		<input type="hidden" id="review_block_id" name="review_block_id" value="">		
		
    </div>
  </div>
</div>  
<div class="modal fade review_block_flag_Modal" id="review_block_flag_done_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">

  <!-- Modal content-->
    <div class="modal-content model_text custom_modal_content">
	  <a href="javascript:void(0);" data-dismiss="modal"><span class="modal_close_svg"><img src="<?php echo base_url();?>images/site/close.png"></span></a>
		
		
		<h2 class="head_padd custom_modal_msg"><?php echo get_lang_site_key($lang_key,"common_lang","already_report"); ?>.</h2>
			
		
    </div>
  </div>
</div>   
<div class="modal fade " id="user_block_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">

  <!-- Modal content-->
    <div class="modal-content model_text custom_modal_content">
	  <a href="javascript:void(0);" data-dismiss="modal"><span class="modal_close_svg"><img src="<?php echo base_url();?>images/site/close.png"></span></a>		
		
		<h2 class="head_padd custom_modal_msg"><?php echo get_lang_site_key($lang_key,"common_lang","do_you_want_report_review") ?>?</h2>
		<ul class="list-inline report"><li>
		<a href="javascript:void(0);" class="login_btn user_block_flag_submit_btn" data-id="0" data-uid="<?php echo $user->id;?>"><?php echo get_lang_site_key($lang_key,"common_lang","report_one"); ?></a></li><li>
		<a href="javascript:void(0);" class="login_btn user_block_flag_submit_btn" data-id="1" data-uid="<?php echo $user->id;?>"><?php echo get_lang_site_key($lang_key,"common_lang","report_two"); ?></a></li><li>
		<a href="javascript:void(0);" class="login_btn user_block_flag_submit_btn" data-id="2" data-uid="<?php echo $user->id;?>"><?php echo get_lang_site_key($lang_key,"common_lang","report_three"); ?> </a></li>
		</ul>
			
		
    </div>
  </div>
</div>  
<div class="modal fade " id="user_block_model_done" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">

  <!-- Modal content-->
    <div class="modal-content model_text custom_modal_content">
	  <a href="javascript:void(0);" data-dismiss="modal"><span class="modal_close_svg"><img src="<?php echo base_url();?>images/site/close.png"></span></a>
		
		
		<h2 class="head_padd custom_modal_msg"><?php echo get_lang_site_key($lang_key,"common_lang","already_report"); ?>.</h2>
			
		
    </div>
  </div>
</div>   
     	    
<script src="<?php echo base_url();?>js/site/jquery-ui.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=<?php echo $this->config->item('gmap_key');?>"></script>	
<script src="<?php echo base_url();?>js/site/user_script.js"></script> 
<?php $this->load->view('site/common/footer');?>