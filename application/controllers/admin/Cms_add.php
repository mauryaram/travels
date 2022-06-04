<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms_add extends CI_Controller {
    function __construct() {
             parent::__construct(); 
                login_check();
          }
	public function index()
	{
            $data           = [];
            $id             = $this->input->get('id'); 
            $data['title']  = ( !empty($id) ? 'Update' : 'Add') .' CMS';
            $table          = 'dt_cms';
            $data['data']   = $this->cm->getSingleData($table,array('id'=>$id));
            $this->load->view('admin/cms-add',$data);
	}
        public function saveup() {
            $post = $this->input->post();
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
            $supdate['meta_title']          = !empty($post['meta_title']) ? $post['meta_title'] : '';
            $supdate['meta_keyword']        = !empty($post['meta_keyword']) ? $post['meta_keyword'] : '';
            $supdate['meta_description']    = !empty($post['meta_description']) ? $post['meta_description'] : '';
            $supdate['schema']              = !empty($post['schema']) ? $post['schema'] : '';
            $supdate['heading']             = !empty($post['heading']) ? $post['heading'] : '';
            $supdate['description']         = !empty($post['description']) ? $post['description'] : '';
            $supdate['status']              = !empty($post['status']) ? $post['status'] : '';
            $supdate['updated_at']          = date('Y-m-d');
            $supdate['image']               = !empty($img) ? $img : $post['oldimg'];
            $id         = !empty($post['id']) ? $post['id'] : '';
            $where      = !empty($id)? array('id'=>$id) :null;
            $message    = !empty($id)? 'Updated' :'Added';
            $saveupdate = $this->cm->saveupdate('dt_cms', $supdate, null, $where );
            if(!empty($saveupdate)){
            $this->session->set_flashdata('success','Record Is '.$message.' successfully!!!');
            redirect(admin('cms_list'));
            }else{
            $this->session->set_flashdata('error','Some Thing Went Wrong!!!!'); 
            redirect(admin('cms_list'));
            }
            
        }
}
