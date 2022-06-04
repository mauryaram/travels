<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty_add extends CI_Controller {
    function __construct() {
             parent::__construct(); 
                login_check();
          }
	public function index()
	{
            $data           = [];
            $id             = $this->input->get('id'); 
            $data['title']  = ( !empty($id) ? 'Update' : 'Add') .' Faculty';
            $table          = 'dt_cms';
            $data['id']             = '';
            $data['page_type']      = '';
            $data['meta_title']     = '';
            $data['meta_keyword']   = '';
            $data['meta_description'] = '';
            $data['schema']         = '';
            $data['heading']        = '';
            $data['description']    = '';
            $data['affiliation']    = '';
            $data['subject']        = '';
            $data['seats']          = '';
            $data['duration']       = '';
            $data['syllabus']       = '';
            $data['noofsemester']   = '';
            $data['oldimage']       = '';
            $data['status']         = '';
            $data['priority']       = '';
            $singleData   = $this->cm->getSingleData($table,array('id'=>$id));
            if(!empty($singleData)){
            $data['id']             = $singleData['id'];
            $data['page_type']      = $singleData['page_type'];
            $data['meta_title']     = $singleData['meta_title'];
            $data['meta_keyword']   = $singleData['meta_keyword'];
            $data['meta_description'] = $singleData['meta_description'];
            $data['schema']         = $singleData['schema'];
            $data['heading']        = $singleData['heading'];
            $data['description']    = $singleData['description'];
            $data['affiliation']    = $singleData['affiliation'];
            $data['subject']        = $singleData['subject'];
            $data['seats']          = $singleData['seats'];
            $data['duration']       = $singleData['duration'];
            $data['noofsemester']   = $singleData['noofsemester'];
            $data['syllabus']       = $singleData['syllabus'];
            $data['oldimage']       = $singleData['image'];
            $data['status']         = $singleData['status'];  
            $data['priority']       = $singleData['priority']; 
            }
            $this->load->view('admin/faculty-add',$data);
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
            $supdate['page_type']           =  'faculty';
            $supdate['slug']                = !empty($post['heading']) ? seoUrl($post['heading']) : '';
            $supdate['heading']             = !empty($post['heading']) ? $post['heading'] : '';
            $supdate['description']         = !empty($post['description']) ? $post['description'] : '';
            $supdate['status']              = !empty($post['status']) ? $post['status'] : '';
            
            $supdate['affiliation']         = !empty($post['affiliation']) ? $post['affiliation'] : '';
            $supdate['subject']             = !empty($post['subject']) ? $post['subject'] : '';
            $supdate['seats']               = !empty($post['seats']) ? $post['seats'] : '';
            $supdate['duration']            = !empty($post['duration']) ? $post['duration'] : '';
            $supdate['priority']            = !empty($post['priority']) ? $post['priority'] : '';
            if($id){
            $supdate['updated_at']          = date('Y-m-d');
            } else {
            $supdate['created_at']          = date('Y-m-d');  
            }
            $supdate['image']               = !empty($img) ? $img : $post['oldimg'];
            $id         = !empty($post['id']) ? $post['id'] : '';
            $where      = !empty($id)? array('id'=>$id) :null;
            $message    = !empty($id)? 'Updated' :'Added';
            $saveupdate = $this->cm->saveupdate('dt_cms', $supdate, null, $where );
            if(!empty($saveupdate)){
            $this->session->set_flashdata('success','Record Is '.$message.' successfully!!!');
            redirect(admin('faculty_add?id='.$id));
            }else{
            $this->session->set_flashdata('error','Some Thing Went Wrong!!!!'); 
            redirect(admin('faculty_add?id='.$id));
            }
            
        }
}
