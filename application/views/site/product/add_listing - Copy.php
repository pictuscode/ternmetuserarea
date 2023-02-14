<?php $this->load->view('site/product/list_header');
      $product=$product_details->row();	?>
<section>
				<div class="listing_base col-md-12 col-sm-12 col-xs-12" data-id="<?php echo $product->id;?>">
					
					<div class="listing_base_inner">
						
							
							<!-- Tab panes -->
							<div class="tab-content ">
								<div role="tabpanel" class="tab-pane active" id="place">
										<div class="container">
												
												<div class="upload_photos_base col-md-12  col-sm-12 col-xs-12" >
												<h3>Show travelers what your space looks like</h3>
															<div class="col-md-12 col-sm-12 col-xs-12 upload_images_div" >
																<div class="col-md-12 col-sm-12 col-xs-12 upload_images_base" data-cv-img="<?php echo $product->cover_photo?>" <?php if($product->cover_photo!=""){ echo 'style="background:url('.base_url().'images/site/product/'.$product->cover_photo.')"';}?>>
																<div class="delete_photo_cover" data-name="<?php echo $product->cover_photo;?>" >
																														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20"><defs>
																																<path id="4xzqa" d="M390.14 599.1v1.82c0 .4-.32.72-.72.72h-1.35v10.7c0 .39-.33.71-.72.71H376.5a.72.72 0 0 1-.72-.72v-10.69h-1.35a.72.72 0 0 1-.72-.72v-1.82c0-1.1.9-1.99 2-1.99h4.34c.1-.28.37-.48.68-.48h2.38c.31 0 .57.2.67.48h4.36a2 2 0 0 1 1.99 2zm-3.51 2.54h-9.4v9.97h9.4zm2.07-1.44v-1.1c0-.3-.25-.55-.55-.55H375.7c-.3 0-.55.25-.55.55v1.1zm-9.38 8.2v-4.86a.72.72 0 1 1 1.44 0v4.86a.72.72 0 1 1-1.44 0zm3.78 0v-4.86a.72.72 0 1 1 1.44 0v4.86a.72.72 0 1 1-1.44 0z"/>
																																</defs><g><g transform="translate(-372 -595)"><use fill="#fff" xlink:href="#4xzqa"/></g></g></svg>
																																<span class="addtext_del"></span>
																</div>
																<div class="upload_images_content">
																		<div class="browse_photo">
																				<label for="upload_img_single">
																				<span class="browse_photo_inner cvphoto" <?php if($product->cover_photo!=""){ echo 'style="display:none"';}?>>Upload Photos</span> </label>
																				<?php
																				$attributes = array('method' => 'post', 'id' => 'uploadimage_single','enctype'=>'multipart/form-data');
																				echo form_open('#', $attributes); ?>
																				  <input type="file" class="browse_img" id="upload_img_single" />
																				  </form>
																		</div>
																		
																</div>
																<p <?php if($product->cover_photo!=""){ echo 'style="display:none"';}?> class="cvphoto">or drag them in</p>
																</div>
														    </div>
														<div class="col-md-12 col-xs-12 col-sm-12 photo_preview_base">
														            
																	<ul class="list-inline photo_preview_ul" id="imgupload_ul">
																			    <?php if(!empty(json_decode($product->photos))){
																					  $product_img_array=json_decode($product->photos);
																					  foreach($product_img_array as $pimg){
																					?>
																			    <li class="col-md-3 col-sm-3 col-xs-12" data-img-name="<?php echo $pimg;?>">
																									<div class="photo_inner_li">
																										<div class="photo_preview_inner">
																												<div class="photo_container" style="background: url(<?php echo base_url();?>images/site/product/<?php echo $pimg;?>)">
																												</div>
																												<div class="delete_photo" data-name="<?php echo $pimg;?>" >
																														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20"><defs>
																																<path id="4xzqa" d="M390.14 599.1v1.82c0 .4-.32.72-.72.72h-1.35v10.7c0 .39-.33.71-.72.71H376.5a.72.72 0 0 1-.72-.72v-10.69h-1.35a.72.72 0 0 1-.72-.72v-1.82c0-1.1.9-1.99 2-1.99h4.34c.1-.28.37-.48.68-.48h2.38c.31 0 .57.2.67.48h4.36a2 2 0 0 1 1.99 2zm-3.51 2.54h-9.4v9.97h9.4zm2.07-1.44v-1.1c0-.3-.25-.55-.55-.55H375.7c-.3 0-.55.25-.55.55v1.1zm-9.38 8.2v-4.86a.72.72 0 1 1 1.44 0v4.86a.72.72 0 1 1-1.44 0zm3.78 0v-4.86a.72.72 0 1 1 1.44 0v4.86a.72.72 0 1 1-1.44 0z"/>
																																</defs><g><g transform="translate(-372 -595)"><use fill="#fff" xlink:href="#4xzqa"/></g></g></svg>
																																<span class="addtext_del"></span>
																												</div>
																										</div>
																									</div>
																					</li>
																				<?php }} ?>
																					<li class="col-md-3 col-sm-3 col-xs-12 last_photo_li addcvphoto " <?php if($product->cover_photo==""){?> style="display:none;" <?php } ?>>
																						<div class="photo_inner_li">
																							<div class="photo_preview_inner" >
																									<div class="last_photo_plus">
																									  
																											<div class="browse_photo" id="add_last_index">
																													<label for="upload_img">
																													<span class="browse_photo_inner"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="47" height="47" viewBox="0 0 47 47"><defs><path id="4yiva" d="M684 650h1v22h22v1h-22v21h-1v-21h-21v-1h21z"/></defs><g><g transform="translate(-661 -648)"><use fill="#c4c4c4" xlink:href="#4yiva"/></g></g></svg></span> </label>
																													<?php
																														$attributes = array('method' => 'post', 'id' => 'uploadimage','enctype'=>'multipart/form-data');
																														echo form_open(base_url().'site/product/ajax_img_upload', $attributes); ?>
																													
																													    <input type="hidden" value="<?php echo $product->id;?>" name="pid"/>  
																													    <input type="file" onchange="preview_image()" class="browse_img" name="upload_file[]" id="upload_img" multiple/></form>	
																											</div>
																										
																									</div>
																							</div>
																						</div>
																					</li>
																	</ul>
														</div>

												</div>
												
										</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="bedroom">
										<div class="container">
											<div class="col-md-12 col-sm-12 col-xs-12 place_location_base">
												<div class="col-md-6 col-sm-6 col-xs-12 place_location_lft">
													<div class="col-md-10 col-xs-11 col-sm-12 nopadd">
														<h4>Where’s your place located ?</h4>
														<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base">
															<label class="label_class">Street Address</label>
															<input class="input-control" type="text">
														</div>
														<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base">
																<label class="label_class">Apartment, Suite, Building. (optional)</label>
																<input class="input-control" type="text">
														</div>
														<div class="col-md-12 col-sm-12 col-xs-12 nopadd">
																<div class="col-md-6 col-sm-6 col-xs-12 two_inputs_lft  input_base">
																		<label class="label_class">City</label>
																		<input class="input-control" type="text">
																	</div>
																	<div class="col-md-6 col-sm-6 col-xs-12 two_inputs_rgt input_base">
																			<label class="label_class">State</label>
																			<input class="input-control" type="text">
																		</div>
														</div>
														<div class="col-md-12 col-sm-12 col-xs-12 nopadd">
																<div class="col-md-6 col-sm-6 col-xs-12 two_inputs_lft  input_base">
																		<label class="label_class">Zipcode</label>
																		<input class="input-control" type="text">
																	</div>
														</div>
														<div class="col-md-12 col-sm-12 col-xs-12 map_base_listing">
																<p>126,Radhakrishnan St, Belliyappa Nagar , Walajapet - 632513 , Vellore , Tamilnadu , India</p>
																<img src="<?php echo base_url(); ?>images/map_location.png">
														</div>
													</div>
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 place_location_rgt">
														<div class="col-md-10 col-sm-12 col-xs-12 nopadd pull-right">
																<h4>Where’s your place located ?</h4>
																   <div class="col-md-12 col-sm-12 col-xs-12 nopadd list_title_text input_base">
																		<input class="input-control " placeholder="Listing title"  type="text">
																	</div>
																	<h4 class="describe_h3">Describe your place</h4>
																	<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base discription_text">
																			<textarea class="input-control textarea-control" placeholder="Description the decor, light, what’s nearby, etc..."></textarea>
																	</div>
																	<h4 class="describe_h3">My place is great for</h4>
																	<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base">
																			<div class="custom_check">
																					<label class="control control--checkbox">
																						<input type="checkbox" />
																						Families (with kids)
																						<div class="control__indicator"></div>
																					</label>
																				</div> 
																				<div class="custom_check">
																						<label class="control control--checkbox">
																							<input type="checkbox" />
																							Big groups
																							<div class="control__indicator"></div>
																						</label>
																					</div> 
																					<div class="custom_check">
																							<label class="control control--checkbox">
																								<input type="checkbox" />
																								Pets
																								<div class="control__indicator"></div>
																							</label>
																						</div> 
																	</div>
														</div>
												</div>
											</div>
										</div>

								</div>
								<div role="tabpanel" class="tab-pane" id="location">
										<div class="container">
												<div class="col-md-12 col-sm-12 col-xs-12 room_guests_base">
													  <div class="col-md-6 col-sm-6 col-xs-12 place_location_lft">
															<div class="col-md-10 col-xs-11 col-sm-12 nopadd">
																	<h4>What kind of place?</h4>
																<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base">
																	<label class="label_class">Is this listing a home, hotel, or something else?</label>
																	<select class="select-control">
																		<option>Home</option>
																		<option>Hotel</option>
																	</select>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base">
																	<label class="label_class">What type of property is this?</label>
																	<select class="select-control">
																		<option>Vila</option>
																		<option>Hotel</option>
																	</select>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 nopadd">
																	<label class="label_class">What will guests have?</label>
																	<select class="select-control">
																		<option>Private Room</option>
																		<option>Hotel</option>
																	</select>
																</div>
																<div class="col-md-12 col-sm-12 col-xs-12 dedicated_hous_base nopadd">
																		<label class="label_class">Is this set up as a dedicated guest space?</label>
																		<div class="col-md-12 col-sm-12 col-xs-12 custom_radio nopadd">
																			<label class="control control--radio">Price adapts to demand
																				<input type="radio" name="radio" checked="checked">
																				<div class="control__indicator"></div>
																			</label>
																		</div>
																		<div class="col-md-12 col-sm-12 col-xs-12 custom_radio nopadd">
																			<label class="control control--radio">No, I keep my personal belongings here
																				<input type="radio" name="radio" checked="checked">
																				<div class="control__indicator"></div>
																			</label>
																		</div>
																</div>
																
															</div>
														</div>
														<div class="col-md-6 col-sm-6 col-xs-12 place_location_rgt">
																<div class="col-md-12 col-sm-12 col-xs-12 nopadd pull-right">
																		<h4>How many guests can stay?</h4>
																		<div class="col-md-12 col-sm-12 col-xs-12 count_text_box_base nopadd">
																				<p>Total guests</p>
																				<div class="count_text_box">
																					<span class="plus_count">+</span>
																					<span class="count_detail">1</span>
																					<span class="minus_count">-</span>
																				</div>
																		</div>
																		<div class="col-md-12 col-sm-12 col-xs-12 count_text_box_base nopadd">
																				<p>How many bedrooms?</p>
																				<div class="count_text_box">
																					<span class="plus_count">+</span>
																					<span class="count_detail">1</span>
																					<span class="minus_count">-</span>
																				</div>
																		</div>
																		<h4>Sleeping arrangements</h4>
																		<div class="col-md-12 col-xs-12 col-sm-12 arrang_base nopadd">
																			<div class="col-md-12 col-sm-12 col-xs-12 bedroom_base">
																				<p>Bedroom <span class="bed_labelno"> 1 </span></p>
																				<span class="edit_bed">Edit</span>
																				<ul class="list-inline bed_listdetail_no">
																					<li><p><span class="bed_labelno"> 1</span> Double bed</p></li>
																					<li> <p><span class="bed_labelno"> 1</span> Double bed</p></li>
																					<li><p><span class="bed_labelno"> 1</span> Double bed</p> </li>
																					<li><p><span class="bed_labelno"> 1</span> Double bed</p> </li>
																				</ul>
																			</div>

																		</div>
																		<div class="col-md-12 col-xs-12 col-sm-12 arrang_base nopadd">
																				<div class="col-md-12 col-sm-12 col-xs-12 bedroom_base">
																					<p>Bedroom <span class="bed_labelno"> 1 </span></p>
																					<p class="bathroom_spec_base"><span class="bathroom_icon"></span> with bathroom</p>
																					<span class="edit_bed">Edit</span>
																					<ul class="list-inline bed_listdetail_no">
																						<li><p><span class="bed_labelno"> 1</span> Double bed</p></li>
																						<li> <p><span class="bed_labelno"> 1</span> Double bed</p></li>
																						<li><p><span class="bed_labelno"> 1</span> Double bed</p> </li>
																						<li><p><span class="bed_labelno"> 1</span> Double bed</p> </li>
																					</ul>
																					<div class="add_bed_detail_base">
																						<div class="drop_down_base">
																							<div class="dropdown ">
																									<span class="select-control" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																										Add bed type
																									</span>
																									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
																									  <li>
																											<label>Single bed Type</label>
																											<div class="count_text_box">
																													<span class="plus_count">+</span>
																													<span class="count_detail">1</span>
																													<span class="minus_count">-</span>
																											</div>
																									  </li>
																									  <li>
																											<label>Single bed Type</label>
																											<div class="count_text_box">
																													<span class="plus_count">+</span>
																													<span class="count_detail">1</span>
																													<span class="minus_count">-</span>
																											</div>
																									  </li>
																									  <li>
																											<label>Single bed Type</label>
																											<div class="count_text_box">
																													<span class="plus_count">+</span>
																													<span class="count_detail">1</span>
																													<span class="minus_count">-</span>
																											</div>
																									  </li>
																									  <li>
																											<label>Single bed Type</label>
																											<div class="count_text_box">
																													<span class="plus_count">+</span>
																													<span class="count_detail">1</span>
																													<span class="minus_count">-</span>
																											</div>
																									  </li>
																									</ul>
																							</div>
																						</div>
																						<div class="private_bathroom_base">
																							<label class="label_class">Is there attached bathroom in this bedroom?</label>
																							<div class="custom_check">
																									<label class="control control--checkbox">
																										<input type="checkbox" />
																										Private Bathroom
																										<div class="control__indicator"></div>
																									</label>
																								</div> 
																						</div>
																					</div>
																				</div>
	
																			</div>
																			<div class="col-md-12 col-xs-12 col-sm-12 arrang_base nopadd">
																					<div class="col-md-12 col-sm-12 col-xs-12 bedroom_base">
																						<p>Common space </p>
																						<p class="bathroom_spec_base"><span class="bathroom_icon"></span> with shared bathroom</p>
																						<span class="edit_bed button_new">Done</span>
																						<ul class="list-inline bed_listdetail_no">
																							<li><p><span class="bed_labelno"> 1</span> Double bed</p></li>
																							<li> <p><span class="bed_labelno"> 1</span> Double bed</p></li>
																							<li><p><span class="bed_labelno"> 1</span> Double bed</p> </li>
																							<li><p><span class="bed_labelno"> 1</span> Double bed</p> </li>
																						</ul>
																						<div class="add_bed_detail_base">
																							<div class="drop_down_base">
																								<div class="dropdown ">
																										<span class="select-control" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																											Add bed type
																										</span>
																										<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
																										  <li>
																												<label>Single bed Type</label>
																												<div class="count_text_box">
																														<span class="plus_count">+</span>
																														<span class="count_detail">1</span>
																														<span class="minus_count">-</span>
																												</div>
																										  </li>
																										  <li>
																												<label>Single bed Type</label>
																												<div class="count_text_box">
																														<span class="plus_count">+</span>
																														<span class="count_detail">1</span>
																														<span class="minus_count">-</span>
																												</div>
																										  </li>
																										  <li>
																												<label>Single bed Type</label>
																												<div class="count_text_box">
																														<span class="plus_count">+</span>
																														<span class="count_detail">1</span>
																														<span class="minus_count">-</span>
																												</div>
																										  </li>
																										  <li>
																												<label>Single bed Type</label>
																												<div class="count_text_box">
																														<span class="plus_count">+</span>
																														<span class="count_detail">1</span>
																														<span class="minus_count">-</span>
																												</div>
																										  </li>
																										</ul>
																								</div>
																							</div>
																							
																						</div>
																					</div>
		
																				</div>
																</div>
														</div>
												</div>
										</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="amenities">
										<div class="container">
												<div class="col-md-12 col-sm-12 col-xs-12 place_location_base">
														<div class="col-md-12 col-sm-12 col-xs-12 place_location_lft">
																<h4>What amenities do you offer?</h4>
																<ul class="list-unstyled">
																		<li class="col-md-6 col-sm-6 col-xs-12">
																			<div class="custom_check">
																				<label class="control control--checkbox">
																					<input type="checkbox" />
																					<span class="amenties_icon"><img src="<?php echo base_url(); ?>images/amentity_icon.png"></span>
																					  <span class="amenties_content">Essentials </span>
																					<div class="control__indicator"></div>
																				</label>
																			</div> 
																		</li>
																		<li class="col-md-6 col-sm-6 col-xs-12">
																			<div class="custom_check">
																				<label class="control control--checkbox">
																					<input type="checkbox" />
																					<span class="amenties_icon"><img src="<?php echo base_url(); ?>images/amentity_icon.png"></span>
																					<span class="amenties_content">Wifi </span>
																					<div class="control__indicator"></div>
																				</label>
																			</div> 
																		</li>
																		<li class="col-md-6 col-sm-6 col-xs-12">
																			<div class="custom_check">
																				<label class="control control--checkbox">
																					<input type="checkbox" />
																					<span class="amenties_icon"><img src="<?php echo base_url(); ?>images/amentity_icon.png"></span>
																					<span class="amenties_content">Wifi </span>
																					<div class="control__indicator"></div>
																				</label>
																			</div> 
																		</li>
																		<li class="col-md-6 col-sm-6 col-xs-12">
																			<div class="custom_check">
																				<label class="control control--checkbox">
																					<input type="checkbox" />
																					<span class="amenties_icon"><img src="<?php echo base_url(); ?>images/amentity_icon.png"></span>
																					<span class="amenties_content">Wifi </span>
																					<div class="control__indicator"></div>
																				</label>
																			</div> 
																		</li>
																		<li class="col-md-6 col-sm-6 col-xs-12">
																			<div class="custom_check">
																				<label class="control control--checkbox">
																					<input type="checkbox" />
																					<span class="amenties_icon"><img src="<?php echo base_url(); ?>images/amentity_icon.png"></span>
																					<span class="amenties_content">Wifi </span>
																					<div class="control__indicator"></div>
																				</label>
																			</div> 
																		</li>
																		<li class="col-md-6 col-sm-6 col-xs-12">
																			<div class="custom_check">
																				<label class="control control--checkbox">
																					<input type="checkbox" />
																					<span class="amenties_icon"><img src="<?php echo base_url(); ?>images/amentity_icon.png"></span>
																					<span class="amenties_content">Wifi </span>
																					<div class="control__indicator"></div>
																				</label>
																			</div> 
																		</li>
																</ul>
														</div>
												</div>
										</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="houserules">
										<div class="container">
												<div class="col-md-12 col-sm-12 col-xs-12 place_location_base">
														<div class="col-md-6 col-sm-6 col-xs-12 place_location_lft">
																<h4>Set house rules for your guests</h4>
																<div class="house_rules_base col-md-12 col-sm-12 col-xs-12 nopadd">
																		<div class="col-md-12 col-sm-12 col-xs-12 rules_set ">
																				<p>Suitable for children <span> (2-12 years)</span></p>
																				<div class="switch_control">
																						<input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox">
																						<label for="cmn-toggle-1"></label>
																				</div>
																		</div>
																		<div class="col-md-12 col-sm-12 col-xs-12 rules_set">
																				<p>Suitable for children (2-12 years)</p>
																				<div class="switch_control">
																						<input id="cmn-toggle-2" class="cmn-toggle cmn-toggle-round" type="checkbox">
																						<label for="cmn-toggle-2"></label>
																				</div>
																		</div>
																		<div class="col-md-12 col-sm-12 col-xs-12 rules_set">
																				<p>Suitable for pets</p>
																				<div class="switch_control">
																						<input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-round" type="checkbox">
																						<label for="cmn-toggle-3"></label>
																				</div>
																		</div>
																		<div class="col-md-12 col-sm-12 col-xs-12 rules_set">
																				<p>Smoking allowed</p>
																				<div class="switch_control">
																						<input id="cmn-toggle-4" class="cmn-toggle cmn-toggle-round" type="checkbox">
																						<label for="cmn-toggle-4"></label>
																				</div>
																		</div>
																		<div class="col-md-12 col-sm-12 col-xs-12 rules_set">
																				<p>Events or parties allowed</p>
																				<div class="switch_control">
																						<input id="cmn-toggle-5" class="cmn-toggle cmn-toggle-round" type="checkbox">
																						<label for="cmn-toggle-5"></label>
																				</div>
																		</div>
																	</div>
																	<div class="add_rules_base">
																		<h4>Additional rules</h4>
																		<div class="add_rules_inner">
																				<p>Description the decor, light, what’s nearby, etc...</p>
																				<span>X</span>
																		</div>
																	</div>
																	<div class="add_rules_btn_base">
																			<div class="add_rules_text">
																					<input type="text" class="input-control" placeholder="No shoes in the house?">
																			</div>
																			<div class="add_rules_btn">
																					<span>Add</span>
																			</div>
																	</div>
																
														</div>
												</div>
										</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="booking_price">
										<div class="container">
												<div class="col-md-12 col-sm-12 col-xs-12 booking_price_base">
													<div class="col-md-12 col-xs-12 col-sm-12 nopadd">
														<div class="col-md-6 col-sm-6 col-xs-12 place_location_lft">
															<div class="col-md-10 col-sm-12 col-xs-12 nopadd">
																<h4>Update you calendar</h4>
																<img src="<?php echo base_url(); ?>images/calendar.png">
															</div>
														</div>
														<div class="col-md-6 col-sm-6 col-xs-12 place_location_rgt">
																<div class="col-md-10 col-sm-12 col-xs-12 nopadd">
																		<h4>Price youe place</h4>
																		<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base">
																				<label class="label_class">Price per night</label>
																				<input class="input-control" type="text" placeholder="$">
																		</div>
																		<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base">
																				<label class="label_class">Price per night</label>
																				<select class="select-control"><option>USD</option></select>
																		</div>
																</div>
														</div>
													</div>
													<div class="col-md-12 col-xs-12 col-sm-12 booking_inner_section nopadd">
															<div class="col-md-6 col-sm-6 col-xs-12 place_location_lft">
																<div class="col-md-10 col-sm-12 col-xs-12 nopadd">
																	<h4>Future reservation</h4>
																	<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base">
																			<label class="label_class">How far in advance can guest book?</label>
																			<select class="select-control"><option>3 Weeks</option></select>
																	</div>
																	
																</div>
															</div>
															<div class="col-md-6 col-sm-6 col-xs-12 place_location_rgt">
																	<div class="col-md-10 col-sm-12 col-xs-12 nopadd">
																			<h4>Check in</h4>
																			<div class="col-md-12 col-sm-12 col-xs-12 nopadd">
																					<div class="col-md-6 col-sm-6 col-xs-12 two_inputs_lft  input_base">
																							<label class="label_class">Arrive after</label>
																							<select class="select-control"><option>3 Weeks</option></select>
																						</div>
																						<div class="col-md-6 col-sm-6 col-xs-12 two_inputs_rgt input_base">
																								<label class="label_class">Arrive before</label>
																								<select class="select-control"><option>3 Weeks</option></select>
																							</div>
																			</div>
																	</div>
															</div>
														</div>
														<div class="col-md-12 col-xs-12 col-sm-12 booking_inner_section nopadd">
																<div class="col-md-6 col-sm-6 col-xs-12 place_location_lft">
																	<div class="col-md-10 col-sm-12 col-xs-12 nopadd">
																		<h4>Advance notice</h4>
																		<div class="col-md-12 col-sm-12 col-xs-12 nopadd input_base">
																				<label class="label_class">How much notice do you need before a guest arrives?</label>
																				<select class="select-control"><option>Atleast 1 day</option></select>
																		</div>
																		
																	</div>
																</div>
																<div class="col-md-6 col-sm-6 col-xs-12 place_location_rgt">
																		<div class="col-md-10 col-sm-12 col-xs-12 nopadd">
																				<h4>Trip length</h4>
																				<div class="col-md-12 col-sm-12 col-xs-12 trip_length_base nopadd">
																						<div class="col-md-12 col-sm-12 col-xs-12 count_text_box_base nopadd">
																								<p>Minumum stay <span> (nights)</span></p>
																								<div class="count_text_box">
																									<span class="plus_count">+</span>
																									<span class="count_detail">1</span>
																									<span class="minus_count">-</span>
																								</div>
																						</div>
																						<div class="col-md-12 col-sm-12 col-xs-12 count_text_box_base nopadd">
																								<p>Maximum stay (nights) <span> (nights)</span></p>
																								<div class="count_text_box">
																									<span class="plus_count">+</span>
																									<span class="count_detail">1</span>
																									<span class="minus_count">-</span>
																								</div>
																						</div>
																				</div>
																		</div>
																</div>
															</div>
												</div>
										</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="publish">
									<div class="container">
											<div  class="col-md-12 col-xs-12 col-sm-12 publish_base">
												<h4>You’re ready to publish!</h4>
												<div class="publish_inner col-md-12 col-sm-12 col-xs-12 nopadd">
													<div class="col-md-6 col-sm-7 col-xs-12 nopadd">
															<p>You’ll be able to welcome your first guest starting <span class="starting_date"> 19 February 2018 </span>. If you’d like to update your calendar or house rules, you can easily do all that after you hit publish.</p>
															<a href="#" class="button_new">Publish listing</a>
													</div>

												</div>
											</div>
									</div>
							</div>
							</div>
					</div>
					
				</div>
				<div class="bottom_next_continue col-md-12 col-xs-12 col-sm-12 ">
					<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
								<span class="sr-only">20% Complete</span>
							</div>
					</div>
					<div class="next_continue">
						<div class="container">
							<div class="contine_nd_back_base col-md-12 col-xs-12 col-sm-12 ">
								<div class="back_btn_base">
									<a href="#" class="back_btn">Back</a>
								</div>
								<div class="save_next">
									<a href="#" class="button_new">Skip for now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
	</section>
<script src="<?php echo base_url();?>js/site/jquery.form.js"></script>
<script src="<?php echo base_url();?>js/site/jquery-ui.min.js"></script>
<?php $this->load->view('site/product/list_footer');?>