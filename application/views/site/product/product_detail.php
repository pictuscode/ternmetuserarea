<?php $this->load->view('site/product/product_detail_header');	?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/site/gallerie.css" /> 
<link id="cal_style" rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/site/flatpickr.min.css">
<link id="cal_style" rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/site/fdark.css">
<section>
		<div class="col-md-12 col-xs-12 col-sm-12 product_details_base">
				<?php if($logincheck!="" && $logincheck==$product_details->user_id){ ?>
				<div class="col-md-12 col-xs-12 col-sm-12 edit_mode_base">
						<div class="col-md-12 col-xs-12 col-sm-12 edit_mode_inner">
								<div class="edit_prev_base custom_edit_mode">
									<span class="edit_mode" id="edit_mode"><span class="custom_icon_svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14"><path d="M12.8,1.2A4.1,4.1,0,0,0,7,1.2L.94,7.26a.53.53,0,0,0-.15.3L0,13.39a.53.53,0,0,0,.15.45A.54.54,0,0,0,.53,14H.6l5.79-.78a.54.54,0,0,0-.14-1.06l-5.09.68.55-4.07L6,13.05a.54.54,0,0,0,.38.16.52.52,0,0,0,.38-.16L12.8,7a4.1,4.1,0,0,0,0-5.8ZM7.21,2.51,9,4.29,3.86,9.42,2.08,7.64Zm-.84,9.41L4.62,10.18,9.75,5.05,11.5,6.8ZM12.24,6,8,1.76A3,3,0,0,1,12.24,6Z" style="fill:#ffffff"/></svg></span><?php echo get_lang_site_key($lang_key,"product_lang","edit_mode"); ?></span>
                                    <span class="prev_mode" id="prev_mode"><span class="custom_icon_svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 11"><path d="M17.89,5.19C15.07,1.66,12-.08,8.86,0,3.75.15.24,5,.09,5.21l0,0v0l0,.06v.12s0,0,0,0,0,0,0,0v.12l0,.06v0l0,0C.24,6,3.75,10.85,8.86,11H9.1c3.08,0,6-1.75,8.79-5.19a.51.51,0,0,0,0-.62ZM8.9,10c-4-.11-7-3.51-7.83-4.53C1.89,4.48,4.92,1.08,8.9,1c2.77-.07,5.47,1.45,8,4.53C14.36,8.58,11.67,10.11,8.9,10Z" style="fill:#ffffff"/><path d="M9.23,2.31A3.14,3.14,0,0,0,6.15,5.5,3.14,3.14,0,0,0,9.23,8.69,3.14,3.14,0,0,0,12.32,5.5,3.14,3.14,0,0,0,9.23,2.31Zm0,5.4A2.19,2.19,0,0,1,7.08,5.5a2.15,2.15,0,1,1,4.3,0A2.19,2.19,0,0,1,9.23,7.72Z" style="fill:#ffffff"/></svg></span><?php echo get_lang_site_key($lang_key,"product_lang","preview_mode"); ?></span>
                                </div>
                                <div class="look_like_guest_base custom_guest_base">
                                    <p><?php echo get_lang_site_key($lang_key,"product_lang","preview_text"); ?></p>
                                </div>
                          <!--  <div class="profile_save_exit custom_save_btn">
                                    <a href="#" class="button_new">Save & Exit</a>
                                </div> -->

						</div>
                </div>
				<?php } ?>
                <div class="clearfix"></div>
                <div class="product_images_base col-md-12 col-sm-12 col-xs-12">
                        <div class="gallery-main owl-carousel" id="main_bannner">
                               <div class="item">
                                         <a href="<?php echo base_url();?>images/site/product/<?php echo $product_details->cover_photo; ?>">
										 <div class="detailpagebanner_img" style="background:url('<?php echo base_url();?>images/site/product/<?php echo $product_details->cover_photo; ?>');" alt="gallery" ></div>
										</a>
                                </div>
								<?php
								$photos=json_decode($product_details->photos);
								foreach($photos as $pt){
								?>
									<div class="item">
											 <a href="<?php echo base_url();?>images/site/product/<?php echo $pt; ?>">
											<div class="detailpagebanner_img" style="background:url('<?php echo base_url();?>images/site/product/<?php echo $pt; ?>');" alt="gallery" ></div>
											</a>
									</div>
                                <?php }?>
                            </div>
                        <div class="view_image_base">
                                <a href="#" id="view_photo"><?php echo get_lang_site_key($lang_key,"product_lang","view_photo"); ?></a>
                                <a href="#photo_tab" data-toggle="modal" data-target=".bs-example-modal-lg " class="photo_edit host_mode_show custom_edit_btn" ><?php echo get_lang_site_key($lang_key,"product_lang","edit"); ?></a>
                        </div>
                        <div class="share_save_base">
                            <ul class="list-inline">
                                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#share_modal">
										<span class="wishlist_icon_product"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.3 20.26"><title>Asset 29</title><path d="M21.28,19.18c0-1,0-2,0-3s0-1.69,0-2.52a.63.63,0,0,0-.59-.65.61.61,0,0,0-.47.17.6.6,0,0,0-.19.43c0,.86,0,1.72,0,2.55,0,1,0,2,0,2.94-.05,1.72-.57,2.2-2.42,2.22-4.63,0-9.33,0-14,0-1.8,0-2.31-.5-2.37-2.25s0-3.69,0-5.42a.63.63,0,0,0-.62-.63h0a.62.62,0,0,0-.44.18.62.62,0,0,0-.19.44c0,1.75,0,3.77,0,5.48.08,2.4,1.15,3.44,3.61,3.46,4.64,0,9.34,0,14,0C20.12,22.59,21.21,21.56,21.28,19.18Z" transform="translate(0 -2.37)" style="fill:#606060"/><path d="M11.29,18.13V4.68a.63.63,0,0,0-1.25,0V18.13a.63.63,0,0,0,1.25,0Z" transform="translate(0 -2.37)" style="fill:#606060"/><path d="M18.27,9.3a.62.62,0,0,0-.2-.43l-7-6.33a.62.62,0,0,0-.84,0l-7,6.33a.62.62,0,1,0,.84.93L9.73,4.68a1.37,1.37,0,0,1,1.85,0l5.64,5.11a.68.68,0,0,0,.45.16.62.62,0,0,0,.59-.66Z" transform="translate(0 -2.37)" style="fill:#fff"/><polyline points="10.66 -2.38 10.66 -2.38 10.66 -2.38" style="fill:#606060"/></svg></span>
									
                                        <?php echo get_lang_site_key($lang_key,"product_lang","share"); ?></a></li>
                                    <li><a data-pid="<?php echo $product_details->pid;?>" <?php if($logincheck==""){ ?>data-toggle="modal" data-target="#sign_in"<?php } ?> href="javascript:void(0);" class="<?php if($logincheck!=""){ ?>wishlistbtn<?php }?>" >
									<div id="wishbtn_detail" class="product_fav_heart fav_heart_new_<?php echo $product_details->pid;?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.5 18.86"><title>AssetAsset 2</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M19.61,1.86a5.85,5.85,0,0,0-8.28,0l-.58.58-.58-.59A5.85,5.85,0,1,0,1.9,10.13l8.42,8.41a.58.58,0,0,0,.42.18.65.65,0,0,0,.43-.17l8.43-8.41a5.85,5.85,0,0,0,0-8.28Z" style="fill:<?php if(in_array($product_details->pid,$wishlist_array)){ 
                                        echo "#fb4b57";}else { echo "rgba(0,0,0,0.2)";}?>"></path><path d="M1.73,10l8.68,8.68a.47.47,0,0,0,.66,0l8.7-8.67a5.88,5.88,0,1,0-8.31-8.32l-.7.7L10,1.73A5.88,5.88,0,0,0,0,5.88,5.82,5.82,0,0,0,1.73,10ZM2.39,2.4a4.93,4.93,0,0,1,7,0l1.05,1.05a.48.48,0,0,0,.67,0l1-1A5,5,0,0,1,15.62,1,5,5,0,0,1,20.55,5.9a4.93,4.93,0,0,1-1.44,3.49h0l-8.36,8.33-.1-.1L2.4,9.38a4.94,4.94,0,0,1,0-7Z" style="fill:#fb4b57"></path></g></g></svg></div>
									<span id="wishlish_btn_saved"><?php if(in_array($product_details->pid,$wishlist_array)){ 
                                        echo get_lang_site_key($lang_key,"common_lang","saved");}else { echo get_lang_site_key($lang_key,"product_lang","save");}?></span></a></li>
                            </ul>
                        </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 product_content_base">
                        <div class="container">
                            <div class="col-md-12 col-sm-12 col-xs-12 product_details_inner">
                                <div class="col-md-8 col-sm-8 col-xs-12 product_details_left">
                                        <h3 id="rtype_text"><?php if($product_details->room_type=="shared_room"){ echo get_lang_site_key($lang_key,"home_lang","shared");} else if($product_details->room_type=="private_room"){ echo get_lang_site_key($lang_key,"home_lang","private");;} else {echo get_lang_site_key($lang_key,"home_lang","entire");}?> <?php echo get_common_details(PROPERTY_TYPE_LANG,'property_type_name',$product_details->property_type,$lang_key);?></h3>
                                        <div class="col-md-12 col-sm-12 col-xs-12 product_lft_inner">
                                                <div class="col-md-12 col-xs-12 col-sm-12 product_room_detail">
                                                        <a href="#location" data-toggle="modal" data-target=".bs-example-modal-lg" class="edit_button_product host_mode_show custom_edit_btn"><?php  echo get_lang_site_key($lang_key,"product_lang","edit"); ?></a>
                                                    <div class="col-md-9 col-sm-9 col-xs-12 product_name_detail">
                                                    <h2 title="<?php echo $product_details->listing_title;?>" id="listing_title_text"><?php if(strlen($product_details->listing_title)>25){echo (substr($product_details->listing_title,0,25))."...";} else { echo $product_details->listing_title;}?></h2>
                                                    <p title="<?php echo $product_details->address;?>"><span id="address_text"><?php if(strlen($product_details->address)>25){echo (substr($product_details->address,0,25))."...";} else { echo $product_details->address;}?></span> <span class="map_icon mapaddress_box_btn custom_maps_icon"  data-lat="<?php echo $product_details->latitude;?>" data-long="<?php echo $product_details->longitude;?>" data-toggle="modal" data-target="#map_modal"><span class="custom_hotel_details_location"><svg viewBox="0 0 33.94 40.73"><circle cx="16.97" cy="17.33" r="11.03" style="fill:#fff"/><path d="M17,0C7.61,0,0,7.27,0,16.2,0,27.43,15.32,39.71,16,40.34a1.47,1.47,0,0,0,2,0c.65-.62,16-12.91,16-24.14C33.94,7.27,26.33,0,17,0Zm8.41,15.3a1.42,1.42,0,0,1-1.34.9H22.63V23a1.38,1.38,0,0,1-1.41,1.35H12.73A1.38,1.38,0,0,1,11.31,23V16.2H9.9a1.42,1.42,0,0,1-1.33-.9A1.31,1.31,0,0,1,9,13.79l7.07-5.4a1.47,1.47,0,0,1,1.77,0l7.07,5.4A1.32,1.32,0,0,1,25.38,15.3Z" style="fill:#fb4b57"/></svg></span><?php echo get_lang_site_key($lang_key,"product_lang","view_map"); ?></span></p>
                                                    <ul class="list-inline product_facilities custom_product_details">
                                                        <li>
                                                        <span class="guest_icon product_icons custom_product_icons" id="guest_count_text"><span class="custom_hotel_details_user"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 13"><title>Asset 39</title><path d="M14.32,5.57a2.79,2.79,0,1,0,0-5.57,2.79,2.79,0,1,0,0,5.57Zm-7.64,0A2.79,2.79,0,1,0,6.68,0a2.79,2.79,0,1,0,0,5.57Zm0,1.86C4.49,7.43,0,8.54,0,10.68v1.08A1.24,1.24,0,0,0,1.24,13H12.12a1.24,1.24,0,0,0,1.24-1.24V10.68C13.36,8.54,8.88,7.43,6.68,7.43Zm7.64,0a3.67,3.67,0,0,0-1,.09,3.81,3.81,0,0,1,1.91,3.16v1.08A1.24,1.24,0,0,0,16.52,13h3.24A1.24,1.24,0,0,0,21,11.76V10.68C21,8.54,16.51,7.43,14.32,7.43Z" style="fill:#606060"/></svg></span><?php echo $product_details->guest_count;?></span> <?php echo $product_details->guest_count==1?get_lang_site_key($lang_key,"header_footer_lang","guest"):get_lang_site_key($lang_key,"product_lang","guests");?>
                                                        </li>
                                                        <li>
                                                        <span class="bedroom_icon product_icons custom_product_icons" id="bedroom_count_text"><span class="custom_hotel_details_doors"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 15.67"><title>Asset 40</title><path d="M2.81.57H1.06A1.06,1.06,0,0,0,0,1.63V14.16a.48.48,0,0,0,.55.49.49.49,0,0,0,.52-.49V2.5A.91.91,0,0,1,2,1.59H2a.91.91,0,0,1,.91.91V14.6a1.06,1.06,0,0,0,1.24,1l5-.85a1.06,1.06,0,0,0,.88-1V1.85A.91.91,0,0,0,9.24,1S5.37.12,3.69,0a1.05,1.05,0,0,0-.75.5A.14.14,0,0,1,2.81.57ZM4.2,8.41a.49.49,0,0,1-.43-.54.49.49,0,0,1,.43-.54.49.49,0,0,1,.43.54A.49.49,0,0,1,4.2,8.41Z" style="fill:#606060"/></svg></span><?php echo $product_details->bedroom_count;?></span>  <?php echo $product_details->bedroom_count==1?get_lang_site_key($lang_key,"product_lang","bedroom"):get_lang_site_key($lang_key,"product_lang","bedrooms");?>
                                                        </li>
                                                        <li>
                                                        <span class="beds_icon product_icons custom_product_icons" id="beds_count_text"><span class="custom_hotel_details_beds"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 13"><title>Asset 41</title><path d="M14.17,5.29a.72.72,0,0,1-.29-.6V1.91A1.89,1.89,0,0,0,12,0H3A1.89,1.89,0,0,0,1.13,1.91V4.7a.72.72,0,0,1-.29.6A1.92,1.92,0,0,0,0,6.88v4.21a.55.55,0,0,1,.29.11.34.34,0,0,1,.09.28v.76a.76.76,0,0,0,.75.76.76.76,0,0,0,.75-.76,2,2,0,0,1,.25-.9c.21-.21.94-.25.94-.25h8.88s.73,0,.94.25a2,2,0,0,1,.25.9.75.75,0,1,0,1.5,0v-.76a.34.34,0,0,1,.09-.28.55.55,0,0,1,.29-.11V6.88A1.92,1.92,0,0,0,14.17,5.29ZM7.22,4.21A.76.76,0,0,1,6.46,5H2.73A.76.76,0,0,1,2,4.21,1.53,1.53,0,0,1,3.49,2.68H5.71A1.51,1.51,0,0,1,7.22,4.19ZM12.27,5H8.54a.76.76,0,0,1-.76-.76h0A1.51,1.51,0,0,1,9.29,2.68h2.21A1.53,1.53,0,0,1,13,4.21.76.76,0,0,1,12.27,5Z" style="fill:#606060"/></svg></span><?php echo $product_details->beds_count;?></span> <?php echo $product_details->beds_count==1?get_lang_site_key($lang_key,"common_lang","bed"):get_lang_site_key($lang_key,"common_lang","beds");?></li>
                                                        <li>
                                                        <span class="bath_icon product_icons custom_product_icons" id="bathroom_count_text"><span class="custom_hotel_details_bath"><svg viewBox="0 0 16.06 14.21"><path d="M15,6.09H15V1.26A1.26,1.26,0,0,0,13.7,0h0a1.25,1.25,0,0,0-.88.37l-.54.54a.47.47,0,0,0-.35-.08l-1.37.23a.48.48,0,0,0-.27.81l1.65,1.71a.48.48,0,0,0,.81-.24L13,2a.48.48,0,0,0-.07-.36L13.49,1A.3.3,0,0,1,13.7,1h0a.3.3,0,0,1,.3.3V4A2.09,2.09,0,0,1,11.9,6.09H1a1,1,0,0,0-1,1,1,1,0,0,0,.37.78A2.2,2.2,0,0,1,1,9l.6,2.13a2.35,2.35,0,0,0,2.2,1.71l-.43.87a.34.34,0,0,0,.15.45A.33.33,0,0,0,4,14H4a2.09,2.09,0,0,1,1.88-1.17H10.2A2.09,2.09,0,0,1,12.08,14h0a.34.34,0,1,0,.6-.3l-.43-.87a2.35,2.35,0,0,0,2.2-1.71L15,9a2.2,2.2,0,0,1,.65-1.12,1,1,0,0,0,.37-.78A1,1,0,0,0,15,6.09Z" style="fill:#606060"/></svg></span> <?php echo $product_details->bathroom_count;?></span><?php echo $product_details->bathroom_count==1?get_lang_site_key($lang_key,"product_lang","bathroom"):get_lang_site_key($lang_key,"product_lang","bathrooms");?>
                                                        </li>
                                                    </ul>
                                                    </div>
													<?php if($product_details->photo==""){ $img=base_url().'images/site/profile/avatar.png';} else { $img=base_url().'images/site/profile/'.$product_details->photo;}?>
                                                    <div class="col-md-3 col-sm-3 col-xs-12 text-center product_photo_name">
                                                            <a href="<?php echo base_url();?>users/show/<?php echo $product_details->user_id;?>"><img src="<?php echo $img;?>">
                                                            <p><?php echo ($product_details->first_name);?></p></a>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 content_product">
                                                            <p class="lsdescription-show"><?php if(strlen($product_details->description)>250){echo (substr($product_details->description,0,250))."...";} else { echo $product_details->description;}?> </p> 
															<p class="lsdescription-hide lshide"><?php echo $product_details->description;?> </p>                                             
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <a href="javascript:void(0);" class="read_more lsread_more lsdescription <?php if(strlen($product_details->description)<250){?>hide_description<?php } ?>" data-show="lsdescription" data-val="0" data-show-val="<?php  echo get_lang_site_key($lang_key,"product_lang","read_more");  ?>" data-hide-val="<?php  echo get_lang_site_key($lang_key,"product_lang","hide");  ?>"><?php get_lang_site_key($lang_key,"product_lang","read_more"); ?></a>
													
                                                        <div class="contact_host col-md-12 col-xs-12 col-sm-12">
                                                        <a href="javascript:void(0);"  <?php if($logincheck==""){?> data-toggle="modal" data-target="#sign_in" <?php }else {?>data-toggle="modal" data-target="#contact_host_box"<?php }?> class="contact_host_btn"><?php get_lang_site_key($lang_key,"product_lang","contact_host"); ?></a>
                                                        </div>
                                                      
                                                </div>
												<?php $bedrooms_bedarray=json_decode($product_details->bedrooms,true); 		?>
                                                <div class="col-md-12 col-sm-12 col-xs-12 sleeping_arrange_base">
                                                        <h4><?php  echo get_lang_site_key($lang_key,"product_lang","sleeping_arrangement"); ?></h4>
                                                        <a href="#bedroom" data-toggle="modal" data-target=".bs-example-modal-lg" class="edit_button_product host_mode_show custom_edit_btn"><?php  echo get_lang_site_key($lang_key,"product_lang","edit"); ?></a>
                                                        <div class="sleeping_arrangement_inner col-md-12 col-xs-12 col-sm-12">
                                                                <div class="owl-carousel owl-theme" id="sleep_arrange">
                                                                        <?php for($i=1;$i<=$product_details->bedroom_count;$i++){?>
																		<div class="item">
                                                                               <div class="arrange_ment_carousel">                                                                              
                                                                                    <h5><?php  echo get_lang_site_key($lang_key,"product_lang","bedroom"); ?> <?php echo $i;?></h5>
                                                                                     <?php foreach($bed_type->result() as $btype){
																					    if(is_array($bedrooms_bedarray) && array_key_exists('b'.$btype->bed_id,$bedrooms_bedarray['br'.$i])){ if($bedrooms_bedarray['br'.$i]['b'.$btype->bed_id]!=0){?>
																					   <p class="arrange_ment_tag"><?php echo $bedrooms_bedarray['br'.$i]['b'.$btype->bed_id]." ".get_common_details(BED_TYPE_LANG,'bed_type_name',$btype->bed_id,$lang_key);?><span class="arrange_ment_icon"><img src="<?php echo base_url();?>images/amentity_icon.png"></span></p>
																					 <?php }}}?>
                                                                               </div>
                                                                        </div>
																		<?php } ?>
																		<div class="item">
                                                                               <div class="arrange_ment_carousel">
                                                                                    <h5><?php  echo get_lang_site_key($lang_key,"product_lang","common_space"); ?></h5>
                                                                                     <?php foreach($bed_type->result() as $btype){
																					    if(is_array($bedrooms_bedarray) && array_key_exists('b'.$btype->bed_id,$bedrooms_bedarray['cbr'])){ if($bedrooms_bedarray['cbr']['b'.$btype->bed_id]!=0){?>
																					   <p class="arrange_ment_tag"> <?php echo $bedrooms_bedarray['cbr']['b'.$btype->bed_id].' '.get_common_details(BED_TYPE_LANG,'bed_type_name',$btype->bed_id,$lang_key);?><span class="arrange_ment_icon"><img src="<?php echo base_url();?>images/amentity_icon.png"></span></p>
																					 <?php }}}?>
                                                                               </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12 col-xs-12 col-sm-12 amenties_base">
                                                        <h4><?php  echo get_lang_site_key($lang_key,"product_lang","amenities"); ?></h4>
                                                        <a href="#amenities" data-toggle="modal" data-target=".bs-example-modal-lg" class="edit_button_product host_mode_show custom_edit_btn"><?php  echo get_lang_site_key($lang_key,"product_lang","edit"); ?></a>
                                                        <div class="col-md-12 col-xs-12 col-sm-12 amenties_inner_ul">
                                                                <ul class="list-inline" id="amenities_text">
                                                                    <?php $am_no=1;  $ex_amn=json_decode($product_details->amenities); foreach($amenities_list->result() as $amt){?>
																	<?php if(is_array($ex_amn)&& in_array($amt->amn_id,$ex_amn)){?>
																	<li class="col-md-6 col-sm-6 col-xs-12 nopadd <?php if($am_no>4){ echo "lsamentity_hide";}?>"><p><span class="arrange_ment_icon"><img src="<?php echo base_url();?>images/site/amt/<?php echo $amt->img;?>"></span><?php echo get_common_details(AMENITIES_LANG,'amn_name',$amt->amn_id,$lang_key);?></p></li><?php $am_no++; }} ?>                                                                    
                                                                </ul>
                                                                <div class="contact_host col-md-12 col-xs-12 col-sm-12">
                                                                       <a href="javascript:void(0);" class="lsread_more amt_readmore <?php if(count($ex_amn)<4) {?>amenities_more_btn_hide<?php } ?>" data-show="lsamentity_hide" data-val="0" data-show-val="<?php  echo get_lang_site_key($lang_key,"product_lang","show_amenities"); ?>" data-hide-val="<?php echo get_lang_site_key($lang_key,"product_lang","hide_amenities"); ?>"><?php  echo get_lang_site_key($lang_key,"product_lang","show_amenities"); ?></a>
                                                                    </div>
                                                        </div>

                                                </div>
												<?php 
												           $ex_houserules=json_decode($product_details->house_rules);
	                                                       $additional_rules=json_decode($product_details->additional_rules,true);
												?>
                                                <div class="col-md-12 col-xs-12 col-sm-12 house_rules_base">
                                                        <h4><?php  echo get_lang_site_key($lang_key,"home_lang","house_rules"); ?></h4>
                                                        <a href="#houserules" data-toggle="modal" data-target=".bs-example-modal-lg" class="edit_button_product host_mode_show custom_edit_btn"><?php  echo get_lang_site_key($lang_key,"product_lang","edit"); ?></a>
                                                        <div class="col-md-12 col-xs-12 col-sm-12 house_rules_inner">
                                                                <ul class="list-unstyled" id="rules_text">
																	<?php foreach($rules->result() as $ru){?>	  
																	  <?php if(in_array('1',$ex_houserules)){?>		
																	    <li><?php echo get_common_details(RULES_LANG,'rules_name',$ru->id,$lang_key);?></li>
																	   <?php } }?>                                    
                                                                </ul>
                                                                <ul class="list-unstyled lsrules_hide" id="rules_more_text">
																        <?php if(is_array($additional_rules)){ foreach($additional_rules as $in=>$rul){?>
                                                                        <li><?php echo $rul;?></li> 
																		<?php } } ?>		
                                                                </ul>
                                                                
                                                        </div>
                                                        <div class="contact_host col-md-12 col-xs-12 col-sm-12">
                                                                 <a href="javascript:void(0);" class="lsread_more extrarules_more<?php if(count($additional_rules)<0) {?> hideextrarule<?php } ?>" data-show="lsrules_hide" data-val="0" data-show-val="<?php  echo get_lang_site_key($lang_key,"product_lang","show_rules"); ?>" data-hide-val="<?php  echo get_lang_site_key($lang_key,"product_lang","hide_rules"); ?>"><?php  echo get_lang_site_key($lang_key,"product_lang","show_rules"); ?></a>
                                                            </div>
                                                        <?php if($cancellation_policy->num_rows()>0){ foreach($cancellation_policy->result() as $cancel){ ?>
														<div class="cancellations_base col-md-12 col-sm-12 col-xs-12">
                                                                <h4><?php  echo get_lang_site_key($lang_key,"product_lang","cancellations"); ?></h4>
                                                                <h6><?php echo $cancel->cancellation_type;?></h6>
                                                                <p><?php echo $cancel->description;?></p>

                                                                <div class="contact_host col-md-12 col-xs-12 col-sm-12">
                                                                        <a href="<?php echo base_url();?>page/cancellation-policy" class=""><?php  echo get_lang_site_key($lang_key,"product_lang","get_more_details"); ?></a>
                                                                    </div>
                                                        </div>
														<?php } } ?>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 review_base">
                                                        <h5><span><?php echo round($stat_review_avg->total_review);?></span> <?php  echo get_lang_site_key($lang_key,"common_lang","reviews"); ?></h5>
                                                        <div class="review_inner col-md-12 col-sm-12 col-xs-12">
                                                                <div class="review_inner_lft col-md-3 col-sm-3 col-xs-12 text-center">
                                                                        <p><?php  echo get_lang_site_key($lang_key,"product_lang","over_rating"); ?></p>
                                                                        <h2><?php echo round($stat_review_avg->atotal_rate_value,2);?> <span class="review_star_base"> <svg id="review_star" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.89 21.83"><title>star</title><path d="M22.89,8.46a1,1,0,0,1-.36.66l-5,4.87,1.18,6.87a2.18,2.18,0,0,1,0,.28.86.86,0,0,1-.14.49.5.5,0,0,1-.42.2,1.1,1.1,0,0,1-.55-.17l-6.18-3.24L5.27,21.66a1.19,1.19,0,0,1-.55.17.52.52,0,0,1-.44-.2.86.86,0,0,1-.14-.49,2.05,2.05,0,0,1,0-.28L5.35,14l-5-4.87A1,1,0,0,1,0,8.46c0-.34.26-.55.77-.63l6.9-1L10.77.56c.17-.37.4-.56.67-.56s.5.19.68.56l3.09,6.26,6.91,1C22.63,7.91,22.89,8.12,22.89,8.46Z" style="fill:#ffa500"/></svg></span></h2>
                                                                </div>
                                                                <div class="review_inner_rgt col-md-9 col-sm-9 col-xs-12 text-center">
                                                                    <div class="review_section">
																		<ul class="list-unstyled show_review_detail">
																		<li><p><?php  echo get_lang_site_key($lang_key,"product_lang","accuracy"); ?> </p><span class="star_icon small"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.06 13.41"><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M14.06,5.2a.58.58,0,0,1-.22.4l-3.06,3,.72,4.23a.81.81,0,0,1,0,.17.49.49,0,0,1-.09.3.3.3,0,0,1-.26.12.63.63,0,0,1-.33-.1l-3.8-2-3.79,2a.72.72,0,0,1-.34.1.32.32,0,0,1-.27-.12.49.49,0,0,1-.09-.3s0-.09,0-.17l.73-4.23L.21,5.6A.63.63,0,0,1,0,5.2c0-.21.16-.34.47-.39l4.25-.62L6.62.35C6.72.12,6.86,0,7,0s.31.12.42.35l1.9,3.84,4.24.62C13.9,4.86,14.06,5,14.06,5.2Z" style="fill:#f6b62f"></path></g></g></svg></span><span class="star_review_count"><?php echo round($stat_review_avg->arate_acc,1);?></span></li>
																		<li><p><?php  echo get_lang_site_key($lang_key,"product_lang","location"); ?> </p><span class="star_icon small"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.06 13.41"><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M14.06,5.2a.58.58,0,0,1-.22.4l-3.06,3,.72,4.23a.81.81,0,0,1,0,.17.49.49,0,0,1-.09.3.3.3,0,0,1-.26.12.63.63,0,0,1-.33-.1l-3.8-2-3.79,2a.72.72,0,0,1-.34.1.32.32,0,0,1-.27-.12.49.49,0,0,1-.09-.3s0-.09,0-.17l.73-4.23L.21,5.6A.63.63,0,0,1,0,5.2c0-.21.16-.34.47-.39l4.25-.62L6.62.35C6.72.12,6.86,0,7,0s.31.12.42.35l1.9,3.84,4.24.62C13.9,4.86,14.06,5,14.06,5.2Z" style="fill:#f6b62f"></path></g></g></svg></span><span class="star_review_count"><?php echo round($stat_review_avg->arate_loc,1);?></span></li>
																		<li><p><?php  echo get_lang_site_key($lang_key,"product_lang","communication"); ?></p><span class="star_icon small"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.06 13.41"><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M14.06,5.2a.58.58,0,0,1-.22.4l-3.06,3,.72,4.23a.81.81,0,0,1,0,.17.49.49,0,0,1-.09.3.3.3,0,0,1-.26.12.63.63,0,0,1-.33-.1l-3.8-2-3.79,2a.72.72,0,0,1-.34.1.32.32,0,0,1-.27-.12.49.49,0,0,1-.09-.3s0-.09,0-.17l.73-4.23L.21,5.6A.63.63,0,0,1,0,5.2c0-.21.16-.34.47-.39l4.25-.62L6.62.35C6.72.12,6.86,0,7,0s.31.12.42.35l1.9,3.84,4.24.62C13.9,4.86,14.06,5,14.06,5.2Z" style="fill:#f6b62f"></path></g></g></svg></span ><span class="star_review_count"><?php echo round($stat_review_avg->arate_com,1);?></span></li>
																		<li><p><?php  echo get_lang_site_key($lang_key,"product_lang","check_in"); ?> </p><span class="star_icon small"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.06 13.41"><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M14.06,5.2a.58.58,0,0,1-.22.4l-3.06,3,.72,4.23a.81.81,0,0,1,0,.17.49.49,0,0,1-.09.3.3.3,0,0,1-.26.12.63.63,0,0,1-.33-.1l-3.8-2-3.79,2a.72.72,0,0,1-.34.1.32.32,0,0,1-.27-.12.49.49,0,0,1-.09-.3s0-.09,0-.17l.73-4.23L.21,5.6A.63.63,0,0,1,0,5.2c0-.21.16-.34.47-.39l4.25-.62L6.62.35C6.72.12,6.86,0,7,0s.31.12.42.35l1.9,3.84,4.24.62C13.9,4.86,14.06,5,14.06,5.2Z" style="fill:#f6b62f"></path></g></g></svg></span><span class="star_review_count"><?php echo round($stat_review_avg->arate_checkin,1);?></span></li>
																		<li><p><?php  echo get_lang_site_key($lang_key,"product_lang","cleanliness"); ?></p><span class="star_icon small"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.06 13.41"><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M14.06,5.2a.58.58,0,0,1-.22.4l-3.06,3,.72,4.23a.81.81,0,0,1,0,.17.49.49,0,0,1-.09.3.3.3,0,0,1-.26.12.63.63,0,0,1-.33-.1l-3.8-2-3.79,2a.72.72,0,0,1-.34.1.32.32,0,0,1-.27-.12.49.49,0,0,1-.09-.3s0-.09,0-.17l.73-4.23L.21,5.6A.63.63,0,0,1,0,5.2c0-.21.16-.34.47-.39l4.25-.62L6.62.35C6.72.12,6.86,0,7,0s.31.12.42.35l1.9,3.84,4.24.62C13.9,4.86,14.06,5,14.06,5.2Z" style="fill:#f6b62f"></path></g></g></svg></span><span class="star_review_count"><?php echo round($stat_review_avg->arate_clean,1);?></span></li>
																		<li><p><?php  echo get_lang_site_key($lang_key,"product_lang","value"); ?></p><span class="star_icon small"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.06 13.41"><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M14.06,5.2a.58.58,0,0,1-.22.4l-3.06,3,.72,4.23a.81.81,0,0,1,0,.17.49.49,0,0,1-.09.3.3.3,0,0,1-.26.12.63.63,0,0,1-.33-.1l-3.8-2-3.79,2a.72.72,0,0,1-.34.1.32.32,0,0,1-.27-.12.49.49,0,0,1-.09-.3s0-.09,0-.17l.73-4.23L.21,5.6A.63.63,0,0,1,0,5.2c0-.21.16-.34.47-.39l4.25-.62L6.62.35C6.72.12,6.86,0,7,0s.31.12.42.35l1.9,3.84,4.24.62C13.9,4.86,14.06,5,14.06,5.2Z" style="fill:#f6b62f"></path></g></g></svg></span><span class="star_review_count"><?php echo round($stat_review_avg->arate_value,1);?></span></li>
																	</ul>
                                                                   </div>
                                                                </div>
                                                                <div class="contact_host col-md-12 col-xs-12 col-sm-12">
                                                                        <a href="javascript:void(0)" data-target="#showre_view_modal" data-toggle="modal" class=""><?php  echo get_lang_site_key($lang_key,"product_lang","view_all").' '. round($stat_review_avg->total_review);?> <?php  echo get_lang_site_key($lang_key,"common_lang","reviews"); ?></a>
                                                                    </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 host_base">
                                                        <h5><?php  echo get_lang_site_key($lang_key,"product_lang","host_by"); ?></h5>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 host_inner">
                                                                <div class="col-md-12 col-xs-12 col-sm-12 host_name_base">
                                                                        <div class="col-md-9 col-sm-9 col-xs-12 host_name_lft">
                                                                                <h4><?php echo ($product_details->first_name);?></h4>
                                                                                <p><?php echo ($product_details->city);?>, <?php echo (get_country($product_details->country));?>  <span class="joined_host"><?php  echo get_lang_site_key($lang_key,"product_lang","joined_in"); ?> <?php echo get_lang_site_key($lang_key,"common_lang",strtolower(date('F',strtotime($product_details->ucreated)))).' '.date("Y",strtotime($product_details->ucreated));?></span></p>
                                                                                <ul class="list-inline verify_ul">
                                                                                     <li><p><span class="<?php if($product_details->id_verified=="No"){ echo "not";}?>verified_icon custom_verified_icon"></span><?php if($product_details->id_verified=="No"){ echo get_lang_site_key($lang_key,"common_lang","reviews").' ';}?><?php  echo get_lang_site_key($lang_key,"product_lang","verified"); ?></p></li>
                                                                                     <li><p><span class="review_icon"><?php echo round($stat_review_avg->total_review);?></span><?php  echo get_lang_site_key($lang_key,"common_lang","reviews"); ?></p></li>
                                                                                </ul>
                                                                             
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-3 col-xs-12 host_name_rgt text-center">
                                                                                <a href="<?php echo base_url();?>users/show/<?php echo $product_details->user_id;?>"><img src="<?php echo $img;?>" class="profile_img"></a>
                                                                        </div>
                                                                        <div class="col-md-12 col-xs-12 col-sm-12 profile_host_detail nopadd">
                                                                                <p class="lsabout-show">
                                                                                       <?php if(strlen($product_details->about)>250){echo (substr($product_details->about,0,250))."...";} else { echo $product_details->about;}?>
                                                                                </p>
																				<p class="lsabout-hide">
                                                                                        <?php echo $product_details->about; ?>
                                                                                </p>
                                                                                <a href="javascript:void(0);" class="lsread_more" data-show="lsabout" data-val="0" data-show-val="<?php  echo get_lang_site_key($lang_key,"product_lang","read_more");  ?>" data-hide-val="<?php  echo get_lang_site_key($lang_key,"product_lang","hide");  ?>"><?php echo get_lang_site_key($lang_key,"common_lang","reviews");  ?></a>
                                                                        </div>
                                                                        <div class="col-md-12 col-xs-12 col-sm-12 contact_host_detail ">
                                                                                <a href="javascript:void(0);"  <?php if($logincheck==""){?> data-toggle="modal" data-target="#sign_in" <?php }else {?>data-toggle="modal" data-target="#contact_host_box"<?php }?> class="contact_host_btn"><?php echo get_lang_site_key($lang_key,"product_lang","contact_host");  ?></a>
                                                                                <ul class="contact_ul_detail list-unstyled">
                                                                                        <li><p><?php echo get_lang_site_key($lang_key,"product_lang","language");  ?>: <span> <?php echo $product_details->language;?> </span></p></li>
                                                                                        <li><p><?php echo get_lang_site_key($lang_key,"product_lang","response_rate");  ?>:<span> <?php echo round($product_details->avg_response_rate,2);?>% </span></p></li>
                                                                                        <li><p><?php echo get_lang_site_key($lang_key,"product_lang","response_time");  ?>:<span>  <?php echo get_lang_site_key($lang_key,"product_lang","within_hour");  ?> </span></p></li>
                                                                                </ul>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 nopadd custom_checkin_checkout_base">
                                <div class="col-md-12 col-sm-12 col-xs-12 product_details_rgt" id="rgt_checkin">
                                        <a href="#booking_price" data-toggle="modal" data-target=".bs-example-modal-lg" class="edit_button_product host_mode_show custom_edit_btn custom_edit_mobile_btn" id="rgt_edit"><?php  echo get_lang_site_key($lang_key,"product_lang","edit"); ?></a>
                                        <div class="col-md-12 col-xs-12 col-sm-12 product_details_rgt_base">
                                               <div class="col-md-12 col-sm-12 col-xs-12 rgt_price_ratings">
                                                   <h3 ><span id="price_text"><?php echo $currency_symbol.round($currency_rate*$product_details->price);?></span><span class="per_nyt"><?php echo get_lang_site_key($lang_key,"product_lang","per_night");  ?></span></h3>
                                                   <p><?php echo round($stat_review_avg->atotal_rate_value,2);?><span class="per_rating"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.89 21.83"><title>star</title><path d="M22.89,8.46a1,1,0,0,1-.36.66l-5,4.87,1.18,6.87a2.18,2.18,0,0,1,0,.28.86.86,0,0,1-.14.49.5.5,0,0,1-.42.2,1.1,1.1,0,0,1-.55-.17l-6.18-3.24L5.27,21.66a1.19,1.19,0,0,1-.55.17.52.52,0,0,1-.44-.2.86.86,0,0,1-.14-.49,2.05,2.05,0,0,1,0-.28L5.35,14l-5-4.87A1,1,0,0,1,0,8.46c0-.34.26-.55.77-.63l6.9-1L10.77.56c.17-.37.4-.56.67-.56s.5.19.68.56l3.09,6.26,6.91,1C22.63,7.91,22.89,8.12,22.89,8.46Z" style="fill:#f6b62f"/></svg></span></p>
                                               </div>
                                               <div class="checkin_checkout_base col-md-12 col-sm-12 col-xs-12">
                                                        <div class="check_in_inner_label custom_checkin_label">
                                                            <label class="chk_label"><?php echo get_lang_site_key($lang_key,"common_lang","date");  ?></label>
                                                            <div class="check_in_inner">
                                                                <input type="text" placeholder="<?php echo get_lang_site_key($lang_key,"common_lang","checkin") ?>" name="datefilter" id="check_in_flat" readonly>
                                                                <span class="chk_before">&nbsp;</span>
                                                                <input type="text" placeholder="<?php echo get_lang_site_key($lang_key,"common_lang","checkout") ?>" class="custom_chekout_input text-right" name="datefilter" id="check_out_flat">
                                                            </div>
                                                        </div>
                                                        <div class="check_in_guest_label custom_guest_label">
                                                                <label class="chk_label"><?php echo get_lang_site_key($lang_key,"header_footer_lang","guest");  ?></label>
                                                                <div class="add_bed_detail_base">
                                                                        <div class="dropdown drop_down_base_guest">
                                                                                <span class="select-control custom_guest_add_login" type="button" id="guest_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                                    1 <?php echo get_lang_site_key($lang_key,"header_footer_lang","guest");  ?>
                                                                                </span>
                                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                                                  <li class="custom_checkin_product">
                                                                                        <label><?php echo get_lang_site_key($lang_key,"header_footer_lang","guest");  ?></label>
                                                                                        <div class="count_text_box deselect">							
																							<span class="minus_count countingbox_minus_detail">-</span>
																							<span class="count_detail countingbox custom_countbox" data-min="1" id="total_guest_count" data-max="<?php echo $product_details->guest_count;?>" data-name="guest_count" data-value="1">1
																							</span>
																							<span class="plus_count countingbox_plus_detail">+</span>
																				        </div>
                                                                                  </li>
                                                                                 
                                                                                </ul>
                                                                        </div>
                                                                    </div>
                                                            </div>
															<div class="checkin_checkout_base col-md-12 col-sm-12 col-xs-12" id="ajax_load_html">
																
															</div>
														   <?php  if($logincheck!=$product_details->user_id){ ?>	
														   <div class="col-md-12 col-sm-12 col-xs-12 request_book_base">
																	<div class="col-md-12 col-sm-12 col-xs-12 request_book_inner">
																			<a href="javascript:void(0);" <?php if($logincheck==""){?> data-toggle="modal" data-target="#sign_in" <?php }else {?>id="submit_booking_btn"<?php }?>> <?php  if($product_details->instant_booking==0){  ?><?php echo get_lang_site_key($lang_key,"common_lang","request_to");  ?> <?php } ?><?php echo get_lang_site_key($lang_key,"common_lang","book");  ?></a>
																	</div>
														   </div>
														   <?php } ?>
                                               </div>
                                       
                                    
                                </div>
                            </div>
                            </div>
                        </div>

                </div>
                <div class="clearfix"></div>
                <div class="container"> 
				<input type="hidden" id="pid" value="<?php echo $product_details->pid;?>"/>
				<input type="hidden" id="logincheck" value="<?php echo $logincheck;?>"/>
             <div class="places_content profile_similar_list" id="similar_list_slider">
                <div class="col-md-12 col-xs-12 col-sm-12 pro_detail_feature_list sliders_section">
                    <h4><?php echo get_lang_site_key($lang_key,"common_lang","similar_listing"); ?></h4>
                        <div class="owl-carousel owl-theme" id="hme_slider">
                               
							   

                        </div>
                </div>
                </div>
                </div>
		</div>
	</section>
