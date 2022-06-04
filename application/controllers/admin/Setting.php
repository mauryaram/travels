<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
    function __construct() {
             parent::__construct(); 
                login_check();
          }
	public function index()
	{
            $data           = [];
            $id             = 1;//$this->input->get('id'); 
            $data['title']  = ( !empty($id) ? 'Update' : 'Add') .' Settings';
            $table          = 'dt_settings';
            $data['id']                     = '';
            $data['company_name']           = '';
            $data['headoffice_address']     = '';
            $data['branchoffice_address']   = '';
            $data['phoneno']        = '';
            $data['care_phoneno']   = '';
            $data['emailid']        = '';
            $data['care_emailid']   = '';
            $data['facebook_link']  = '';
            $data['twitter_link']   = '';
            $data['youtube_link']   = '';
            $data['instagram_link'] = '';
            $data['oldimage']       = '';
            $data['status']         = '';
            
            $singleData   = $this->cm->getSingleData($table,array('id'=>$id));
            if(!empty($singleData)){
            $data['id']                 = $singleData['id'];
            $data['company_name']       = $singleData['company_name'];
            $data['headoffice_address'] = $singleData['headoffice_address'];
            $data['branchoffice_address']   = $singleData['branchoffice_address'];
            
            $data['phoneno']        = $singleData['phoneno'];
            $data['care_phoneno']   = $singleData['care_phoneno'];
            $data['emailid']        = $singleData['emailid'];
            $data['care_emailid']   = $singleData['care_emailid'];
            $data['facebook_link']  = $singleData['facebook_link'];
            $data['twitter_link']   = $singleData['twitter_link'];
            $data['youtube_link']   = $singleData['youtube_link'];
            $data['instagram_link'] = $singleData['instagram_link'];
            
            $data['oldimage']       = $singleData['logo'];
            $data['status']         = $singleData['status'];   
            }
            $this->load->view('admin/setting',$data);
	}
        public function saveup() {
            $post = $this->input->post();
            //print_r($post);exit;
            if(!empty($_FILES['image']['name'])){
                $config['upload_path']   = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name']     = $this->security->xss_clean($_FILES['image']['name']);
                $config['remove_spaces'] = TRUE;
                $config['encrypt_name']  = TRUE;
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                /*-------------Unlink Image----------*/
                $file  = 'uploads/'.$post['oldimg'];
                if(is_file($file) && @unlink($file)){
                }
                /*-------------Unlink Image----------*/
                /*-------------Unlink Image----------*/
                if($this->upload->do_upload('image')){
                    $uploadData                 = $this->upload->data();
                    $img                        = $uploadData['file_name'];
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = './uploads/'.$img;            
                    $config['new_image']        = './uploads/';
                    $config['maintain_ratio']   = TRUE;
                    $config['quality']          = '100%'; 
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize(); 
                    }  
                    }
                    /*----Profile Pic End----*/
            $supdate['company_name']       = !empty($post['company_name']) ? $post['company_name'] : "";
            $supdate['headoffice_address'] = !empty($post['headoffice_address']) ? $post['headoffice_address'] : "";
            $supdate['branchoffice_address']= !empty($post['branchoffice_address']) ? $post['branchoffice_address'] : "";
            
            $supdate['phoneno']        = !empty($post['phoneno']) ? $post['phoneno'] : "";
            $supdate['care_phoneno']   = !empty($post['care_phoneno']) ? $post['care_phoneno'] : "";
            $supdate['emailid']        = !empty($post['emailid']) ? $post['emailid'] : "";
            $supdate['care_emailid']   = !empty($post['care_emailid']) ? $post['care_emailid'] : "";
            $supdate['facebook_link']  = !empty($post['facebook_link']) ? $post['facebook_link'] : "";
            $supdate['twitter_link']   = !empty($post['twitter_link']) ? $post['twitter_link'] : "";
            $supdate['youtube_link']   = !empty($post['youtube_link']) ? $post['youtube_link'] : "";
            $supdate['instagram_link'] = !empty($post['instagram_link']) ? $post['instagram_link'] : "";
            $id         = !empty($post['id']) ? $post['id'] : '';
            if($id){
            $supdate['updated_at']          = date('Y-m-d');
            } else {
            $supdate['created_at']          = date('Y-m-d');  
            }
            $supdate['logo']               = !empty($img) ? $img : $post['oldimg'];
            
            $where      = !empty($id)? array('id'=>$id) :null;
            $saveupdate = $this->cm->saveupdate('dt_settings', $supdate, null, $where );
            if(!empty($saveupdate)){
            $this->session->set_flashdata('success','Record Is '.$message.' successfully!!!');
            redirect(admin('Setting'));
            }else{
            $this->session->set_flashdata('error','Some Thing Went Wrong!!!!'); 
            redirect(admin('Setting'));
            }
            
        }
}
