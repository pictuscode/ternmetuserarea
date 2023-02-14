<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Landing_model extends My_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	function get_service()
	{
		$this->db->select('u.*');
		$this->db->from(TASKER_CATEGORY.' as u');
		$this->db->where('u.featured','0');
		$this->db->limit(6);
		return $query = $this->db->get();
		
	}
	function get_service_featured()
	{
		$this->db->select('u.*');
		$this->db->from(TASKER_CATEGORY.' as u');
		$this->db->where('u.featured','1');
		$this->db->limit(2);
		return $query = $this->db->get();
		
	}
	function just_booked($user_id)
	{
		$this->db->select('b.booking_id as bid,p.id as pid,p.id,p.photos,p.listing_title,p.address,p.beds_count,p.city,p.latitude,p.longitude,p.room_type,p.price,p.cover_photo,p.property_type,p.bathroom_count,p.bedroom_count,p.guest_count,p.description,p.bedrooms,p.amenities,p.house_rules,p.additional_rules,avg(r.total_rate_value) as total_review_value_avg,(select count(id) from '.REVIEWS.' where pid=b.pid) as total_review_count');
		$this->db->from(BOOKING.' as b');
		$this->db->join(PRODUCT.' as p','p.id=b.pid');
		$this->db->join(REVIEWS.' as r','r.pid=p.id',"left");
		$this->db->where('b.booking_status',"3");		
		$this->db->group_by('p.id');
		$this->db->limit(6);
		$this->db->order_by('b.id',"desc");		
		return $query = $this->db->get();
		
	}
	function recommended_homes()
	{
		$this->db->select('p.id as pid,p.id,p.photos,p.listing_title,p.address,p.beds_count,p.city,p.latitude,p.longitude,p.room_type,p.price,p.cover_photo,p.property_type,p.bathroom_count,p.bedroom_count,p.guest_count,p.description,p.bedrooms,p.amenities,p.house_rules,p.additional_rules,avg(r.total_rate_value) as total_review_value_avg,(select count(id) from '.REVIEWS.' where pid=p.id) as total_review_count');
		$this->db->from(PRODUCT.' as p');
		$this->db->join(REVIEWS.' as r','r.pid=p.id',"left");
		$this->db->where('p.featured',"1");
		$this->db->where('p.ls_status',"1");
		$this->db->where('p.ap_status',"1");
		$this->db->group_by('p.id');
		$this->db->order_by('p.featured_date',"desc");		
		return $query = $this->db->get();
		
	}
}