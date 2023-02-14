<?php $this->load->view('site/user/idverify_head');	?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/site/gallerie.css" /> 
<link id="cal_style" rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/site/flatpickr.min.css">
    <section>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 add_your_id_base">
			<div class="container">
				<div class="col-xs-12 col-sm-10 col-md-7 col-lg-7 add_your_id_inner">
					<h2><?php echo get_lang_site_key($lang_key,"profile_lang","upload_your_image"); ?> <?php echo $id_type;?></h2>
						<div class="description">
							<p><?php echo get_lang_site_key($lang_key,"profile_lang","id_front_back_text"); ?>  <?php echo $id_type;?> ( <?php echo $id_country_name;?>). <?php echo get_lang_site_key($lang_key,"profile_lang","clear_face_image"); ?>.</p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 upload_images">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 upload_front nopadd">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 upload_file">
								
										<div class="label_upload" id="after_upload_front" <?php if($user->id_front!=""){?>style="background:url(<?php echo base_url();?>images/site/doc/<?php echo $user->id_front;?>)" <?php }?>>	
										 <?php if($user->id_front!=""){?> <a class='remove_front_image' href='#'>X</a><?php }?>	
										  <label for="front_upload_btn" class="<?php echo $user->id_front!=""?"hide_front_fill":"";?>" id="hide_after_fill">
											<span><img id="prof_img_holder_front" src="<?php echo base_url();?>images/site/front_image.png">
											 <img id="img_loader_front" src="<?php echo base_url();?>images/site/sivaloader.gif">
											</span>
											<p><?php echo get_lang_site_key($lang_key,"profile_lang","img_front"); ?></p>
										   </label>
										   <?php
											$attributes = array( 'id' => 'front_image_form','method'=>'post','enctype'=>'multipart/form-data');
											echo form_open(base_url().'site/user/upload_doc', $attributes); ?>
											<input type="file" id="front_upload_btn" name="upload_profile_picture" class="form-control upload">
											<input type="hidden" name="col" value="id_front">
											</form>
										</div>
									
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 upload_back">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 upload_file">
								
										<div class="label_upload" id="after_upload_back" <?php if($user->id_back!=""){?>style="background:url(<?php echo base_url();?>images/site/doc/<?php echo $user->id_back;?>)" <?php }?>>	
										 <?php if($user->id_back!=""){?> <a class='remove_back_image' href='#'>X</a><?php }?>	
										  <label for="back_upload_btn" class="<?php echo $user->id_back!=""?"hide_after_fill_back":"";?>" id="hide_after_fill_back">
											<span><img id="prof_img_holder_back" src="<?php echo base_url();?>images/site/front_image.png">
											 <img id="img_loader_back" src="<?php echo base_url();?>images/site/sivaloader.gif">
											</span>
											<p><?php echo get_lang_site_key($lang_key,"profile_lang","image_back"); ?></p>
										   </label>
										   <?php
											$attributes = array( 'id' => 'back_image_form','method'=>'post','enctype'=>'multipart/form-data');
											echo form_open(base_url().'site/user/upload_doc', $attributes); ?>
											<input type="file" id="back_upload_btn" name="upload_profile_picture" class="form-control upload">
											<input type="hidden" name="col" value="id_back">
											</form>
										</div>
									
								</div>
							</div>
						</div>
						<a href="javascript:void(0);" id="id_step2_next" class="button_new"><?php echo get_lang_site_key($lang_key,"common_lang","submit"); ?></a>
				</div>
			</div>
	</div>
	</section>
	    
<script src="<?php echo base_url();?>js/site/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>js/site/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/flatpickr.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/highlight.pack.js"></script>
<script src="<?php echo base_url();?>js/site/jquery.form.js"></script>
<script src="<?php echo base_url();?>js/site/user_script.js"></script> 
<?php $this->load->view('site/common/footer');?>