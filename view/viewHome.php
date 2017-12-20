<button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn bg-danger" style="height:40px;">
			<span class="btnLogIn"></span>
		</button>

	<div class="wrapper">
		<!-- Sidebar Holder -->
		<nav id="sidebar">
			<div class="sidebar-header text-align">
				<img style="width:200px;" src="img/logo/aelina_online_flyff_typo.png" alt="">
			</div>
			<ul class="list-unstyled components">
				<p><u>Mon Compte</u></p>
				<li>
					<a href="#">- Gérer mon compte</a>
				</li>
				<li>
					<a href="#">- Recharger ses Points Lina</a>
				</li>
				<li>
					<a href="#">- Voter</a>
				</li>
				<li>
					<a href="#">- Nous Contacter</a>
				</li>
				<li>
					<a>Vote Points : <span><?= $account['vote']?></span></a>
				</li>
				<li>
					<a>Lina Points : <span><?= $account['lina']?></span></a>
				</li>
			</ul>
			<ul class="list-unstyled CTAs">
				<li><a href="" class="deco">Déconnexion</a></li>
			</ul>
			<ul class="list-unstyled statut">
				<p><u>Informations Serveur</u></p>

				<li>
					<a>Serveur : <span style="color:green;"><?= $server['status'] == 1 ? 'ON' : 'OFF'?></span></a>
				</li>
				<li>
					<a>Connecté : <span><?= $server['nb_connect']?></span></a>
				</li>
				<li>
					<a>Record Connecté : <span><?= $server['max_connect']?></span></a>
				</li>
			</ul>
		</nav>

		<!-- Page Content Holder -->
		<div id="content">

			<nav class="navbar navbar-default">
				<div class="container q">
					<div class="col-sm-2">
						<a id="btnForum" class="nav-item nav-link active text-center text-white" href="#">Forum</a>
					</div>
					<div class="col-sm-2">
						<a id="btnBoutique" class="nav-item nav-link text-center text-white" href="#">Boutique</a>
					</div>
					<div class="col-sm-4">
						<img id="logo" src="img/logo/aelina_online_flyff_compo.png" class="lg-baner rounded mx-auto d-block" style="width:220px;" alt="">
					</div>
					<div id="btnJouer" class="col-sm-2">
						<a class="nav-item nav-link active text-center text-white" href="#">Jouer</a>
					</div>
					<div id="btnSupport" class="col-sm-2">
						<a class="nav-item nav-link text-center text-white" href="#">Support</a>
					</div>
				</div>
			</nav>

			<!-- Première Ligne -->
			<div class="row">
				<div class="col-sm-8">
					<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
						<ol class="carousel-indicators">
							<li data-target="#carousel" data-slide-to="0" class="active"></li>
							<li data-target="#carousel" data-slide-to="1"></li>
							<li data-target="#carousel" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="img/carou.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="img/carou.jpg" alt="Second slide">
								<div class="carousel-caption d-none d-md-block">
									<h3>Test Titre 2</h3>
									<p>Voici le contenue </p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="img/carou.jpg" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    							<span class="sr-only"></span>
  							</a>
						<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only"></span>
							</a>
					</div>
				</div>
				<div class="col-sm-4">
					<button id="download" type="button" class="btn btn-dark dl"><i class="fa fa-cloud-download" aria-hidden="true"></i> Téléchargement</button>
					<div class="line"></div>
					<a class="twitter-timeline" data-lang="fr" data-height="270" data-theme="dark" data-link-color="#B40431" href="https://twitter.com/MrAntoineDaniel?ref_src=twsrc%5Etfw">Tweets by MrAntoineDaniel</a>
					<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>
			<div class="line"></div>

			<div class="row">
				<div class="col-sm-3">
					<div class="card border-dark mb-3" style="max-width: 200rem;">
						<div class="card-header">Venez découvrir les<span class="text-danger"> Promotions</span> de la Boutique</div>
						<div class="card-body text-dark">
							<div id="carouselBoutique" class="carousel slide" data-ride="carousel" data-interval="3000">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="img/carou.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="img/carou.jpg" alt="Second slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="img/carou.jpg" alt="Third slide">
									</div>
								</div>
								<a class="carousel-control-prev text-danger" href="#carouselBoutique" role="button" data-slide="prev">
										<i class="fa fa-chevron-left" aria-hidden="true"></i>
									</a>
								<a class="carousel-control-next text-danger" href="#carouselBoutique" role="button" data-slide="next">
										<i class="fa fa-chevron-right" aria-hidden="true"></i>
									</a>
							</div>
						</div>
					</div>

				</div>
				<div class="col-sm-5">
					<div class="card border-dark mb-3">
						<div class="card-header">
							<div class="row">
								<div class="col-sm">
								<p class="text-left">Les <span class="text-danger">Top</span> du serveur</p>
								</div>
								<div class="col-sm">
								<p class="text-right">Accèder au <span class="text-danger">Classement</span></p>
								</div>
							</div>
						</div>
						<div class="card-body text-dark  text-center">
							<div class='row'>
								<div class="col-sm-4">
									<h2>Souverin</h2>
									<img class="roundedImage Souv" src='img/bg.png'>
									<p>Moi</p>
								</div>
								<div class="col-sm-4 text-align">
									<h2>MVP</h2>
									<img class="roundedImage MVP" src='img/bg.png'>
									<p>Moi Aussi</p>
								</div>
								<div class="col-sm-4">
									<h3>Guild Siège</h3>
									<img class="roundedImage GS" src='img/bg.png'>
									<p>La mienne</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- <div class="viewer">
					<iframe src="dark.php"></iframe>
					</div> -->
					<iframe src="https://discordapp.com/widget?id=364110828623888384&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
				</div>
			</div>