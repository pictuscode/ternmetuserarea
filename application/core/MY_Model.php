<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model
{


	public function __construct()
	{
		parent::__construct();

		if ($this->uri->segment('1') != 'admin') {

			$selectedLanguage = $this->session->userdata('language_code');
			$defaultLanguage = 'en';
			$filePath = APPPATH . "language/" . $selectedLanguage . "/" . $selectedLanguage . "_lang.php";
			if ($selectedLanguage != '') {

				if (!(is_file($filePath))) {

					$this->lang->load($defaultLanguage, $defaultLanguage);
				} else {
					$this->lang->load($selectedLanguage, $selectedLanguage);
				}
			} else {
				$this->lang->load($defaultLanguage, $defaultLanguage);
			}
		}
	}


	public function get_all_details($table = '', $condition = '', $sortArr = '')
	{

		if ($sortArr != '' && is_array($sortArr)) {
			foreach ($sortArr as $sortRow) {
				if (is_array($sortRow)) {

					$this->db->order_by($sortRow['field'], $sortRow['type']);
				}
			}
		}

		return $this->db->get_where($table, $condition);
	}

	public function get_single_details($table = '', $field = '', $condition = '', $sortArr = '')
	{

		if ($sortArr != '' && is_array($sortArr)) {
			foreach ($sortArr as $sortRow) {
				if (is_array($sortRow)) {

					$this->db->order_by($sortRow['field'], $sortRow['type']);
				}
			}
		}

		$this->db->select($field);
		return $this->db->get_where($table, $condition);
	}


	public function update_details($table = '', $data = '', $condition = '')
	{



		foreach ($data as $t => $data1) {
			$data_new[$t] = strip_tags($data1);
		}
		$this->db->where($condition);
		$this->db->update($table, $data_new);
	}


	public function simple_insert($table = '', $data = '')
	{

		foreach ($data as $t => $data1) {
			$data_new[$t] = strip_tags($data1);
		}
		$this->db->insert($table, $data_new);
	}

	public function get_template_details($apiId = '5')
	{
		$this->db->from(EMAIL);
		$this->db->where(array('id' => $apiId));
		$ret = $this->db->get();
		return $ret->result_array();
	}
	public function common_email_send($eamil_vaues = array())
	{
		if (is_file('./settings/admin_settings.php')) {
			include('./settings/admin_settings.php');
		}

		$emailConfig = array(
			'protocol' => 'smtp',
			'smtp_host' =>'ssl://smtp.gmail.com',
			'smtp_port' => 465,
			'smtp_user' => 'sender_mailid@gmail.com',
			'smtp_pass' => 'password',
			 'auth' => true,
		);


		$from = array('email' => $eamil_vaues['from_mail_id'], 'name' => $eamil_vaues['mail_name']);
		$to = $eamil_vaues['to_mail_id'];
		$subject = $eamil_vaues['subject_message'];
		$message = stripslashes($eamil_vaues['body_messages']);
		$this->load->library('email', $emailConfig);
		$this->email->set_newline("\r\n");
		$this->email->set_mailtype($eamil_vaues['mail_type']);
		$this->email->from($from['email'], $from['name']);
		$this->email->to($to);
		if ($eamil_vaues['cc_mail_id'] != '') {
			$this->email->cc($eamil_vaues['cc_mail_id']);
		}
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
		return 1;
	}
}
