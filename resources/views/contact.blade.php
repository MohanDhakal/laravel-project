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
  <link rel="stylesheet" href="<?php echo url('/'); ?>/css/filter.css">
</head>

<body>
  <x-header status="contact" />

  <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo url('/'); ?>/images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Contact Us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex contact-info">
        <div class="col-md-3 d-flex">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Address</h3>
            <p>Co-ordinates: 28.13°N 83.78°E, Panchamul-syangja, Gandaki Zone, Nepal</p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Contact Number</h3>
            <p><a href="tel://1234567920">+ 063 511 453</a></p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Email Address</h3>
            <p><a href="mailto:info@yoursite.com">info@trishaheed.edu.np</a></p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Website</h3>
            <p><a href="#">trishaheed.edu.np</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="sendMessageSection" class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
      <div class="row d-flex align-items-stretch no-gutters">
        <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
          <h3>Send Us Your Message</h3><br>

          <form action="/sendMessage" method="POST">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
            </div>

            <div class="form-group">
              <input name="email" type="text" class="form-control" id="email" placeholder="Your Email">
            </div>
            @error('email')
            <div class=" alert alert-danger">{{ $message }} </div>
            @enderror
            <div class="form-group">
              <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="description" id="description" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>
        <div class="col-md-6 d-flex align-items-stretch">
          <div id="map"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- including the footer -->
  <x-footer status="home" />

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