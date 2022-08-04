<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Electronic Store</title>
  <?php include 'toplink_include.php'; ?>
</head>

<body>
  <div class="page-wrapper">
    <?php include 'header.php'; ?>
    <!-- End .header -->

    <main class="main">
      <div class="intro-slider-container mb-5">
        <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{
                        "dots": true,
                        "nav": false, 
                        "responsive": {
                            "1200": {
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
          <div class="intro-slide" style="background-image: url(assets/images/banner.png);">
            <div class="container intro-content">
              <div class="row justify-content-end">
                <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                  <h3 class="intro-subtitle text-third">Deals and Promotions</h3><!-- End .h3 intro-subtitle -->
                  <h1 class="intro-title">Beats by</h1>
                  <h1 class="intro-title">Dre Studio 3</h1><!-- End .intro-title -->

                  <div class="intro-price">
                    <sup class="intro-old-price">$349,95</sup>
                    <span class="text-third">
                      $279<sup>.99</sup>
                    </span>
                  </div><!-- End .intro-price -->

                  <a href="product.php" class="btn btn-primary btn-round">
                    <span>Shop More</span>
                    <i class="icon-long-arrow-right"></i>
                  </a>
                </div><!-- End .col-lg-11 offset-lg-1 -->
              </div><!-- End .row -->
            </div><!-- End .intro-content -->
          </div><!-- End .intro-slide -->

          <div class="intro-slide" style="background-image: url(assets/images/demos/demo-4/slider/slide-2.png);">
            <div class="container intro-content">
              <div class="row justify-content-end">
                <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                  <h3 class="intro-subtitle text-primary">New Arrival</h3><!-- End .h3 intro-subtitle -->
                  <h1 class="intro-title">Apple iPad Pro <br>12.9 Inch, 64GB </h1><!-- End .intro-title -->

                  <div class="intro-price">
                    <sup>Today:</sup>
                    <span class="text-primary">
                      $999<sup>.99</sup>
                    </span>
                  </div><!-- End .intro-price -->

                  <a href="product.php" class="btn btn-primary btn-round">
                    <span>Shop More</span>
                    <i class="icon-long-arrow-right"></i>
                  </a>
                </div><!-- End .col-md-6 offset-md-6 -->
              </div><!-- End .row -->
            </div><!-- End .intro-content -->
          </div><!-- End .intro-slide -->
        </div><!-- End .intro-slider owl-carousel owl-simple -->

        <span class="slider-loader"></span><!-- End .slider-loader -->
      </div><!-- End .intro-slider-container -->

      <div class="container">
        <h2 class="title text-center mb-4">Explore Popular Categories</h2><!-- End .title text-center -->

        <div class="cat-blocks-container">
          <div class="row">
            <div class="col-6 col-sm-4 col-lg-2">
              <a href="product.php" class="cat-block">
                <figure>
                  <span>
                    <img src="assets/images/demos/demo-4/cats/1.png" alt="Category image">
                  </span>
                </figure>

                <h3 class="cat-block-title">Computer & Laptop</h3><!-- End .cat-block-title -->
              </a>
            </div><!-- End .col-sm-4 col-lg-2 -->

            <div class="col-6 col-sm-4 col-lg-2">
              <a href="product.php" class="cat-block">
                <figure>
                  <span>
                    <img src="assets/images/demos/demo-4/cats/2.png" alt="Category image">
                  </span>
                </figure>

                <h3 class="cat-block-title">Digital Cameras</h3><!-- End .cat-block-title -->
              </a>
            </div><!-- End .col-sm-4 col-lg-2 -->

            <div class="col-6 col-sm-4 col-lg-2">
              <a href="product.php" class="cat-block">
                <figure>
                  <span>
                    <img src="assets/images/demos/demo-4/cats/3.png" alt="Category image">
                  </span>
                </figure>

                <h3 class="cat-block-title">Smart Phones</h3><!-- End .cat-block-title -->
              </a>
            </div><!-- End .col-sm-4 col-lg-2 -->

            <div class="col-6 col-sm-4 col-lg-2">
              <a href="product.php" class="cat-block">
                <figure>
                  <span>
                    <img src="assets/images/demos/demo-4/cats/4.png" alt="Category image">
                  </span>
                </figure>

                <h3 class="cat-block-title">Televisions</h3><!-- End .cat-block-title -->
              </a>
            </div><!-- End .col-sm-4 col-lg-2 -->

            <div class="col-6 col-sm-4 col-lg-2">
              <a href="product.php" class="cat-block">
                <figure>
                  <span>
                    <img src="assets/images/demos/demo-4/cats/5.png" alt="Category image">
                  </span>
                </figure>

                <h3 class="cat-block-title">Audio</h3><!-- End .cat-block-title -->
              </a>
            </div><!-- End .col-sm-4 col-lg-2 -->

            <div class="col-6 col-sm-4 col-lg-2">
              <a href="product.php" class="cat-block">
                <figure>
                  <span>
                    <img src="assets/images/demos/demo-4/cats/6.png" alt="Category image">
                  </span>
                </figure>

                <h3 class="cat-block-title">Smart Watches</h3><!-- End .cat-block-title -->
              </a>
            </div><!-- End .col-sm-4 col-lg-2 -->
          </div><!-- End .row -->
        </div><!-- End .cat-blocks-container -->
      </div><!-- End .container -->

      <div class="mb-4"></div>
      <!-- <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4">
            <div class="banner banner-overlay banner-overlay-light">
              <a href="#">
                <img src="assets/images/demos/demo-4/banners/banner-1.png" alt="Banner">
              </a>

              <div class="banner-content">
                <h4 class="banner-subtitle"><a href="#">Smart Offer</a></h4>
                <h3 class="banner-title"><a href="#">Save $150 <strong>on Samsung <br>Galaxy Note9</strong></a></h3>
                <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="banner banner-overlay banner-overlay-light">
              <a href="#">
                <img src="assets/images/demos/demo-4/banners/banner-2.jpg" alt="Banner">
              </a>

              <div class="banner-content">
                <h4 class="banner-subtitle"><a href="#">Time Deals</a></h4>
                <h3 class="banner-title"><a href="#"><strong>Bose SoundSport</strong> <br>Time Deal -30%</a></h3>
                <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="banner banner-overlay banner-overlay-light">
              <a href="#">
                <img src="assets/images/demos/demo-4/banners/banner-3.png" alt="Banner">
              </a>

              <div class="banner-content">
                <h4 class="banner-subtitle"><a href="#">Clearance</a></h4>
                <h3 class="banner-title"><a href="#"><strong>GoPro - Fusion 360</strong> <br>Save $70</a></h3>
                <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <div class="mb-3"></div><!-- End .mb-5 -->

      <!-- End .container -->

      <div class="mb-6"></div><!-- End .mb-6 -->

      <div class="container">
        <div class="cta cta-border mb-5" style="background-image: url(assets/images/demos/demo-4/bg-1.jpg);">
          <img src="assets/images/demos/demo-4/camera.png" alt="camera" class="cta-img">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="cta-content">
                <div class="cta-text text-right text-white">
                  <p>Shop Today’s Deals <br><strong>Awesome Made Easy. HERO7 Black</strong></p>
                </div><!-- End .cta-text -->
                <a href="#" class="btn btn-primary btn-round"><span>Shop Now - $429.99</span><i class="icon-long-arrow-right"></i></a>
              </div><!-- End .cta-content -->
            </div><!-- End .col-md-12 -->
          </div><!-- End .row -->
        </div><!-- End .cta -->
      </div><!-- End .container -->

      <div class="mb-4"></div><!-- End .mb-4 -->

      <div class="container">
        <hr class="mb-0">
      </div><!-- End .container -->

      <div class="icon-boxes-container bg-transparent">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-4">
              <div class="icon-box icon-box-side">
                <span class="icon-box-icon text-dark">
                  <i class="fa-solid fa-truck-ramp-box"></i>
                </span>
                <div class="icon-box-content">
                  <h3 class="icon-box-title">Free Delivery</h3><!-- End .icon-box-title -->
                  <p>Orders $50 or more</p>
                </div><!-- End .icon-box-content -->
              </div><!-- End .icon-box -->
            </div><!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-4">
              <div class="icon-box icon-box-side">
                <span class="icon-box-icon text-dark">
                  <i class="fa-solid fa-tags"></i>
                </span>

                <div class="icon-box-content">
                  <h3 class="icon-box-title">Get 10% Off 1 Item</h3><!-- End .icon-box-title -->
                  <p>when you sign up</p>
                </div><!-- End .icon-box-content -->
              </div><!-- End .icon-box -->
            </div>
            <!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-4">
              <div class="icon-box icon-box-side">
                <span class="icon-box-icon text-dark">
                  <i class="fa-solid fa-headset"></i>
                </span>

                <div class="icon-box-content">
                  <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                  <p>24/7 amazing services</p>
                </div><!-- End .icon-box-content -->
              </div><!-- End .icon-box -->
            </div><!-- End .col-sm-6 col-lg-3 -->
          </div><!-- End .row -->
        </div><!-- End .container -->
      </div><!-- End .icon-boxes-container -->
    </main><!-- End .main -->

    <!-- footer -->
    <?php include 'footer_include.php'; ?>
    <!-- End .footer -->
  </div><!-- End .page-wrapper -->
  <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

  <!-- Mobile Menu -->
  <?php include 'mobile_menu.php'; ?>
  <!-- End .mobile-menu-container -->

  <!-- Sign in / Register Modal -->
  <?php include 'login_modal.php'; ?>

  <!-- End .modal -->

  <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
    <div class="row justify-content-center">
      <div class="col-10">
        <div class="row no-gutters bg-white newsletter-popup-content">
          <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
            <div class="banner-content text-center">
              <img src="assets/images/popup/newsletter/logo.png" class="logo" alt="logo" width="60" height="15">
              <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
              <p>Subscribe to the Electronic Store eCommerce newsletter to receive timely updates from your favorite products.</p>
              <form action="#">
                <div class="input-group input-group-round">
                  <input type="email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Adress" required>
                  <div class="input-group-append">
                    <button class="btn" type="submit"><span>go</span></button>
                  </div><!-- .End .input-group-append -->
                </div><!-- .End .input-group -->
              </form>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
              </div><!-- End .custom-checkbox -->
            </div>
          </div>
          <div class="col-xl-2-5col col-lg-5 ">
            <img src="assets/images/popup/newsletter/img-1.jpg" class="newsletter-img" alt="newsletter">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Plugins JS File -->
  <?php include 'js_include.php'; ?>
</body>



</html>