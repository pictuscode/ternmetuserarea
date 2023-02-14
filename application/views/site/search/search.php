<?php $this->load->view('site/search/header_search');	?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/site/daterangepicker.css" />
<section>
		<div class="serach_result_content col-md-12 col-sm-12 col-xs-12 custom_search_base">
					
					<div class="clearfix"></div>
					<?php
			$attributes = array( 'id' => 'search_desk_form','method'=>'post');
			echo form_open('#', $attributes); ?>
					
					<div class="serach_results_lft custom_search_inner_result">
						<div class="overlay"></div>
							<div class="filters custom_search_filters">
								<ul class="list-inline filters_ul">
									<li class="dropdown dates_drop room_type" id="date_btn"><a href="#" id="dates_drop" type="button" ><?php echo get_lang_site_key($lang_key,"home_lang","dates") ?> </a>
										<ul class="dropdown-menu" aria-labelledby="guest_drop">
											 <li>
											 
											 <div class="count_text_box deselect">
												<input type="text" placeholder="Anytime" name="datefilter" id="datefilter">
											 </div>
											 </li>
											 <li class="cancel_apply">
												 <a href="#" class="cancel_1 clear_dates"><?php echo get_lang_site_key($lang_key,"common_lang","clear") ?></a>
												 <a href="#" class="apply_1 apply_dates"><?php echo get_lang_site_key($lang_key,"home_lang","apply") ?></a>
											 </li>
										</ul>
									</li>

									<li class="dropdown room_type"><a href="#" id="room_type_drop" data-text="<?php echo get_lang_site_key($lang_key,"home_lang","room_type") ?>" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo get_lang_site_key($lang_key,"home_lang","room_type") ?></a>																		
										<ul class="dropdown-menu" aria-labelledby="room_type_drop">
											<li class="entire_home"> 
												<div class="home_check">
													<div class="custom_check">
														<label class="control control--checkbox">
															<input type="checkbox" name="room_type[]" class="rmtype" value="entire_home"/>
															<div class="control__indicator"></div>
															<div class="content_home">
																<h4><?php echo get_lang_site_key($lang_key,"home_lang","entire_home") ?></h4> 
																<p><?php echo get_lang_site_key($lang_key,"home_lang","entire_home_text") ?></p>
															</div>
															<div class="background_icon"></div>
														</label>
													</div>
												</div>
												
											 </li>
											<li class="private_home">
												<div class="home_check">
													<div class="custom_check">
														<label class="control control--checkbox">
															<input type="checkbox" name="room_type[]" class="rmtype" value="private_room" />
															<div class="control__indicator"></div>
															<div class="content_home">
																<h4><?php echo get_lang_site_key($lang_key,"common_lang","private_room") ?></h4> 
																<p><?php echo get_lang_site_key($lang_key,"home_lang","private_room_text") ?></p>
															</div>
															<div class="background_icon"></div>
														</label>
													</div>
												</div>
											 </li>
											<li class="shared_home">
												<div class="home_check">
													<div class="custom_check">
														<label class="control control--checkbox">
															<input type="checkbox" name="room_type[]" class="rmtype" value="shared_room"/>
															<div class="control__indicator"></div>
															<div class="content_home">
																<h4><?php echo get_lang_site_key($lang_key,"common_lang","shared_room") ?></h4> 
																<p><?php echo get_lang_site_key($lang_key,"home_lang","shared_room_text") ?></p>
															</div>
															<div class="background_icon"></div>
														</label>
													</div>
												</div>
											 </li>
											 <li class="cancel_apply">
												 <a href="#" class="cancel_1 clear_rmtype"><?php echo get_lang_site_key($lang_key,"common_lang","clear") ?></a>
												 <a href="#" class="apply_1 apply_rmtype"><?php echo get_lang_site_key($lang_key,"home_lang","apply") ?></a>
											 </li>
  										</ul>					
									</li>
									<?php 
									if(isset($_GET["guest"])){
										if($_GET["guest"]!=""){
											$guest_count=$_GET["guest"];
										}
										else{
											$guest_count=1;
										}
									}
									else{
											$guest_count=1;
										}
									?>
									<li class="dropdown price_range_base room_type"><a href="#" id="guest_drop" class="<?php if($guest_count!=1){ echo "selected_active"; }?>" type="button" data-toggle="dropdown" data-texts="<?php echo get_lang_site_key($lang_key,"product_lang","guests") ?>" data-text="<?php echo get_lang_site_key($lang_key,"header_footer_lang","guest") ?>" aria-haspopup="true" aria-expanded="false"> <?php if($guest_count!=1){ echo $guest_count; }?> <?php echo get_lang_site_key($lang_key,"header_footer_lang","guest") ?> </a>
										<ul class="dropdown-menu" aria-labelledby="guest_drop">
											 <li>
											 <label class="label_class_guest"><?php echo get_lang_site_key($lang_key,"header_footer_lang","guest") ?></label> 
											 <div class="count_text_box deselect">
												<span class="minus_count countingbox_minus">-</span>
												<span class="count_detail countingbox <?php if($guest_count!=1){ echo "guest_apply"; }?>" data-min="1" id="total_guest" data-name="guest_count" data-value="<?php echo $guest_count;?>"><?php echo $guest_count;?></span>
												<span class="plus_count countingbox_plus">+</span>
											 </div>
											 </li>
											 <li class="cancel_apply">
												 <a href="#" class="cancel_1 clear_guest"><?php echo get_lang_site_key($lang_key,"common_lang","clear") ?></a>
												 <a href="#" class="apply_1 apply_guest"><?php echo get_lang_site_key($lang_key,"home_lang","apply") ?></a>
											 </li>
										</ul>
									</li>
									<li class="dropdown price_range_base room_type"><a href="#" id="price_drop" data-text="<?php echo get_lang_site_key($lang_key,"home_lang","price_range") ?>" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo get_lang_site_key($lang_key,"home_lang","price_range") ?> </a>
										<ul class="dropdown-menu" aria-labelledby="price_drop">
											<li><label for="amount"></label>
											<input type="text" id="amount" class="amount_price" readonly ></li>
											<li class="price_slider"> <div id="slider-range"></div> </li>
											<li class="cancel_apply">
												 <a href="#" class="cancel_1 clear_price"><?php echo get_lang_site_key($lang_key,"common_lang","clear") ?></a>
												 <a href="#" class="apply_1 apply_price"><?php echo get_lang_site_key($lang_key,"home_lang","apply") ?></a>
											 </li>
										</ul>
									</li>
									<li class="dropdown instant_book  room_type"><a href="#" id="instant_drop" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo get_lang_site_key($lang_key,"product_lang","instant_book") ?>  </a>
											<ul class="dropdown-menu" aria-labelledby="instant_drop">
													<li><h3><?php echo get_lang_site_key($lang_key,"product_lang","instant_book") ?></h3> 
													<span>
														<div class="switch">
																<input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" name="instant_book" type="checkbox">
																<label for="cmn-toggle-1"></label>
														</div>
													</span>
		  											</li>
													<li><p><?php echo get_lang_site_key($lang_key,"home_lang","instant_book_text") ?></p></li>
													<li class="cancel_apply">
												 <a href="#" class="cancel_1 clear_instant"><?php echo get_lang_site_key($lang_key,"common_lang","clear") ?></a>
												 <a href="#" class="apply_1 apply_instant"><?php echo get_lang_site_key($lang_key,"home_lang","apply") ?></a>
											 </li>
											</ul>
									
									</li>
									<li class="more_filters " id="menu_filter"><a href="#" ><?php echo get_lang_site_key($lang_key,"home_lang","more_filters") ?> </a>
											<div class="more_filters_base" id="filter_more">
													<div class="more_filters_section">
															<h4><?php echo get_lang_site_key($lang_key,"home_lang","room_and_bed") ?></h4>
															<ul class="list-inline">
																	<li>
																	    <label><?php echo get_lang_site_key($lang_key,"product_lang","bedrooms") ?></label> 
																		<div class="count_text_box">
																			<span class="minus_count countingbox_minus">-</span>
																			<span class="count_detail countingbox " data-min="0" id="total_bedrooms" data-name="guest_count" data-value="0">0</span>
																			<span class="plus_count countingbox_plus">+</span>
																		</div>
																	</li>
																	<li>
																	    <label><?php echo get_lang_site_key($lang_key,"common_lang","beds") ?></label> 
																		<div class="count_text_box">
																			<span class="minus_count countingbox_minus">-</span>
																			<span class="count_detail countingbox " data-min="0" id="total_beds" data-name="guest_count" data-value="0">0</span>
																			<span class="plus_count countingbox_plus">+</span>
																		</div>
																	</li>
																	<li>
																	    <label><?php echo get_lang_site_key($lang_key,"product_lang","bathrooms") ?></label> 
																		<div class="count_text_box">
																			<span class="minus_count countingbox_minus">-</span>
																			<span class="count_detail countingbox " data-min="0" id="total_bathrooms" data-name="guest_count" data-value="0">0</span>
																			<span class="plus_count countingbox_plus">+</span>
																		</div>
																	</li>
															</ul>
													</div>
													
													<div class="more_filters_section">
															<h4><?php echo get_lang_site_key($lang_key,"product_lang","amenities") ?></h4>
															<ul class="list-inline">
																	<?php $i=1; foreach($amenities_list->result() as $amt){?>
																	<li class="<?php if($i>4){?>hide_amt_search <?php } ?>">
																			<div class="custom_check">
																				<label class="control control--checkbox">
																					<input type="checkbox" name="amenities[]" value="<?php echo $amt->amn_id;?>" class="apply_filter amtype"  />
																					<?php echo get_common_details(AMENITIES_LANG,'amn_name',$amt->amn_id,$lang_key);?> 
																					<div class="control__indicator"></div>
																				</label>
																			</div> 
																	</li>
																	<?php $i++;} ?>																	
																	<?php if($amenities_list->num_rows()>4){?><li class="showmore"><a href="javascript:void(0)" class="show_more_amt" data-class="hide_amt_search" data-value="more"><?php echo get_lang_site_key($lang_key,"home_lang","show_more_amenities") ?></a></li><?php }?>
															</ul>
													</div>
													<div class="more_filters_section">
															<h4><?php echo get_lang_site_key($lang_key,"home_lang","property_type") ?></h4>
															<ul class="list-inline">
																	<?php $j=1; foreach($property_type_list->result() as $pt){?>
																	<li class="<?php if($j>4){?>hide_proptype_search <?php } ?>">
																			<div class="custom_check">
																				<label class="control control--checkbox">
																					<input type="checkbox" name="property_type[]" value="<?php echo $pt->prop_id;?>" class="apply_filter proptype"  />
																					<?php echo get_common_details(PROPERTY_TYPE_LANG,'property_type_name',$pt->prop_id,$lang_key);?> 
																					<div class="control__indicator"></div>
																				</label>
																			</div> 
																	</li>
																	<?php $j++;} ?>	
																	<?php if($property_type_list->num_rows()>4){?><li class="showmore"><a href="javascript:void(0)" class="show_more_amt" data-class="hide_proptype_search" data-value="more"><?php echo get_lang_site_key($lang_key,"home_lang","show_more_property_type") ?></a></li><?php }?>
															</ul>
													</div>
													<div class="more_filters_section">
															<h4><?php echo get_lang_site_key($lang_key,"home_lang","house_rules") ?></h4>
															<ul class="list-inline">
																	<li>
																			<div class="custom_check">
																				<label class="control control--checkbox">
																					<input type="checkbox" name="rules[]" value="5" class="apply_filter rulestypes" />
																					<?php echo get_lang_site_key($lang_key,"home_lang","suirable_event") ?>
																					<div class="control__indicator"></div>
																				</label>
																			</div> 
																	</li>
																	<li>
																		<div class="custom_check">
																				<label class="control control--checkbox">
																					<input type="checkbox" name="rules[]" value="4" class="apply_filter rulestypes" />
																					<?php echo get_lang_site_key($lang_key,"home_lang","pets_allowed") ?>
																					<div class="control__indicator"></div>
																				</label>
																			</div> 
																	</li>
																	<li>
																		<div class="custom_check">
																				<label class="control control--checkbox">
																					<input type="checkbox" name="rules[]" value="3" class="apply_filter rulestypes" />
																					<?php echo get_lang_site_key($lang_key,"home_lang","smoking_allowed") ?>
																					<div class="control__indicator"></div>
																				</label>
																			</div> 
																	</li>
																	
																	
															</ul>
													</div>
													<div class="see_homes_cancel">
														<a href="#" class="see_homes_btn apply_morefilter"><?php echo get_lang_site_key($lang_key,"home_lang","see_homes") ?></a>
														<a href="#" id="filter_close" class="clear_morefilter"><?php echo get_lang_site_key($lang_key,"common_lang","cancel") ?></a>
													</div>
											</div>

											
									</li>
								</ul>
								<?php 
								if(isset($_GET['datefilter'])){
									if($_GET['datefilter']!=""){
										$split_date=explode("-",$_GET['datefilter']);
										$checkin=date("Y-m-d",strtotime(str_replace('/', '-', trim($split_date[0]))));
										$checkout=date("Y-m-d",strtotime(str_replace('/', '-', trim($split_date[1]))));
									}
									else{
										$checkin=$checkout="";
									}
								}
								else{
									$checkin=$checkout="";
								}
								
								?>
								<input type="hidden" name="pagination_no" id="pagination_no" value="<?php if($pagination_no!='')echo $pagination_no;else echo '0';?>" />
								<input type="hidden" name="min_price"  value="<?php echo $min_price;?>"  data-value="0" id="min_price" />
								<input type="hidden" name="max_price" value="<?php echo $max_price;?>"  data-value="<?php echo $max_price;?>" id="max_price" />
								<input type="hidden" name="zoom"  value="<?php if($zoom != '')echo $zoom; else echo '13'; ?>" id="zoom" />
								<input type="hidden" name="min_lat"  value="<?php echo $minLat; ?>" id="min_lat" />
								<input type="hidden" name="min_long"  value="<?php echo $minLong; ?>" id="min_long" />
								<input type="hidden" name="max_lat"  value="<?php echo $maxLat; ?>" id="max_lat" />
								<input type="hidden" name="max_long"  value="<?php echo $maxLong; ?>" id="max_long" />
								<input type="hidden" name="c_lat" value="<?php if($zoom != '')echo $cLat;else echo $lat;?>" id="c_lat" />
								<input type="hidden" name="c_long" value="<?php if($zoom != '')echo $cLat;else echo $long;?>" id="c_long" />
								<input type="hidden" name="lat"  value="<?php  echo $lat; ?>" id="lat_current" />
								<input type="hidden" name="long"  value="<?php echo $long; ?>" id="long_current" />
								<input type="hidden" name="checkin"  value="<?php echo $checkin; ?>" id="checkin" />
								<input type="hidden" name="checkout"  value="<?php echo $checkout; ?>" id="checkout" />
								<input type="hidden" value='<?php echo $product_list_json;?>' id="product_list_json" />
								<input type="hidden" value='' id="wishlist_array" />
								<input type="hidden" value='<?php echo $logincheck;?>' id="logincheck" />
							</div>
							<div class="clearfix"></div>
							<div class="search_sliders_base">
								<h5><span id="rentals_count"><?php echo $total_product_list->num_rows();?></span>+ <?php echo get_lang_site_key($lang_key,"home_lang","rentals") ?></h5>
								<p><?php echo get_lang_site_key($lang_key,"home_lang","see_homes_heading") ?></p>
								<div class="search_slider_inner col-md-12 col-sm-12 col-xs-12" id="product_list_box">								
								</div>
								<div class="search_slider_inner col-md-12 col-sm-12 col-xs-12" id="page_link">	
									
								</div>
								<div class="search_slider_inner col-md-12 col-sm-12 col-xs-12" id="page_link_details">	
									
								</div>
								
							</div>
					</div>
					
					</form>
					<div class="mobile_fiters_base">
							<div class="filter_mob_head">
									<div class="close_head_mobfiltter">
									</div>
									<h5><?php echo get_lang_site_key($lang_key,"home_lang","all_filters") ?> <span id="mob_fil_count">(0)</span></h5>
									<span class="clear_all" id="mobclearfilter">
									<?php echo get_lang_site_key($lang_key,"home_lang","clear_all") ?>
									</span>
							</div>
							<div class="mobile_filter_content">
									<div class="filter_sec_mob">
										<h3><?php echo get_lang_site_key($lang_key,"home_lang","room_type") ?></h3>
											<div class="entire_home"> 
												<div class="home_check">
													<div class="custom_check">
														<label class="control control--checkbox">
															<input type="checkbox" name="mroom_type[]" class="mrmtype mobfilter" value="entire_home"/>
															<div class="control__indicator"></div>
															<div class="content_home">
																<h4><?php echo get_lang_site_key($lang_key,"home_lang","entire_home") ?></h4> 
																<p><?php echo get_lang_site_key($lang_key,"home_lang","entire_home_text") ?></p>
															</div>
															<div class="background_icon"></div>
														</label>
													</div>
												</div>
												
											 </div>
											<div class="private_home">
												<div class="home_check">
													<div class="custom_check">
														<label class="control control--checkbox">
															<input type="checkbox" name="mroom_type[]" class="mrmtype mobfilter" value="private_room">
															<div class="control__indicator"></div>
															<div class="content_home">
																<h4><?php echo get_lang_site_key($lang_key,"common_lang","private_room") ?></h4> 
																<p><?php echo get_lang_site_key($lang_key,"home_lang","private_room_text") ?></p>
															</div>
															<div class="background_icon"></div>
														</label>
													</div>
												</div>
											 </div>
											<div class="shared_home">
												<div class="home_check">
													<div class="custom_check">
														<label class="control control--checkbox">
															<input type="checkbox" name="mroom_type[]" class="mrmtype mobfilter" value="shared_room">
															<div class="control__indicator"></div>
															<div class="content_home">
																<h4><?php echo get_lang_site_key($lang_key,"common_lang","shared_room") ?></h4> 
																<p><?php echo get_lang_site_key($lang_key,"home_lang","shared_room_text") ?></p>
															</div>
															<div class="background_icon"></div>
														</label>
													</div>
												</div>
											 </div>		
								</div>
								<div class="filter_sec_mob">
									<h3><?php echo get_lang_site_key($lang_key,"home_lang","price_range") ?></h3>
									<ul class="list-unstyled price_ranger" aria-labelledby="">
											<li><label for="amount1"></label>
											<input type="text" id="amount1" class="amount_price" readonly ></li>
											<li class="price_slider"> <div id="slider-range1"></div> </li>
											
										</ul>
								</div>
								<div class="filter_sec_mob">
									<h3><?php echo get_lang_site_key($lang_key,"home_lang","dates") ?></h3>
									<ul class="list-unstyled price_ranger" aria-labelledby="">
											<li><a href="#" id="dates_drop1" type="button" ><?php echo get_lang_site_key($lang_key,"home_lang","dates") ?> </a></li>											
									</ul>
								</div>
								<div class="filter_sec_mob">
									<h5><?php echo get_lang_site_key($lang_key,"product_lang","amenities") ?></h5>
									<a href="javascript:void(0)" id="see_all_mob">  <?php echo get_lang_site_key($lang_key,"home_lang","see_all") ?> <span><img src="<?php echo base_url();?>images/site/see_all.png"></span></a>
									<div class="clearfix"></div>
									<div class="ament_sec" id="ament_1">
										<ul class="list-inline">
																	<?php $i=1; foreach($amenities_list->result() as $amt){?>
																	<li>
																			<div class="custom_check">
																				<label class="control control--checkbox">
																					<input type="checkbox" name="mob_amenities[]" value="<?php echo $amt->amn_id;?>" class="mobfilter mamtype"  />
																					<?php echo get_common_details(AMENITIES_LANG,'amn_name',$amt->amn_id,$lang_key);?> 
																					<div class="control__indicator"></div>
																				</label>
																			</div> 
																	</li>
																	<?php $i++;} ?>	
																																		
															</ul>
									</div>
								</div>
								<div class="filter_sec_mob">
									<h5><?php echo get_lang_site_key($lang_key,"home_lang","property_type") ?></h5>
									<a href="javascript:void(0)" id="see_all_mob1">  <?php echo get_lang_site_key($lang_key,"home_lang","see_all") ?>  <span><img src="<?php echo base_url();?>images/site/see_all.png"></span></a>
									<div class="clearfix"></div>
									<div class="ament_sec " id="ament_2">
										<ul class="list-inline">
																	
																	<?php $j=1; foreach($property_type_list->result() as $pt){?>
																	<li >
																			<div class="custom_check">
																				<label class="control control--checkbox">
																					<input type="checkbox" name="mob_property_type[]" value="<?php echo $pt->prop_id;?>" class="mobfilter mproptype"  />
																					<?php echo get_common_details(PROPERTY_TYPE_LANG,'property_type_name',$pt->prop_id,$lang_key);?> 
																					<div class="control__indicator"></div>
																				</label>
																			</div> 
																	</li>
																	<?php $j++;} ?>	
																	
															</ul>
									</div>
								</div>
							</div>

					</div>
					<div class="map_rgt custom_search_map_right">
						 <div id="map_view" style="width: 100%; height: 100%;"></div>
					</div>
					<div class="language_currency custom_search_currency">
							<a href="#"><?php echo get_lang_site_key($lang_key,"home_lang","language_and_currency") ?></a>
					</div>
					<div class="language_close custom_search_close">
							<a href="#"><?php echo get_lang_site_key($lang_key,"product_lang","close") ?></a>
					</div>
					<div class="mobile_tab_map custom_search_map">
						<p><span class="map_mob"><?php echo get_lang_site_key($lang_key,"home_lang","map") ?></span>|<span class="filter_mob"><?php echo get_lang_site_key($lang_key,"home_lang","filters") ?></span></p>
					</div>
					
					
					
		</div>
	</section>
<script src="<?php echo base_url();?>js/site/owl.carousel.min.js"></script>		
<script src="<?php echo base_url();?>js/site/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/daterangepicker.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=<?php echo $this->config->item('gmap_key');?>"></script>	  
<script>
$(document).ready(function(){
   $(".gm-style-pbc").next().addClass("sibling");
});
var currency_symbol="<?php echo $currency_symbol;?>";
</script> 
<script src="<?php echo base_url();?>js/site/markerwithlabel.js"></script>  
<script src="<?php echo base_url();?>js/site/search_script.js"></script>


<?php $this->load->view('site/search/footer_search');?>