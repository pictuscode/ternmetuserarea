<?php $this->load->view('site/host/host_header');	?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/site/gallerie.css" /> 
<link id="cal_style" rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/site/flatpickr.min.css">

    <section>
            <div class="col-md-12 col-sm-12 col-xs-12 calendar_block_head_base">
                    <div class="container">
                            <div class="col-md-12 col-sm-12 col-xs-12 calendar_block_head">
                                    <div class="calendar_block_lft col-md-5 col-sm-5 col-xs-12">
                                            <div class="drop_down_properties">
                                                    <div class="dropdown">
                                                            <button id="properties_dropdown" class="prop_btn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                              <?php $i=1; foreach($product_details->result() as $pd){ if($i==1){ ?>
															   <p title="<?php echo $pd->listing_title;?>" id="selected_product" data-id="<?php echo $pd->id;?>">
															   <span class="properties_img selected_dropdown_image" style="background:url(<?php echo base_url();?>images/site/product/<?php echo $pd->cover_photo;?>);"></span>
															   <span class="main_selected_text selected_dropdown_title"><?php if(strlen($pd->listing_title)>18){echo substr($pd->listing_title,0,18).'..'; } else { echo $pd->listing_title;}?></span>
															   </p>
															  <?php $i++;}}?>
                                                              <span class="drop_down_icon"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.7 6.82"><title>Asset 44</title><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M11.7,1a.37.37,0,0,1-.12.27L6.12,6.7a.36.36,0,0,1-.54,0L.12,1.24A.36.36,0,0,1,.12.7L.7.12a.36.36,0,0,1,.54,0l4.61,4.6,4.6-4.6a.36.36,0,0,1,.54,0l.59.58A.37.37,0,0,1,11.7,1Z" style="fill:#5f5f5f"/></g></g></svg></span>
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="properties_dropdown" id="prodcut_dropdown">
                                                                    <?php foreach($product_details->result() as $pd){ ?>
																	<li data-id="<?php echo $pd->id;?>" data-title="<?php if(strlen($pd->listing_title)>18){echo substr($pd->listing_title,0,18).'..'; } else { echo $pd->listing_title;}?>" data-img="<?php echo base_url();?>images/site/product/<?php echo $pd->cover_photo==""?"product.png":$pd->cover_photo;?>">
                                                                        <p title="<?php echo $pd->listing_title;?>"><span class="properties_img" style="background:url(<?php echo base_url();?>images/site/product/<?php echo $pd->cover_photo==""?"product.png":$pd->cover_photo;?>)"></span><span class="main_selected_text"><?php if(strlen($pd->listing_title)>18){echo substr($pd->listing_title,0,18).'..'; } else { echo $pd->listing_title;}?></span></p>
                                                                    </li>
																	<?php }?>
                                                            </ul>
                                                          </div>
                                            </div>
                                    </div>
                                    <div class="calendar_block_rgt col-md-7 col-sm-7 col-xs-12">
                                            <ul class="list-inline">
                                                    <li><a href="javascript:void(0);" id="price_availability_tab" data-id="0"><?php echo get_lang_site_key($lang_key,"product_lang","price_availability"); ?></a></li>
                                                    <li><a href="javascript:void(0);" id="preview_listing_tab" data-id="0"><?php echo get_lang_site_key($lang_key,"product_lang","preview_listing"); ?></a></li>
                                            </ul>
                                    </div>
                            </div>
                    </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 calendar_content_base">
                    <div class="container">
                            <div class="col-md-12 col-xs-12 col-sm-12 calendar_content_inner">
                                    <div class="col-md-7 col-xs-12 col-sm-7 calendar_content_lft">
                                            <div class="col-md-12 col-sm-12 col-xs-12 calendar_content_lft_inner" id="calendar_box">
                                                   
                                            </div>
                                    </div>
                                    <div class="col-md-5 col-xs-12 col-sm-5 calendar_content_rgt" id="price_box">
                                                <div class="col-md-12 col-sm-12 col-xs-12 calendar_rgt_inner">
                                                        <p><?php echo get_lang_site_key($lang_key,"product_lang","select_date"); ?></p>
                                                        <input type="text" class="input-control" id="selected_dates">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 availability_calendar">
                                                               <p><?php echo get_lang_site_key($lang_key,"product_lang","availability"); ?></p>
                                                               <div class="col-md-12 col-sm-12 col-xs-12 availability_calendar_inner custom_radio">
                                                                       <label class="control control--radio pull-right">
                                                                               <span><?php echo get_lang_site_key($lang_key,"product_lang","available"); ?></span>
                                                                                <input type="radio" name="status" checked="checked" class="statuscheck alwayscheck" value="2">
                                                                                <div class="control__indicator"></div>
                                                                        </label>
                                                               </div>
                                                               <div class="col-md-12 col-sm-12 col-xs-12 availability_calendar_inner blocked_date custom_radio">
                                                                        <label class="control control--radio pull-right">
                                                                                <span><?php echo get_lang_site_key($lang_key,"product_lang","blocked"); ?></span>
                                                                                 <input type="radio" name="status" class="statuscheck" value="1">
                                                                                 <div class="control__indicator"></div>
                                                                         </label>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 calendar_price_base nopadd" id="calendar_price_base">
                                                                        <p><?php echo get_lang_site_key($lang_key,"product_lang","price"); ?></p>
                                                                        <input type="text" class="input-control numbervalidate" id="price_textbox">
                                                                        <span><?php echo $currency_symbol;?></span>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 calendar_save_btn nopadd">
                                                                <ul class="list-inline">
                                                                        <li><a href="javascript:void(0);" id="savecalendar" class="button_new"><?php echo get_lang_site_key($lang_key,"product_lang","save"); ?></a></li>
                                                                        <li><a href="javascript:void(0);" id="closecalendar"  class="back_btn"><?php echo get_lang_site_key($lang_key,"common_lang","cancel"); ?></a></li>
                                                                </ul>
                                                        </div>
                                                        
                                                </div>
                                    </div>
									<div class="col-md-5 col-xs-12 col-sm-5 calendar_content_rgt" id="booked_box"></div>
                            </div>
                    </div>
            </div>
    </section>
	    
<script src="<?php echo base_url();?>js/site/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>js/site/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/flatpickr.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/highlight.pack.js"></script>
<script src="<?php echo base_url();?>js/site/hostlisting_script.js"></script> 
<?php $this->load->view('site/search/footer_search');?>