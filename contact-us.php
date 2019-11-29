<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php';?>
</head>
<body>
	
	<?php $page = 'contact-us'; include 'includes/navbar.php';?>

	<!--- Two Column Section -->
	<br><div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-6" style="padding-right: 30px">
				<h3 class="pb-4">Contáctanos</h3>
				<p style="padding-right: 30px; text-align: justify;">Tenemos distintas formas de comunicarnos contigo para lo que sea. Hazlo a través de nuestras redes sociales o a través del chat de nuestra página. Siempre estaremos para ayudarte en lo que necesites.</p>
			</div>

			<div class="col-lg-6">
				<div class="container">
  					<form action="action_page.php">
    					<div class="row">
      						<div class="col-25">
       	 						<label for="fname">Nombre</label>
      		</div>

     		<div class="col-75">
        		<input type="text" id="fname" name="firstname" placeholder="">
      			</div>
    		</div>

    		<div class="row">
      			<div class="col-25">
        			<label for="lname">Apellido</label>
      		</div>

      		<div class="col-75">
        		<input type="text" id="lname" name="lastname" placeholder="">
      				</div>
    		</div>

    		    		<div class="row">
      			<div class="col-25">
        			<label for="lname">Correo</label>
      		</div>

      		<div class="col-75">
        		<input type="text" id="lname" name="lastname" placeholder="">
      				</div>
    		</div>

   
    		<div class="row">
      			<div class="col-25">
        			<label for="subject">Mensaje</label>
      		</div>

      		<div class="col-75">
        		<textarea id="subject" name="subject" placeholder="Tu mensaje" style="height:200px"></textarea>
      			</div>
    		</div>

    		<div class="btn btn-purple btn-md" href="#" style="align-items: right">Enviar</a>
    		</div>

  			</form>
			</div>
		</div>
		</div>
	</div>

	<!--- End Two Column Section -->

	<?php include 'includes/footer.php';?>

	<?php include 'includes/scripts.php';?>

</body>
</html>