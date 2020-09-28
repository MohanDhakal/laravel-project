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
            </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="#">{{$news->title}}</a></h3>
              <?php echo $news->content ?>
              <div class="d-flex align-items-center mt-4">
                <p class="mb-0"><a href="blog-single/{{$news->id}}" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                <p class="ml-auto mb-0">
                  <span><?php echo explode(" ", $news->created_at)[0];?></span>
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