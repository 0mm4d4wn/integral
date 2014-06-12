<?php
  global $base_url;
  $ruta = $base_url . "/sites/all/themes/zeropoint/images/";
?>
<!-- ######################## Main Menu ######################## -->
<nav>
  <div class="twelve columns header_nav">
    <div class="row">
      <a href="#" id="brand" class=""></a>
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
      <section class="">


      <div id="min-search">
        <?php 
          /*$busqueda = module_invoke('views', 'block_view', 'busqueda-block');
          print render($busqueda['content']);*/
          $viewName = 'busqueda';
          print views_embed_view($viewName);
          ?> 
      
      </div>



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




<!--

          <h3>Últimas cinco propiedades</h3>

          <section class="four">
            <article class="twelve">
              <div class="panel">
                <h3>propiedad 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </article>
          </section>

          <section class="eight">
            <article class="six">
              <div class="panel">
                <h3>propiedad 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </article>
            <article class="six">
              <div class="panel">
                <h3>propiedad 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </article>        
            <article class="six">
              <div class="panel">
                <h3>propiedad 4</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </article>
            <article class="six">
              <div class="panel">
                <h3>propiedad 5</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </article>
          </section>
       

      </section>  
    </div>
  </div>
</section>
-->



<!-- ######################## Section Countries ######################## -->
<div class="bg-lines"></div>
<section class="contact-countries">
  <div>
    <div class="row"> 
      <div class="five-cols columns">
        <div class="pnm-icon country-icons">
          <h3>Panamá</h3>
          <p>Ciudad de Panamá</p>
          <p>Calle 73 Edificio Rosely Ofc. PB 1A San Francisco</p>
          <p>(507) 6612-7847</p>
        </div>
      </div>
      <div class="five-cols columns">
        <div class="vnz-icon country-icons">
          <h3>Venezuela</h3>
          <p>Caracas</p>
          <p>dirección</p>
          <p>(58) 414-990 4047</p>
        </div>
      </div>
      <div class="five-cols columns">
        <div class="col-icon country-icons">
          <h3>Colombia</h3>
          <p>Bogotá</p>
          <p>dirección</p>
          <p>teléfono</p>
        </div>
      </div>
      <div class="five-cols columns">
        <div class="usa-icon country-icons">
          <h3>Estados Unidos</h3>
          <p>Miami</p>
          <p>Dirección</p>
          <p>teléfono</p>
        </div>
      </div>
      <div class="five-cols columns">
        <div class="eur-icon country-icons">
          <h3>Unión Europea</h3>
          <p>(Ciudad)</p>
          <p>Dirección</p>
          <p>teléfono</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ######################## Footer ######################## -->  
<!-- ######################## Scripts ######################## --> 
<!-- Included JS Files (Compressed) -->
<script src="javascripts/foundation.min.js" type="text/javascript"></script> 
<!-- Initialize JS Plugins -->
<script src="javascripts/app.js" type="text/javascript"></script>