<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php';?>
</head>
<body>
	
	<?php $page = 'recall-online'; include 'includes/navbar.php';?>

	<div class= "container">
	<link rel="stylesheet" href="https://unpkg.com/x-data-spreadsheet@1.0.13/dist/xspreadsheet.css">
	<script src="https://unpkg.com/x-data-spreadsheet@1.0.13/dist/xspreadsheet.js"></script>

	<script>
   	x.spreadsheet('#xspreadsheet');
	</script>

	</div>
	
	<?php include 'includes/footer.php';?>

	<?php include 'includes/scripts.php';?>

</body>
</html>