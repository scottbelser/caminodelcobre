<?php
  session_start();
  include_once('includes/copyright.php');
  include_once('includes/language.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width; height=device-height;
      maximum-scale=1.4; initial-scale=1.0; user-scalable=yes"/>
    <meta charset="utf-8" />
    <title>
      <?php print(i18n('logistics.title', $lang)); ?>
    </title>
    <link href="estilos/master.css" rel="stylesheet" type="text/css" />
    <link href="estilos/caminodelcobre.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway">
    <script src="javascript/caminodelcobre.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
  </head>
  <body>
    <?php include_once('includes/header.php') ?>
    <?php include_once('includes/navbar.php') ?>
    <h2><?php print(i18n('logistics.title', $lang)); ?></h2>
    <div class="vision_text_block">
      <h3><?php print(i18n('logistics.weather.title', $lang)); ?></h3>
      <p><?php print(i18n('logistics.weather.text_01', $lang)); ?></p>
      <p><?php print(i18n('logistics.weather.text_02', $lang)); ?></p>
      <p><?php print(i18n('logistics.weather.text_03', $lang)); ?></p>
      <p><?php print(i18n('logistics.weather.text_04', $lang)); ?></p>
      <p><?php print(i18n('logistics.weather.text_05', $lang)); ?></p>
    </div>
    <div class="clear"></div>
    <div class="vision_text_block">
      <h3><?php print(i18n('logistics.security.title', $lang)); ?></h3>
      <p><?php print(i18n('logistics.security.text_01', $lang)); ?></p>
      <p><?php print(i18n('logistics.security.text_02', $lang)); ?></p>
      <p><?php print(i18n('logistics.security.text_03', $lang)); ?></p>
      <p><?php print(i18n('logistics.security.text_04', $lang)); ?></p>
      <p><?php print(i18n('logistics.security.text_05', $lang)); ?></p>
      <p><?php print(i18n('logistics.security.text_06', $lang)); ?></p>
      <p><?php print(i18n('logistics.security.text_07', $lang)); ?></p>
      <p><?php print(i18n('logistics.security.text_08', $lang)); ?></p>
      <p><?php print(i18n('logistics.security.text_09', $lang)); ?></p>
      <p><?php print(i18n('logistics.security.text_10', $lang)); ?></p>
    </div>
    <div class="clear"></div>
    <div class="vision_text_block">
      <h3><?php print(i18n('logistics.outfitters.title', $lang)); ?></h3>
      <p><?php print(i18n('logistics.outfitters.text_01', $lang)); ?></p>
      <p><?php print(i18n('logistics.outfitters.text_02', $lang)); ?></p>
      <p><?php print(i18n('logistics.outfitters.text_03', $lang)); ?></p>
    </div>
    <div class="clear"></div>
    <div class="vision_text_block">
      <h3><?php print(i18n('logistics.supplies.title', $lang)); ?></h3>
      <p><?php print(i18n('logistics.supplies.text_01', $lang)); ?></p>
    </div>
    <div class="clear"></div>
    <div class="vision_text_block">
      <h3><?php print(i18n('logistics.maps.title', $lang)); ?></h3>
      <p><?php print(i18n('logistics.maps.text_01', $lang)); ?></p>
      <p><?php print(i18n('logistics.maps.text_02', $lang)); ?></p>
      <p><?php print(i18n('logistics.maps.text_03', $lang)); ?></p>
    </div>
    <div class="clear"></div>
    <div class="vision_text_block">
      <h3><?php print(i18n('logistics.trail_markers.title', $lang)); ?></h3>
      <div class="logistics_photo_block">
        <img src="imagenes/Marker-Rock.jpeg" width="150px" alt="Canyon Scene" /><br />
        Rock marker
      </div>
      <div class="logistics_photo_block">
        <img src="imagenes/Marker-Pole.jpeg" width="150px" alt="Canyon Scene" /><br />
        Telephone pole
      </div>
      <div class="logistics_photo_block">
        <img src="imagenes/Marker-Wrong.jpeg" width="150px" alt="Canyon Scene" /><br />
        Wrong trail
      </div>
      <div class="logistics_photo_block">
        <img src="imagenes/Marker-Turn.jpeg" width="150px" alt="Canyon Scene" /><br />
        Turn
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('logistics.trail_markers.text_01', $lang)); ?></p>
      <p><?php print(i18n('logistics.trail_markers.text_02', $lang)); ?></p>
      <p><?php print(i18n('logistics.trail_markers.text_03', $lang)); ?></p>
      <p><?php print(i18n('logistics.trail_markers.text_04', $lang)); ?></p>
      <p><?php print(i18n('logistics.trail_markers.text_05', $lang)); ?></p>
    </div>
    <div class="vision_text_block">
      <h3><?php print(i18n('logistics.chepe.title', $lang)); ?></h3>

      <div class="half_width_text floatLeft">
        <p><?php print(i18n('logistics.chepe.text_01', $lang)); ?></p>
      </div>
      <div class="half_width_photo floatLeft">
        <img src="imagenes/Chepe.jpeg" width="300px" alt="Canyon Scene" /><br />
        El Chepe
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('logistics.chepe.text_02', $lang)); ?></p>
      <p><?php print(i18n('logistics.chepe.text_03', $lang)); ?></p>
      <p><?php print(i18n('logistics.chepe.text_04', $lang)); ?></p>
    </div>
    <div class="clear"></div>
    <div class="vision_text_block">
      <h3><?php print(i18n('logistics.segments_transport.title', $lang)); ?></h3>
      <p><?php print(i18n('logistics.segments_transport.text_01', $lang)); ?></p>
      <p><?php print(i18n('logistics.segments_transport.text_02', $lang)); ?></p>
      <p><?php print(i18n('logistics.segments_transport.text_03', $lang)); ?></p>

      <div class="logistics_photo_block">
        <img src="imagenes/Bus-Cuahtemoc.jpeg" width="150px" alt="Canyon Scene" /><br />
        Creel buses
      </div>
      <div class="logistics_inset_text">
        <p><?php print(i18n('logistics.segments_transport.text_04', $lang)); ?></p>
      </div>
      <div class="logistics_photo_block">
        <img src="imagenes/Bus-stop.jpeg" width="150px" alt="Canyon Scene" /><br />
        Bus stop
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('logistics.segments_transport.text_05', $lang)); ?></p>
      <p><?php print(i18n('logistics.segments_transport.text_06', $lang)); ?></p>
      <p><?php print(i18n('logistics.segments_transport.text_07', $lang)); ?></p>

    </div>
    <div class="clear"></div>
    <?php include_once('includes/footer.php') ?>
  </body>
</html>



