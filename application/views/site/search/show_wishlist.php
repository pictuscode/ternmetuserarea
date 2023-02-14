<?php $this->load->view('site/search/header_search');	?>
<section>
		<div class="serach_result_content col-md-12 col-sm-12 col-xs-12">
					
					<div class="clearfix"></div>
					
					<div class="serach_results_lft" >
						<div class="overlay"></div>
							<div class="clearfix"></div>
							<div class="search_sliders_base">
								
								<input type="hidden" id="wishlist_id" value='<?php  echo $wid;?>' />
								<input type="hidden" id="product_list_json" value='<?php echo str_replace("'","",$product_wishlist);?>' />
								<input type="hidden" id="lat_current" value='<?php echo $lat_current;?>' />
								<input type="hidden" id="long_current" value='<?php echo $long_current;?>' />
								<?php /*<p>Enter dates to see full pricing. Additional fees apply. Taxes may be added.</p>*/ ?>
								<div class="search_slider_inner col-md-12 col-sm-12 col-xs-12" id="product_list_box">								
								</div>
								<div class="search_slider_inner col-md-12 col-sm-12 col-xs-12" id="page_link">	
									
								</div>
								<div class="search_slider_inner col-md-12 col-sm-12 col-xs-12" id="page_link_details">	
									
								</div>
								
							</div>
					</div>
					<div class="map_rgt_1">
						<div class="map_rgt">
							 <div id="map_view" style="width: 100%; height:100%; display:block;"></div>
						</div>
					</div>
					<div class="language_currency">
							<a href="#">Language and currency</a>
					</div>
					<div class="language_close" style="display:none">
							<a href="#">close</a>
					</div>
					<div class="mobile_tab_map">
						<p><span class="map_mob">Map</span></p>
					</div>
					
					
					
		</div>
	</section>
<script src="<?php echo base_url();?>js/site/owl.carousel.min.js"></script>		
<script src="<?php echo base_url();?>js/site/jquery-ui.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places,drawing,geometry&key=<?php echo $this->config->item('gmap_key');?>"></script>		  
<script src="<?php echo base_url();?>js/site/markerwithlabel.js"></script>  
<script src="<?php echo base_url();?>js/site/wishlist_script.js"></script> 
<script>
$(document).ready(function(){
	$('.footer_base').hide();
$('.language_close').hide();
});
</script>
<?php $this->load->view('site/search/footer_search');?>