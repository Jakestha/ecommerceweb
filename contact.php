<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Products</title>
    <?php include 'toplink_include.php'; ?>
</head>

<body>
    <div class="page-wrapper">
        <?php include 'header.php'; ?>

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <div class="container">
                <div class="page-header page-header-big text-center" style="background-image: url('assets/images/contact-header-bg.jpg')">
                    <h1 class="page-title text-white">Contact us<span class="text-white">keep in touch with us</span></h1>
                </div><!-- End .page-header -->
            </div><!-- End .container -->

            <div class="page-content pb-0">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-lg-6 mb-2 mb-lg-0">
                            <div class="info-1">
                                <h2 class="title mb-1">Contact Information</h2><!-- End .title mb-2 -->
                                <p class="mb-3">Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="contact-info">
                                            <h3>The Office</h3>

                                            <ul class="contact-list">
                                                <li>
                                                    <i class="fa-solid fa-location-dot"></i>
                                                    Dallu Galli Marg Kathmandu, W.n 15, Nepal
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-phone"></i>
                                                    <a href="tel:#">+42658151885</a>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-envelope"></i>
                                                    <a href="mailto:#">info@asd.com</a>
                                                </li>
                                            </ul><!-- End .contact-list -->
                                        </div><!-- End .contact-info -->
                                    </div><!-- End .col-sm-7 -->

                                    <div class="col-sm-5">
                                        <div class="contact-info">
                                            <h3>The Office</h3>

                                            <ul class="contact-list">
                                                <li>
                                                    <i class="fa-solid fa-clock"></i>
                                                    <span class="text-dark">Monday-Saturday</span> <br>11am-7pm ET
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    <span class="text-dark">Sunday</span> <br>11am-6pm ET
                                                </li>
                                            </ul><!-- End .contact-list -->
                                        </div><!-- End .contact-info -->
                                    </div><!-- End .col-sm-5 -->
                                </div><!-- End .row -->
                            </div>
                        </div><!-- End .col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="info2">
                                <h2 class="title mb-1">Got Any Questions?</h2><!-- End .title mb-2 -->
                                <p class="mb-2">Use the form below to get in touch with the sales team</p>

                                <form action="#" class="contact-form ">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="cname" class="sr-only">Name</label>
                                            <input type="text" class="form-control" id="cname" placeholder="Name *" required>
                                        </div><!-- End .col-sm-6 -->

                                        <div class="col-sm-6">
                                            <label for="cemail" class="sr-only">Email</label>
                                            <input type="email" class="form-control" id="cemail" placeholder="Email *" required>
                                        </div><!-- End .col-sm-6 -->
                                    </div><!-- End .row -->

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="cphone" class="sr-only">Phone</label>
                                            <input type="tel" class="form-control" id="cphone" placeholder="Phone">
                                        </div><!-- End .col-sm-6 -->

                                        <div class="col-sm-6">
                                            <label for="csubject" class="sr-only">Subject</label>
                                            <input type="text" class="form-control" id="csubject" placeholder="Subject">
                                        </div><!-- End .col-sm-6 -->
                                    </div><!-- End .row -->

                                    <label for="cmessage" class="sr-only">Message</label>
                                    <textarea class="form-control" cols="30" rows="4" id="cmessage" required placeholder="Message *"></textarea>

                                    <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                                        <span>SUBMIT</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>
                                </form><!-- End .contact-form -->
                            </div>
                        </div><!-- End .col-lg-6 -->
                    </div><!-- End .row -->

                </div><!-- End .container -->
                <div id="map"></div><!-- End #map -->
            </div><!-- End .page-content -->
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

    <!-- Google Map -->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDc3LRykbLB-y8MuomRUIY0qH5S6xgBLX4"></script>

    <!-- Plugins JS File -->
    <?php include 'js_include.php'; ?>
</body>



</html>