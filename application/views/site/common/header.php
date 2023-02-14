<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php if(isset($heading)){ echo $heading!=''?$heading.' - ':'';echo ucfirst($this->config->item('site_name'));} else { echo ucfirst($this->config->item('site_name')); }?></title>
	<link rel="alternate" href="<?php echo base_url();?>">
    <meta content="<?php echo $this->config->item('site_name');?>" name="author">
	<meta content="<?php echo $this->config->item('meta_description');?>" name="description">
	<meta content="<?php echo $this->config->item('meta_keywords');?>" name="keywords">
	<meta property="fb:app_id" content="<?php echo $this->config->item('fb_app_id');?>">
	<meta property="og:site_name" content="<?php echo ucfirst($this->config->item('site_name'));?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo base_url();?>">
	<meta property="og:title" content="<?php echo $this->config->item('meta_title');?>">
	<meta property="og:description" content="<?php echo $this->config->item('meta_description');?>">
	<meta property="og:image" content="<?php echo base_url();?>images/site/logo/<?php echo $this->config->item('site_logo')!=''?$this->config->item('site_logo'):'logo.png';?>">
	<meta property="og:locale" content="en_US">
    <meta name="twitter:widgets:csp" content="on">
	<meta name="twitter:url" content="<?php echo base_url();?>">
	<meta name="twitter:description" content="<?php echo $this->config->item('meta_description');?>">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="<?php echo $this->config->item('meta_title');?>">
	<meta name="twitter:site" content="<?php echo $this->config->item('twitter_name');?>">
	<meta name="twitter:app:id" content="<?php echo $this->config->item('twitter_app_id');?>">
	<meta name="twitter:app:name:iphone" content="<?php echo ucfirst($this->config->item('site_name'));?>">
	<meta name="twitter:app:name:ipad" content="<?php echo ucfirst($this->config->item('site_name'));?>">
	<meta name="twitter:app:name:googleplay" content="<?php echo ucfirst($this->config->item('site_name'));?>">
	<meta name="twitter:app:id:googleplay" content="<?php echo base_url();?>">
	<meta name="twitter:app:url:iphone" content="<?php echo base_url();?>">
	<meta name="twitter:app:url:ipad" content="<?php echo base_url();?>">
	<meta name="twitter:app:url:googleplay" content="<?php echo base_url();?>">
	<link rel="shortcut icon" sizes="76x76" type="image/x-icon" href="<?php echo base_url();?>images/site/logo/<?php echo $this->config->item('site_favicon')!=''?$this->config->item('site_favicon'):'favicon.ico';?>" />
	<script>
		var baseurl="<?php echo base_url();?>"; 
		var popup_error_type="<?php echo $this->session->flashdata('error_type');?>"; 
		var popup_message="<?php echo $this->session->flashdata('alert_message');?>";
		var guest="<?php echo get_lang_site_key($lang_key,"common_lang","guest"); ?>";
		var required_password="<?php echo get_lang_site_key($lang_key,"common_lang","required_password"); ?>";
		var length_password="<?php echo get_lang_site_key($lang_key,"common_lang","length_password"); ?>";
		var required_mail="<?php echo get_lang_site_key($lang_key,"common_lang","required_mail"); ?>";
		var oops="<?php echo get_lang_site_key($lang_key,"common_lang","oops"); ?>";
		var success="<?php echo get_lang_site_key($lang_key,"common_lang","success"); ?>";
		var error="<?php echo get_lang_site_key($lang_key,"common_lang","error"); ?>";
		var login_success="<?php echo get_lang_site_key($lang_key,"common_lang","login_success"); ?>";
		var valid_mail="<?php echo get_lang_site_key($lang_key,"common_lang","valid_mail"); ?>";
		var forget_password_success="<?php echo get_lang_site_key($lang_key,"common_lang","forget_password_success"); ?>";
		var password_reset="<?php echo get_lang_site_key($lang_key,"common_lang","password_reset"); ?>";
		var no_email="<?php echo get_lang_site_key($lang_key,"common_lang","no_email"); ?>";
		var valid_dob="<?php echo get_lang_site_key($lang_key,"common_lang","valid_dob"); ?>";
		var name_albhabets="<?php echo get_lang_site_key($lang_key,"common_lang","name_albhabets"); ?>";
		var required_first_name="<?php echo get_lang_site_key($lang_key,"common_lang","required_first_name"); ?>";
		var first_name_caps="<?php echo get_lang_site_key($lang_key,"common_lang","first_name_caps"); ?>";
		var required_lastname="<?php echo get_lang_site_key($lang_key,"common_lang","required_lastname"); ?>";
		var last_name_albha="<?php echo get_lang_site_key($lang_key,"common_lang","last_name_albha"); ?>";
		var required_password="<?php echo get_lang_site_key($lang_key,"common_lang","required_password"); ?>";
		var strong_password="<?php echo get_lang_site_key($lang_key,"common_lang","strong_password"); ?>";
		var already_exist="<?php echo get_lang_site_key($lang_key,"common_lang","already_exist"); ?>";
		var register_mail_exist="<?php echo get_lang_site_key($lang_key,"common_lang","register_mail_exist"); ?>";
		var create_success="<?php echo get_lang_site_key($lang_key,"common_lang","create_success"); ?>";
		var good_job="<?php echo get_lang_site_key($lang_key,"common_lang","good_job"); ?>";
		var required_dob="<?php echo get_lang_site_key($lang_key,"common_lang","required_dob"); ?>";
		var all_msg="<?php echo get_lang_site_key($lang_key,"common_lang","all_msg"); ?>";
		var read_msg="<?php echo get_lang_site_key($lang_key,"common_lang","read_msg"); ?>";
		var unread_msg="<?php echo get_lang_site_key($lang_key,"common_lang","unread_msg"); ?>";
		var all_travel_msg="<?php echo get_lang_site_key($lang_key,"common_lang","all_travel_msg"); ?>";
		var good_job="<?php echo get_lang_site_key($lang_key,"common_lang","good_job"); ?>";
		var required_dob="<?php echo get_lang_site_key($lang_key,"common_lang","required_dob"); ?>";
        var sun="<?php echo get_lang_site_key($lang_key,"common_lang","sun"); ?>";
        var mon="<?php echo get_lang_site_key($lang_key,"common_lang","mon"); ?>";
        var tue="<?php echo get_lang_site_key($lang_key,"common_lang","tue"); ?>";
        var wed="<?php echo get_lang_site_key($lang_key,"common_lang","wed"); ?>";
        var thu="<?php echo get_lang_site_key($lang_key,"common_lang","thu"); ?>";
        var fri="<?php echo get_lang_site_key($lang_key,"common_lang","fri"); ?>";
        var sat="<?php echo get_lang_site_key($lang_key,"common_lang","sat"); ?>";
        var january="<?php echo get_lang_site_key($lang_key,"common_lang","january"); ?>";
        var february="<?php echo get_lang_site_key($lang_key,"common_lang","february"); ?>";
        var march="<?php echo get_lang_site_key($lang_key,"common_lang","march"); ?>";
        var april="<?php echo get_lang_site_key($lang_key,"common_lang","april"); ?>";
        var may="<?php echo get_lang_site_key($lang_key,"common_lang","may"); ?>";
        var june="<?php echo get_lang_site_key($lang_key,"common_lang","june"); ?>";
        var july="<?php echo get_lang_site_key($lang_key,"common_lang","july"); ?>";
        var august="<?php echo get_lang_site_key($lang_key,"common_lang","august"); ?>";
        var september="<?php echo get_lang_site_key($lang_key,"common_lang","september"); ?>";
        var october="<?php echo get_lang_site_key($lang_key,"common_lang","october"); ?>";
        var november="<?php echo get_lang_site_key($lang_key,"common_lang","november"); ?>";
        var december="<?php echo get_lang_site_key($lang_key,"common_lang","december"); ?>";
		var booked_successfully="<?php echo get_lang_site_key($lang_key,"common_lang","booked_successfully"); ?>";
		var want_remove_list="<?php echo get_lang_site_key($lang_key,"common_lang","want_remove_list"); ?>";
		var yes_remove="<?php echo get_lang_site_key($lang_key,"common_lang","yes_remove"); ?>";
		var cancel="<?php echo get_lang_site_key($lang_key,"common_lang","cancel"); ?>";
		var enquiry_send_success="<?php echo get_lang_site_key($lang_key,"common_lang","enquiry_send_success"); ?>";
		var try_again="<?php echo get_lang_site_key($lang_key,"common_lang","try_again"); ?>";
		var choose_date="<?php echo get_lang_site_key($lang_key,"common_lang","choose_date"); ?>";
		var list_send_admin="<?php echo get_lang_site_key($lang_key,"common_lang","list_send_admin"); ?>";
		var soming_went_wrong="<?php echo get_lang_site_key($lang_key,"common_lang","soming_went_wrong"); ?>";
		var request_accept_success="<?php echo get_lang_site_key($lang_key,"common_lang","request_accept_success"); ?>";
		var request_declined_success="<?php echo get_lang_site_key($lang_key,"common_lang","request_declined_success"); ?>";
		var choose_roomand_view_rating="<?php echo get_lang_site_key($lang_key,"common_lang","choose_roomand_view_rating"); ?>";
		var wrong_otp="<?php echo get_lang_site_key($lang_key,"common_lang","wrong_otp"); ?>";
		var success_profile_update="<?php echo get_lang_site_key($lang_key,"common_lang","success_profile_update"); ?>";
		var choose_image_only="<?php echo get_lang_site_key($lang_key,"common_lang","choose_image_only"); ?>";
		var verification_mail="<?php echo get_lang_site_key($lang_key,"common_lang","verification_mail"); ?>";
		var choose_country="<?php echo get_lang_site_key($lang_key,"common_lang","choose_country"); ?>";
		var verfy_document="<?php echo get_lang_site_key($lang_key,"common_lang","verfy_document"); ?>";
		var plese_upload_frond_back="<?php echo get_lang_site_key($lang_key,"common_lang","plese_upload_frond_back"); ?>";
		var are_you_sure="<?php echo get_lang_site_key($lang_key,"common_lang","are_you_sure"); ?>";
		var deactivate="<?php echo get_lang_site_key($lang_key,"common_lang","deactivate"); ?>";
		var yes="<?php echo get_lang_site_key($lang_key,"common_lang","yes"); ?>";
		var no="<?php echo get_lang_site_key($lang_key,"common_lang","no"); ?>";
		var feedback_success_save="<?php echo get_lang_site_key($lang_key,"common_lang","feedback_success_save"); ?>";
		var already_review_book="<?php echo get_lang_site_key($lang_key,"common_lang","already_review_book"); ?>";
		var please_give_rating="<?php echo get_lang_site_key($lang_key,"common_lang","please_give_rating"); ?>";
		var you_want_remove_home="<?php echo get_lang_site_key($lang_key,"common_lang","you_want_remove_home"); ?>";
		var no_avalible_list="<?php echo get_lang_site_key($lang_key,"common_lang","no_avalible_list"); ?>";
		var wish_list_create_success="<?php echo get_lang_site_key($lang_key,"common_lang","wish_list_create_success"); ?>";
		var want_cancel_booking="<?php echo get_lang_site_key($lang_key,"common_lang","want_cancel_booking"); ?>";
		var refundable_amount="<?php echo get_lang_site_key($lang_key,"common_lang","refundable_amount"); ?>";
		var yes_cancel_it="<?php echo get_lang_site_key($lang_key,"common_lang","yes_cancel_it"); ?>";
		var cancellation_time_expired="<?php echo get_lang_site_key($lang_key,"common_lang","cancellation_time_expired"); ?>";
		var all_listing="<?php echo get_lang_site_key($lang_key,"common_lang","all_listing"); ?>";
		var all_inprogress="<?php echo get_lang_site_key($lang_key,"common_lang","all_inprogress"); ?>";
		var all_listed="<?php echo get_lang_site_key($lang_key,"common_lang","all_listed"); ?>";
		var choose_property_type="<?php echo get_lang_site_key($lang_key,"common_lang","choose_property_type"); ?>";
		var no_wish_list="<?php echo get_lang_site_key($lang_key,"common_lang","no_wish_list"); ?>";
		var entire_place="<?php echo get_lang_site_key($lang_key,"common_lang","entire_place"); ?>";
		var shared_room="<?php echo get_lang_site_key($lang_key,"common_lang","shared_room"); ?>";
		var private_room="<?php echo get_lang_site_key($lang_key,"common_lang","private_room"); ?>";
		var bed_lang="<?php echo get_lang_site_key($lang_key,"common_lang","bed"); ?>";
		var beds_lang="<?php echo get_lang_site_key($lang_key,"common_lang","beds"); ?>";
		var lang_reviews="<?php echo get_lang_site_key($lang_key,"common_lang","reviews"); ?>";
		var s="<?php echo get_lang_site_key($lang_key,"common_lang","s"); ?>";
		var apply="<?php echo get_lang_site_key($lang_key,"common_lang","apply"); ?>";
		var clear="<?php echo get_lang_site_key($lang_key,"common_lang","clear"); ?>";
		var show_less_amenities="<?php echo get_lang_site_key($lang_key,"common_lang","show_less_amenities"); ?>";
		var show_more_amenities="<?php echo get_lang_site_key($lang_key,"common_lang","show_more_amenities"); ?>";
		var save="<?php echo get_lang_site_key($lang_key,"common_lang","save"); ?>";
		var saved="<?php echo get_lang_site_key($lang_key,"common_lang","saved"); ?>";
		var pay_creditcard="<?php echo get_lang_site_key($lang_key,"common_lang","pay_creditcard"); ?>";
		var pay_paypal="<?php echo get_lang_site_key($lang_key,"common_lang","pay_paypal"); ?>";
		var pay="<?php echo get_lang_site_key($lang_key,"common_lang","pay"); ?>";
		var require_card_number="<?php echo get_lang_site_key($lang_key,"common_lang","require_card_number"); ?>";
		var require_card_month="<?php echo get_lang_site_key($lang_key,"common_lang","require_card_month"); ?>";
		var require_card_year="<?php echo get_lang_site_key($lang_key,"common_lang","require_card_year"); ?>";
		var require_cvv="<?php echo get_lang_site_key($lang_key,"common_lang","require_cvv"); ?>";
		var no_trips="<?php echo get_lang_site_key($lang_key,"common_lang","no_trips"); ?>";
		var all_unead="<?php echo get_lang_site_key($lang_key,"common_lang","all_unead"); ?>";
		var less_notification="<?php echo get_lang_site_key($lang_key,"common_lang","less_notification"); ?>";
		var show_more_notification="<?php echo get_lang_site_key($lang_key,"common_lang","show_more_notification"); ?>";
		var require_where_live="<?php echo get_lang_site_key($lang_key,"common_lang","require_where_live"); ?>";
		var require_about_you="<?php echo get_lang_site_key($lang_key,"common_lang","require_about_you"); ?>";
		var rquired_location="<?php echo get_lang_site_key($lang_key,"common_lang","rquired_location"); ?>";
		var required_payee_name="<?php echo get_lang_site_key($lang_key,"common_lang","required_payee_name"); ?>";
		var require_ifsc="<?php echo get_lang_site_key($lang_key,"common_lang","require_ifsc"); ?>";
		var required_payout_account="<?php echo get_lang_site_key($lang_key,"common_lang","required_payout_account"); ?>";
		var require_bank_name="<?php echo get_lang_site_key($lang_key,"common_lang","require_bank_name"); ?>";
		var require_paypal_email="<?php echo get_lang_site_key($lang_key,"common_lang","require_paypal_email"); ?>";
		var crt_current_password="<?php echo get_lang_site_key($lang_key,"common_lang","crt_current_password"); ?>";
		var wrong_current_password="<?php echo get_lang_site_key($lang_key,"common_lang","wrong_current_password"); ?>";
		var require_new_password="<?php echo get_lang_site_key($lang_key,"common_lang","require_new_password"); ?>";
		var same_password_current_new="<?php echo get_lang_site_key($lang_key,"common_lang","same_password_current_new"); ?>";
		var password_at_least5="<?php echo get_lang_site_key($lang_key,"common_lang","password_at_least5"); ?>";
		var required_confirm_password="<?php echo get_lang_site_key($lang_key,"common_lang","required_confirm_password"); ?>";
		var require_same_password="<?php echo get_lang_site_key($lang_key,"common_lang","require_same_password"); ?>";
		var password_uppercase="<?php echo get_lang_site_key($lang_key,"common_lang","password_uppercase"); ?>";
		var deactivate_success="<?php echo get_lang_site_key($lang_key,"common_lang","deactivate_success"); ?>";
		var min_night_high_max_night="<?php echo get_lang_site_key($lang_key,"common_lang","min_night_high_max_night"); ?>";
		var dates="<?php echo get_lang_site_key($lang_key,"common_lang","dates"); ?>";
		var jan="<?php echo get_lang_site_key($lang_key,"common_lang","jan"); ?>";
		var feb="<?php echo get_lang_site_key($lang_key,"common_lang","feb"); ?>";
		var mar="<?php echo get_lang_site_key($lang_key,"common_lang","mar"); ?>";
		var apr="<?php echo get_lang_site_key($lang_key,"common_lang","apr"); ?>";
		var may="<?php echo get_lang_site_key($lang_key,"common_lang","may"); ?>";
		var jun="<?php echo get_lang_site_key($lang_key,"common_lang","jun"); ?>";
		var aug="<?php echo get_lang_site_key($lang_key,"common_lang","aug"); ?>";
		var jul="<?php echo get_lang_site_key($lang_key,"common_lang","jul"); ?>";
		var sep="<?php echo get_lang_site_key($lang_key,"common_lang","sep"); ?>";
		var oct="<?php echo get_lang_site_key($lang_key,"common_lang","oct"); ?>";
		var nov="<?php echo get_lang_site_key($lang_key,"common_lang","nov"); ?>";
		var dec="<?php echo get_lang_site_key($lang_key,"common_lang","dec"); ?>";
		var require_request_msg="<?php echo get_lang_site_key($lang_key,"common_lang","require_request_msg"); ?>";
		var requre_terms_condtion="<?php echo get_lang_site_key($lang_key,"common_lang","requre_terms_condtion"); ?>";
		var require_feedback="<?php echo get_lang_site_key($lang_key,"common_lang","require_feedback"); ?>";
		var guests="<?php echo get_lang_site_key($lang_key,"product_lang","guests"); ?>";
		var currency_rate="<?php echo $currency_rate ?>";
		var currency_symbol="<?php echo $currency_symbol ?>";




	</script>
    <link href="<?php echo base_url();?>css/site/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/site/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/site/style.css" rel="stylesheet">	
    <link href="<?php echo base_url();?>css/site/developer.css" rel="stylesheet">	
    <link href="<?php echo base_url();?>css/site/sweetalert.css" rel="stylesheet">	
    <link href="<?php echo base_url();?>css/site/autocomplete.css" rel="stylesheet">	
	<script src="<?php echo base_url();?>js/site/jquery-3.1.1.min.js"></script>
	<script>
		<?php $key = $this->security->get_csrf_token_name();
		$value = $this->security->get_csrf_hash(); ?>
		var csrf_key = "<?php echo $key; ?>";
		var csrf_value = "<?php echo $value; ?>";
	</script>
