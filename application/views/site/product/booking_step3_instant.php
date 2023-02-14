<?php $this->load->view('site/product/booking_header'); $product_details=$product_detail->row(); 	?>
<section>
<div class="col-md-12 col-sm-12 col-xs-12 review_trip_base">
					<div class="container">
								<div class="col-md-12 col-sm-12 col-xs-12 review_trip_inner">
										
											<div class="col-md-8 col-sm-6 col-xs-12 review_trip_lft">
												<h2><?php  echo get_lang_site_key($lang_key,"header_footer_lang","confirm_and_pay");  ?></h2>
												<div class="col-md-8 col-sm-10 col-xs-12 review_trip_lft_inner">
																<label class="label_class"><?php  echo get_lang_site_key($lang_key,"product_lang","pay_with");  ?></label>
																<select class="select-control" id="payment_type">
																  <option value=""><?php  echo get_lang_site_key($lang_key,"product_lang","select_save_card");  ?></option>
																  <option value="Stripe"><?php  echo get_lang_site_key($lang_key,"product_lang","credit_car");  ?></option>
																  <option value="Paypal"><?php  echo get_lang_site_key($lang_key,"product_lang","paypal");  ?></option>
																</select>
												<div class="col-md-12 col-sm-12 col-xs-12 custom_booking_card_base">
												<?php
													$attributes = array( 'id' => 'stripe_payment_form','method'=>'post');
													echo form_open('#', $attributes); ?>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 servicer_input custom_card_inner">
                                                            <label class="label_class"><?php  echo get_lang_site_key($lang_key,"product_lang","credit_car_number");  ?></label>
                                                            <input type="text" type="number" maxlength="16" name="number" class="input-control">
                                                            <p><?php  echo get_lang_site_key($lang_key,"product_lang","for_demo");  ?>:4111 1111 1111 1111</p>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 custom_card_date_base">
                                                    <div class="col-md-8 col-sm-12 col-xs-12 servicer_input custom_card_date_inner">
                                                            <label class="label_class"><?php  echo get_lang_site_key($lang_key,"product_lang","expiration_date");  ?></label>
                                                            <ul class="list-inline exp_date">
                                                                  <li class="col-md-6 col-sm-6 col-xs-12 custom_booking_month"> <select name="exp_month" class="select-control">
																	<option value=""><?php  echo get_lang_site_key($lang_key,"common_lang","month");  ?></option>
																	<?php for($i=1;$i<=12;$i++){?>
																		<option value="<?php echo $i;?>"><?php echo $i;?></option>
																	<?php } ?>
																  </select></li>
                                                                  <li class="col-md-6 col-sm-6 col-xs-12 custom_booking_year"><select name="exp_year" class="select-control">
																	 <option value=""><?php  echo get_lang_site_key($lang_key,"common_lang","year");  ?></option>
																	   <?php 
																		   $thisyear=date('Y');
																		   $endofyear=date('Y')+20;
																	   for($i=$thisyear;$i<=$endofyear;$i++){?>
																				<option value="<?php echo $i;?>"><?php echo $i;?></option>
																			<?php } ?>
																  </select></li>
                                                            </ul>
                                                            <p><?php  echo get_lang_site_key($lang_key,"product_lang","for_demo");  ?> : 10/2025</p>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 col-xs-12 servicer_input custom_card_date_inner">
                                                            <label class="label_class"><?php  echo get_lang_site_key($lang_key,"product_lang","cvv_code");  ?></label>
                                                            <input type="number" name="cvc"  class="input-control">
                                                            <p><?php  echo get_lang_site_key($lang_key,"product_lang","for_demo");  ?> :123</p>
                                                    </div>
                                                      </div>
                                                    
												</form>
												
											</div>
												</div>
												<?php if($cancellation_policy->num_rows()>0){ $cancel=$cancellation_policy->row();?>
												<div class="col-md-10 col-sm-10 col-xs-12 cancel_policy_base nopadd">
														<h3><?php  echo get_lang_site_key($lang_key,"product_lang","cancellation_policy");  ?></h3>
														<h4><?php echo $cancel->cancellation_type;?></h4>
														<p><?php echo $cancel->description;?></p>
														<div class="col-md-12 col-sm-12 col-xs-12 nopadd pay_u_base">
															<p><?php  echo get_lang_site_key($lang_key,"common_lang","redirect_pay");  ?>.<strong> <?php  echo get_lang_site_key($lang_key,"product_lang","complete_process_transcation");  ?>. </strong></p>
														</div>
														<div class="col-md-12 col-sm-12 col-xs-12 nopadd house_rul_base">
																<p><?php  echo get_lang_site_key($lang_key,"product_lang","i_agree_to");  ?> <a href="#"> <?php  echo get_lang_site_key($lang_key,"product_lang","house_rule_cancel_policy");  ?>,</a> <?php  echo get_lang_site_key($lang_key,"product_lang","and_to");  ?> <a href="#">  <?php  echo get_lang_site_key($lang_key,"product_lang","guest_refund_policy");  ?>. </a> <?php  echo get_lang_site_key($lang_key,"product_lang","i_also_agree");  ?>. </strong></p>
															</div>
												</div>
												<?php }?>
												<div class="col-md-10 col-sm-10 col-xs-12 agree_continue nopadd">
														<a href="javascript:void(0);" class="button_new" id="paybtn" ><?php  echo get_lang_site_key($lang_key,"product_lang","instant_book");  ?></a>
												</div>
										</div>	
										<div class="col-md-4 col-xs-12 col-sm-6 review_trip_rgt custom_review_trip_right">
													<div class="col-md-12 col-sm-12 col-xs-12 review_trip_inner">
															<div class="col-md-12 col-sm-12 col-xs-12 place_pay_name">
																	<div class="col-md-8 col-sm-8 col-xs-12 place_pay_lft">
																		<h3 title="<?php echo $product_details->listing_title;?>"><?php if(strlen($product_details->listing_title)>32){echo (substr($product_details->listing_title,0,32))."...";} else { echo $product_details->listing_title;} ?></h3>
																		<p><?php if($product_details->room_type=="shared_room"){ echo get_lang_site_key($lang_key,"home_lang","shared");} else if($product_details->room_type=="private_room"){ echo get_lang_site_key($lang_key,"home_lang","private");} else { echo get_lang_site_key($lang_key,"home_lang","entire");}?> <?php echo get_common_details(PROPERTY_TYPE_LANG,'property_type_name',$product_details->property_type,$lang_key);?></p>
																		<div class="reviews">
																				<i class="fa fa-star<?php if(round($stat_review_avg->total_review)<1){ echo "-o";}?>" aria-hidden="true"></i>
																				<i class="fa fa-star<?php if(round($stat_review_avg->total_review)<2){ echo "-o";}?>" aria-hidden="true"></i>
																				<i class="fa fa-star<?php if(round($stat_review_avg->total_review)<3){ echo "-o";}?>" aria-hidden="true"></i>
																				<i class="fa fa-star<?php if(round($stat_review_avg->total_review)<4){ echo "-o";}?>" aria-hidden="true"></i>
																				<i class="fa fa-star<?php if(round($stat_review_avg->total_review)<5){ echo "-o";}?>" aria-hidden="true"></i>
																				<span><?php echo round($stat_review_avg->total_review);?> <?php  echo get_lang_site_key($lang_key,"common_lang","reviews");  ?></span>
																			</div>
																	</div>
																	<div class="col-md-4 col-sm-4 col-xs-12 place_pay_rgt">
																		<div class="responsive_img_base">
																			<div class="responsive_img" style="background: url(<?php echo base_url();?>images/site/product/<?php echo $product_details->cover_photo==""?"product.png":$product_details->cover_photo; ?>)">
																			</div>
																		</div>
																	</div>
															</div>
															<div class="col-md-12 col-sm-12 col-xs-12 guest_base">
																	<p>
																		<span class="user_icon_line"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.44 15.51"><title>Asset 35</title><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M16.48,6.72a3.11,3.11,0,1,0,0-6.22,3.11,3.11,0,1,0,0,6.22ZM8,6.72A3.11,3.11,0,1,0,8,.5,3.11,3.11,0,1,0,8,6.72ZM8,8.79C5.51,8.79.5,10,.5,12.42v1.2A1.39,1.39,0,0,0,1.89,15H14a1.39,1.39,0,0,0,1.39-1.39v-1.2C15.41,10,10.41,8.79,8,8.79Zm8.52,0a4.3,4.3,0,0,0-1.07.1,4.26,4.26,0,0,1,2.13,3.53v1.2A1.39,1.39,0,0,0,18.93,15h3.62a1.39,1.39,0,0,0,1.39-1.39v-1.2C23.94,10,18.93,8.79,16.48,8.79Z" style="fill:none;stroke:#383838;stroke-miterlimit:10"/></g></g></svg></span>
																		<span class="count_guest"><?php echo $guest_count;?></span>
																		<?php echo $guest_count==1?get_lang_site_key($lang_key,"header_footer_lang","guest"):get_lang_site_key($lang_key,"product_lang","guests");?>
																	</p>
																	<p>
																			<span class="calendar_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.82 16.32"><title>Asset 28</title><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><rect x="0.5" y="2.08" width="18.82" height="13.74" rx="3.64" ry="3.64" style="fill:none;stroke:#383838;stroke-miterlimit:10"/><path d="M5.86,4V4Z" style="fill:none;stroke:#383838;stroke-miterlimit:10;fill-rule:evenodd"/><path d="M14,4V4Z" style="fill:none;stroke:#383838;stroke-miterlimit:10;fill-rule:evenodd"/></g></g></svg></span>
																			<small><?php echo date('d',strtotime($checkin)).' '.get_lang_site_key($lang_key,"common_lang",strtolower(date('M',strtotime($checkin)))).' '.date('Y',strtotime($checkin));?></small> <span>  - </span> <small>  <?php echo date('d',strtotime($checkout)).' '.get_lang_site_key($lang_key,"common_lang",strtolower(date('M',strtotime($checkout)))).' '.date('Y',strtotime($checkout));?></small>
																		</p>
															</div>
															<div class="col-md-12 col-sm-12 col-xs-12 rate_night_base">
																	<p><?php echo $currency_symbol;?><?php echo round($currency_rate*$product_details->price); ?> * <?php echo $no_of_nights;?> 
																	<?php if($spl_price_info!=""){?>
																	<span class="append_price_list spl_price_tooltip" data-toggle="tooltip" data-placement="bottom" data-original-title='<?php echo $spl_price_info;?>'> <i class="fa fa-question-circle"></i></span><?php } ?>	
																	<span class="pull-right"><?php echo $currency_symbol;?><?php echo  round($currency_rate*$subprice);?> </span>	</p>
																	<?php if($cleaning_fee!="0"){?>
																	<p><?php  echo get_lang_site_key($lang_key,"product_lang","cleaning_fee");  ?> <span class="pull-right"><?php echo $currency_symbol;?><?php echo round($currency_rate*$cleaning_fee);?> </span>	</p>
																	<?php } ?>
																	<?php if($service_fee!=""){ ?>
																	<p><?php  echo get_lang_site_key($lang_key,"product_lang","service_fee");  ?>  <span class="pull-right"><?php echo $currency_symbol;?><?php echo round($currency_rate*$service_fee);?></span>	</p>
																	<?php } ?>
															</div>
															<div class="col-md-12 col-sm-12 col-xs-12 total_price_base">
																	<p><?php  echo get_lang_site_key($lang_key,"product_lang","total");  ?> (<?php echo $currency_code;?>) <span class="pull-right total_price"><?php echo $currency_symbol;?><?php echo round($currency_rate*$total_price);?> </span>	</p>
																	<p class="applicable_rate"><?php  echo get_lang_site_key($lang_key,"product_lang","quote_applicable_rate");  ?>.</p>
															</div>
													</div>
										</div>
								</div>
					</div>
			</div>
	
</section>
     
<script>
	var swtOk="<?php echo get_lang_site_key($lang_key,"common_lang","alert_text_ok")?>";
</script>
<script src="<?php echo base_url();?>js/site/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>js/site/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>js/site/booking_script.js"></script> 
<script src="<?php echo base_url();?>js/site/jquery.validate.min.js"></script> 
<script src="<?php echo base_url();?>js/site/validate.js"></script> 
<script src="<?php echo base_url();?>js/site/sweetalert.min.js"></script> 
