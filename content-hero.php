<?php
// Custom Fields
$small_business_sites  = get_post_meta( 9, 'small_business_sites', true );
$e_commerce_sites      = get_post_meta( 9, 'e_commerce_sites', true );
$corporate_sites       = get_post_meta( 9, 'corporate_sites', true );
$button_text           = get_post_meta( 9, 'button_text', true );
$contact               = get_post_meta( 9, 'contact', true );

?>

<!-- HERO
===================================== -->
<section id="hero" data-type="background" data-speed="5">
  <article>
    <div class="container clearfix">
      <div class="row">

        <div class="col-sm-5">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/cldigitaldesignlogo-badge.png" alt="cldigitaldesign logo" class="logo">
        </div><!-- col -->

        <div class="col-sm-7 hero-text">
          <h1><?php bloginfo('name'); ?></h1>
          <p class="lead"><?php bloginfo('description'); ?></p>

          <div id="price-timeline">
            <div class="price active">
              <h4>Small Business Sites</h4>
              <span><?php echo $small_business_sites; ?></span>
            </div><!-- end price -->

            <div class="price">
              <h4>Large Corporate Sites</h4>
              <span><?php echo $corporate_sites; ?></span>
            </div><!-- end price -->

            <div class="price">
              <h4>E-commerce Sites</h4>
              <span><?php echo $e_commerce_sites; ?></span>
            </div><!-- end price -->
          </div><!-- price-timeline -->

          <p><a class="btn btn-lg btn-danger" href="<?php echo $contact; ?>" role="button"><?php echo $button_text; ?></a></p>
        </div><!-- col -->

      </div><!-- row -->
    </div><!-- container -->
  </article>
</section><!-- hero -->
