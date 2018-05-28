<?php
//Ici les fonctions avec appels des modèles
Class visiteur extends CI_controller{

public function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
      $this->load->helper('Assets'); // helper 'assets' ajouté a Application
    //  $this->load->library("pagination");
      $this->load->model('ModeleProduit'); // chargement modèle, obligatoire
      $this->load->model('ModeleUtilisateur');
   } // __construct


public function SeConnecter() {

  $this->load->helper('form');
  $this->load->library('form_validation');

  $DonneesInjectees['TitreDeLaPage'] = 'Se Connecter';

  $this->form_validation->set_rules('txtEmail', 'Email', 'required');
  $this->form_validation->set_rules('txtMotDePasse', 'Mot de passe', 'required');

  if ($this->form_validation->run() === FALSE)
  {
      $this->load->view('templates/Header');
      $this->load->view('visiteur/SeConnecter', $DonneesInjectees);
      $this->load->view('templates/Footer');
  }
  else 
  {
      $Utilisateur = array(
      'Email' => $this->input->post('txtEmail'),
      'MotDePasse' => $this->input->post('txtMotDePasse'),
      );

      $UtilisateurRetourne = $this->ModeleUtilisateur->retournerUtilisateur($Utilisateur);
      if (!($UtilisateurRetourne == null))
      {
          $this->load->library('session');
          $this->session->identifiant = $UtilisateurRetourne->EMAIL;
          $this->session->Profil = $UtilisateurRetourne->PROFIL;

          $this->session->Nom = $UtilisateurRetourne->NOM;
          $this->session->Prenom = $UtilisateurRetourne->PRENOM;
          $this->load->view('templates/Header');
          //$this->load->view('visiteur/connexionReussie', $DonneesInjectees);
          $this->load->view('templates/Footer');
      }
      else 
      {
          $this->load->view('templates/Header');
          $this->load->view('visiteur/SeConnecter', $DonneesInjectees);
          $this->load->view('templates/Footer');
      }
    }  
  
} // fin seConnecter

Public function seDeconnecter()
{
    session_destroy();
    $DonneesInjectees['TitreDeLaPage'] = 'Truc';
    redirect('Visiteur/Accueil');
    $this->load->view('templates/Header');
    $this->load->view('visiteur/Accueil', $DonneesInjectees);
    $this->load->view('templates/Footer');

} // fin seDeConnecter



}







