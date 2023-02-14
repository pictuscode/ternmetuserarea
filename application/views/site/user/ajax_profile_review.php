<?php if($profile_review->num_rows()>0){ foreach($profile_review->result() as $st_rv){  
$report=json_decode($st_rv->report,true);
if(!empty($report) && array_key_exists($logincheck,$report)){
	$report_popup=1;
}
else{
	$report_popup=0;
} echo $st_rv->uid;
?>	
	<div class="col-md-12 col-sm-12 col-xs-12 reviews_host_profile">
			<div class="col-md-1 col-sm-2 col-xs-12 reviewer_img_host text-center">
				   <?php if($st_rv->photo==""){ $img=base_url().'images/site/profile/avatar.png';} else { $img=base_url().'images/site/profile/'.$st_rv->photo;}?>
					<a href="<?php echo base_url();?>users/show/<?php echo $st_rv->uid;?>">
					<img src="<?php echo $img;?>">
					<p><?php echo ucfirst($st_rv->first_name);?></p></a>
			</div>
			<div class="col-md-11 col-sm-10 col-xs-12 reviewer_message_host">
					<p class="show_basic_review_aboutyou  stat_basic_review_<?php echo $st_rv->rid;?>"><?php if(strlen($st_rv->comments)>150){echo mb_substr($st_rv->comments,0,150)."...";} else { echo $st_rv->comments;}?></p>
					<p class="hide_full_review_stat  stat_review_<?php echo $st_rv->rid;?>"> <?php  echo $st_rv->comments;?> </p>
					<a href="javascript:void(0);" class="<?php if(strlen($st_rv->comments)<150){echo "stat_review_hide"; }?> more_stat_review" data-class="stat_review_<?php echo $st_rv->rid;?>" data-bclass="stat_basic_review_<?php echo $st_rv->rid;?>" data-more="0" data-more_text="+ More" data-less_text="- Less" >+ More</a>
					<div class="country_dates_host">
							<p>From <a href="<?php echo base_url();?>s?city=<?php echo $st_rv->where_live;?>"> <?php echo $st_rv->where_live;?></a> <span> <i class="fa fa-circle" aria-hidden="true"></i>  <?php echo date("F Y",strtotime($st_rv->ucreated));?> <i class="fa fa-circle" aria-hidden="true"></i> </span> <a href="javascript:void(0);" <?php if($logincheck==$st_rv->uid){?>onclick="swal('<?php echo get_lang_site_key($lang_key,'common_lang','error') ?>','<?php echo get_lang_site_key($lang_key,'product_lang','this_your_review') ?>','error');"<?php } else{ ?>class="review_block_btn_flag flag_no_<?php echo $st_rv->rid;?>"<?php }?> data-status="<?php echo $report_popup;?>" data-value="<?php echo $st_rv->rid;?>" > <span class="report_span"> &nbsp;</span></a></p>
					</div>
			</div>
	</div>
<?php }} ?>