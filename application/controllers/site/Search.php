<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends MY_Controller {
		 
	function __construct(){
        parent::__construct();
		$this->load->helper(array('cookie','date','form','email','site_language_helper'));
		$this->load->library(array('form_validation','session'));		
		$this->load->model('search_model');
		$this->load->helper("search_helper");	
    }
   public function product_search()
	{
			
			$city="";
			$location="";
			$id=$this->checkLogin('U')==""?0:$this->checkLogin('U');
			$this->data['heading']=$_GET["city"]==""?$this->config->item("site_name")." - Search":$_GET["city"]."- Search";
			$this->data['amenities_list']=$this->search_model->get_all_details(AMENITIES,array('status'=>'1'));
			$this->data['property_type_list']=$this->search_model->get_all_details(PROPERTY_TYPE,array('status'=>'1'));
			if($_GET["city"]!=""){
			$googleAddress = str_replace(" ", "+", $_GET["city"]);
			$google_map_api=$this->config->item('gmap_key');
			$json = file_get_contents("https://maps.google.com/maps/api/geocode/json?address=".urlencode($googleAddress)."&sensor=false&key=$google_map_api"); 
			$json = json_decode($json);
			$newAddress = $json->{'results'}[0]->{'address_components'};
			$this->data ['lat'] = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
			$this->data ['long'] = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
			foreach($newAddress as $nA)
			{
				if($nA->{'types'}[0] == 'locality')$location = $nA->{'long_name'};
				if($nA->{'types'}[0] == 'administrative_area_level_2')$city = $nA->{'long_name'};
				if($nA->{'types'}[0] == 'country')$country = $nA->{'long_name'};
			}
			if($city == '')
			$city = $location;
			$this->data ['minLat'] = $minLat = $json->{'results'}[0]->{'geometry'}->{'viewport'}->{'southwest'}->{'lat'};
			$this->data ['minLong'] = $minLong = $json->{'results'}[0]->{'geometry'}->{'viewport'}->{'southwest'}->{'lng'};
			$this->data ['maxLat'] = $maxLat = $json->{'results'}[0]->{'geometry'}->{'viewport'}->{'northeast'}->{'lat'};
			$this->data ['maxLong'] = $maxLong = $json->{'results'}[0]->{'geometry'}->{'viewport'}->{'northeast'}->{'lng'};
			
			if(isset($_POST['zoom']))
			{
				$this->data ['zoom'] = $_POST['zoom'];
				$this->data ['cLat'] = $_POST['cLat'];
				$this->data ['cLong'] = $_POST['cLong'];
				$this->data ['minLat'] = $minLat = $_POST['minLat'];
				$this->data ['minLong'] = $minLong = $_POST['minLong'];
				$this->data ['maxLat'] = $maxLat = $_POST['maxLat'];
				$this->data ['maxLong'] = $maxLong = $_POST['maxLong'];
				$search = '(1=1';
				$whereLat = '(p.latitude BETWEEN "'.$minLat.'" AND "'.$maxLat.'" ) AND (p.longitude BETWEEN "'.$minLong.'" AND "'.$maxLong.'" )';
				$search = $search.' AND '.$whereLat;
			}
			else
			{
				$search = '(1=1';
				$whereLat = '(p.latitude BETWEEN "'.$minLat.'" AND "'.$maxLat.'" ) AND (p.longitude BETWEEN "'.$minLong.'" AND "'.$maxLong.'" )';
				$search = $search.' AND '.$whereLat;
			}
			}
			else
			{
				$search = '(1=1';
				$whereLat = '(p.latitude BETWEEN "0" AND "0" ) AND (p.longitude BETWEEN "0" AND "0" )';
				$search = $search.' AND '.$whereLat;
				$this->data ['minLat'] = $minLat = -86.93117768006837;
			    $this->data ['minLong'] = $minLong =180;
			    $this->data ['maxLat'] = $maxLat = 88.25589097919675;
			    $this->data ['maxLong'] = $maxLong = -180;
				$this->data ['zoom'] = 0;
				$this->data ['cLat'] =0;
				$this->data ['cLong'] = 0;
				$this->data ['lat'] = 13.286633685616;
			    $this->data ['long'] = 19.842629011917;
			}
			if(isset($_GET['datefilter'])){
				if($_GET['datefilter']!=""){
					$split_date=explode("-",$_GET['datefilter']);
					$checkin=date("Y-m-d",strtotime(str_replace('/', '-', trim($split_date[0]))));
					$checkout=date("Y-m-d",strtotime(str_replace('/', '-', trim($split_date[1]))));
				}
				else{
					$checkin=$checkout="";
				}
				$product_array=array();
				if($checkin!="" && $checkout!=""){
					$get_between_dates=($this->get_between_dates($checkin,$checkout));
					array_pop($get_between_dates);
					$booked_result=$this->search_model->get_bookings(date("m",strtotime($checkin)),date("Y",strtotime($checkin)),date("m",strtotime($checkout)),date("Y",strtotime($checkout)));
					foreach($booked_result->result() as $booking){
						$booked_array=json_decode($booking->date_set,true);
						foreach($booked_array as $barray){
							if(in_array($barray,$get_between_dates)){
								$product_array[]=$booking->pid;
							}
						}
					}
					$block_dates=$this->search_model->get_block_dates($checkin,$checkout); 
					
					if($block_dates->num_rows()>0){
						foreach($block_dates->result() as $value){
							if(in_array($value->dates,$get_between_dates)){
								$product_array[]=$value->pid;
							}						
						}					
					}
				  
				}
			}
			$pageLimitStart=0;
			$searchPerPage=20;
			$this->data['total_product_list']=$this->search_model->total_product_list($search . ' and p.ls_status="1" and p.ap_status="1" and u.status="Active" and p.user_id!="'.$id.'" ) group by p.id order by p.created desc');
			$this->load->library('pagination');
			$config['total_rows'] = $this->data['total_product_list']->num_rows();
			$config['full_tag_open'] =  "<ul id='ajax_pg' class='paginate'>";
			$config['full_tag_close'] =  "</ul>";
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = '<i class="fa fa-angle-right"></i>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['per_page'] = $searchPerPage;			
			$this->pagination->initialize($config);
			$this->data['page_link']=$this->pagination->create_links();			
			$this->data['product_list']=$this->search_model->get_search_result($search . ' and p.ls_status="1" and p.ap_status="1" and u.status="Active"   and p.user_id!="'.$id.'" ) group by p.id order by p.created desc limit ' . $pageLimitStart . ',' . $searchPerPage ); 
			$this->data['pagination_no'] = 0;
            $minprice=$this->search_model->get_minprice()->row()->minprice;
			$maxprice=$this->search_model->get_maxprice()->row()->maxprice;
			$this->data['min_price'] = $minprice;
			$this->data['max_price'] = $maxprice==0?10000:$maxprice;				
            $this->data ['zoom'] = "";
			$this->data ['cLat'] = "";
			$this->data ['cLong'] = "";			
			
			$wish_list=$this->search_model->get_all_details(WISHLIST,array("user_id"=>$id));
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
			$this->data["wishlist_array"]=$wishlist_array;
			$this->data["city"]=$_GET["city"];
			
			$this->data['product_list_json']=json_encode($this->data['product_list']->result());
			$this->load->view('site/search/search',$this->data);
		
	}	
	  function get_between_dates($start, $end) {
			$dates = array (
					$start 
			);
			while ( end ( $dates ) < $end ) {
				$dates [] = date ( 'Y-m-d', strtotime ( end ( $dates ) . ' +1 day' ) );
			}
			
			return $dates;
		}
		
	public function ajax_search()
	{
			$id=$this->checkLogin('U')==""?0:$this->checkLogin('U');
			$rmtype=array_filter(explode(',',$_POST['rmtype'])); 
			$proptype=array_filter(explode(',',$_POST['proptype'])); 
			$amtype=array_filter(explode(',',$_POST['amtype'])); 
			$rulestypes=array_filter(explode(',',$_POST['rulestypes'])); 
			$guest_count = $_POST['guest_count'];
			$beds_count = $_POST['beds_count'];
			$bathroom_count = $_POST['bathroom_count'];
			$bedroom_count = $_POST['bedroom_count'];
			$min_price = $_POST['min_price'];
			$max_price = $_POST['max_price'];
			$instant_booking = $_POST['instant_booking'];
			$minLat = $_POST['min_lat'];
			$minLong = $_POST['min_long'];
			$maxLat = $_POST['max_lat'];
			$maxLong = $_POST['max_long'];
			
			 
			$pagination_no = $_POST['pagination_no']==""?0:$_POST['pagination_no'];
			$searchPerPage=20;
			$search = '(1=1';
		    $whereLat = '(p.latitude BETWEEN "'.$minLat.'" AND "'.$maxLat.'" ) AND (p.longitude BETWEEN "'.$minLong.'" AND "'.$maxLong.'" )';
		    $search = $search.' AND '.$whereLat;
			$rtp="";
			if(count($rmtype) != 0){
			$propertyCount = 0 ; 
			$property_checked_id="";
			$property_check_id="";
			foreach($rmtype as $property_checked_values){
				    $propertyCount = 1;
					$property_checked_id .= "'".trim($property_checked_values)."',";				
			}
			$property_checked_id .= "}";
			$property_check_id .= str_replace(",}","",$property_checked_id);
			if($propertyCount == 1)
			    $search .= " and p.room_type IN (".$property_check_id.")";
		    }
			if(count($proptype) != 0){
			$propertyCount1 = 0 ; 
			$property_checked_id1="";
			$property_check_id1="";
			foreach($proptype as $property_checked_values1){
				     $propertyCount1 = 1;
					 $property_checked_id1 .= "'".trim($property_checked_values1)."',";
				
			}
			$property_checked_id1 .= "}";
			$property_check_id1 .= str_replace(",}","",$property_checked_id1);
			if($propertyCount1 == 1)
			    $search .= " and p.property_type IN (".$property_check_id1.")";
		    }
			if(count($amtype) != 0){
			$amtypecount = 0 ; 
			$amtype_checked="(1=1) ";
			foreach($amtype as $amtvalues){				
					$amtypecount = 1;
					$amtype_checked .= " and p.amenities like '%\"".trim($amtvalues)."\"%'";				
			}
			if($amtypecount == 1)
			    $search .= " and (".$amtype_checked.")";
		    }
			if(count($rulestypes) != 0){
			$rulecount = 0 ; 
			$ruletype_checked="(1=1) ";
			foreach($rulestypes as $ruletype){				
					$rulecount = 1;
					$ruletype_checked .= " and p.house_rules like '%\"".trim($ruletype)."\"%'";				
			}
			if($rulecount == 1)
			    $search .= " and (".$ruletype_checked.")";
		    }
			
			if($guest_count!=0)
			{
				$search .= " and p.guest_count >= ".$guest_count." ";
			}
			if($beds_count!=0)
			{
				$search .= " and p.beds_count >= ".$beds_count." ";
			}
			if($bedroom_count!=0)
			{
				$search .= " and p.bedroom_count >= ".$bedroom_count." ";
			}
			if($bathroom_count!=0)
			{
				$search .= " and p.bathroom_count >= ".$bathroom_count." ";
			}
			if($instant_booking!=0)
			{
				$search .= " and p.instant_booking = ".$instant_booking." ";
			}
			
			if($min_price!=0 && $max_price!=0 )
			{
				$search .= " and p.price >= ".$min_price." and p.price <=".$max_price." ";
			}
			$checkin = date("Y-m-d",strtotime($_POST['checkin']));
			$checkout = date("Y-m-d",strtotime($_POST['checkout']));
			$product_array=array();
			if($checkin!="" && $checkout!=""){
				$get_between_dates=($this->get_between_dates($checkin,$checkout));
		        array_pop($get_between_dates);
				$booked_result=$this->search_model->get_bookings(date("m",strtotime($checkin)),date("Y",strtotime($checkin)),date("m",strtotime($checkout)),date("Y",strtotime($checkout)));
				foreach($booked_result->result() as $booking){
					$booked_array=json_decode($booking->date_set,true);
					foreach($booked_array as $barray){
						if(in_array($barray,$get_between_dates)){
							$product_array[]=$booking->pid;
						}
					}
				}
				$block_dates=$this->search_model->get_block_dates($checkin,$checkout); 
					
					if($block_dates->num_rows()>0){
						foreach($block_dates->result() as $value){ 
						  
							if(in_array($value->dates,$get_between_dates)){
								$product_array[]=$value->pid;
							}						
						}					
					}
			  		
			  if(is_array($product_array)){
				  $product_array=array_unique($product_array);				 
				  $restrick_product_id=implode(",",$product_array);
				  if($restrick_product_id!=""){
				     $search .= " AND p.id NOT IN(".$restrick_product_id.")";
				  }
			  }
			 
			  
			} 
			
						
			
			$this->data['total_product_list']=$this->search_model->total_product_list($search . ' and p.ls_status="1" and p.ap_status="1" and u.status="Active"   and p.user_id!="'.$id.'" ) group by p.id order by p.created desc');
			$this->load->library('pagination');
			$config['total_rows'] = $this->data['total_product_list']->num_rows();
			$config['per_page'] = $searchPerPage;
			$config['cur_page'] = $pagination_no;
			$config['full_tag_open'] =  "<ul id='ajax_pg' class='paginate'>";
			$config['full_tag_close'] =  "</ul>";
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = '<i class="fa fa-angle-right"></i>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$this->pagination->initialize($config);
			$this->data['page_link']=$this->pagination->create_links();			
			$this->data['product_list']=$this->search_model->get_search_result($search . ' and p.ls_status="1" and p.ap_status="1" and u.status="Active"   and p.user_id!="'.$id.'") group by p.id order by p.created desc limit ' . $pagination_no . ',' . $searchPerPage );	#echo $this->db->last_query();		
			$this->data['pagination_no'] = $pagination_no;	
            $this->data['page_link_details']="";
			$this->data['product_list_json']=($this->data['product_list']->result());
			$wish_list=$this->search_model->get_all_details(WISHLIST,array("user_id"=>$id));
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
			$this->data["wishlist_array"]=$wishlist_array;
			
			echo json_encode($this->data);
		
	}
		

	

}
