<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Projects extends CI_Controller
{

    public function index()
    {
        $this->load->model('projectsbdd');
        // echo "<script>console.log('" . $this->session->id . "')</script>";
        consoleLog('userId', $_SESSION['id']);
        $data['projects'] = $this->projectsbdd->getCurrentProjects($this->session->id);
        $this->load->template('projects');
    }

}