<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/produit
     *    - or -
     *         http://example.com/index.php/produit/index
     *    - or -
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
        $donnees['concerts'] = $this->concertbdd->listerTous();
        $this->load->view('vueconcerts.php', $donnees);

    }

    public function ajouterConcert()
    {
        $this->load->model('lieubdd');
        $donnees['lieux'] = $this->lieubdd->get();
        $this->load->model('artistebdd');
        $donnees['artistes'] = $this->artistebdd->get();
        $this->load->view('ajouter_concert.php', $donnees);
    }

    public function createConcert()
    {
        $post = $this->input->post();

        $this->load->model('concertbdd');

        $res = $this->concertbdd->insert($post);

        $this->load->view('ajouter_concert.php');
    }

    // remplacé par un autoload dans le fichier autoload
    // public function __construct() {
    //     parent:: __construct();
    //     $this->load->model('userbdd');
    // }

    //----------------------------------------------------
    public function methode_put()
    {
        $inputs = $this->input->get();

        if (isset($inputs['id'])) {
            $id = $inputs['id'];
        } else {
            echo "renseigner id";
        }

        $content_type = $this->input->get_request_header('Content-Type');

        if ($content_type == "application/json") {
            $post = json_decode(file_get_contents('php://input'), true);
        } else {
            $post = $this->input->post();
        }

        $donnees = $this->userbdd->edit($id, $post);

        echo "ok";
    }

    //----------------------------------------------------
    public function methode_get()
    {
        $inputs = $this->input->get();

        if (isset($inputs['id'])) {
            $donnees = $this->userbdd->get($inputs['id']);
        } else {
            $donnees = $this->userbdd->get();
        }

        header('Content-Type:text/html');
        foreach ($donnees as $value) {
            echo $value->nom . " (" . $value->mail . ") \n";
        }
        // http_response_code(225);
    }

    //----------------------------------------------------
    public function methode_post()
    {

        $post = $this->input->post();

        $donnees = $this->userbdd->insert($post);

        echo "ok";

    }

    //----------------------------------------------------
    public function methode_delete()
    {
        $inputs = $this->input->get();

        if (isset($inputs['id'])) {
            $id = $inputs['id'];
        } else {
            echo "renseigner id";
        }

        $donnees = $this->userbdd->delete($id);

        echo "ok";

    }

}
