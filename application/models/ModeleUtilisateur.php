<?php
class ModeleUtilisateur extends CI_Model {

public function __construct()
{
$this->load->database();
} // __construct

// On se connecte à la BDD


public function existe($Utilisateur) // non utilisée retour 1 si connecté, 0 sinon
{
$this->db->where($Utilisateur);
$this->db->from('Client');
return $this->db->count_all_results(); // nombre de ligne retournées par la requête
} // existe

// On vérifie que l'utilisateur existe


public function RetournerUtilisateur($NoProduit)
{

$requete = $this->db->get_where('Client', $NoProduit);
return $requete->row(); // retour d'une seule ligne !
// retour sous forme d'objets
} // retournerUtilisateur

// On retourne 1 resultat de compte



public function insererUnClient($DonneesAInserer)
{
return $this->db->insert('client', $DonneesAInserer);
}

public function retourneUtilisateur($Utilisateur)
    {
        $this->db->select('NOM','PRENOM','ADRESSE', 'VILLE', 'CODEPOSTAL', 'EMAIL', 'MOTDEPASSE');
        $requete = $this->db->get_where('client', $this->session->NOM);
        return $requete->row_array();
    } // fin retourner nom

// Inscription d'un client




} // Fin Classe