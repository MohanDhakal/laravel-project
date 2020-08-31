<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tri Shaheed Model School</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo url('/'); ?>/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo url('/'); ?>/css/animate.css">

  <link rel="stylesheet" href="<?php echo url('/'); ?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo url('/'); ?>/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo url('/'); ?>/css/magnific-popup.css">

  <link rel="stylesheet" href="<?php echo url('/'); ?>/css/aos.css">

  <link rel="stylesheet" href="<?php echo url('/'); ?>/css/ionicons.min.css">

  <link rel="stylesheet" href="<?php echo url('/'); ?>/css/flaticon.css">
  <link rel="stylesheet" href="<?php echo url('/'); ?>/css/icomoon.css">
  <link rel="stylesheet" href="<?php echo url('/'); ?>/css/style.css">
</head>

<body>
  <!-- including the header -->
  <x-header status="blog" />


  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row">
        @foreach($newsList as $news)
        <div class="col-md-6 col-lg-4 ftco-animate">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('<?php echo url('/'); ?>/images/image_2.jpg');">
              <div class="meta-date text-center p-2">
                <span class="day">26</span>
                <span class="mos">June</span>
                <span class="yr">2019</span>
              </div>
            </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="#">{{$news->title}}</a></h3>
              <?php echo $news->content ?>
              <div class="d-flex align-items-center mt-4">
                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                <p class="ml-auto mb-0">
                  <span>3 hours ago </span>
                </p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <!--end of single blog post-->
      </div>
    </div>
  </section>

 <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-4">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Co-ordinates: 28.13°N 83.78°E, Panchamul-syangja, Gandaki Zone, Nepal</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+ 063 522 611</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@trishaheed.edu.np</span></a></li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4">
          <div class="ftco-footer-widget mb-5 ml-md-4">
            <h2 class="ftco-heading-2">Links</h2>
            <ul class="list-unstyled">
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2">Connect!</h2>
          
        </div>
        <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
          <div class="img" style="background-image: url(<?php echo url('/'); ?>/images/facebook.jpg); border"></div>
        </div>
          <div class="ftco-footer-widget mb-5">
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Mohan & Kushal</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>




  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


  <script src="<?php echo url('/'); ?>/js/jquery.min.js"></script>
  <script src="<?php echo url('/'); ?>/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo url('/'); ?>/js/popper.min.js"></script>
  <script src="<?php echo url('/'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo url('/'); ?>/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo url('/'); ?>/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo url('/'); ?>/js/jquery.stellar.min.js"></script>
  <script src="<?php echo url('/'); ?>/js/owl.carousel.min.js"></script>
  <script src="<?php echo url('/'); ?>/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo url('/'); ?>/js/aos.js"></script>
  <script src="<?php echo url('/'); ?>/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo url('/'); ?>/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo url('/'); ?>/js/google-map.js"></script>
  <script src="<?php echo url('/'); ?>/js/main.js"></script>

</body>

</html>