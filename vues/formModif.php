
<form method="POST" action="index.php?uc=bonbons&amp;action=valideModif"enctype='multipart/form-data'>
<?php
	
		echo "<input type='text' name='nom' value='".$produit->getNom(). "'><input type='text' name='prix' value=' ".$produit->getPrix(). "' ><input type='text' name=photo  value='".$produit->getPhoto()."' > ";
		echo "<input type='hidden' name='id' value='".$produit->getId()."'> ";
		
	
	?>
	<br> <br>
	<button type="submit" class="btn btn-primary">Enregistrer</button>
  
</form>
