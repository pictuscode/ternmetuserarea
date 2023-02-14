<footer>
	<div class="footer_base col-md-12 col-sm-12 col-xs-12 ">
			<div class="container">
				<div class="col-md-3 col-sm-3 col-xs-12 foot1">
					<select id="lang_box" class="select-control">
				       <?php foreach($lang_data as $val){ ?>
						<option <?php if($lang_key==$val["lang_code"]){ echo "selected";}?> value="<?php echo base_url().'site/language/lang_set/'.$val['lang_code']; ?>"><?php echo ucfirst($val['lang_name']); ?></option>
						<?php } ?>
					 </select>
					<select id="currency_box" class="select-control">
					    <?php foreach($currency_lists->result() as $curr){ ?>
						<option <?php if ($currency_code == $curr->currency_type) {	echo "selected";
								} ?> value="<?php echo base_url().'site/currency/change_currency/'.$curr->currency_type; ?>"><?php echo ucfirst($curr->currency_type); ?></option>
						<?php } ?>
					 </select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12 foot2">
					<h5><?php echo ucfirst($this->config->item('site_name')); ?></h5>
					<ul class="list-unstyled">
						<?php foreach($cms_row1->result() as $cm1){?>
						<li><a href="<?php echo base_url().'page/'.$cm1->url;?>"><?php echo get_common_details(CMS_LANG,'title',$cm1->id,$lang_key); ?> </a></li>
						<?php } ?>
						<li><a href="<?php echo base_url().'contact_us';?>"><?php echo get_lang_site_key($lang_key,"common_lang","contact_us") ?></a></li>
						
					</ul>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12 foot3">
					<h5><?php echo get_lang_site_key($lang_key,"common_lang","follow_on") ?></h5>
					<ul class="list-inline">
						<li><a target="_new" href="<?php echo $this->config->item('facebook_link')==""?"javascript:void(0)":$this->config->item('facebook_link');?>"><span class="svg_social_icons"><svg viewBox="0 0 21.07 20.96"><path d="M7,21H2.48v-9.4H0V7.25H2.48V4.82C2.48,2.6,3.88,0,7.8,0a19.11,19.11,0,0,1,2.44.14l.42,0-.1,4H7.94c-.83,0-1,.21-1,1v2h3.7l-.21,4.31H7V21ZM3.42,20H6.06V10.63H9.59l.12-2.45H6.06V5.24c0-1,.22-2,1.88-2H9.65L9.7,1C9.29,1,8.61.93,7.8.93c-3.23,0-4.38,2-4.38,3.89V8.18H.93v2.45H3.42V20Z" style="fill:#4d4d4d"/></svg></span></a></li>
						<li><a target="_new" href="<?php echo $this->config->item('twitter_link')==""?"javascript:void(0)":$this->config->item('twitter_link');?>"><span class="svg_social_icons"><svg viewBox="0 0 21.07 17.22"><path d="M20.86,2a.48.48,0,0,0-.56,0,1.65,1.65,0,0,1-.48.23A2.27,2.27,0,0,0,20.47.77.45.45,0,0,0,20.2.38a.46.46,0,0,0-.48,0,4.23,4.23,0,0,1-2.28.79A4.53,4.53,0,0,0,9.83,4.52a3.31,3.31,0,0,0,0,.55C5.7,5,2.32,1,2.29,1A.46.46,0,0,0,1.88.83a.48.48,0,0,0-.37.23,4.45,4.45,0,0,0,.1,4.73.49.49,0,0,0-.44,0,.47.47,0,0,0-.26.42,4.32,4.32,0,0,0,1.71,3.7.66.66,0,0,0-.17.12.5.5,0,0,0-.1.47,4.29,4.29,0,0,0,3,3,6.39,6.39,0,0,1-3.66,1A7.86,7.86,0,0,1,.56,14.4a.47.47,0,0,0-.52.28.47.47,0,0,0,.15.57,11.07,11.07,0,0,0,6.62,2A13.62,13.62,0,0,0,9.3,17,12,12,0,0,0,19,4.92c1.75-1.6,2-2.23,2.07-2.39A.48.48,0,0,0,20.86,2ZM18.17,4.37a.45.45,0,0,0-.15.38c0,.09.51,9.12-8.93,11.32a11.39,11.39,0,0,1-2.28.2,11.34,11.34,0,0,1-4.45-.85,6.51,6.51,0,0,0,4.46-1.93A.49.49,0,0,0,6.9,13a.49.49,0,0,0-.44-.28,3.45,3.45,0,0,1-2.91-1.77,2.5,2.5,0,0,0,1.12-.19.48.48,0,0,0-.09-.9A3.51,3.51,0,0,1,1.92,7a2.44,2.44,0,0,0,1.15.16.47.47,0,0,0,.39-.34.49.49,0,0,0-.15-.5c-.09-.08-2.16-1.87-1.26-4.22C3.25,3.36,6.52,6.23,10.46,6a.49.49,0,0,0,.44-.59,3.82,3.82,0,0,1-.11-.9A3.58,3.58,0,0,1,16.91,2a.44.44,0,0,0,.33.14h.07a5.18,5.18,0,0,0,1.53-.25,7.8,7.8,0,0,1-.8.72.47.47,0,0,0-.16.54.49.49,0,0,0,.49.31c.07,0,.41,0,.83-.11-.26.27-.6.59-1,1Z" style="fill:#4d4d4d;fill-rule:evenodd"/></svg></span></a></li>
						<li><a target="_new" href="<?php echo $this->config->item('instagram_link')==""?"javascript:void(0)":$this->config->item('instagram_link');?>"><span class="svg_social_icons"><svg viewBox="0 0 17.12 17.12"><path d="M12.21,0H4.91A4.91,4.91,0,0,0,0,4.91v7.3a4.91,4.91,0,0,0,4.91,4.91h7.3a4.91,4.91,0,0,0,4.91-4.91V4.91A4.91,4.91,0,0,0,12.21,0Zm3.85,12.21a3.86,3.86,0,0,1-3.85,3.85H4.91a3.86,3.86,0,0,1-3.85-3.85V4.91A3.86,3.86,0,0,1,4.91,1.06h7.3a3.86,3.86,0,0,1,3.85,3.85Z" style="fill:#4d4d4d"/><path d="M8.56,4a4.55,4.55,0,1,0,4.55,4.55A4.55,4.55,0,0,0,8.56,4Zm0,8a3.48,3.48,0,1,1,3.49-3.48A3.48,3.48,0,0,1,8.56,12Z" style="fill:#4d4d4d"/><path d="M13.32,3.27a.53.53,0,0,0-.53.53.54.54,0,1,0,.53-.53Z" style="fill:#4d4d4d"/></svg></span></a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12 copy_right  text-right">
					<p><?php echo $this->config->item('copy_right');?></p>
				</div>
			</div>
	</div>
	</footer>
