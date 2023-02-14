<?php if($write_reviews->num_rows()>0){ foreach($write_reviews->result() as $writeyou){ ?>
			<tr>
			   <td>
				 <a href="<?php echo base_url();?>rooms/<?php echo $writeyou->pid;?>"><h4 title="<?php echo $writeyou->listing_title;?>"><?php if(strlen($writeyou->listing_title)>20){echo mb_substr($writeyou->listing_title,0,20)."...";} else { echo $writeyou->listing_title;}?></h4></a>
				  <p><?php echo $writeyou->address;?></p>
				  <p><?php echo get_lang_site_key($lang_key,"profile_lang","booking_no"); ?> : <?php echo $writeyou->book_id;?></p>
			   </td>
			   <?php if($writeyou->photo==""){ $img=base_url().'images/site/profile/avatar.png';} else { $img=base_url().'images/site/profile/'.$writeyou->photo;}?>
			   <td class="user_img_table"><a href="<?php echo base_url();?>profile/<?php echo $writeyou->uid;?>"><img src="<?php echo $img;?>"></a></td>
			   <td><a href="javascript:void(0);" data-toggle="modal" data-target="#reviewModal" class="write_review_btn" data-pid="<?php echo $writeyou->pid;?>" data-booking_id="<?php echo $writeyou->bid;?>">Write a Review</a></td>
			</tr>
			<?php } } else {?><tr><td><?php echo get_lang_site_key($lang_key,"home_lang","no_list_found"); ?>.</td></tr> <?php }?>
<script> var pag="<?php echo addslashes($page_link);?>";
$("#pagination_html_writereview").html(pag);
</script>