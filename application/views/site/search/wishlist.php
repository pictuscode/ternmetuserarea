<?php $this->load->view('site/search/header_search');	?>
	<section>
		<div class="col-md-12 col-sm-12 col-xs-12 saved_list_base">
			<div class="container">
				<div class="saved_list_inner col-md-12 col-sm-12 col-xs-12">
					
					<div class="col-md-12 col-sm-12 col-xs-12 save_list_tab">
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active fade in" id="saved">
									<div class="col-md-12 col-sm-12 col-xs-12 save_list_title">
											<h2><?php echo get_lang_site_key($lang_key,"home_lang","lists"); ?></h2>
											<a href="javascript:void(0);" data-toggle="modal" data-target="#create_wishlist_popup" class="button_new"><?php echo get_lang_site_key($lang_key,"common_lang","create_list"); ?></a>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12 save_list_tab_inner">
											<div class=" col-md-12 col-sm-12 col-xs-12 save_list_prop_base nopadd">
											<?php if($wish_list->num_rows()>0){ ?>
											<?php foreach($wish_list->result() as $ws){ ?>
											
													<div class="col-md-4 col-sm-4 col-xs-12 save_list_prop_inner wishlist_id_<?php echo $ws->id;?>">
															<a href="<?php echo base_url();?>show_wishlist/<?php echo $ws->id;?>">
															<div class="col-md-12 col-sm-12 col-xs-12 save_list_prop_content">
																<div class="slider_img" >
																	<?php 
																	      $products_id=json_decode($ws->products_id);
																		  if(is_array($products_id)&&!empty($products_id)){
																	      $pcover=get_coverphoto($products_id[0]);
																	      if($pcover!=""){$pcover="background: url(".base_url()."images/site/product/".$pcover.");";}else{   $pcover="background:#000";}
																		  }else{
																			 $pcover="background:#000";
																		  }
																	?>
																	<div class="responsive_img" style="<?php echo $pcover;?>">
																	
																	</div>
																</div>
																<div class="slider_content">
																	<h3><?php echo $ws->wishlist_name;?></h3>
																	<p><?php echo count((array)$products_id);?> <?php echo get_lang_site_key($lang_key,"home_lang","homes"); ?></p>
																</div>
															</div>
															</a>
															<div class="delete_wishlist" data-wid="<?php echo $ws->id;?>" ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20"><defs><path id="4xzqa" d="M390.14 599.1v1.82c0 .4-.32.72-.72.72h-1.35v10.7c0 .39-.33.71-.72.71H376.5a.72.72 0 0 1-.72-.72v-10.69h-1.35a.72.72 0 0 1-.72-.72v-1.82c0-1.1.9-1.99 2-1.99h4.34c.1-.28.37-.48.68-.48h2.38c.31 0 .57.2.67.48h4.36a2 2 0 0 1 1.99 2zm-3.51 2.54h-9.4v9.97h9.4zm2.07-1.44v-1.1c0-.3-.25-.55-.55-.55H375.7c-.3 0-.55.25-.55.55v1.1zm-9.38 8.2v-4.86a.72.72 0 1 1 1.44 0v4.86a.72.72 0 1 1-1.44 0zm3.78 0v-4.86a.72.72 0 1 1 1.44 0v4.86a.72.72 0 1 1-1.44 0z"></path></defs><g><g transform="translate(-372 -595)"><use fill="#fff" xlink:href="#4xzqa"></use></g></g></svg></div>
														</div>											
											<?php }}else{?>
											<div class="col-md-4 col-sm-4 col-xs-12 save_list_prop_inner">
													<?php echo get_lang_site_key($lang_key,"home_lang","no_wish_list"); ?>.
											</div>
											<?php }?>	
											</div>
										</div>
									   
							</div>
							
						</div>
					</div>

				</div>
			</div>
		</div>
</section><script src="<?php echo base_url();?>js/site/owl.carousel.min.js"></script>		

	<script src="<?php echo base_url();?>js/site/jquery-ui.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=<?php echo $this->config->item('gmap_key');?>"></script>	
<script src="<?php echo base_url();?>js/site/markerwithlabel.js"></script>  
 <script src="<?php echo base_url();?>js/site/wishlist_script.js"></script> 
<?php $this->load->view('site/search/footer_search');?>