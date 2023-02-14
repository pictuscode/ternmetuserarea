<?php  if($user->phone_verified=="Yes" && $user->phone!=""){?>
<div class="phone_number_text">
 <span class="phone_num"><?php echo $user->phone_code;?> *******<?php echo substr($user->phone,7,10);?></span>
 <span class="phone_confirm"><?php echo get_lang_site_key($lang_key,"profile_lang","confirmed"); ?></span>
 <span class="close_phoneumber"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.11 13.11"><path d="M7.51,6.56,12.9,1.2a.65.65,0,0,0,0-.93.66.66,0,0,0-.93,0L6.58,5.63,1.15.19a.66.66,0,0,0-.93.94L5.64,6.57.19,12a.65.65,0,0,0,0,.93.66.66,0,0,0,.93,0L6.57,7.5,12,12.91a.66.66,0,1,0,.93-.94Z" style="fill:#606060"/></svg></span>
</div>
<?php } ?>
<div class="add_phone_number">
 <span id="phonenumber_add" class="phonenumber_add <?php if($user->phone!=""){?>phoneaddbtn_hide<?php } ?>">  <?php echo get_lang_site_key($lang_key,"profile_lang","add_new_phone"); ?></span>
 <div class="add_new_number_div custom_phone_number" id="add_verify_phone">
	<label><?php echo get_lang_site_key($lang_key,"product_lang","choose_country"); ?>:</label>
	<select name="country_code" id="country_dropdown" class="select-control">
	   <option value=""><?php echo get_lang_site_key($lang_key,"product_lang","choose_country"); ?></option>
	   <?php foreach($country_list->result() as $cl){?>
	   <option value="<?php echo $cl->id;?>" data-phcode="+<?php echo $cl->phonecode;?>" <?php if($user->country_code==$cl->id){ echo "selected";}?> ><?php echo $cl->nicename;?></option>
	   <?php }?>
	</select>
	<label><?php echo get_lang_site_key($lang_key,"profile_lang","add_new_phone"); ?>:</label>
	<div class="mobile_country_code_inner col-md-12 col-sm-12 col-xs-12">
	   <input type="text" placeholder="" class="country_no country_code_text" name="country_code" id="country_code_label" value="<?php echo $user->phone_code;?>" disabled>
	   <input type="text" maxpattern="\d*" placeholder="" class="phone_no_your input-control" name="phone_no" id="phone_no">
	</div>
	<ul class="list-inline sms_verify">
	   <li><a href="javascript:void(0);" id="verify_sms_btn" class="login_btn"><?php echo get_lang_site_key($lang_key,"profile_lang","verify_sms"); ?></a></li>												  
	</ul>
 </div>
 <div class="add_new_number_div" id="verify_otp_tab">
	
	<label><?php echo get_lang_site_key($lang_key,"profile_lang","otp"); ?>:</label>
	<div class="mobile_country_code_inner col-md-12 col-sm-12 col-xs-12">
	   <input type="text" maxpattern="\d*" maxlength="4" placeholder="" class="otp_box input-control" id="otp_text_box">
	</div>
	<ul class="list-inline sms_verify">
	   <li><a href="javascript:void(0);" id="verify_otp_btn" class="login_btn"><?php echo get_lang_site_key($lang_key,"profile_lang","verify"); ?></a></li>												  
	</ul>
 </div>
</div>