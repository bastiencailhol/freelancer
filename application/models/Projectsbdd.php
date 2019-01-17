<?php
class Projectsbdd extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database('freelancer');
    }

    public function getCurrentProjects($userId)
    {
        $queryString = "SELECT * FROM projects WHERE fk_user = $userId";
        $query = $this->db->query($queryString);
        return $query->result();
    }

    // public function get($id = null)
    // {
    //     $queryString = "SELECT * FROM user";
    //     if (isset($id)) {
    //         $queryString += " WHERE id = $id";
    //     }
    //     $query = $this->db->query($queryString);
    //     return $query->result();
    // }

    // public function insert($user)
    // {
    //     $queryString = "INSERT INTO user(nom, mail)
    //     VALUES ('" . $user['nom'] . "', '"
    //         . $user['mail'] . "')";
    //     $query = $this->db->query($queryString);
    //     return $query;

    // }

    // public function edit($id, $data)
    // {
    //     $nom = $data['nom'];
    //     $mail = $data['mail'];
    //     $queryString = "UPDATE user
    //     SET nom = '$nom',
    //     mail = '$mail'
    //     WHERE id = $id";
    //     $query = $this->db->query($queryString);
    //     return $query;
    // }

    // public function delete($id)
    // {
    //     $queryString = "DELETE FROM user
    //     WHERE id = $id";
    //     $query = $this->db->query($queryString);
    //     return $query;
    // }

    // public function listerTous()
    // {
    //     $this->load->database('concerts');
    //     $queryString = "SELECT c.date_concert, c.heure_ouverture, c.heure_debut, c.heure_fin, c.tarif_plein, c.tarif_reduit, c.lien_resa, c.illustration,
    //     p1.nom as p1_nom, p1.siteweb as p1_siteweb,
    //     p2.nom as p2_nom, p2.siteweb as p2_siteweb,
    //     l.nom, l.adresse, l.code_postal, l.ville, l.latitude, l.longitude, l.tel, l.siteweb
    //     FROM concert c
    //     LEFT JOIN artiste p1 on premiere_partie = p1.id
    //     LEFT JOIN artiste p2 on seconde_partie = p2.id
    //     INNER JOIN lieu l on id_lieu = l.id
    //     ";
    //     $query = $this->db->query($queryString);
    //     return $query->result();
    // }

}