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

public function RetournerProduits($NoProduit = FALSE)
{
    if ($NoProduit === FALSE)
    {
        $requête = $this->db->get('produit');
        return $requête->result_array(); //retour d'un tableau associatif
    }
    //on va chercher l'article dont l'id est $pNoProduit
    $requête = $this->db->get_where('produit', array('NOPRODUIT' => $NoProduit));
    return $requête->row_array();

}// Fin RetournerProduits

Public Function InsererUnArticle($DonneesAInserer)
{
    return $this->db->insert('produit', $DonneesAInserer);
} // Fin InsererUnArticle

public function RetournerNom($NoProduit)
{
    $this->db->select('LIBELLE');
    $requete = $this->db->get_where('produit', array('NOPRODUIT'=>$NoProduit));
    return $requete->row_array();
} // fin retourner nom

public function RetournerNumero($NoProduit)
{
    $this->db->select('NOPRODUIT');
    $requete = $this->db->get_where('produit', array('NOPRODUIT'=>$NoProduit));
    return $requete->row_array();
} // fin retourner numéro

function ModifierQuantite()
{

    $unProduit = $this->input->post('rowid');
    $qty = $this->input->post('qty');
 
    for($i=0;$i < $total;$i++)
    {
        $data = array(
           'rowid' => $unProduit[$i],
           'qty'   => $qty[$i]
        );
         
        $this->cart->update($data);
    }
 
}


} //class

