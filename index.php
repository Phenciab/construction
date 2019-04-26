<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style1.css">
		
		<title>ProjetAvril</title>
	</head>
	<body>
		
		<nav class="navbar navbar-expand-lg fixed-top">
			<a class="navbar-brand" href="#acc"></a>
			<h1>Construction +</h1>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
			Menu</button>

			<div class="collapse navbar-collapse" id="navbarNavDropdown">
			    <ul class="navbar-nav " >
			      	<li class="nav-item ">
			        	<a class="nav-link active" href="#acc">ACCUEIL</a>
			      	</li>
			      	<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						SERVICES
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#qui">QUI SOMMES NOUS</a>
						<a class="dropdown-item" href="#serv">NOTRE EQUIPE</a>						
						</div>
					</li>

			      	<li class="nav-item">
			       		<a class="nav-link" href="#contact">CONTACTS</a>
			      	</li>
			      	
			    </ul>

			   	<button class="btn btn-outline-warning my-2 my-sm-0"><a href="inscription.php">Inscription ?!</a></button>
			    
			 </div>
		</nav>

		<div class="container-fluid">
			<section class="main-page" id="acc">
				<h2 class="ah"> Confiez-nous vos idées </h2>
				
			</section>

			<section id="qui">
			<h2> Qui sommes-nous ? </h2>
			
				<div class="thumbnail img-rounded">
					<img src="images/const2.jpg"  >
				</div>
			
			<p class="float" style="line-height:45px;"> Construction + est une entreprise de construction spécialisée dans le génie-civil, les travaux publics,
			 le site GSM et divers. Nous maîtrisons une large palette de savoir-faire en construction et Rénovation de bâtiments,
			  Electricité, Etude et Conception de Plans et Devis… Construction + réalise tous les travaux de gros-œuvre
			   et second œuvre, de même que toutes les architectures en bâtiment, et se place ainsi comme interlocutrice
			    crédible dans les domaines de la construction. Soucieuse de satisfaire ses clients, l’entreprise met à votre disposition
			 des constructions de qualité et une garantie du travail bien fait. Construction + compte sur vous</p>
			</section>

			<section id="serv">
				<h2>Nos services, Notre équipe</h2>
				<div id="carouselbootstrap" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
						<img class="d-block w-1000" src="images/const4.jpg" alt="First slide">
						</div>
						<div class="carousel-item">
						<img class="d-block w-1000" src="images/const3.jpg" alt="Second slide">
						</div>
						<div class="carousel-item">
						<img class="d-block w-1000" src="images/const6.jpg" alt="Third slide">
						</div>
						<div class="carousel-item">
						<img class="d-block w-1000" src="images/const7.jpg" alt="Third slide">
						</div>
						<div class="carousel-item">
						<img class="d-block w-1000" src="images/const8.jpg" alt="Third slide">
						</div>
						<div class="carousel-item">
						<img class="d-block w-1000" src="images/const9.jpg" alt="Third slide">
						</div>
						<div class="carousel-item">
						<img class="d-block w-1000" src="images/const10.jpg" alt="Third slide">
						</div>
						<div class="carousel-item">
						<img class="d-block w-1000" src="images/const11.jpg" alt="Third slide">
						</div>
						<div class="carousel-item">
						<img class="d-block w-1000" src="images/const12.jpg" alt="Third slide">
						</div>
						<div class="carousel-item">
						<img class="d-block w-1000" src="images/const13.png" alt="Third slide">
						</div>
						<div class="carousel-item">
						<img class="d-block w-1000" src="images/const14.jpg" alt="Third slide">
						</div>
						<div class="carousel-item">
						<img class="d-block w-1000" src="images/const15.jpg" alt="Third slide">
						</div>
					</div>
				</div>
			</section>
			
			
		</div>
			<footer>
				<p>@copyright CONSTRUCTION + 2019</p>
				<div class="container-fluid text-center" id="contact">
					<span class="cont"><img src="images/facebook.png" ></span>
					<span class="cont"><img src="images/flickr.png" ></span>
					<span class="cont"><img src="images/twitter.png" ></span>
					<span class="cont"><img src="images/vimeo.png" ></span>
				</div>
			</footer>

		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>	
	</body>
</html>