<div class="edit_profile_head">
   <h3><?php echo get_lang_site_key($lang_key,"home_lang","past_reviwe_you"); ?></h3>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 verifed_infomation reviews_to_write_base ">
   <div class="col-md-12 col-sm-12 col-xs-12 reservation_details_base table-responsive">
	  <table class="reservaion_table past_review_written custom_width_class">
		 <thead class="reservation_details_head">
			<tr>
			   <th class="reserve_list_2"><?php echo get_lang_site_key($lang_key,"home_lang","booking_and_details"); ?></th>
			   <th class="reserve_list_3"><?php echo get_lang_site_key($lang_key,"home_lang","user"); ?></th>
			   <th class="reserve_list_4"><?php echo get_lang_site_key($lang_key,"common_lang","reviews"); ?></th>
			</tr>
		 </thead>
		 <tbody id="review_about_you_tbody_append">
			<?php if($reviews_about_you->num_rows()>0){ foreach($reviews_about_you->result() as $aboutyou){?>
			<tr>
			   <td>
				  <a href="<?php echo base_url();?>rooms/<?php echo $aboutyou->pid;?>"><h4 title="<?php echo $aboutyou->listing_title;?>"><?php if(strlen($aboutyou->listing_title)>20){echo (mb_substr($aboutyou->listing_title,0,20))."...";} else { echo $aboutyou->listing_title;}?></h4></a>
				  <p><?php echo $aboutyou->address;?></p>
				  <p><?php echo get_lang_site_key($lang_key,"profile_lang","booking_no"); ?> : <?php echo $aboutyou->bid;?></p>
			   </td>
			   <?php if($aboutyou->photo==""){ $img=base_url().'images/site/profile/avatar.png';} else { $img=base_url().'images/site/profile/'.$aboutyou->photo;}?>
			   <td class="user_img_table"><a href="<?php echo base_url();?>profile/<?php echo $aboutyou->uid;?>"><img src="<?php echo $img;?>"></a></td>
			   <td class="past_reviews_wrote">
				  <div class="reviews">
					 <i class="fa fa-star<?php if($aboutyou->total_rate_value<1){ echo '-o'; }?>" aria-hidden="true"></i>
					 <i class="fa fa-star<?php if($aboutyou->total_rate_value<2){ echo '-o'; }?>" aria-hidden="true"></i>
					 <i class="fa fa-star<?php if($aboutyou->total_rate_value<3){ echo '-o'; }?>" aria-hidden="true"></i>
					 <i class="fa fa-star<?php if($aboutyou->total_rate_value<4){ echo '-o'; }?>" aria-hidden="true"></i>
					 <i class="fa fa-star<?php if($aboutyou->total_rate_value<5){ echo '-o'; }?>" aria-hidden="true"></i>
				  </div>
				  <p class="show_basic_review_aboutyou basic_review_about_you_<?php echo $aboutyou->rid;?>"> <?php if(strlen($aboutyou->comments)>150){echo mb_substr($aboutyou->comments,0,150)."...";} else { echo $aboutyou->comments;}?> </p>
				  <p class="hide_full_review_aboutyou  review_about_you_<?php echo $aboutyou->rid;?>"> <?php  echo $aboutyou->comments;?> </p>
				  <a href="javascript:void(0);" class="<?php if(strlen($aboutyou->comments)<150){echo "review_about_you_btn_hide"; }?> more_review_abtyou" data-class="review_about_you_<?php echo $aboutyou->rid;?>" data-bclass="basic_review_about_you_<?php echo $aboutyou->rid;?>" data-more="0" data-more_text="+ More" data-less_text="- Less" >+ <?php echo get_lang_site_key($lang_key,"product_lang","more"); ?></a>
			   </td>
			</tr>
			<?php } } else {?><tr><td><span class="custom_no_reviews"><?php echo get_lang_site_key($lang_key,"home_lang","no_review_found"); ?>.</span></td></tr> <?php }?>
		</tbody>
		<input type="hidden" value="<?php echo $pagination_no;?>" id="pagination_no"/>
	  </table>
	  <div id="pagination_html_reviewabt"><?php echo $page_link;?></div>
   </div>
</div>