<?php $this->load->view('site/search/header_search');	?>
<section>
	<div class="col-md-12 col-sm-12 col-xs-12 saved_list_base">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 your_listing_base profile_edit_base">
				<div class="col-md-3 col-sm-3 col-xs-12 listing_tab_menu_lft ">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#editprofile" aria-controls="editprofile" role="tab" data-toggle="tab" aria-expanded="true" onclick="get_phonetab(1);"><?php echo get_lang_site_key($lang_key,"header_footer_lang","edit_profile"); ?></a></li>
						<li role="presentation"><a href="#photovideo" aria-controls="photovideo" role="tab" data-toggle="tab" aria-expanded="true"><?php echo get_lang_site_key($lang_key,"home_lang","photos"); ?></a></li>
						<li role="presentation"><a href="#trustverification" aria-controls="trustverification" role="tab" data-toggle="tab" aria-expanded="true" onclick="get_phonetab(2);"><?php echo get_lang_site_key($lang_key,"profile_lang","trust_verification"); ?></a></li>
						<li role="presentation"><a href="#reviews_list" aria-controls="reviews_list" role="tab" data-toggle="tab" aria-expanded="true" onclick="review_about_you();"><?php echo get_lang_site_key($lang_key,"common_lang","reviews"); ?></a></li>
						<li role="presentation"></li>
					</ul>
					<div class="add_listing_yourlisting">
						<a href="<?php echo base_url(); ?>users/show/<?php echo $user->id; ?>" class="login_btn"><?php echo get_lang_site_key($lang_key,"profile_lang","view_profile"); ?></a>
					</div>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12 listing_tab_menu_rgt">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="editprofile">
						<?php
				$attributes = array('method' => 'post', 'id' => 'profile_edit_form');
				echo form_open('#', $attributes); ?>
							
								<div class="col-md-12 col-sm-12 col-xs-12 profile_base_div">
									<div class="edit_profile_head custom_background">
										<h3><?php echo get_lang_site_key($lang_key,"header_footer_lang","edit_profile"); ?></h3>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_base">
										<div class="edit_profile_fields_inner col-md-11 col-sm-11 col-xs-12">
											<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
												<div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
													<label class="label_class"><?php echo get_lang_site_key($lang_key,"common_lang","first_name"); ?></label>
												</div>
												<div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
													<input class="input-control" type="text" name="first_name" value="<?php echo $user->first_name; ?>">
												</div>
											</div>
											<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
												<div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
													<label class="label_class"><?php echo get_lang_site_key($lang_key,"common_lang","last_name"); ?></label>
												</div>
												<div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
													<input class="input-control" type="text" name="last_name" value="<?php echo $user->last_name; ?>">
													<p><?php echo get_lang_site_key($lang_key,"profile_lang","name_text"); ?>
													</p>
												</div>
											</div>
											<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
												<div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
													<label class="must_lock label_class"><?php echo get_lang_site_key($lang_key,"profile_lang","gender"); ?></label>
												</div>
												<div class="col-md-8 col-sm-8 col-xs-12">
													<select name="gender" class="select-control">
														<option value="0" <?php if ($user->gender == 0) {
																				echo "selected";
																			} ?>><?php echo get_lang_site_key($lang_key,"profile_lang","male"); ?></option>
														<option value="1" <?php if ($user->gender == 1) {
																				echo "selected";
																			} ?>><?php echo get_lang_site_key($lang_key,"profile_lang","female"); ?></option>
														<option value="2" <?php if ($user->gender == 2) {
																				echo "selected";
																			} ?>><?php echo get_lang_site_key($lang_key,"profile_lang","other"); ?></option>
													</select>
												</div>
											</div>
											<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
												<div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
													<label class="must_lock label_class"><?php echo get_lang_site_key($lang_key,"profile_lang","dob"); ?></label>
												</div>
												<div class=" col-md-8 col-sm-8 col-xs-12">
													<div class="birthday_date col-md-12 col-sm-12 col-xs-12 nopadd">
														<div class="col-md-5 col-sm-5 col-xs-4 month_birth">
															<select class="select-control" name="dobMonth">
																<option value=""><?php echo get_lang_site_key($lang_key,"common_lang","month"); ?></option>
																<option value="1" <?php if ($user->dobMonth == "1") {
																						echo "selected";
																					} ?>><?php echo get_lang_site_key($lang_key,"common_lang","january") ?></option>
																<option value="2" <?php if ($user->dobMonth == "2") {
																						echo "selected";
																					} ?>><?php echo get_lang_site_key($lang_key,"common_lang","february") ?></option>
																<option value="3" <?php if ($user->dobMonth == "3") {
																						echo "selected";
																					} ?>><?php echo get_lang_site_key($lang_key,"common_lang","march") ?></option>
																<option value="4" <?php if ($user->dobMonth == "4") {
																						echo "selected";
																					} ?>><?php echo get_lang_site_key($lang_key,"common_lang","april") ?></option>
																<option value="5" <?php if ($user->dobMonth == "5") {
																						echo "selected";
																					} ?>><?php echo get_lang_site_key($lang_key,"common_lang","may") ?></option>
																<option value="6" <?php if ($user->dobMonth == "6") {
																						echo "selected";
																					} ?>><?php echo get_lang_site_key($lang_key,"common_lang","june") ?></option>
																<option value="7" <?php if ($user->dobMonth == "7") {
																						echo "selected";
																					} ?>><?php echo get_lang_site_key($lang_key,"common_lang","july") ?></option>
																<option value="8" <?php if ($user->dobMonth == "8") {
																						echo "selected";
																					} ?>><?php echo get_lang_site_key($lang_key,"common_lang","august") ?></option>
																<option value="9" <?php if ($user->dobMonth == "9") {
																						echo "selected";
																					} ?>><?php echo get_lang_site_key($lang_key,"common_lang","september") ?></option>
																<option value="10" <?php if ($user->dobMonth == "10") {
																						echo "selected";
																					} ?>><?php echo get_lang_site_key($lang_key,"common_lang","october") ?></option>
																<option value="11" <?php if ($user->dobMonth == "11") {
																						echo "selected";
																					} ?>><?php echo get_lang_site_key($lang_key,"common_lang","november") ?></option>
																<option value="12" <?php if ($user->dobMonth == "12") {
																						echo "selected";
																					} ?>><?php echo get_lang_site_key($lang_key,"common_lang","december") ?></option>
															</select>

														</div>
														<div class="col-md-3 col-sm-3 col-xs-4 date_birth">
															<select class="select-control" name="dobDay">
																<option value=""><?php echo get_lang_site_key($lang_key,"common_lang","day") ?></option>
																<?php for ($i = 1; $i <= 31; $i++) { ?>
																	<option value="<?php echo $i; ?>" <?php if ($user->dobDay == $i) {
																											echo "selected";
																										} ?>><?php echo $i; ?></option>
																<?php } ?>
															</select>
														</div>
														<div class="col-md-4 col-sm-4 col-xs-4 year_birth">
															<select class="select-control" name="dobYear">
																<option value=""><?php echo get_lang_site_key($lang_key,"common_lang","year") ?></option>
																<?php $curdate = date('Y') - 13;
																for ($year = $curdate; $year >= 1920; $year--) { ?>
																	<option value="<?php echo $year; ?>" <?php if ($user->dobYear == $year) {
																												echo "selected";
																											} ?>><?php echo $year; ?></option>
																<?php } ?>
															</select>
														</div>
														<label for="dob" id="dob_error" generated="true" class="error" style=""></label>
													</div>
												</div>
											</div>
											<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
												<div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
													<label class="must_lock label_class"><?php echo get_lang_site_key($lang_key,"common_lang","email"); ?></label>
												</div>
												<div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
													<input class="input-control" type="text" name="email" value="<?php echo $user->email; ?>">
												</div>
											</div>
											<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
												<div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
													<label class="must_lock label_class"><?php echo get_lang_site_key($lang_key,"common_lang","phone_number"); ?></label>
												</div>
												<div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12" id="append_phone_div_profile">
													
												</div>
											</div>
											<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
												<div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
													<label class="must_lock label_class"><?php echo get_lang_site_key($lang_key,"profile_lang","preferred_language"); ?></label>
												</div>
												<div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
													<select name="user_language" class="select-control">
														<option value=""><?php echo get_lang_site_key($lang_key,"profile_lang","choose_language"); ?></option>
														<?php foreach ($language_list->result() as $lan) { ?>
															<option value="<?php echo $lan->lang_code; ?>" <?php if ($user->user_language == $lan->lang_code) {
																												echo "selected";
																											} ?>><?php echo ucfirst($lan->lang_name); ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
											<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
												<div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
													<label class="must_lock label_class"><?php echo get_lang_site_key($lang_key,"profile_lang","preferred_currency"); ?></label>
												</div>
												<div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
													<select name="user_currency" class="select-control">
														<option value=""><?php echo get_lang_site_key($lang_key,"profile_lang","choose_currency"); ?></option>
														<?php foreach ($currency_lists->result() as $curr) { ?>
															<option value="<?php echo ($curr->currency_type); ?>" <?php if ($user->user_currency == $curr->currency_type) {
																														echo "selected";
																													} ?>><?php echo ucfirst($curr->currency_type); ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
											<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
												<div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
													<label class="must_lock label_class"><?php echo get_lang_site_key($lang_key,"profile_lang","where_you_live"); ?></label>
												</div>
												<div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
													<input class="input-control" type="text" name="where_live" placeholder="<?php echo get_lang_site_key($lang_key,"profile_lang","where_live_placeholder"); ?>" value="<?php echo $user->where_live; ?>">
												</div>
											</div>
											<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
												<div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
													<label class="must_lock label_class"><?php echo get_lang_site_key($lang_key,"profile_lang","about"); ?></label>
												</div>
												<div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
													<textarea name="about"><?php echo $user->about; ?></textarea>
												</div>
											</div>
										</div>
									</div>
									<div>

									</div>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 profile_base_div optional_div">
									<div class="edit_profile_head custom_background">
										<h3><?php echo get_lang_site_key($lang_key,"product_lang","optonal"); ?></h3>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_base">
										<div class="edit_profile_fields_inner col-md-11 col-sm-11 col-xs-12">
											<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
												<div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
													<label class="label_class"><?php echo get_lang_site_key($lang_key,"profile_lang","school"); ?></label>
												</div>
												<div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
													<input class="input-control" type="text" name="school" value="<?php echo $user->school; ?>">
												</div>
											</div>
											<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
												<div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
													<label class="label_class"><?php echo get_lang_site_key($lang_key,"profile_lang","work"); ?></label>
												</div>
												<div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
													<input class="input-control" type="text" name="work" value="<?php echo $user->work; ?>">
												</div>
											</div>
											<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div" style="display:none;">
												<div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
													<label class="label_class"><?php echo get_lang_site_key($lang_key,"profile_lang","time_zone"); ?></label>
												</div>
												<div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
													<?php $tzlist = DateTimeZone::listIdentifiers(DateTimeZone::ALL); ?>
													<select name="timezone" class="select-control">
														<option value=""><?php echo get_lang_site_key($lang_key,"profile_lang","time_zone"); ?></option>
														<?php foreach ($tzlist as $tz) { ?>
															<option value="<?php echo $tz; ?>" <?php if ($tz == $user->timezone) {
																									echo "selected";
																								} ?>><?php echo $tz; ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
											<div class="col-md-12 col-sm-12 col-xs-12 edit_profile_fields_div">
												<div class="edit_profile_fields_label col-md-4 col-sm-4 col-xs-12">
													<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","language"); ?></label>
												</div>
												<div class="edit_profile_fields_input col-md-8 col-sm-8 col-xs-12">
													<?php $lang_list = explode(",", $user->language); ?>
													<ul class="list-inline labeled_slip custom_labeled_slip" id="append_language_list">
														<?php foreach ($language_list->result() as $ls) {
															if (in_array($ls->lang_name, $lang_list)) { ?>
																<li>
																	<h5><?php echo ($ls->lang_name); ?> <span class="close_list delete_lang" data-id="<?php echo $ls->id; ?>">&nbsp;</span></h5>
																</li>
														<?php }
														} ?>
													</ul>
													<div class="add_phone_number custom_phone_number custom_add_language">
														<span class="phonenumber_add custom_add_phone_number" data-toggle="modal" data-dismiss="modal" data-target="#language_popup"><span class="custom_add_lang_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44">
																	<title>Asset 13</title>
																	<path d="M21.5,0h1V44h-1Z" style="fill:#606060;fill-rule:evenodd" />
																	<path d="M44,21.5v1H0v-1Z" style="fill:#606060;fill-rule:evenodd" />
																</svg></span> <?php echo get_lang_site_key($lang_key,"profile_lang","add_language"); ?></span>
														<p><?php echo get_lang_site_key($lang_key,"profile_lang","add_language_text"); ?>.</p>

														<input type="hidden" name="language_list_array" id="lang_list_values_comma" value="<?php echo trim($user->language); ?>	" />


													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 profile_base_div optional_div no_border">
									<a href="javascript:void(0);" id="save_profile" class="login_btn"><?php echo get_lang_site_key($lang_key,"product_lang","save"); ?></a>
								</div>
							</form>
						</div>
						<div role="tabpanel" class="tab-pane" id="photovideo">
							<div class="col-md-12 col-sm-12 col-xs-12 profile_base_div">
								<div class="edit_profile_head custom_background">
									<h3><?php echo get_lang_site_key($lang_key,"profile_lang","profile_photo"); ?></h3>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 profile_video_base">
									<div class="profile_pic_base col-md-12 col-sm-12 col-xs-12">
										<div class="profile_pic_div col-md-4 col-sm-4 col-xs-12">
											<img id="prof_img_holder" class="profile_pic_img_ajax" src="<?php echo base_url(); ?>images/site/profile/<?php echo $user->photo == "" ? "avatar.png" : $user->photo; ?>">
											<img id="img_loader" src="<?php echo base_url(); ?>images/site/sivaloader.gif">
										</div>
										<div class="profile_pic_upload col-md-8 col-sm-8 col-xs-12">
											<p><?php echo get_lang_site_key($lang_key,"profile_lang","profile_img_text"); ?>.
											</p>
											<?php
				$attributes = array('method' => 'post', 'id' => 'profile_photo_upload_form', 'enctype'=>'multipart/form-data');
				echo form_open(base_url()."site/user/upload_profile_picture", $attributes); ?>
										
												<ul class="list-inline">
													<li>
														<div class="browse_photo">
															<label for="upload_prof_img" class="label_class">
																<span class="browse_photo_inner"><?php echo get_lang_site_key($lang_key,"product_lang","upload_photos"); ?></span> </label>
															<input type="file" class="browse_img" name="upload_profile_picture" id="upload_prof_img">
														</div>
													</li>
												</ul>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane verfication_trust_base" id="trustverification">
							<div class="ready_to_book col-md-12 col-sm-12 col-xs-12">
								<div class="col-md-8 col-sm-8 col-xs-12">
									<h5><?php echo get_lang_site_key($lang_key,"profile_lang","readyto_book"); ?>!</h5>
									<p><?php echo get_lang_site_key($lang_key,"profile_lang","book_text"); ?>. <a href="#"> <?php echo get_lang_site_key($lang_key,"profile_lang","learn_more"); ?></a></p>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<?php if ($user->id_verified == "No") { ?>
										<a href="<?php echo base_url(); ?>id_verify/step1" class="login_btn"><?php echo get_lang_site_key($lang_key,"profile_lang","provide_id"); ?></a>
									<?php } else { ?>
										<a href="javascript:void(0)" class="login_btn"><?php echo get_lang_site_key($lang_key,"profile_lang","id_verified"); ?></a>
									<?php } ?>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 profile_base_div verfication_trust_inner">
								<div class="edit_profile_head custom_background">
									<h3><?php echo get_lang_site_key($lang_key,"profile_lang","virified_info"); ?></h3>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 verifed_infomation custom_verifed_information">
									<h4><?php echo get_lang_site_key($lang_key,"common_lang","email"); ?></h4>
									<p class="<?php if ($user->email_verified == "No") {
													echo "not_";
												} ?>verified_trust"> <?php if ($user->email_verified == "No") {
																															echo get_lang_site_key($lang_key,"profile_lang","not");
																														} ?> <?php echo get_lang_site_key($lang_key,"product_lang","verified"); ?> : <span><?php echo $user->email; ?> </span>
										<?php if ($user->email_verified == "No") { ?><a href="javascript:void(0);" id="verify_mailid_btn" class="login_btn custom_verifiy_login_btn"><?php echo get_lang_site_key($lang_key,"profile_lang","verify_email"); ?></a><?php } ?>
									</p>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 profile_base_div verfication_trust_inner video_margin edit_profile_fields_inner ">
								<div class="edit_profile_head custom_background">
									<h3><?php if ($user->email_verified == "No") {
											echo get_lang_site_key($lang_key,"profile_lang","not");
										} ?> <?php echo get_lang_site_key($lang_key,"product_lang","verified"); ?></h3>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 verifed_infomation edit_profile_fields_div custom_verifed_information">
									<h4><?php echo get_lang_site_key($lang_key,"common_lang","phone_number"); ?></h4>
									<div class="add_new_number_div edit_profile_fields_input " id="append_phone_div_trust">

									</div>
									<?php /* <div class="col-md-12 col-sm-12 col-xs-12 social_media_verify">
									<div class="col-md-12 col-sm-12 col-xs-12 fb_connect">
									   <div class="col-md-6 col-sm-6 col-xs-12 fb_connect_lft">
										  <h5>Facebook</h5>
										  <p>Sign in with Facebook account and connect with your host  and guest all over the world.</p>
									   </div>
									   <div class="col-md-6 col-sm-6 col-xs-12 fb_connect_rgt">
										  <a href="#" class="preview_btn">Connect</a>
									   </div>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12 fb_connect">
									   <div class="col-md-6 col-sm-6 col-xs-12 fb_connect_lft">
										  <h5>Google</h5>
										  <p>Sign in with Google and connect with your host and guest all over the world.</p>
									   </div>
									   <div class="col-md-6 col-sm-6 col-xs-12 fb_connect_rgt">
										  <a href="#" class="preview_btn">Connect</a>
									   </div>
									</div>									
								 </div> */ ?>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane review_about_base" id="reviews_list">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#reviews_about_tab" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true" onclick="review_about_you();"><?php echo get_lang_site_key($lang_key,"profile_lang","review_about_you"); ?></a></li>
								<li role="presentation"><a href="#reviews_by_tab" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="true" onclick="write_review_list();"><?php echo get_lang_site_key($lang_key,"profile_lang","review_by_you"); ?></a></li>
							</ul>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="reviews_about_tab">
									<div class="col-md-12 col-sm-12 col-xs-12 profile_base_div verfication_trust_inner video_margin" id="reviews_about_you_html">


									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="reviews_by_tab">
									<div class="col-md-12 col-sm-12 col-xs-12 profile_base_div verfication_trust_inner video_margin" id="write_review_html">

									</div>
									<div class="col-md-12 col-sm-12 col-xs-12 profile_base_div verfication_trust_inner video_margin " id="written_review_html">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade save_wishlist_base" id="language_popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content save_wishlist_inner">
				<div class="modal-body save_wishlist_body">
					<h6 class="close_modal" data-dismiss="modal"><span><svg viewBox="0 0 11.01 11">
								<g id="Layer_2" data-name="Layer 2">
									<g id="_1" data-name="1">
										<path d="M6.3,5.51,10.83,1a.56.56,0,0,0,0-.78.56.56,0,0,0-.79,0L5.52,4.73,1,.16a.56.56,0,0,0-.78,0A.56.56,0,0,0,.18,1L4.74,5.51.16,10.06a.56.56,0,0,0,0,.78.57.57,0,0,0,.79,0L5.52,6.29l4.54,4.55a.56.56,0,0,0,.78,0,.56.56,0,0,0,0-.79Z" style="fill:#606060" />
									</g>
								</g>
							</svg></span></h6>
					<h3><?php echo get_lang_site_key($lang_key,"common_lang","create_list"); ?></h3>
					<ul class="list-unstyled">
						<?php $lang_list = explode(",", $user->language); ?>
						<?php foreach ($language_list->result() as $lan) { ?>
							<li class="col-md-6 col-sm-6 col-xs-12">
								<div class="custom_check">
									<label class="control control--checkbox label_class">
										<input type="checkbox" <?php if (in_array($lan->lang_name, $lang_list)) {
																	echo "checked";
																} ?> value="<?php echo $lan->lang_name; ?>" name="languages_list[]" data-id="<?php echo $lan->id; ?>" class="save_lang_class more_lang_save u_<?php echo $lan->id; ?>">
										<span class="amenties_content"><?php echo ucfirst($lan->lang_name); ?> </span>
										<p></p>
										<div class="control__indicator"></div>
									</label>
								</div>
							</li>
						<?php } ?>

					</ul>
					<div class="col-md-12 custom_save_btn">
						<a href="javascript:void(0);" class="login_btn" id="save_language_btn"><?php echo get_lang_site_key($lang_key,"product_lang","save"); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
<div class="modal fade request_accept_modal" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">

		<!-- Modal content-->
		<div class="modal-content model_text custom_review_modal_base">


			<?php
			$attributes = array('method' => 'post', 'id' => 'save_review_form');
			echo form_open('#', $attributes); ?>

			<a href="javascript:void(0);" data-dismiss="modal"><span class="modal_close_svg"><img src="<?php echo base_url(); ?>images/site/close.png"></span></a>
			<h2 class="head_padd"><?php echo get_lang_site_key($lang_key,"profile_lang","rate_your_host"); ?> <span class="all_rating hide_review_star_before"><?php echo get_lang_site_key($lang_key,"profile_lang","over_all"); ?> </span><span class="rating_in_number total_rate_value hide_review_star_before">4.1</span><span class="rating_image hide_review_star_before"><img src="<?php echo base_url(); ?>images/site/star1.png"></span></h2>
			<ul class="list-unstyled rating_list custom_review_modal">
				<li class="right"><?php echo get_lang_site_key($lang_key,"profile_lang","over_all"); ?><span><input type="text" class="rating rating-loading " id="rate_acc" name="rate_acc" value="0" data-size="xs" title=""></span></li>
				<li class="left"><?php echo get_lang_site_key($lang_key,"product_lang","location"); ?><span><input type="text" class="rating rating-loading " id="rate_loc" name="rate_loc" value="0" data-size="xs" title=""></span></li>
				<li class="right"><?php echo get_lang_site_key($lang_key,"product_lang","communication"); ?><span><input type="text" class="rating rating-loading " id="rate_com" name="rate_com" value="0" data-size="xs" title=""></span></li>
				<li class="left"><?php echo get_lang_site_key($lang_key,"product_lang","check_in"); ?><span><input type="text" class="rating rating-loading " id="rate_checkin" name="rate_checkin" value="0" data-size="xs" title=""></span></li>
				<li class="right"><?php echo get_lang_site_key($lang_key,"product_lang","cleanliness"); ?><span><input type="text" class="rating rating-loading " id="rate_clean" name="rate_clean" value="0" data-size="xs" title=""></span></li>
				<li class="left"><?php echo get_lang_site_key($lang_key,"product_lang","value"); ?><span><input type="text" class="rating rating-loading " id="rate_value" name="rate_value" value="0" data-size="xs" title=""></span></li>
			</ul>
			<h2 class="head_padd"><?php echo get_lang_site_key($lang_key,"profile_lang","review_trip"); ?></h2>
			<textarea name="comments" id="comments"></textarea>
			<input type="hidden" id="total_rate_value" name="total_rate_value" value="">
			<input type="hidden" id="rate_pid" name="pid" value="">
			<input type="hidden" id="rate_booking_id" name="booking_id" value="">
			<div class="close_btn_base submit_base">
				<a href="javascript:void(0);" class="accept" id="save_review_btn"><?php echo get_lang_site_key($lang_key,"common_lang","submit"); ?></a>
			</div>
			</form>
		</div>
	</div>
</div>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/site/star-rating.min.css" media="all" type="text/css" />
<script src="<?php echo base_url(); ?>js/site/star-rating.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/site/owl.carousel.min.js"></script>

<script src="<?php echo base_url(); ?>js/site/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>js/site/jquery.form.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=<?php echo $this->config->item('gmap_key'); ?>"></script>
</script>
<script src="<?php echo base_url(); ?>js/site/user_script.js"></script>
<?php $this->load->view('site/common/footer'); ?>