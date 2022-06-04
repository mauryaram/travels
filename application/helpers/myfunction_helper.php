<?php 
if(!function_exists('ci')){ 
	function ci(){
		$ci = & get_instance();
		return $ci; 
		}
}
if(!function_exists('web_assest'))
{
  function web_assest($file)
  {
   return base_url('asset/web/').$file;
  }
}
if(!function_exists('admin_assest'))
{
  function admin_assest($file)
  {
   return base_url('asset/admin/').$file;
  }
}
if(!function_exists('admin'))
{
  function admin($file)
  {
   return base_url('admin/').$file;
  }
}
if(!function_exists('img_url'))
{
  function img_url($file)
  {
   return base_url('uploads/').$file;
  }
}
function seoUrl($string) {
	$string = strtolower($string);
	$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
	$string = preg_replace("/[\s-]+/", " ", $string);
	$string = preg_replace("/[\s_]/", "-", $string);
	return $string;
}

function login_check(){
       if(!empty(ci()->session->userdata('adminlogin'))){
           
          $log = ci()->session->userdata('adminlogin');
          
           $find = ci()->db->get_where("dt_login",array('id'=>$log['id'],'status'=>'Active'))->row_array(); 
           if(!empty($find)){
           return TRUE;
           }else{
            ci()->session->sess_destroy();   
            redirect(base_url('admin/login'));
           }
            } else {
                ci()->session->sess_destroy();
                redirect(base_url('admin/login'));
            }
}

if(!function_exists('fetchresult')){
  function fetchresult($table, $where,$keys = null,$orderby = null ){
  	if( !is_null($keys) && !empty($keys)){ $row = ci()->db->select($keys);}
        if(!is_null($orderby)){
		ci()->db->order_by($orderby);
		}
	$row = ci()->db->get_where($table,$where);
	$row = $row->result_array();
	   return $row;
   }
}
if(!function_exists('getftcharray')){
  function getftcharray($table, $where, $name, $limit = null){
	  if( !is_null( $limit ) ){ ci()->db->limit( $limit );  }
	$row = ci()->db->get_where($table,$where);
	$row = $row->row_array();
	   if(!empty($row)){
	     return $row[$name];
	   }
  }
}