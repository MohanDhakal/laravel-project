</!DOCTYPE html>
<html>

<head>
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/gallery.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/aos.css">

    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/event.css">

</head>

<body>

    <x-header status="gallery" />
    <!-- Page Content -->
    <div class=" container page-top ">

        <div class="row">
            @foreach($images as $image)
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{$image->absolute_url}}" class="fancybox" rel="ligthbox">
                    <img src="{{$image->absolute_url}}" class="zoom img-fluid " alt="">
                </a>
            </div>
            @endforeach
        </div>
    </div>

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
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo url('/'); ?>/js/gallery.js"></script>
</body>

</html>