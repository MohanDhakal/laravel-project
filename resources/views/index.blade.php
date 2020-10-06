<!DOCTYPE html>
<html lang="en">

<head>
	<title>Tri Shaheed Model School</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
	<!-- including the header -->
	<x-header status="home" />
	<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image:url(<?php echo url('/'); ?>/images/banner/2.jpg);">
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<!-- <h1 class="mb-4">University, College School Education</h1> -->
					</div>
				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image:url(<?php echo url('/'); ?>/images/banner/3.jpg);">
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<!-- <h1 class="mb-4">University, College School Education</h1> -->
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item" style="background-image:url(<?php echo url('/'); ?>/images/banner/1.jpg);">
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<!-- <h1 class="mb-4">Education Needs Complete Solution</h1> -->
					</div>
				</div>
			</div>
		</div>


		<div class="slider-item" style="background-image:url(<?php echo url('/'); ?>/images/banner/4.jpg);">
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<!-- <h1 class="mb-4">University, College School Education</h1> -->
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item" style="background-image:url(<?php echo url('/'); ?>/images/banner/5.jpg);">
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<!-- <h1 class="mb-4">University, College School Education</h1> -->
					</div>
				</div>
			</div>
		</div>

	</section>

	@if(count($events)>=1)
	<!-- events list section start -->
	<section class="col-lg-12 container bg-light m-2">
		<h1>Recent Events</h1>
		<div class="row">
			@foreach($events as $event)
			<article class="card fl-left">
				<section class="date">
					<time datetime="23th feb">
						<span><?php echo explode("-", $event->date)[2] ?></span>
						<span><?php echo explode("-", $event->date)[1] ?></span>
					</time>
				</section>
				<section class="card-cont">

					<h3>{{$event->title}}</h3>
					@if(is_null($event->description)!==true)
					<p>{{$event->description}}</p>
					@endif

					<div class="even-date">
						<i class="fa fa-calendar"></i>
						<time>
							<span>{{$event->date}}</span>
							<span>{{$event->time}}</span>
						</time>
					</div>
					<div class="even-info">
						<i class="fa fa-map-marker"></i>
						<p>
							{{$event->venue}}
						</p>
					</div>
				</section>
			</article>
			@endforeach
		</div>
	</section>

	@endif
	<!-- events list section ends -->


	<section class="ftco-services ftco-no-pb">

		<div class="container-wrap">
			<div class="row no-gutters">
				<div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-teacher"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Qualified Teachers</h3>
							<p>Our school has qualified teachers having specific knowlege of the area they have chosen.Most of our teachers are also experienced with years of teaching experience.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-reading"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Technical Education</h3>
							<p>Technology is a key to various things in today's world.Our schools offers Computer Engineering to students willing to learn and explore more in technology.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-books"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Lab &amp; Library</h3>
							<p>Practical knowlege alongside theory is very necessary in order to understand the concept. We have well equipped library and labs to experiment for every students.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-diploma"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Extra Cirricular Activies</h3>
							<p>Learning should be beyond the 4 walls of classroom, extra cirricular activities helps student boost their skills be it sports, singing, dancing and other.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftc-no-pb">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-4 order-md-last wrap-about d-flex align-items-stretch">
					<div class="img" width="100vw" style="background-image: url(<?php echo url('/'); ?>/images/staff/principle.jpg);"></div>
				</div>
				<div class="col-md-8 wrap-about py-5 pr-md-4 ftco-animate">
					<h2 class="mb-4">प्रधानाध्यापकको सन्देश</h2>
					<blockquote class="blockquote">
						<p>“ गुणस्तरीय र प्राविधिक शिक्षा, आजको आवश्यकता ” भन्ने तथ्यलाई हृदयंगम गर्दै सूचना तथा प्रविधिको प्रयोग वालमैत्री वातावरणमा विद्यार्थी केन्द्रित विधि मार्फत आधुनिक युगअनुसारको अंग्रेजी र नेपाली माध्यममा कक्षा नर्सरी देखि १२ सम्म साधारण र प्राविधिक धार अन्तरगतको गुणस्तरीय शिक्षा प्रदान गर्दै आइरहेको नमुना विद्यालयको रुपमा विकसित यस श्री त्रि-शहीद मा.वि.पञ्चमूलमा अध्ययन गरेका र अध्ययनरत सम्पूणर् विद्यार्थीहरु, सेवा निवृत्त एवं सेवारत शिक्षकहरु, अमूल्य योगदान दिनु हुने अभिभावकज्यूहरु प्रति हार्दिक शुभे्च्छा व्यक्त गर्दछु र समायानुकुल परिवर्तन हुदै आधुनिक युगअनुसारको प्रविधियुक्त शिक्षा प्रदान गरिरहेको यस विद्यालयको उत्तरोत्तर प्रगतिको कामना गर्दछु ।</p>
					</blockquote>
				</div>

			</div>
		</div>
	</section>



	<section class="ftco-section" style="background-color:#f2f2f2">
		<div class="container-fluid px-4">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4"><span>Organised </span> Laboratory</h2>

				</div>
			</div>
			<div class="row">
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(<?php echo url('/'); ?>/images/labs/computer_lab.jpg);"></div>
					<div class="text pt-4">
						<!-- <p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>Mr. Khan</span>
							<span><i class="icon-table mr-2"></i>10 seats</span>
							<span><i class="icon-calendar mr-2"></i>4 Years</span>
						</p> -->
						<h3><a href="#">Computer Lab</a></h3>
						<p>A computer lab is a space which provides computer services to a defined community. Computer labs are typically provided by libraries to the public, or to people affiliated with that institution.</p>
						<p><a href="computer_lab" class="btn btn-primary">Learn More</a></p>
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(<?php echo url('/'); ?>/images/labs/physics_lab.jpg);"></div>
					<div class="text pt-4">
						<!-- <p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>Mr. Khan</span>
							<span><i class="icon-table mr-2"></i>10 seats</span>
							<span><i class="icon-calendar mr-2"></i>4 Years</span>
						</p> -->
						<h3><a href="#">Physics Lab</a></h3>
						<p>In physics class, lab is central. Integral. Sacred. More than a mere place in the back of the classroom, the laboratory is the place where physics students do physics.</p>
						<p><a href="physics_lab" class="btn btn-primary">Learn More</a></p>
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(<?php echo url('/'); ?>/images/labs/chemistry_lab.jpg);"></div>
					<div class="text pt-4">
						<!-- <p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>Mr. Khan</span>
							<span><i class="icon-table mr-2"></i>10 seats</span>
							<span><i class="icon-calendar mr-2"></i>4 Years</span>
						</p> -->
						<h3><a href="#">Chemistry Lab</a></h3>
						<p>The Chemistry Laboratory conducts fundamental studies of highway materials to understand both failure mechanisms and the superior performance.</p>
						<p><a href="chemistry_lab" class="btn btn-primary">Learn More</a></p>
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(<?php echo url('/'); ?>/images/labs/electronics_lab.jpg);"></div>
					<div class="text pt-4">
						<!-- <p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>Mr. Khan</span>
							<span><i class="icon-table mr-2"></i>10 seats</span>
							<span><i class="icon-calendar mr-2"></i>4 Years</span>
						</p> -->
						<h3><a href="#">Electronics Lab</a></h3>
						<p>Electronics Laboratory is well equipped with sophisticated equipment’s to perform experiments on Diode and transistor based electronic circuit designs.</p>
						<p><a href="electronics_lab" class="btn btn-primary">Learn More</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section testimony-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4">Student Says About Us</h2>
					<p>Students have different opinion about how the school has benefited them acheive something in their life. This is what our students has to say about us.</p>
				</div>
			</div>
			<div class="row ftco-animate justify-content-center">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">

						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img mr-4" style="background-image: url(<?php echo url('/'); ?>/images/mohan.jpg)">
								</div>
								<div class="text ml-2">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>I spent almost 6 years of my childhood at Tri-Shaheed.Qualified teachers,suitable environment and well-matured infrastructure really helped me acheive my goal.I am currently pursuing my Software Engineering degree.</p>
									<p class="name">Mohan Kumar Dhakal</p>
									<span class="position">Former Student</span>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img mr-4" style="background-image: url(<?php echo url('/'); ?>/images/student_says/kushal.jpg)">
								</div>
								<div class="text ml-2">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>I had the opportunity to study in this School and I’m really thankful with them because of the great teachers, staff always smiling and helping you with your stuff. Academically is grant! I’ve improved my level so I strongly recommend it.</p>
									<p class="name">Kushal Dhakal</p>
									<span class="position">Student</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img mr-4" style="background-image: url(<?php echo url('/'); ?>/images/teacher-3.jpg)">
								</div>
								<div class="text ml-2">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Sunil Chhetri</p>
									<span class="position">Student</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-gallery">
		<div class="container-wrap">
			<div class="row no-gutters">
				<div class="col-md-3 ftco-animate">
					<a href="<?php echo url('/'); ?>/images/footer/1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo url('/'); ?>/images/footer/1.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="<?php echo url('/'); ?>/images/footer/2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo url('/'); ?>/images/footer/2.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="<?php echo url('/'); ?>/images/footer/3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo url('/'); ?>/images/footer/3.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="<?php echo url('/'); ?>/images/footer/4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo url('/'); ?>/images/footer/4.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
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