 <?php $not=0; if($completed_transaction->num_rows()>0){ foreach($completed_transaction->result() as $ct){?>
         <table>
             <tbody>
			 <tr>
				<td>
				<p><?php echo get_lang_site_key($lang_key,"common_lang",strtolower(date('M',strtotime($ct->payment_date)))).date("d, Y",strtotime($ct->payment_date));?></p>
				</td>
				<td>
				   <p><?php echo $ct->payment_type;?></p>
				</td>
				<td>
				   <h4><?php echo $ct->listing_title;?></h4>
				   <p><?php echo $ct->address;?></p>
				   <p><?php echo get_lang_site_key($lang_key,"profile_lang","booking_no"); ?> : <?php echo $ct->bid;?></p>
				</td>
				<td>
				   <p> <?php echo $currency_symbol.''.round($currency_rate*$ct->payable_amount);?></p>
				</td>
				<td>
				   <p><?php echo $ct->payment_type;?></p>
				</td>
			 </tr>
			 <?php }} else{ $not=1;;}?>
		  </tbody>
	   </table>
	   <?php if($not==1){?><table><tr><td colspan="4"><h6 class='text-center'><?php echo get_lang_site_key($lang_key,"profile_lang","no_transaction"); ?></h6></td></tr></table><?php } ?>

