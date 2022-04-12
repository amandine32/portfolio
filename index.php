<!DOCTYPE html>
<html>
<head>
	<title>Portfolio BTS SIO - Bremont Amandine</title>
	<meta charset="utf-8"> 	
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  	<link href="css/bootstrap.css" rel="stylesheet">
  	<link href="css/cover.css" rel="stylesheet">
   	<link href="css/blog.css" rel="stylesheet">
</head>
<body class="text-center text-white img-fluid" style="background-image: url(images/fond3.jpg );">

<div class="d-flex w-100 h-100 p-3 flex-column">

  <header class="mb-auto py-3 mb-4">
    	<div>
      		<h3 class="float-md mb-0">Portfolio | Amandine Bremont</h3>
      		<br>
      		<nav class="nav nav-masthead justify-content-center float-md">
      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	 
      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
      			<a class="nav-link active" href="index.php?page=0">Accueil</a>
      			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<li class="nav-item dropdown">
          			<a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            			Mes projets
          			</a>
          			<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            			<li><a class="dropdown-item" href="index.php?page=1">Site web Neige et Soleil</a></li>
            			<li><hr class="dropdown-divider"></li>
            			<li><a class="dropdown-item" href="index.php?page=7">Administration Neige et Soleil</a></li>
          			</ul>
        		</li>
	
        		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        		<a class="nav-link active" href="index.php?page=4">Veille</a>
        		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        		<a class="nav-link active" href="index.php?page=5">Stage</a>
        		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        		<a class="nav-link active" href="index.php?page=6">Contact</a>
        		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        		<li class="nav-item dropdown">
          			<!-- <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            			Dropdown
          			</a>
          			<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            			<li><a class="dropdown-item" href="#">Action</a></li>
            			<li><a class="dropdown-item" href="#">Another action</a></li>
            			<li><hr class="dropdown-divider"></li>
            			<li><a class="dropdown-item" href="#">Something else here</a></li>
          			</ul>-->
        		</li>
      		</nav>
    	</div>
  	</header>

	<?php
		if (isset($_GET['page'])) 
			$page = $_GET['page']; 
		else 
			$page = 0; 
		
		switch ($page) {
			case 1 : require_once("gestion_ppe.php"); 	
					 break;
			case 2 : require_once("gestion_competence.php"); 	
					 break;
			case 3 : require_once("gestion_projet.php");
					 break;
			case 4 : require_once("gestion_veille.php"); 	
					 break;
			case 5 : require_once("gestion_stage.php"); 	
					 break;
			case 6 : require_once("gestion_contact.php"); 	
					 break;
			case 7 : require_once("gestion_ppe2.php"); 	
					 break;
			case 0 : require_once("home.php"); 	
					 break;
			default : require_once("erreur.php"); 	
					 break;
		}
	
	?>
	
	<footer class="mt-auto text-white-50">
    	<p>© 2021-2022 Bremont Amandine | <a href="index.php?page=0" class="text-white">amandine.bremont-portoflio.fr </a> | <a href="index.php?page=0" class="text-white">Mentions légales</a></a>.</p>
  	</footer>

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>