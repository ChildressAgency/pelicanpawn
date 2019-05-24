<?php get_header(); ?>
<main id="main">
  <div class="container">
    <div class="page-intro">
      <h1 class="page-title"><?php echo get_field('page_title') ? get_field('page_title') : get_the_title(); ?>
      <?php if(get_field('page_subtitle')): ?>
        <h2 class="subtitle"><?php the_field('page_subtitle'); ?></h2>
      <?php endif; ?>
    </div>
    <section id="mainContent">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
        <div class="clearfix"></div>
        <div class="comments" style="margin-top:80px;">
          <?php 
            if(comments_open() || get_comments_number()){
              comments_template();
            }
          ?>
        </div>
      <?php endwhile; else: ?>
        <p>Sorry, the page was not found.</p>
      <?php endif; ?>
    </section>
  </div>
</main>
<?php get_footer(); ?>