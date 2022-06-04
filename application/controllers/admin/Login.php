<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login
extends CI_Controller {
	public function index()
	{
		$this->load->view('admin/login');
	}
        public function check() {
        $post = $this->security->xss_clean($this->input->post());
        $check['user_id'] = !empty($post['user_id']) ? $post['user_id'] : "";
        $check['password'] = !empty($post['password']) ? MD5($post['password']) : ""; 
        $check['status']   = 'Active';
        $query = $this->cm->getSingleData('dt_login',$check,'`id`, `name`, `user_id`, `password`, `status`');
       if(!empty($query['user_id'] == $check['user_id'] && $query['password'] == $check['password'])) {
                $data = [
                    'id'        => $query['id'],
                    'name'      => !empty($query['name']) ? $query['name'] : "",
                    'user_id'   => !empty($query['user_id']) ? $query['user_id'] : "",
                    'password'  => !empty($query['password']) ? $query['password'] : "",
                    'status'    => !empty($query['status']) ? $query['status'] : ""
                ];
                $this->session->set_userdata('adminlogin',$data);
                $this->session->set_flashdata('success', 'Login successful!');
                redirect(admin('Dashboard'));
            } else {
                $this->session->set_flashdata('error', 'Username or password is wrong!');
                redirect(admin('login'));
            }
        }
}
