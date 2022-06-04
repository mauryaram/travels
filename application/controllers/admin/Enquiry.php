<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {
    function __construct() {
             parent::__construct(); 
                login_check();
          }
	public function index()
	{
            $data = [];
            $table              = 'dt_enquiry';
            $data['data']       = $this->cm->getAllData($table,'id DESC');
            $this->load->view('admin/enquiry-list',$data);
	}
        public function delete() {
            $id = $this->input->get('id');
            $this->cm->delete('dt_enquiry',array('id'=>$id));
            redirect(admin('enquiry')); 
        }
}
