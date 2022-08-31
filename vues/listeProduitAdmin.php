

<div class="container">
<div class="row justify-content-center">
<div class="col"><h2> Vous êtes en mode admin  </h2></div>
<a href='index.php?uc=admin&amp;choix=deconnexion' class='btn btn-danger'>Se deconnecter</a>
<a href='index.php?uc=bonbons&amp;action=ajout' class='btn btn-danger'>Ajouter</a>
</div>
<div class="row ">
    <div class="col">
<?php
    foreach($lesProduits as $produit) {
        echo "<div class='card text-center' style='width: 15rem;'>
        <img class='card-img-top' src='Images/".$produit->getPhoto()."'>
            <div class ='card-body'>
            <h5 class='card-title'>".$produit->getNom()."</h5>
            <p class='card-text'>".$produit->getPrix()."€</p>
            <a href='index.php?uc=bonbons&amp;action=modifier&amp;modif=".$produit->getId()."' class='btn btn-danger'>Modifier</a>
            <a href='index.php?uc=bonbons&amp;action=supprimer&amp;supp=".$produit->getId()."' class='btn btn-danger'>Suprimer</a>
            </div>
            </div>";
    }  
    ?>
    </div>
    </div> 
    </div>
    