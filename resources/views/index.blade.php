<!DOCTYPE html>
<html lang="en">

<head>
	<title>Tri Shaheed Model School</title>
	<meta charset="utf-8">
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
      <div class="slider-item" style="background-image:url(<?php echo url('/'); ?>/images/banner_1.jpg);">
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Education Needs Complete Solution</h1>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(<?php echo url('/'); ?>/images/banner_2.jpg);">
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">University, College School Education</h1>
          </div>
        </div>
        </div>
      </div>
    </section>
	<!-- events list section start -->
		<section class="col-lg-12 container bg-light m-2">
		<h1>Recent Events</h1>
		<div class="row ">
			<article class="card fl-left">
				<section class="date">
					<time datetime="23th feb">
						<span><?php echo explode("-", $events[0]->date)[2] ?></span>
						<span><?php echo explode("-", $events[0]->date)[1] ?></span>
					</time>
				</section>
				<section class="card-cont">

					<h3>{{$events[0]->title}}</h3>
					<div class="even-date">
						<i class="fa fa-calendar"></i>
						<time>
							<span>{{$events[0]->date}}</span>
							<span>{{$events[0]->time}}</span>
						</time>
					</div>
					<div class="even-info">
						<i class="fa fa-map-marker"></i>
						<p>
							{{$events[0]->description}}
						</p>
					</div>
				</section>
			</article>
			<article class="card fl-left">
				<section class="date">
					<time datetime="23th feb">
						<span><?php echo explode("-", $events[0]->date)[2] ?></span>
						<span><?php echo explode("-", $events[0]->date)[1] ?></span>
					</time>
				</section>
				<section class="card-cont">

					<h3>{{$events[0]->title}}</h3>
					<div class="even-date">
						<i class="fa fa-calendar"></i>
						<time>
							<span>{{$events[0]->date}}</span>
							<span>{{$events[0]->time}}</span>
						</time>
					</div>
					<div class="even-info">
						<i class="fa fa-map-marker"></i>
						<p>
							{{$events[0]->description}}
						</p>
					</div>
				</section>
			</article>
		</div>
		<div class="row ">
			<article class="card fl-left">
				<section class="date">
					<time datetime="23th feb">
						<span><?php echo explode("-", $events[0]->date)[2] ?></span>
						<span><?php echo explode("-", $events[0]->date)[1] ?></span>
					</time>
				</section>
				<section class="card-cont">

					<h3>{{$events[0]->title}}</h3>
					<div class="even-date">
						<i class="fa fa-calendar"></i>
						<time>
							<span>{{$events[0]->date}}</span>
							<span>{{$events[0]->time}}</span>
						</time>
					</div>
					<div class="even-info">
						<i class="fa fa-map-marker"></i>
						<p>
							{{$events[0]->description}}
						</p>
					</div>
				</section>
			</article>
				<article class="card fl-left">
				<section class="date">
					<time datetime="23th feb">
						<span><?php echo explode("-", $events[0]->date)[2] ?></span>
						<span><?php echo explode("-", $events[0]->date)[1] ?></span>
					</time>
				</section>
				<section class="card-cont">

					<h3>{{$events[0]->title}}</h3>
					<div class="even-date">
						<i class="fa fa-calendar"></i>
						<time>
							<span>{{$events[0]->date}}</span>
							<span>{{$events[0]->time}}</span>
						</time>
					</div>
					<div class="even-info">
						<i class="fa fa-map-marker"></i>
						<p>
							{{$events[0]->description}}
						</p>
					</div>
				</section>
			</article>
		</div>
	</section>

    <!-- events list section start -->


    <section class="ftco-services ftco-no-pb">

	<!-- event section closed -->


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
				<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
					<div class="img" style="background-image: url(<?php echo url('/'); ?>/images/about.jpg); border"></div>
				</div>
				<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
					<h2 class="mb-4">Principle Message</h2>
					<blockquote class="blockquote">
						<p>मनसुन पिक चरणबाट बिस्तारै ओरालो लाग्दै गएकाले भारी वर्षाको सम्भावनासमेत कम हुँदै महाशाखाले जनाएको छ। महाशाखाले ५० मिलिमिटरभन्दा धेरै वर्षा भएको क्षेत्रलाई भारी वर्षाको रुपमा मापन गर्दै आएको छ। नेपालमा मनसुन १० जुनदेखि सुरु भई २३ सेप्टेम्बरमा सकिने भएकाले अब मनसुन सकिन ४० दिन बाँकी छ। .</p>
					</blockquote>
				</div>

			</div>
		</div>
	</section>


	<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(<?php echo url('/'); ?>/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2 d-flex">
				<div class="col-md-6 align-items-stretch d-flex">
					<div class="img img-video d-flex align-items-center" style="background-image: url(<?php echo url('/'); ?>/images/about-2.jpg);">
						<div class="video justify-content-center">
							<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
								<span class="ion-ios-play"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
					<h2 class="mb-4">Tri Shaheed Model School</h2>
					<p>मनसुन पिक चरणबाट बिस्तारै ओरालो लाग्दै गएकाले भारी वर्षाको सम्भावनासमेत कम हुँदै महाशाखाले जनाएको छ। महाशाखाले ५० मिलिमिटरभन्दा धेरै वर्षा भएको क्षेत्रलाई भारी वर्षाको रुपमा मापन गर्दै आएको छ। नेपालमा मनसुन १० जुनदेखि सुरु भई २३ सेप्टेम्बरमा सकिने भएकाले अब मनसुन सकिन ४० दिन बाँकी छ। .</p>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
				</div>
			</div>
			<div class="row d-md-flex align-items-center justify-content-center">
				<div class="col-lg-12">
					<div class="row d-md-flex align-items-center">
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate ">
							<div class="block-18">
								<div class="icon"><span class="flaticon-doctor"></span></div>
								<div class="text">
									<strong class="number" data-number="18">0</strong>
									<span>Certified Teachers</span>
								</div>
							</div>
						</div>
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="icon"><span class="flaticon-doctor"></span></div>
								<div class="text">
									<strong class="number" data-number="401">0</strong>
									<span>Students</span>
								</div>
							</div>
						</div>
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="icon"><span class="flaticon-doctor"></span></div>
								<div class="text">
									<strong class="number" data-number="30">0</strong>
									<span>Courses</span>
								</div>
							</div>
						</div>
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="icon"><span class="flaticon-doctor"></span></div>
								<div class="text">
									<strong class="number" data-number="50">0</strong>
									<span>Awards Won</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="ftco-section">
		<style background: orange></style>
		<div class="container-fluid px-4">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4"><span>Some</span> Highlights</h2>
					<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(<?php echo url('/'); ?>/images/course-1.jpg);"></div>
					<div class="text pt-4">
						<!-- <p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>Mr. Khan</span>
							<span><i class="icon-table mr-2"></i>10 seats</span>
							<span><i class="icon-calendar mr-2"></i>4 Years</span>
						</p> -->
						<h3><a href="#">Computer Lab</a></h3>
						<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
						<p><a href="computer_lab" class="btn btn-primary">Learn More</a></p>
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(<?php echo url('/'); ?>/images/course-2.jpg);"></div>
					<div class="text pt-4">
						<!-- <p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>Mr. Khan</span>
							<span><i class="icon-table mr-2"></i>10 seats</span>
							<span><i class="icon-calendar mr-2"></i>4 Years</span>
						</p> -->
						<h3><a href="#">Physics Lab</a></h3>
						<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
						<p><a href="physics_lab" class="btn btn-primary">Learn More</a></p>
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(<?php echo url('/'); ?>/images/course-3.jpg);"></div>
					<div class="text pt-4">
						<!-- <p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>Mr. Khan</span>
							<span><i class="icon-table mr-2"></i>10 seats</span>
							<span><i class="icon-calendar mr-2"></i>4 Years</span>
						</p> -->
						<h3><a href="#">Chemistry Lab</a></h3>
						<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
						<p><a href="chemistry_lab" class="btn btn-primary">Learn More</a></p>
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(<?php echo url('/'); ?>/images/course-4.jpg);"></div>
					<div class="text pt-4">
						<!-- <p class="meta d-flex">
							<span><i class="icon-user mr-2"></i>Mr. Khan</span>
							<span><i class="icon-table mr-2"></i>10 seats</span>
							<span><i class="icon-calendar mr-2"></i>4 Years</span>
						</p> -->
						<h3><a href="#">Electronics Lab</a></h3>
						<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
						<p><a href="electronics_lab" class="btn btn-primary">Learn More</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>


	{{--<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(<?php echo url('/'); ?>/images/bg_5.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-6 py-5 px-md-5">
					<div class="py-md-5">
						<div class="heading-section heading-section-white ftco-animate mb-5">
							<h2 class="mb-4">Send Us Your Query</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
						<form action="#" class="appointment-form ftco-animate">
							<div class="d-md-flex">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="First Name">
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control" placeholder="Last Name">
								</div>
							</div>
							<div class="d-md-flex">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="ion-ios-arrow-down"></span></div>
											<select name="" id="" class="form-control">
												<option value="">Select The Topic</option>
												<option value="">Art Lesson</option>
												<option value="">Language Lesson</option>
												<option value="">Music Lesson</option>
												<option value="">Sports</option>
												<option value="">Other Services</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control" placeholder="Phone">
								</div>
							</div>
							<div class="d-md-flex">
								<div class="form-group">
									<textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
								</div>
								<div class="form-group ml-md-4">
									<input type="submit" value="Submit Your Query" class="btn btn-primary py-3 px-4">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
--}}

	<section class="ftco-section testimony-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4">Student Says About Us</h2>
					<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
				</div>
			</div>
			<div class="row ftco-animate justify-content-center">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img mr-4" style="background-image: url(<?php echo url('/'); ?>/images/teacher-1.jpg)">
								</div>
								<div class="text ml-2">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Racky Henderson</p>
									<span class="position">Father</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img mr-4" style="background-image: url(<?php echo url('/'); ?>/images/teacher-2.jpg)">
								</div>
								<div class="text ml-2">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Henry Dee</p>
									<span class="position">Mother</span>
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
									<p class="name">Mark Huff</p>
									<span class="position">Mother</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img mr-4" style="background-image: url(<?php echo url('/'); ?>/images/teacher-4.jpg)">
								</div>
								<div class="text ml-2">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Rodel Golez</p>
									<span class="position">Mother</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img mr-4" style="background-image: url(<?php echo url('/'); ?>/images/teacher-1.jpg)">
								</div>
								<div class="text ml-2">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Ken Bosh</p>
									<span class="position">Mother</span>
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
					<a href="<?php echo url('/'); ?>/images/footer_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo url('/'); ?>/images/footer_1.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="<?php echo url('/'); ?>/images/footer_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo url('/'); ?>/images/footer_2.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="<?php echo url('/'); ?>/images/footer_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo url('/'); ?>/images/footer_3.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="<?php echo url('/'); ?>/images/footer_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo url('/'); ?>/images/footer_4.jpg);">
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