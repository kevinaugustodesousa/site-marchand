<?php
$action=$_GET["action"];
switch($action)
{
    case "liste" :
        $lesProduits=Produit::afficherTous();
        include("vues/listeProduits.php");
    break;
    case "recherche" :
        $lesProduits=Produit::afficherRecherche();
        include("vues/listeProduits.php");
    break;
    case "ajout" :
        include("vues/formAjout.php");
    break;
    case "valideAjout" :
        $produit = new Produit();
        $produit->setNom($_POST["nom"]);
        $produit->setPrix($_POST["prix"]);
        $produit->setPhoto(basename($_FILES["photo"]["name"]));
        $nom_image = basename($_FILES["photo"]['name']);
        $chemin_destination='Images/'.$nom_image;
        move_uploaded_file($_FILES['photo']['tmp_name'],$chemin_destination);
        Produit::ajouter($produit);
        $lesProduits=Produit::afficherTous();
        include("vues/listeProduitAdmin.php") ;
    break;
    case "modifier" :
        $produit=Produit::trouverUnBonbon($_GET["modif"]);
        include("vues/formModif.php");
    break;
    case "valideModif" :
        $produit = new Produit();
        $produit->setNom($_POST["nom"]);
        $produit->setPrix($_POST["prix"]);
        $produit->setId($_POST["id"]);
        $produit->setPhoto($_POST["photo"]);
        Produit::modifier($produit);
        $lesProduits=Produit::afficherTous();
        include("vues/listeProduitAdmin.php") ;
    break;
    case "supprimer" :
        $produit=Produit::trouverUnBonbon($_GET["supp"]);
        Produit::supprimer($produit);
        $lesProduits=Produit::afficherTous();
        include("vues/listeProduitAdmin.php") ;
    break;
    case "panier" :
        $produit=Produit::trouverUnBonbon($_GET["panier"]);
        Produit::ajoutPanier($produit);
        $lesProduits=Produit::afficherTous();
        include("vues/listeProduits.php");
    break;
    case"apanier" :
        Produit::rajoutPanier($_GET["ajout"]);
        header('Location: index.php?uc=vpanier');
    break;
    case"rpanier" :
        Produit::retraitPanier($_GET["retrait"]);
        header('Location: index.php?uc=vpanier');
    break;
    case"vidpanier" :
        Produit::viderPanier();
        include("vues/panier_vide.php");
    break;
}



?>