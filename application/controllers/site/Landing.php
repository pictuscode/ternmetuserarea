<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends MY_Controller {
		 
	function __construct(){
        parent::__construct();
		$this->load->helper(array('url','cookie','date','form','email','site_language_helper'));
		$this->load->library(array('form_validation'));		
		$this->load->model('landing_model');
		$this->load->model('mail_model');
		$this->load->helper("product_helper");	
    } 
	public function index()
	{
		$id=$this->checkLogin("U")==""?0:$this->checkLogin("U");
		$this->data['just_booked']=$this->landing_model->just_booked($id);
		$this->data['recommended_homes']=$this->landing_model->recommended_homes();
		$this->data['feature_city']=$this->landing_model->get_all_details(CITIES,array("status"=>"1"));
		$this->load->view('site/landing/landing',$this->data);
	} 
	
	public function contact_us()
	{
		$this->data['heading']="Contact us";
		$this->data['csession_id']=$csession_id=time().rand(10,20);
		$this->session->set_userdata(array("csession_id"=>$csession_id));
		$this->load->view('site/landing/contact_us',$this->data);
	}
	public function save_contactus()
	{
		if($this->session->userdata("csession_id")==$_POST["cid"]){
		unset($_POST["cid"]);	
		$this->landing_model->simple_insert(CONTACTUS,$_POST);
		$new_array=$_POST;
		$check=$this->mail_model->send_contact_mail($new_array);
		echo json_encode(array('result'=>1));
		}
		else{
		echo json_encode(array('result'=>2));	
		}
	}
	
}
