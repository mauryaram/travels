<?php defined("BASEPATH") OR exit("No Direct Access Allowed!");

class Common_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		}
		
		
	public function getAllData( $table, $orderby = null, $where = null,$keys = null,$limit = null ,$groupby = null){
		if(!is_null($keys)){
		$this->db->select($keys);
		}
		
		if(!is_null($limit)){
		$this->db->limit($limit);
		}

		if(!is_null($orderby)){
		$this->db->order_by($orderby);
		}
		
		if(!is_null($where)){
			$this->db->where($where);
		}
		if( !is_null($groupby) ){ $this->db->group_by($groupby); }
		
		return $this->db->get($table)->result_array();
	    }
	
	
	
	
	public function getSingleData( $table,$where = null,$keys = null , $orderby = null,$limit = null,$inkey=null,$invalue=null ){
		if(!is_null($keys)){
		$keys = trim($keys); 
		}else{ $keys = '*'; }
		$this->db->select($keys);

		if(!is_null($limit)){
		$this->db->limit($limit);
		}
		if(!is_null($orderby)){
		$this->db->order_by($orderby);
		}
		if(!is_null($where)){
		$this->db->where($where);
		}
		if( !is_null($inkey) && !is_null($invalue) && !empty($inkey) && !empty($invalue) ){
	    $query = $this->db->where_in($inkey,(explode(',',$invalue)));
        }
		 
        return $this->db->get($table)->row_array(); 

		}


	public function getRow( $table,$where = null,$keys = null , $orderby = null,$limit = null,$inkey=null,$invalue=null ){
		if(!is_null($keys)){
		$keys = trim($keys); 
		}else{ $keys = '*'; }
		$this->db->select($keys);

		if(!is_null($limit)){
		$this->db->limit($limit);
		}
		if(!is_null($orderby)){
		$this->db->order_by($orderby);
		}
		if(!is_null($where)){
		$this->db->where($where);
		}
		if( !is_null($inkey) && !is_null($invalue) && !empty($inkey) && !empty($invalue) ){
	    $query = $this->db->where_in($inkey,(explode(',',$invalue)));
        }
		
		if(strpos($keys, ',')!==false){
        return $this->db->get($table)->row_array();
        }else if(strpos($keys, '*')!==false){
        return $this->db->get($table)->row_array();
        }else{
		$rows = $this->db->get($table)->row_array();
		return $rows[$keys];
	    }

		}	
		
	public function getcolumn( $table,$where,$key , $orderby = null,$limit = null ){
		if(!is_null($key)){
		$this->db->select($key);
		}
		if(!is_null($limit)){
		$this->db->limit($limit);
		}
		if(!is_null($orderby)){
		$this->db->order_by($orderby);
		}
		$data = $this->db->where($where)->get($table)->row_array();
		return $data[$key];
		}
	
	
	public function delete($table,$where){
		return $this->db->where($where)->delete($table);
	    }
		
	
	
	public function countitem($table,$where = null, $whereor = null,$whereorkey = null ){
		
		if(!is_null($where)){
			
		$query = $this->db->where($where);
		
                if( !is_null($whereor)){ 
                $query = $this->db->group_start();
                foreach($whereor as $row){ $query = $this->db->or_where($whereorkey,$row ); }
                $query = $this->db->group_end();
                }
			
		$query = $this->db->get($table);
		}else{ $query = $this->db->get($table);}
		$count = $query->num_rows();
		return ( $count > 0 ? $count : 0 );
		}
		
	
	public function saveupdate($table, $dataarray, $validation = null, $where = null, $id = null ){
	
	if(!is_null( $where )){
		$status = $this->db->where( $where )->update($table,$dataarray);
		return !is_null( $id ) ? $id :  $status;
	}else{
		 
		 if(!is_null($validation)){
	     $this->db->where($validation);
	     }
	 
		 if( !is_null($validation) && $this->db->get($table)->num_rows() > 0 ){
			return false;
		 }else {
			$this->db->insert($table,$dataarray);
			return $this->db->insert_id();
		 }
    }
	    
}	
	
	
public function getfilter($tablename,$wherearray = null,$limit = null,$start = null, $orderby = null, $orderbykey = null, $whereor = null,$whereorkey = null, $like = null, $likekey = null,  $getorcount = null, $infield = null, $invalue = null, $keys = null ,$groupby = null ){

if( !is_null($keys) ){ $this->db->select($keys); }	
if( !is_null($groupby) ){ $this->db->group_by($groupby); }	
		 
if( !is_null($limit) && !is_null($start) && $start > 0 && $limit > 0 ){ 

if( !is_null($orderby) && ( $orderby == 'ASC' || $orderby == 'DESC')){ $query = $this->db->order_by($orderbykey, $orderby ); }

if(!is_null($likekey) && !is_null($like)){ $this->db->like($likekey,$like,'both'); }
		

$query = $this->db->limit($limit, $start);
	if( !is_null($whereor) && !is_null($whereorkey) ){ 
		$query = $this->db->group_start();
		foreach($whereor as $row){ $query = $this->db->or_where($whereorkey,$row ); } 
		$query = $this->db->group_end();
	}
	
	if( !is_null($whereor) && !is_null($whereorkey) && !empty($whereand)){ 
		$query = $this->db->group_start();
		foreach($whereand as $datet){ $query = $this->db->or_where($whereorkey,$datet ); }
		$query = $this->db->group_end();
	}
	
    if( !is_null($infield) && !is_null($invalue) && !empty($infield) && !empty($invalue) ){
	$query = $this->db->where_in($infield,(explode(',',$invalue)));
    }	
if( !is_null($wherearray)){$query = $this->db->where($wherearray);}
$query = $this->db->get($tablename);
}




else if( !is_null($limit) && $limit > 0){

if( !is_null($orderby) && ( $orderby == 'ASC' || $orderby == 'DESC')){ $query = $this->db->order_by($orderbykey, $orderby ); }

if(!is_null($likekey) && !is_null($like)){ $this->db->like($likekey,$like,'both'); }
$query = $this->db->limit($limit);
	if( !is_null($whereor) && !is_null($whereorkey) ){ 
		$query = $this->db->group_start();
		foreach($whereor as $row){ $query = $this->db->or_where($whereorkey,$row ); }
		$query = $this->db->group_end();
	}
    
	if( !is_null($infield) && !is_null($invalue) && !empty($infield) && !empty($invalue) ){
	$query = $this->db->where_in($infield, (explode(',',$invalue)));
    }	
if( !is_null($wherearray)){$query = $this->db->where($wherearray);}
$query = $this->db->get($tablename);

}

else{ 	
if( !is_null($orderby) && ( $orderby == 'ASC' || $orderby == 'DESC')){ $query = $this->db->order_by('id', $orderby ); }

if(!is_null($likekey) && !is_null($like)){ $this->db->like($likekey,$like,'both'); }

	if( !is_null($whereor) && !is_null($whereorkey)){ 
		$query = $this->db->group_start();
		foreach($whereor as $row){ $query = $this->db->or_where($whereorkey,$row ); }
		$query = $this->db->group_end();
	}
    
	if( !is_null($infield) && !is_null($invalue) && !empty($infield) && !empty($invalue) ){
	$query = $this->db->where_in($infield, (explode(',',$invalue)));
    }
if( !is_null($wherearray)){$query = $this->db->where($wherearray);}
$query = $this->db->get($tablename);
}


 
 $output = ($getorcount == 'count') && !is_null($getorcount) ? $query->num_rows() : $query->result_array();

return  $output ? $output : '' ;
}				
				




