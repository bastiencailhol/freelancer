<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Connect extends CI_Controller
{

    public function index()
    {
        $arraydata = array(
            'name' => 'jacques',
            'firstname' => 'jean',
            'id' => 3,
        );

        $this->session->set_userdata($arraydata);

        redirect('/dashboard');
    }

}