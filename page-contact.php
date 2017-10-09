<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <div class="page-intro">
        <h1 class="page-title"><?php echo get_field('page_title') ? get_field('page_title') : get_the_title(); ?></h1>
        <?php if(get_field('page_subtitle')): ?>
          <h2 class="subtitle"><?php the_field('page_subtitle'); ?></h2>        
        <?php endif; ?>
      </div>
      <section id="mainContent">
        <?php 
          $locations = new WP_Query(array(
            'post_type' => 'pelicanpawn_locs',
            'post_status' => 'publish',
            'posts_per_page' => -1
          ));

          if($locations->have_posts()): while($locations->have_posts()): $locations->the_post(); ?>
            <div class="row contact-location">
              <div class="col-sm-6">
                <h3><?php the_title(); ?></h3>
                <p><?php the_field('street_address'); ?><br /><?php the_field('city_state_zip'); ?></p>
              </div>
              <div class="col-sm-6">
                <p class="contact-phone"><a href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone_number'); ?></a><?php echo get_field('store_email') ? '<br /><a href="mailto:' . get_field('store_email') . '">' . get_field('store_email') . '</a>' : ''; ?></p>
              </div>
            </div>
        <?php endwhile; endif; ?>
      </section>
    </div>
  </main>
<?php get_footer(); ?>