<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {
	public function index()
	{
            $data = [];
            $data['meta_title'] = '';
            $data['meta_keyword'] = '';
            $data['meta_description'] = '';
            $data['courses']    = $this->cm->getAllData('dt_cms','priority ASC',['page_type'=>'course_category','status'=>'Active'],'`slug`, `heading`, `description`, `affiliation`, `subject`, `syllabus`, `seats`, `duration`, `image`');
            $this->load->view('web/course-list',$data);
	}
}
