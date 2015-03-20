<?php
/*
* Template Name: Home Page Template
* Description: Home page template.
*/
get_header();

?>
<div class="hero" style="background-image: url(<?php the_field('hero_background_image');?>);">
  <div class="content-wrap row">
    <h1><?php the_field('hero_headline');?></h1>
    <p><?php the_field('hero_subhead');?></p>
    <a class="button" href="<?php the_field('hero_button_link'); ?>"><?php the_field('hero_button_label'); ?></a>
</div>
</div>

<div class="services">
  <div class="row">
    <!-- WEB DESIGN -->
    <div class="column fourth services-column">
      <a href=""><img class="services_image" src="<?php the_field('web_design_image');?>"></a>
      <h2><?php the_field('web_design_title');?></h2>
      <p><?php the_field('web_design_description'); ?></p>
    </div>
    <!-- END WEB DESIGN -->

    <!-- APPAREL -->
    <div class="column fourth services-column">
      <a href=""><img class="services_image" src="<?php the_field('apparel_image');?>"></a>
      <h2><?php the_field('apparel_title');?></h2>
      <p><?php the_field('apparel_description'); ?></p>
    </div>
    <!-- END APPAREL -->

    <!-- BRANDING -->
    <div class="column fourth services-column">
      <a href=""><img class="services_image" src="<?php the_field('branding_image');?>"></a>
      <h2><?php the_field('branding_title');?></h2>
      <p><?php the_field('branding_description'); ?></p>
    </div>
    <!-- END BRANDING -->

    <!-- GRAPHIC DESIGN -->
    <div class="column fourth services-column">
      <a href=""><img class="services_image" src="<?php the_field('graphic_image');?>"></a>
      <h2><?php the_field('graphic_title');?></h2>
      <p><?php the_field('graphic_description'); ?></p>
    </div>
    <!-- GRAPHIC DESIGN -->
  </div>
</div>

<!-- CUSTOM POST TYPE -->
<div class="row">
<?php
    // The Arguments
    $args = array(
        'post_type' => 'portfolio',  // Name of Your Custom Post Type
        'posts_per_page' => 3       // Number of Posts to Retrieve
    );
    // Start Loop
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
?>

<div class="column third">
  <a class="featured-image-overlay" href="<?php the_permalink(); ?>"><img src="<?php the_field('portfolio_feature_image'); ?>" /></a>
  <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
  <p><?php the_field('portfolio_short_description'); ?></p>
</div>

<?php
    // Resets the Loop
    endwhile;
    wp_reset_postdata();
?>
</div>
<!-- CUSTOM POST TYPE ENDS -->



<!-- Broz Box Starts Here -->
<div class="broz_box clearfix">
  <div class="row">
    <h2 class="h1_broz_box">Whom or What is Broz?</h2>
    <p><?php the_field('footer_blurb', 'options'); ?></p>
    <img class="broz_head" src="<?php bloginfo('template_directory'); ?>/images/whoisbroz.png" alt="Broz Knows"/>
  </div>
</div>
<!-- Broz Box Ends Here -->


<?php get_footer(); ?>