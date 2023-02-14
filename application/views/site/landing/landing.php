<?php $this->load->view('site/common/header');	?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/site/daterangepicker.css" />
<section>
			<div class="home_content col-md-12 col-sm-12 col-xs-12 nopadd">
					<div class="container">
					<h1><span><?php echo get_lang_site_key($lang_key,"header_footer_lang","site_name") ?></span> <?php echo get_lang_site_key($lang_key,"home_lang","landing_text1") ?>
					<br> <?php echo get_lang_site_key($lang_key,"home_lang","landing_text2") ?></h1>
						<?php
				       $attributes = array('method' => 'get', 'id' => 'search_form');
					   echo form_open(base_url().'s', $attributes); ?>
					
			
						<div class="search_bar col-md-12 col-sm-12 col-xs-12">
							<div class="col-md-4 col-sm-4 col-xs-12 search_divs">
								<label><?php echo get_lang_site_key($lang_key,"home_lang","where") ?></label>
								<input type="text" placeholder="<?php echo get_lang_site_key($lang_key,"home_lang","anywhere") ?>" name="city" id="landing_autocomplete">
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 search_divs">
								<label><?php echo get_lang_site_key($lang_key,"home_lang","when") ?></label>
								<input type="text" placeholder="<?php echo get_lang_site_key($lang_key,"home_lang","anytime") ?>" name="datefilter" autocomplete="off" id="datefilter">
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 search_divs">
								<div class="guest_div">
								<label><?php echo get_lang_site_key($lang_key,"home_lang","where") ?></label>
								<div class="dropdown">
										<button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="guest_count_text">1 <?php echo get_lang_site_key($lang_key,"header_footer_lang","guest") ?></span>  <span class="custom_caret_guest_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.7 6.82"><path d="M11.7,1a.37.37,0,0,1-.12.27L6.12,6.7a.37.37,0,0,1-.54,0L.12,1.24A.37.37,0,0,1,.12.7L.7.12a.37.37,0,0,1,.54,0L5.85,4.72,10.45.12a.37.37,0,0,1,.54,0l.59.59A.37.37,0,0,1,11.7,1Z" style="fill:#5f5f5f"/></svg></span>
										</button>
										<ul class="dropdown-menu custom_home_guest_filter guest_filter" aria-labelledby="dLabel">
											<li ><!--<p class="guest_count_text">1 Guest</p> 
                                                <big class="guest_count" data-value="1"> 
                                                <span><div class="minus_icon" id="guest_minus_btn">&nbsp;</div></span>
                                                <span><div class="plus_icon" id="guest_plus_btn">&nbsp;</div></span> 
                                                </big>-->
                                                <p class="guest_count_text">1 <?php echo get_lang_site_key($lang_key,"header_footer_lang","guest") ?></p>
                                                <div class="count_text_box deselect guest_count custom_text_box"  data-value="1">
													<span class="minus_count commonbed_countingbox_minus custom_minus_btn" id="guest_minus_btn">-</span>
								                	<span class="plus_count commonbed_countingbox_plus custom_plus_btn" id="guest_plus_btn">+</span>
												</div>
											</li>
											<input type="hidden" value="1" data-value="1" class="guest_count" name="guest"/>
										</ul>
								</div>
								</div>
								<div class="search_btn">
									<a href="javascript:void(0);" class="desktop_search"><?php echo get_lang_site_key($lang_key,"home_lang","search") ?></a>
								</div>
							</div>
						</div>
					</form>	
						
						<div class="places_content col-md-12 col-sm-12 col-xs-12">
								
								<div class="col-md-12 col-sm-12 col-xs-12 sliders_section">
										<?php if($just_booked->num_rows()>0){?>
										<div class="col-md-12 col-sm-12 col-xs-12 homes_slider">
											<h2><?php echo get_lang_site_key($lang_key,"home_lang","just_booked") ?></h2>
											<h6><a href="<?php echo base_url();?>s?city=&datefilter=&guest=1"><?php echo get_lang_site_key($lang_key,"home_lang","see_all") ?>  <span class="custom_seeall_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.74 30.18"><path d="M15.46,14.3,1.71.3A1,1,0,1,0,.29,1.7L13.43,15.09.29,28.48a1,1,0,1,0,1.43,1.4l13.75-14a1,1,0,0,0,.27-.79A1,1,0,0,0,15.46,14.3Z" style="fill:#606060"/></svg></span></a></h6>
											<div class="clearfix"></div>
											<div class="owl-carousel owl-theme" id="just_book">
												<?php foreach($just_booked->result() as $jb){?>						
												<div class="item">
													<a href="<?php echo base_url();?>rooms/<?php echo $jb->pid;?>">
													<div class="slider_img slider_img_justbook">
														<div class="responsive_img_base listing_bg_height_justbook"><div class="responsive_img" style="background:url('<?php echo base_url();?>images/site/product/<?php echo $jb->cover_photo==""?"product.png":$jb->cover_photo;?>');"></div></div>
													</div>
													<div class="slider_content">
														<h3 title="<?php echo $jb->listing_title;?>"><?php echo $currency_symbol;?><?php echo round($currency_rate*$jb->price);?> <span><?php if(strlen($jb->listing_title)>40){echo (mb_substr($jb->listing_title,0,40))."...";} else { echo $jb->listing_title;}?></span></h3>
														<p><?php if($jb->room_type=="shared_room"){ echo get_lang_site_key($lang_key,"home_lang","shared");} else if($jb->room_type=="private_room"){  echo get_lang_site_key($lang_key,"home_lang","private");} else {  echo get_lang_site_key($lang_key,"home_lang","entire");}?>/ <?php echo (get_common_details(PROPERTY_TYPE_LANG,'property_type_name',$jb->property_type,$lang_key));?> - <?php echo $jb->beds_count;?> <?php echo get_lang_site_key($lang_key,"common_lang","bed") ?><?php echo $jb->beds_count==1?"":get_lang_site_key($lang_key,"common_lang","s") ;?></p>
														<div class="clearfix"></div>
														<div class="reviews">
															<i class="fa fa-star<?php if($jb->total_review_value_avg<1){ echo '-o'; }?>" aria-hidden="true"></i>
															 <i class="fa fa-star<?php if($jb->total_review_value_avg<2){ echo '-o'; }?>" aria-hidden="true"></i>
															 <i class="fa fa-star<?php if($jb->total_review_value_avg<3){ echo '-o'; }?>" aria-hidden="true"></i>
															 <i class="fa fa-star<?php if($jb->total_review_value_avg<4){ echo '-o'; }?>" aria-hidden="true"></i>
															 <i class="fa fa-star<?php if($jb->total_review_value_avg<5){ echo '-o'; }?>" aria-hidden="true"></i>
															<span><?php echo $jb->total_review_count;?> <?php echo get_lang_site_key($lang_key,"common_lang","reviews") ?></span>
														</div>
													</div>
												</a>	
												</div>
												
												<?php } ?>	
										</div>

										</div>
										<?php }?>
										<?php if($recommended_homes->num_rows()>0){?>
										<div class="col-md-12 col-sm-12 col-xs-12 homes_slider">
											<h2><?php echo get_lang_site_key($lang_key,"home_lang","recom_home") ?></h2>
											<h6><a href="<?php echo base_url();?>s?city=&datefilter=&guest=1"><?php echo get_lang_site_key($lang_key,"home_lang","see_all") ?>  <span class="custom_seeall_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.74 30.18"><title>Asset 34</title><path d="M15.46,14.3,1.71.3A1,1,0,1,0,.29,1.7L13.43,15.09.29,28.48a1,1,0,1,0,1.43,1.4l13.75-14a1,1,0,0,0,.27-.79A1,1,0,0,0,15.46,14.3Z" style="fill:#606060"/></svg></span></a></h6>
											<div class="clearfix"></div>
											<div class="owl-carousel owl-theme" id="hme_slider">
												<?php foreach($recommended_homes->result() as $jb){?>			
												<div class="item">
												<a href="<?php echo base_url();?>rooms/<?php echo $jb->pid;?>">
													<div class="slider_img slider_img_justbook">
														<div class="responsive_img_base listing_bg_height_justbook"><div class="responsive_img" style="background:url('<?php echo base_url();?>images/site/product/<?php echo $jb->cover_photo==""?"product.png":$jb->cover_photo;?>');"></div></div>
													</div>
													<div class="slider_content">
														<h3 title="<?php echo $jb->listing_title;?>"><?php echo $currency_symbol;?><?php echo round($currency_rate*$jb->price);?> <span><?php if(strlen($jb->listing_title)>40){echo (mb_substr($jb->listing_title,0,40))."...";} else { echo $jb->listing_title;}?></span></h3>
														<p><?php if($jb->room_type=="shared_room"){ echo get_lang_site_key($lang_key,"home_lang","shared");} else if($jb->room_type=="private_room"){ echo get_lang_site_key($lang_key,"home_lang","private");} else { echo get_lang_site_key($lang_key,"home_lang","entire");}?>/ <?php echo (get_common_details(PROPERTY_TYPE_LANG,'property_type_name',$jb->property_type,$lang_key));?> - <?php echo $jb->beds_count;?> <?php echo get_lang_site_key($lang_key,"common_lang","bed") ?><?php echo $jb->beds_count==1?"":get_lang_site_key($lang_key,"common_lang","s");?></p>
														<div class="clearfix"></div>
														<div class="reviews">
															<i class="fa fa-star<?php if($jb->total_review_value_avg<1){ echo '-o'; }?>" aria-hidden="true"></i>
															 <i class="fa fa-star<?php if($jb->total_review_value_avg<2){ echo '-o'; }?>" aria-hidden="true"></i>
															 <i class="fa fa-star<?php if($jb->total_review_value_avg<3){ echo '-o'; }?>" aria-hidden="true"></i>
															 <i class="fa fa-star<?php if($jb->total_review_value_avg<4){ echo '-o'; }?>" aria-hidden="true"></i>
															 <i class="fa fa-star<?php if($jb->total_review_value_avg<5){ echo '-o'; }?>" aria-hidden="true"></i>
															<span><?php echo $jb->total_review_count;?> <?php echo get_lang_site_key($lang_key,"common_lang","reviews") ?></span>
														</div>
													</div>
												</a>	
												</div>
												
												<?php } ?>	
										</div>

										</div>
										<?php }?>
									    <?php if($feature_city->num_rows()>0){?>
										<div class="col-md-12 col-sm-12 col-xs-12 destination_slider">
												<h2><?php echo get_lang_site_key($lang_key,"home_lang","fea_destination") ?></h2>
												<div class="clearfix"></div>
												<div class="owl-carousel owl-theme" id="dest_slider">
												<?php foreach($feature_city->result() as $city){?>
												<div class="item">
													<a href="<?php echo base_url();?>s?city=<?php echo get_common_details(CITIES_LANG,'city_name',$city->id,'en');?>">
													<div class="slider_img slider_img_justbook">
														<div class="responsive_img_base listing_bg_height_justbook"><div class="responsive_img" style="background:url('<?php echo base_url();?>images/site/city/<?php echo $city->photo==""?"city.png":$city->photo;?>');"></div></div>
													</div>
													<div class="slider_content">
														<h3><?php echo get_common_details(CITIES_LANG,'city_name',$city->id,$lang_key);?></h3>
													</div>
													</a>

												</div>
												<?php }?>
										</div>
										</div>
										<?php } ?>
										<div class="col-md-12 col-sm-12 col-xs-12 hosting_opens">
												<div class="col-md-6 col-sm-6 col-xs-12 host1">
													<h4><?php echo get_lang_site_key($lang_key,"home_lang","bottom_text") ?></h4>
													<p><?php echo get_lang_site_key($lang_key,"home_lang","bottom_text1") ?>.</p>

													<a href="<?php echo base_url();?>page/see-what-you-can-earn"><?php echo get_lang_site_key($lang_key,"home_lang","see_earn") ?></a>
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 host2">
														<img src="<?php echo base_url();?>images/site/host_1.png">
												</div>
										</div>

										
										</div>
						</div>
					</div>
			</div>
		
	</section>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=<?php echo $this->config->item('gmap_key');?>"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/daterangepicker.min.js"></script>
<script src="<?php echo base_url();?>js/site/landing_script.js"></script>	

<?php $this->load->view('site/common/footer');?>