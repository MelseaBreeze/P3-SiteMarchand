<?php

//Ici tous les appels à la BDD

//EXEMPLE :
//function afficherpdt();
//this->load->model('ModeleARecup')
//dans un array
//this->modelePdt
//$donnees[modelePdt] = 

class ModeleProduit extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    } // DATABASE A NE PAS OUBLIER SINON LES FONCTIONS MARCHENT PÔ /!\

public function insererUnArticle($pDonneesAInserer)
{
  return $this->db->insert('Produit', $pDonneesAInserer);
} // insererUnArticle 




} //class

