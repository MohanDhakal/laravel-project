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
					<button onclick="getMessage('hst1')" class="btn btn-default filter-button" data-filter="hst1">मा.वि.दिृतिय</button>
					<button onclick="getMessage('hst2')" class="btn btn-default filter-button" data-filter="hst2">मा.वि.तृतिय</button>
					<button onclick="getMessage('st1')" class="btn btn-default filter-button" data-filter="st1">नि.मा.वि.दृितिय</button>
					<button onclick="getMessage('st2')" class="btn btn-default filter-button" data-filter="st2">नि.मा.वि.तृतिय</button>
					<button onclick="getMessage('pr1')" class="btn btn-default filter-button" data-filter="primary">प्रा.वि.दिृतिय</button>
					<button onclick="getMessage('pr2')" class="btn btn-default filter-button" data-filter="primary">प्रा.वि.तृतिय </button>
					<button onclick="getMessage('pr')" class="btn btn-default filter-button" data-filter="primary">प्रा.वि</button>
					<button onclick="getMessage('other')" class="btn btn-default filter-button" data-filter="other">Others</button>
					<button onclick="getMessage('helper')" class="btn btn-default filter-button" data-filter="helper">School Helpers</button>
				</div>
			</div>
			<div class="row" id="parent">
				<!-- content here comes from ajax through javascript code -->
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
	<script>
		function getMessage(filterTag) {
			console.log(filterTag);
			$.ajaxSetup({
				headers: {
					'X-CSRF-Token': $('meta[name=_token]').attr('content')
				}
			});
			$.ajax({
				type: 'GET',
				url: '/getStaffs',
				data: {
					tag: filterTag,
					_token: "<?php echo csrf_token() ?>",
				},
				success: function(staffList) {
					$('#parent').empty();
					console.log(staffList);

					staffList.forEach(staff => {

						var innerImageDiv = document.createElement('div');
						innerImageDiv.id = 'newImage' + staff.id;
						innerImageDiv.className = "img align-self-stretch";

						innerImageDiv.style.backgroundImage = "url(" + staff.image_uri + ")";
						innerImageDiv.style.width='250px';
						
						innerImageDiv.style.margin = '10px';

						var textFeildsDiv = document.createElement('div');
						textFeildsDiv.className = "text pt-3 text-center";

						var name = document.createElement('h3');
						name.style.cursor = 'pointer';
						name.className = 'ml-2'
						var post = document.createElement('span');
						post.className = "position mb-2";
						var subject = document.createElement('span');
						subject.className = "position mb-2";
						var phone = document.createElement('span');
						phone.className = 'position mb-2';


						name.innerText = staff.name;
						post.innerText = staff.post;
						subject.innerText = staff.subject;
						phone.innerText = staff.phone;

						textFeildsDiv.appendChild(name);
						textFeildsDiv.appendChild(post);
						textFeildsDiv.appendChild(subject);
						textFeildsDiv.appendChild(phone);


						var imgDiv = document.createElement('div');
						imgDiv.className = "img-wrap d-flex align-items-stretch";
						imgDiv.appendChild(innerImageDiv);

						//create another staff div
						var staffDiv = document.createElement('div');
						staffDiv.className = 'staff';
						staffDiv.appendChild(imgDiv);
						staffDiv.appendChild(textFeildsDiv);

						var parent = document.getElementById('parent');
						parent.appendChild(staffDiv);
					});

				}
			});

		}
	</script>


</body>

</html>