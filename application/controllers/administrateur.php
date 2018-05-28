
<?php
class Administrateur extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModeleProduit');

        /* les méthodes du contrôleur Administrateur doivent n'être
        accessibles qu'à l'administrateur (Nota Bene : a chaque appel
        d'une méthode d'Administrateur on a appel d'abord du constructeur */

        $this->load->library('session');
        if ($this->session->statut==0) // 0 : statut visiteur
        {
            $this->load->helper('url'); // pour utiliser redirect
            //redirect('/visiteur/seConnecter'); // pas les droits : redirection vers connexion
        }
    } // __construct


    public function ajouterUnProduit()
    {
        $this->load->helper('form');
        $DonneesInjectees['TitreDeLaPage'] = 'Ajouter un produit';

        // l'image n'est pas obligatoire : pas required

        if ($this->input->post('boutonAjouter')) //on test si le formulaire a été posté
        {
          $DonneesAInserer = array(
          'LIBELLE' => $this->input->post('txtTitre'),
          'TYPE' => $this->input->post('txtType'),
          'NOCATEGORIE' => $this->input->post('txtCategorie'),
          'NOMARQUE' => $this->input->post('txtMarque'),
          'DATEAJOUT' => $this->input->post('txtDate'),
          'PRIXHT' => $this->input->post('txtPrix'),
          'TAUXTVA' => $this->input->post('txtTVA'),
          'DETAIL' => $this->input->post('txtTexte'),
          'QUANTITEENSTOCK' => $this->input->post('txtQuantite'),
          'NOMINAGE' => $this->input->post('txtNomFichierImage')
            );
            //var_dump($DonneesAInserer);
            $this->ModeleProduit->InsererUnArticle($DonneesAInserer); //appel du modele
            $this->load->helper('url'); // helper chargé pour l'utilisation de site_url (dans la vue)
            $this->load->view('Administrateur/InsertionReussie');
        }
        else
        {
        // Si le formulaire non posté = bouton 'submit' à NULL : on est jamais passé dans le formulaire 
        // -> on envoie le formulaire !!!
        $this->load->view('templates/Header');
        $this->load->view('administrateur/AjouterUnProduit', $DonneesInjectees);
        $this->load->view('templates/Footer');
        }   
    } // ajouterUnArticle

} //Class
