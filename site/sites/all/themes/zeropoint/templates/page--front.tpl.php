<?php
  global $base_url;
  $ruta = "/sites/all/themes/zeropoint/images/";
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
        
        <header>
              <h1 class="heading_supersize">BASE 2013</h1>
              <h2 class="welcome_text">The future proof starting point for any website!</h2>    
        </header>
        
<!-- ######################## Section ######################## -->
     
   <section class="section_light">
   
        <div class="row">
        
         <div class="four columns">
            <h3><span class="dropcap_red lsf-icon-dropcap" title="camera"></span> Photo Community</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra, lacus id interdum ultrices, elit metus semper tellus, vel lacinia libero purus vitae risus.</p>
         </div>
         
      
          <div class="four columns">
            <h3><span class="dropcap_black lsf-icon-dropcap" title="cloud"></span> Upload Photos</h3>
            <p> Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus.</p>
          </div>
          
          
          <div class="four columns">
            <h3><span class="dropcap_black lsf-icon-dropcap" title="video"></span> Video Tutorials</h3>
            <p>Sed vitae nisi leo. Nulla tincidunt, turpis non gravida pharetra, diam sapien posuere massa, non luctus leo mauris at sapien. Donec ut fermentum eros.</p>
          </div>
        
        </div>
        
    </section>

<!-- ######################## Section Countries ######################## -->
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
<!-- ######################## Section ######################## -->

<section class="section_main">

      <h2 style="text-align:center">Discover Hidden Treasures</h2>
      
      <div class="row">
      
          <article class="six columns">
                <div class="panel">
                    <h3>Lorem Ipsum</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus fermentum metus, id commodo sapien. Donec cursus fermentum metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus fermentum metus, id commodo sapien. Donec cursus fermentum metus.</p>
                  <a href="#" class="button secondary small radius">Learn More &raquo;</a>
                </div>
          </article>
          
              
          <article class="six columns">
                <div class="panel">
                    <h3>Lorem Ipsum</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus fermentum metus, id commodo sapien. Donec cursus fermentum metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus fermentum metus, id commodo sapien. Donec cursus fermentum metus.</p>
                  <a href="#" class="button secondary small radius">Learn More &raquo;</a>
                </div>
          </article>
  
      </div>
      
      
</section>

<!-- ######################## Footer ######################## -->  
      
   

<!-- ######################## Scripts ######################## --> 

    <!-- Included JS Files (Compressed) -->
    <script src="javascripts/foundation.min.js" type="text/javascript"></script> 
    <!-- Initialize JS Plugins -->
     <script src="javascripts/app.js" type="text/javascript"></script>

