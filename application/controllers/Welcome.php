<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
            $data = [];
            $data['meta_title'] = '';
            $data['meta_keyword'] = '';
            $data['meta_description'] = '';
            $data['faculty']    = $this->cm->getAllData('dt_cms','id DESC',['page_type'=>'faculty','status'=>'Active'],'`slug`, `heading`, `description`, `affiliation`, `subject`, `syllabus`, `seats`, `duration`, `image`',6);
            $data['courses']    = $this->cm->getAllData('dt_cms','id DESC',['page_type'=>'course_category','status'=>'Active'],'`slug`, `heading`, `description`, `image`',6);
            $data['slider']     = $this->cm->getAllData('dt_gallery','id DESC',['type'=>'slider','status'=>'Active'],' `heading`, `image`',8);
            $data['gallery']     = $this->cm->getAllData('dt_gallery','id DESC',['type'=>'gallery','status'=>'Active'],' `heading`, `image`',8);
            $data['about']      = $this->cm->getSingleData('dt_cms',array('slug'=>'about-us'));
            $this->load->view('web/index',$data);
	}
}
