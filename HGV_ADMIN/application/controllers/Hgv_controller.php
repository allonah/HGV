<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hgv_controller extends CI_Controller {
        function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->library('form_validation');
       
        $this->load->helper('url');
        $this->load->library('parser');
       
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
    
        public function index(){
             if(isset($_SESSION['logged_in'])){
             $this->load->view('index');
            }
            else{
                  redirect(base_url().'');
            }
        }
        
        public function dashboard(){

            if(isset($_SESSION['logged_in'])){
             $this->load->view('index');
            }
            else{
                  redirect(base_url().'');
            }
        }
   
        public function Account()
        {
            
            if(isset($_SESSION['logged_in'])){
                //load the database  
                $this->load->database(); 
                //load model for crud
                $this->load->model('Hgv_user_model');
                
                //load function from model
                 $data['hgv_users'] = $this->Hgv_user_model->get_all_hgv_users();
                
                //return data to view
                $this->load->view('Account',$data);

            }
            else{
                 redirect(base_url().'');
            }

  
        }
       
        
        public function AddNewAccount(){
                 if(isset($_SESSION['logged_in'])){
             $this->load->view('AddNewAccount');
            }
            else{
                  redirect(base_url().'');
            }
                
                        
        }
        
        public function EditAccount(){
            
                 if(isset($_SESSION['logged_in'])){
             $this->load->view('EditAccount');
            }
            else{
                  redirect(base_url().'');
            }
                
                        
        }
        
        public function db_bkup()
        {
                 if(isset($_SESSION['logged_in'])){
             $this->load->view('database backup');
            }
            else{
                  redirect(base_url().'');
            }
                
              
        }
        
        public function settings()
        {
                 if(isset($_SESSION['logged_in'])){
             $this->load->view('Settings');
            }
            else{
                  redirect(base_url().'');
            }
                
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
            
            /*username - no space, underscore, period, dash

first name- spaces allowed, dash, period
last name - period, dash, space*/
            
            
                $this->form_validation->set_rules('user_type','User Type','required');
		$this->form_validation->set_rules('username','Username','trim|required|alpha_numeric|max_length[45]|min_length[4]|is_unique[hgv_users.username]');
		$this->form_validation->set_rules('password','Password','trim|required|alpha_numeric|min_length[6]|max_length[45]');
		$this->form_validation->set_rules('first_name','First Name','trim|alpha|required|min_length[2]|max_length[45]');
		$this->form_validation->set_rules('last_name','Last Name','trim|alpha|required|min_length[2]|max_length[45]');
                $this->form_validation->set_rules('branch_id','Branch ID','trim|required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
			'user_type' => $this->input->post('user_type'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
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
    
          function edit($user_id)
    {   
                  $this->load->database(); 
                //load model for crud
                $this->load->model('Hgv_user_model');     
         
        // check if the hgv_user exists before trying to edit it
        $data['hgv_user'] = $this->Hgv_user_model->get_hgv_user($user_id);
        
        if(isset($data['hgv_user']['user_id']))
        {
            $this->load->library('form_validation');
            
            $original_value = $this->db->query("SELECT username FROM hgv_users WHERE user_id = ".$user_id)->row()->username ;
            if($this->input->post('username') != $original_value) {
               $is_unique =  '|is_unique[hgv_users.username]';
            } else {
               $is_unique =  '';
            }

                $this->form_validation->set_rules('user_type','User Type','trim|required');
		$this->form_validation->set_rules('username','Username','trim|required|alpha_numeric|max_length[45]|min_length[4]'.$is_unique);
		$this->form_validation->set_rules('password','Password','trim|required|alpha_numeric|min_length[6]|max_length[45]');
		$this->form_validation->set_rules('first_name','First Name','trim|alpha|required|min_length[2]|max_length[45]');
		$this->form_validation->set_rules('last_name','Last Name','trim|alpha|required|min_length[2]|max_length[45]');
                $this->form_validation->set_rules('branch_id','Branch ID','trim|required');
                
			if($this->form_validation->run())     
            {   
                $params = array(
					'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password')),
					'user_type' => $this->input->post('user_type'),
					'first_name' => $this->input->post('first_name'),
					'last_name' => $this->input->post('last_name'),
					'user_status' => $this->input->post('user_status'),
					'branch_id' => $this->input->post('branch_id'),
                );

                $this->Hgv_user_model->update_hgv_user($user_id,$params);            
                redirect('hgv_controller/Account');
            }
            else
            {
                $this->load->view('EditAccount',$data);
            }
}
        else
            show_error('The hgv_user you are trying to edit does not exist.');
    }
    
    public function Login()
 {
         $this->load->model('User_model');
         
         
         $this->form_validation->set_rules('username', 'username', 'trim|required|alpha_numeric|max_length[45]|min_length[4]');
        
         if ($this->form_validation->run() == false)
             {
              redirect('');
             exit;
             
             }
  
                $this->form_validation->set_rules('password', 'password', 'required');
                if ($this->form_validation->run() == false)
                {

                 redirect('');
                exit;
                }

                if ($this->form_validation->run() == true)
                {

                $username = $this->input->post('username');
                $password = md5(trim($this->input->post('password')));
                $res = $this->User_model->login($username,$password);
                echo $res; 
                exit;
                }
                
                }
                
                 public function logout()
                {
                $this->session->sess_destroy();
                redirect(base_url().''); 
                }
                
                public function check_session()
               {
                if(!$this->session->userdata['logged_in'])
                {
                    redirect(base_url().'');
                }
            }         



   

}
