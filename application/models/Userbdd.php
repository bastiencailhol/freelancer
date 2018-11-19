<?php
class Userbdd extends CI_Model {

    function __construct() {
        parent:: __construct();
        $this->load->database('user');
    }

    
    public function get($id = NULL) {
        $queryString = "SELECT * FROM user";
        if (isset($id)) {
            $queryString += " WHERE id = $id";
        }
        $query = $this->db->query($queryString);
        return $query->result();
    }

    public function insert($user) {
        $queryString = "INSERT INTO user(nom, mail) 
        VALUES ('".$user['nom']."', '"
        .$user['mail']."')";
        $query = $this->db->query($queryString);
        return $query;

    }

    public function edit($id, $data) {
        $nom = $data['nom'];
        $mail = $data['mail'];
        $queryString = "UPDATE user
        SET nom = '$nom',
        mail = '$mail'
        WHERE id = $id";
        $query = $this->db->query($queryString);
        return $query;
    }

    public function delete($id) {
        $queryString = "DELETE FROM user
        WHERE id = $id";
        $query = $this->db->query($queryString);
        return $query;
    }

}
