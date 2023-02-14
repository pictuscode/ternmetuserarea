<div class="edit_profile_head">
   <h3><?php echo get_lang_site_key($lang_key,"home_lang","review_to_write"); ?></h3>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 verifed_infomation reviews_to_write_base ">
   <div class="col-md-12 col-sm-12 col-xs-12 reservation_details_base table-responsive">
	  <table class="reservaion_table custom_width_class">
		 <thead class="reservation_details_head">
			<tr>
			   <th class="reserve_list_2"><?php echo get_lang_site_key($lang_key,"profile_lang","details"); ?></th>
			   <th class="reserve_list_3"><?php echo get_lang_site_key($lang_key,"header_footer_lang","host"); ?></th>
			   <th class="reserve_list_4"><?php echo get_lang_site_key($lang_key,"common_lang","reviews"); ?></th>
			</tr>
		 </thead>
		 <tbody id="writereview_tbody_append">
			<?php if($write_reviews->num_rows()>0){ foreach($write_reviews->result() as $writeyou){?>
			<tr>
			   <td>
				 <a href="<?php echo base_url();?>rooms/<?php echo $writeyou->pid;?>"><h4 title="<?php echo $writeyou->listing_title;?>"><?php if(strlen($writeyou->listing_title)>20){echo mb_substr($writeyou->listing_title,0,20)."...";} else { echo $writeyou->listing_title;}?></h4></a>
				  <p><?php echo $writeyou->address;?></p>
				  <p><?php echo get_lang_site_key($lang_key,"profile_lang","booking_no"); ?> : <?php echo $writeyou->book_id;?></p>
			   </td>
			   <?php if($writeyou->photo==""){ $img=base_url().'images/site/profile/avatar.png';} else { $img=base_url().'images/site/profile/'.$writeyou->photo;}?>
			   <td class="user_img_table"><a href="<?php echo base_url();?>profile/<?php echo $writeyou->uid;?>"><img src="<?php echo $img;?>"></a></td>
			   <td><a href="javascript:void(0);" data-toggle="modal" data-target="#reviewModal" class="write_review_btn" data-pid="<?php echo $writeyou->pid;?>" data-booking_id="<?php echo $writeyou->bid;?>"><?php echo get_lang_site_key($lang_key,"home_lang","write_review"); ?></a></td>
			</tr>
			<?php } } else {?><tr><td><span class="custom_no_reviews"><?php echo get_lang_site_key($lang_key,"home_lang","no_list_found"); ?>.</span></td></tr> <?php }?>
		 </tbody>
	  </table>
	   <div id="pagination_html_writereview"><?php echo $page_link;?></div>
	  <input type="hidden" value="<?php echo $pagination_no;?>" id="writereview_pagination_no"/>
   </div>
</div>

