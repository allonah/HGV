<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hgv_controller extends CI_Controller {
        function __construct()
    {
        parent::__construct();
        
       
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
        
        public function Account()
        {
                //load the database  
                $this->load->database(); 
                //load model for crud
                $this->load->model('Crud');
                
                //load function from model
                $data['user']=$this->Crud->read_users();
                
                //return data to view
                $this->load->view('Account',$data);
  
        }
       
        
        public function AddNewAccount(){
            
                $this->load->view('AddNewAccount');
                        
        }
        
        public function useradd(){
            
            $this->load->view('useradd');
        }
        
        public function db_bkup()
        {
                $this->load->view('database backup');
              
        }
        
        public function settings()
        {
                $this->load->view('Settings');
        }
        
        public function showusers(){
            $result = $this->Crud->showusers();
            echo json_encode($result);
        }
        
         public function add(){   
            
            $this->load->database();
            //load model for crud
            $this->load->model('Hgv_user_model');
            $this->load->library('form_validation');
                $this->form_validation->set_rules('user_type','User Type','required');
		$this->form_validation->set_rules('username','Username','required|alpha_numeric|max_length[45]|min_length[4]');
		$this->form_validation->set_rules('password','Password','required|alpha_numeric|min_length[6]|max_length[45]');
		$this->form_validation->set_rules('first_name','First Name','alpha|required|min_length[2]|max_length[45]');
		$this->form_validation->set_rules('last_name','Last Name','alpha|required|min_length[2]|max_length[45]');
                $this->form_validation->set_rules('branch_id','Branch ID','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
			'user_type' => $this->input->post('user_type'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'first_name' => $this->input->post('first_name'),
                        'last_name' => $this->input->post('last_name'),
			'branch_id' => $this->input->post('branch_id'),
			'user_status' => 'active',
                                
            );      
            $hgv_user_id = $this->Hgv_user_model->add_hgv_user($params);
            redirect('Hgv_controller/Account');
        }
        else{
            $this->load->view('AddNewAccount');
        }
    }


}
