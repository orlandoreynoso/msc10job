<div class="e-menucover">
  <!-- Menu exclusivo para excritorio mayores a de 640 pixeles al infinito -->
  <div class="or-logom">
    <?php logoMsc(); ?>
    <div class="slogan">
      <h1>Misioneros del sagrado Corazón</h1>
      <h2>Mixco, Ciudad de Guatemala</h2>
    </div>
  </div><!-- Finaliza or-logom -->

  <div class="div-welcome" id="top-desk">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php get_template_part('template/cover', 'bienvenidos' ); ?>
        </div>
      </div>
    </div>
  </div><!-- Finaliza el div-welcome -->

<div class="menu-desk" id="menu-desk">
  <div class="container">
    <div class="row">
      <div class="contenedor-lm-msc">
        <div class="logocover">
          <?php logoMsc(); ?>
        </div>
        <div class="or-menum">
            <nav class="navbar-me">
              <?php showMenuboostrap(); ?>
            </nav>
        </div>
      </div>
    </div>
  </div><!-- Finaliza el container del div menudesck -->
</div><!--  Finaliza el div de menu-desk-->

  <nav class="navbar navbar-expand-lg navbar-light">
    <?php get_template_part( 'template/header','buscador'); ?>
    <?php // get_template_part( 'template/header','menuresponsivo'); ?>
    <?php get_template_part( 'template/header','menumovil'); ?>
  </nav>
  <!-- Menu exclusivo para  moviles-->
</div><!-- Finaliza el div >>l e-menu -->
