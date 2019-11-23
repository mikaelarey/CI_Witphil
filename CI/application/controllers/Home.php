<?php

class Home extends CI_Controller {

    public function index() {

        $data['page'] = "home/main";
        $data['title'] = "Home Page";
        $this->load->view('home/template/main', $data);

    }

}

?>