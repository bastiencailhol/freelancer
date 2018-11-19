<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Concert extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/produit
	 *	- or -
	 * 		http://example.com/index.php/produit/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('concertbdd');
		$donnees['concerts']=$this->concertbdd->listerTous();
			$this->load->view('vueconcerts.php', $donnees);

	}

	public function ajouterConcert() {
		$this->load->model('lieubdd');
		$donnees['lieux']=$this->lieubdd->get();
		$this->load->model('artistebdd');
		$donnees['artistes']=$this->artistebdd->get();
        $this->load->view('ajouter_concert.php', $donnees);
	}

	public function createConcert() {
		$post = $this->input->post();

        $this->load->model('concertbdd');
        
        $res = $this->concertbdd->insert($post);
        
        $this->load->view('ajouter_concert.php');
	}
    
    
}
