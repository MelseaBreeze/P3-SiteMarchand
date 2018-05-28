<!DOCTYPE html>
<html lang="en">

<head>
    <title>Axolottie</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<?php if (!is_null($this->session->identifiant)) : ?>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="#">Axolottie</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
        <li>
        <li><a href="<?php echo site_url('Visiteur/Accueil') ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="<?php echo site_url('Visiteur/Catalogue') ?>"><span class="glyphicon glyphicon-book"></span> Catalogue</a></li>
            <li><a href="<?php echo site_url('Visiteur/Panier') ?>"><span class="glyphicon glyphicon-shopping-cart"></span> Panier</a></li>
            <li><a href="<?php echo site_url('Client/Compte') ?>"><span class="glyphicon glyphicon-user"></span> Compte</a></li>
            <?php if ($this->session->Profil=='1') : ?>
            <li><a href="<?php echo site_url('Administrateur/AjouterUnProduit') ?>">Ajouter un Produit</a></li>;
            <?php endif; ?>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo site_url('Visiteur/SeDeconnecter') ?>"><span class="glyphicon glyphicon-log-out"></span> Se Déconnecter</a></li>
        </ul>
    </div>
    </div>
    </nav>

<?php else : ?>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
        </button>
        
        <a class="navbar-brand" href="#">Axolottie</a>
        
        </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo site_url('Visiteur/Accueil') ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="<?php echo site_url('Visiteur/Catalogue') ?>"><span class="glyphicon glyphicon-book"></span> Catalogue</a></li>
            <li><a href="<?php echo site_url('Visiteur/Panier') ?>"><span class="glyphicon glyphicon-shopping-cart"></span> Panier</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo site_url('Visiteur/InsertionClient') ?>">S'inscire</a></li>
            <li><a href="<?php echo site_url('Visiteur/SeConnecter') ?>"><span class="glyphicon glyphicon-log-in"></span> Se Connecter</a></li>
        </ul>
    </div>
    </div>
    </nav>

<?php endif; ?>