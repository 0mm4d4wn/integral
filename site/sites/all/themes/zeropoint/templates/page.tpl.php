<?php
  global $base_url;
  $ruta = "/sites/all/themes/zeropoint/images/";
?> 
<!-- ######################## Main Menu ######################## -->
<nav>
  <div class="twelve columns header_nav">
    <div class="row">
      <?php if ($main_menu || $page['dropdown']): ?>
      <div id="" class="<?php print menupos() ?> pull-left">
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

<!-- ######################## Header (featured posts) ######################## -->
<!--   
<header>
  <div class="row">
    <h1>Most Read The Last 24 hrs.</h1>
    <article class="four columns featured_post">
      <h3>Lorem Ipsum</h3> 
      <img src="images/demo2_small.jpg" alt="desc" style="width:100%" />
      <p> Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus.</p>
      <div class="post_meta">
        <span class="lsf-icon" title="calender">20th oct 2012</span> 
        <span class="lsf-icon" title="user" style="margin-left:15px"><a href="#">Admin</a></span>
        <span class="lsf-icon" title="comment" style="margin-left:15px"><a href="#">5</a></span>
      </div> 
    </article>
    <article class="four columns featured_post">
      <h3>Mauris Phatera</h3> 
      <img src="images/demo3_small.jpg" alt="desc" style="width:100%" />
      <p> Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus.</p>
      <div class="post_meta">
        <span class="lsf-icon" title="calender">20th oct 2012</span> 
        <span class="lsf-icon" title="user" style="margin-left:15px"><a href="#">Admin</a></span>
        <span class="lsf-icon" title="comment" style="margin-left:15px"><a href="#">5</a></span>
      </div> 
    </article>
    <article class="four columns featured_post">
      <h3>Dolores et Mollis</h3> 
      <img src="images/demo1_small.jpg" alt="desc" style="width:100%" />
      <p> Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus.</p>
      <div class="post_meta">
        <span class="lsf-icon" title="calender">20th oct 2012</span> 
        <span class="lsf-icon" title="user" style="margin-left:15px"><a href="#">Admin</a></span>
        <span class="lsf-icon" title="comment" style="margin-left:15px"><a href="#">5</a></span>
      </div> 
    </article>
  </div>    
</header>
-->
<!-- ######################## Section ######################## -->
<section>
  <div class="section_main">
      <div class="row">
        <section class="three columns">
             <div class="sidebar">
              <h3>Buscador</h3>
              <?php
              /*$busqueda = module_invoke('views', 'block_view', 'busqueda-block');
              print render($busqueda['content']);*/
              $viewName = 'busqueda';
              print views_embed_view($viewName);
              ?>          
             </div>
          </section>
          <section class="nine columns">



              <?php if ($page['highlighted']): ?><div id="mission"><?php print render ($page['highlighted']); ?></div><?php endif; ?>
              <?php print render($title_prefix); ?>
              <?php if ($title): if ($is_front){ print '<h2 class="titlex">'. $title .'</h2>'; } else { print '<h1 class="">'. $title .'</h1>'; } endif; ?>
              <?php print render($title_suffix); ?>
              <div class="tabs"><?php print render($tabs); ?></div>
              <?php print render($page['help']); ?>
              <?php print $messages ?>
              <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
              <?php if ($page['content']) : ?><?php print render ($page['content']); ?><?php endif; ?>
              <?php print $feed_icons; ?>



          
          <!--
          <h2>Latest</h2>
          
          <article class="blog_post">
          
             <div class="three columns">
             <a href="#" class="th"><img src="images/thumb1.jpg" alt="desc" /></a>
             </div>
             <div class="nine columns">
              <a href="#"><h3>Lorem Ipsum</h3></a>
              <p> Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus.</p>
              </div>
              
          </article>
          
          <article class="blog_post">
          
             <div class="three columns">
             <a href="#" class="th"><img src="images/thumb2.jpg" alt="desc" /></a>
             </div>
             <div class="nine columns">
              <a href="#"><h3>Lorem Ipsum</h3></a>
              <p> Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus.</p>
              </div>
              
          </article>
          
          
          <article class="blog_post">
          
             <div class="three columns">
             <a href="#" class="th"><img src="images/pin2.jpg" alt="desc" /></a>
             </div>
             <div class="nine columns">
              <a href="#"><h3>Lorem Ipsum</h3></a>
              <p> Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus. Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus.</p>
              </div>
              
          </article> -->


          
          </section>
          
          
          
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
<!-- ######################## Footer ######################## -->  
<footer>
  <div class="row">
    <div class="three columns social-icons">
      <a href="" class="lsf-icon" title="facebook"></a>
      <a href="" class="lsf-icon" title="twitter"></a>
      <a href="" class="lsf-icon" title="instagram"></a>
    </div>
    <div class="six columns branding">
      <p>Copyright © 2013, Integral Property Management SA, todos los derechos reservados.
Panamá, Ciudad de Panamá. Calle 73 Edificio Rosely, Ofc. PB 1A San Francisco.
cel: (507) 6612-7847</p>
      <p>Diseño y programación por...</p>
    </div>
    <div class="three columns legal-note">
      <p>Nota legal</p>
    </div>
  </div>
</footer>
<!-- ######################## Scripts ######################## --> 
    <!-- Included JS Files (Compressed) -->
    <script src="javascripts/foundation.min.js" type="text/javascript"></script> 
    <!-- Initialize JS Plugins -->
     <script src="javascripts/app.js" type="text/javascript"></script>
</div>
<!--
  <h3>heading</h3>
  <p> Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus. Vivamus tortor tellus, rutrum sit amet mollis vel.</p>
  <h3>Accordion Panel</h3>
  <ul class="accordion">
    <li class="active">
      <div class="title">
        <h5>Accordion Panel 1</h5>
      </div>
      <div class="content">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </li>
    <li>
      <div class="title">
        <h5>Accordion Panel 2</h5>
      </div>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </li>
    <li>
      <div class="title">
        <h5>Accordion Panel 3</h5>
      </div>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
      </div>
    </li>
  </ul>
--> 

