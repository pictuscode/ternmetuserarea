<?php $this->load->view('site/product/list_header');
      $product=$product_details->row();	?>
<section>
				<div class="listing_base col-md-12 col-sm-12 col-xs-12" data-id="<?php echo $product->id;?>">
					<input type="hidden" id="tab_type" value="<?php if(isset($_GET["type"])){ echo $_GET["type"];}else { }?>"/> 
					<div class="listing_base_inner custom_inner_listing_base">
						
							
							<!-- Tab panes -->
							<div class="tab-content ">
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
								<div role="tabpanel" class="tab-pane" id="publish">
									<div class="container">
											<div  class="col-md-12 col-xs-12 col-sm-12 publish_base">
												<h4><?php echo get_lang_site_key($lang_key,"product_lang","ready_publish") ?>!</h4>
												<div class="publish_inner col-md-12 col-sm-12 col-xs-12 nopadd">
													<div class="col-md-6 col-sm-7 col-xs-12 nopadd">
															<p><?php echo get_lang_site_key($lang_key,"product_lang","publish_text1") ?> <span class="starting_date"> <?php echo get_lang_site_key($lang_key,"product_lang","publish_text2") ?> <?php /* echo date("d-M-Y",strtotime($product->created)); */?> </span>. <?php echo get_lang_site_key($lang_key,"product_lang","publish_text3") ?>.</p>
															<a href="javascript:void(0);" class="button_new publish_btn"><?php echo get_lang_site_key($lang_key,"product_lang","publish_btn") ?></a>
													</div>

												</div>
											</div>
									</div>
							</div>
							</div>
					</div>
					
				</div>
				<div class="bottom_next_continue col-md-12 col-xs-12 col-sm-12 photo_tab_bottom">
					<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 14.2%;">
								<span class="sr-only">15% <?php echo get_lang_site_key($lang_key,"product_lang","complete") ?></span>
							</div>
					</div>
					<div class="next_continue">
						<div class="container">
							<div class="contine_nd_back_base col-md-12 col-xs-12 col-sm-12 ">
								<div class="back_btn_base">
									<a href="#" class="back_btn"><?php echo get_lang_site_key($lang_key,"product_lang","back") ?></a>
								</div>
								<div class="save_next">
									<a href="javascript:void(0);" class="button_new listing_next_tab" data-tab="location" >
									<?php if ($product->cover_photo != "") {
								               echo get_lang_site_key($lang_key,"product_lang","next");
											}else{
												echo get_lang_site_key($lang_key,"product_lang","skip_now");
											} ?>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bottom_next_continue col-md-12 col-xs-12 col-sm-12 location_tab_bottom">
					<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 28.4%;">
								<span class="sr-only">30% <?php echo get_lang_site_key($lang_key,"product_lang","complete") ?></span>
							</div>
					</div>
					<div class="next_continue">
						<div class="container">
							<div class="contine_nd_back_base col-md-12 col-xs-12 col-sm-12 ">
								<div class="back_btn_base">
									<a href="javascript:void(0);" class="back_btn listing_back_tab" data-tab="photo_tab" ><?php echo get_lang_site_key($lang_key,"product_lang","back"); ?></a>
								</div>
								<div class="save_next">
									<a href="javascript:void(0);" class="button_new listing_next_tab" data-tab="bedroom" ><?php echo get_lang_site_key($lang_key,"product_lang","next"); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bottom_next_continue col-md-12 col-xs-12 col-sm-12 rooms_tab_bottom">
					<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 42.8%;">
								<span class="sr-only">45% <?php echo get_lang_site_key($lang_key,"product_lang","complete") ?></span>
							</div>
					</div>
					<div class="next_continue">
						<div class="container">
							<div class="contine_nd_back_base col-md-12 col-xs-12 col-sm-12 ">
								<div class="back_btn_base">
									<a href="javascript:void(0);" class="back_btn listing_back_tab" data-tab="location" ><?php echo get_lang_site_key($lang_key,"product_lang","back"); ?></a>
								</div>
								<div class="save_next">
									<a href="javascript:void(0);" class="button_new listing_next_tab" data-tab="amenities" ><?php echo get_lang_site_key($lang_key,"product_lang","next"); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bottom_next_continue col-md-12 col-xs-12 col-sm-12 amenities_tab_bottom">
					<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 56.8%;">
								<span class="sr-only">60% <?php echo get_lang_site_key($lang_key,"product_lang","complete") ?></span>
							</div>
					</div>
					<div class="next_continue">
						<div class="container">
							<div class="contine_nd_back_base col-md-12 col-xs-12 col-sm-12 ">
								<div class="back_btn_base">
									<a href="javascript:void(0);" class="back_btn listing_back_tab" data-tab="bedroom" ><?php echo get_lang_site_key($lang_key,"product_lang","back"); ?></a>
								</div>
								<div class="save_next">
									<a href="javascript:void(0);" class="button_new listing_next_tab" data-tab="houserules" ><?php echo get_lang_site_key($lang_key,"product_lang","next"); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bottom_next_continue col-md-12 col-xs-12 col-sm-12 house_rules_tab_bottom ">
					<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 74%;">
								<span class="sr-only">75% <?php echo get_lang_site_key($lang_key,"product_lang","complete") ?></span>
							</div>
					</div>
					<div class="next_continue">
						<div class="container">
							<div class="contine_nd_back_base col-md-12 col-xs-12 col-sm-12 ">
								<div class="back_btn_base">
									<a href="javascript:void(0);" class="back_btn listing_back_tab" data-tab="amenities" ><?php echo get_lang_site_key($lang_key,"product_lang","back"); ?></a>
								</div>
								<div class="save_next">
									<a href="javascript:void(0);" class="button_new listing_next_tab" data-tab="booking_price" ><?php echo get_lang_site_key($lang_key,"product_lang","next"); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bottom_next_continue col-md-12 col-xs-12 col-sm-12 booking_tab_bottom">
					<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 85.2%;">
								<span class="sr-only">100% <?php echo get_lang_site_key($lang_key,"product_lang","complete") ?></span>
							</div>
					</div>
					<div class="next_continue">
						<div class="container">
							<div class="contine_nd_back_base col-md-12 col-xs-12 col-sm-12 ">
								<div class="back_btn_base">
									<a href="javascript:void(0);" class="back_btn listing_back_tab" data-tab="houserules" ><?php echo get_lang_site_key($lang_key,"product_lang","back"); ?></a>
								</div>
								<div class="save_next">
									<a href="javascript:void(0);" class="button_new listing_next_tab" data-tab="publish" ><?php echo get_lang_site_key($lang_key,"product_lang","next"); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bottom_next_continue col-md-12 col-xs-12 col-sm-12 publish_tab_bottom">
					<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
								<span class="sr-only">100% <?php echo get_lang_site_key($lang_key,"product_lang","complete") ?></span>
							</div>
					</div>
					<div class="next_continue">
						<div class="container">
							<div class="contine_nd_back_base col-md-12 col-xs-12 col-sm-12 ">
								<div class="back_btn_base">
									<a href="javascript:void(0);" class="back_btn listing_back_tab" data-tab="booking_price" ><?php echo get_lang_site_key($lang_key,"product_lang","back"); ?></a>
								</div>
								<div class="save_next">
									<a href="javascript:void(0);" class="button_new listing_next_tab" data-tab="publish_next" ><?php echo get_lang_site_key($lang_key,"product_lang","next"); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
	</section>
<script src="<?php echo base_url();?>js/site/jquery.form.js"></script>
<script src="<?php echo base_url();?>js/site/jquery-ui.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=<?php echo $this->config->item('gmap_key');?>"></script>
<?php $this->load->view('site/product/list_footer');?>