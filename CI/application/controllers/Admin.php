<?php

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->helper('url');
    }



    /********************************
     *                              *
     *      authentication here     *
     *                              *
     ********************************/ 

    private function is_logged_in() {

        return true;

    }

    public function index() {

        $data = array(
            'title' => 'Admin Dashboard'
        );

        if ($this->is_logged_in()) {
            $this->load->view('admin/template/main', $data);
        }

        else {
            echo "You are not logged in";
        }

    }

}

?>