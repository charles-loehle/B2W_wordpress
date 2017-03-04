<?php
/*
  Template Name: Home Page
*/

// Custom Fields
$small_business_sites  = get_post_meta( 9, 'small_business_sites', true );
$e_commerce_sites      = get_post_meta( 9, 'e_commerce_sites', true );
$corporate_sites       = get_post_meta( 9, 'corporate_sites', true );
$button_text           = get_post_meta( 9, 'button_text', true );
$contact               = get_post_meta( 9, 'contact', true );
$optin_text            = get_post_meta( 9, 'optin_text', true );
$optin_button_text     = get_post_meta( 9, 'optin_button_text', true );

// Advanced Custom Fields
$business_feature_image       = get_field('business_feature_image');
$business_section_title       = get_field('business_section_title');
$business_section_description = get_field('business_section_description');
$reason_1_title               = get_field('reason_1_title');
$reason_1_description         = get_field('reason_1_description');
$reason_2_title               = get_field('reason_2_title');
$reason_2_description         = get_field('reason_2_description');

get_header(); ?>

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

<!-- OPT IN SECTION
===================================== -->
<section id="optin">
  <div class="container">
    <div class="row">

      <div class="col-sm-8">
        <p class="lead"><?php echo $optin_text; ?></p>
      </div><!-- col -->

      <div class="col-sm-4">
        <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $optin_button_text; ?></button>
      </div><!-- col -->

    </div><!-- row -->
  </div><!-- container -->
</section><!-- optin -->

<!-- BOOST YOUR INCOME
================================================ -->
<section id="boost-income">
  <div class="container">
    <div class="section-header">

      <!-- If user uploaded an image -->
      <?php

        if( !empty($business_feature_image) ) : ?>

        <img src="<?php echo $business_feature_image ['url']; ?>" alt="<?php echo $business_feature_image['alt']; ?>">

      <?php endif; ?>

      <h2><?php echo $business_section_title; ?></h2>
    </div><!-- /.section-header -->

    <p class="lead"><?php echo $business_section_description; ?></p>

    <div class="row">
      <div class="col-sm-6">
        <h3><?php echo $reason_1_title; ?></h3>
        <p><?php echo $reason_1_description; ?></p>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <h3><?php echo $reason_2_title; ?></h3>
        <p><?php echo $reason_2_description; ?></p>
      </div><!-- /.col -->


    </div><!-- /.row -->

  </div><!-- /.container -->
</section><!-- /.boost-income -->

<!-- WHO BENEFITS
================================================= -->
<section id="who-benefits">
  <div class="container">

    <div class="section-header">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-pad.png" alt="pad and pencil">
      <h2>Eam dicam fabulas labores et.</h2>
    </div><!-- /.section-header -->

    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h3>No dicit aperiri vix, vel ne laoreet.</h3>
        <p>Eum ea odio graeci, et mel dolorum denique perfecto. Ea usu brute putent oportere. Id impetus mentitum quaestio vis, recusabo pericula mel ad, modus iusto vel ut.</p>
          <p>Eu qui deseruisse disputationi, fugit dissentias eu nec. Debet consulatu consetetur ut qui, ut justo idque primis nam, ius id suas civibus mediocrem.</p>

          <h3>Eu qui deseruisse disputationi</h3>
          <p>Vis no duis veri singulis, quas scripserit eam ex. Pro no erat altera. Mei natum illum oporteat an, et animal fuisset fastidii vix, at iracundia pertinacia has. Utroque alienum mel ei, ad est similique constituam.</p>

          <p>Qui ad error adipisci, duo pertinax molestiae ut. Mollis fuisset vim ad, elit labore est ea. Eu luptatum invenire ius. Eum ex justo assum complectitur. Debet consequuntur ea pro, mel timeam aliquip an. Ad his aeque ubique delenit, an mei sint posse constituto.
          </p>

          <h3>Lorem ipsum dolor sit amet</h3>
          <p>Qui ad error adipisci, duo pertinax molestiae ut. Mollis fuisset vim ad, elit labore est ea. Eu luptatum invenire ius. Eum ex justo assum complectitur. Debet consequuntur ea pro, mel timeam aliquip an. Ad his aeque ubique delenit, an mei sint posse constituto.</p>
            <p>Eu qui deseruisse disputationi, fugit dissentias eu nec. Debet consulatu consetetur ut qui, ut justo idque primis nam, ius id suas civibus mediocrem.</p>

            <h3>Lelit labore est ea</h3>
            <p>Qui ad error adipisci, duo pertinax molestiae ut. Mollis fuisset vim ad, elit labore est ea. Eu luptatum invenire ius. Eum ex justo assum complectitur. Debet consequuntur ea pro, mel timeam aliquip an. Ad his aeque ubique delenit, an mei sint posse constituto.</p>
            <p>Mel timeam aliquip an. Ad his aeque ubique delenit, an mei sint posse constituto. Duo pertinax molestiae ut. Mollis fuisset vim ad, elit labore est ea.</p>


      </div><!-- /.col -->
    </div><!-- /.row -->

  </div><!-- /.container -->
