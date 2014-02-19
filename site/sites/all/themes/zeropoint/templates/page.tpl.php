
<?php
  global $base_url;
  $ruta = "/sites/all/themes/zeropoint/images/";
?> 
<div class="contenedor">
  <div id="head" class="contenedor2">
		<div class="lang-brand">
			<div class="brand">
				<a href="#"><img class="brand" src="<?php echo $base_url.$ruta; ?>integral_logo.png" alt="..."></a>
			</div><!-- brand -->
			<div class="">
				<div class="btn-group language pull-right">
	  			<button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
					Idiomas
					<span class="caret"></span>
	  			</button>
				  <ul class="dropdown-menu" role="menu">
				    <li>
				    	<a href="#">idioma 1</a>
				    </li>
				    <li>
				    	<a href="#">idioma 2</a>
				    </li>
				  </ul>
				  <!--<div id="user_links"><?php print zeropoint_login() ?></div>-->
				</div>
			</div>	
		</div><!-- language -->
    <!-- menu -->
  	<div class="container-bg-menu">
  		<div class="">
        <?php if ($main_menu || $page['dropdown']): ?>
            <div id="" class="<?php print menupos() ?> pull-right">
            <?php if (!empty($page['dropdown'])) { ?><?php print render($page['dropdown']); ?><?php } ?>
            <?php if (empty($page['dropdown'])) { ?>
            <?php print theme('links__system_main_menu', array(
                      'links' => $main_menu,
                      'attributes' => array(
                        'id' => 'menu',
                        'class' => array('links',	 'clearfix'),
                      ),
                      /*'heading' => array(
                        'text' => t('Main menu'),
                        'level' => 'h2',
                        'class' => array('element-invisible'),
                      ),*/)); ?><?php } ?>
            </div>
          <?php endif;  ?>
  		</div>
  	</div><!-- menu -->
  </div><!-- header -->
</div><!-- contenedor -->
<div id="main-container">
  <?php if ($page['highlighted']): ?><div id="mission"><?php print render ($page['highlighted']); ?></div><?php endif; ?>
  <?php print render($title_prefix); ?>
  <?php //if ($title): if ($is_front){ print '<h2 class="title">'. $title .'</h2>'; } else { print '<h1 class="title">'. $title .'</h1>'; } endif; ?>
  <?php print render($title_suffix); ?>
  <div class="tabs"><?php print render($tabs); ?></div>
  <?php print render($page['help']); ?>
  <?php print $messages ?>
  <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
  <?php if ($page['content']) : ?><?php print render ($page['content']); ?><?php endif; ?>
  <?php print $feed_icons; ?>
</div>
<div id="contact-countries" class="contenedor">
  <div class="contenedor2">
    <!--contactos en paises-->
    <div class="cnt-menu pnm-icon">
      <div class="country-text">
        <div class="myh5">Panamá</div>
        <p>Ciudad de Panamá Calle 73 Edificio Rosely Ofc. PB 1A San Francisco cel: (507) 6612-7847</p>
      </div>
    </div>
    <div class="cnt-menu vnz-icon">
      <div class="country-text">
        <div class="myh5">Venezuela</div>
        <p>Caracas Calle 73 Edificio Rosely Ofc. PB 1A San Francisco cel: (507) 6612-7847</p>
      </div>
    </div>
    <div class="cnt-menu col-icon">
      <div class="country-text">
        <div class="myh5">Colombia</div>
        <p>Bogotá Calle 73 Edificio Rosely Ofc. PB 1A San Francisco cel: (507) 6612-7847</p>
      </div>
    </div>
    <div class="cnt-menu usa-icon">
      <div class="country-text">
        <div class="myh5">Estados Unidos</div>
        <p>Miami Calle 73 Edificio Rosely Ofc. PB 1A San Francisco cel: (507) 6612-7847</p>
      </div>
    </div>
    <div class="cnt-menu eur-icon">
      <div class="country-text">
        <div class="myh5">Unión Europea</div>
        <p>Ciudad de Panamá Calle 73 Edificio Rosely Ofc. PB 1A San Francisco cel: (507) 6612-7847</p>
      </div>
    </div>
  </div>
</div>
<div class="gradient">
  <div class="degrade-right">
    <div id="footer" class="contenedor">
      <div class="contenedor2">
        <!--redes sociales, créditos y nota legal-->
        <div class="social-icons">
        </div>
        <div class="copyright">
        </div>
        <div class="nota-legal">
        </div>
      </div>
    </div>
  </div>
</div>