<?php get_header(); ?>
<main id="main">
  <div class="container">
    <div class="page-intro">
      <h1 class="page-title"><?php echo get_field('page_title') ? get_title('page_title') : get_the_title(); ?>
      <?php if(get_field('page_subtitle')): ?>
        <h2 class="subtitle"><?php the_field('page_subtitle'); ?></h2>
      <?php endif; ?>
    </div>
    <section id="mainContent">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; else: ?>
        <p>Sorry, the page was not found.</p>
      <?php endif; ?>
    </section>
  </div>
</main>
<?php get_footer(); ?>