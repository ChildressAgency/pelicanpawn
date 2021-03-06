<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <div class="page-intro">
        <h1 class="page-title"><?php echo get_field('page_title') ? get_field('page_title') : get_the_title(); ?></h1>
        <?php if(get_field('page_subtitle')): ?>
          <h2 class="subtitle"><?php the_field('page_subtitle'); ?></h2>        
        <?php endif; ?>
      </div>
    </div>
  </main>
  <section id="services-list">
    <div class="container-fluid container-sm-height">
      <?php if(have_rows('services')): $i=1; while(have_rows('services')): the_row(); ?>
        <div class="row row-sm-height">
          <div class="col-sm-6 col-sm-height image-side<?php if($i%2==0){ echo ' col-sm-push-6'; } ?>" style="background-image:url(<?php the_sub_field('service_image'); ?>); <?php the_sub_field('service_image_css'); ?>"></div>
          <div class="col-sm-6 col-sm-height<?php if($i%2==0){ echo ' col-sm-pull-6'; } ?>">
            <div class="text-side">
              <h1><?php the_sub_field('service_title'); ?></h1>
              <?php if(get_sub_field('service_subtitle')): ?>
                <h2 class="subtitle"><?php the_sub_field('service_subtitle'); ?></h2>
              <?php endif; ?>
              <?php the_sub_field('service_content'); ?>
            </div>
          </div>
        </div>
      <?php $i++; endwhile; endif; ?>
    </div>
  </section>
  <section id="visitShop">
    <h1>Visit us in person<?php echo get_field('main_shop_page_link', 'option') ? ' or shop now' : ''; ?>!</h1>
    <a href="<?php echo home_url('locations'); ?>" class="btn-main">Locations</a>
    <?php if(get_field('main_shop_page_link', 'option')): ?>
      <a href="<?php the_field('main_shop_page_link', 'option'); ?>" class="btn-main">Online Shop</a>
    <?php endif; ?>
  </section>
<?php get_footer(); ?>