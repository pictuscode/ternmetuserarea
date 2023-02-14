<?php $this->load->view('site/search/header_search');	?>
	<section>
		<div class="col-md-12 col-sm-12 col-xs-12 saved_list_base invoice_base">
			<div class="container" id="printable_div">
			<?php echo $product_details=$product_detail;?>
					<h1 class="text-center"><?php echo get_lang_site_key($lang_key,"product_lang","invoice") ?></h1>
					<h4><?php echo get_lang_site_key($lang_key,"product_lang","receipt") ?> #<span><?php echo $product_details->booking_id;?></span></h4>
					<span class="logo_invoice"><img src="<?php echo base_url();?>images/site/invoice.png"/></span>
				<div class="col-md-12 col-xs-12 col-sm-12 review_trip_rgt">
				
					<div class="col-md-12 col-sm-12 col-xs-12 review_trip_inner">
							
							<div class="col-md-12 col-sm-12 col-xs-12 place_pay_name">
									<div class="col-md-6 col-sm-6 col-xs-12 place_pay_lft">
										<h2 title="<?php echo $product_details->listing_title;?>"><?php if(strlen($product_details->listing_title)>32){echo (mb_substr($product_details->listing_title,0,32))."...";} else { echo $product_details->listing_title;} ?></h2>
										<p><?php if($product_details->room_type=="shared_room"){ echo get_lang_site_key($lang_key,"common_lang","shared_room");} else if($product_details->room_type=="private_room"){ echo get_lang_site_key($lang_key,"common_lang","private_room");} else { echo get_lang_site_key($lang_key,"common_lang","entire_place");}?> <?php echo get_common_details(PROPERTY_TYPE_LANG,'property_type_name',$product_details->property_type,$lang_key);?></p>
										<div class="reviews">
												<i class="fa fa-star<?php if(round($stat_review_avg->total_review)<1){ echo "-o";}?>" aria-hidden="true"></i>
												<i class="fa fa-star<?php if(round($stat_review_avg->total_review)<2){ echo "-o";}?>" aria-hidden="true"></i>
												<i class="fa fa-star<?php if(round($stat_review_avg->total_review)<3){ echo "-o";}?>" aria-hidden="true"></i>
												<i class="fa fa-star<?php if(round($stat_review_avg->total_review)<4){ echo "-o";}?>" aria-hidden="true"></i>
												<i class="fa fa-star<?php if(round($stat_review_avg->total_review)<5){ echo "-o";}?>" aria-hidden="true"></i>
												<span><?php echo round($stat_review_avg->total_review);?> <?php echo get_lang_site_key($lang_key,"common_lang","reviews") ?></span>
											</div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 place_pay_rgt ">
											<h3><?php echo get_lang_site_key($lang_key,"product_lang","host_name") ?>: <span><?php echo ucfirst($product_detail->hfirst_name);?></span></h3>
											<h5><?php echo get_lang_site_key($lang_key,"product_lang","property_address") ?>: <span><?php echo ucfirst($product_detail->address);?></span></h5>
									</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 place_pay_name guest_base ">
									<div class="col-md-6 col-sm-6 col-xs-12 place_pay_rgt nopadd">
											<h3><?php echo get_lang_site_key($lang_key,"product_lang","user_name") ?>: <span><?php echo ucfirst($product_detail->ufirst_name);?></span></h3>
											<h5><?php echo get_lang_site_key($lang_key,"product_lang","booked_date") ?>: <span><?php echo date('d-M-Y',strtotime($product_detail->bcreated));?></span></h5>											
									</div>
									
							</div>
						
							<div class="col-md-12 col-sm-12 col-xs-12 guest_base">
									<p>
										<span class="user_icon_line"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.44 15.51"><title>Asset 35</title><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M16.48,6.72a3.11,3.11,0,1,0,0-6.22,3.11,3.11,0,1,0,0,6.22ZM8,6.72A3.11,3.11,0,1,0,8,.5,3.11,3.11,0,1,0,8,6.72ZM8,8.79C5.51,8.79.5,10,.5,12.42v1.2A1.39,1.39,0,0,0,1.89,15H14a1.39,1.39,0,0,0,1.39-1.39v-1.2C15.41,10,10.41,8.79,8,8.79Zm8.52,0a4.3,4.3,0,0,0-1.07.1,4.26,4.26,0,0,1,2.13,3.53v1.2A1.39,1.39,0,0,0,18.93,15h3.62a1.39,1.39,0,0,0,1.39-1.39v-1.2C23.94,10,18.93,8.79,16.48,8.79Z" style="fill:none;stroke:#383838;stroke-miterlimit:10"/></g></g></svg></span>
										<span class="count_guest"><?php echo $guest_count;?></span>
										<?php echo get_lang_site_key($lang_key,"header_footer_lang","guest") ?>
									</p>
									<p>
											<span class="calendar_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.82 16.32"><title>Asset 28</title><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><rect x="0.5" y="2.08" width="18.82" height="13.74" rx="3.64" ry="3.64" style="fill:none;stroke:#383838;stroke-miterlimit:10"/><path d="M5.86,4V4Z" style="fill:none;stroke:#383838;stroke-miterlimit:10;fill-rule:evenodd"/><path d="M14,4V4Z" style="fill:none;stroke:#383838;stroke-miterlimit:10;fill-rule:evenodd"/></g></g></svg></span>
											<small><?php echo date('d',strtotime($checkin)).' '.get_lang_site_key($lang_key,"common_lang",strtolower(date('M',strtotime($checkin)))).' '.date('Y',strtotime($checkin));?></small> <span>  - </span> <small>  <?php echo date('d',strtotime($checkout)).' '.get_lang_site_key($lang_key,"common_lang",strtolower(date('M',strtotime($checkout)))).' '.date('Y',strtotime($checkout));?></small>

										</p>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 rate_night_base">
									<p><?php echo $currency_symbol;?><?php echo round($currency_rate*$product_details->price); ?> * <?php echo $no_of_nights;?>
									<?php if($spl_price_info!=""){?>
									<span class="append_price_list spl_price_tooltip" data-toggle="tooltip" data-placement="bottom" data-original-title='<?php echo $spl_price_info;?>'>(Incl of Spl price.)</span><?php } ?> <span class="pull-right"><?php echo $currency_symbol;?><?php echo round($currency_rate* $subprice);?> </span>	</p>
									<?php if($cleaning_fee!="0"){?>
									<p><?php  echo get_lang_site_key($lang_key,"product_lang","cleaning_fee");  ?>  <span class="pull-right"><?php echo $currency_symbol;?><?php echo round($currency_rate*$cleaning_fee);?> </span>	</p>
									<?php } ?>
									<?php if($service_fee!=""){ ?>
									<p><?php  echo get_lang_site_key($lang_key,"product_lang","service_fee");  ?>   <span class="pull-right"><?php echo $currency_symbol;?><?php echo round($currency_rate*$service_fee);?></span>	</p>
									<?php } ?>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 total_price_base">
									<p><?php  echo get_lang_site_key($lang_key,"product_lang","total");  ?> (<?php echo $currency_code;?>) <span class="pull-right total_price"><?php echo $currency_symbol;?><?php echo round($currency_rate*$total_price);?> </span>	</p>
									<div class="clearfix"></div>
									
									
							</div>
								<div class="col-md-12 col-sm-12 col-xs-12 calendar_save_btn nopadd">
								<ul class="list-inline text-center">
										<li><a href="javascript:void(0);" onclick="printDiv('printable_div')" class="back_btn"><?php echo get_lang_site_key($lang_key,"product_lang","print"); ?></a></li>
								</ul>
							</div>
							
					</div>
				</div>
			</div>
		
		</div>
	</section>	
<script src="<?php echo base_url();?>js/site/jquery.form.js"></script>
<script src="<?php echo base_url();?>js/site/jquery-ui.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=<?php echo $this->config->item('gmap_key');?>"></script>
<?php $this->load->view('site/search/footer_search');?>