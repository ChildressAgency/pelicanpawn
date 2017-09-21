<?php get_header(); ?>
  <?php if(have_rows('hero_slides')): ?>
    <section class="hero hero-slider">
      <div id="hero-carousel" class="carousel slide" data-ride="">

        <?php $slide_count = count(get_rows('hero_slides')); ?>
        <ol class="carousel-indicators">
          <?php for($i = 0; $i <= $slide_count; $i++): ?>
            <li data-target="#hero-carousel" data-slide-to="<?php echo $i; ?>"<?php if($i==0){ echo ' class="active"'; } ?>></li>
          <?php endfor; ?>
        </ol>

        <div class="carousel-inner" role="listbox">

          <?php $c==1; while(have_rows('hero_slides')): the_row(); ?>
            <div class="item<?php if($c==1){ echo ' active'; } ?>" style="background-image:url(<?php the_sub_field('slide_image'); ?>); <?php the_sub_field('slide_image_css'); ?>">
              <div class="carousel-caption">
                <h1><a href="<?php the_sub_field('slide_link'); ?>"><?php the_sub_field('slide_title'); ?></a></h1>
              </div>
              <span class="shadow-gradient"></span>
            </div>
          <?php $c++; endwhile; ?>

        </div>

        <a href="#hero-carousel" class="left carousel-control hidden-xs" role="button" data-slide="prev">
          <span class="arrow left-arrow" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a href="#hero-carousel" class="right carousel-control hidden-xs" role="button" data-slide="next">
          <span class="arrow right-arrow" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </section>
  <?php endif; ?>
  <main id="hp-main">
    <div class="container">
      <section class="main-content">
        <h1 class="page-title">Welcome to Pelican Pawn</h1>
        <h2 class="subtitle">One of Louisiana's Largest Pawn Shops</h2>
        <p>Pelican Pawn Shop is a full service pawn shop that is family owned &amp; operated. We have a retail store atmosphere with discount prices. Pelican Pawn is licensed, bonded and insured and has been in business for over 25 years. We are locally owned and operated. Prices were born here and raised down the street.</p>
        <p>At Pelican Pawn, all prices are negotiable! If you don't like our price, tell us yours. We are committed to working with our customers and won't let price stand in the way of that. NO REASONABLE OFFER IS EVER REFUSED.</p>
        <p>We have very flexible rates on our loans and we loan money on anything of value from $5.00 to $10,000.00. All loans are Confidential. Why go to a payday lender when you can get a secured loan for a much better rate.</p>
      </section>
      <div class="image-links">
        <div class="row">
          <div class="col-sm-8 col-md-9">
            <a href="#" class="featured-block product">
              <div class="featured-block-img">
                <img src="images/yellow-diamond-ring.jpg" class="img-responsive center-block" alt="" />
                <div class="caption">
                  <h1>Featured Item Description Here</h1>
                </div>
              </div>
              <span class="shadow-gradient"></span>
            </a>
            <div class="row">
              <div class="col-sm-6">
                <a href="#" class="featured-block">
                  <div class="featured-block-img">
                    <img src="images/monitors-on-display.jpg" class="img-responsive center-block" alt="" />
                    <div class="caption">
                      <h1>Electronics</h1>
                    </div>
                  </div>
                  <span class="overlay"></span>
                </a>
              </div>
              <div class="col-sm-6">
                <a href="#" class="featured-block">
                  <div class="featured-block-img">
                    <img src="images/woman-holding-handbag.jpg" class="img-responsive center-block" alt="" />
                    <div class="caption">
                      <h1>Handbags</h1>
                    </div>
                  </div>
                  <span class="overlay"></span>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <a href="#" class="featured-block">
                  <div class="featured-block-img">
                    <img src="images/rows-of-guns.jpg" class="img-responsive center-block" alt="" />
                    <div class="caption">
                      <h1>Firearms</h1>
                    </div>
                  </div>
                  <span class="overlay"></span>
                </a>
              </div>
              <div class="col-sm-6">
                <a href="#" class="featured-block">
                  <div class="featured-block-img">
                    <img src="images/socket-set.jpg" class="img-responsive center-block" alt="" />
                    <div class="caption">
                      <h1>Tools</h1>
                    </div>
                  </div>
                  <span class="overlay"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-3">
            <a href="#" class="side-ad">
              <div class="side-ad-img">
                <img src="images/diamond-rings-vertical.jpg" class="img-responsive center-block" alt="" />
                <div class="caption">
                  <h2>Fall Jewelry Sale<br /><span>20%</span>off all fall themed jewelry in stock</h2>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>
  <section id="cashLoans" style="background-image:url(images/holding-cash.jpg); background-position:center center;">
    <div class="content-wrapper">
      <div class="content">
        <h1>Instant Cash Loans</h1>
        <h2 class="subtitle">No Loan is too large or too small!</h2>
        <a href="#" class="btn-main">Learn More</a>
      </div>
    </div>
  </section>
  <section id="hp-services">
    <div class="container">
      <h1>Our Services</h1>
      <div class="row">
        <div class="col-sm-4">
          <div class="service-card we-pawn">
            <h1>We Pawn</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="service-card we-buy">
            <h1>We Buy</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="service-card we-sell">
            <h1>We Sell</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="locations">
    <div class="container">
      <h1>Locations</h1>
      <p>Pelican Pawn offers three locations for your convenience. Take a virtual tour of our locations!</p>
    </div>
    <ul class="location-row">
      <li>
        <img src="images/baton-rouge-location.jpg" class="" alt="Baton Rouge Location" />
        <div class="caption">
          <h2>Baton Rouge</h2>
          <p>2646 Florida Blvd.<br />Baton Rouge, LA 70802</p>
          <a href="#" class="btn-main btn-clear">Take a Tour</a>
        </div>
      </li>
      <li>
        <img src="images/denham-springs-location.jpg" class="" alt="Denham Springs Location" />
        <div class="caption">
          <h2>Denham Springs</h2>
          <p>1001 Florida Ave. SW<br />Denham Springs, LA 70726</p>
          <a href="#" class="btn-main btn-clear">Take a Tour</a>
        </div>
      </li>
      <li>
        <img src="images/gonzales-location.jpg" class="" alt="Gonzales Location" />
        <div class="caption">
          <h2>Gonzales</h2>
          <p>305 S Burnside Ave., Suite D<br />Gonzales, LA 70737</p>
          <a href="#" class="btn-main btn-clear">Take a Tour</a>
        </div>
      </li>
    </ul>
  </section>
  <section id="about">
    <div class="container">
      <h1>About Us</h1>
      <p>Pelican Pawn was started by Jim Boring in 1988. the first Pelican Pawn location was on Plank Rd. in Baton Rouge. The main location has since moved to 2646 Florida Blvd in Baton Rouge. We also have locations in Denham Springs, Gonzales and Jefferson for the convenience of our customers. We are nor only the capital area's largest pawn shop, but the most preferred.</p>
      <p>The atmosphere here at Pelican Pawn sets us apart from all the other pawn shops in the Baton Rouge area. We strive to create a fun, friendly, safe environment where our customers will feel comfortable. We always treat our customers and their items with respect. Pelican Pawn is not another stuffy pawn shop. Customers are treated better at Pelican Pawn.</p>
    </div>
  </section>
<?php get_footer(); ?>