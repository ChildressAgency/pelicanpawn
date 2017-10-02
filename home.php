<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <div class="page-intro">
        <h1 class="page-title">Blog</h1>
        <h2 class="subtitle">News and Events</h2>        
      </div>
      <?php 
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $blog = new WP_Query(array(
          'post_status' => 'publish',
          'posts_per_page' => 4,
          'paged' => $paged
        ));
        if($blog->have_posts()): while($blog->have_posts()): $blog->the_post(); ?>
          <div class="row blog-loop">
            <div class="col-sm-5">
              <?php 
                if(has_post_thumbnail()){
                  the_post_thumbnail('full', array('class' => 'img-responsive center-block', 'alt' => ''));
                }
                else{
                  echo '<img src="' . get_stylesheet_directory_uri() . '/images/logo-placeholder.png" class="img-responsive center-block" alt="" />';
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
      <?php endwhile; endif; wp_pagenavi(array('wp_query' => $blog)); ?>
    </div>
  </main>
<?php get_footer(); ?>