<?php get_header(); ?>
  <section id="locations">
    <div class="container">
      <h1><?php echo get_field('page_title') ? get_field('page_title') : get_the_title(); ?></h1>
      <?php if(get_field('page_subtitle')): ?>
        <p><?php the_field('page_subtitle'); ?></p>
      <?php endif; ?>
    </div>
    <ul class="location-row">
      <?php
        $locations = new WP_Query(array(
          'post_type' => 'pelicanpawn_locations',
          'post_status' => 'publish',
          'posts_per_page' => -1
        ));
        if($locations->have_posts()): while($locations->have_posts()): $locations->the_post(); ?>
          <li>
            <img src="<?php the_field('location_image'); ?>" class="" alt="<?php the_title(); ?> Location" />
            <div class="caption">
              <h2><?php the_title(); ?></h2>
              <p><?php the_field('street_address'); ?><br /><?php the_field('city_state_zip'); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn-main btn-clear">Take a Tour</a>
            </div>
          </li>
      <?php endwhile; endif; ?>
    </ul>
  </section>
  <section id="shopOnline">
    <div class="container">
      <h1>Shop our stores online!</h1>
      <a href="<?php the_field('main_shop_page_link'); ?>" class="btn-main">Online Shop</a>
    </div>
  </section>
<?php get_footer(); ?>