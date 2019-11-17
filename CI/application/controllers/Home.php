<?php

class Home extends CI_Controller {

    public function index() {

        $this->load->view('home/index');

    }

    public function test() {
        echo "this is a test page";
    }

}

?>