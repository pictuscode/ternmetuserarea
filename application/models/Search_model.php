<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Search_model extends My_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function get_search_result($where)
	{
		$this->db->select('p.id,p.photos,p.listing_title,p.address,p.beds_count,p.city,p.latitude,p.longitude,p.room_type,p.price,p.cover_photo,avg(r.total_rate_value) as total_rate_value,count(r.id) as total_reviews_count');
		$this->db->from(PRODUCT.' as p');
		$this->db->join(USERS.' as u','u.id=p.user_id');
		$this->db->join(BOOKING.' as b','b.pid=p.id',"left");
		$this->db->join(REVIEWS.' as r','r.pid=p.id',"left");
		$this->db->where($where);
		return $query = $this->db->get();
		
	}
	function total_product_list($where)
	{
		$this->db->select('p.*,u.*');
		$this->db->from(PRODUCT.' as p');
		$this->db->join(USERS.' as u','u.id=p.user_id');
		$this->db->join(BOOKING.' as b','b.pid=p.id',"left");
		$this->db->where($where);
		return $query = $this->db->get();
		
	}
	function get_bookings($checkin_month,$checkin_year,$checkout_month,$checkout_year)
	{
		$this->db->select('b.pid,b.date_set');
		$this->db->from(BOOKING.' as b');
		$this->db->where("(month(b.checkin)='".$checkin_month."' and year(b.checkin)='".$checkin_year."') or (month(b.checkout)='".$checkout_month."' and year(b.checkout)='".$checkout_year."')");		
		$this->db->where("b.booking_status","3");
		return $query = $this->db->get();
		
	}
	function get_block_dates($checkin,$checkout)
	{
		$this->db->select('b.*');
		$this->db->from(BLOCK_DATES.' as b');
		$this->db->where("(DATE(b.dates)>='".$checkin."' and DATE(b.dates)<='".$checkout."')");		
		$this->db->where("b.day_type","1");
		return $query = $this->db->get();
		
	}
	function get_minprice()
	{
		$this->db->select('min(p.price) as minprice');
		$this->db->from(PRODUCT.' as p');
		$this->db->join(USERS.' as u','u.id=p.user_id');
		return $query = $this->db->get();
		
	}
	function get_maxprice()
	{
		$this->db->select('max(p.price) as maxprice');
		$this->db->from(PRODUCT.' as p');
		$this->db->join(USERS.' as u','u.id=p.user_id');
		return $query = $this->db->get();
		
	}
	function get_search_result_for_wishlist($where)
	{
		$this->db->select('p.id,p.photos,p.listing_title,p.address,p.beds_count,p.city,p.latitude,p.longitude,p.room_type,p.price,p.cover_photo');
		$this->db->from(PRODUCT.' as p');
		$this->db->join(USERS.' as u','u.id=p.user_id');
		$this->db->where('p.id',$where);
		return $query = $this->db->get();
		
	}
	
}