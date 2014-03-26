<!-- node --> 
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
  <h2 class="title"<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  

  <div class="content"<?php print $content_attributes; ?>>
    
      <?php print render($content[title]) ?>

      <?php print render($content['field_imagen'][0]) ?>

  </div>
  <div class="left columns">
      	<p>hola</p>
  </div>

  <div class="right columns">

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
<!-- /node-<?php print $node->nid; ?> -->
