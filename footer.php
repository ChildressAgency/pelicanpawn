  <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-large.png" class="img-responsive center-block" alt="Pelican Pawn Logo" />
        </div>
        <div class="col-sm-2">
          <ul class="footer-nav list-unstyled">
            <li><a href="<?php echo home_url('services'); ?>">Services</a></li>
            <li><a href="<?php echo home_url('locations'); ?>">Locations</a></li>
            <?php if(get_field('main_shop_page_link', 'option')): ?>
              <li><a href="<?php the_field('main_shop_page_link', 'option'); ?>">Shop</a></li>
            <?php endif; ?>
            <li><a href="<?php echo home_url('blog'); ?>">Blog</a></li>
            <li><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
            <li><a href="<?php echo home_url('how-to-pawn'); ?>">How To Pawn</a></li>
            <?php if(get_field('check_my_loan_link', 'option')): ?>
              <li><a href="<?php the_field('check_my_loan_link', 'option'); ?>">Check My Loan</a></li>
            <?php endif; ?>
            <?php if(get_field('my_account_link', 'option')): ?>
              <li><a href="<?php the_field('my_account_link', 'option'); ?>">My Account</a></li>
            <?php endif; ?>
            <li><a href="<?php echo home_url('careers'); ?>">Careers</a></li>
            <li><a href="<?php echo home_url('privacy-policy'); ?>">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="col-sm-5">
          <?php
            $locations = new WP_Query(array(
              'post_type' => 'pelicanpawn_locs',
              'post_status' => 'publish',
              'posts_per_page' => -1
            ));

            if($locations->have_posts()): while($locations->have_posts()): $locations->the_post(); ?>
              <div class="row footer-location">
                <div class="col-sm-7">
                  <p><?php the_title(); ?><br /><?php the_field('street_address'); ?><br /><?php the_field('city_state_zip'); ?></p>
                </div>
                <div class="col-sm-5">
                  <p><?php the_field('phone_number'); ?></p>
                </div>
              </div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
        <div class="col-sm-3">
          <div class="social">
            <?php if(get_field('facebook', 'option')): ?>
              <a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><i class="fa fa-facebook-official"></i></a>
            <?php endif; if(get_field('twitter', 'option')): ?>
              <a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
            <?php endif; if(get_field('instagram', 'option')): ?>
              <a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
            <?php endif; ?>
          </div>
          <hr />
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/payment-options.png" class="img-responsive center-block" alt="Payment Options" />
        </div>
      </div>
      <div class="copyright">
        <p>&copy;<?php echo date('Y'); ?> Pelican Pawn</p>
        <p>website created by <a href="https://childressagency.com" target="_blank">The Childress Agency</a></p>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>