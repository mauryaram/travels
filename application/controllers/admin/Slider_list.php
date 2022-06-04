<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider_list extends CI_Controller {
    function __construct() {
             parent::__construct(); 
                login_check();
          }
	public function index()
	{
            $data = [];
            $table              = 'dt_gallery';
            $data['data']       = $this->cm->getAllData($table,'id DESC',['type'=>'slider'],'`id`,  `heading`, `image`, `status`');
            $this->load->view('admin/slider-list',$data);
	}
        public function delete() {
            $id = $this->input->get('id');
            $img = $this->input->get('img');
            if(!empty($img)){
                $file  = 'uploads/'.$img;
                if(is_file($file) && @unlink($file)){
                }
            }
            $this->cm->delete('dt_gallery',array('id'=>$id));
            redirect(admin('slider_list'));
        }
}
