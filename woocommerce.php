<?php

/*
  Template Name: Wooo
  Template Post Type: post, page, product
*/

 get_header();

?>

<div class="container">
  <div class="bread">
      <?php woocommerce_breadcrumb(); ?>
  </div>
  <section class="con-general">
       <div class="row">
         <div class="col-xs-12 col-md-3">
          <?php dynamic_sidebar('catprod'); ?>
         </div>
          <div class="col-xs-12 col-md-9 con">

              <div class="contenido">
                <div class="comprar">
                      <?php woocommerce_content(); ?>
                </div>
              </div>
         </div>
      </div>
  </section>
</div>
<?php get_footer();  ?>