public function getAlllike( $table, $where = null,$keys = null ,$orderby = null, $like = null,$likekey = null,$likeaction = null ){ 
		if(!is_null($keys)){
		$this->db->select($keys);
		}
		
		if(!is_null($orderby)){
		$this->db->order_by($orderby);
		}
		
		
		if(!is_null($like) && !is_null($likekey) && !is_null($likeaction) ){
		$this->db->like($likekey,$like,$likeaction);
		}
		
		if(!is_null($where)){
			$this->db->where($where);
		}
		
		return $this->db->get($table)->result_array();
	    }
		
				

public function getAllwherein( $table, $where = null,$keys = null ,$orderby = null, $inkey = null,$inlistarray = null ){ 

		if(!is_null($keys)){
		$this->db->select($keys);
		}
		
		if(!is_null($orderby)){
		$this->db->order_by($orderby);
		}
		
		
		if(!is_null($inkey) && !is_null($inlistarray) ){
		$this->db->where_in($inkey, $inlistarray);
		}
		
		if(!is_null($where)){
			$this->db->where($where);
		}
		
		return $this->db->get($table)->result_array();
	    }
            
public function getAllwherenotin( $table, $where = null,$keys = null ,$orderby = null, $inkey = null,$inlistarray = null,$limit = null,$offset = null ){ 

if(!is_null($keys)){
$this->db->select($keys);
}

if(!is_null($orderby)){
$this->db->order_by($orderby);
}


if(!is_null($inkey) && !is_null($inlistarray) ){
$this->db->where_not_in($inkey, $inlistarray);
}

if(!is_null($where)){
$this->db->where($where);
}
if(!is_null( $limit )){ $this->db->limit( $limit, $offset ); }
return $this->db->get($table)->result_array();
}
		
