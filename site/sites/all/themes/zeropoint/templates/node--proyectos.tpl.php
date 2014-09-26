<?php
  global $base_url;
  global $base_path;
  $ruta = $base_url . "/sites/all/themes/zeropoint/images/";
  $alias_url = $base_url.'/'.drupal_get_path_alias(); 
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

<!-- node --> 
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
  <h2 class="title"<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
  <div class="submitted">
  <?php print $submitted; ?>
  </div>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php  
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);

    ?>
    <div style='clear: both;'></div>
  </div>
  <br><hr><br>
  <ul id='social'>
    <li class='fb'>
      <a class='fb-share-button' data-href='<?php echo $alias_url; ?>' data-layout='button_count'></a>
    </li>
    <li class='tw'>
      <a href="http://twitter.com/share" class="twitter-share-button" data-text="<?php print $title ?> " data-count="horizontal" data-via="" data-lang="es">Tweet</a>
    </li>
  </ul>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
<!-- /node-<?php print $node->nid; ?> -->
