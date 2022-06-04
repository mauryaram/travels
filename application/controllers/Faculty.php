<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty extends CI_Controller {
	public function index()
	{
            $data = [];
            $data['meta_title'] = '';
            $data['meta_keyword'] = '';
            $data['meta_description'] = '';
            $data['faculty']    = $this->cm->getAllData('dt_cms','priority ASC',['page_type'=>'faculty','status'=>'Active'],'`slug`, `heading`, `description`, `affiliation`, `subject`, `syllabus`, `seats`, `duration`, `image`');
            $this->load->view('web/faculty-list',$data);
	}
}
