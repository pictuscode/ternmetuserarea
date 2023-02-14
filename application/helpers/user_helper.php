<?php
function langdata()
{
	$ci=& get_instance();
	$ci->load->database(); 
	
	$sql 	= "SELECT * FROM lang WHERE status='Active'"; 
	$query 	= $ci->db->query($sql);
	$row 	= $query->result_array();
	return $row;
}

function langdata_default()
{
	$ci=& get_instance();
	$ci->load->database(); 
	
	$sql 	= "SELECT * FROM lang WHERE status='Active' AND default_lang='default'"; 
	$query 	= $ci->db->query($sql);
	$row 	= $query->result_array();
	return $row;
}
function get_spc_column($field,$table,$condition)
{
	$ci=& get_instance();
	$ci->load->database(); 
	
	$sql 	= "SELECT ".$field." FROM ".$table." WHERE ".$condition.""; 				
	$query 	= $ci->db->query($sql);
	if($query->num_rows()>0)
	{
	
		$row = $query->row();	
		return $row->$field;
	}
	else{
		return "";
	}
}
function timeago($datetime,$full = false) {
	$ci=& get_instance();
	$ci->load->helper('site_language_helper');
	$lang_key = $ci->session->userdata('pictus_rent_lang_key');
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;
    $string = array(
        'y' =>get_lang_site_key($lang_key,"common_lang","year") ,
        'm' => get_lang_site_key($lang_key,"common_lang","month"),
        'w' =>get_lang_site_key($lang_key,"common_lang","week"),
        'd' => get_lang_site_key($lang_key,"common_lang","day"),
        'h' => get_lang_site_key($lang_key,"common_lang","hour"),
        'i' => get_lang_site_key($lang_key,"common_lang","minute"),
        's' => get_lang_site_key($lang_key,"common_lang","second"),
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? get_lang_site_key($lang_key,"common_lang","s") : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) .' '.get_lang_site_key($lang_key,"home_lang","ago") : get_lang_site_key($lang_key,"home_lang","just_now");

	}
	function get_common_details($table,$field,$id,$lang_key){
		$ci=& get_instance();
		$ci->load->database();
		$sql ="SELECT ".$field." FROM ".$table." WHERE base_id=".$id." AND lang_id='". $lang_key."'";
		$query 	= $ci->db->query($sql);
		if($query->num_rows()>0)
		{
			$row = $query->row();
			return $row->$field;
		}
		else{
			$sql ="SELECT ".$field." FROM ".$table." WHERE base_id=".$id." AND lang_id='en'";
			$query 	= $ci->db->query($sql);
			$row = $query->row();
			return $row->$field;
		} 
	}
?>