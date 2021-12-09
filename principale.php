<?php
    session_start();
    if($_SESSION['username'] !== ""){
        $user = $_SESSION['username'];
    }
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Dashbord html and css</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style_utl.css">
</head>
<body>
	<input type="checkbox" id="menu" name="">
	<div class="sidebar">
		<div class="sidebar-brand">
			<h2><span class="fa fa-user-o"></span>WELCOME <?php echo "$user" ?></h2>
		</div>

		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="" class="active"><span class="fa fa-home"></span><span>Home</span></a>
				</li>
				<li>
					<a href=""><span class="fa fa-tasks"></span><span>Products</span></a>
				</li>
		</div>
	</div>



	<div class="content">
		
		<header>
			<p><label for="menu"><span class="fa fa-bars"></span></label><span class="accueil">Home</span></p>

			<div class="search-wrapper">
				<span class="fa fa-search"></span>
				<input type="search" name="" placeholder="recherche" />
			</div>

			<div class="user-wrapper" id="dropdown">
				<div>
					<h4><?php echo "$user" ?></h4>
					<small>Admin</small>
				</div>
				
				<img src="images/pp.jpg" width="30" height="30" class="logo-admin">
				<div class="dropdown-content">
				<a href="utilisateur.php">Mon profil</a> <br>
                <a href='principale.php?deconnexion=true'><span>Déconnexion</span></a>
            
            <!-- tester si l'utilisateur est connecté -->
            <?php
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:login_page.php");
                   }
                }
            ?>
				</div>
				
			</div>
		</header>

		<main>
			<div class="cards">
				<div class="card-single">
					<div>
						<h2>2.000.000</h2>
						<small>Ventes</small>
					</div>
					<div>
						<span class="fa fa-shopping-cart"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
						<h2>+30</h2>
						<small>Stock</small>
					</div>
					<div>
						<span class="fa fa-newspaper-o"></span>
					</div>
				</div>
				<div class="card-single">
					<div>
						<h2>58</h2>
						<small>Fournisseur</small>
					</div>
					<div>
						<span class="fa fa-outdent"></span>
					</div>
				</div>
				<div class="card-single">
					<div>
						<h2>20k</h2>
						<small>Communauté</small>
					</div>
					<div>
						<span class="fa fa-group"></span>
					</div>
				</div>
			</div>

			<div class="composant">
				<div class="ventes">
					<div class="case">
						<div class="header-case">
							<h2>Listes produits</h2>
							<button class="button">voir plus<span class="fa fa-arrow-right"></span></button>
						</div>
						<div class="body-case">
							<div class="tableau">
								<table width="100%">
								  <thead>
								    <tr>
								      <td>First</td>
								      <td>Last</td>
								      <td>Handle</td>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <td>Mark</td>
								      <td>Otto</td>
								      <td><span class="status-produit color-one"></span>@mdo</td>
								    </tr>
								    <tr>
								      <td>Jacob</td>
								      <td>Thornton</td>
								      <td><span class="status-produit color-two"></span>@fat</td>
								    </tr>
								    <tr>
								      <td>Larry the Bird</td>
								      <td>@twitter</td>
								      <td><span class="status-produit color-three"></span>@twitter</td>
								    </tr>
								     <tr>
								      <td>Larry the Bird</td>
								      <td>@twitter</td>
								      <td><span class="status-produit color-four"></span>@twitter</td>
								    </tr>
								     <tr>
								      <td>Larry the Bird</td>
								      <td>@twitter</td>
								      <td><span class="status-produit color-five"></span>@twitter</td>
								    </tr>
								  </tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
		</main>
	</div>
</body>
</html>