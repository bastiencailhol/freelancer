<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Connect extends CI_Controller
{

    public function index()
    {
        $arraydata = array('user' => 'toto');

        $this->session->set_userdata($arraydata);

        redirect('/dashboard');
    }

}
