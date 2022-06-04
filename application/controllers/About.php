<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index()
	{
            $data = array();

            $about = $this->cm->getSingleData('dt_cms',array('slug'=>'about-us'));

            $data['meta_title']         = !empty($about['meta_title']) ? $about['meta_title'] : "";
            $data['meta_keyword']       = !empty($about['meta_keyword']) ? $about['meta_keyword'] : "";
            $data['meta_description']   = !empty($about['meta_description']) ? $about['meta_description'] : "";
            $data['about'] = $about;
		$this->load->view('web/about-us',$data);

            
	}
}