<?php  $product=$product_details->row();
	   $bedrooms_bedarray=array();
       $bedrooms_bedarray=json_decode($product->bedrooms,true);

	?>
<div class="container mob_nopadd">
												<div class="col-md-12 col-sm-12 col-xs-12 room_guests_base mob_nopadd">
													  <div class="col-md-6 col-sm-6 col-xs-12 place_location_lft mob_nopadd">
															<div class="col-md-10 col-xs-12 col-sm-12 nopadd">
																	<h4><?php echo get_lang_site_key($lang_key,"product_lang","kind_of_place"); ?>?</h4>
																<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base">
																	<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","home_hotel_else"); ?>?</label>
																	<select class="select-control save_function room_validate" name="list_type" data-value="<?php echo $product->list_type;?>" id="list_type">
																		<option value="" ><?php echo get_lang_site_key($lang_key,"product_lang","choose_listing_type"); ?></option>
																		<?php foreach($listing_type->result() as $ltype){?>
																		<option <?php if($ltype->id==$product->list_type){ echo "selected";}?> value="<?php echo $ltype->id;?>"><?php echo get_common_details(LISTING_TYPE_LANG,'listing_name',$ltype->id,$lang_key);?></option>
																		<?php } ?>
																	</select>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base list_before_hide list_after_hide property_type_show">
																	<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","what_type_property"); ?>?</label>
																	<select class="select-control save_function room_validate" name="property_type" id="property_type_dropdown">
																		
																	</select>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 nopadd list_before_hide list_after_hide room_type_show">
																	<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","guests_have"); ?>?</label>
																	<select class="select-control save_function" name="room_type">
																		<option value="entire_home" <?php if($product->room_type=="entire_home")echo "selected";?>><?php echo get_lang_site_key($lang_key,"common_lang","entire_place"); ?></option>
																		<option value="private_room" <?php if($product->room_type=="private_room")echo "selected";?>><?php echo get_lang_site_key($lang_key,"common_lang","private_room"); ?></option>
																		<option value="shared_room" <?php if($product->room_type=="shared_room")echo "selected";?>><?php echo get_lang_site_key($lang_key,"common_lang","shared_room"); ?></option>
																	</select>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 dedicated_hous_base nopadd list_before_hide list_after_hide room_type_show custom_house_base">
																		<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","dedicate_guest_sapce"); ?>?</label>
																		<div class="col-md-12 col-sm-12 col-xs-12 custom_radio nopadd">
																			<label class="control control--radio"><?php echo get_lang_site_key($lang_key,"product_lang","price_demad"); ?>
																				<input type="radio"  class="save_function_radio"  name="price_adap" value="1" <?php if($product->price_adap==1){ ?> checked="checked" <?php } ?>>
																				<div class="control__indicator"></div>
																			</label>
																		</div>
																		<div class="col-md-12 col-sm-12 col-xs-12 custom_radio nopadd">
																			<label class="control control--radio"><?php echo get_lang_site_key($lang_key,"product_lang","belogings_here"); ?>
																				<input type="radio" class="save_function_radio" name="price_adap" value="0" <?php if($product->price_adap==0){ ?> checked="checked" <?php } ?>>
																				<div class="control__indicator"></div>
																			</label>
																		</div>
																</div>
																
															</div>
														</div>
														<div class="col-md-6 col-sm-6 col-xs-12 place_location_rgt list_before_hide list_after_hide room_type_show mob_nopadd custom_location_rgt">
																<div class="col-md-12 col-sm-12 col-xs-12 nopadd pull-right">
																		<h4><?php echo get_lang_site_key($lang_key,"product_lang","how_many_guest_stay"); ?>?</h4>
																		<div class="col-md-12 col-sm-12 col-xs-12 count_text_box_base nopadd">
																				<p><?php echo get_lang_site_key($lang_key,"product_lang","totla_guest"); ?></p>
																				<div class="count_text_box deselect">															
																					<span class="minus_count countingbox_minus custom_minus_count">-</span>
																					<span class="count_detail countingbox custom_count_details" data-min="1" id="total_guest_count" data-name="guest_count" data-value="<?php echo $product->guest_count;?>"><?php echo $product->guest_count;?></span>
																					<span class="plus_count countingbox_plus custom_plus_count">+</span>
																				</div>
																		</div>
																		<div class="col-md-12 col-sm-12 col-xs-12 count_text_box_base nopadd">
																				<p><?php echo get_lang_site_key($lang_key,"product_lang","how_many_bedrooms"); ?>?</p>
																				<div class="count_text_box deselect">
																					<span class="minus_count countingbox_minus custom_minus_count">-</span>
																					<span class="count_detail countingbox custom_count_details" data-min="0" id="total_bedrooms" data-name="bedroom_count" data-value="<?php echo $product->bedroom_count;?>"><?php echo $product->bedroom_count;?></span>
																					<span class="plus_count countingbox_plus custom_plus_count">+</span>
																				</div>
																		</div>
																		<h4><?php echo get_lang_site_key($lang_key,"product_lang","sleeping_arrangement"); ?></h4>
																		<div id="bedrooms_box">
																			<?php for($i=1;$i<=$product->bedroom_count;$i++){?>
																			<div class="col-md-12 col-xs-12 col-sm-12 arrang_base nopadd bedrooms_div bedroom_div_<?php echo $i;?>" data-id="<?php echo $i;?>">
																				<div class="col-md-12 col-sm-12 col-xs-12 bedroom_base">
																					<p><?php echo get_lang_site_key($lang_key,"product_lang","bedroom"); ?> <span class="bed_labelno"> <?php echo $i;?> </span></p>
																					<p class="bathroom_spec_base privatebathroom <?php if(is_array($bedrooms_bedarray) && array_key_exists('br'.$i,$bedrooms_bedarray) && array_key_exists('pb',$bedrooms_bedarray['br'.$i])){ if($bedrooms_bedarray['br'.$i]['pb']==0){echo "bathroom_hide"; }} else { echo "bathroom_hide";} ?>"><span class="bathroom_icon"></span> <?php echo get_lang_site_key($lang_key,"product_lang","with_bathroom"); ?></p>
																					<span class="edit_bed edit_bedroom_btn"><?php echo get_lang_site_key($lang_key,"product_lang","edit"); ?></span>
																					<ul class="list-inline bed_listdetail_no br<?php echo $i; ?>" >
																						<?php if(is_array($bedrooms_bedarray) && array_key_exists('br'.$i,$bedrooms_bedarray)){ 
																						       foreach($bed_type->result() as $btype){
																							   if(is_array($bedrooms_bedarray) && array_key_exists('b'.$btype->bed_id,$bedrooms_bedarray['br'.$i])){ if($bedrooms_bedarray['br'.$i]['b'.$btype->bed_id]!=0){?>
																						        <li><p><span class="bed_labelno bedcount b<?php echo $btype->bed_id; ?>"><?php echo $bedrooms_bedarray['br'.$i]['b'.$btype->bed_id];?> </span><?php echo get_common_details(BED_TYPE_LANG,'bed_type_name',$btype->bed_id,$lang_key);?></p></li>
																							   <?php }}}} ?>
																					</ul>
																					<div class="add_bed_detail_base bedrooms_div_edit_<?php echo $i;?> edit_bed_hide">
																						<div class="drop_down_base">
																							<div class="dropdown">
																									<span class="custom_bed_class" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																										<span class="custom_add_bed"><?php echo get_lang_site_key($lang_key,"product_lang","add_bed_type"); ?></span>
																										<span class="custom_caret_clear_icon"><svg viewBox="0 0 11.7 6.82"><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M11.7,1a.37.37,0,0,1-.12.27L6.12,6.7a.36.36,0,0,1-.54,0L.12,1.24A.36.36,0,0,1,.12.7L.7.12a.36.36,0,0,1,.54,0l4.61,4.6,4.6-4.6a.36.36,0,0,1,.54,0l.59.58A.37.37,0,0,1,11.7,1Z" style="fill:#5f5f5f"></path></g></g></svg></span>
																										<span class="edit_bed button_new remove_done_btn" data-id="<?php echo $i; ?>"><?php echo get_lang_site_key($lang_key,"common_lang","clear"); ?></span>
																									</span>
																									<ul class="dropdown-menu bdrop<?php echo $i; ?>"  aria-labelledby="dropdownMenu1">
																									   <?php foreach($bed_type->result() as $btype){?>
																										  <li>
																												<label><?php echo get_common_details(BED_TYPE_LANG,'bed_type_name',$btype->bed_id,$lang_key);?></label>
																												<div class="count_text_box deselect">
																														<span class="minus_count bed_countingbox_minus">-</span>
																														<span class="count_detail countingbox" data-min="0"  data-id="<?php echo $btype->bed_id;?>" data-edit-id="<?php echo $i;?>" data-name="bcount" data-value="<?php					  
																													     if(is_array($bedrooms_bedarray) && array_key_exists('br'.$i,$bedrooms_bedarray) && array_key_exists('b'.$btype->bed_id,$bedrooms_bedarray['br'.$i])){ echo $bedrooms_bedarray['br'.$i]['b'.$btype->bed_id]; } else { echo "0";}?>"><?php				  
																													     if(is_array($bedrooms_bedarray) && array_key_exists('br'.$i,$bedrooms_bedarray) && array_key_exists('b'.$btype->bed_id,$bedrooms_bedarray['br'.$i])){ echo $bedrooms_bedarray['br'.$i]['b'.$btype->bed_id]; } else { echo "0";}?></span>
																														<span class="plus_count bed_countingbox_plus">+</span>
																												
																												</div>
																										  </li>	
																										  <?php } ?>
																									</ul>
																							</div>
																						</div>
																						<div class="private_bathroom_base">
																							<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","attached_bathrooms"); ?>?</label>
																							<div class="custom_check">
																									<label class="control control--checkbox">
																										<input type="checkbox" <?php if(is_array($bedrooms_bedarray) && array_key_exists('br'.$i,$bedrooms_bedarray) && array_key_exists('pb',$bedrooms_bedarray['br'.$i])){ if($bedrooms_bedarray['br'.$i]['pb']==1){echo "checked"; }} ?> class="pbcheckbox_new" data-id="<?php echo $i;?>">
																										<?php echo get_lang_site_key($lang_key,"product_lang","private_bathroom"); ?>
																										<div class="control__indicator"></div>
																									</label>
																								</div> 
																						</div>
																					</div>
																				</div>
																			</div>
																			<?php } ?>
																		</div>
																		
																			<div class="col-md-12 col-xs-12 col-sm-12 arrang_base nopadd add_bedroom_clone add_bed_box_div_hide">
																				<div class="col-md-12 col-sm-12 col-xs-12 bedroom_base">
																					<p><?php echo get_lang_site_key($lang_key,"product_lang","bedroom"); ?> <span class="bed_labelno"> 1 </span></p>
																					<p class="bathroom_spec_base privatebathroom bathroom_hide"><span class="bathroom_icon"></span> <?php echo get_lang_site_key($lang_key,"product_lang","with_bathroom"); ?></p>
																					<span class="edit_bed edit_bedroom_btn"><?php echo get_lang_site_key($lang_key,"product_lang","edit"); ?></span>
																					<ul class="list-inline bed_listdetail_no">
																						
																					</ul>
																																																														<div class="add_bed_detail_base  edit_bed_hide">
																						<div class="drop_down_base">
																							<div class="dropdown">
																									<span class="custom_bed_class" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																										<span class="custom_add_bed"><?php echo get_lang_site_key($lang_key,"product_lang","add_bed_type"); ?></span>
																										<span class="custom_caret_clear_icon"><svg viewBox="0 0 11.7 6.82"><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M11.7,1a.37.37,0,0,1-.12.27L6.12,6.7a.36.36,0,0,1-.54,0L.12,1.24A.36.36,0,0,1,.12.7L.7.12a.36.36,0,0,1,.54,0l4.61,4.6,4.6-4.6a.36.36,0,0,1,.54,0l.59.58A.37.37,0,0,1,11.7,1Z" style="fill:#5f5f5f"></path></g></g></svg></span>
																										<span class="edit_bed button_new remove_done_btn" data-id="<?php echo $i; ?>"><?php echo get_lang_site_key($lang_key,"common_lang","clear"); ?></span>
																									</span>
																									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
																									  <?php foreach($bed_type->result() as $btype){?>
																										  <li>
																												<label><?php echo get_common_details(BED_TYPE_LANG,'bed_type_name',$btype->bed_id,$lang_key);?></label>
																												<div class="count_text_box deselect">
																												  <span class="minus_count bed_countingbox_minus">-</span>
																														<span class="count_detail countingbox" data-min="0"  data-id="<?php echo $btype->bed_id;?>" data-edit-id="<?php echo $i;?>" data-name="bcount" data-value="0">0</span>
																														<span class="plus_count bed_countingbox_plus">+</span>
																												</div>
																										  </li>	
																										  <?php } ?>
																									</ul>
																							</div>
																						</div>
																						<div class="private_bathroom_base">
																							<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","attached_bathrooms"); ?>?</label>
																							<div class="custom_check">
																									<label class="control control--checkbox">
																										<input type="checkbox"   class="pbcheckbox_new" >
																										<?php echo get_lang_site_key($lang_key,"product_lang","private_bathroom"); ?>
																										<div class="control__indicator"></div>
																									</label>
																								</div> 
																						</div>
																					</div>
																				</div>
																			</div>
																		
																
																			<div class="col-md-12 col-xs-12 col-sm-12 arrang_base nopadd">
																					<div class="col-md-12 col-sm-12 col-xs-12 bedroom_base">
																						<p><?php echo get_lang_site_key($lang_key,"product_lang","common_space"); ?> </p>
																						<p class="bathroom_spec_base commonsharebathroom <?php if(is_array($bedrooms_bedarray) && array_key_exists('cbr',$bedrooms_bedarray) && array_key_exists('sb',$bedrooms_bedarray['cbr'])){ if($bedrooms_bedarray['cbr']['sb']==0){echo "common_bathroom_hide"; }}else {echo "common_bathroom_hide"; } ?>"><span class="bathroom_icon"></span> <?php echo get_lang_site_key($lang_key,"product_lang","with_shared_bathroom"); ?></p>
																						<span class="edit_bed edit_bed_common_bed_btn"><?php echo get_lang_site_key($lang_key,"product_lang","edit"); ?></span>
																						<ul class="list-inline bed_listdetail_no commonrooms_bedtype_append">
																							<?php if(is_array($bedrooms_bedarray) && array_key_exists('cbr',$bedrooms_bedarray)){ 
																						       foreach($bed_type->result() as $btype){
																							   if(is_array($bedrooms_bedarray) && array_key_exists('b'.$btype->bed_id,$bedrooms_bedarray['cbr'])){ if($bedrooms_bedarray['cbr']['b'.$btype->bed_id]!=0){?>
																						        <li><p><span class="bed_labelno bedcount b<?php echo $btype->bed_id; ?>"><?php echo $bedrooms_bedarray['cbr']['b'.$btype->bed_id];?> </span><?php echo get_common_details(BED_TYPE_LANG,'bed_type_name',$btype->bed_id,$lang_key);?></p></li>
																							   <?php }}}} ?>
																						</ul>
																						<div class="add_bed_detail_base  add_bed_detail_base_common edit_bed_hide_common">
																							<div class="drop_down_base">
																								<div class="dropdown ">
																										<span class="custom_bed_class" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																										<span class="custom_add_bed"><?php echo get_lang_site_key($lang_key,"product_lang","add_bed_type"); ?></span>
																										<span class="custom_caret_clear_icon"><svg viewBox="0 0 11.7 6.82"><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M11.7,1a.37.37,0,0,1-.12.27L6.12,6.7a.36.36,0,0,1-.54,0L.12,1.24A.36.36,0,0,1,.12.7L.7.12a.36.36,0,0,1,.54,0l4.61,4.6,4.6-4.6a.36.36,0,0,1,.54,0l.59.58A.37.37,0,0,1,11.7,1Z" style="fill:#5f5f5f"></path></g></g></svg></span>
																										<span class="edit_bed button_new remove_done_btn" data-id="<?php echo $i; ?>"><?php echo get_lang_site_key($lang_key,"common_lang","clear"); ?></span>
																									</span>
																										<ul class="dropdown-menu common_dropbedtype" aria-labelledby="dropdownMenu1">
																										 <?php foreach($bed_type->result() as $btype){?>
																										  <li>
																												<label><?php echo get_common_details(BED_TYPE_LANG,'bed_type_name',$btype->bed_id,$lang_key);?></label>
																												<div class="count_text_box deselect">
																														<span class="minus_count commonbed_countingbox_minus">-</span>
																														<span class="count_detail countingbox" data-min="0"  data-id="<?php echo $btype->bed_id;?>" data-edit-id="<?php echo $i;?>" data-name="bcount" data-value="<?php					  
																													     if(is_array($bedrooms_bedarray) && array_key_exists('cbr',$bedrooms_bedarray) && array_key_exists('b'.$btype->bed_id,$bedrooms_bedarray['cbr'])){ echo $bedrooms_bedarray['cbr']['b'.$btype->bed_id]; } else { echo "0";}?>"><?php				  
																													     if(is_array($bedrooms_bedarray) && array_key_exists('cbr',$bedrooms_bedarray) && array_key_exists('b'.$btype->bed_id,$bedrooms_bedarray['cbr'])){ echo $bedrooms_bedarray['cbr']['b'.$btype->bed_id]; } else { echo "0";}?></span>
																														<span class="plus_count commonbed_countingbox_plus">+</span>
																												
																												</div>
																										  </li>	
																										  <?php } ?>														  
																										</ul>
																								</div>
																							</div>
																							<div class="private_bathroom_base">
																							<label class="label_class"><?php echo get_lang_site_key($lang_key,"product_lang","attached_bathrooms"); ?>?</label>
																							<div class="custom_check">
																									<label class="control control--checkbox">
																										<input type="checkbox" <?php if(is_array($bedrooms_bedarray) && array_key_exists('cbr',$bedrooms_bedarray) && array_key_exists('sb',$bedrooms_bedarray['cbr'])){ if($bedrooms_bedarray['cbr']['sb']==1){echo "checked"; }} ?> class="pbcheckbox_new_btn" >
																										<?php echo get_lang_site_key($lang_key,"product_lang","shared_bathrooms"); ?>
																										<div class="control__indicator"></div>
																									</label>
																								</div> 
																						</div>
																						</div>
																					</div>
		
																				</div>
																</div>
														</div>
												</div>
										</div>
								