<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {
		 
	function __construct(){
        parent::__construct();
		$this->load->helper(array('cookie','date','form','email','Product_helper','site_language_helper'));
		$this->load->library(array('form_validation','session'));		
		$this->load->model('product_model');		
		$this->load->model('mail_model');		
		
    }
	


	public function rooms($pid)
	{					
			$id=$this->checkLogin("U");
			$pro=$this->product_model->get_all_details(PRODUCT,array("id"=>$pid));
			if($pro->row()->user_id!=$id){
			$product_details=$this->product_model->get_detail_page($pid); 
			$this->product_model->update_details(PRODUCT,array('view_count'=>$pro->row()->view_count+1),array('id'=>$pro->row()->id)); 
			}else{
			$product_details=$this->product_model->get_detail_page_host($pid);	
			}
			
			if($product_details->num_rows()==1 && $product_details->row()->id!=""){
			$this->data['product_details']=$product_details->row();
			$this->data['heading']=$product_details->row()->listing_title;
			$this->data['cancellation_policy']=$this->product_model->get_all_details(CANCELLATION,array("id"=>$product_details->row()->cancellation_type));
			$this->data['description']=$product_details->row()->description;
			$this->data['url']=base_url().'rooms/'.$product_details->row()->pid;
			$this->data['image']=base_url().'images/site/product'.$product_details->row()->cover_photo;
			$this->data['bed_type']=$this->product_model->get_all_details(BED_TYPE,array('status'=>'1'));	
			$this->data['amenities_list']=$this->product_model->get_all_details(AMENITIES,array('status'=>'1'));
            $id=$id==""?0:$id;
			$wish_list=$this->product_model->get_all_details(WISHLIST,array("user_id"=>$id));
			$wishlist_array=array();
			$block_dates=$this->product_model->get_all_details(BLOCK_DATES,array('pid'=>$pid,'day_type'=>"1")); 
			$final_block_array=array();
			if($block_dates->num_rows()>0){
				foreach($block_dates->result() as $value){
					$final_block_array[]=$value->dates;
				}
			}
			
			$already_booked_array=array();
			$get_booked_info=$this->product_model->get_all_details(BOOKING,array('pid'=>$pid,'booking_status'=>'3'));
			if($get_booked_info->num_rows()>0){
				foreach($get_booked_info->result() as $gb){ 
					$exarray=json_decode($gb->date_set,true);
					$already_booked_array[]=$exarray;
				}
				
				$already_booked_array=call_user_func_array('array_merge', $already_booked_array);
				$final_block_array=array_merge($final_block_array,$already_booked_array);
			}

			$this->data['block_dates']=json_encode($final_block_array);
			
			if($wish_list->num_rows()>0)
			{
				foreach($wish_list->result() as $ws){
				   if($ws->products_id!=""){
				   $wishlist_array[]=json_decode($ws->products_id);
				   }
				}
				if(is_array($wishlist_array) && !empty($wishlist_array)){
				$wishlist_array = call_user_func_array('array_merge', $wishlist_array);
				}
				
			}
			$this->data["wishlist_array"]=$wishlist_array;	
			$this->data['rules']=$this->product_model->get_all_details(RULES,array('status'=>1));	
			$this->data["get_stat_review_list"]=$this->user_model->get_stat_review_list($pid);
			$this->data["stat_review_avg"]=$this->user_model->stat_review_avg($pid)->row(); 
			$this->data["fiverate_count"]=$this->user_model->fiverate_count($pid)->row(); 
			$this->load->view('site/product/product_detail',$this->data);	
			}
			else{
				redirect(base_url());
			}	
	}

	public function similar_listing()
	{					
		    $ret["status"]=1;
			$pid=$_POST["pid"];
			$ret["wishlist_array"]=[];
			$id=$this->checkLogin("U");
			$pro=$this->product_model->get_all_details(PRODUCT,array("id"=>$pid));
			if($pro->row()->user_id!=$id){
			$product_details=$this->product_model->get_detail_page($pid); 
			}else{
			$product_details=$this->product_model->get_detail_page_host($pid);	
			}
			$uid=$this->checkLogin("U")==""?0:$this->checkLogin("U"); 
            if($uid!=""){
			$wish_list=$this->product_model->get_all_details(WISHLIST,array("user_id"=>$uid));
			$wishlist_array=array();
				if($wish_list->num_rows()>0)
				{
					foreach($wish_list->result() as $ws){
					   if($ws->products_id!=""){
					   $wishlist_array[]=json_decode($ws->products_id);
					   }
					}
					if(is_array($wishlist_array) && !empty($wishlist_array)){
					$wishlist_array = call_user_func_array('array_merge', $wishlist_array);
					}
					
				}
			}
			$ret["wishlist_array"]=$wishlist_array;			
			if($product_details->num_rows()>0 && $product_details->row()->id!=""){
			$this->data['similar_listing']=$this->product_model->similar_listing($product_details->row()->address,$product_details->row()->room_type,$pid,$uid); 
			if($this->data['similar_listing']->num_rows()>0 && $this->data['similar_listing']->row()->id!=""){
				
			    $ret["similar_listing"][]=$this->data['similar_listing']->row();
			}
			else
			{
				$ret["status"]=0;
				$ret["similar_listing"]=array();
			}
			}
			else
			{
				$ret["status"]=0;
				$ret["similar_listing"]=array();
			}
			echo json_encode($ret);	
	}
		
}
