<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user');
        $this->load->helper('form');
    }
    
    public function show_data() {
        if($this->form_validation->submitted())
        {
            $this->form_validation
                ->name('username')->required()
                ->min_length(5)
                ->max_length(15)
                ->name('password')->required()
                ->name('email')->required()
                ->valid_email()
                ->name('usertype')->required();

            if($this->form_validation->run()) {
               if($this->user->insert_data($this->io->post('username'), $this->io->post('password'), $this->io->post('email'), $this->io->post('userype')));
                    $this->set->session_flashdata(array('status'=> 'User was successfully added'));

                $this->user->insert_data();
            }
        }

        $this->load->view('user/show');
    }
}
?>	