<!-- Modal Sign In -->
<div class="modal fade sign_in_modal common_styles" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="sign_in">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
			<div class="sign_in_popbase">
			<?php
				$attributes = array('method' => 'post', 'id' => 'login-form', 'novalidate' => 'novalidate');
				echo form_open('#', $attributes); ?>
		
					<?php if(($this->config->item('fb_app_id')!="" && $this->config->item('fb_app_secret')!="") || ($this->config->item('gmail_client_id')!="" && $this->config->item('gmail_client_secret')!="")){?>
					<div class="sign_in_social">
							<?php if($this->config->item('fb_app_id')!="" && $this->config->item('fb_app_secret')!=""){?>
							<a href="<?php echo $fb_login;?>" class="fb_sign"><span><i class="fa fa-facebook" aria-hidden="true"></i></span><?php echo get_lang_site_key($lang_key,"common_lang","login_fb") ?></a>
							<?php } if($this->config->item('gmail_client_id')!="" && $this->config->item('gmail_client_secret')!=""){?>
							<a href="<?php echo $gmail_link;?>" class="google_sign"><?php echo get_lang_site_key($lang_key,"common_lang","login_google") ?> </a><?php }?>
							<div span class="or_class"><span><?php echo get_lang_site_key($lang_key,"common_lang","or") ?></span></div>
							
					</div>
					<?php }?>
					<div class="sign_in_inputs">
							<input type="email" name="login_email" placeholder="<?php echo get_lang_site_key($lang_key,"common_lang","email"); ?>" class="name_input">
							<input type="password" name="login_password" placeholder="<?php echo get_lang_site_key($lang_key,"common_lang","password"); ?>" >
					</div>
					<div class="remeber_me">
						<div class="custom_check">
									<label class="control control--checkbox">
												<input type="checkbox" />
												<?php echo get_lang_site_key($lang_key,"common_lang","remeber_me") ?>
												<div class="control__indicator"></div>
									</label>
						</div> 
						<a href="#"><?php echo get_lang_site_key($lang_key,"common_lang","forgot_password") ?>?</a>
					</div>
					<div class="login_btn_div">
							<button class="login_btn" type="submit"><?php echo get_lang_site_key($lang_key,"header_footer_lang","login") ?></button>
					</div>
					<div class="dont_account">
							<h6><?php echo get_lang_site_key($lang_key,"common_lang","not_account") ?>?</h6>
							<a href="#" data-toggle="modal" data-dismiss="modal" data-target="#signup"><?php echo get_lang_site_key($lang_key,"header_footer_lang","sign") ?></a>
					</div>
			  </form>		
			</div>
    </div>
  </div>
