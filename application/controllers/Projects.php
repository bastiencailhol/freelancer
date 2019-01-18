<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Projects extends CI_Controller
{

    public function index()
    {
        $this->load->model('projectsbdd');
        $data['projects'] = $this->projectsbdd->getUserProjects($this->session->id);
        consoleLog($data);
        $this->load->template('projects', $data);
    }

}