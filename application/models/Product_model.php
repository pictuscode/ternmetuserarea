<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Product_model extends My_Model
{
	public function __construct()
	{
		parent::__construct();
	}
    
	function get_detail_page($pid)
	{
		$this->db->select('p.*,u.*,u.created as ucreated,p.id as pid,(((count(b.response_rate)-sum(b.response_rate))/(count(b.response_rate)))*100) as avg_response_rate');
		$this->db->from(PRODUCT.' as p');
		$this->db->join(USERS.' as u','u.id=p.user_id');
		$this->db->join(BOOKING.' as b','b.pid=p.id','left');
		$this->db->where('p.ls_status','1');
		$this->db->where('p.ap_status','1');
		$this->db->where('u.status','Active');
		$this->db->where('p.id',$pid);
		return $query = $this->db->get();
		
	}
   function get_detail_page_host($pid)
	{
		$this->db->select('p.*,u.*,u.created as ucreated,p.id as pid,(((count(b.response_rate)-sum(b.response_rate))/(count(b.response_rate)))*100) as avg_response_rate');
		$this->db->from(PRODUCT.' as p');
		$this->db->join(USERS.' as u','u.id=p.user_id');
		$this->db->join(BOOKING.' as b','b.pid=p.id','left');
		$this->db->where('p.id',$pid);
		return $query = $this->db->get();
		
	}
	
   function get_ajax_listing_detail($pid)
	{
		$this->db->select('p.id as pid,p.id,p.photos,p.listing_title,p.address,p.beds_count,p.city,p.latitude,p.longitude,p.room_type,p.price,p.cover_photo,p.property_type,p.bathroom_count,p.bedroom_count,p.guest_count,p.description,p.bedrooms,p.amenities,p.house_rules,p.additional_rules');
		$this->db->from(PRODUCT.' as p');
		$this->db->join(USERS.' as u','u.id=p.user_id');
		$this->db->where('p.ls_status','1');
		$this->db->where('p.ap_status','1');
		$this->db->where('u.status','Active');
		$this->db->where('p.id',$pid);
		return $query = $this->db->get();
		
	}
   
	function similar_listing($city,$rmtype,$pid,$uid)
	{		
		$googleAddress = str_replace(" ", "+", $city);
		$google_map_api=$this->config->item('gmap_key');
		$json = file_get_contents("https://maps.google.com/maps/api/geocode/json?address=$googleAddress&sensor=false&key=$google_map_api"); 
		$json = json_decode($json);
		if($json->status=='OK')
		{
			$newAddress = $json->{'results'}[0]->{'address_components'};
			$this->data ['lat'] = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
			$this->data ['long'] = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
			foreach($newAddress as $nA)
			{
				if($nA->{'types'}[0] == 'locality')$location = $nA->{'long_name'};
				if($nA->{'types'}[0] == 'administrative_area_level_2')$city = $nA->{'long_name'};
				if($nA->{'types'}[0] == 'country')$country = $nA->{'long_name'};
			}
			$this->data ['minLat'] = $minLat = $json->{'results'}[0]->{'geometry'}->{'viewport'}->{'southwest'}->{'lat'};
			$this->data ['minLong'] = $minLong = $json->{'results'}[0]->{'geometry'}->{'viewport'}->{'southwest'}->{'lng'};
			$this->data ['maxLat'] = $maxLat = $json->{'results'}[0]->{'geometry'}->{'viewport'}->{'northeast'}->{'lat'};
			$this->data ['maxLong'] = $maxLong = $json->{'results'}[0]->{'geometry'}->{'viewport'}->{'northeast'}->{'lng'};
			$whereLat = '(p.latitude BETWEEN "'.$minLat.'" AND "'.$maxLat.'" ) AND (p.longitude BETWEEN "'.$minLong.'" AND "'.$maxLong.'" )';
			$this->db->select('p.id,p.photos,p.listing_title,p.address,p.beds_count,p.city,p.latitude,p.longitude,p.room_type,p.price,p.cover_photo,avg(r.total_rate_value) as total_rate_value,count(r.id) as total_reviews_count');
			$this->db->from(PRODUCT.' as p');
			$this->db->join(USERS.' as u','u.id=p.user_id');
			$this->db->join(REVIEWS.' as r','r.pid=p.id',"left");
			$this->db->where('p.ls_status','1');
			$this->db->where('p.ap_status','1');
			$this->db->where('p.id!=',$pid);
			$this->db->where('p.room_type',$rmtype);
			$this->db->where('u.status','Active');
			/* $this->db->where('u.id!=',$uid); */
			$this->db->where($whereLat);
			return $query = $this->db->get();
		}		
		
		
	}
	
	function check_cancellation($bid,$pid)
	{
		$this->db->select('p.*,b.*,u.first_name as ufirst_name,h.first_name as hfirst_name');
		$this->db->from(BOOKING.' as b');
		$this->db->join(PRODUCT.' as p','b.pid=p.id');
		$this->db->join(USERS.' as u','u.id=b.user_id');
		$this->db->join(USERS.' as h','h.id=b.host_id');
		$this->db->where('b.id',$bid);
		return $query = $this->db->get();
		
	}
	
	function get_month_calendar_booking($pid,$month,$year)
	{   
		$this->db->select('b.*,b.id as bid,u.*,u.created as ucreated,p.id as pid');
		$this->db->from(BOOKING.' as b');
		$this->db->join(USERS.' as u','u.id=b.user_id');
		$this->db->join(PRODUCT.' as p','b.pid=p.id');
		$this->db->where('b.pid',$pid);
		$this->db->where('b.booking_status',"3");
		$this->db->where('month(b.checkin)',$month);
		$this->db->where('month(b.checkout)',$month);
		$this->db->where('year(b.checkout)',$year);
		$this->db->where('year(b.checkout)',$year);
		return $query = $this->db->get();
		
	}
   function calendar_booked_user_info($bid)
	{   
		$this->db->select('b.*,u.*,u.created as ucreated,p.*,u.first_name as ufirst_name,h.first_name as hfirst_name,b.created as bcreated');
		$this->db->from(BOOKING.' as b');
		$this->db->join(USERS.' as u','u.id=b.user_id');
		$this->db->join(USERS.' as h','h.id=b.host_id');
		$this->db->join(PRODUCT.' as p','b.pid=p.id');
		$this->db->where('b.id',$bid);		
		return $query = $this->db->get();
		
	}
   function get_spl_dates_for_calucaltion($checkin,$checkout,$pid)
	{
		$this->db->select('b.*');
		$this->db->from(BLOCK_DATES.' as b');
		$this->db->where("(DATE(b.dates)>='".$checkin."' and DATE(b.dates)<='".$checkout."') and pid='".$pid."'");		
		return $query = $this->db->get();
		
	}
	
}