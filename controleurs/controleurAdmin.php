<?php
$choix=$_GET["choix"];
switch($choix)
{
    case "formulaire" :
        if (isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="OK"){
            $lesProduits=Produit::afficherTous();
            include("vues/listeProduitAdmin.php") ;
        }
        else{
            include("vues/formAdmin.php");
        }
    break;
    

    case "verif" :
        $rep=Admin::verifier($_POST["login"], md5($_POST["mdp"]));
        if($rep==true){
            $_SESSION["autorisation"]="OK";
            $lesProduits=Produit::afficherTous();
            include("vues/listeProduitAdmin.php") ;
        }
        else{
            include("vues/echecRecherche.php");
        }
    break;
    case "deconnexion" :
        Admin::deconnexion();
        include("vues/accueil.php");
    break;
}



?>
