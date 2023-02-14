<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('cookie', 'date', 'form', 'email', 'user_helper', 'site_language_helper'));
		$this->load->library(array('form_validation', 'session'));
		$this->load->model('user_model');
		$this->load->model('mail_model');
	}

	public function user_login()
	{
		$this->load->library('user_agent');
		$this->session->set_userdata('referrer_url', $this->agent->referrer());
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
		$this->data['heading'] = "User Login";
		$this->data['gmail_link'] = $gClient->createAuthUrl();
		$this->data['fb_login'] = $this->facebook->getLoginUrl(array(
			'display' => 'popup',
			'redirect_uri' => base_url('site/user/fb_response'),
			'scope' => array("email")
		));
		$this->load->view('site/user/user_login', $this->data);
	}
	public function user_signup()
	{
		$this->data['heading'] = "User Signup";
		$this->load->view('site/user/user_signup', $this->data);
	}
	public function signup_process()
	{
		$email = $this->input->post('email');
		$t = count($this->user_model->get_single_details(USERS, array('id'), array('email' => $email))->result());
		if ($t <= 0) {
			$_POST['password'] = md5($_POST['password']);
			$t = $this->user_model->simple_insert(USERS, $_POST);
			$checkUser = $this->user_model->get_all_details(USERS, array('email' => $email));

			$datestring = "%Y-%m-%d %h:%i:%s";
			$time = time();
			$newdata = array(
				'last_login_date' => mdate($datestring, $time),
				'last_login_ip' => $this->input->ip_address()
			);
			$condition = array(
				'id' => $checkUser->row()->id
			);
			$this->user_model->update_details(USERS, $newdata, $condition);

			$t1['result'] = 'success';
		} else {
			$t1['result'] = 'error';
		}
		$t1['redirecturl'] = '';

		echo json_encode($t1);
	}
	public function check_email()
	{
		$email = $this->input->post('email');
		$t = count($this->user_model->get_single_details(USERS, array('id'), array('email' => $email))->result());
		if ($t <= 0) {
			echo "true";
		} else {
			echo "false";
		}
	}
	public function check_email_update()
	{
		$email = $this->input->post('email');
		$id = $this->checkLogin("U");
		$t = count($this->user_model->get_single_details(USERS, array('id'), array('email' => $email, 'id!=' => $id))->result());
		if ($t <= 0) {
			echo "true";
		} else {
			echo "false";
		}
	}

	public function logout()
	{
		$datestring = "%Y-%m-%d %h:%i:%s";
		$time = time();
		$newdata = array(
			'last_logout_date' => mdate($datestring, $time)
		);
		$condition = array(
			'id' => $this->checkLogin('U')
		);
		$this->user_model->update_details(USERS, $newdata, $condition);
		redirect(base_url());
	}

	public function login_process()
	{

		$this->load->library('user_agent');
		$this->session->set_userdata('referrer_url', $this->agent->referrer());
		$email = $this->input->post('login_email');
		$pwd = md5($this->input->post('login_password'));
		$condition = array(
			'email' => $email,
			'password' => $pwd,
			'status' => 'Active'
		);
		$checkUser = $this->user_model->get_all_details(USERS, $condition);
		if ($checkUser->num_rows() == '1') {

			$datestring = "%Y-%m-%d %h:%i:%s";
			$time = time();
			$newdata = array(
				'last_login_date' => mdate($datestring, $time),
				'last_login_ip' => $this->input->ip_address()
			);
			$condition = array(
				'id' => $checkUser->row()->id
			);
			$this->user_model->update_details(USERS, $newdata, $condition);
			$returnStr['tasker_steps_pending_redirect'] = "";
			$returnStr['status'] = 1;
		} else {
			$condition = array('email' => $email, 'status' => 'Inactive');
			$checkUser1 = $this->user_model->get_all_details(USERS, $condition);
			if ($checkUser1->num_rows() == '1') {
				$returnStr['message'] = get_lang_site_key($this->data['lang_key'], "home_lang", "account_inactive");
				$returnStr['status'] = 2;
			} else {
				$returnStr['message'] = get_lang_site_key($this->data['lang_key'], "home_lang", "invalid_login");
				$returnStr['status'] = 3;
			}
		}
		$returnStr['redirecturl'] = '';

		if ($this->session->userdata('referrer_url')) {
			$redirect_back = $this->session->userdata('referrer_url');
			$this->session->unset_userdata('referrer_url');
			$returnStr['redirecturl'] = $redirect_back;
		}


		echo json_encode($returnStr);
	}

	public function fb_response()
	{

		$this->load->library('facebook');
		$user = $this->facebook->getUser();


		if ($user) {
			try {
				$user_profile = $this->facebook->api('/me/?fields=email,name,id');
				$email = $user_profile['email'];

				if ($email == "") {
					$this->session->set_flashdata('alert_message', get_lang_site_key($this->data['lang_key'], "home_lang", "not_email_fb") . '...');
					$this->session->set_flashdata('error_type', 'error');
					redirect(base_url());
				} else {
					$t = count($this->user_model->get_single_details(USERS, array('email'), array('email' => $user_profile['email']))->result());
					if ($t <= 0) {

						$filename = now() . rand() . ".jpg";
						$image = file_get_contents("https://graph.facebook.com/" . $user_profile['id'] . "/picture?type=large");
						file_put_contents("images/site/profile/" . $filename, $image);
						$dataarray = array('first_name' => $user_profile['name'], 'email' => $user_profile['email'], 'photo' => $filename, 'facebook' => $user_profile['id']);
						$t = $this->user_model->simple_insert(USERS, $dataarray);
						$checkUser = $this->user_model->get_all_details(USERS, array('email' => $email));

						$datestring = "%Y-%m-%d %h:%i:%s";
						$time = time();
						$newdata = array(
							'last_login_date' => mdate($datestring, $time),
							'last_login_ip' => $this->input->ip_address()
						);
						$condition = array(
							'id' => $checkUser->row()->id
						);
						$this->user_model->update_details(USERS, $newdata, $condition);


						redirect(base_url());
					} else {
						$checkUser = $this->user_model->get_all_details(USERS, array('email' => $email));
						if ($checkUser->row()->status == "Active") {
							$datestring = "%Y-%m-%d %h:%i:%s";
							$time = time();
							$newdata = array(
								'last_login_date' => mdate($datestring, $time),
								'last_login_ip' => $this->input->ip_address()
							);
							$condition = array(
								'id' => $checkUser->row()->id
							);
							$this->user_model->update_details(USERS, $newdata, $condition);
							redirect(base_url());
						} else {
							$this->session->set_flashdata('alert_message', get_lang_site_key($this->data['lang_key'], "home_lang", "account_inactive") . '...');
							$this->session->set_flashdata('error_type', 'error');
							redirect(base_url());
						}
					}
				}
			} catch (FacebookApiException $e) {
				$user = null;
			}
		}
	}
	public function google_response()
	{

		include_once APPPATH . "libraries/google-api-php-client/Google_Client.php";
		include_once APPPATH . "libraries/google-api-php-client/contrib/Google_Oauth2Service.php";
		$clientId = $this->config->item('gmail_client_id');
		$clientSecret = $this->config->item('gmail_client_secret');
		$redirectUrl = $this->config->item('gmail_redirect_url');
		$gClient = new Google_Client();
		$gClient->setApplicationName('Login to service rabbit');
		$gClient->setClientId($clientId);
		$gClient->setClientSecret($clientSecret);
		$gClient->setRedirectUri($redirectUrl);
		$google_oauthV2 = new Google_Oauth2Service($gClient);
		if (isset($_GET['code'])) {
			$gClient->authenticate();
			$this->session->set_userdata('token', $gClient->getAccessToken());
			redirect($redirectUrl);
		}

		$token = $this->session->userdata('token');
		if (!empty($token)) {
			$gClient->setAccessToken($token);
		}

		if ($gClient->getAccessToken()) {
			$userProfile = $google_oauthV2->userinfo->get();
			$userData['oauth_provider'] = 'google';
			$userData['oauth_uid'] = $userProfile['id'];
			$userData['first_name'] = $userProfile['given_name'];
			$userData['last_name'] = $userProfile['family_name'];
			$userData['email'] = $userProfile['email'];
			$userData['gender'] = $userProfile['gender'];
			$userData['locale'] = $userProfile['locale'];
			$userData['profile_url'] = $userProfile['link'];
			$userData['picture_url'] = $userProfile['picture'];
			$email = $userData['email'];
			$t = count($this->user_model->get_single_details(USERS, array('email'), array('email' => $userData['email']))->result());
			if ($t <= 0) {

				$filename = now() . rand() . ".jpg";
				$image = file_get_contents($userData['picture_url']);
				file_put_contents("images/site/profile/" . $filename, $image);
				$dataarray = array('first_name' => $userData['first_name'], 'last_name' => $userData['last_name'], 'email' => $userData['email'], 'photo' => $filename, 'google' => $userData['oauth_uid']);
				$t = $this->user_model->simple_insert(USERS, $dataarray);
				$checkUser = $this->user_model->get_all_details(USERS, array('email' => $email));
				$datestring = "%Y-%m-%d %h:%i:%s";
				$time = time();
				$newdata = array(
					'last_login_date' => mdate($datestring, $time),
					'last_login_ip' => $this->input->ip_address()
				);
				$condition = array(
					'id' => $checkUser->row()->id
				);
				$this->user_model->update_details(USERS, $newdata, $condition);



				redirect(base_url());
			} else {
				$checkUser = $this->user_model->get_all_details(USERS, array('email' => $email));
				if ($checkUser->row()->status == "Active") {
					$datestring = "%Y-%m-%d %h:%i:%s";
					$time = time();
					$newdata = array(
						'last_login_date' => mdate($datestring, $time),
						'last_login_ip' => $this->input->ip_address()
					);
					$condition = array(
						'id' => $checkUser->row()->id
					);
					$this->user_model->update_details(USERS, $newdata, $condition);



					redirect(base_url());
				} else {
					$this->session->set_flashdata('alert_message', 'Your account is inactive...');
					$this->session->set_flashdata('error_type', 'error');
					redirect(base_url());
				}
			}
		}
	}


	public function send_forgot_password()
	{
		$email = $_POST['login_email'];
		$check_user = $this->user_model->get_all_details(USERS, array('email' => $email));
		if ($check_user->num_rows() > 0) {
			$password = time() . rand(2, 4);
			$to = $email;
			$this->mail_model->send_user_password($password, $check_user->row()->first_name, $email);
			$this->user_model->update_details(USERS, array('password' => md5($password)), array('email' => $email));
			$ret['status'] = 1;
			$ret['message'] = get_lang_site_key($this->data['lang_key'], "home_lang", "password_reset");
		} else {
			$ret['status'] = 2;
			$ret['message'] = get_lang_site_key($this->data['lang_key'], "home_lang", "no_email");
		}
		echo json_encode($ret);
	}
}
