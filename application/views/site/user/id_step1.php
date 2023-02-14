<?php $this->load->view('site/user/idverify_head');	?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/site/gallerie.css" /> 
<link id="cal_style" rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/site/flatpickr.min.css">
    <section>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 add_your_id_base">
			<div class="container">
				<div class="col-xs-12 col-sm-10 col-md-7 col-lg-7 add_your_id_inner">
					<h2><?php echo get_lang_site_key($lang_key,"profile_lang","which_type_id"); ?>?</h2>
					
					<div class="description">
						<p><?php echo get_lang_site_key($lang_key,"profile_lang","need_govt_id"); ?>.</p>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 country nopadd">
						<label for="country" class="label_class"><?php echo get_lang_site_key($lang_key,"profile_lang","issuing_country"); ?></label>
						<select name="id_country" id="id_country" class="select-control address_validate save_functionid" >
							<option value=""><?php echo get_lang_site_key($lang_key,"product_lang","choose_country"); ?></option>
							<?php foreach($country_list->result() as $country){?>
							<option <?php if($country->id==$user->id_country){ echo "selected";}?> value="<?php echo $country->id;?>" ccode="<?php echo $country->iso;?>" data-name="<?php echo $country->nicename;?>"><?php echo $country->nicename;?></option>
							<?php } ?>
						</select>
					</div>
					<div class="clearfix"></div>
					<p class="type_id"><?php echo get_lang_site_key($lang_key,"profile_lang","type_id"); ?></p>
					<ul class="check_id col-md-12 c-sm-12 col-xs-12 ">
						<li class="radio">
							<div class="col-md-12 col-sm-12 col-xs-12 custom_radio nopadd">
								<label class="control control--radio"> <?php echo get_lang_site_key($lang_key,"profile_lang","licence"); ?>
									<input type="radio" value="0" name="id_type" class="save_function_radioid" <?php if($user->id_type==0){ echo "checked";}?>>
									<div class="control__indicator"></div>
								</label>
							</div>
						</li>
						<li class="radio">
							<div class="col-md-12 col-sm-12 col-xs-12 custom_radio nopadd">
								<label class="control control--radio"> <?php echo get_lang_site_key($lang_key,"profile_lang","passport"); ?>
									<input type="radio" value="1" name="id_type" class="save_function_radioid" <?php if($user->id_type==1){ echo "checked";}?>>
									<div class="control__indicator"></div>
								</label>
							</div>
						</li>
						<li class="radio">
							<div class="col-md-12 col-sm-12 col-xs-12 custom_radio nopadd">
								<label class="control control--radio"> <?php echo get_lang_site_key($lang_key,"profile_lang","id_card"); ?>
									<input type="radio" value="2" name="id_type" class="save_function_radioid"  <?php if($user->id_type==2){ echo "checked";}?>>
									<div class="control__indicator"></div>
								</label>
							</div>
						</li>
					</ul>
					<p><span class="lock_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.02 18.33"><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M16,9.39c0-.82,0-1.63,0-2.45v-.5H12.88V4.88a4.88,4.88,0,1,0-9.75,0V6.44H0V9.67c0,2,0,3.83,0,5.67a3,3,0,0,0,.8,2.2,2.79,2.79,0,0,0,2.05.79h9.93A2.89,2.89,0,0,0,16,15.24C16,13.28,16,11.31,16,9.39ZM4.13,4.88a3.88,3.88,0,1,1,7.75,0V6.44H4.13ZM15,15.21c0,1.46-.71,2.12-2.2,2.12H2.85a1.84,1.84,0,0,1-1.34-.49A2.07,2.07,0,0,1,1,15.34c0-1.84,0-3.68,0-5.67V7.44H15c0,.65,0,1.3,0,2C15,11.3,15,13.27,15,15.21Z" style="fill:#4d4d4d"></path><path d="M8,9.61a1.93,1.93,0,0,0-.5,3.8V14.8h1V13.41A1.93,1.93,0,0,0,8,9.61Zm0,2.88A.94.94,0,1,1,9,11.55.94.94,0,0,1,8,12.49Z" style="fill:#4d4d4d"></path></g></g></svg></span><?php echo get_lang_site_key($lang_key,"profile_lang","never_share"); ?>.</p>
					
					<a href="javascript:void(0);" class="button_new" id="id_step1_next"><?php echo get_lang_site_key($lang_key,"product_lang","next"); ?><span class="leftarrow_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.74 35.18"><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M15.46,14.3,1.71.3A1,1,0,0,0,.29,1.7L13.43,15.09.29,28.48A1,1,0,0,0,1,30.18a1,1,0,0,0,.71-.3l13.75-14a1,1,0,0,0,.27-.79A1,1,0,0,0,15.46,14.3Z" style="fill:#fff"></path></g></g></svg></span></a>
				</div>
			</div>
	</div>
   </section>
	    
<script src="<?php echo base_url();?>js/site/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>js/site/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/flatpickr.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/highlight.pack.js"></script>
<script src="<?php echo base_url();?>js/site/user_script.js"></script> 
<?php $this->load->view('site/common/footer');?>