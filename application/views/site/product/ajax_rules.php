<?php  $product=$product_details->row();
       $ex_houserules=json_decode($product->house_rules);
	   $additional_rules=json_decode($product->additional_rules,true);	?>
<div class="container mob_nopadd">
		<div class="col-md-12 col-sm-12 col-xs-12 place_location_base mob_nopadd">
				<div class="col-md-6 col-sm-6 col-xs-12 place_location_lft mob_nopadd">
						<h4><?php echo get_lang_site_key($lang_key,"product_lang","rules_title"); ?></h4>
						<div class="house_rules_base col-md-12 col-sm-12 col-xs-12 nopadd">
								<?php foreach($rules->result() as $ru){?>	
								<div class="col-md-12 col-sm-12 col-xs-12 rules_set ">
										<p> <?php echo get_common_details(RULES_LANG,'rules_name',$ru->id,$lang_key) ;?></p>
										<div class="switch_control">
												<input id="cmn-toggle-<?php echo $ru->id;?>" class="cmn-toggle cmn-toggle-round save_function_multiple_checkbox" type="checkbox" value="<?php echo $ru->id;?>" name="house_rules[]" <?php if(is_array($ex_houserules)&& in_array($ru->id,$ex_houserules)){ echo "checked";}?>>
												<label for="cmn-toggle-<?php echo $ru->id;?>"></label>
										</div>
								</div>
								<?php } ?>
								
							</div>
							<div class="add_rules_base" >
								<h4><?php echo get_lang_site_key($lang_key,"product_lang","additional_rules"); ?></h4>
								<div id="add_rules_append_div">
								<?php if(is_array($additional_rules)){ foreach($additional_rules as $in=>$rul){?>
								<div class="add_rules_inner add_rules_append_div_list" data-id="<?php echo str_replace('r','',$in);?>">
										<p><?php echo ($rul);?></p>
										<span data-id="<?php echo ($in); ?>" class="delete_new_rules_btn custom_close_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.11 13.11"><path d="M7.51,6.56,12.9,1.2a.65.65,0,0,0,0-.93.66.66,0,0,0-.93,0L6.58,5.63,1.15.19a.66.66,0,0,0-.93.94L5.64,6.57.19,12a.65.65,0,0,0,0,.93.66.66,0,0,0,.93,0L6.57,7.5,12,12.91a.66.66,0,1,0,.93-.94Z" style="fill:#606060"></path></svg></span>
								</div>
								<?php } } ?>
								</div>
							</div>
							<div class="add_rules_btn_base">
									<div class="add_rules_text">
											<input type="text" class="input-control" id="add_rule_text" placeholder="<?php echo get_lang_site_key($lang_key,"product_lang","no_shoes_house"); ?>?">
									</div>
									<div class="add_rules_btn" id="add_rule_btn">
											<span><?php echo get_lang_site_key($lang_key,"product_lang","add"); ?></span>
									</div>
							</div>
						
				</div>
		</div>
</div>
								