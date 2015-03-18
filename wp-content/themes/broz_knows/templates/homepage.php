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

<div class="drivers">
  <div class="row">
    <!-- WEB DESIGN BOX -->
    <div class="driver-column">
      <img src="<?php the_field('image_driver_1');?>">
      <h2><?php the_field('driver_title_1');?></h2>
      <p><?php the_field('description_driver_1'); ?></p>
    </div>
    <!-- END WEB DESIGN BOX -->

    <!-- WEB DESIGN BOX -->
    <div class="driver-column">
      <img src="<?php the_field('image_driver_2');?>">
      <h2><?php the_field('title_driver_2');?></h2>
      <p><?php the_field('description_driver_2'); ?></p>
    </div>
    <!-- END WEB DESIGN BOX -->

    <!-- WEB DESIGN BOX -->
    <div class="driver-column">
      <img src="<?php the_field('image_driver_3');?>">
      <h2><?php the_field('title_driver_3');?></h2>
      <p><?php the_field('description_driver_3'); ?></p>
    </div>
    <!-- END WEB DESIGN BOX -->

  </div>
</div>




<!--  

<div class="row clearfix">
  <div class="column_home_portfolio">
    <img class="portfolio_image" src="<?php bloginfo('template_directory'); ?>/images/home_web.jpg"/>
    <h2 class="h1_portfolio">Web Design</h2>
    <p>Broz's belief is that web design should be accessible for every individual and business; not just large companies with large budgets. Since its founding in 2001, Broz has become a stable, well-respected design firm that offers aff
    <p><b>To learn more about Broz's web design & development services, click here.</b></p>
  </div>

  <div class="column_home_portfolio">
    <img class="portfolio_image" src="/<?php bloginfo('template_directory'); ?>/images/home_apparel.jpg"/>
    <h2 class="h1_portfolio">Apparel & Swag</h2>
    <p>Broz is your one-stop shop for custom design t-shirts, apparel and marketing & promotional items. Broz will design the artwork or logo for your project, offer you options from a wide variety of wholesale vendors and faciitate press checks and printing.</p>
    <p><b>Click here to learn more about Broz's apparel and swag offerings.</b></p>
  </div>
 
  <div class="column_home_portfolio">
    <img class="portfolio_image" src="<?php bloginfo('template_directory'); ?>/images/home_branding.jpg"/>
    <h2 class="h1_portfolio">Branding</h2>
    <p>Branding goes far beyond just having a great logo; it's an all-encompassing concept that applies to advertising, signage, business cards, letterhead, an online presence and much, much more.</p>
    <p><b>For more on branding or to see Broz's branding portfolio, click here.</b></p>
  </div>
  
  <div class="column_home_portfolio">
    <img class="portfolio_image" src="<?php bloginfo('template_directory'); ?>/images/home_graphic.jpg"/>
    <h2 class="h1_portfolio">Graphic Design</h2>
    <p>Broz has extensive experience in graphic design including custom illustration, logo development, marketing collateral, advertising, signage, packaging, menu design and invitations.</p>
  </div>
</div>

-->

<!-- Broz Box Starts Here -->
<div class="broz_box clearfix">
  <div class="row">
    <h2 class="h1_broz_box">Whom or What is Broz?</h2>
    <p>My grandfather once said that no man should give himself his own nickname. Our Eastern Bloc handle Brozovich trips over most people's tongues and has seen its share of shortenings, mispronunciations and misspellings. Through the years, the only common thing regarding our last name was the shortening of it to Broz (that, and sharing the shortened name with a <a href="http://en.wikipedia.org/wiki/Josip_Broz_Tito" target="_blank">former most benevolent dictator of Yugoslavia</a>). I have been signing my artwork with "Broz" for as long as I can remember, so it seemed like a natural progression to honor that tradition when naming my design firm.</p>
    <img class="broz_head" src="<?php bloginfo('template_directory'); ?>/images/whoisbroz.png" alt="Broz Knows"/>
  </div>
</div>
<!-- Broz Box Ends Here -->


<?php get_footer(); ?>