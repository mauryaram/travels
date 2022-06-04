<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_details extends CI_Controller {
	public function index()
	{
            $slug = $this->uri->segment(1);
            $data = [];
            $about = $this->cm->getSingleData('dt_cms',array('slug'=>$slug));
            $data['faculty']    = $this->cm->getAllData('dt_cms','id DESC',['page_type'=>'faculty','status'=>'Active'],'`slug`, `heading`, `description`, `affiliation`, `subject`, `syllabus`, `seats`, `duration`, `image`',6);
            $data['courses']    = $this->cm->getAllData('dt_cms','id DESC',['page_type'=>'course_category','status'=>'Active'],'`slug`, `heading`, `description`, `image`',6);

            $data['meta_title']         = !empty($about['meta_title']) ? $about['meta_title'] : "";
            $data['meta_keyword']       = !empty($about['meta_keyword']) ? $about['meta_keyword'] : "";
            $data['meta_description']   = !empty($about['meta_description']) ? $about['meta_description'] : "";
            $data['about'] = $about;
            if($about['page_type'] == 'pen'){
            $this->load->view('web/from-our-pens',$data);    
            } else {
             $this->load->view('web/course-details',$data);   
            }
            
	}
}
