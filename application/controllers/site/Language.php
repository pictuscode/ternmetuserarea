<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends MY_Controller {
		 
	function __construct(){
        parent::__construct();
		$this->load->helper(array('url','cookie','date','form','email','site_language_helper'));
		$this->load->library(array('form_validation'));		
		
    } 
	
	public function lang_set($lang_key){
		$this->session->set_userdata('pictus_rent_lang_key',$lang_key);
		if(isset($_SERVER['HTTP_REFERER']))
		{
			$remo = $_SERVER['HTTP_REFERER'];
			redirect($remo);
		}
		else
		{
			redirect('');
		}
	}
	
	

	
}