<?php if($logincheck==$product_details->user_id){ ?>
	<div class="modal fade bs-example-modal-lg listing_base_modal" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg listing_modal" role="document">
          <div class="modal-content col-md-12 col-sm-12 col-xs-12 w-auto" >
                    <!-- -->
                    
                            <div class="col-md-12 col-sm-12 col-xs-12 listing_base_head custom_modal_listing_base">
                                <div class="col-md-12 col-sm-12 col-xs-12 logo">
                                    <span class="close_icon close_icon_edit" data-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.11 13.11"><path d="M7.51,6.56,12.9,1.2a.65.65,0,0,0,0-.93.66.66,0,0,0-.93,0L6.58,5.63,1.15.19a.66.66,0,0,0-.93.94L5.64,6.57.19,12a.65.65,0,0,0,0,.93.66.66,0,0,0,.93,0L6.57,7.5,12,12.91a.66.66,0,1,0,.93-.94Z" style="fill:#606060"></path></svg></span>
                                    <div class="list_tab_head col-md-10 col-sm-12 colxs-12">
                                        <!-- Nav tabs -->
                                            <div class="tab_for_fixed_position custom_modal_listing_tabs">
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li role="presentation" class="active "><a href="#photo_tab" onclick="load_photo()" aria-controls="photo_tab" role="tab" data-toggle="tab"><?php  echo get_lang_site_key($lang_key,"home_lang","photos"); ?> </a></li>
														<li role="presentation" class=""><a href="#location" onclick="loadmap_tab()" aria-controls="location" role="tab" data-toggle="tab"><?php  echo get_lang_site_key($lang_key,"home_lang","descriprion_location"); ?> </a></li>
														<li role="presentation" class=""><a href="#bedroom" onclick="loadroom_tab()" aria-controls="bedroom" role="tab" data-toggle="tab"><?php  echo get_lang_site_key($lang_key,"home_lang","room_guest"); ?></a></li>
														<li role="presentation" class=""><a href="#amenities" onclick="loadamenties_tab()" aria-controls="amenties" role="tab" data-toggle="tab"><?php  echo get_lang_site_key($lang_key,"home_lang","amenties"); ?></a></li>
														<li role="presentation" class=""><a href="#houserules" onclick="loadhouserule_tab()" aria-controls="houserules" role="tab" data-toggle="tab"><?php  echo get_lang_site_key($lang_key,"home_lang","house_rules"); ?></a></li>
														<li role="presentation" class=""><a href="#booking_price" onclick="loadbooking_tab();" aria-controls="booking_price" role="tab" data-toggle="tab"> <?php  echo get_lang_site_key($lang_key,"home_lang","book_price"); ?></a></li>
                                                    </ul>
                                                    
                                                    </div>
                        
                                    </div>
                                    
                                    <div class="save_and_exit_head col-md-2 col-sm-2 col-xs-12">
                                        <ul class="list-inline">	
                                            <li><a class="button_new close_icon_edit" href="javascript:void(0);"><?php  echo get_lang_site_key($lang_key,"common_lang","save_exit"); ?></a></li>	
                                        </ul>
                                    </div>		
                                </div>
                            </div>
                
                
                            <div class="listing_base mob_nopadd col-md-12 col-sm-12 col-xs-12" data-id="<?php echo $product_details->pid;?>">
                                
                                <div class="listing_base_inner mob_nopadd">                                
                        
                                        <!-- Tab panes -->
                                        <div class="tab-content custom_popup_tab_content">
                                            <div role="tabpanel" class="tab-pane active" id="photo_tab">
											</div>
											<div role="tabpanel" class="tab-pane" id="location">
											</div>
											<div role="tabpanel" class="tab-pane" id="bedroom">
											</div>
											<div role="tabpanel" class="tab-pane" id="amenities">
											</div>
											<div role="tabpanel" class="tab-pane" id="houserules">
											</div>
											<div role="tabpanel" class="tab-pane" id="booking_price">
											</div>
                                        </div>
                                </div>
                                
                            </div>
                            
          </div>
        </div>
    </div>
<?php } ?>	
<div class="modal fade listing_base_modal" id="map_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg listing_modal" role="document">
          <div class="modal-content col-md-12 col-sm-12 col-xs-12 modal_text">
                    <!-- -->
                    
                            <div class="col-md-12 col-sm-12 col-xs-12 listing_base_head">
                                <div class="col-md-12 col-sm-12 col-xs-12 logo">
                                    <span class="close_modal close_icon" data-dismiss="modal"><svg viewBox="0 0 11.01 11"><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M6.3,5.51,10.83,1a.56.56,0,0,0,0-.78.56.56,0,0,0-.79,0L5.52,4.73,1,.16a.56.56,0,0,0-.78,0A.56.56,0,0,0,.18,1L4.74,5.51.16,10.06a.56.56,0,0,0,0,.78.57.57,0,0,0,.79,0L5.52,6.29l4.54,4.55a.56.56,0,0,0,.78,0,.56.56,0,0,0,0-.79Z" style="fill:#606060"/></g></g></svg></span>
                                    <div class="list_tab_head col-md-10 col-sm-10 colxs-12 custom_button_current">
                                       <h3><?php echo $product_details->address;?></h3>
									   <a href="javascript:void(0);" class="custom_current_btn" id="show_map_pin_location"><?php  echo get_lang_site_key($lang_key,"product_lang","current"); ?></a>
                                    </div>
                                    
                                   	
                                </div>
                            </div>
                
                
                            <div class="listing_base1 col-md-12 col-sm-12 col-xs-12 custom_modal_map" data-id="<?php echo $product_details->pid;?>">
                                
                                <div class="listing_base_inner" id="mapaddress_box">
                                </div>
                                
                            </div>
                            
          </div>
        </div>
    </div>

