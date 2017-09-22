<?php get_header(); ?>
<main id="main">
  <div class="container container-sm-height">
    <div class="page-intro">
      <h1 class="page-title"><?php echo get_field('page_title') ? get_title('page_title') : get_the_title(); ?>
      <?php if(get_field('page_subtitle')): ?>
        <h2 class="subtitle"><?php the_field('page_subtitle'); ?></h2>
      <?php endif; ?>
    </div>
    <section id="mainContent">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
      <?php if(have_rows('steps')): while(have_rows('steps')): the_row(); ?>
        <div class="row pawn-process row-sm-height">
          <div class="col-sm-5 col-sm-height">
            <img src="<?php the_sub_field('step_image'); ?>" class="img-responsive center-block" alt="" />
          </div>
          <div class="col-sm-7 col-sm-height">
            <?php the_field('step_content'); ?>
          </div>
        </div>
      <?php endwhile; endif; ?>
    </section>
  </div>
</main>
<?php get_footer(); ?>