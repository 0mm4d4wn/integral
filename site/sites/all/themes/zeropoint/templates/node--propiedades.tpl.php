<!-- node -->
<?php
  global $base_url;
  $ruta = $base_url . "/sites/all/themes/zeropoint/images/";
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
  <h2 class="title"<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  

  <div class="content"<?php print $content_attributes; ?>>
    <h1 class="title"><?php print $title ?><img class="inmobi-logo" src="<?php print $ruta; ?>inmobi-logo.png"></h1>
  
    
      <h4>Apartamento en venta, <p>San francisco - Altos del Golf</p></h4>
      <div class="img-first"> 
        <?php print render($content['field_imagen'][0]) ?>
      </div>

  </div>
  <div class="left columns">
    <ul>
      <li>precio venta: <b>$ 125,000.00</b></li>
      <li>precio alquiler: <b>$ 1,200.00</b></li>
      <li>precio alquiler: <b>$ 1,200.00</b></li>
    </ul>
    <?php print render($content[body]) ?>
  </div>
  <div class="right columns">
    <div class="img-first">
    	<?php 
    	if($content['field_imagen'][1] != null) {
    		print render($content['field_imagen'][1]);
    	}
    	if($content['field_imagen'][2] != null) {
    		print render($content['field_imagen'][2]);
    	}
    	if($content['field_imagen'][3] != null) {
    		print render($content['field_imagen'][3]);
    	}
    	if($content['field_imagen'][4] != null) {
    		print render($content['field_imagen'][4]);
    	}
    	if($content['field_imagen'][5] != null) {
    		print render($content['field_imagen'][5]);
    	}

  		/* foreach($node->field_fileupload[$node->language] as $fileupload) {
  			echo $fileupload['filename'];
		} */
  	 ?>
    </div>
  </div>

</div>
<!-- /node-<?php print $node->nid; ?> -->