</div>

<!-- Modal Sign Up-->

<div class="modal fade sign_in_modal  common_styles" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="signup">
  <div class="modal-dialog " role="document">
    <div class="modal-content ">
			<div class="sign_in_popbase">
			<?php
				$attributes = array('method' => 'post', 'id' => 'register-form', 'novalidate' => 'novalidate');
				echo form_open('#', $attributes); ?>
			  
					<?php if(($this->config->item('fb_app_id')!="" && $this->config->item('fb_app_secret')!="") || ($this->config->item('gmail_client_id')!="" && $this->config->item('gmail_client_secret')!="")){?>
					<div class="sign_up_social">
							<p><?php echo get_lang_site_key($lang_key,"common_lang","signup_with") ?> <?php if($this->config->item('fb_app_id')!="" && $this->config->item('fb_app_secret')!=""){?><a href="<?php echo $fb_login;?>"> <?php echo get_lang_site_key($lang_key,"common_lang","facebook") ?></a> <?php } ?> <?php if(($this->config->item('fb_app_id')!="" && $this->config->item('fb_app_secret')!="") && ($this->config->item('gmail_client_id')!="" && $this->config->item('gmail_client_secret')!="")){ ?>or<?php }?> <?php if($this->config->item('gmail_client_id')!="" && $this->config->item('gmail_client_secret')!=""){?><a href="<?php echo $gmail_link;?>"> <?php echo get_lang_site_key($lang_key,"common_lang","google") ?> </a><?php }?></p>
							<div span class="or_class"><span><?php echo get_lang_site_key($lang_key,"common_lang","or") ?></span></div>
					</div>
					<?php }?>
					<div class="sign_in_inputs sign_in_up">
							<input type="email" name="email"  placeholder="<?php echo get_lang_site_key($lang_key,"common_lang","email"); ?>">
							<input type="text"  name="first_name"  class="name_input" placeholder="<?php echo get_lang_site_key($lang_key,"common_lang","first_name"); ?>">
							<input type="text"  name="last_name"  class="name_input" placeholder="<?php echo get_lang_site_key($lang_key,"common_lang","last_name"); ?>">
							<input type="password" name="password"  placeholder="<?php echo get_lang_site_key($lang_key,"common_lang","password"); ?>">
					</div>
					<div class="birthday_date col-md-12 col-sm-12 col-xs-12 nopadd">	
							<h5><?php echo get_lang_site_key($lang_key,"common_lang","birthday") ?></h5>
							<div class="col-md-5 col-sm-5 col-xs-4 month_birth">	
								<select class="select-control" id="dobMonth" name="dobMonth" >
								<option value=""><?php echo get_lang_site_key($lang_key,"common_lang","month") ?></option>
								<option value="1"><?php echo get_lang_site_key($lang_key,"common_lang","january") ?></option>
								<option value="2"><?php echo get_lang_site_key($lang_key,"common_lang","february") ?></option>
								<option value="3"><?php echo get_lang_site_key($lang_key,"common_lang","march") ?></option>
								<option value="4"><?php echo get_lang_site_key($lang_key,"common_lang","april") ?></option>
								<option value="5"><?php echo get_lang_site_key($lang_key,"common_lang","may") ?></option>
								<option value="6"><?php echo get_lang_site_key($lang_key,"common_lang","june") ?></option>
								<option value="7"><?php echo get_lang_site_key($lang_key,"common_lang","july") ?></option>
								<option value="8"><?php echo get_lang_site_key($lang_key,"common_lang","august") ?></option>
								<option value="9"><?php echo get_lang_site_key($lang_key,"common_lang","september") ?></option>
								<option value="10"><?php echo get_lang_site_key($lang_key,"common_lang","october") ?></option>
								<option value="11"><?php echo get_lang_site_key($lang_key,"common_lang","november") ?></option>
								<option value="12"><?php echo get_lang_site_key($lang_key,"common_lang","december") ?></option>
								</select>
								
							</div>
							<div class="col-md-3 col-sm-3 col-xs-4 date_birth">
								<select class="select-control" id="dobDay" name="dobDay" >
									<option value=""><?php echo get_lang_site_key($lang_key,"common_lang","day") ?></option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								</select>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4 year_birth">
								<select class="select-control" id="dobYear" name="dobYear" >
								 <option value=""><?php echo get_lang_site_key($lang_key,"common_lang","year") ?></option>
								 <?php $curdate=date('Y')-13; for($year=$curdate;$year>=1920;$year--){ ?>
								 <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
								 <?php }?>
								</select>
							</div>
							<label for="dob" id="dob_error" generated="true" class="error" style=""></label>
					</div>
					
					<div class="remeber_me sign_agree">
						<div class="custom_check">
									<label class="control control--checkbox">
												<input type="checkbox" name="alerts" value="1" />
												<?php echo get_lang_site_key($lang_key,"common_lang","signin_text").'.'; ?>
												<div class="control__indicator"></div>
									</label>
						</div> 
						
					</div>
					<div class="term_and_agree">
							<p><?php echo get_lang_site_key($lang_key,"common_lang","signin_text_one") ?> <a href="#"> <?php echo get_lang_site_key($lang_key,"common_lang","terms_service") ?> </a>, <a href="#"> <?php echo get_lang_site_key($lang_key,"common_lang","non_policy") ?> </a>, <a href="#"> <?php echo get_lang_site_key($lang_key,"common_lang","payment_terms") ?> </a>, <a href="#">  <?php echo get_lang_site_key($lang_key,"common_lang","privacy_policy") ?> </a>  <?php echo get_lang_site_key($lang_key,"common_lang","and") ?>
							 <a href="#"> <?php echo get_lang_site_key($lang_key,"common_lang","signin_text_one") ?>.</a></p>
					</div>
					<div class="login_btn_div">
							<button class="login_btn" id="user_signup_btn" type="button"><?php echo get_lang_site_key($lang_key,"header_footer_lang","sign") ?></button>
					</div>
					<div class="dont_account">
							<h6><?php echo get_lang_site_key($lang_key,"common_lang","already_ternmet_account") ?>?</h6>
							<a href="#" data-toggle="modal" data-dismiss="modal" data-target="#sign_in"><?php echo get_lang_site_key($lang_key,"header_footer_lang","login") ?></a>
					</div>
				</form>	
			</div>
    </div>
  </div>
