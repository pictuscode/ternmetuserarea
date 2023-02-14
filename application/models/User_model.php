<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User_model extends My_Model
{
	public function __construct()
	{
		$this->load->helper('site_language_helper');
		parent::__construct();
	}
	
	function check_mail_profile($email,$id)
	{
		$this->db->select('u.id');
		$this->db->from(USERS.' as u');
		$this->db->where('u.email',$email);
		$this->db->where('u.id !='.$id);
		return $query = $this->db->get();
	}
	
	
	function get_all_message($booking_id)
	{
		$this->db->select('n.*,u.photo as uphoto,u.first_name as ufirst_name,t.photo as tphoto,t.first_name as tfirst_name,t.id as tid,u.id as uid');
		$this->db->from(NOTIFICATION.' as n');
		$this->db->join(USERS.' as u','u.id=n.user_id','left');
		$this->db->join(USERS.' as t','t.id=n.user_id','left');		
		$this->db->where('n.booking_id',$booking_id);
		//$this->db->where('n.message_status','1');
		$this->db->order_by('n.created','asc');
		return $query = $this->db->get();
		
	}
	
	function get_message_list_host($id,$count='')
	{
		$this->db->select('u.*,n.*,(select if(user_id=n.user_id,message,(concat("'.get_lang_site_key($this->data['lang_key'],"home_lang","you").': ",message))) from '.NOTIFICATION.' where booking_id=n.booking_id order by created desc limit 1 ) as msg,(select created from '.NOTIFICATION.' where booking_id=n.booking_id order by created desc limit 1) as msg_time ,(select viewer_status from '.NOTIFICATION.' where booking_id=n.booking_id and viewer_id="'.$id.'" and message_status="1"  order by created desc limit 1) as seestatus ,b.*,b.id as bid');
		$this->db->from(NOTIFICATION.' as n');
		$this->db->join(USERS.' as u','u.id=n.user_id','left');
		$this->db->join(BOOKING.' as b','n.booking_id=b.id and b.host_id="'.$id.'"');
		$this->db->where('n.viewer_id',$id);
		$this->db->group_by('n.booking_id');
		$this->db->order_by('n.created','desc');
		if($count!=""){
		$this->db->limit($count);
		$this->db->where("b.del_status","0");	
		}
		return $query = $this->db->get();
		
	}
	
	function get_message_list_user($id)
	{
		$this->db->select('u.*,n.*,(select if(user_id=n.viewer_id,message,(concat("'.get_lang_site_key($this->data['lang_key'],"home_lang","you").': ",message))) from '.NOTIFICATION.' where booking_id=n.booking_id  order by created desc limit 1 ) as msg,(select created from '.NOTIFICATION.' where booking_id=n.booking_id  order by created desc limit 1) as msg_time ,(select viewer_status from '.NOTIFICATION.' where booking_id=n.booking_id and viewer_id="'.$id.'" and message_status="1"  order by created desc limit 1) as seestatus,b.*,b.id as bid');
		$this->db->from(NOTIFICATION.' as n');
		$this->db->join(USERS.' as u','u.id=n.viewer_id','left');
		$this->db->join(BOOKING.' as b','n.booking_id=b.id and b.user_id="'.$id.'"');
		$this->db->where('n.user_id',$id);
		$this->db->group_by('n.booking_id');
		$this->db->order_by('n.created','desc');
		return $query = $this->db->get();
		
	}
	
	function get_bookings_innerchat($id)
	{
		$this->db->select('b.*,b.id as bid,b.user_id as buser_id,p.*,u.photo as uphoto,u.first_name as ufirst_name,t.photo as tphoto,t.first_name as tfirst_name,t.id as tid,u.id as uid,u.email_verified as uemail_verified,u.id_verified as uid_verified,u.phone_verified as uphone_verified,t.email_verified as temail_verified,t.id_verified as tid_verified,t.phone_verified as tphone_verified,u.last_name as ulast_name,t.last_name as tlast_name,t.where_live as twhere_live,u.where_live as uwhere_live,b.created as bcreated,b.instant_booking as binstant_booking,u.language as ulanguage,t.language as tlanguage,u.about as uabout,t.about as tabout,u.work as uwork,t.work as twork,u.school as uschool,t.school as tschool,u.fb_verified as ufb_verified');
		$this->db->from(BOOKING.' as b');
		$this->db->join(USERS.' as u','u.id=b.user_id','left');
		$this->db->join(USERS.' as t','t.id=b.host_id','left');
		$this->db->join(PRODUCT.' as p','p.id=b.pid','left');
		$this->db->where('b.id',$id);
		return $query = $this->db->get();
		
	}
	
   	function get_current_trips($user_id)
	{
		$this->db->select('b.*,b.id as bid,p.cover_photo,p.listing_title,p.address,u.first_name,u.last_name,b.created as bcreated,b.instant_booking as binstant_booking,u.photo');
		$this->db->from(BOOKING.' as b');
		$this->db->join(USERS.' as u','u.id=b.host_id');
		$this->db->join(PRODUCT.' as p','p.id=b.pid');
		$this->db->where('b.booking_status!=',"6");
		$this->db->where('b.user_id',$user_id);
		$this->db->where("b.checkout >='".date("Y-m-d")."'");
		$this->db->group_by('b.id');
		$this->db->order_by("b.created","desc");
		return $query = $this->db->get();
		
	}
	
   	function get_previous_trips($user_id)
	{
		$this->db->select('b.*,b.id as bid,p.cover_photo,p.listing_title,p.address,u.first_name,u.last_name,b.created as bcreated,b.instant_booking as binstant_booking,r.total_rate_value,u.photo');
		$this->db->from(BOOKING.' as b');
		$this->db->join(USERS.' as u','u.id=b.host_id');
		$this->db->join(PRODUCT.' as p','p.id=b.pid');
		$this->db->join(REVIEWS.' as r','r.booking_id=b.id',"left");
		$this->db->where('b.booking_status!=',"6");
		$this->db->where('b.user_id',$user_id);
		$this->db->where("b.checkout < '".date("Y-m-d")."'");
		$this->db->group_by('b.id');
		$this->db->order_by("b.created","desc");
		return $query = $this->db->get();
		
	}
	
	function get_reservation_list($user_id)
	{
		$this->db->select('b.*,b.id as bid,p.*,u.*,b.created as bcreated,b.instant_booking as binstant_booking,ct.host_fee');
		$this->db->from(BOOKING.' as b');
		$this->db->join(USERS.' as u','u.id=b.user_id');
		$this->db->join(PRODUCT.' as p','p.id=b.pid');
		$this->db->join(COMMISSION_TRACKING.' as ct','ct.booking_id=b.id','left');
		$this->db->where('b.host_id',$user_id);
		$this->db->group_by('b.id');
		$this->db->order_by("b.created","desc");
		return $query = $this->db->get();
		
	}
	
   	function get_your_listings($user_id)
	{
		$this->db->select('p.*');
		$this->db->from(PRODUCT.' as p');
		$this->db->where('p.user_id',$user_id);
		$this->db->order_by("p.created","desc");
		return $query = $this->db->get();
		
	}
	
	function get_stats_year($user_id)
	{
		$this->db->select('year(b.checkin) as year');
		$this->db->from(BOOKING.' as b');
		$this->db->where('b.host_id',$user_id);
		return $query = $this->db->get();
		
	}
	
	function get_stat($user_id,$month,$year)
	{
		$this->db->select('sum(ct.payable_amount) as payamount,sum(b.cleaning_fee) as cleaning_amount,(select sum(payable_amount) from '.COMMISSION_TRACKING.' where paid_status="1" and booking_id=b.id) as paid_amount,sum(b.no_of_nights) as total_nights');
		$this->db->from(BOOKING.' as b');
		$this->db->join(COMMISSION_TRACKING.' as ct','ct.booking_id=b.id');
		$this->db->where('b.host_id',$user_id);
		$this->db->where('b.booking_status',"3");
		$this->db->where('month(b.checkin)',$month);
		$this->db->where('year(b.checkin)',$year);		
		return $query = $this->db->get();
		
	}
	function reviews_about_you($user_id,$pstart,$searchper)
	{
		$this->db->select('r.*,p.id as pid,p.listing_title,p.address,p.price,b.booking_id as bid,u.first_name,u.photo,u.id as uid,r.id as rid');
		$this->db->from(REVIEWS.' as r');
		$this->db->join(USERS.' as u','u.id=r.user_id');
		$this->db->join(PRODUCT.' as p','p.id=r.pid');
		$this->db->join(BOOKING.' as b','b.id=r.booking_id');
		$this->db->where('b.host_id',$user_id); 
		$this->db->limit($searchper,$pstart);
		$this->db->order_by("r.created","desc");
		return $query = $this->db->get();
		
	}
	function write_reviews_list($user_id,$pstart,$searchper)
	{
		$this->db->select('p.id as pid,p.listing_title,p.address,p.price,b.booking_id as book_id,u.first_name,u.photo,u.id as uid,r.id as rid,b.id as bid');
		$this->db->from(BOOKING.' as b');
		$this->db->join(USERS.' as u','u.id=b.host_id');
		$this->db->join(PRODUCT.' as p','p.id=b.pid');
		$this->db->join(REVIEWS.' as r','r.booking_id=b.id',"left");
		$this->db->where('b.user_id',$user_id); 
		$this->db->where('r.id is NULL'); 
		$this->db->limit($searchper,$pstart);
		$this->db->group_by('b.id');
		$this->db->where("b.checkout < '".date("Y-m-d")."'");
		$this->db->order_by("r.created","desc");
		return $query = $this->db->get();
		
	}
	
   	function written_review_list($user_id,$pstart,$searchper)
	{
		$this->db->select('p.id as pid,p.listing_title,p.address,p.price,b.booking_id as book_id,u.first_name,u.photo,u.id as uid,r.id as rid,b.id as bid,r.total_rate_value,r.comments');
		$this->db->from(BOOKING.' as b');
		$this->db->join(USERS.' as u','u.id=b.host_id');
		$this->db->join(PRODUCT.' as p','p.id=b.pid');
		$this->db->join(REVIEWS.' as r','r.booking_id=b.id');
		$this->db->where('b.user_id',$user_id); 
		$this->db->limit($searchper,$pstart);
		$this->db->group_by('b.id');
		$this->db->order_by("r.created","desc");
		return $query = $this->db->get();
		
	}
	
   	function get_stat_review_list($pid="",$rno="")
	{
		$this->db->select('r.*,p.id as pid,p.listing_title,p.address,p.price,b.booking_id as bid,u.first_name,u.photo,u.id as uid,r.id as rid,r.created as rcreated,CEILING(r.total_rate_value) as ctotal_rate_value');
		$this->db->from(REVIEWS.' as r');
		$this->db->join(USERS.' as u','u.id=r.user_id');
		$this->db->join(PRODUCT.' as p','p.id=r.pid');
		$this->db->join(BOOKING.' as b','b.id=r.booking_id');
		if($rno!=""){
		 $this->db->where('TRUNCATE(r.total_rate_value,0)',$rno); 
		}
		if($pid!=""){
		$this->db->where('r.pid',$pid);
		}
		$this->db->limit($searchper,$pstart);
		$this->db->order_by("r.created","desc");
		return $query = $this->db->get();
		
	}
	
   	function stat_review_avg($pid="")
	{
		$this->db->select('avg(r.total_rate_value) as atotal_rate_value,avg(r.rate_acc) as arate_acc,avg(r.rate_loc) as arate_loc,avg(r.rate_com) as arate_com,avg(r.rate_checkin) as arate_checkin,avg(r.rate_clean) as arate_clean,avg(r.rate_value) as arate_value,count(r.id) as total_review');
		$this->db->from(REVIEWS.' as r');
		if($pid!=""){
		$this->db->where('r.pid',$pid); 
		}
		$this->db->group_by('r.pid'); 
		$this->db->limit($searchper,$pstart);
		$this->db->order_by("r.created","desc");
		return $query = $this->db->get();
		
	}
	function fiverate_count($pid="")
	{
		$this->db->select('count(r.id) as fiverate_count');
		$this->db->from(REVIEWS.' as r');
		if($pid!=""){
		$this->db->where('r.pid',$pid); 
		}
		$this->db->where('r.total_rate_value',"5"); 
		$this->db->group_by('r.pid'); 
		$this->db->limit($searchper,$pstart);
		$this->db->order_by("r.created","desc");
		return $query = $this->db->get();
		
	}
	function completed_transaction($user_id,$from_date="",$to_date="",$payment_type="",$pid="")
	{
		$this->db->select('ct.*,b.booking_id as bid,p.listing_title,p.address');
		$this->db->from(BOOKING.' as b');
		$this->db->join(COMMISSION_TRACKING.' as ct','ct.booking_id=b.id');
		$this->db->join(PRODUCT.' as p','p.id=b.pid');
		$this->db->where('b.host_id',$user_id);
		$this->db->where('b.booking_status',"3");
		$this->db->where('ct.paid_status',"1");
		if($from_date!="" && $to_date!=""){
		$this->db->where('date(ct.payment_date)>=',$from_date);
		$this->db->where('date(ct.payment_date)<=',$to_date);
		}
		if($pid!=""){
		$this->db->where('b.pid',$pid);	
		}
		if($payment_type!=""){
		$this->db->where('ct.payment_type',$payment_type);	
		}		
		return $query = $this->db->get();
		
	}
	function future_transaction($user_id,$from_date="",$to_date="",$payment_type="",$pid="")
	{
		$this->db->select('ct.*,b.booking_id as bid,p.listing_title,p.address');
		$this->db->from(BOOKING.' as b');
		$this->db->join(COMMISSION_TRACKING.' as ct','ct.booking_id=b.id');
		$this->db->join(PRODUCT.' as p','p.id=b.pid');
		$this->db->where('b.host_id',$user_id);
		$this->db->where('b.booking_status',"3");
		$this->db->where('ct.paid_status',"0");
		if($from_date!="" && $to_date!=""){
		$this->db->where('date(ct.payment_date)>=',$from_date);
		$this->db->where('date(ct.payment_date)<=',$to_date);
		}
		if($pid!=""){
		$this->db->where('b.pid',$pid);	
		}
		if($payment_type!=""){
		$this->db->where('ct.payment_type',$payment_type);	
		}		
		return $query = $this->db->get();
		
	}
	
	function host_dashboard_earnings($user_id,$month,$year)
	{
		$this->db->select('sum(ct.payable_amount) as payamount,sum(b.cleaning_fee) as cleaning_amount,(select sum(payable_amount) from '.COMMISSION_TRACKING.' where paid_status="1" and booking_id=b.id) as paid_amount,sum(b.no_of_nights) as total_nights');
		$this->db->from(BOOKING.' as b');
		$this->db->join(COMMISSION_TRACKING.' as ct','ct.booking_id=b.id');
		$this->db->where('b.host_id',$user_id);
		$this->db->where('b.booking_status',"3");
		$this->db->where('month(b.checkin)',$month);
		$this->db->where('year(b.checkin)',$year);		
		return $query = $this->db->get();
		
	}
   	function overall_view($id){
		$this->db->select('sum(p.view_count) as vcount');
		$this->db->from(PRODUCT.' as p');
		$this->db->where('p.user_id',$id);
		$this->db->group_by('p.user_id');
		return $query = $this->db->get();
	}
	function get_host_dashboard_notification($id,$limit=""){
		$this->db->select('n.*,u.photo');
		$this->db->from(NOTIFICATION.' as n');
		$this->db->join(USERS.' as u','u.id=n.user_id','left');
		$this->db->where('n.viewer_id',$id);
		$this->db->where('n.del_status',"0");
		$this->db->order_by('n.id',"desc");
		if($limit!=""){
			$this->db->limit($limit);
		}
		return $query = $this->db->get();
	}
	
	function get_total_review_user($id){
		$this->db->select('count(r.id) as total_review_count');
		$this->db->from(BOOKING.' as b');
		$this->db->join(REVIEWS.' as r','r.booking_id=b.id');
		$this->db->where('b.host_id',$id);		
		return $query = $this->db->get();
	}

	function get_user_review_profile($id,$start,$end){
		$this->db->select('r.*,b.booking_id as bid,u.first_name,u.where_live,u.photo,u.id as uid,u.created as ucreated,r.id as rid,r.created as rcreated,CEILING(r.total_rate_value) as ctotal_rate_value');
		$this->db->from(BOOKING.' as b');
		$this->db->join(USERS.' as u','u.id=b.user_id');
		$this->db->join(REVIEWS.' as r','r.booking_id=b.id');
		$this->db->where('b.host_id',$id);		
		$this->db->limit($end,$start);		
		return $query = $this->db->get();
	}
}