<div class="modal fade share_base_modal" id="share_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg share_modal" role="document">
          <div class="modal-content">
                    <!-- -->
                            
                                <div class="col-md-12 col-sm-12 col-xs-12 nopadd">
									<div class="share_close_icon">
										<span class="close_icon" data-dismiss="modal"><svg viewBox="0 0 11.01 11"><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M6.3,5.51,10.83,1a.56.56,0,0,0,0-.78.56.56,0,0,0-.79,0L5.52,4.73,1,.16a.56.56,0,0,0-.78,0A.56.56,0,0,0,.18,1L4.74,5.51.16,10.06a.56.56,0,0,0,0,.78.57.57,0,0,0,.79,0L5.52,6.29l4.54,4.55a.56.56,0,0,0,.78,0,.56.56,0,0,0,0-.79Z" style="fill:#606060"/></g></g></svg></span>
									</div>
                                    <div class="share_base_nodal_new">
                                       <h3><?php  echo get_lang_site_key($lang_key,"product_lang","share"); ?></h3> 
									   <h4><?php echo $product_details->listing_title;?></h4>
                                    </div>
                                </div>
                           
                
                
                            <div class="share_social_list_base " data-id="<?php echo $product_details->pid;?>">
                                
                                <div class="share_social_list" >
								<ul class="list-unstyled" id="rules_text">
									   <li>
										  <a target="_blank" id="fb_link" href="https://www.facebook.com/sharer.php?u=<?php echo $url;?>&amp;picture=<?php echo $image;?>&amp;title=<?php echo $heading;?>&amp;description=<?php echo $description;?>">
											 
											 <p><span class="share_social_icon"><i class="fa fa-facebook"></i></span><?php  echo get_lang_site_key($lang_key,"common_lang","facebook"); ?></p>
										  </a>
									   </li>
									   <li>
										  <a target="_blank" id="tw_link" href="https://twitter.com/share?url=<?php echo $url;?>&amp;image=<?php echo $image;?>">
											
											 <p><span class="share_social_icon"> <i class="fa fa-twitter"></i></span><?php  echo get_lang_site_key($lang_key,"common_lang","twitter"); ?></p>
										  </a>
									   </li>
									   <li>
										  <a target="_blank" id="gm_link" href="https://plus.google.com/share?url=<?php echo $url;?>&amp;title=<?php echo $heading;?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
											
											 <p><span  class="share_social_icon"> <i class="fa fa-google-plus"></i></span><?php  echo get_lang_site_key($lang_key,"common_lang","google"); ?></p>
										  </a>
									   </li>
									   <li>
										  <a target="_blank" id="pn_link" href="http://pinterest.com/pin/create/button/?url=<?php echo $url;?>&amp;media=<?php echo $image;?>&amp;description=<?php echo $description;?>">
											 
											 <p><span class="share_social_icon"><i class="fa fa-pinterest"></i></span><?php  echo get_lang_site_key($lang_key,"common_lang","pinterest"); ?></p>
										  </a>
									   </li>
									   <li>
										  <a id="gmail_link" target="_blank" href="https://mail.google.com/mail/u/0/?view=cm&amp;fs=1&amp;to&amp;su=<?php echo $heading;?>&amp;body=<?php echo $url;?>&amp;tf=1">
											
											 <p><span class="share_social_icon"> <i class="fa fa-envelope"></i></span><?php  echo get_lang_site_key($lang_key,"common_lang","gmail"); ?></p>
										  </a>
									   </li>
									   <li>
										  <a target="_blank" id="ln_link" href="https://www.linkedin.com/shareArticle?source=<?php echo $url;?>&amp;title=<?php echo $heading;?>&amp;summary=<?php echo $description;?>&amp;mini=true&amp;url=<?php echo $url;?>">
											 
											 <p><span class="share_social_icon"><i class="fa fa-linkedin"></i></span><?php  echo get_lang_site_key($lang_key,"common_lang","linkedin"); ?></p>
										  </a>
									   </li>
									</ul>
                                </div>
                                
                            </div>
                            
          </div>
        </div>
    </div>
 