</div>
<!-- wish list Modal -->
<div class="modal fade save_wishlist_base" id="wishlist_pop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content save_wishlist_inner">
                    <div class="modal-body save_wishlist_body">
                        <h6 class="close_modal" data-dismiss="modal"><span>
                        <svg viewBox="0 0 11.01 11"><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M6.3,5.51,10.83,1a.56.56,0,0,0,0-.78.56.56,0,0,0-.79,0L5.52,4.73,1,.16a.56.56,0,0,0-.78,0A.56.56,0,0,0,.18,1L4.74,5.51.16,10.06a.56.56,0,0,0,0,.78.57.57,0,0,0,.79,0L5.52,6.29l4.54,4.55a.56.56,0,0,0,.78,0,.56.56,0,0,0,0-.79Z" style="fill:#606060"/></g></g></svg></span></h6>
                        <h3><?php echo get_lang_site_key($lang_key,"common_lang","save_list"); ?></h3>
                        <a href="javascript:void(0);" class="create_new_wishlist_btn"><?php echo get_lang_site_key($lang_key,"common_lang","create_new_list"); ?></a>
						<div class="create_new_wishlist_box">
							<label class="label_class"><?php echo get_lang_site_key($lang_key,"common_lang","name"); ?></label>
							<input type="text" class="input-control" id="wishlist_name" name="wishlist_name">
							<label id="wishlist_name_label" class="error"></label>
							<div class="save_wishlist_cancel col-md-12 col-xs-12 col-sm-12 nopadd">
									<ul class="pull-right list-inline">
											<li><a href="#" class="back_btn wishlist_cancelbtn"><?php echo get_lang_site_key($lang_key,"common_lang","cancel"); ?></a></li> 
											<li><a href="#" class="button_new wishlist_createbtn" ><?php echo get_lang_site_key($lang_key,"common_lang","create"); ?></a></li> 
									</ul>
							</div>
						</div>
                        <div class="col-md-12 col-sm-12 col-xs-12 save_wishlist_lists">
                                <ul class="list-unstyled" id="wishlist_pop_names">
                                </ul>
                         </div>
                   </div>
                  </div>
                </div>
              </div>
  <div class="modal fade save_wishlist_base" id="create_wishlist_popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content save_wishlist_inner">
                    <div class="modal-body save_wishlist_body">
                        <h6 class="close_modal" data-dismiss="modal"><span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.01 11"><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M6.3,5.51,10.83,1a.56.56,0,0,0,0-.78.56.56,0,0,0-.79,0L5.52,4.73,1,.16a.56.56,0,0,0-.78,0A.56.56,0,0,0,.18,1L4.74,5.51.16,10.06a.56.56,0,0,0,0,.78.57.57,0,0,0,.79,0L5.52,6.29l4.54,4.55a.56.56,0,0,0,.78,0,.56.56,0,0,0,0-.79Z" style="fill:#606060"/></g></g></svg></span></h6>
                        <h3><?php echo get_lang_site_key($lang_key,"common_lang","create_list"); ?></h3>
                       	<label class="label_class"><?php echo get_lang_site_key($lang_key,"common_lang","name"); ?></label>
							<input type="text" class="input-control" id="new_wishlist_name" name="wishlist_name">
							<label id="wishlist_name_label" class="error"></label>
							<div class="save_wishlist_cancel col-md-12 col-xs-12 col-sm-12 nopadd">
									<ul class="pull-right list-inline">
											<li><a href="#" class="back_btn new_wishlist_cancelbtn"><?php echo get_lang_site_key($lang_key,"common_lang","cancel"); ?></a></li> 
											<li><a href="#" class="button_new new_wishlist_createbtn" ><?php echo get_lang_site_key($lang_key,"common_lang","create"); ?></a></li> 
									</ul>
							</div>
						                      
                   </div>
                  </div>
                </div>
              </div>	
 <script>
	var swtOk="<?php echo get_lang_site_key($lang_key,"common_lang","alert_text_ok")?>";
</script>		  
<script src="<?php echo base_url();?>js/site/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/site/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/validate.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/sweetalert.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/site_script.js"></script>
</body>

</html>
