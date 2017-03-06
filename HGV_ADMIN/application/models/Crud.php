<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Crud extends CI_Model{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    public function adduser(){
        $field = array(
                       
		'username'=>$this->input->post('hgv_username'),
		'first_name'=>$this->input->post('hgv_firstname'),
		'last_name'=>$this->input->post('hgv_lastname'),
                'password'=>$this->input->post('hgv_password'),
                'user_type'=>$this->input->post('hgv_type'),
                        
		);
        
	$this->db->insert('hgv_users', $field);
	if($this->db->affected_rows() > 0){
		return true;
	}else{
            return false;
	}
        
        
    }
    
    //retrieve data from database
    public function read_users(){
        $query = $this->db->get('hgv_users');
        
        return $query;
    }
    
    
    public function update(){
        
    }
    
}