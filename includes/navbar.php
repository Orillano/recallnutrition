<nav class="navbar navbar-light bg-light navbar-expand-md fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"><img src="img/logotitle.png"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link <?php if($page=='home'){echo 'active';}?> "href="index.php">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='recall-online'){echo 'active';}?> "href="recall-online.php">Recall Online</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='function'){echo 'active';}?> "href="functions.php">Funciones</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='team'){echo 'active';}?> "href="team.php">Quiénes Somos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='contact-us'){echo 'active';}?> "href="contact-us.php">Contacto</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>