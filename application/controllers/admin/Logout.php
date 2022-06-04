<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
function __construct() {
             parent::__construct(); 
                login_check();
          }
	public function index()
	{
                    $this->session->unset_userdata('adminlogin');
                    $this->session->sess_destroy();
                     redirect(admin('login'));
	}
}