<div class="modal fade listing_base_modal" id="showre_view_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg listing_modal rating_tab_base" role="document">
          <div class="modal-content col-md-12 col-sm-12 col-xs-12 reviews_inner_base">
                    <!-- -->
                    
                            <div class="col-md-12 col-sm-12 col-xs-12 listing_base_head">
                                <div class="col-md-12 col-sm-12 col-xs-12 logo">
                                    <span class="close_icon" data-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.11 13.11"><path d="M7.51,6.56,12.9,1.2a.65.65,0,0,0,0-.93.66.66,0,0,0-.93,0L6.58,5.63,1.15.19a.66.66,0,0,0-.93.94L5.64,6.57.19,12a.65.65,0,0,0,0,.93.66.66,0,0,0,.93,0L6.57,7.5,12,12.91a.66.66,0,1,0,.93-.94Z" style="fill:#606060"/></svg></span>
                                    <div class="list_tab_head col-md-10 col-sm-10 colxs-12 custom_reviews_tabs_head">
                                       <h3><?php  echo get_lang_site_key($lang_key,"common_lang","all_reviews"); ?></h3>  <h4><?php echo $product_details->listing_title;?></h4>
									   
                                    </div>
                                    
                                   	
                                </div>
                            </div>
                
                
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 reviews_inner_base custom_no_border">

	<h2><?php  echo get_lang_site_key($lang_key,"common_lang","reviews"); ?><span id="reviews_count_inner">(<?php echo round($stat_review_avg->total_review);?>)</span></h2>
	<div class="form-group reviews">
		<select class="select-control" id="review_number_based_sort">
			<option value=""><?php  echo get_lang_site_key($lang_key,"common_lang","all_star_rating"); ?></option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
		</select>
	</div>
	
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 reviews_inner custom_reviews_inner_base" id="stat_review_html">
		<?php if($get_stat_review_list->num_rows()>0){ foreach($get_stat_review_list->result() as $st_rv){
			$report=json_decode($st_rv->report,true);
			if(!empty($report) && array_key_exists($logincheck,$report)){
				$report_popup=1;
			}
			else{
				$report_popup=0;
			}
			?>
		<div class="review_block">
			<div class="profile_photo">
			   <?php if($st_rv->photo==""){ $img=base_url().'images/site/profile/avatar.png';} else { $img=base_url().'images/site/profile/'.$st_rv->photo;}?>
				<span class="rating_profile"><a href="<?php echo base_url();?>users/show/<?php echo $st_rv->uid;?>"><img src="<?php echo $img;?>"></a></span>
				<a href="<?php echo base_url();?>users/show/<?php echo $st_rv->uid;?>"><h2><?php echo ($st_rv->first_name);?></h2></a>
				<div <?php if($logincheck==$st_rv->uid){ echo $st_rv->uid;?> onclick="swal('<?php echo get_lang_site_key($lang_key,'common_lang','error') ?>','<?php echo get_lang_site_key($lang_key,'product_lang','this_your_review') ?>','error');" 
				
				
				class="flag_icon_base " <?php }else{ ?>class="flag_icon_base dropdown custom_dropdown review_block_btn_flag flag_no_<?php echo $st_rv->rid;?>" <?php } ?> data-status="<?php echo $report_popup;?>" data-value="<?php echo $st_rv->rid;?>">
				
				<ul class="dropdown-menu custom_drop_down_menu">
                    <li><a href="javascript:void(0);" class="custom_reviews_link" data-id="0"><?php  echo get_lang_site_key($lang_key,"common_lang","report_one"); ?></a></li>
                    <li><a href="javascript:void(0);" class="custom_reviews_link" data-id="1"><?php  echo get_lang_site_key($lang_key,"common_lang","report_two"); ?></a></li>
                    <li><a href="javascript:void(0);" class="custom_reviews_link" data-id="2"><?php  echo get_lang_site_key($lang_key,"common_lang","report_three"); ?></a></li>
                </ul>
                <input type="hidden" id="review_block_id" name="review_block_id" value="">	
				
				
				
				<span class="flag_icon dropdown-toggle custom_dropdown_reviews_toggle" data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.01 17.08"><line x1="0.78" y1="0.56" x2="12.51" y2="5.21" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10"/><line x1="0.78" y1="10.01" x2="12.51" y2="5.36" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10"/><line x1="0.5" y1="0.5" x2="0.5" y2="16.58" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10"/></svg>
				
				
				
				
				</span>
				
				
				</div>
				
				<p><?php echo date("d M",strtotime($st_rv->rcreated))?></p>
				
				
			</div>
			<div class="review_content">
				<div class="review_stars_count">
					<div class="reviews">
					 <i class="fa fa-star<?php if($st_rv->total_rate_value<1){ echo '-o'; }?>" aria-hidden="true"></i>
					 <i class="fa fa-star<?php if($st_rv->total_rate_value<2){ echo '-o'; }?>" aria-hidden="true"></i>
					 <i class="fa fa-star<?php if($st_rv->total_rate_value<3){ echo '-o'; }?>" aria-hidden="true"></i>
					 <i class="fa fa-star<?php if($st_rv->total_rate_value<4){ echo '-o'; }?>" aria-hidden="true"></i>
					 <i class="fa fa-star<?php if($st_rv->total_rate_value<5){ echo '-o'; }?>" aria-hidden="true"></i>
					 <a href="<?php echo base_url();?>rooms/<?php echo $st_rv->pid;?>"><span class="review_title" title="<?php echo $st_rv->listing_title;?>"><?php if(strlen($st_rv->listing_title)>20){echo (substr($st_rv->listing_title,0,20))."...";} else { echo $st_rv->listing_title;}?></span></a>
					 
					</div>
					
				</div>
				  <a href="javascript:void(0);" class="<?php if(strlen($st_rv->comments)<150){echo 'stat_review_hide'; }?> more_stat_review" data-class="stat_review_<?php echo $st_rv->rid;?>" data-bclass="stat_basic_review_<?php echo $st_rv->rid;?>" data-more="0" data-more_text="+ More" data-less_text="- Less" >+ <?php echo get_lang_site_key($lang_key,"product_lang","more") ?></a>
				<p class="show_basic_review_aboutyou stat_basic_review_<?php echo $st_rv->rid;?>"> <?php if(strlen($st_rv->comments)>150){echo (substr($st_rv->comments,0,150))."...";} else { echo $st_rv->comments;}?> </p>
				  <p class="hide_full_review_stat  stat_review_<?php echo $st_rv->rid;?>"> <?php  echo $st_rv->comments;?> </p>
			</div>
		</div>
		<?php }}else { echo "<span class='custom_no_reviews'>".get_lang_site_key($lang_key,"common_lang","no_reviews").".</span>";} ?>
