<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	public function index()
	{
            $data = [];
            $data['meta_title'] = '';
            $data['meta_keyword'] = '';
            $data['meta_description'] = '';
            $data['gallery']     = $this->cm->getAllData('dt_gallery','id DESC',['type'=>'gallery','status'=>'Active'],' `heading`, `image`',8);
            $this->load->view('web/gallery',$data);
	}
}