</section><!-- /.who-benefits -->

<!-- COURSE FEATURES
============================================ -->
<section id="course-features">
  <div class="container">

    <div class="section-header">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-rocket.png" alt="rocket">
      <h2>Lorem ipsum anda boggity boo</h2>
    </div><!-- /.section-header" -->

    <div class="row">

      <div class="col-sm-2">
        <i class="ci ci-computer"></i>
        <h4>Lacus maecenas praesent vestibulum sed ac.</h4>
      </div><!-- /.col -->

      <div class="col-sm-2">
        <i class="ci ci-watch"></i>
        <h4>Cum nostra eros nunc. Ligula augue dictum, vel ut amet.</h4>
      </div><!-- /.col -->

        <div class="col-sm-2">
          <i class="ci ci-calender"></i>
          <h4>Ligula augue dictum, vel ut amet etiam vestibulum dolor nullam.</h4>
        </div><!-- /.col -->

          <div class="col-sm-2">
            <i class="ci ci-community"></i>
            <h4>Arcu lorem, velit ultrices class, vel vestibulum ac.</h4>
          </div><!-- /.col -->

            <div class="col-sm-2">
              <i class="ci ci-instructor"></i>
              <h4>Convallis sed fusce porttitor habitasse, quam mi aliquam in.</h4>
            </div><!-- /.col -->

              <div class="col-sm-2">
                <i class="ci ci-device"></i>
                <h4>Orci id dui, tempus orci lacus mattis convallis, volutpat lectus animi enim.</h4>
              </div><!-- /.col -->

    </div><!-- /.row -->

  </div><!-- /.container -->

</section><!-- /.course-features -->

<!-- PROJECT FEATURES
========================================= -->
<section id="project-features">
  <div class="container">

    <h2>Convallis sed fusce porttitor</h2>
    <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>

      <div class="row">
        <div class="col-sm-4">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-design.png" alt="Design">
          <h3>Aenean Massa</h3>
          <p>Aenean commodo ligula eget dolor. Aenean massa.</p>
        </div><!-- /.col -->
        <div class="col-sm-4">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-code.png" alt="Code">
          <h3>Aenean Massa</h3>
          <p>Aenean commodo ligula eget dolor. Aenean massa.</p>
        </div><!-- /.col -->
        <div class="col-sm-4">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-design.png" alt="Design">
          <h3>Aenean Massa</h3>
          <p>Aenean commodo ligula eget dolor. Aenean massa.</p>
        </div><!-- /.col -->
      </div><!-- /.row -->

  </div><!-- /.container -->
</section><!-- /.project-features -->

<!-- VIDEO FEATURETTE
=========================================== -->
<section id="featurette">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2>Watch the video</h2>
        <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/1TGzfROGfeA?rel=0&amp;showinfo=0?ecver=2" width="100%" height="415" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.featurette -->

