<?php
  global $base_url;
  $ruta = $base_url . "/sites/all/themes/zeropoint/images/";
?>
<!-- ######################## Main Menu ######################## -->
<nav>
  <div class="twelve columns header_nav">
    <div class="row header">
      <a href="<?php print $base_path ?>" title="<?php print t('Inicio') ?>" id="brand" class=""></a>
      <?php if ($main_menu || $page['dropdown']): ?>
      <div id="menu" class="<?php //print menupos() ?>">
        <?php if (!empty($page['dropdown'])) { ?><?php print render($page['dropdown']); ?><?php } ?>
        <?php if (empty($page['dropdown'])) { ?>
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'menu-header',
            'class' => array('nav-bar horizontal',  'clearfix'),
        ),
        /*'heading' => array(
          'text' => t('Main menu'),
          'level' => 'h2',
          'class' => array('element-invisible'),
        ),*/)); ?><?php } ?>
      </div>
      <?php endif;  ?>        
      <script type="text/javascript">
        //<![CDATA[
          $('ul#menu-header').nav-bar();
        //]]>
      </script>
    </div>  
  </div>    
</nav>
<!-- ######################## Header ######################## -->
<section>
  <div class="section_main">
    <div class="row">
      <section class="twelve columns">
        <?php if ($page['highlighted']): ?><div id="mission"><?php print render ($page['highlighted']); ?></div><?php endif; ?>
        <?php print render($title_prefix); ?>
        <?php if ($title): if ($is_front){ print '<h2 class="title">'. $title .'</h2>'; } else { print '<h1 class="section-title">'. $title .'</h1>'; } endif; ?>
        <?php print render($title_suffix); ?>
        <div class="tabs"><?php print render($tabs); ?></div>
        <?php print render($page['help']); ?>
        <?php print $messages ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php if ($page['content']) : ?><?php print render ($page['content']); ?><?php endif; ?>
        <?php print $feed_icons; ?>
      </section>  
    </div>
  </div>
</section>
<!-- ######################## Section Countries ######################## -->
<div class="bg-lines"></div>
<section class="contact-countries">
  <div>
    <div class="row"> 
      <div class="five-cols columns">
        <div class="pnm-icon country-icons">
          <h3>Panamá</h3>
          <p>Ciudad de Panamá</p>
          <p>Calle 50 edil. embajador - of. 3b (frente a Panafoto)</p>
          <p>Tel: (507) 6612-7847</p>
        </div>
      </div>
      <div class="five-cols columns">
        <div class="vnz-icon country-icons">
          <h3>Venezuela</h3>
          <p>Caracas</p>
          <p>Tel: (58) 414-990 4047</p>
        </div>
      </div>
      <div class="five-cols columns">
        <div class="col-icon country-icons">
          <h3>Colombia</h3>
          <p>Bogotá</p>
          <p>Tel: (57) 3125258338</p>
        </div>
      </div>
      <div class="five-cols columns">
        <div class="usa-icon country-icons">
          <h3>Estados Unidos</h3>
          <p>Miami</p>
          <p>Tel: (1) 0012023165442</p>
        </div>
      </div>
      <div class="five-cols columns">
        <div class="eur-icon country-icons">
          <h3>Unión Europea</h3>
          <p>Italia</p>
          <p>Tel: (39) 3402953543</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ######################## Footer ######################## -->  
<footer>
  <div class="row">
    <div class="five-cols columns social-icons">
      <a href="https://www.facebook.com/IntegralPropertyManagementSA" target="blank" class="lsf-icon" title="facebook"></a>
      <a href="https://twitter.com/INTEGRALPM" target="blank" class="lsf-icon" title="twitter"></a>
      <a href="http://i.instagram.com/integralproperty/" target="blank" class="lsf-icon" title="instagram"></a>
    </div>
    <div class="col-60 columns branding">
      <p>Copyright © 2013, Integral Property Management SA, todos los derechos reservados.
Panamá, Ciudad de Panamá.<br />Calle 50 edil. embajador - of. 3b (frente a Panafoto).
cel: (507) 6612-7847</p>
      <!--<p>Diseño y programación por...</p>-->
    </div>
    <!--<div class="five-cols columns legal-note">
      <a>Nota legal</a>
    </div>-->
  </div>
</footer>
<!-- ######################## Scripts ######################## --> 
    <!-- Included JS Files (Compressed) -->
    <script src="javascripts/foundation.min.js" type="text/javascript"></script> 
    <!-- Initialize JS Plugins -->
     <script src="javascripts/app.js" type="text/javascript"></script>
</div>