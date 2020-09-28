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


  <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo url('/'); ?>/images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Blog Single</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="index.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
          <h2 class="mb-3">{{$news->title}}</h2>

          @if($news->image_uri!=='')
          <p>
            <img src="{{$news->image_uri}}" class="img-fluid">
          </p>
          @endif

          <div id="content">
            <?php echo $news->content ?>
          </div>

          @if($news->file_uri!=='')
          <h4 style="color:tomato;margin-left:10px">Download Notice</h4>
          <div style="background-color:#f6f6f6; margin-left:10px;">
            <?php
            if ($news->file_uri !== null) {
              echo str_replace('public/notices/', '', $news->file_uri);
              $news->file_uri = str_replace('public/notices/', '', $news->file_uri);
            }
            ?>
            <a href='{{url("notice/download/".$news->file_uri)}}' style="color:DodgerBlue;" class="btn btn-sm manage">Download</a>
          </div>
          @endif

        </div>
        <!-- .col-md-8 -->
        <div class="col-lg-4 sidebar ftco-animate">
<!-- 
          <div class="sidebar-box ftco-animate">
            <h3>Popular Articles</h3>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(<?php echo url('/'); ?>/images/image_1.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                  <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(<?php echo url('/'); ?>/images/image_1.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                  <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
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