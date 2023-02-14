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
	<script>
		<?php $key = $this->security->get_csrf_token_name();
		$value = $this->security->get_csrf_hash(); ?>
		var csrf_key = "<?php echo $key; ?>";
		var csrf_value = "<?php echo $value; ?>";
	</script>
    <link href="<?php echo base_url();?>css/site/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/site/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/site/style.css" rel="stylesheet">	
    <link href="<?php echo base_url();?>css/site/developer.css" rel="stylesheet">	
    <link href="<?php echo base_url();?>css/site/sweetalert.css" rel="stylesheet">	
    <link href="<?php echo base_url();?>css/site/autocomplete.css" rel="stylesheet">	
    <link href="<?php echo base_url();?>css/site/jquery-ui.min.css" rel="stylesheet">	
	<script src="<?php echo base_url();?>js/site/jquery-3.1.1.min.js"></script>
	
</head>
<body>
	<header> 

	<?php if($logincheck!=""){?>
				<div class="col-md-12 col-sm-12 col-xs-12 search_header_base custom_header_login_base">
						<div class="logo_toggle custom_header_login_inner">
								<div class="dropdown dropdown_custom">
										<a href="<?php echo base_url();?>" id="dLabel" data-toggle="dropdown" >
											<span class="logo_svg"><img src="<?php echo base_url();?>images/site/logo/<?php echo $this->config->item('site_logo')!=''?$this->config->item('site_logo'):'logo.svg';?>"></span>
											<p><?php echo get_lang_site_key($lang_key,"header_footer_lang","guest"); ?> <span class="dropdown_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.7 6.82"><title>Asset 44</title><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M11.7,1a.37.37,0,0,1-.12.27L6.12,6.7a.36.36,0,0,1-.54,0L.12,1.24A.36.36,0,0,1,.12.7L.7.12a.36.36,0,0,1,.54,0l4.61,4.6,4.6-4.6a.36.36,0,0,1,.54,0l.59.58A.37.37,0,0,1,11.7,1Z" style="fill:#5f5f5f"/></g></g></svg></span></p>
										</a>
										<ul class="dropdown-menu" aria-labelledby="dLabel">
										 <li><a href="<?php echo base_url();?>host_dashboard" >
												<span class="logo_svg"><img src="<?php echo base_url();?>images/site/logo/<?php echo $this->config->item('site_logo')!=''?$this->config->item('site_logo1'):'logo1.svg';?>"></span>
												<p><?php echo get_lang_site_key($lang_key,"header_footer_lang","host"); ?> </p>
											</a></li>
										</ul>
								</div>
							
						</div>
						
						<div class="search_profile_base custom_mobile_device_login">
						<div class="head_account ">
								<ul class="list-inline account_head">	
										<li>
											<div class="dropdown notification_header custom_desktop_bell_icon">
															<span class="notification_icon"  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.35 20.62"><title>Asset 16</title><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M22.11,16.74l-2.84-2.86L19.3,8a7.93,7.93,0,0,0-7.36-8H10.68A8.15,8.15,0,0,0,3.16,8l0,5.91L.19,16.75a.6.6,0,0,0,.43,1l7.18,0a3.37,3.37,0,0,0,3.32,2.79,3.47,3.47,0,0,0,3.38-2.77h7.22a.62.62,0,0,0,.63-.63A.58.58,0,0,0,22.11,16.74ZM11.17,19.37a2.15,2.15,0,0,1-2.08-1.54h4.17A2.23,2.23,0,0,1,11.17,19.37ZM14,16.61l-5.6,0H2.12l2.05-2a.57.57,0,0,0,.18-.43L4.4,8a6.9,6.9,0,0,1,6.88-6.78A6.78,6.78,0,0,1,18.08,8l0,6.15a.54.54,0,0,0,.19.43l2,2Z"/></g></g></svg></span>	
												<?php $this->load->view("site/host/host_notification_box.php");?>
										</div>
                                            
                                        <div class="notification_header custom_mobile_bell_icon">
                                            <a href="<?php echo base_url();?>view_notification"><span class="notification_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.35 20.62"><title>Asset 16</title><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M22.11,16.74l-2.84-2.86L19.3,8a7.93,7.93,0,0,0-7.36-8H10.68A8.15,8.15,0,0,0,3.16,8l0,5.91L.19,16.75a.6.6,0,0,0,.43,1l7.18,0a3.37,3.37,0,0,0,3.32,2.79,3.47,3.47,0,0,0,3.38-2.77h7.22a.62.62,0,0,0,.63-.63A.58.58,0,0,0,22.11,16.74ZM11.17,19.37a2.15,2.15,0,0,1-2.08-1.54h4.17A2.23,2.23,0,0,1,11.17,19.37ZM14,16.61l-5.6,0H2.12l2.05-2a.57.57,0,0,0,.18-.43L4.4,8a6.9,6.9,0,0,1,6.88-6.78A6.78,6.78,0,0,1,18.08,8l0,6.15a.54.54,0,0,0,.19.43l2,2Z"/></g></g></svg></span></a>
                                        </div>
                                            
										</li>	
								        <?php 
										 if($userDetails->row()->photo!='')
											{
												$pro_pic=base_url().'images/site/profile/'.$userDetails->row()->photo;
											}
											else
											{
												$pro_pic=base_url().'images/site/profile/avatar.png';
											}
										?>
								
										<li><div class="dropdown">
										<span class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
											<img class="profile_pic_img_ajax" src="<?php echo $pro_pic;?>">
										</span>
										<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
											<li><a href="<?php echo base_url();?>users/edit"><?php echo get_lang_site_key($lang_key,"header_footer_lang","edit_profile"); ?></a></li>
											<li><a href="<?php echo base_url();?>users/payment"><?php echo get_lang_site_key($lang_key,"header_footer_lang","payment"); ?></a></li>
											<li><a href="<?php echo base_url();?>users/account_settings"><?php echo get_lang_site_key($lang_key,"header_footer_lang","ac_setting"); ?></a></li>
											<li><a href="<?php echo base_url();?>logout"><?php echo get_lang_site_key($lang_key,"header_footer_lang","logout");?></a></li>
										</ul>
									  </div></li>	
			
									
								</ul>
							</div>	
						</div>
						
						<div class="search_bar_base custom_login_search_bar_base">
								<div class="search_bar_inner custom_login_search_bar_inner">
                                    <span class="custom_search_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.53 19.11"><path d="M14.92,13.82l1.44,1.36L19.3,18a.65.65,0,0,1,.16.8.63.63,0,0,1-1,.16L16.62,17.2l-2.5-2.37-.07-.07-.28.25a8.17,8.17,0,0,1-4.07,1.89,8.36,8.36,0,0,1-9.4-6.17A8.6,8.6,0,0,1,0,7.82,8.41,8.41,0,0,1,6.56.21a8.05,8.05,0,0,1,7.88,2.44A8,8,0,0,1,16.6,7,8.49,8.49,0,0,1,15,13.71ZM8.36,15.74l.81-.06.43-.07a6.85,6.85,0,0,0,4.22-2.49,7.11,7.11,0,0,0,1.4-6.51A7.08,7.08,0,0,0,7.29,1.38,6.8,6.8,0,0,0,2.82,4a7.12,7.12,0,0,0-1.28,6.46A7.13,7.13,0,0,0,8.36,15.74Z" style="fill-rule:evenodd"/></svg></span>
										<input type="text" placeholder="<?php echo get_lang_site_key($lang_key,"header_footer_lang","search_placeholder"); ?>" id="search_autocomplete" value="<?php if(isset($city)) echo $city;?>">
								</div>
						</div>	
						<div class="search_tab_base custom_header_login_inner_tabs">
								<div class="list_tab_head custom_login_tabs_head">
												<!-- Nav tabs --><?php  $valid=$this->uri->segment(1);?>
													<div class="tab_for_fixed_position">
															<ul class="nav nav-tabs" role="tablist">
																<li role="presentation" class="<?php if($valid=="wishlist"){  echo "active";}?>"><a href="<?php if($valid!="wishlist"){ echo base_url();?>wishlist<?php } ?>"><?php echo get_lang_site_key($lang_key,"header_footer_lang","saved"); ?> </a></li>
																<li role="presentation" class="<?php if($valid=="trips"){ echo "active";}?>"><a href="<?php echo base_url();?>trips" ><?php echo get_lang_site_key($lang_key,"header_footer_lang","trips");?></a></li>
																<li role="presentation" class="<?php if($valid=="user_inbox"){ echo "active";}?>"><a href="<?php echo base_url();?>user_inbox" ><?php echo get_lang_site_key($lang_key,"header_footer_lang","inbox"); ?></a></li>
															</ul>
													</div>
								
										</div>
						</div>
						
						<div class="search_profile_base custom_desktop_device_login">
						<div class="head_account ">
								<ul class="list-inline account_head">	
										<li>
											<div class="dropdown notification_header custom_desktop_bell_icon">
															<span class="notification_icon"  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.35 20.62"><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M22.11,16.74l-2.84-2.86L19.3,8a7.93,7.93,0,0,0-7.36-8H10.68A8.15,8.15,0,0,0,3.16,8l0,5.91L.19,16.75a.6.6,0,0,0,.43,1l7.18,0a3.37,3.37,0,0,0,3.32,2.79,3.47,3.47,0,0,0,3.38-2.77h7.22a.62.62,0,0,0,.63-.63A.58.58,0,0,0,22.11,16.74ZM11.17,19.37a2.15,2.15,0,0,1-2.08-1.54h4.17A2.23,2.23,0,0,1,11.17,19.37ZM14,16.61l-5.6,0H2.12l2.05-2a.57.57,0,0,0,.18-.43L4.4,8a6.9,6.9,0,0,1,6.88-6.78A6.78,6.78,0,0,1,18.08,8l0,6.15a.54.54,0,0,0,.19.43l2,2Z"/></g></g></svg></span>	
												<?php $this->load->view("site/host/host_notification_box.php");?>
										</div>
                                            
                                        <div class="notification_header custom_mobile_bell_icon">
                                            <a href="<?php echo base_url();?>view_notification"><span class="notification_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.35 20.62"><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><path d="M22.11,16.74l-2.84-2.86L19.3,8a7.93,7.93,0,0,0-7.36-8H10.68A8.15,8.15,0,0,0,3.16,8l0,5.91L.19,16.75a.6.6,0,0,0,.43,1l7.18,0a3.37,3.37,0,0,0,3.32,2.79,3.47,3.47,0,0,0,3.38-2.77h7.22a.62.62,0,0,0,.63-.63A.58.58,0,0,0,22.11,16.74ZM11.17,19.37a2.15,2.15,0,0,1-2.08-1.54h4.17A2.23,2.23,0,0,1,11.17,19.37ZM14,16.61l-5.6,0H2.12l2.05-2a.57.57,0,0,0,.18-.43L4.4,8a6.9,6.9,0,0,1,6.88-6.78A6.78,6.78,0,0,1,18.08,8l0,6.15a.54.54,0,0,0,.19.43l2,2Z"/></g></g></svg></span></a>
                                        </div>
                                            
										</li>	
								        <?php 
										 if($userDetails->row()->photo!='')
											{
												$pro_pic=base_url().'images/site/profile/'.$userDetails->row()->photo;
											}
											else
											{
												$pro_pic=base_url().'images/site/profile/avatar.png';
											}
										?>
								
										<li><div class="dropdown">
										<span class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
											<img class="profile_pic_img_ajax" src="<?php echo $pro_pic;?>">
										</span>
										<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
											<li><a href="<?php echo base_url();?>users/edit"><?php echo get_lang_site_key($lang_key,"header_footer_lang","edit_profile"); ?></a></li>
											<li><a href="<?php echo base_url();?>users/payment"><?php echo get_lang_site_key($lang_key,"header_footer_lang","payment"); ?></a></li>
											<li><a href="<?php echo base_url();?>users/account_settings"><?php echo get_lang_site_key($lang_key,"header_footer_lang","ac_setting"); ?></a></li>
											<li><a href="<?php echo base_url();?>logout"><?php echo get_lang_site_key($lang_key,"header_footer_lang","logout"); ?></a></li>
										</ul>
									  </div></li>	
			
									
								</ul>
							</div>	
						</div>	
				</div>
				
				<?php } else { ?>
				<div class="col-md-12 col-sm-12 col-xs-12 head_base search_header_base custom_header_base">
					<div class="col-md-12 col-sm-12 col-xs-12 logo custom_header_inner">
						
                        <div class="search_custom_mobile custom_logo_base">
                            <div class="logo_img_base logo_toggle custom_logo_image">
                                    <a href="<?php echo base_url();?>" class="logo_img" ><span class="logo_svg"><img src="<?php echo base_url();?>images/site/logo/<?php echo $this->config->item('site_logo')!=''?$this->config->item('site_logo'):'logo.png';?>"></span>   </a>
                            </div>
                            <div class="search_bar_base custom_search_bar_base desktop_search_bar_custom">
                                    <div class="search_bar_inner custom_search_bar_inner">
                                            <span class="custom_search_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.53 19.11"><path d="M14.92,13.82l1.44,1.36L19.3,18a.65.65,0,0,1,.16.8.63.63,0,0,1-1,.16L16.62,17.2l-2.5-2.37-.07-.07-.28.25a8.17,8.17,0,0,1-4.07,1.89,8.36,8.36,0,0,1-9.4-6.17A8.6,8.6,0,0,1,0,7.82,8.41,8.41,0,0,1,6.56.21a8.05,8.05,0,0,1,7.88,2.44A8,8,0,0,1,16.6,7,8.49,8.49,0,0,1,15,13.71ZM8.36,15.74l.81-.06.43-.07a6.85,6.85,0,0,0,4.22-2.49,7.11,7.11,0,0,0,1.4-6.51A7.08,7.08,0,0,0,7.29,1.38,6.8,6.8,0,0,0,2.82,4a7.12,7.12,0,0,0-1.28,6.46A7.13,7.13,0,0,0,8.36,15.74Z" style="fill-rule:evenodd"/></svg></span><input type="text" placeholder="<?php echo get_lang_site_key($lang_key,"header_footer_lang","search_placeholder");?>" id="search_autocomplete" value="<?php if(isset($city)) echo $city;?>">
                                    </div>
                            </div>
                        </div>
                        
                        
                       <nav class="navbar navbar-default custom_navigation_base before_login_custom">
                            <div class="navbar-header custom_navigation_header">
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span> 
                              </button>
                            </div>
                            <div class="collapse navbar-collapse custom_navigation" id="myNavbar">
                              <ul class="list-inline pull-right before_login header_ul nav navbar-nav navbar-right">
                                <li><a href="#" data-toggle="modal" data-target="#signup"><?php echo get_lang_site_key($lang_key,"header_footer_lang","become_tasker"); ?></a></li>
				                <li><a href="#" data-toggle="modal" data-target="#sign_in"><?php echo get_lang_site_key($lang_key,"header_footer_lang","login"); ?></a></li>
								<li><a href="#" data-toggle="modal" data-target="#signup"><?php echo get_lang_site_key($lang_key,"header_footer_lang","sign"); ?></a></li>
                              </ul>
                            </div>
                        </nav>
						
								<!--<ul class="list-inline pull-right before_login header_ul" >
										<li><a href="#" data-toggle="modal" data-target="#signup">Become a Host</a></li>
										<li><a href="#" data-toggle="modal" data-target="#sign_in">Log In</a></li>
										<li><a href="#" data-toggle="modal" data-target="#signup">Sign Up</a></li>
								</ul>-->
								
					</div>
				</div>
				<?php } ?>
				
	</header>