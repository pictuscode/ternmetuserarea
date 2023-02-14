<?php if($reviews_about_you->num_rows()>0){ foreach($reviews_about_you->result() as $aboutyou){?>
<tr>
   <td>
	  <a href="<?php echo base_url();?>rooms/<?php echo $aboutyou->pid;?>"><h4 title="<?php echo $aboutyou->listing_title;?>"><?php if(strlen($aboutyou->listing_title)>20){echo mb_substr($aboutyou->listing_title,0,20)."...";} else { echo $aboutyou->listing_title;}?></h4></a>
	  <p><?php echo $aboutyou->address;?></p>
	  <p>Booking No : <?php echo $aboutyou->bid;?></p>
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
	  <a href="javascript:void(0);" class="<?php if(strlen($aboutyou->comments)<150){echo "review_about_you_btn_hide"; }?> more_review_abtyou" data-class="review_about_you_<?php echo $aboutyou->rid;?>" data-bclass="basic_review_about_you_<?php echo $aboutyou->rid;?>" data-more="0" data-more_text="+ More" data-less_text="- Less" >+ More</a>
   </td>
</tr>
<?php } } else {?><tr><td><span class="custom_no_reviews">No reviews found.</span></td></tr> <?php }?>
<script> var pag="<?php echo addslashes($page_link);?>";
$("#pagination_html_reviewabt").html(pag);
</script>