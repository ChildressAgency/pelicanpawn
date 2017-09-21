<?php get_header(); ?>
<main id="main">
  <div class="container">
    <?php if(is_archive()): ?>

      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="row blog-loop">
          <div class="col-sm-5">
            <?php 
              if(has_post_thumbnail()){
                the_post_thumbnail('full', array('class' => 'img-responsive center-block', 'alt' => ''));
              }
            ?>
          </div>
          <div class="col-sm-7">
            <div class="blog-summary">
              <h1><?php the_title(); ?></h1>
              <h2 class="subtitle"><?php echo get_the_date('M d, Y'); ?></h2>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>" class="read-more">MORE...</a>
            </div>
          </div>
        </div>
      <?php endwhile; endif; wp_pagenavi(); ?>

    <?php else: ?>

      <div class="page-intro">
        <h1 class="page-title"><?php echo get_field('page_title') ? get_field('page_title'): get_the_title(); ?></h1>
        <?php if(get_field('page_subtitle')): ?>
          <h2 class="subtitle"><?php the_field('page_subtitle'); ?></h2>
        <?php endif; ?>
      </div>
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
      
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>