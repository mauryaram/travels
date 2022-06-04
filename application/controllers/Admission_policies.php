<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admission_policies extends CI_Controller {
	public function index()
	{
            $data = [];
            $about = $this->cm->getSingleData('dt_cms',array('slug'=>'admission-policy'));

            $data['meta_title']         = !empty($about['meta_title']) ? $about['meta_title'] : "";
            $data['meta_keyword']       = !empty($about['meta_keyword']) ? $about['meta_keyword'] : "";
            $data['meta_description']   = !empty($about['meta_description']) ? $about['meta_description'] : "";
            $data['about'] = $about;
		$this->load->view('web/admission-policies',$data);
	}
}