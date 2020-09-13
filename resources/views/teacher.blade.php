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

<body onload="javascript:getMessage('all')">
	<!-- including the header -->
	<x-header status="staff" />


	<section class="ftco-section bg-light">
		<div class="container-fluid px-4">
			<div class="row" style="margin-top: -80px;">
				<div>
					<button onclick="getMessage('principal')" class="btn btn-default filter-button" data-filter="all">Principal</button>
					<button onclick="getMessage('hst')" class="btn btn-default filter-button" data-filter="hst">Higher Secondary</button>
					<button onclick="getMessage('st')" class="btn btn-default filter-button" data-filter="st">Secondary</button>
					<button onclick="getMessage('pt')" class="btn btn-default filter-button" data-filter="pt">Primary</button>
					<button onclick="getMessage('nursery')" class="btn btn-default filter-button" data-filter="nursery">Nursery</button>
					<button onclick="getMessage('others')" class="btn btn-default filter-button" data-filter="irrigation">Other</button>
					<button onclick="getMessage('helper')" class="btn btn-default filter-button" data-filter="helper">School Helper</button>
				</div>
			</div>
			<div class="row" id="parent">
				<!-- content here comes from ajax through javascript code -->
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
	<script>
		function getMessage(tag) {
			$.ajax({
				type: 'GET',
				url: '/getStaffs/' + tag,
				data: '_token = <?php echo csrf_token() ?>',
				success: function(staffList) {
					$('#parent').empty();
					staffList.forEach(staff => {
						console.log(staff);

						//create a outer div to wrap a staff
						var outerMostDiv = document.createElement('div');
						outerMostDiv.className = "col-md-6 col-lg-3 ftco-animate";

						//create another staff div
						var staffDiv = document.createElement('div');


						//these divs are inside staff div


						var imgDiv = document.createElement('div');
						imgDiv.className = "img-wrap d-flex align-items-stretch";

						var innerImageDiv = document.createElement('div');
						// var newImageId = "newImage" + staff.id;
						var imageUrl = staff.image_uri;

						innerImageDiv.className = "img align-self-stretch";

						console.log(something);


						var textFeildsDiv = document.createElement('div');
						var name = document.createElement('h3');
						var post = document.createElement('span');
						var subject = document.createElement('span');
						var phone = document.createElement('span');

						name.innerText = staff.name;
						post.innerText = staff.post;
						subject.innerText = staff.subject;
						post.phone = staff.phone;

						textFeildsDiv.appendChild(name);
						textFeildsDiv.appendChild(post);
						textFeildsDiv.appendChild(subject);
						textFeildsDiv.appendChild(phone);
						staffDiv.appendChild(innerImageDiv);



						//getting parent row and appending child 

						var parent = document.getElementById('parent');
						parent.appendChild(staffDiv);

					});

				}
			});

		}
	</script>


</body>

</html>