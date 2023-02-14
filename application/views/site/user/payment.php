<?php $this->load->view('site/host/host_header');	?>
	<section>
		<div class="col-md-12 col-sm-12 col-xs-12 saved_list_base">
			<div class="container">
			   <!--  account  -->
			   <div class="col-md-12 col-sm-12 col-xs-12 your_listing_base profile_edit_base account_details_base">
				  <div class="col-md-3 col-sm-3 col-xs-12 listing_tab_menu_lft ">
					 <ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#pay_out" aria-controls="pay_out" role="tab" data-toggle="tab" aria-expanded="true"><?php echo get_lang_site_key($lang_key,"profile_lang","payout_preference"); ?></a></li>
						<li role="presentation" class=""><a href="#transaction_his" aria-controls="transaction_his" role="tab" data-toggle="tab" aria-expanded="false" id="transaction_btn"><?php echo get_lang_site_key($lang_key,"profile_lang","transaction_histry"); ?></a></li>
					 </ul>
				  </div>
				  <div class="col-md-9 col-sm-9 col-xs-12 listing_tab_menu_rgt">
					 <div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="pay_out">
						   <div class="col-md-12 col-sm-12 col-xs-12 profile_base_div payout_reference_base">
							  <div class="edit_profile_head custom_background">
								 <h3><?php echo get_lang_site_key($lang_key,"profile_lang","secure_bank_transfer"); ?></h3>
							  </div>
							  <div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_base text-center">
							  <?php
								$attributes = array( 'id' => 'payout_form','method'=>'post');
								echo form_open('#', $attributes); ?>
								 <div class="edit_profile_fields_inner col-md-9 col-sm-9 col-xs-12">
									<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
									   <div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
										  <label class="label_class"><?php echo get_lang_site_key($lang_key,"profile_lang","bank_location"); ?></label>
									   </div>
									   <div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
										  <input type="text" class="input-control" name="payout_location" value="<?php echo $user->payout_location;?>">
									   </div>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
									   <div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
										  <label class="label_class"><?php echo get_lang_site_key($lang_key,"profile_lang","payee"); ?> <span class="required_field">*</span></label>
									   </div>
									   <div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
										  <input type="text" class="input-control" name="payout_payee" value="<?php echo $user->payout_payee;?>">
									   </div>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
									   <div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
										  <label class="must_lock label_class"><?php echo get_lang_site_key($lang_key,"profile_lang","ifsc_code"); ?> <span class="required_field">*</span></label>
									   </div>
									   <div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
										  <input type="text" class="input-control" name="payout_ifsc" value="<?php echo $user->payout_ifsc;?>">
									   </div>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
									   <div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
										  <label class="must_lock label_class"><?php echo get_lang_site_key($lang_key,"profile_lang","ac_number"); ?> <span class="required_field">*</span></label>
									   </div>
									   <div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
										  <input type="text" class="input-control" name="payout_accountno" value="<?php echo $user->payout_accountno;?>">
									   </div>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
									   <div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
										  <label class="must_lock label_class"><?php echo get_lang_site_key($lang_key,"profile_lang","bank_name"); ?> <span class="required_field">*</span></label>
									   </div>
									   <div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
										  <input type="text" class="input-control" name="payout_bankname" value="<?php echo $user->payout_bankname;?>">
										  <p class="req_p"><span class="required_field">*</span><?php echo get_lang_site_key($lang_key,"profile_lang","required_field"); ?></p>
									   </div>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
									   <div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
									   </div>
									   <div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
										  <input type="submit" class="login_btn" value="<?php echo get_lang_site_key($lang_key,"common_lang","submit"); ?>">
									   </div>
									</div>
								 </div>
							   </form>	 
							  </div>
						   </div>
						   <div class="col-md-12 col-sm-12 col-xs-12 profile_base_div optional_div paypal_refer">
							  <div class="edit_profile_head custom_background">
								 <h3><?php echo get_lang_site_key($lang_key,"product_lang","paypal"); ?></h3>
							  </div>
							  <div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_base text-center">
								    <p><?php echo get_lang_site_key($lang_key,"profile_lang","paypal_text"); ?>.
								    </p>
									<?php
								$attributes = array( 'id' => 'paypal_payout_form','method'=>'post');
								echo form_open('#', $attributes); ?>		
									<div class="edit_profile_fields_inner  col-md-9 col-sm-9 col-xs-12">
										<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
										   <div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
											  <label class="must_lock"><?php echo get_lang_site_key($lang_key,"profile_lang","paupal_email"); ?> <span class="required_field">*</span></label>
										   </div>
										   <div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
											  <input type="text" class="input-control" name="paypal_email" value="<?php echo $user->paypal_email;?>" placeholder="example@xxx.com">
										   </div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
										   <div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
										   </div>
										   <div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
											  <a href="javascript:void(0);" class="login_btn" id="save_paypal_form"><?php echo get_lang_site_key($lang_key,"product_lang","save"); ?></a>
										   </div>
										</div>
									 </div>
									 </form>
							  </div>
						   </div>
						   
						   <div class="col-md-12 col-sm-12 col-xs-12 profile_base_div optional_div paypal_refer">
							  <div class="edit_profile_head custom_background">
								 <h3><?php echo get_lang_site_key($lang_key,"profile_lang","stripe"); ?></h3>
							  </div>
							  <div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_base text-center">
								
								 <div class="edit_profile_fields_inner  col-md-9 col-sm-9 col-xs-12">
									<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
									   <?php $st=$user->stripe_user_id==""? get_lang_site_key($lang_key,"profile_lang","connect_stripe") : get_lang_site_key($lang_key,"profile_lang","reconnect_stripe");?>
									   <div class="edit_profile_fields_input col-md-12 col-sm-12 col-xs-12">
										  <a href="https://connect.stripe.com/oauth/authorize?response_type=code&scope=read_write&client_id=<?php echo $client_id;?>" class="login_btn"><?php echo $st;?></a>
									   </div>
									</div>
									
								 </div>
							  </div>
						   </div>
						</div>
						<div role="tabpanel" class="tab-pane review_about_base transaction_history" id="transaction_his">
						   <ul class="nav nav-tabs" role="tablist">
							  <li role="presentation" class="active"><a href="#complete_trans" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false"><?php echo get_lang_site_key($lang_key,"profile_lang","complete_transaction"); ?></a></li>
							  <li role="presentation" class=""><a href="#future_trans" id="get_future_transaction_btn" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><?php echo get_lang_site_key($lang_key,"profile_lang","future_transaction"); ?></a></li>
						   </ul>
						   <div class="tab-content">
							  <div role="tabpanel" class="tab-pane active" id="complete_trans">
							  </div>
							  <div role="tabpanel" class="tab-pane" id="future_trans">								 
							  </div>
						   </div>
						</div>
					 </div>
				  </div>
			   </div>
			</div>
			
		</div>
	  
</section>
<link rel="stylesheet" href="<?php echo base_url();?>css/site/star-rating.min.css" media="all" type="text/css"/>    
<script src="<?php echo base_url();?>js/site/star-rating.min.js" type="text/javascript"></script>  	
<script src="<?php echo base_url();?>js/site/owl.carousel.min.js"></script>		

	<script src="<?php echo base_url();?>js/site/jquery-ui.min.js"></script>
	<script src="<?php echo base_url();?>js/site/jquery.form.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=<?php echo $this->config->item('gmap_key');?>"></script>	
  </script>		
<script src="<?php echo base_url();?>js/site/user_script.js"></script>  
<?php $this->load->view('site/common/footer');?>