<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller{
    
    function index(){

        $this->load->view('admin/dashboard');
        
    }

    function category(){
        
        $this->load->model('crud_model');  
        $data['category_data'] = $this->crud_model->select_category_data();
        $this->load->view('admin/category',$data);
        
    }
    
    function create(){
        $this->load->view('admin/add_category');
        
    }
    function category_save(){
        $this->load->model('crud_model');  
        $this->crud_model->save_category_details();
        redirect(site_url('admin/home/category'), 'refresh');
        
    }
    function edit_category($id){
       
        $this->load->model('crud_model');  
        $data=array();
        $single_category_data= $this->crud_model->getuser($id);
        $data['single_category_data']= $single_category_data;

        $this->load->view('admin/edit_category',$data);

        // $this->crud_model->save_edit_category($id);


   }

function save_edited_category($id){

    $this->load->model('crud_model');  
    $this->crud_model->edit_category_details($id);
    redirect(site_url('admin/home/category'), 'refresh');
    
}

function remove_category($id){
    $this->load->model('crud_model');  
    $this->crud_model->delete_category($id);
    redirect(site_url('admin/home/category'), 'refresh');
}


function sub_category(){
    $this->load->model('crud_model');  
    $data['subcategory_data'] = $this->crud_model->select_subcategory_data();
    $data['all_categories'] = $this->crud_model->select_category_data();
    $this->load->view('admin/sub_category',$data);
}

function add_subcategory(){
    $this->load->model('crud_model');  
    $data['category_data'] = $this->crud_model->select_category_data();
        $this->load->view('admin/add_subcategory',$data);
    }
    function create_subcategory(){
        $this->load->model('crud_model');
        $this->crud_model->create_subcategory_data();
        redirect(site_url('admin/home/sub_category'), 'refresh');
    }
    
    function update_subcategory($id){
        $this->load->model('crud_model');
        $single_subcategory_data= $this->crud_model->get_all_subcategory($id);
        $data=array();
        $data['single_subcategory_data']= $single_subcategory_data;
        
        $data['category_data'] = $this->crud_model->select_category_data();
        
        $this->load->view('admin/edit_subcategory',$data);
    }
    
    function edit_subcategory($subcategory_id){
       
        $this->load->model('crud_model');
        $this->crud_model->edit_subcategory_details($subcategory_id);
        redirect(site_url('admin/home/sub_category'), 'refresh');
        
        
    }

    function remove_subcategory($subcategory_id){
        $this->load->model('crud_model');
        $this->crud_model->delete_subcategory($subcategory_id);
        redirect(site_url('admin/home/sub_category'),'refresh');
    }
};


