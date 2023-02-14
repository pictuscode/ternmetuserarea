<?php $this->load->view('site/search/header_search');	?>
	<section>
		<div class="col-md-12 col-sm-12 col-xs-12 saved_list_base">
		  <div class="container">
			<!--  account  -->
			<div class="col-md-12 col-sm-12 col-xs-12 your_listing_base profile_edit_base account_details_base">
				<div class="col-md-3 col-sm-3 col-xs-12 listing_tab_menu_lft ">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#notifications" aria-controls="notifications" role="tab" data-toggle="tab" aria-expanded="true"><?php echo get_lang_site_key($lang_key,"profile_lang","notification"); ?></a></li>
							
							
							<li role="presentation" class=""><a href="#security" aria-controls="security" role="tab" data-toggle="tab" aria-expanded="false"><?php echo get_lang_site_key($lang_key,"profile_lang","security"); ?></a></li>
							<li role="presentation" class=""><a href="#settings_acc" aria-controls="settings_acc" role="tab" data-toggle="tab" aria-expanded="false"><?php echo get_lang_site_key($lang_key,"profile_lang","settings"); ?></a></li>
						</ul>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12 listing_tab_menu_rgt">
							<div class="tab-content">

									<div role="tabpanel" class="tab-pane active" id="notifications">
										<div class="col-md-12 col-sm-12 col-xs-12 profile_base_div">
											<div class="edit_profile_head custom_background">
												<h3><?php echo get_lang_site_key($lang_key,"profile_lang","push_notification_setting"); ?></h3>
											</div>
											<div class="push_notify_setting_base col-md-12 col-sm-12 col-xs-12">
													<div class="col-md-4 col-sm-4 col-xs-12">
														<p><?php echo get_lang_site_key($lang_key,"profile_lang","push_notification_text1"); ?>.</p>
													</div>
													<div class="col-md-8 col-sm-8 col-xs-12">
														<p><?php echo get_lang_site_key($lang_key,"profile_lang","push_notification_text2"); ?> <a href="#"> <?php echo $this->config->item("site_name");?> </a> <?php echo get_lang_site_key($lang_key,"profile_lang","push_notification_text3"); ?>.</p>
													</div>
											</div>
										</div>

										<div class="col-md-12 col-sm-12 col-xs-12 profile_base_div video_margin">
											<div class="edit_profile_head custom_background">
												<h3><?php echo get_lang_site_key($lang_key,"profile_lang","text_msg_settings"); ?></h3>
											</div>
											<div class="push_notify_setting_base text_message_settings col-md-12 col-sm-12 col-xs-12">
													<div class="col-md-4 col-sm-4 col-xs-12">
														<p><?php echo get_lang_site_key($lang_key,"profile_lang","text_msg_settings_text1"); ?>.</p>
													</div>
													<div class="col-md-8 col-sm-8 col-xs-12">
														<p><?php echo get_lang_site_key($lang_key,"profile_lang","receive_sms_notification"); ?>: <br><span><a href="<?php echo base_url();?>users/edit"> <?php echo get_lang_site_key($lang_key,"profile_lang","change_phone"); ?></a> </span></p>
														<select class="select-control"><option><?php if($user->phone_code!="" && $user->phone!=""){ echo $user->phone_code;?> *******<?php echo substr($user->phone,7,10); }?></option></select>
														<div class="clearfix"></div>
														<ul class="list-unstyled">
																<li>
																	<div class="custom_check">
																		<label class="control control--checkbox">
																			<input type="checkbox" class="save_function_checkboxid" name="message_sms" value="1" <?php if($user->message_sms==1){ echo "checked";}?>>
																			<?php echo get_lang_site_key($lang_key,"header_footer_lang","msg"); ?>
																			<div class="control__indicator"></div>
																		</label>
																	</div> 
																	<p><?php echo get_lang_site_key($lang_key,"profile_lang","from_host_guest"); ?></p>
																</li>
																<li>
																	<div class="custom_check">
																		<label class="control control--checkbox">
																			<input type="checkbox" class="save_function_checkboxid" name="booking_sms" value="1" <?php if($user->booking_sms==1){ echo "checked";}?>>
																			<?php echo get_lang_site_key($lang_key,"profile_lang","reservation_update"); ?>
																			<div class="control__indicator"></div>
																		</label>
																	</div> 
																	<p><?php echo get_lang_site_key($lang_key,"profile_lang","request_more"); ?></p>
																</li>
																<li>
																	<div class="custom_check">
																		<label class="control control--checkbox">
																			<input type="checkbox" class="save_function_checkboxid" name="other_sms" value="1" <?php if($user->other_sms==1){ echo "checked";}?>>
																			<?php echo get_lang_site_key($lang_key,"profile_lang","other"); ?>
																			<div class="control__indicator"></div>
																		</label>
																	</div> 
																		<p><?php echo get_lang_site_key($lang_key,"profile_lang","feature_update_more"); ?></p>
																</li>
														</ul>

													</div>
											</div>
										</div>
									
									<div class="col-md-12 col-sm-12 col-xs-12 profile_base_div video_margin">
											<div class="edit_profile_head custom_background">
												<h3><?php echo get_lang_site_key($lang_key,"profile_lang","email_settings"); ?></h3>
											</div>
											<div class="push_notify_setting_base text_message_settings col-md-12 col-sm-12 col-xs-12">
													<div class="col-md-4 col-sm-4 col-xs-12">
														<h2><?php echo get_lang_site_key($lang_key,"profile_lang","i_want_revice"); ?>:</h2>
														<p><?php echo get_lang_site_key($lang_key,"profile_lang","disable_any_time"); ?>.</p>
													</div>
													<div class="col-md-8 col-sm-8 col-xs-12">
														<div class="clearfix"></div>
														<ul class="list-unstyled">
																<li>
																	<div class="custom_check">
																		<label class="control control--checkbox">
																			<input type="checkbox" class="save_function_checkboxid" name="general_email" value="1" <?php if($user->general_email==1){ echo "checked";}?>>
																			<?php echo get_lang_site_key($lang_key,"profile_lang","promotion_email"); ?>
																			<div class="control__indicator"></div>
																		</label>
																	</div> 
																	<p><?php echo get_lang_site_key($lang_key,"profile_lang","general_promotion"); ?> <?php echo $this->config->item("site_name");?> <?php echo get_lang_site_key($lang_key,"profile_lang","general_promotion_service"); ?> <?php echo $this->config->item("site_name");?>.</p>
																</li>
																<li>
																	<div class="custom_check">
																		<label class="control control--checkbox">
																			<input type="checkbox" class="save_function_checkboxid" name="booking_email" value="1" <?php if($user->booking_email==1){ echo "checked";}?>>
																			<?php echo get_lang_site_key($lang_key,"profile_lang","reservation_review_reminder"); ?>
																			<div class="control__indicator"></div>
																		</label>
																	</div> 
																	<p><?php echo get_lang_site_key($lang_key,"profile_lang","notification_trips_periods"); ?>.</p>
																</li>
																<li>
																	<div class="custom_check">
																		<label class="control control--checkbox">
																			<input type="checkbox" class="save_function_checkboxid" name="account_activity_email" value="1" <?php if($user->account_activity_email==1){ echo "checked";}?>>
																			<?php echo get_lang_site_key($lang_key,"profile_lang","account_activity"); ?>
																			<div class="control__indicator"></div>
																		</label>
																	</div> 
																		<p><?php echo get_lang_site_key($lang_key,"profile_lang","account_activity_text"); ?>.</p>
																</li>
														</ul>

													</div>
											</div>
										</div>
									</div>


									



									
									<div role="tabpanel" class="tab-pane verfication_trust_base security_password" id="security">
										<div class="col-md-12 col-sm-12 col-xs-12 profile_base_div payout_reference_base">
										<div class="edit_profile_head custom_background">
											<h3><?php echo get_lang_site_key($lang_key,"profile_lang","change_password"); ?></h3>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_base text-center ">
										<?php
										$attributes = array( 'id' => 'change_password_form','method'=>'post');
										echo form_open('#', $attributes); ?>
										
													<div class="edit_profile_fields_inner col-md-9 col-xs-12 col-sm-9">
														<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
															<div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
																	<label class="label_class"><?php echo get_lang_site_key($lang_key,"profile_lang","current_password"); ?></label>
															</div>
															<div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
																	<input type="password" name="current_password" class="input-control">
															</div>
														</div>
														<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
															<div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
																	<label class="label_class"><?php echo get_lang_site_key($lang_key,"profile_lang","new_password"); ?></label>
																	
															</div>
															<div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
																	<input type="password" name="new_password" id="new_password" class="input-control">
															</div>
														</div>
														<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
															<div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
																	<label class="label_class"><?php echo get_lang_site_key($lang_key,"profile_lang","comfirm_password"); ?> </label>
															</div>
															<div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
																	<input type="password" name="confirm_password" class="input-control">
															</div>
														</div>
														
														
														
														<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">

															<div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
																
															</div>
															<div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
																		<a href="javascript:void(0);" id="update_password_btn" class="login_btn"><?php echo get_lang_site_key($lang_key,"profile_lang","update_password"); ?></a>
															</div>
															
														</div>
													</div>
											</form>		
										</div>
									</div>
									</div>
									<div role="tabpanel" class="tab-pane review_about_base settings_country_base" id="settings_acc">
									
									<div class="col-md-12 col-sm-12 col-xs-12 profile_base_div payout_reference_base video_margin">
										<div class="edit_profile_head custom_background">
											<h3><?php echo get_lang_site_key($lang_key,"profile_lang","cancel_account"); ?></h3>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12 cancel_account">
															<a href="javascript:void(0)" id="deactivate_btn" class="login_btn"><?php echo get_lang_site_key($lang_key,"profile_lang","cancel_myacount"); ?></a>
										</div>
									</div>
									</div>
									</div>
							</div>
				</div>
			</div></div>
	  
</section>
<link rel="stylesheet" href="<?php echo base_url();?>css/site/star-rating.min.css" media="all" type="text/css"/>    
<script src="<?php echo base_url();?>js/site/star-rating.min.js" type="text/javascript"></script>  	
<script src="<?php echo base_url();?>js/site/owl.carousel.min.js"></script>		

	<script src="<?php echo base_url();?>js/site/jquery-ui.min.js"></script>
	<script src="<?php echo base_url();?>js/site/jquery.form.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=<?php echo $this->config->item('gmap_key');?>"></script>	
<script src="<?php echo base_url();?>js/site/user_script.js"></script>  
<?php $this->load->view('site/common/footer');?>