<!-- INSTRUCTOR
================================================== -->
<section id="instructor">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-6">
        <div class="row">
          <div class="col-lg-8">
            <h2>Duis sagittis <small>Praesent mauris</small></h2>
          </div><!-- /.col-sm-8 -->
          <div class="col-lg-4">
            <a href="https://twitter.com/cldigitaldesign" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
            <a href="https://facebook.com/CL-Digital-Design-203660030114461/about/?ref=page_internal" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
            <a href="https://plus.google.com/u/0/118003724943516469099" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <p class="lead">A highly skilled professional, Charles Loehle is a passionate and experienced web designer, developer, blogger and digital entrepreneur.</p>

        <p>Hailing from Atlanta, Georgia, Charles has educated and equiped himself with the necessary skills to become a spearhead in his trade of solving problems on the web, crafting design solutions, and speaking in code.</p>

        <p>Charles's determination and love for what he does enables him to build custom websites for a wide-array of clientele at his company, CL Digital Design. He regularly blogs about living your life to the fullest, guitars and his cat: CatDog.</p>

        <hr>

        <h3> Sed lacinia <small>Suspendisse potenti.</small></h3>

        <div class="row">
          <div class="col-xs-4">
            <div class="num">
              <div class="num-content">45,000<span>consequat</span>
              </div><!-- /.num-content -->
            </div><!-- /.num -->
          </div><!-- /.col-xs-4-->

          <div class="col-xs-4">
            <div class="num">
              <div class="num-content">508<span>tellus</span>
              </div><!-- /.num-content -->
            </div><!-- /.num -->
          </div><!-- /.col-xs-4-->

          <div class="col-xs-4">
            <div class="num">
              <div class="num-content">7<span>mi a</span>
              </div><!-- /.num-content -->
            </div><!-- /.num -->
          </div><!-- /.col-xs-4-->
        </div><!-- /.row -->

      </div><!-- /.col-sm-8 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.instructor -->

<!-- TESTIMONIALS
=============================================-->
<section id="kudos">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">

        <h2>What People Are Saying About CL Digital Design</h2>

        <!-- TESTIMONIAL -->
        <div class="row testimonial">
          <div class="col-sm-4">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brennan.jpg" alt="Brennan">
          </div><!-- /.col-sm-4 -->
          <div class="col-sm-8">
            <blockquote>
              As a 19th century fighter with a handlebar mustache, I must say that CL Digital Design did a fabulous job on my promotional website and made my mustache look incredible.
              <cite>&mdash; Old Timey Guy, wearer of a handlebar mustache</cite>
            </blockquote>
          </div><!-- /.col-sm-8 -->
        </div><!-- /.row -->

        <!-- TESTIMONIAL -->
        <div class="row testimonial">
          <div class="col-sm-4">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt="Ben">
          </div><!-- /.col-sm-4 -->
          <div class="col-sm-8">
            <blockquote>
              Keffiyeh small batch polaroid, migas asymmetrical forage brunch DIY live-edge lyft post-ironic. Enamel pin beard wayfarers twee.
              <cite>&mdash; Ben, Cartoon guy extrordinaire</cite>
            </blockquote>
          </div><!-- /.col-sm-8 -->
        </div><!-- /.row -->

        <!-- TESTIMONIAL -->
        <div class="row testimonial">
          <div class="col-sm-4">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="AJ">
          </div><!-- /.col-sm-4 -->
          <div class="col-sm-8">
            <blockquote>
              Kitsch everyday carry flexitarian vegan, viral semiotics bitters yr affogato. Tumblr scenester offal, jianbing whatever pour-over beard venmo listicle tofu hammock. Enamel pin beard wayfarers twee.
              <cite>&mdash; AJ, Cartoon beard guy</cite>
            </blockquote>
          </div><!-- /.col-sm-8 -->
        </div><!-- /.row -->

        <!-- TESTIMONIAL -->
        <div class="row testimonial">
          <div class="col-sm-4">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt="Ernest">
          </div><!-- /.col-sm-4 -->
          <div class="col-sm-8">
            <blockquote>
              Gluten-free offal blue bottle listicle VHS echo park venmo, kickstarter hoodie kombucha tattooed. Lomo copper mug post-ironic ugh semiotics umami. Enamel pin tbh franzen vice tote bag.
              <cite>&mdash; Franzen umami yr pork belly artisan.</cite>
            </blockquote>
          </div><!-- /.col-sm-8 -->
        </div><!-- /.row -->


      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /#kudos -->

<?php get_footer(); ?>