</head>
<body>

	<header>    <?php if($logincheck==""){?>
				<div class="col-md-12 col-sm-12 col-xs-12 head_base custom_head_base">
					<div class="col-md-12 col-sm-12 col-xs-12 logo custom_head_navigation">
                        
                        <nav class="navbar navbar-default custom_header_navbar">
                              <div class="container-fluid">
                                <div class="navbar-header">
                                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span> 
                                      </button>
                                    <div class="logo_img_base navbar-brand custom_header_navigation_brand">
                                        <a href="<?php echo base_url();?>" class="logo_img" ><span class="logo_svg"><img src="<?php echo base_url();?>images/site/logo/<?php echo $this->config->item('site_logo')!=''?$this->config->item('site_logo'):'logo.svg';?>"></span>  </a>
                                        <!--<span class="icon_menu"><img src="<?php echo base_url();?>images/site/see_all.png"></span>-->
                                    </div>
                                </div>
                                <div class="collapse navbar-collapse custom_header_navigation_right_base" id="myNavbar">
                                    <ul class="nav navbar-nav navbar-right custom_header_navigation_right">
                                      <li><a href="#" data-toggle="modal" data-target="#signup"><?php echo get_lang_site_key($lang_key,"header_footer_lang","become_tasker");  ?></a></li>
                                      <li><a href="#" data-toggle="modal" data-target="#sign_in"><?php echo get_lang_site_key($lang_key,"header_footer_lang","login");  ?></a></li>
                                      <li><a href="#" data-toggle="modal" data-target="#signup"><?php echo get_lang_site_key($lang_key,"header_footer_lang","sign");  ?></a></li>
                                    </ul>
                                  </div>
                              </div>
                            </nav>
					</div>
				</div>
				<?php } else { 
				            if($userDetails->row()->photo!='')
							{
								$pro_pic=base_url().'images/site/profile/'.$userDetails->row()->photo;
							}
							else
							{
								$pro_pic=base_url().'images/site/profile/avatar.png';
							}?>
				<div class="col-md-12 col-sm-12 col-xs-12 head_base head_3 after_login custom_after_login_navigation_base">
					<div class="col-md-12 col-sm-12 col-xs-12 logo custom_after_login_navigation">
                        <nav class="navbar navbar-default custom_after_header_navbar">
                              <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span> 
                                    </button>
                                    <div class="logo_img_base navbar-brand custom_after_header_navigation_brand">
                                        <a href="<?php echo base_url();?>" class="logo_img" ><span class="logo_svg"><img src="<?php echo base_url();?>images/site/logo/<?php echo $this->config->item('site_logo')!=''?$this->config->item('site_logo'):'logo.png';?>"></span></a>
                                            <!--<span class="icon_menu"><img src="<?php echo base_url();?>images/site/see_all.png"></span>-->
                                    </div>
                                    <!--<div class="search_head3">
                                            <input type="text" placeholder="search">
                                    </div>-->
                                </div>
                                <div class="collapse navbar-collapse custom_header_after_navigation_right_base custom_header_base" id="myNavbar">
                                    <ul class="nav navbar-nav navbar-right custom_header_after_navigation_right before_login header_ul custom_after_login">
                                       <li class="dropdown"><a href="#" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php echo get_lang_site_key($lang_key,"header_footer_lang","host");  ?> 
                                       <span class="custom_caret_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.7 6.82"><title>Asset 15</title><path d="M11.7,1a.37.37,0,0,1-.12.27L6.12,6.7a.37.37,0,0,1-.54,0L.12,1.24A.37.37,0,0,1,.12.7L.7.12a.37.37,0,0,1,.54,0L5.85,4.72,10.45.12a.37.37,0,0,1,.54,0l.59.59A.37.37,0,0,1,11.7,1Z" style="fill:#5f5f5f"/></svg></span></a>
                                       <span class="green_notify custom_host_icon"><i class="fa fa-circle" aria-hidden="true"></i></span>
                                        <ul class="dropdown-menu custom_dropdown_toggle" aria-labelledby="dropdownMenu1">
											<li><a href="<?php echo base_url();?>host_dashboard"><?php  echo get_lang_site_key($lang_key,"header_footer_lang","dashboard"); ?></a></li>
											<li><a href="<?php echo base_url();?>calendar"><?php echo get_lang_site_key($lang_key,"header_footer_lang","calendar");?></a></li>
											<li><a href="<?php echo base_url();?>listings"><?php echo get_lang_site_key($lang_key,"header_footer_lang","listing"); ?></a></li>
											<li><a href="<?php echo base_url();?>stats"><?php echo get_lang_site_key($lang_key,"header_footer_lang","stats"); ?></a></li>
											<li><a href="<?php echo base_url();?>add_listing"><?php echo get_lang_site_key($lang_key,"header_footer_lang","list_your_space"); ?></a></li>
										</ul>	
                                      </li>  
                                     <li><a href="<?php echo base_url();?>trips"><?php echo get_lang_site_key($lang_key,"header_footer_lang","trips"); ?>  </a></li>
                                     <li><a href="<?php echo base_url();?>inbox" ><?php echo get_lang_site_key($lang_key,"header_footer_lang","inbox"); ?></a> <span class="green_notify custom_message_icon"><i  class="fa fa-circle" aria-hidden="true"></i> </span></li>
                                        
                                     <li class="profile_img_head dropdown custom_profile_login"><a href="#" class="dropdown-toggle custom_log" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><img class="profile_pic_img_ajax" src="<?php echo $pro_pic;?>"><span class="custom_caret_icon custom_login_caret"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.7 6.82"><path d="M11.7,1a.37.37,0,0,1-.12.27L6.12,6.7a.37.37,0,0,1-.54,0L.12,1.24A.37.37,0,0,1,.12.7L.7.12a.37.37,0,0,1,.54,0L5.85,4.72,10.45.12a.37.37,0,0,1,.54,0l.59.59A.37.37,0,0,1,11.7,1Z" style="fill:#5f5f5f"/></svg></span></a>
                                        <ul class="dropdown-menu custom_dropdown_toggle" aria-labelledby="dropdownMenu2">
											<li><a href="<?php echo base_url();?>users/edit"><?php echo get_lang_site_key($lang_key,"header_footer_lang","edit_profile"); ?></a></li>
											<li><a href="<?php echo base_url();?>users/payment"><?php echo get_lang_site_key($lang_key,"header_footer_lang","payment"); ?></a></li>
											<li><a href="<?php echo base_url();?>users/account_settings"><?php echo get_lang_site_key($lang_key,"header_footer_lang","ac_setting"); ?></a></li>
											<li><a href="<?php echo base_url();?>logout"><?php echo get_lang_site_key($lang_key,"header_footer_lang","logout"); ?></a></li>
										</ul>	
                                      </li>  
                                    </ul>
                                  </div>
                              </div>
                            </nav>
                    <!--<div class="logo_img_base">
                            <a href="<?php echo base_url();?>" class="logo_img" ><span class="logo_svg"><img src="<?php echo base_url();?>images/site/logo/<?php echo $this->config->item('site_logo')!=''?$this->config->item('site_logo'):'logo.png';?>"></span></a>
								<span class="icon_menu"><img src="<?php echo base_url();?>images/site/see_all.png"></span>
                        </div>-->
						<!--<div class="search_head3">
								<input type="text" placeholder="search">
						</div>-->
						
						<!--<ul class="list-inline pull-right before_login header_ul" >
								<li class="dropdown"><a href="#" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Host</a><span class="green_notify"><i class="fa fa-circle" aria-hidden="true"></i> </span>
									   <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
											<li><a href="<?php echo base_url();?>host_dashboard">Dashboard</a></li>
											<li><a href="<?php echo base_url();?>calendar">Calendar</a></li>
											<li><a href="<?php echo base_url();?>listings">Listing</a></li>
											<li><a href="<?php echo base_url();?>stats">Stats</a></li>
											<li><a href="<?php echo base_url();?>add_listing">List your space</a></li>
										</ul>									
								 </li>
								<li><a href="<?php echo base_url();?>trips">Trips  </a></li>
								<li><a href="<?php echo base_url();?>inbox" >Messages</a> <span class="green_notify"><i class="fa fa-circle" aria-hidden="true"></i> </span></li>
								<li><a href="#"> Help</a></li>
								<li class="profile_img_head dropdown">
								   <a href="#" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								     <img class="profile_pic_img_ajax" src="<?php echo $pro_pic;?>"> </a>
									  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
											<li><a href="<?php echo base_url();?>users/edit">Edit Profile</a></li>
											<li><a href="<?php echo base_url();?>users/payment">Payments</a></li>
											<li><a href="<?php echo base_url();?>users/account_settings">Account Settings</a></li>
											<li><a href="<?php echo base_url();?>logout">Log Out</a></li>
									  </ul>
								  
								</li>
						</ul>-->
						
					</div>
				</div>
				<?php } ?>
</header>
