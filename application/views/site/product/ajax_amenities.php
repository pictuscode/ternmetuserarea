<?php  $product=$product_details->row();
       $ex_amn=json_decode($product->amenities);	?>
<div class="container mob_nopadd">
		<div class="col-md-12 col-sm-12 col-xs-12 place_location_base mob_nopadd">
				<div class="col-md-12 col-sm-12 col-xs-12 place_location_lft mob_nopadd">
						<h4><?php echo get_lang_site_key($lang_key,"product_lang","amenities_title"); ?>?</h4>
						<ul class="list-unstyled custom_amenties_base">
								<?php foreach($amenities_list->result() as $amt){?>
								<li class="col-md-6 col-sm-6 col-xs-12">
									<div class="custom_check">
										<label class="control control--checkbox">
											<input type="checkbox" value="<?php echo $amt->amn_id;?>" name="amenities[]" class="save_function_multiple_checkbox" <?php if(is_array($ex_amn)&& in_array($amt->amn_id,$ex_amn)){ echo "checked";}?> />
											<span class="amenties_icon custom_amenties"><img src="<?php echo base_url(); ?>images/site/amt/<?php echo $amt->img;?>"></span>
											  <span class="amenties_content custom_amenties_content"><?php echo get_common_details(AMENITIES_LANG,'amn_name',$amt->amn_id,$lang_key);?> <span class="custom_amenities_description"><?php echo $amt->amn_description;?></span> </span>
											<div class="control__indicator"></div>
										</label>
									</div> 
								</li>
								<?php } ?>
						</ul>
				</div>
		</div>
</div>
