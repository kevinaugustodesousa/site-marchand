

<div class="container">
<div class="row justify-content-center">
<div class="col"><h2> Nos produits </h2></div>
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
            <a href='index.php?uc=bonbons&amp;action=panier&amp;panier=".$produit->getId()."' class='btn btn-danger'>Ajouter au panier</a>
            </div>
            </div>";
    }  
    ?>
    </div>
    </div> 
    </div>
    