</div>
	
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pagination_base" id="pagination_stat_html">
	
</div>	
	
</div>
                            
          </div>
        </div>
    </div>
<div class="modal fade review_block_flag_Modal" id="review_block_flag_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">

  <?php  echo get_lang_site_key($lang_key,"product_lang","model_content"); ?>
    <div class="modal-content model_text">
	  <a href="javascript:void(0);" data-dismiss="modal"><span class="modal_close_svg"><img src="<?php echo base_url();?>images/site/close.png"></span></a>		
		
		<h2 class="head_padd"><?php  echo get_lang_site_key($lang_key,"common_lang","do_you_want_report_review") ?></h2>
		<ul class="list-inline"><li>
		<a href="javascript:void(0);" class="login_btn review_block_flag_submit_btn" data-id="0"><?php  echo get_lang_site_key($lang_key,"common_lang","report_one"); ?></a></li><li>
		<a href="javascript:void(0);" class="login_btn review_block_flag_submit_btn" data-id="1"><?php  echo get_lang_site_key($lang_key,"common_lang","report_two"); ?></a></li><li>
		<a href="javascript:void(0);" class="login_btn review_block_flag_submit_btn" data-id="2"><?php  echo get_lang_site_key($lang_key,"common_lang","report_three"); ?> </a></li>
		</ul>
		<input type="hidden" id="review_block_id" name="review_block_id" value="">		
		
    </div>
  </div>
