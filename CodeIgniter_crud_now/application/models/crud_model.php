<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

    class crud_model extends CI_Model {

        function save_category_details(){
            
        $category_data= array(
        'name'		   => $this->input->post('category_name'),
        'description'   => $this->input->post('description'),
        'image'         => $this->input->post('category_img')
        );
    $this->db->insert('category',$category_data);

 }

 function select_category_data()
 {
     return $this->db->get('category')->result_array();
     
 }
 function getuser($category_id){
     $result= $this->db->get_where('category', array('category_id' => $category_id))->row_array();
    
     return $result;

 }

 function edit_category_details($userid){
 
    $edit_category_data= array(      
        'name'		   => $this->input->post('category_name'),
        'description'   => $this->input->post('description'),
        'image'         => $this->input->post('category_img')
        );
        $this->db->where('category_id',$userid);
        // $this->db->update('category',$edit_category_data);
        $this->db->update('category', $edit_category_data);

 }
 
   function delete_category($category_id){
    $this->db->where('category_id',$category_id);
    $this->db->delete('category');
 } 

 function create_subcategory_data(){
    $subcategory_data= array(
        'category_id'		   => $this->input->post('category'),
        'name'		   => $this->input->post('subcategory_name'),
        'description'   => $this->input->post('description'),
        'image'         => $this->input->post('subcategory_img')
        );
    $this->db->insert('sub_category',$subcategory_data);
 }

 function select_subcategory_data(){
    return $this->db->get('sub_category')->result_array();
 }

 function get_all_subcategory($id){

    $result= $this->db->get_where('sub_category', array('subcategory_id' => $id))->row_array();
    
    return $result;
 }

 function edit_subcategory_details($subcategory_id){
    $edit_subcategory_data= array(      
        'category_id'		   => $this->input->post('category'),
        'name'		           => $this->input->post('subcategory_name'),
        'description'          => $this->input->post('description'),
        'image'                => $this->input->post('subcategory_img')
        );
        $this->db->where('subcategory_id',$subcategory_id);
        // $this->db->update('category',$edit_category_data);
        $this->db->update('sub_category', $edit_subcategory_data);
 }

    function delete_subcategory($subcategory_id){
        $this->db->where('subcategory_id',$subcategory_id);
        $this->db->delete('sub_category');
    }
}