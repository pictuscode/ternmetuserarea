<?php $this->load->view('site/search/header_search');	?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/site/gallerie.css" /> 
<link id="cal_style" rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/site/flatpickr.min.css">
    <section>
            <div class="col-md-12 col-sm-12 col-xs-12 calendar_block_head_base custom_no_border">
                    <div class="container">
                            <div class="col-md-12 col-sm-12 col-xs-12 inbox_msg_base">
                                            <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active" ><a href="#Traveling" aria-controls="Traveling" onclick="traveler_tabbtn()" role="tab"  data-toggle="tab"><?php echo get_lang_site_key($lang_key,"header_footer_lang","guest"); ?> </a></li>
                                                    <li role="presentation"><a href="#Hosting" aria-controls="Hosting" role="tab" onclick="host_tabbtn()"  data-toggle="tab"> <?php echo get_lang_site_key($lang_key,"profile_lang","all_travel_msg"); ?> </a></li>
                                            </ul>
                                            <div class="inbox_filter">
                                                    <select class="select-control" id="filter_host">
													  <option value="1"><?php echo get_lang_site_key($lang_key,"profile_lang","all_msg"); ?> (<span class="h_all">0</span>)</option>
													  <option value="2"><?php echo get_lang_site_key($lang_key,"profile_lang","read_msg"); ?> (<span class="h_read">0</span>)</option>
													  <option value="3"><?php echo get_lang_site_key($lang_key,"profile_lang","unread_msg"); ?> (<span class="h_unread">0</span>)</option>				
													</select>
													<select class="select-control" id="filter_user">
													  <option value="1"><?php echo get_lang_site_key($lang_key,"profile_lang","all_travel_msg"); ?> (<span class="t_all">0</span>)</option>
													  <option value="2"><?php echo get_lang_site_key($lang_key,"profile_lang","read_msg"); ?> (<span class="t_all">0</span>)</option>
													  <option value="3"><?php echo get_lang_site_key($lang_key,"profile_lang","unread_msg"); ?> (<span class="t_all">0</span>)</option>				
													</select>
                                            </div>
                                            <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="Traveling">
                                                        <div class="pending_request_base col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 pending_request_inner">
                                                                     <?php if($message_list_user->num_rows()>0){ foreach($message_list_user->result() as $me){ ?>
																		<a href="<?php echo base_url();?>request_response/<?php echo $me->bid;?>">
																		<ul class="list-inline custom_user_msg request_detail msgul_user <?php if($me->seestatus==0){?>read uread<?php }else { echo "uunread";} ?>">
                                                                                <?php if($me->photo==""){ $img=base_url().'images/site/profile/avatar.png';} else { $img=base_url().'images/site/profile/'.$me->photo;}?>
																				<li><img src="<?php echo $img;?>"></li>
																				
                                                                                <li class="name_inbox">
                                                                                    <h4><?php echo ucfirst($me->first_name.' '.$me->last_name);?></h4>
                                                                                    <h6><?php echo date('h:i:a',strtotime($me->msg_time));?></h6>
                                                                                </li>
                                                                                <li class="request_discription"><p ><?php echo $me->msg;?></p></li>
                                                                                <li class="stay_info"><p><?php echo date("d",strtotime($me->checkin));?> - <?php echo date("d",strtotime($me->checkout)).get_lang_site_key($lang_key,"common_lang",strtolower(date('M',strtotime($me->checkout)))); ?> </p></li>
                                                                                <?php if($me->booking_status==0){?>
																				<li class="status_info"><p class="yellow_color"><?php echo get_lang_site_key($lang_key,"profile_lang","pending"); ?> </p></li>
																				<?php } else if($me->booking_status==1){?>
																				<li class="status_info"><p class="green_color"><?php echo get_lang_site_key($lang_key,"home_lang","accepted"); ?> </p> <h6><?php echo $currency_symbol.(round($currency_rate*$me->total_price));?> <span><?php echo $currency_code;?> </span></h6></li>
																				<?php } else if($me->booking_status==2){?>
																				<li class="status_info"><p class="black_color"> <?php echo get_lang_site_key($lang_key,"home_lang","declined"); ?></p></li>
																				<?php } else if($me->booking_status==3){?>
																				<li class="status_info"><p class="green_color"> <?php echo get_lang_site_key($lang_key,"home_lang","paid"); ?></p><h6><?php echo $currency_symbol; echo round($currency_rate*$me->total_price);?><span><?php echo $currency_code;?> </span></h6></li>
																				<?php } else if($me->booking_status==4){?>
																				<li class="status_info"><p class="red_color"> <?php echo get_lang_site_key($lang_key,"home_lang","cancelled"); ?></p></li>
																				
																				<?php } else if($me->booking_status==5){?>
																				<li class="status_info"><p class="red_color"> <?php echo get_lang_site_key($lang_key,"home_lang","expired"); ?></p></li>
																				<?php } else if($me->booking_status==6){?>
																				<li class="status_info"><p class="yellow_color"> <?php echo get_lang_site_key($lang_key,"home_lang","enquiry"); ?></p></li>
																				<?php } ?>
                                                                        </ul></a>
																		<?php } } else{ ?>
																		<ul class="list-inline request_detail read">
																		      <li class="status_info"><p class="red_color"> <?php echo get_lang_site_key($lang_key,"home_lang","no_msg_found"); ?>...</p></li>
																		</ul>
																		<?php }?>		
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="Hosting">
                                                        <div class="pending_request_base col-md-12 col-sm-12 col-xs-12">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 pending_request_inner">
                                                                        <?php if($message_list_host->num_rows()>0){ foreach($message_list_host->result() as $me){ ?>
																		<a href="<?php echo base_url();?>request_response/<?php echo $me->bid;?>">
																		<ul class="list-inline request_detail msgul_host <?php if($me->seestatus==0){?>read hread<?php }else { echo "hunread";} ?>">
                                                                                <?php if($me->photo==""){ $img=base_url().'images/site/profile/avatar.png';} else { $img=base_url().'images/site/profile/'.$me->photo;}?>
																				<li><img src="<?php echo $img;?>"></li>
																				
                                                                                <li class="name_inbox">
                                                                                    <h4><?php echo ucfirst($me->first_name.' '.$me->last_name);?></h4>
                                                                                    <h6><?php echo date('h:i:a',strtotime($me->msg_time));?></h6>
                                                                                </li>
                                                                                <li class="request_discription"><p ><?php echo $me->msg;?></p></li>
                                                                                <li class="stay_info"><p><?php echo date("d",strtotime($me->checkin));?> - <?php echo date("d",strtotime($me->checkout)).get_lang_site_key($lang_key,"common_lang",strtolower(date('M',strtotime($me->checkout)))); ?> </p></li>
                                                                                <?php if($me->booking_status==0){?>
																				<li class="status_info"><p class="yellow_color"><?php echo get_lang_site_key($lang_key,"profile_lang","pending"); ?> </p></li>
																				<?php } else if($me->booking_status==1){?>
																				<li class="status_info"><p class="green_color"><?php echo get_lang_site_key($lang_key,"home_lang","accepted"); ?> </p> <h6><?php echo $currency_symbol.(round($currency_rate*$me->total_price));?> <span><?php echo $currency_code;?> </span></h6></li>
																				<?php } else if($me->booking_status==2){?>
																				<li class="status_info"><p class="red_color"> <?php echo get_lang_site_key($lang_key,"home_lang","declined"); ?></p></li>
																				<?php } else if($me->booking_status==3){?>
																				<li class="status_info"><p class="green_color"> <?php echo get_lang_site_key($lang_key,"home_lang","paid"); ?></p><h6><?php echo $currency_symbol; echo round($currency_rate*$me->total_price);?><span><?php echo $currency_code;?> </span></h6></li>
																				<?php } else if($me->booking_status==4){?>
																				<li class="status_info"><p class="red_color"> <?php echo get_lang_site_key($lang_key,"home_lang","cancelled"); ?></p></li>
																				<?php } else if($me->booking_status==5){?>
																				<li class="status_info"><p class="red_color"> <?php echo get_lang_site_key($lang_key,"home_lang","expired"); ?></p></li>
																				<?php } else if($me->booking_status==6){?>
																				<li class="status_info"><p class="yellow_color"> <?php echo get_lang_site_key($lang_key,"home_lang","enquiry"); ?></p></li>
																				<?php } ?>
                                                                        </ul>
																		</a>
																		<?php } } else{ ?>
																		<ul class="list-inline request_detail read">
																		      <li class="status_info"><p class="red_color"> <?php echo get_lang_site_key($lang_key,"home_lang","no_msg_found"); ?>...</p></li>
																		</ul>
																		<?php }?>	                                  
                                                                       
                                                                </div>
                                                        </div>
                                                    </div>
                                            </div>
                                    </div>
                                </div>
            </div>
   </section>
	    
<script src="<?php echo base_url();?>js/site/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>js/site/owl.carousel.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=<?php echo $this->config->item('gmap_key');?>"></script>	
  </script>
<script>

$(document).ready(function(){
init_autocomplete();	
})

function init_autocomplete() {
	  autocomplete = new google.maps.places.Autocomplete(
		 (document.getElementById('search_autocomplete')),
		  { types: ['geocode'] });
		google.maps.event.addListener(autocomplete, 'place_changed', function() {
			var data = $("#search_autocomplete").serialize();
			window.location.href=baseurl+"s?city="+ $("#search_autocomplete").val();
			return false;
		}
	  );
    
}
</script> 
<script type="text/javascript" src="<?php echo base_url();?>js/site/flatpickr.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/highlight.pack.js"></script>
<script src="<?php echo base_url();?>js/site/hostlisting_script.js"></script> 
<?php $this->load->view('site/search/footer_search');?>