<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">

  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="private">
  
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <title>Pelican Pawn</title>

  <?php wp_head(); ?>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!--[if gte IE 9]
    <style type="text/css">
      .shadow-gradient {
        filter: none;
      }
    </style>
  <![endif]-->
  <!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-99227980-33"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-99227980-33');
</script>
</head>

<body>
  <div class="masthead hidden-xs">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4">
          <?php 
            $facebook = get_field('facebook', 'option');
            $twitter = get_field('twitter', 'option');
            $instagram = get_field('instagram', 'option');
          ?>
          <div class="social">
            <?php if($facebook): ?>
              <a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook-official"></i></a>
            <?php endif; if($twitter): ?>
              <a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
            <?php endif; if($instagram): ?>
              <a href="<?php echo $intsagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-sm-4">
          <?php 
            $locations = new WP_Query(array(
              'post_type' => 'pelicanpawn_locs',
              'post_status' => 'publish',
              'posts_per_page' => -1
            ));
            if($locations->have_posts()): ?>
              <div class="location-phone">
                <?php while($locations->have_posts()): $locations->the_post(); ?>
                  <?php if(get_field('show_in_header')): ?>
                    <a href="tel:<?php the_field('phone_number'); ?>"><?php the_title(); ?><span><?php the_field('phone_number'); ?></span></a>
                  <?php endif; ?>
                <?php endwhile; ?>
              </div>
          <?php endif; wp_reset_postdata(); ?>
        </div>
        <div class="col-sm-4">
          <div class="quick-links">
            <!--<a href="<?php echo home_url('how-to-pawn'); ?>">How to Pawn</a>-->
            <?php if(get_field('check_my_loan_link', 'option')): ?>
              <a href="<?php the_field('check_my_loan_link', 'option'); ?>">Check My Loan</a>
            <?php endif; ?>
            <?php if(get_field('my_account_link', 'option')): ?>
              <a href="<?php the_field('my_account_link', 'option'); ?>">My Account</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav id="header-nav" class="navbar">
    <div class="container">
      <div class="navbar-header">
        <a href="<?php echo home_url(); ?>" class="header-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive" alt="Pelican Pawn Logo" /></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="expanded" aria-controls="navbar">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li<?php if(is_page('services')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('services'); ?>" title="Services">Services</a></li>
          <li<?php if(is_page('locations') || is_singular('location')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('locations'); ?>" title="Locations">Locations</a></li>
          <?php if(get_field('main_shop_page_link', 'option')): ?>
            <li><a href="<?php the_field('main_shop_page_link', 'option'); ?>" title="Shop">Shop</a></li>
          <?php endif; ?>
          <li<?php if(is_page('faqs')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('faqs'); ?>" title="faqs">FAQs</a></li>
          <li<?php if(is_home()){ echo ' class="active"'; } ?>><a href="<?php echo home_url('blog'); ?>" title="blog">Blog</a></li>
          <li<?php if(is_page('how-to-pawn')){ echo ' class="active"'; } ?>><a href="<?Php echo home_url('how-to-pawn'); ?>" title="How to Pawn">How To Pawn</a></li>
          <li<?php if(is_page('contact')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('contact'); ?>" title="Contact">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right visible-xs-block">
          <li>
            <div class="social">
              <?php if($facebook): ?>
                <a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook-official"></i></a>
              <?php endif; if($twitter): ?>
                <a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
              <?php endif; if($instagram): ?>
                <a href="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
              <?php endif; ?>
            </div>
          </li>
          <?php if($locations->have_posts()): ?>
            <li>
              <div class="location-phone">
                <?php while($locations->have_post()): $locations->the_post(); ?>
                  <?php if(get_field('show_in_header')): ?>
                    <a href="tel:<?php the_field('phone_number'); ?>"><?php the_title(); ?><span><?php the_field('phone_number'); ?></span></a>
                  <?php endif; ?>
                <?php endwhile; ?>
              </div>
            </li>
          <?php endif; wp_reset_postdata(); ?>
          <li>
            <div class="quick-links">
              <a href="<?php echo home_url('how-to-pawn'); ?>">How to Pawn</a>
              <?php if(get_field('check_my_loan_link', 'option')): ?>
                <a href="<?php the_field('check_my_loan_link', 'option'); ?>">Check My Loan</a>
              <?php endif; ?>
              <?php if(get_field('my_account_link', 'option')): ?>
                <a href="<?php the_field('my_account_link', 'option'); ?>">My Account</a>
              <?php endif; ?>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
