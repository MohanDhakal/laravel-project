</!DOCTYPE html>
<html>

<head>
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

    <title>Gallery</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/gallery.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/aos.css">

    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/filter.css">

</head>

<body onload="javascript:getMessage('all')">

    <x-header status="gallery" />
    <!-- Page Content -->
    <!-- <button onclick="getMessage('anniversary')" value="getImage" id="getImage">Anniversary</button> -->
    <div class="container">
        <div class="row">
            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="gallery-title">Gallery</h2>
            </div>
            <div>
                <button onclick="getMessage('all')" id="getImage" class="btn btn-default filter-button" data-filter="all">all</button>
                <button onclick="getMessage('anniversary')" class="btn btn-default filter-button" data-filter="Anniversary">Anniversary</button>
                <button class="btn btn-default filter-button" data-filter="sprinkle">Sprinkle Pipes</button>
                <button class="btn btn-default filter-button" data-filter="spray">Spray Nozzle</button>
                <button class="btn btn-default filter-button" data-filter="irrigation">Irrigation Pipes</button>
            </div>
        </div>
        <div class="row" id="parent">
            <!-- content here comes from ajax through javascript code -->
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

    <script>
        function getMessage(tag) {



            $.ajax({
                type: 'GET',
                url: '/getImages/' + tag,
                data: '_token = <?php echo csrf_token() ?>',
                success: function(imageList) {
                    $('#parent').empty();
                    imageList.forEach(myImage => {

                        //create a sub-parent div
                        var mydiv = document.createElement('div');
                        mydiv.id = "newImage".concat(myImage.id);
                        mydiv.className = "col-lg-3 col-md-4 col-xs-6 thumb";

                        //creating anchor tag
                        var myAnchor = document.createElement('a');
                        myAnchor.href = myImage.absolute_url;
                        myAnchor.className = 'fancybox';
                        myAnchor.rel = 'lightbox';

                        //creating img tag
                        var imageElement = document.createElement('img');
                        imageElement.id = 'imageId'.concat(myImage.id);
                        imageElement.src = myImage.absolute_url;
                        imageElement.className = "zoom img-fluid ";

                        //getting parent row and appending child 

                        var parent = document.getElementById('parent');
                        parent.appendChild(mydiv).appendChild(myAnchor).appendChild(imageElement);

                    });

                }
            });

        }
    </script>

</body>

</html>