<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
 
class User_model extends CI_Model 
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
        $this->load->library('session');

    }

    public function signin()
    {
        $this->load->view('login_admin');
    }

    public function Login($username,$password) 
    {

        $qry = $this->db->get_where('hgv_users',array('username'=>$username, 'Password'=>$password, 'user_type'=>'admin'));

        if ($qry->num_rows()>0) 
        {

            $row= $qry->row();
            $this->session->set_userdata('logged_in',$username); //setting session

            //You can further redirect users to Dashboard by using
            redirect(base_url().'Hgv_controller/dashboard');
            exit;
        }
        else
        {
            redirect(base_url().'/');
            exit;
        //redirect(base_url().'index.php/User/'); redirect back to login
    }
    }

} 
?>