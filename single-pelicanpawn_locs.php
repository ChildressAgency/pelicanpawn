<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="page-intro">
          <h1 class="page-title"><?php echo get_field('title') ? get_field('title') : the_title(); ?></h1>
          <?php if(get_field('page_subtitle')): ?>
            <h2 class="subtitle"><?php the_field('page_subtitle'); ?></h2>
          <?php endif; ?>
          <div class="location-nav">
            <?php previous_post_link('%link', '<i class="fa fa-chevron-left"></i>'); ?>
            <?php next_post_link('%link', '<i class="fa fa-chevron-right"></i>'); ?>
          </div>
        </div>
        <section id="mainContent">
          <?php if(get_field('virtual_tour_embed_code')): ?>
            <div class="virtual-tour embed-responsive embed-responsive-4by3">
              <?php the_field('virtual_tour_embed_code'); ?>
            </div>
          <?php endif; ?>
          <div class="map">
            <h1>Find us on the map</h1>
            <p><?php the_field('street_address'); ?><br /><?php the_field('city_state_zip'); ?><br /><?php the_field('phone_number'); ?></p>
            <div class="embed-responsive embed-responsive-16by9">
              <?php the_field('map_embed_code'); ?>
            </div>
          </div>
          <?php if(get_field('store_shop_link')): ?>
            <div id="shopOnline">
              <h1>Shop this store online!</h1>
              <a href="<?php the_field('store_shop_link'); ?>" class="btn-main">Online Shop</a>
            </div>
          <?php endif; ?>
          <div id='storeHours'>
            <h1>Store Hours</h1>
            <?php the_field('store_hours'); ?>
          </div>
        </section>
      <?php endwhile; endif; ?>
    </div>
  </main>
<?php get_footer(); ?>