<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty_list extends CI_Controller {
    function __construct() {
             parent::__construct(); 
                login_check();
          }
	public function index()
	{
            $data = [];
            $table              = 'dt_cms';
            $data['data']       = $this->cm->getAllData($table,'id DESC',['page_type'=>'faculty'],'`id`,  `heading`, `image`, `status`');
            $this->load->view('admin/faculty-list',$data);
	}
        public function delete() {
            $id = $this->input->get('id');
            $img = $this->input->get('img');
            if(!empty($img)){
                $file  = 'uploads/'.$img;
                if(is_file($file) && @unlink($file)){
                }
            }
            $this->cm->delete('dt_cms',array('id'=>$id));
            redirect(admin('faculty_list'));
        }
}
