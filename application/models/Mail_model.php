<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
#error_reporting(E_ALL); ini_set('display_errors', '1');

class Mail_model extends My_Model
{
	public function __construct()
	{
		parent::__construct();
		error_reporting(0);
	}

	public function send_user_password($pwd = '', $username,$email) {
		$newsid = '1';$message='';
		$lang_key=$this->session->userdata('pictus_rent_lang_key');
		$template_values = $this->user_model->get_template_details ( $newsid );  
        if(count($template_values)==1){ 
		$template_values=$template_values[0];
		$adminnewstemplateArr = array (
				'email_title' => $this->config->item ( 'site_name' ),
				'site_name' => $this->config->item ( 'site_name' ),
				'logo' => $this->data['logo']
		);
		extract ( $adminnewstemplateArr );
		$subject = 'From: ' . $this->config->item ( 'email_title' ) . ' - ' . get_common_details(EMAIL_LANG,'subject',$template_values ['id'],$lang_key);
		$message .= '<!DOCTYPE HTML>
			<html>
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<meta name="viewport" content="width=device-width"/>
			<title>' . get_common_details(EMAIL_LANG,'subject',$template_values ['id'],$lang_key) . '</title>
			<body>';
			if(file_exists('./email/email' . $newsid .'_'.$lang_key.'.php')){
				include ('./email/email' . $newsid .'_'.$lang_key.'.php');
			}else
			{
				include ('./email/email' . $newsid .'_en.php');
			}

		$message .= '</body>
			</html>';

		$sender_name = $this->config->item ( 'site_name' );
		$sender_email = $this->config->item ( 'admin_email' );

		$email_values = array (
				'mail_type' => 'html',
				'from_mail_id' => $sender_email,
				'mail_name' => $sender_name,
				'to_mail_id' => $email,
				'subject_message' => get_common_details(EMAIL_LANG,'subject',$template_values ['id'],$lang_key),
				'cc_mail_id' => '',
				'body_messages' => $message
		);
       
		$email_send_to_common = $this->user_model->common_email_send ( $email_values );
        }
		
	}
	

	
	    public function send_contact_mail($new_array)
		{
			$this->send_contact_admin($new_array);
		}
	
		public function send_contact_admin($new_array) {
		$newsid = '10';$message='';
		$template_values = $this->user_model->get_template_details ( $newsid );  
        if(count($template_values)==1){ 
		$template_values=$template_values[0];
		$adminnewstemplateArr = array (
				'email_title' => $this->config->item ( 'site_name' ),
				'message_admin' =>$new_array['message'],
				'name' => $new_array['name'],
				'phone' =>$new_array['phone'],
				'email' => $new_array['email'],
				'site_name' => $this->config->item ( 'site_name' ),
				'logo' => $this->data['logo']
		);
		extract ( $adminnewstemplateArr );
		$subject = 'From: ' . $this->config->item ( 'email_title' ) . ' - ' . $template_values ['subject'];
		$message .= '<!DOCTYPE HTML>
			<html>
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<meta name="viewport" content="width=device-width"/>
			<title>' . $template_values ['subject'] . '</title>
			<body>';
		include ('./email/email' . $newsid . '.php');

		$message .= '</body>
			</html>';

		$sender_name = $this->config->item ( 'site_name' );
		$sender_email = $this->config->item ( 'admin_email' );
        
		$email_values = array (
				'mail_type' => 'html',
				'from_mail_id' => $sender_email,
				'mail_name' => $sender_name,
				'to_mail_id' => $sender_email,
				'subject_message' => $template_values ['subject'],
				'cc_mail_id' => '',
				'body_messages' => $message
		);
		$email_send_to_common = $this->user_model->common_email_send ( $email_values );
        }
		
	}

	
}