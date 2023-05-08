<?php
class User_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index() {
        $data['users'] = $this->user_model->get_users();
        $this->load->view('users/listeUser', $data);
    }

    

}


    // public function create() {
    //     $this->load->helper('form');
    //     $this->load->library('form_validation');

    //     $data['title'] = 'Create a new user';

    //     $this->form_validation->set_rules('name', 'Name', 'required');
    //     $this->form_validation->set_rules('email', 'Email', 'required');

    //     if ($this->form_validation->run() === FALSE) {
    //         $this->load->view('users/create', $data);
    //     } else {
    //         $this->user_model->create_user($this->input->post());
    //         redirect('users');
    //     }
    // }
 

    // public function edit($id) {
    //     $this->load->helper('form');
    //     $this->load->library('form_validation');

    //     $data['title'] = 'Edit user';

    //     $data['user'] =
