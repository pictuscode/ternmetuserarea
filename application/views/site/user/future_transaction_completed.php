<div class="col-md-12 col-sm-12 col-xs-12 profile_base_div verfication_trust_inner video_margin">
	<div class="edit_profile_head col-md-12 col-sm-12 col-xs-12">
	   <div class="col-md-7 col-sm-7 col-xs-12 trans_payment_method">
		  <div class="col-md-5 col-sm-5 co-xs-12 payment_method_1" style="display:none">
			 <select class="future_transaction_on_change_ajax select-control" id="future_transaction_completed_payment_type" >
				<option value=""><?php echo get_lang_site_key($lang_key,"profile_lang","all_payout_method"); ?></option>
				<option value="Paypal"><?php echo get_lang_site_key($lang_key,"product_lang","paypal"); ?></option>
				<option value="Stripe"><?php echo get_lang_site_key($lang_key,"profile_lang","stripe"); ?></option>
			 </select>
		  </div>
		  <div class="col-md-5 col-sm-5 co-xs-12 payment_method_2">
			 <select id="future_transaction_completed_listing" class="future_transaction_on_change_ajax select-control">
				<option value=""><?php echo get_lang_site_key($lang_key,"profile_lang","all_listings"); ?></option>
				<?php foreach($your_listings->result() as $ylist){?>
				<option value="<?php echo $ylist->id;?>"><?php echo $ylist->listing_title==""?get_lang_site_key($lang_key,"profile_lang","no_title"):($ylist->listing_title);?></option>
				<?php }?>
			 </select>
		  </div>
		  <div class="col-md-5 col-sm-5 co-xs-12 payment_method_3">
			<select class="select-control future_transaction_on_change_ajax" id="future_transaction_completed_year">
			<?php  if($get_stats_year->num_rows()>0){
				$year=$get_stats_year->row()->year;
			}else { $year=date("Y");}
			for($i=$year;$i<=$year;$i++){
			?><option <?php if(date("Y")==$year){ echo "selected";}?> value="<?php echo $i;?>"><?php echo $i;?></option>		<?php } ?>										
		  </select>
		  </div>
	   </div>
	   <div class="col-md-5 col-sm-5col-xs-12 trans_payment_method">
		  <div class="col-md-6 col-sm-6 co-xs-12 payment_method_4">
			<select class="select-control future_transaction_on_change_ajax" id="future_transaction_completed_from" >
				<option value="01" <?php if(date("m")=='01'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","from"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","january"); ?></option>
				<option value="02" <?php if(date("m")=='02'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","from"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","february"); ?></option>
				<option value="03" <?php if(date("m")=='03'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","from"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","march"); ?></option>
				<option value="04" <?php if(date("m")=='04'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","from"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","april"); ?></option>
				<option value="05" <?php if(date("m")=='05'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","from"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","may"); ?></option>
				<option value="06" <?php if(date("m")=='06'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","from"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","june"); ?></option>
				<option value="07" <?php if(date("m")=='07'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","from"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","july"); ?></option>
				<option value="08" <?php if(date("m")=='08'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","from"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","august"); ?></option>
				<option value="09" <?php if(date("m")=='09'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","from"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","september"); ?></option>
				<option value="10" <?php if(date("m")=='10'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","from"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","october"); ?></option>
				<option value="11" <?php if(date("m")=='11'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","from"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","november"); ?></option>
				<option value="12" <?php if(date("m")=='12'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","from"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","december"); ?></option>
			</select>
		  </div>
		  <div class="col-md-6 col-sm-6 co-xs-12 payment_method_5">
			<select class="select-control future_transaction_on_change_ajax" id="future_transaction_completed_to" >
				<option value="01" <?php if(date("m")=='01'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","to"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","january"); ?></option>
				<option value="02" <?php if(date("m")=='02'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","to"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","february"); ?></option>
				<option value="03" <?php if(date("m")=='03'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","to"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","march"); ?></option>
				<option value="04" <?php if(date("m")=='04'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","to"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","april"); ?></option>
				<option value="05" <?php if(date("m")=='05'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","to"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","may"); ?></option>
				<option value="06" <?php if(date("m")=='06'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","to"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","june"); ?></option>
				<option value="07" <?php if(date("m")=='07'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","to"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","july"); ?></option>
				<option value="08" <?php if(date("m")=='08'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","to"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","august"); ?></option>
				<option value="09" <?php if(date("m")=='09'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","to"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","september"); ?></option>
				<option value="10" <?php if(date("m")=='10'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","to"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","october"); ?></option>
				<option value="11" <?php if(date("m")=='11'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","to"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","november"); ?></option>
				<option value="12" <?php if(date("m")=='12'){ echo "selected";}?>><?php echo get_lang_site_key($lang_key,"profile_lang","to"); ?>: <?php echo get_lang_site_key($lang_key,"common_lang","december"); ?></option>
			</select>
		  </div>
	   </div>
	</div>
	<div class="col-md-12 col-sm-12 col-xs-12 reservation_details_base table-responsive">
	   <table class="reservaion_table custom_width_class">
		  <thead class="reservation_details_head">
			 <tr>
				<th class="reserve_list_1"><?php echo get_lang_site_key($lang_key,"common_lang","date"); ?></th>
				<th class="reserve_list_3"><?php echo get_lang_site_key($lang_key,"profile_lang","details"); ?></th>
				<th class="reserve_list_4"><?php echo get_lang_site_key($lang_key,"profile_lang","amount"); ?></th>
				<th class="reserve_list_5"><?php echo get_lang_site_key($lang_key,"profile_lang","paid_out"); ?></th>
			 </tr>
		  </thead>
		  <tbody id="future_transaction_compted_tbody">
			 <?php $not=0; if($completed_transaction->num_rows()>0){ foreach($completed_transaction->result() as $ct){?>
			 <tr>
				<td>
				<p><?php echo get_lang_site_key($lang_key,"common_lang",strtolower(date('M',strtotime($ct->payment_date)))).date(" d, Y",strtotime($ct->payment_date));?></p>
				</td>
				<td>
				   <h4><?php echo $ct->listing_title;?></h4>
				   <p><?php echo $ct->address;?></p>
				   <p><?php echo get_lang_site_key($lang_key,"profile_lang","booking_no"); ?>  : <?php echo $ct->bid;?></p>
				</td>
				<td>
				   <p> <?php echo $currency_symbol.''.round($currency_rate*$ct->payable_amount);?></p>
				</td>
				<td>
				   <p><?php echo get_lang_site_key($lang_key,"profile_lang","pending");?></p>
				</td>
			 </tr>
			 <?php }} else{ $not=1;}?>
		  </tbody>
	   </table>
	   <?php if($not==1){?><h6 class='text-center text-center1'><?php echo get_lang_site_key($lang_key,"profile_lang","no_transaction"); ?></h6><?php } ?>
	</div>
 </div>
