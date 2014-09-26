<!-- node -->
<?php
  global $base_url;
  global $base_path;
  $ruta = $base_url . "/sites/all/themes/zeropoint/images/";

  //$alias_url = $base_url."/".arg(0)."/".$node->nid; 
  $alias_url = $base_url.'/'.drupal_get_path_alias(); 
  //var_dump($alias_url); die; 
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>




<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
  <!--<h2 class="title"<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>-->
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  

  <div class="content"<?php print $content_attributes; ?>>
    <h1 class="title"><?php // print $title ?></h1>
  
      <div class="img-first"> 
        <?php print render($content['field_imagen'][0]) ?>
      </div>

  </div>
  <div class="left columns propiedad-sidebar">
    <ul>

      <li><?php echo render($content['field_tipo_de_inmueble'][0]); ?></li>  
      <li><span>Tipo:</span> <b><?php echo render($content['field_tipo_de_contrato'][0]); ?></b></li> 
      <li><span>Ciudad:</span> <b><?php echo render($content['field_ciudad'][0]); ?></b></li>  
      <li><span>Ubicacion:</span> <b><?php print render($content['field_ubicacion'][0]); ?></b></li>
      <?php 
        if ($content['field_precio_de_venta'][0] != '') {
          echo '<li><span>Venta:</span> <b>$'.render($content['field_precio_de_venta'][0]).'</b></li>';
        }
        if ($content['field_precio_de_alquiler'][0] != '') {
          echo '<li><span>Alquiler:</span> <b>$'.render($content['field_precio_de_alquiler'][0]).'</b></li>';
        }
        if ($content['field_habitaciones'][0] != '') {
          echo '<li><span>Habitaciones:</span> <b>'.render($content['field_habitaciones'][0]).'</b></li>';
        }
        if ($content['field_banos'][0] != '') {
          echo '<li><span>Baños:</span> <b>'.render($content['field_banos'][0]).'</b></li>';
        }
      ?>
      <li><span>Área:</span> <b><?php echo render($content['field_espacio'][0]); ?>&nbsp;m<sup>2</sup></b></li> 
      <?php 
        if ($content['field_estacionamiento'][0] != '') {
          echo '<li><span>Estacionamiento:</span> <b>'.render($content['field_estacionamiento'][0]).'</b></li>';
        }
        ?>
    </ul>  
  </div>

  <div class="right columns">
    <div id="content-in">
      <?php print render($content[body]); ?>
    </div>
    <hr>
    <?php echo render($content['field_mapa_ubicacion'][0]); ?>
    <br><hr><br>
    <ul id='social'>
      <li class='fb'>
        <a class='fb-share-button' data-href='<?php echo $alias_url; ?>' data-layout='button_count'></a>
      </li>
      <li class='tw'>
        <a href="http://twitter.com/share" class="twitter-share-button" data-text="<?php print $title ?> " data-count="horizontal" data-via="" data-lang="es">Tweet</a>
      </li>
    </ul>

  </div>

</div>
<!-- /node-<?php print $node->nid; ?> -->
