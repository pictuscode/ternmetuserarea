<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(-1);
/**
 * 
 * This controller contains the common functions
 * @author Teamtweaks 
 *
 */

date_default_timezone_set('Asia/Kolkata');
class MY_Controller extends CI_Controller
{
	public $privStatus;
	public $data = array();
	function __construct()
	{
		parent::__construct();
		ob_start();
		$this->data['key'] = $this->security->get_csrf_token_name();
		$this->data['value'] = $this->security->get_csrf_hash();
		//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		$this->load->helper('url');
		$this->load->helper('text');
		$this->load->helper('user_helper');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->load->library('session');
		$this->load->model(array('user_model'));
		$this->load->database();
		$this->db->reconnect();
		define('BASEURL', base_url());
		$this->data['logincheck'] = $this->checkLogin('U');
		$this->data['logcheck'] = $this->checkLogin('U');
		/*fb and gmail*/
		$this->load->library('facebook');
		include_once APPPATH . "libraries/google-api-php-client/Google_Client.php";
		include_once APPPATH . "libraries/google-api-php-client/contrib/Google_Oauth2Service.php";
		$clientId = $this->config->item('gmail_client_id');
		$clientSecret = $this->config->item('gmail_client_secret');
		$redirectUrl = $this->config->item('gmail_redirect_url');
		$gClient = new Google_Client();
		$gClient->setApplicationName('Login to gmtechindia.com');
		$gClient->setClientId($clientId);
		$gClient->setClientSecret($clientSecret);
		$gClient->setRedirectUri($redirectUrl);
		$google_oauthV2 = new Google_Oauth2Service($gClient);
		$this->data['gmail_link'] = $gClient->createAuthUrl();
		$this->data['fb_login'] = $this->facebook->getLoginUrl(array(
			'display' => 'popup',
			'redirect_uri' => base_url('site/user/fb_response'),
			'scope' => array("email")
		));
		/*fb and gmail*/
		if ($this->config->item('site_logo') != '') {
			$this->data['logo'] = base_url() . "images/site/logo/" . $this->config->item('site_logo');
		} else {
			$this->data['logo'] = base_url() . "images/site/logo/logo.png";
		}
		if ($this->checkLogin('U') != '') {
			$this->data['userDetails'] = $this->db->query('select * from ' . USERS . ' where `id`="' . $this->checkLogin('U') . '"');
			$this->data["header_notification"] = $this->user_model->get_host_dashboard_notification($this->checkLogin('U'), 5);
		}
		if ($this->checkLogin('A') != '') {
			$id = $this->checkLogin('A');
			$this->data['total_user_count'] = $this->user_model->get_all_details(USERS, array('group' => '0', 'del_status' => '0'));
			$this->data['total_tasker_count'] = $this->user_model->get_all_details(USERS, array('group' => '1', 'del_status' => '0'));
			$this->data['previllage'] = $this->session->userdata('rentmate_session_prev');
			if ($id == 1) {
				$this->data['prev'] = 1;
			} else {
				$this->data['prev'] = 0;
			}
		}

		if ($this->session->userdata('currency_code') == "") {
			$GeoCurrencyType = $this->currencyCode();
			$currencyArr = $this->user_model->get_all_details(CURRENCY, array('status' => 'Active', 'currency_type' => $GeoCurrencyType));
			if ($currencyArr->num_rows() > 0) {
				$get_default_currency = $currencyArr;
			} else {
				$get_default_currency = $this->user_model->get_all_details(CURRENCY, array('default_currency' => 'Yes'));
			}
			$this->session->set_userdata('currency_code', $get_default_currency->row()->currency_type);
			$this->session->set_userdata('currency_symbol', $get_default_currency->row()->currency_symbols);
			$this->session->set_userdata('currency_rate', $get_default_currency->row()->currency_rate);
		}


		$this->data['lang_key'] = $lang_key 	= $this->session->userdata('pictus_rent_lang_key');
		$lang_data = $this->data['lang_data'] = langdata();
		if (isset($lang_key)) {
			$this->data['lang_key'] = $lang_key = $lang_key;
		} else {
			$lang_datas = langdata_default();
			$this->data['lang_key'] = $lang_key  = $lang_datas[0]['lang_code'];
			$this->session->set_userdata('lang_key', $lang_key);
		}



		$this->data['currency_lists'] = $this->user_model->get_all_details(CURRENCY, array('status' => 'Active'));
		$this->data['currency_code'] = $this->session->userdata('currency_code');
		$this->data['currency_symbol'] = $this->session->userdata('currency_symbol');
		$this->data['currency_rate'] = $this->session->userdata('currency_rate');

		$this->data['cms_row1'] = $this->user_model->get_all_details(CMS, array('status' => 'Active', 'footer_order' => 'row1'));
		$this->data['cms_row2'] = $this->user_model->get_all_details(CMS, array('status' => 'Active', 'footer_order' => 'row2'));
		$this->data['cms_row3'] = $this->user_model->get_all_details(CMS, array('status' => 'Active', 'footer_order' => 'row3'));
		$this->data['admin_currency_symbol'] = "$";
	}

	public function currencyCode()
	{


		$ip = $_SERVER['REMOTE_ADDR'];

		#$ip = '115.118.170.1'; //IND

		#$ip = '146.185.28.59'; //UK

		$host = "http://www.geoplugin.net/php.gp?ip=$ip";

		if (ini_get('allow_url_fopen')) {
			$response = file_get_contents($host, 'r');
		}

		$data = unserialize($response);

		return $data['geoplugin_currencyCode'];
	}

	public function checkLogin($type = '')
	{
		if ($type == 'U') {
			$user_check = $this->user_model->get_all_details(USERS, array('id' => $this->session->userdata('rentpictus_user_id'), 'status' => 'Active'));
			if ($user_check->num_rows() > 0) {
				return $this->session->userdata('rentpictus_user_id');
			} else
				$this->session->unset_userdata('rentpictus_user_id');
		} else if ($type == 'T') {
			return $this->session->userdata('fc_session_temp_id');
		}
	}
}
