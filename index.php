<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php';?>
</head>
<body>
	
	<?php $page = 'home'; include 'includes/navbar.php';?>



	<div class="container">
		<div class="row justify-content-center text-center">
			<img style="padding-top: 70px;width: 37%; height: 37%" src="img/logo.png" alt="Nature" class="responsive">
		</div>
	</div>

	<!--- BOOTSTRAP UDEMY COURSE -->
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-10 py-5">
				<h2>Lo complejo, hazlo sencillo.</h2> <br>
				<p class="lead">Recall es una base de datos pensada y diseñada por nutricionistas para la realización de un recordatorio de 24 horas detallado que con solo algunos clics podrás obtener, de manera inmediata, nutrientes básicos y específicos.</p><a class="btn btn-purple btn-lg" href="https://facebook.com/recallnutrition/" target="_blank">Conóncenos</a>
			</div>
		</div>
	</div>
	<!--- BOOTSTRAP UDEMY COURSE -->

	<!--- Start Jumbotron -->
	<div class="jumbotron">
		<div class="container">
			<h2 class="text-center pt-5 pb-3">¡Cuantifica como nunca antes!</h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/plate.png" class="responsive">
						<h3>Medidas Caseras</h3> <br>
						<p align="justify">Te entregará información de acuerdo al alimento que quieras cuantificar y de la medida casera determinada por ti.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/piechart.png" class="responsive">
						<h3>Automático y Graficado</h3> <br>
						<p align="justify">Sumará cada tiempo de comida la cantidad de calorías, nutrientes y no nutrientes, así como también, la sumatoria del día en total. <br> <br> Además, te muestra gráficos de distribución del aporte calórico consumido por el paciente o usuario y lo que tu has planificado, así como también, gráficos de distribución y caracterización de aminoácidos y ácidos grasos consumidos por el paciente. </p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/watermelon.png" class="responsive">
						<h3>Variedad de Nutrientes</h3> <br>
						<p align="justify">Te ofrecemos nutrientes desde lo más básico como energía, proteínas, lípidos y carbohidratos, hasta aquellos que son más difíciles de obtener como lo son la caracterización de tipos de ácidos grasos, los aminoácidos presentes en los alimentos e incluso antioxidantes o compuestos fenólicos presentes.</p>
					</div>
				</div>
			</div><!--- End Row -->
		</div><!--- End Container -->
	</div>
	<!--- End Jumbotron -->

	<!--- Two Column Section -->
	<div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-md-4" style="padding: 30px">
				<h3 class="pb-4">Conoce Recall Online</h3>
				<p style="text-align: justify;" class="responsive">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla venenatis justo ligula, quis dignissim nulla euismod eu. Donec mauris ligula, vestibulum et nibh vel, placerat rhoncus justo. Donec at risus gravida, lacinia orci a, sagittis ipsum. Sed quis nibh nisi. Vestibulum molestie luctus est, in malesuada quam sagittis vulputate. Nulla..</p><a class="btn btn-purple btn-lg" href="/recall-online.php">Conócelo</a>
			</div>
			<div style="padding-left: 20px" class="col-lg-6">
				<video controls autoplay>
  				<source src="img/demo.mp4" type="video/mp4">
				</video></div>
		</div>
	</div>
	<!--- End Two Column Section -->

	<?php include 'includes/footer.php';?>

	<?php include 'includes/scripts.php';?>

</body>
</html>
