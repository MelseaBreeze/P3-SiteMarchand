<?php
Class Administrateur extends CI_controller{

public function __construct()
{
    parent::__construct();
    $this->load->model('modeleproduit');
    $this->load->library('session');

    if ($this->session->statut==0) //redirection si pas administrateur
    {
        $this->load->helper('url');
    //    redirect('/visiteur/seconnecter'); 
    }
} //fin __construct


public function ajouterunarticlehtml5()
{
  $this->load->helper('form');
  $DonneesInjectees['TitreDeLaPage'] = 'Ajouter un article';
 
  if ($this->input->post('boutonAjouter')) // On test si le formulaire a été posté.
  {
// le bouton 'submit', boutonAjouter est <> de NULL, on a posté quelque chose.
$donneesAInserer = array(
  'LIBELLE' => $this->input->post('txtTitre'),
  'DETAIL' => $this->input->post('txtTexte'),
  'NOMINAGE' => $this->input->post('txtNomFichierImage')
); // cTitre, cTexte, cNomFichierImage : champs de la table tabarticle
$this->ModeleArticle->insererUnArticle($donneesAInserer); // appel du modèle
$this->load->helper('url'); // helper chargé pour utilisation de site_url (dans la vue)
$this->load->view('administrateur/insertionReussie');
  }
  else
  {  
/* si formulaire non posté = bouton 'submit' à NULL : on est jamais passé par le formulaire -> on envoie le formulaire */
$this->load->view('templates/header');
$this->load->view('administrateur/ajouterunarticlehtml5', $DonneesInjectees);
$this->load->view('templates/footer');
  }
} // ajouterUnArticleHTML5

} //class