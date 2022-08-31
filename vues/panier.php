

<?php

  
$total =0;
$frais=5;
$totalttc = 0;


 ?>
 <div class="container">
	  <div class="row">
	  <div class="col-md-12">
 <h2>Votre Panier </h2>
 </div>
 </div>
 <div class="row">
 <div class="col-md-12">
         <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col" >Produit</th>
			
            <th scope="col">Prix Unit.</th>
            <th scope="col">Quantité</th>
            <th scope="col">Montant</th>
           </tr>
        </thead>
        <tbody>

           <?php 
			   foreach($lesProduits as $produits)
			{ $quantite=$_SESSION['panier'][$produits->getId()];
		
				  
			?>
            <tr>           
              <td><?php echo $produits->getNom() ;?></td>
			  <td><?php echo number_format($produits->getPrix(),2,',',' ');?> €</td>
            <td> 
              <?php echo $quantite; ?>
            </td>
            <td> <?php echo number_format($produits->getPrix()* $quantite,2,',',' ');?>€</td>
			<td> <a href='index.php?uc=bonbons&amp;action=apanier&amp;ajout=<?php echo $produits->getId() ?>' /><i class="fa fa-plus fa_3x" aria-hidden="true"></i> </a></td>
			<td> <a href='index.php?uc=bonbons&amp;action=rpanier&amp;retrait=<?php echo $produits->getId() ?>' /><i class="fa fa-minus " aria-hidden="true"></i></td>
          </tr>
          <?php $total += $produits->getPrix()*$quantite;?>
           <?php } ?>
       

        </tbody>
      </table>
	  </div>
	  </div>
	   <div class="row">
	  <div class='col-md-6'> </div>
	  <div class="col-md-6">
	  <table class= "table table-dark">
       <tr><th> Total HT  </th> <td> <em><?php echo number_format($total,2,',',' ') ?> €</em></td> </tr>
        <tr> <th> TVA(19.6 %) </th> <td>		<em>  <?php echo number_format($total*0.196,2,',',' ') ?> €</em></td></tr>
		<tr> <th>Frais de port </th> <td> <em> <?php echo $frais ?> €</em></td></tr>
        <tr> <th> TOTAL TTC </th> <td> <em> <?php echo number_format($total+$frais,2,',',' ') ?> €</em></td> </tr>
  		</table>
		 </div>
		 </div>
		 <div class="row">
		 	  <div class='col-md-6'> </div>
		 <div class="col-md-6">
             <a href="index.php" class="btn btn-info">Continuer mes achats</a> <br> <br>

         <a href="" class="btn btn-info" >Payer</a> <br> <br>
		
		<a href="index.php?uc=bonbons&amp;action=vidpanier" class="btn btn-info">Vider le panier</a>
             </div>     
     
	 </div>

