<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider_add extends CI_Controller {
    function __construct() {
             parent::__construct(); 
                login_check();
          }
	public function index()
	{
            $data           = [];
            $id             = $this->input->get('id'); 
            $data['title']  = ( !empty($id) ? 'Update' : 'Add') .' Slider';
            $table          = 'dt_gallery';
            $data['id']             = '';
            $data['type']      = '';
            $data['heading']     = '';
            $data['alt_tag']   = '';
            $data['oldimage']       = '';
            $data['status']         = '';
            
            $singleData   = $this->cm->getSingleData($table,array('id'=>$id));
            if(!empty($singleData)){
            $data['id']             = $singleData['id'];
            $data['type']      = $singleData['type'];
            $data['heading']     = $singleData['heading'];
            $data['alt_tag']   = $singleData['alt_tag'];
            $data['oldimage']       = $singleData['image'];
            $data['status']         = $singleData['status'];   
            }
            $this->load->view('admin/slider-add',$data);
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
            $supdate['type']                = 'slider';
            $supdate['alt_tag']             = !empty($post['alt_tag']) ? ($post['alt_tag']) : '';
            $supdate['heading']             = !empty($post['heading']) ? $post['heading'] : '';
            $supdate['status']              = !empty($post['status']) ? $post['status'] : '';
            $id         = !empty($post['id']) ? $post['id'] : '';
            if($id){
            $supdate['updated_at']          = date('Y-m-d');
            } else {
            $supdate['created_at']          = date('Y-m-d');  
            }
            $supdate['image']               = !empty($img) ? $img : $post['oldimg'];
            
            $where      = !empty($id)? array('id'=>$id) :null;
            $message    = !empty($id)? 'Updated' :'Added';
            $saveupdate = $this->cm->saveupdate('dt_gallery', $supdate, null, $where );
            if(!empty($saveupdate)){
            $this->session->set_flashdata('success','Record Is '.$message.' successfully!!!');
            redirect(admin('slider_add?id='.$id));
            }else{
            $this->session->set_flashdata('error','Some Thing Went Wrong!!!!'); 
            redirect(admin('slider_add?id='.$id));
            }
            
        }
}