public function broadCastview( $vendoruniqueid ){ 
        $this->db->select('brdcast.querynumber');
		$this->db->group_by('brdcast.id');
		//$this->db->order_by('brdcast.id DESC');
		$this->db->from('corpo_brdcastbooking as brdcast');
		$this->db->join('bid_vendorcity as citylist','citylist.cityname = brdcast.cityid','inner'); 
		$this->db->where( array('brdcast.bidclosestatus'=>'no','citylist.uniqueid'=>trim($vendoruniqueid) ));
		
        return $this->db->get()->result_array();
	    }	
					

public function joindata( $select, $where, $from, $join, $joinon, $joinkey,$groupby=null,$orderby=null ){ 
		if(!is_null( $select )){ $this->db->select( $select ); }
		if(!is_null( $groupby )){ $this->db->group_by( $groupby ); }
		if(!is_null( $orderby )){ $this->db->order_by( $orderby ); }
		if(!is_null( $from )){ $this->db->from( $from ); }
		if(!is_null( $join ) && !is_null( $joinkey ) ){ $this->db->join( $join, $joinon, $joinkey ); } 
		if(!is_null( $where )){ $this->db->where( $where ); }
		return $this->db->get()->result_array();
	    }	
		
	
public function getRadio( $table, $orderby = null, $where = null,$keys = null, $start = null, $limit = null, $having = null , $wherenotinkey = null, $wherenotinarray = null ){
		if(!is_null($keys)){
		$this->db->select($keys);
		}
		
		if(!is_null($limit) && !is_null($start)){
		$this->db->limit($limit,$start);
		}else if(!is_null($limit) && is_null($start)){
		$this->db->limit($limit);
		}

		if(!is_null($having)){
		$this->db->having( $having );
		}
		if(!is_null($orderby)){
		$this->db->order_by($orderby);
		}
		
		if(!is_null($where)){
			$this->db->where($where);
		}
		if(!is_null($wherenotinkey) && !is_null($wherenotinarray) ){
		$this->db->where_not_in($wherenotinkey, $wherenotinarray);
		}
		
		return $this->db->get($table)->result_array();
	    }


public function getlatlong( $where = null ){ 
        $this->db->select('cb.id,cb.name,cb.usercorpouniqueid');
		$this->db->group_by( 'lt.bookingid ' );
		$this->db->order_by('lt.id ASC');
		$this->db->from('latlong as lt');
		$this->db->join('booking as cb','cb.id = lt.bookingid','inner'); 
		$this->db->where( $where );
		
        return $this->db->get()->result_array();
	    }	

public function driverlatlong($key,$groupby,$orderby,$from,$join,$joinon,$jntype,$where=null){ 
        $this->db->select( $key ); 
        if(!is_null($groupby)){ $this->db->group_by( $groupby ); }
		if(!is_null($orderby)){ $this->db->order_by( $orderby ); }
		$this->db->from( $from );
		$this->db->join( $join , $joinon , $jntype ); 
		if(!is_null($where)){ $this->db->where( $where ); }
		
        return $this->db->get()->result_array();
	    }	

	public function joinmultiple( $select=null, $where=null, $from=null, $join=null, $groupby=null ,$orderby=null, $limit=null, $offset=null, $getorcount=null ){ 
		if(!is_null( $select )){ $this->db->select( $select ); }
		if(!is_null( $groupby )){ $this->db->group_by( $groupby ); }
		if(!is_null( $orderby )){ $this->db->order_by( $orderby ); }
		if(!is_null( $from )){ $this->db->from( $from ); }

		if(!is_null( $join ) && !is_null( $join ) ){
			 foreach ($join as $key => $value) {
			 	$this->db->join( $value['table'], $value['joinon'], $value['jointype'] );
			 } 
		 }  
		if(!is_null( $where )){ $this->db->where( $where ); }
		if(!is_null( $limit )){ $this->db->limit( $limit, $offset ); }
		 $query = $this->db->get();
		 $output = ($getorcount == 'count') && !is_null($getorcount) ? $query->num_rows() : $query->result_array();
		return  $output;
	    }	


}
?>