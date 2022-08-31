<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
	<title> Les bonbons</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="images/candy.png" />
	<link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php"><i class="fas fa-candy-cane fa-4x" style="color:#FF5733;"></i></a>
	 <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	<div class="btn-group">
 
  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Que voulez vous faire?
          </a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="index.php?uc=bonbons&amp;action=liste">Acheter</a></li>
    <li><a class="dropdown-item" href="index.php?uc=admin&amp;choix=formulaire">Espace Admin</a></li>
  </ul>
  </li>
</div>
    <form class="d-flex" method="POST" action="index.php?uc=bonbons&amp;action=recherche">
        <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search" name="recherche">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </form>
	
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    
    
	  <li class="nav-link">
          <a href="index.php?uc=vpanier">
           Voir mon panier
          </a>
          
        </li>
     
	</ul>
</div>
</div>
</nav>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"> 
</script> 