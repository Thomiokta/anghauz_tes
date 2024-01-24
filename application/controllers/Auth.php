<?php

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_user');
        
    }

    function index() {
   $this->load->view('login');
    }

    function chek_login() {
        if (isset($_POST['submit'])) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');  
            $loginUser = $this->Model_user->chek_Login($username, $password);

            if (!empty($loginUser)) {
                
                $this->session->set_userdata($loginUser);
                redirect('Welcome');
          
            } else {
                // gagal login
                redirect('auth');
            }
        } else {
            redirect('auth'); 
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('Auth');
    }

}