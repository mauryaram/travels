<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms_list extends CI_Controller {
    function __construct() {
             parent::__construct(); 
                login_check();
          }
	public function index()
	{
            $data = [];
            $table              = 'dt_cms';
            $data['data']       = $this->cm->getAllData($table,'id DESC',['page_type'=>'cms'],'`id`,  `heading`, `image`, `status`');
            $this->load->view('admin/cms-list',$data);
	}
}
