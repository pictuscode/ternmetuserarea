<?php  $product=$product_details->row();	?>
<div class="container mob_nopadd">
		<div class="col-md-12 col-sm-12 col-xs-12 place_location_base mob_nopadd">
			<div class="col-md-6 col-sm-6 col-xs-12 place_location_lft mob_nopadd">
				<div class="col-md-10 col-xs-12 col-sm-12 nopadd">
				<?php
					$attributes = array( 'id' => 'address_form','method'=>'post');
					echo form_open('#', $attributes); ?>
					<h4><?php echo get_lang_site_key($lang_key,"product_lang","where_place"); ?> ?</h4>
					<label id="mapaddress_error"></label>
					<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base">
						<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","coun_region"); ?></label>
						<select name="country" class="select-control address_validate" id="address_country">
							<option value=""><?php echo get_lang_site_key($lang_key,"product_lang","choose_country"); ?></option>
							<?php foreach($country_list->result() as $country){?>
							<option <?php if($country->id==$product->country){ echo "selected";}?> value="<?php echo $country->id;?>" ccode="<?php echo $country->iso;?>" data-name="<?php echo $country->nicename;?>"><?php echo $country->nicename;?></option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base">
						<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","street_address"); ?></label>
						<input class="input-control address_validate" type="text" value="<?php echo $product->street;?>" id="autocomplete_street_address" name="street">
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base">
							<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","apart_building"); ?>. (<?php echo get_lang_site_key($lang_key,"product_lang","optonal"); ?>)</label>
							<input class="input-control" type="text" value="<?php echo $product->apartment;?>"  name="apartment" id="apartment_address">
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 nopadd">
							<div class="col-md-6 col-sm-6 col-xs-12 two_inputs_lft  input_base mob_nopadd">
									<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","city"); ?></label>
									<input class="input-control address_validate" value="<?php echo $product->city;?>" type="text" name="city" id="address_city">
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12 two_inputs_rgt input_base mob_nopadd">
										<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","state"); ?></label>
										<input class="input-control address_validate" value="<?php echo $product->state;?>" type="text" name="state" id="address_state">
									</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 nopadd">
							<div class="col-md-6 col-sm-6 col-xs-12 two_inputs_lft input_base mob_nopadd">
									<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","zip_code"); ?></label>
									<input class="input-control address_validate" value="<?php echo $product->zipcode;?>" type="text" name="zipcode" id="address_zipcode">
									<input class="input-control" value="<?php echo $product->latitude;?>" type="hidden" name="latitude" id="address_latitude">
									<input class="input-control" value="<?php echo $product->longitude;?>" type="hidden" name="longitude" id="address_longitude">
								</div>
					</div>
				    <p id="address_location" class="custom_address_location"><?php echo $product->address;?></p>
					<div class="col-md-12 col-sm-12 col-xs-12 map_base_listing">
							<div id="map_move_btns" class="custom_map_btns">
							<a href="javascript:void(0);" id="map_adjust" class="custom_map_adjust_btn"><?php echo get_lang_site_key($lang_key,"product_lang","adjust"); ?></a>
							<a href="javascript:void(0);" id="map_save" class="custom_map_save_btn"><?php echo get_lang_site_key($lang_key,"product_lang","save"); ?></a></div>
							<div id="address_map"></div>
					</div>
				  </form>	
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 place_location_rgt mob_nopadd">
					<div class="col-md-10 col-sm-12 col-xs-12 nopadd pull-right">
							<h4><?php echo get_lang_site_key($lang_key,"product_lang","where_place"); ?> ?</h4>
							   <div class="col-md-12 col-sm-12 col-xs-12 nopadd list_title_text input_base">
									<input class="input-control count_function save_function address_validate" id="listing_title" data-count="50" name="listing_title" placeholder="<?php echo get_lang_site_key($lang_key,"home_lang","listing_tile"); ?>"  type="text" maxlength="50" value="<?php echo $product->listing_title;?>">
									<span class="text-count custom_text_count"><?php if(strlen($product->listing_title)==0){ echo "50";} else { echo 50-strlen($product->listing_title); }?></span>
								</div>
								<h4 class="describe_h3"><?php echo get_lang_site_key($lang_key,"product_lang","describe_place"); ?></h4>
								<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base discription_text">
										<textarea class="input-control textarea-control count_function save_function address_validate" id="listing_description" placeholder="<?php echo get_lang_site_key($lang_key,"home_lang","des_placeholder"); ?>..." maxlength="500" name="description" data-count="500"><?php echo $product->description;?></textarea>
										<span class="text-count custom_text_count"><?php if(strlen($product->listing_title)==0){ echo "500";} else { echo 500-strlen($product->description); }?></span>
								</div>
								<?php if($product->myplace!=""){$place_array=json_decode($product->myplace); } else { $place_array=array();} ?>
								<h4 class="describe_h3"><?php echo get_lang_site_key($lang_key,"product_lang","my_place_great"); ?></h4>
								<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base">
										<div class="custom_check">
												<label class="control control--checkbox">
													<input type="checkbox" class="save_function_multiple_checkbox" name="myplace[]" value="1" <?php if(in_array(1,$place_array)){ echo "checked";}?> />
													<?php echo get_lang_site_key($lang_key,"product_lang","families"); ?> (<?php echo get_lang_site_key($lang_key,"product_lang","with_kid"); ?>)
													<div class="control__indicator"></div>
												</label>
											</div> 
											<div class="custom_check">
													<label class="control control--checkbox">
														<input type="checkbox" class="save_function_multiple_checkbox"  name="myplace[]" value="2" <?php if(in_array(2,$place_array)){ echo "checked";}?> />
														<?php echo get_lang_site_key($lang_key,"product_lang","big_group"); ?>
														<div class="control__indicator"></div>
													</label>
												</div> 
												<div class="custom_check">
														<label class="control control--checkbox">
															<input type="checkbox" class="save_function_multiple_checkbox"  name="myplace[]" value="3" <?php if(in_array(3,$place_array)){ echo "checked";}?>/>
															<?php echo get_lang_site_key($lang_key,"product_lang","pets"); ?>
															<div class="control__indicator"></div>
														</label>
													</div> 
								</div>
					</div>
			</div>
		</div>
	</div>

