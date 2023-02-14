<?php  $product=$product_details->row();    	?>
<div class="container mob_nopadd">
		<div class="col-md-12 col-sm-12 col-xs-12 booking_price_base mob_nopadd">
			<div class="col-md-12 col-xs-12 col-sm-12 nopadd">
				<div class="col-md-6 col-sm-6 col-xs-12 place_location_lft mob_nopadd">
					<div class="col-md-10 col-sm-12 col-xs-12 nopadd">
						<h4><?php echo get_lang_site_key($lang_key,"product_lang","update_calender"); ?></h4>
						<div id="calender_load" class="month_calendar"> </div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 place_location_rgt mob_nopadd">
						<div class="col-md-10 col-sm-12 col-xs-12 nopadd">
								<h4><?php echo get_lang_site_key($lang_key,"product_lang","price_place"); ?></h4>
								<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base">
										<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","price_night"); ?></label>
										<select class="select-control save_function" name="currency">
											<?php foreach($currency_lists->result() as $curr){ ?>
											<option <?php if($product->currency==$curr->currency_type){ echo "selected";}?> value="<?php echo $curr->currency_type; ?>"><?php echo ucfirst($curr->currency_type); ?></option>
											<?php } ?>
										</select>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base">
										<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","price_night"); ?></label>
										<input class="input-control numbervalidate save_function" name="price" value="<?php echo $product->price;?>" type="text" placeholder="$">
								</div>
								
								<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base">
										<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","cancellation_policy"); ?></label>
										<select class="select-control save_function" name="cancellation_type">
											<?php foreach($cancellation_policy->result() as $cancellation){ ?>
											<option <?php if($product->cancellation_type==$cancellation->id){ echo "selected";}?> value="<?php echo $cancellation->id; ?>"><?php echo get_common_details(CANCELLATION_LANG,'cancellation_type',$cancellation->id,$lang_key); ?></option>
											<?php } ?>
										</select>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 dedicated_hous_base nopadd list_after_hide room_type_show custom_house_base">
										<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","what_type_book"); ?>?</label>
										<div class="col-md-12 col-sm-12 col-xs-12 custom_radio nopadd">
											<label class="control control--radio"><?php echo get_lang_site_key($lang_key,"product_lang","instant_booking"); ?>
												<input type="radio" class="save_function_radio" <?php if($product->instant_booking=="1"){ echo "checked";}?> name="instant_booking" value="1">
												<div class="control__indicator"></div>
											</label>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12 custom_radio nopadd">
											<label class="control control--radio"><?php echo get_lang_site_key($lang_key,"product_lang","request_book"); ?>
												<input type="radio" class="save_function_radio"  <?php if($product->instant_booking=="0"){ echo "checked";} ?>  name="instant_booking" value="0" >
												<div class="control__indicator"></div>
											</label>
										</div>
								</div>
						</div>
				</div>
			</div>
			<div class="col-md-12 col-xs-12 col-sm-12 booking_inner_section nopadd">
					<div class="col-md-6 col-sm-6 col-xs-12 place_location_lft mob_nopadd custom_future_reservation">
						<div class="col-md-10 col-sm-12 col-xs-12 nopadd">
							<h4><?php echo get_lang_site_key($lang_key,"product_lang","future_reservation"); ?></h4>
							<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base">
									<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","how_far_guest_book"); ?>?</label>
									<select class="select-control save_function" name="future_booking">
										<option value="-1" <?php if($product->future_booking=="-1"){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"product_lang","any_time"); ?></option>
										<option value="90" <?php if($product->future_booking=="90"){ echo "selected";}?>>3 <?php echo get_lang_site_key($lang_key,"product_lang","months"); ?></option>
										<option value="180" <?php if($product->future_booking=="180"){ echo "selected";}?>>6 <?php echo get_lang_site_key($lang_key,"product_lang","months"); ?></option>
										<option value="270" <?php if($product->future_booking=="270"){ echo "selected";}?>>9 <?php echo get_lang_site_key($lang_key,"product_lang","months"); ?></option>
										<option value="365" <?php if($product->future_booking=="365"){ echo "selected";}?>>1 <?php echo get_lang_site_key($lang_key,"common_lang","year"); ?></option>								
									</select>
							</div>
							
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 place_location_rgt mob_nopadd">
							<div class="col-md-10 col-sm-12 col-xs-12 nopadd">
									<h4><?php echo get_lang_site_key($lang_key,"product_lang","check_in"); ?></h4>
									<div class="col-md-12 col-sm-12 col-xs-12 nopadd">
											<div class="col-md-6 col-sm-6 col-xs-12 two_inputs_lft  input_base mob_nopadd">
													<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","arrive_after"); ?></label>
													<select class="select-control save_function" name="checkin_arrive_after">
														<option value="FLEXIBLE" <?php if($product->checkin_arrive_after=="FLEXIBLE"){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"product_lang","flexible"); ?></option>
														<option value="8" <?php if($product->checkin_arrive_after=="8"){ echo "selected";}?>>8AM</option>
														<option value="9" <?php if($product->checkin_arrive_after=="9"){ echo "selected";}?>>9AM</option>
														<option value="10" <?php if($product->checkin_arrive_after=="10"){ echo "selected";}?>>10AM</option>
														<option value="11" <?php if($product->checkin_arrive_after=="11"){ echo "selected";}?>>11AM</option>
														<option value="12" <?php if($product->checkin_arrive_after=="12"){ echo "selected";}?>>12PM (<?php echo get_lang_site_key($lang_key,"product_lang","noon"); ?>)</option>
														<option value="13" <?php if($product->checkin_arrive_after=="13"){ echo "selected";}?>>1PM</option>
														<option value="14" <?php if($product->checkin_arrive_after=="14"){ echo "selected";}?>>2PM</option>
														<option value="15" <?php if($product->checkin_arrive_after=="15"){ echo "selected";}?>>3PM</option>
														<option value="16" <?php if($product->checkin_arrive_after=="16"){ echo "selected";}?>>4PM</option>
														<option value="17" <?php if($product->checkin_arrive_after=="17"){ echo "selected";}?>>5PM</option>
														<option value="18" <?php if($product->checkin_arrive_after=="18"){ echo "selected";}?>>6PM</option>
														<option value="19" <?php if($product->checkin_arrive_after=="19"){ echo "selected";}?>>7PM</option>
														<option value="20" <?php if($product->checkin_arrive_after=="20"){ echo "selected";}?>>8PM</option>
														<option value="21" <?php if($product->checkin_arrive_after=="21"){ echo "selected";}?>>9PM</option>
														<option value="22" <?php if($product->checkin_arrive_after=="22"){ echo "selected";}?>>10PM</option>
														<option value="23" <?php if($product->checkin_arrive_after=="23"){ echo "selected";}?>>11PM</option>
														<option value="24" <?php if($product->checkin_arrive_after=="24"){ echo "selected";}?>>12AM (<?php echo get_lang_site_key($lang_key,"product_lang","mid_night"); ?>)</option>
														<option value="25" <?php if($product->checkin_arrive_after=="25"){ echo "selected";}?>>1AM (<?php echo get_lang_site_key($lang_key,"product_lang","next_day"); ?>)</option>
													</select>
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 two_inputs_rgt input_base mob_nopadd">
														<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","arrive_before"); ?></label>
														<select class="select-control save_function" name="checkin_arrive_before">
														    <option value="FLEXIBLE" <?php if($product->checkin_arrive_after=="FLEXIBLE"){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"product_lang","flexible"); ?></option>
														    <option value="8" <?php if($product->checkin_arrive_before=="8"){ echo "selected";}?>>8AM</option>
															<option value="9" <?php if($product->checkin_arrive_before=="9"){ echo "selected";}?>>9AM</option>
															<option value="10" <?php if($product->checkin_arrive_before=="10"){ echo "selected";}?>>10AM</option>
															<option value="11" <?php if($product->checkin_arrive_before=="11"){ echo "selected";}?>>11AM</option>
															<option value="12" <?php if($product->checkin_arrive_before=="12"){ echo "selected";}?>>12PM (<?php echo get_lang_site_key($lang_key,"product_lang","noon"); ?>)</option>
															<option value="13" <?php if($product->checkin_arrive_before=="13"){ echo "selected";}?>>1PM</option>
															<option value="14" <?php if($product->checkin_arrive_before=="14"){ echo "selected";}?>>2PM</option>
															<option value="15" <?php if($product->checkin_arrive_before=="15"){ echo "selected";}?>>3PM</option>
															<option value="16" <?php if($product->checkin_arrive_before=="16"){ echo "selected";}?>>4PM</option>
															<option value="17" <?php if($product->checkin_arrive_before=="17"){ echo "selected";}?>>5PM</option>
															<option value="18" <?php if($product->checkin_arrive_before=="18"){ echo "selected";}?>>6PM</option>
															<option value="19" <?php if($product->checkin_arrive_before=="19"){ echo "selected";}?>>7PM</option>
															<option value="20" <?php if($product->checkin_arrive_before=="20"){ echo "selected";}?>>8PM</option>
															<option value="21" <?php if($product->checkin_arrive_before=="21"){ echo "selected";}?>>9PM</option>
															<option value="22" <?php if($product->checkin_arrive_before=="22"){ echo "selected";}?>>10PM</option>
															<option value="23" <?php if($product->checkin_arrive_before=="23"){ echo "selected";}?>>11PM</option>
															<option value="24" <?php if($product->checkin_arrive_before=="24"){ echo "selected";}?>>12AM (<?php echo get_lang_site_key($lang_key,"product_lang","mid_night"); ?>)</option>
															<option value="25" <?php if($product->checkin_arrive_before=="25"){ echo "selected";}?>>1AM (<?php echo get_lang_site_key($lang_key,"product_lang","next_day"); ?>)</option>
														</select>
													</div>
									</div>
							</div>
					</div>
				</div>
				<div class="col-md-12 col-xs-12 col-sm-12 booking_inner_section nopadd">
						<div class="col-md-6 col-sm-6 col-xs-12 place_location_lft mob_nopadd">
							<div class="col-md-10 col-sm-12 col-xs-12 nopadd">
								<h4><?php echo get_lang_site_key($lang_key,"product_lang","advance_notice"); ?></h4>
								<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base">
										<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","need_before_guest_arrives"); ?>?</label>
										<select class="select-control save_function" name="advance_notice">
											<option value="0" <?php if($product->advance_notice=="0"){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"product_lang","same_day"); ?></option>
											<option value="1" <?php if($product->advance_notice=="1"){ echo "selected";}?>>1 <?php echo get_lang_site_key($lang_key,"common_lang","day"); ?></option>
											<option value="2" <?php if($product->advance_notice=="2"){ echo "selected";}?>>2 <?php echo get_lang_site_key($lang_key,"product_lang","days"); ?></option>
											<option value="3" <?php if($product->advance_notice=="3"){ echo "selected";}?>>3 <?php echo get_lang_site_key($lang_key,"product_lang","days"); ?></option>
											<option value="7" <?php if($product->advance_notice=="7"){ echo "selected";}?>>7 <?php echo get_lang_site_key($lang_key,"product_lang","days"); ?></option>
										</select>
								</div>
								
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 place_location_rgt mob_nopadd">
								<div class="col-md-10 col-sm-12 col-xs-12 nopadd">
										<h4><?php echo get_lang_site_key($lang_key,"product_lang","trip_lenght"); ?></h4>
										<div class="col-md-12 col-sm-12 col-xs-12 trip_length_base nopadd">
												
												<div class="col-md-12 col-sm-12 col-xs-12 count_text_box_base nopadd">
														<p><?php echo get_lang_site_key($lang_key,"product_lang","min_stay"); ?> <span> (<?php echo get_lang_site_key($lang_key,"product_lang","nights"); ?>)</span></p>
														<div class="count_text_box deselect">
															<span class="minus_count countingbox_minus custom_minus_count">-</span>
															<span class="count_detail countingbox custom_count_details" data-min="1" id="min_stay_countbox"  data-name="min_stay" data-value="<?php echo $product->min_stay;?>"><?php echo $product->min_stay;?></span>
															<span class="plus_count countingbox_plus custom_plus_count">+</span>
														</div>
												</div>
												<label id="min_stay_error" ></label>
												<div class="col-md-12 col-sm-12 col-xs-12 count_text_box_base nopadd">
														<p><?php echo get_lang_site_key($lang_key,"product_lang","max_stay"); ?> <span> (<?php echo get_lang_site_key($lang_key,"product_lang","nights"); ?>)</span></p>
														<div class="count_text_box deselect">
															<span class="minus_count countingbox_minus custom_minus_count">-</span>
															<span class="count_detail countingbox custom_count_details" data-min="1" id="max_stay_countbox"   data-name="max_stay" data-value="<?php echo $product->max_stay;?>"><?php echo $product->max_stay;?></span>
															<span class="plus_count countingbox_plus custom_plus_count">+</span>
														</div>
												</div>
												<label id="max_stay_error" ></label>
										</div>
								</div>
						</div>
					</div>
		</div>
</div>
								