</div> 
<div class="modal fade review_block_flag_Modal" id="review_block_flag_done_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">

  <!-- Modal content-->
    <div class="modal-content model_text">
	  <a href="javascript:void(0);" data-dismiss="modal"><span class="modal_close_svg"><img src="<?php echo base_url();?>images/site/close.png"></span></a>
		
		
		<h2 class="head_padd"><?php  echo get_lang_site_key($lang_key,"common_lang","already_report"); ?>.</h2>
			
		
    </div>
  </div>
</div>   
 
<div class="modal fade  bs-example-modal-sm" id="contact_host_box" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm contact_host_main_width">

  <!-- Modal content-->
    <div class="modal-content content_host_modal model_text col-lg-12 col-xs-12 col-sm-12 col-md-12">
	  <a href="javascript:void(0);" class="modal_close_contact" data-dismiss="modal"><span class="modal_close_svg"><img src="<?php echo base_url();?>images/site/close.png"></span></a>
		<div class="col-md-12 col-sm-12 col-xs-12 nopadd custom_checkin_checkout_base">
			<div class="col-md-12 col-sm-12 col-xs-12 product_details_rgt" id="rgt_checkin1">
					
					<div class="col-md-12 col-xs-12 col-sm-12 product_details_rgt_base">
						   <div class="col-md-12 col-sm-12 col-xs-12 rgt_price_ratings">
							   <h3 ><span id="price_text"><?php echo $currency_symbol.round($currency_rate*$product_details->price);?></span><span class="per_nyt"><?php echo get_lang_site_key($lang_key,"product_lang","per_night") ?></span></h3>
							   <p><?php echo round($stat_review_avg->atotal_rate_value,2);?><span class="per_rating"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.89 21.83"><title>star</title><path d="M22.89,8.46a1,1,0,0,1-.36.66l-5,4.87,1.18,6.87a2.18,2.18,0,0,1,0,.28.86.86,0,0,1-.14.49.5.5,0,0,1-.42.2,1.1,1.1,0,0,1-.55-.17l-6.18-3.24L5.27,21.66a1.19,1.19,0,0,1-.55.17.52.52,0,0,1-.44-.2.86.86,0,0,1-.14-.49,2.05,2.05,0,0,1,0-.28L5.35,14l-5-4.87A1,1,0,0,1,0,8.46c0-.34.26-.55.77-.63l6.9-1L10.77.56c.17-.37.4-.56.67-.56s.5.19.68.56l3.09,6.26,6.91,1C22.63,7.91,22.89,8.12,22.89,8.46Z" style="fill:#f6b62f"/></svg></span></p>
						   </div>
						   <div class="checkin_checkout_base col-md-12 col-sm-12 col-xs-12">
									<div class="check_in_inner_label custom_checkin_label">
										<label class="chk_label"><?php echo get_lang_site_key($lang_key,"header_footer_lang","guest") ?></label>
										<div class="check_in_inner">
											<input type="text" placeholder="<?php echo get_lang_site_key($lang_key,"common_lang","checkin") ?>" name="datefilter" id="check_in_flat1" readonly>
											<span class="chk_before">&nbsp;</span>
											<input type="text" placeholder="<?php echo get_lang_site_key($lang_key,"common_lang","checkout") ?>" class="custom_chekout_input text-right" name="datefilter" id="check_out_flat1">
										</div>
									</div>
									<div class="check_in_guest_label custom_guest_label">
											<label class="chk_label"><?php echo get_lang_site_key($lang_key,"header_footer_lang","guest") ?></label>
											<div class="add_bed_detail_base">
													<div class="dropdown drop_down_base_guest">
															<span class="select-control custom_guest_add_login" type="button" id="guest_dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																1 <?php echo get_lang_site_key($lang_key,"header_footer_lang","guest") ?>
															</span>
															<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
															  <li class="custom_checkin_product">
																	<label><?php echo get_lang_site_key($lang_key,"header_footer_lang","guest") ?></label>
																	<div class="count_text_box deselect">							
																		<span class="minus_count countingbox_minus_detail1">-</span>
																		<span class="count_detail countingbox custom_countbox" data-min="1" id="total_guest_count1" data-max="<?php echo $product_details->guest_count;?>" data-name="guest_count" data-value="1">1
																		</span>
																		<span class="plus_count countingbox_plus_detail1">+</span>
																	</div>
															  </li>
															 
															</ul>
													</div>
												</div>
										</div>
										<div class="check_in_guest_label custom_guest_label">
												<textarea class="textarea-control" id="message_box" placeholder="<?php echo get_lang_site_key($lang_key,"product_lang","enter_msg") ?>"></textarea>
										</div>
										<div class="checkin_checkout_base col-md-12 col-sm-12 col-xs-12" id="ajax_load_html1">
											
										</div>
									   <?php if($logincheck!=$product_details->user_id){ ?>	
									   <div class="col-md-12 col-sm-12 col-xs-12 request_book_base">
												<div class="col-md-12 col-sm-12 col-xs-12 request_book_inner">
														<a href="javascript:void(0);" <?php if($logincheck==""){?> data-toggle="modal" data-target="#sign_in" <?php }else {?>id="submit_booking_contact_host_btn"<?php }?>><?php echo get_lang_site_key($lang_key,"product_lang","contact") ?></a>
												</div>
									   </div>
									   <?php } ?>
						   </div>
					
				
			</div>
		</div>
		</div>
		
		
			
		
    </div>
  </div>
</div> 
<script>
	var swtOk="<?php echo get_lang_site_key($lang_key,"common_lang","alert_text_ok")?>";
</script>
<script src="<?php echo base_url();?>js/site/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>js/site/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>js/site/jquery.gallerie.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=<?php echo $this->config->item('gmap_key');?>"></script>	
<script type="text/javascript" src="<?php echo base_url();?>js/site/flatpickr.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/highlight.pack.js"></script>
<script>var blockdate_array='<?php echo $block_dates;?>';</script>
<script src="<?php echo base_url();?>js/site/detail_script.js"></script> 
<script src="<?php echo base_url();?>js/site/edit_listing_script.js"></script> 
<?php $this->load->view('site/search/footer_search');?>