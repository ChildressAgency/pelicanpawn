<?php get_header(); ?>
  <?php if(have_rows('hero_slides')): ?>
    <section class="hero hero-slider">
      <div id="hero-carousel" class="carousel slide" data-ride="carousel">

        <?php $slide_count = count(get_field('hero_slides')); ?>
        <ol class="carousel-indicators">
          <?php for($i = 0; $i < $slide_count; $i++): ?>
            <li data-target="#hero-carousel" data-slide-to="<?php echo $i; ?>"<?php if($i==0){ echo ' class="active"'; } ?>></li>
          <?php endfor; ?>
        </ol>

        <div class="carousel-inner" role="listbox">

          <?php $c=1; while(have_rows('hero_slides')): the_row(); ?>
            <div class="item<?php if($c==1){ echo ' active'; } ?>" style="background-image:url(<?php the_sub_field('slide_image'); ?>); <?php the_sub_field('slide_image_css'); ?>">
              <div class="carousel-caption">
                <h1><a href="<?php the_sub_field('slide_link'); ?>"><?php the_sub_field('slide_title'); ?></a></h1>
              </div>
              <span class="shadow-gradient"></span>
            </div>
          <?php $c++; endwhile; ?>

        </div>

        <a href="#hero-carousel" class="left carousel-control hidden-xs" role="button" data-slide="prev">
          <span class="arrow left-arrow" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a href="#hero-carousel" class="right carousel-control hidden-xs" role="button" data-slide="next">
          <span class="arrow right-arrow" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </section>
  <?php endif; ?>
  <main id="hp-main">
    <div class="container">
      <section class="main-content">
        <h1 class="page-title"><?php the_field('page_title'); ?></h1>
        <h2 class="subtitle"><?php the_field('page_subtitle'); ?></h2>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </section>
      
      <div class="image-links">
        <div class="row">
          <div class="col-sm-8 col-md-9">
            <a href="<?php the_field('featured_product_link'); ?>" class="featured-block product">
              <div class="featured-block-img">
                <img src="<?php the_field('featured_product_image'); ?>" class="img-responsive center-block" alt="" />
                <div class="caption">
                  <h1><?php the_field('featured_product_title'); ?></h1>
                </div>
              </div>
              <span class="shadow-gradient"></span>
            </a>
            <div class="row">
              <div class="col-sm-6">
                <a href="<?php the_field('featured_category_1_link'); ?>" class="featured-block">
                  <div class="featured-block-img">
                    <img src="<?php the_field('featured_category_1_image'); ?>" class="img-responsive center-block" alt="" />
                    <div class="caption">
                      <h1><?php the_field('featured_category_1_title'); ?></h1>
                    </div>
                  </div>
                  <span class="overlay"></span>
                </a>
              </div>
              <div class="col-sm-6">
                <a href="<?php the_field('featured_category_2_link'); ?>" class="featured-block">
                  <div class="featured-block-img">
                    <img src="<?php the_field('featured_category_2_image'); ?>" class="img-responsive center-block" alt="" />
                    <div class="caption">
                      <h1><?php the_field('featured_category_2_title'); ?></h1>
                    </div>
                  </div>
                  <span class="overlay"></span>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <a href="<?php the_field('featured_category_3_link'); ?>" class="featured-block">
                  <div class="featured-block-img">
                    <img src="<?php the_field('featured_category_3_image'); ?>" class="img-responsive center-block" alt="" />
                    <div class="caption">
                      <h1><?php the_field('featured_category_3_title'); ?></h1>
                    </div>
                  </div>
                  <span class="overlay"></span>
                </a>
              </div>
              <div class="col-sm-6">
                <a href="<?php the_field('featured_category_4_link'); ?>" class="featured-block">
                  <div class="featured-block-img">
                    <img src="<?php the_field('featured_category_4_image'); ?>" class="img-responsive center-block" alt="" />
                    <div class="caption">
                      <h1><?php the_field('featured_category_4_title'); ?></h1>
                    </div>
                  </div>
                  <span class="overlay"></span>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <a href="<?php the_field('featured_category_5_link'); ?>" class="featured-block">
                  <div class="featured-block-img">
                    <img src="<?php the_field('featured_category_5_image'); ?>" class="img-responsive center-block" alt="" />
                    <div class="caption">
                      <h1><?php the_field('featured_category_5_title'); ?></h1>
                    </div>
                  </div>
                  <span class="overlay"></span>
                </a>
              </div>
              <div class="col-sm-6">
                <a href="<?php the_field('featured_category_6_link'); ?>" class="featured-block">
                  <div class="featured-block-img">
                    <img src="<?php the_field('featured_category_6_image'); ?>" class="img-responsive center-block" alt="" />
                    <div class="caption">
                      <h1><?php the_field('featured_category_6_title'); ?></h1>
                    </div>
                  </div>
                  <span class="overlay"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-3">
            <a href="<?php the_field('side_ad_link'); ?>" class="side-ad">
              <div class="side-ad-img">
                <img src="<?php the_field('side_ad_image'); ?>" class="img-responsive center-block" alt="" />
                <div class="caption">
                  <h2><?php the_field('side_ad_title'); ?></h2>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>
  <section id="cashLoans" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/holding-cash.jpg); background-position:center center;">
    <div class="content-wrapper">
      <div class="content">
        <h1><?php the_field('cash_loans_section_title'); ?></h1>
        <h2 class="subtitle"><?php the_field('cash_loans_section_subtitle'); ?></h2>
        <a href="<?php the_field('cash_loans_learn_more_link'); ?>" class="btn-main">Learn More</a>
      </div>
    </div>
  </section>
  <section id="hp-services">
    <div class="container">
      <h1>Our Services</h1>
      <div class="row">
        <div class="col-sm-4">
          <div class="service-card we-pawn">
            <h1><?php the_field('service_card_1_title'); ?></h1>
            <p><?php the_field('service_card_1_description'); ?></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="service-card we-buy">
            <h1><?php the_field('service_card_2_title'); ?></h1>
            <p><?php the_field('service_card_2_description'); ?></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="service-card we-sell">
            <h1><?php the_field('service_card_3_title'); ?></h1>
            <p><?php the_field('service_card_3_description'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="locations">
    <div class="container">
      <h1>Locations</h1>
      <p><?php the_field('locations_section_intro_text'); ?></p>
    </div>
    <ul class="location-row">
      <?php 
        $locations = new WP_Query(array(
          'post_type' => 'pelicanpawn_locs',
          'post_status' => 'publish',
          'posts_per_page' => -1
        ));

        if($locations->have_posts()): while($locations->have_posts()): $locations->the_post(); ?>
          <li>
            <img src="<?php the_field('location_image'); ?>" alt="<?php the_title(); ?> Location" />
            <div class="caption">
              <h2><?php the_title(); ?></h2>
              <p><?php the_field('street_address'); ?><br /><?php the_field('city_state_zip'); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn-main btn-clear">Take a Tour</a>
            </div>
          </li>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </ul>
  </section>
  <section id="about">
    <div class="container">
      <h1>About Us</h1>
      <?php the_field('about_us_section_content'); ?>
    </div>
  </section>
<?php get_footer(); ?>