<?php
$deco=false;
session_start();
include "header.php" ;

include("modeles/Produit.class.php");
include("modeles/monPdo.php");
include("modeles/Admin.class.php");

if(empty($_GET["uc"]))
{
    $uc="accueil";
}
else {
    $uc=$_GET["uc"];
}



switch($uc)
{
    case "accueil" :
        include("vues/accueil.php") ;
    break;

    case "bonbons" :
        include("controleurs/controleurBonbon.php");
    break;
    case "admin" :
        include("controleurs/controleurAdmin.php");
    break;
    case"vpanier" :
        if(isset($_SESSION["panier"]) and !empty($_SESSION["panier"]))
        {
        $lesProduits=Produit::voirPanier();
        include("vues/panier.php");
    }
    else
    { include("vues/panier_vide.php");
        }
        break;
        
}

include "footer.php" ;
?>