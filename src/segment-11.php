<?php
/*
© 2015 William H. Prescott. All Rights Reserved.

This file is part of Camino del Cobre.

*/

?>
<?php include_once('includes/language.php') ?>
<!DOCTYPE html>
<html>
	<head>
    <meta name="viewport" content="width=device-width; height=device-height;
      maximum-scale=1.4; initial-scale=1.0; user-scalable=yes"/>
		<meta charset="utf-8">
		<title>
      <?php print(i18n('segment_11.title', $lang)); ?>
		</title>
		<link href="estilos/master.css" rel="stylesheet" type="text/css" />
		<link href="estilos/caminodelcobre.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway">
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDs2Fim0SK8tW23TjUALTd1V_K8pHmcps4">
    </script>
		<script src="javascript/caminodelcobre.js"></script>
	</head>
	<body>
		<?php include_once('includes/header.php') ?>
		<?php include_once('includes/navbar.php') ?>
		<table class="segment_data_table">
		  <tr>
		    <td><?php print(i18n('segment_data.length', $lang)); ?></td><td>5.98 km</td>
		  </tr>
		  <tr>
		    <td><?php print(i18n('segment_data.max_elevation', $lang)); ?></td><td>2466 m</td>
		  </tr>
		  <tr>
		    <td><?php print(i18n('segment_data.min_elevation', $lang)); ?></td><td>2236 m</td>
		  </tr>
		</table>
	  <div id='section_11_map' class='section_map'></div>
    <div class="vision_text_block">
		  <h2><?php print(i18n('segment_11.title', $lang)); ?></h2>
    </div>

    <div class="clear"></div>
		<?php include_once('includes/footer.php') ?>
	</body>
</html>
