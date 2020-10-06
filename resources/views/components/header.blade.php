<div class="bg-top navbar-light">
	<div class="container-fluid">
		<div class="row no-gutters d-flex align-items-center align-items-stretch">
			<div class="col-md-1 d-flex align-items-center py-4">
				<a href="<?php echo url('/'); ?>"><img src="http://localhost:8000/images/logo.png" height="80px" width="80px" /></a>
			</div>
			<div class="col-md-4 d-flex align-items-center py-4">
				<a class="navbar-brand">Tri-Shaheed. <span>Model Secodary School</span></a>
			</div>
			<div class="col-lg-7 d-block">
				<div class="row d-flex">
					<div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
						<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						<div class="text">
							<span>Email</span>
							<span>trishaheed@gmail.com</span>
						</div>
					</div>
					<div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
						<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						<div class="text">
							<span>Call</span>
							<span>Call Us:98 569 08789</span>
						</div>
					</div>
					<div class="col-md topper d-flex align-items-center justify-content-end">
						<p class="mb-0">
							<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">New Notice</button>

							<!-- Modal -->
							<div id="myModal" class="modal fade" role="dialog">
								<div class="modal-dialog modal-lg">

									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										<div class="modal-body">
											<embed src="http://localhost:8000/notice/latest.pdf" frameborder="0" width="100%" height="450px"/>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>

									</div>
								</div>
							</div>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" style="width:100%;white-space: nowrap;" id="ftco-navbar">
		<div class="container-fluid d-flex align-items-center">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav mr-0">
					@if($status=='home')
					<li class="nav-item active"><a href="<?php echo url('/'); ?>" class="nav-link pl-0">Home</a></li>
					<li class="nav-item "><a href="<?php echo url('about'); ?>" class="nav-link">About</a></li>

					<li class="nav-item "><a href="<?php echo url('teacher'); ?>" class="nav-link">Staff</a></li>
					<li class="nav-item "><a href="<?php echo url('students'); ?>" class="nav-link">Students</a></li>
					<li class="nav-item "><a href="<?php echo url('photo_gallery'); ?>" class="nav-link">Photo gallery</a></li>
					<li class="nav-item "><a href="<?php echo url('video_gallery'); ?>" class="nav-link">Video gallery</a></li>
					<li class="nav-item "><a href="<?php echo url('blog'); ?>" class="nav-link">Blog</a></li>

					<li class="nav-item "><a href="<?php echo url('results'); ?>" class="nav-link">Results</a></li>
					<li class="nav-item "><a href="<?php echo url('routines'); ?>" class="nav-link">Routines</a></li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Others</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="<?php echo url('others_smc'); ?>"> विधालय व्यवस्थापन समिति</a></li>
							<li><a class="dropdown-item" href="<?php echo url('others_tpc'); ?>"> शिक्षक अभिभावक संघ</a></li>
						</ul>
					</li>
					<li class="nav-item"><a href="<?php echo url('contact'); ?>" class="nav-link">Contact</a></li>


					@elseif($status=='about')
					<li class="nav-item "><a href="<?php echo url('/'); ?>" class="nav-link pl-0">Home</a></li>
					<li class="nav-item active"><a href="<?php echo url('about'); ?>" class="nav-link">About</a></li>

					<li class="nav-item "><a href="<?php echo url('teacher'); ?>" class="nav-link">Staff</a></li>
					<li class="nav-item "><a href="<?php echo url('students'); ?>" class="nav-link">Students</a></li>
					<li class="nav-item "><a href="<?php echo url('photo_gallery'); ?>" class="nav-link">Photo gallery</a></li>
					<li class="nav-item "><a href="<?php echo url('video_gallery'); ?>" class="nav-link">Video gallery</a></li>
					<li class="nav-item "><a href="<?php echo url('blog'); ?>" class="nav-link">Blog</a></li>
					<li class="nav-item "><a href="<?php echo url('results'); ?>" class="nav-link">Results</a></li>
					<li class="nav-item "><a href="<?php echo url('routines'); ?>" class="nav-link">Routines</a></li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Others</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="<?php echo url('others_smc'); ?>"> विधालय व्यवस्थापन समिति</a></li>
							<li><a class="dropdown-item" href="<?php echo url('others_tpc'); ?>"> शिक्षक अभिभावक संघ</a></li>
						</ul>
					</li>
					<li class="nav-item"><a href="<?php echo url('contact'); ?>" class="nav-link">Contact</a></li>


					@elseif($status=='staff')
					<li class="nav-item "><a href="<?php echo url('/'); ?>" class="nav-link pl-0">Home</a></li>
					<li class="nav-item "><a href="<?php echo url('about'); ?>" class="nav-link">About</a></li>

					<li class="nav-item active "><a href="<?php echo url('teacher'); ?>" class="nav-link">Staff</a></li>
					<li class="nav-item "><a href="<?php echo url('students'); ?>" class="nav-link">Students</a></li>
					<li class="nav-item "><a href="<?php echo url('photo_gallery'); ?>" class="nav-link">Photo gallery</a></li>
					<li class="nav-item "><a href="<?php echo url('video_gallery'); ?>" class="nav-link">Video gallery</a></li>
					<li class="nav-item "><a href="<?php echo url('blog'); ?>" class="nav-link">Blog</a></li>

					<li class="nav-item "><a href="<?php echo url('results'); ?>" class="nav-link">Results</a></li>
					<li class="nav-item "><a href="<?php echo url('routines'); ?>" class="nav-link">Routines</a></li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Others</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="<?php echo url('others_smc'); ?>"> विधालय व्यवस्थापन समिति</a></li>
							<li><a class="dropdown-item" href="<?php echo url('others_tpc'); ?>"> शिक्षक अभिभावक संघ</a></li>
						</ul>
					</li>
					<li class="nav-item "><a href="<?php echo url('contact'); ?>" class="nav-link">Contact</a></li>


					@elseif($status=='students')
					<li class="nav-item "><a href="<?php echo url('/'); ?>" class="nav-link pl-0">Home</a></li>
					<li class="nav-item "><a href="<?php echo url('about'); ?>" class="nav-link">About</a></li>

					<li class="nav-item "><a href="<?php echo url('teacher'); ?>" class="nav-link">Staff</a></li>
					<li class="nav-item active"><a href="<?php echo url('students'); ?>" class="nav-link">Students</a></li>
					<li class="nav-item "><a href="<?php echo url('photo_gallery'); ?>" class="nav-link">Photo gallery</a></li>
					<li class="nav-item "><a href="<?php echo url('video_gallery'); ?>" class="nav-link">Video gallery</a></li>
					<li class="nav-item "><a href="<?php echo url('blog'); ?>" class="nav-link">Blog</a></li>

					<li class="nav-item "><a href="<?php echo url('results'); ?>" class="nav-link">Results</a></li>
					<li class="nav-item "><a href="<?php echo url('routines'); ?>" class="nav-link">Routines</a></li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Others</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="<?php echo url('others_smc'); ?>"> विधालय व्यवस्थापन समिति</a></li>
							<li><a class="dropdown-item" href="<?php echo url('others_tpc'); ?>"> शिक्षक अभिभावक संघ</a></li>
						</ul>
					</li>
					<li class="nav-item"><a href="<?php echo url('contact'); ?>" class="nav-link">Contact</a></li>

					@elseif($status=='photo_gallery')
					<li class="nav-item "><a href="<?php echo url('/'); ?>" class="nav-link pl-0">Home</a></li>
					<li class="nav-item "><a href="<?php echo url('about'); ?>" class="nav-link">About</a></li>

					<li class="nav-item "><a href="<?php echo url('teacher'); ?>" class="nav-link">Staff</a></li>
					<li class="nav-item "><a href="<?php echo url('students'); ?>" class="nav-link">Students</a></li>
					<li class="nav-item active "><a href="<?php echo url('photo_gallery'); ?>" class="nav-link">Photo gallery</a></li>
					<li class="nav-item "><a href="<?php echo url('video_gallery'); ?>" class="nav-link">Video gallery</a></li>
					<li class="nav-item "><a href="<?php echo url('blog'); ?>" class="nav-link">Blog</a></li>

					<li class="nav-item "><a href="<?php echo url('results'); ?>" class="nav-link">Results</a></li>
					<li class="nav-item "><a href="<?php echo url('routines'); ?>" class="nav-link">Routines</a></li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Others</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="<?php echo url('others_smc'); ?>"> विधालय व्यवस्थापन समिति</a></li>
							<li><a class="dropdown-item" href="<?php echo url('others_tpc'); ?>"> शिक्षक अभिभावक संघ</a></li>
						</ul>
					</li>
					<li class="nav-item  "><a href="<?php echo url('contact'); ?>" class="nav-link">Contact</a></li>


					@elseif($status=='video_gallery')
					<li class="nav-item "><a href="<?php echo url('/'); ?>" class="nav-link pl-0">Home</a></li>
					<li class="nav-item "><a href="<?php echo url('about'); ?>" class="nav-link">About</a></li>

					<li class="nav-item "><a href="<?php echo url('teacher'); ?>" class="nav-link">Staff</a></li>
					<li class="nav-item "><a href="<?php echo url('students'); ?>" class="nav-link">Students</a></li>
					<li class="nav-item "><a href="<?php echo url('photo_gallery'); ?>" class="nav-link">Photo gallery</a></li>
					<li class="nav-item active "><a href="<?php echo url('video_gallery'); ?>" class="nav-link">Video gallery</a></li>
					<li class="nav-item "><a href="<?php echo url('blog'); ?>" class="nav-link">Blog</a></li>

					<li class="nav-item "><a href="<?php echo url('results'); ?>" class="nav-link">Results</a></li>
					<li class="nav-item "><a href="<?php echo url('routines'); ?>" class="nav-link">Routines</a></li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Others</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="<?php echo url('others_smc'); ?>"> विधालय व्यवस्थापन समिति</a></li>
							<li><a class="dropdown-item" href="<?php echo url('others_tpc'); ?>"> शिक्षक अभिभावक संघ</a></li>
						</ul>
					</li>
					<li class="nav-item "><a href="<?php echo url('contact'); ?>" class="nav-link">Contact</a></li>

					@elseif($status=='blog')
					<li class="nav-item "><a href="<?php echo url('/'); ?>" class="nav-link pl-0">Home</a></li>
					<li class="nav-item "><a href="<?php echo url('about'); ?>" class="nav-link">About</a></li>

					<li class="nav-item "><a href="<?php echo url('teacher'); ?>" class="nav-link">Staff</a></li>
					<li class="nav-item "><a href="<?php echo url('students'); ?>" class="nav-link">Students</a></li>
					<li class="nav-item "><a href="<?php echo url('photo_gallery'); ?>" class="nav-link">Photo gallery</a></li>
					<li class="nav-item "><a href="<?php echo url('video_gallery'); ?>" class="nav-link">Video gallery</a></li>
					<li class="nav-item active"><a href="<?php echo url('blog'); ?>" class="nav-link">Blog</a></li>

					<li class="nav-item "><a href="<?php echo url('results'); ?>" class="nav-link">Results</a></li>
					<li class="nav-item "><a href="<?php echo url('routines'); ?>" class="nav-link">Routines</a></li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Others</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="<?php echo url('others_smc'); ?>"> विधालय व्यवस्थापन समिति</a></li>
							<li><a class="dropdown-item" href="<?php echo url('others_tpc'); ?>"> शिक्षक अभिभावक संघ</a></li>
						</ul>
					</li>
					<li class="nav-item "><a href="<?php echo url('contact'); ?>" class="nav-link">Contact</a></li>

					@elseif($status=='Results')
					<li class="nav-item "><a href="<?php echo url('/'); ?>" class="nav-link pl-0">Home</a></li>
					<li class="nav-item "><a href="<?php echo url('about'); ?>" class="nav-link">About</a></li>

					<li class="nav-item "><a href="<?php echo url('teacher'); ?>" class="nav-link">Staff</a></li>
					<li class="nav-item "><a href="<?php echo url('students'); ?>" class="nav-link">Students</a></li>
					<li class="nav-item "><a href="<?php echo url('photo_gallery'); ?>" class="nav-link">Photo gallery</a></li>
					<li class="nav-item "><a href="<?php echo url('video_gallery'); ?>" class="nav-link">Video gallery</a></li>
					<li class="nav-item "><a href="<?php echo url('blog'); ?>" class="nav-link">Blog</a></li>

					<li class="nav-item active"><a href="<?php echo url('results'); ?>" class="nav-link">Results</a></li>
					<li class="nav-item "><a href="<?php echo url('routines'); ?>" class="nav-link">Routines</a></li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Others</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="<?php echo url('others_smc'); ?>"> विधालय व्यवस्थापन समिति</a></li>
							<li><a class="dropdown-item" href="<?php echo url('others_tpc'); ?>"> शिक्षक अभिभावक संघ</a></li>
						</ul>
					</li>
					<li class="nav-item "><a href="<?php echo url('contact'); ?>" class="nav-link">Contact</a></li>

					@elseif($status=='Routines')
					<li class="nav-item "><a href="<?php echo url('/'); ?>" class="nav-link pl-0">Home</a></li>
					<li class="nav-item "><a href="<?php echo url('about'); ?>" class="nav-link">About</a></li>

					<li class="nav-item "><a href="<?php echo url('teacher'); ?>" class="nav-link">Staff</a></li>
					<li class="nav-item "><a href="<?php echo url('students'); ?>" class="nav-link">Students</a></li>
					<li class="nav-item "><a href="<?php echo url('photo_gallery'); ?>" class="nav-link">Photo gallery</a></li>
					<li class="nav-item "><a href="<?php echo url('video_gallery'); ?>" class="nav-link">Video gallery</a></li>
					<li class="nav-item "><a href="<?php echo url('blog'); ?>" class="nav-link">Blog</a></li>

					<li class="nav-item "><a href="<?php echo url('results'); ?>" class="nav-link">Results</a></li>
					<li class="nav-item active"><a href="<?php echo url('routines'); ?>" class="nav-link">Routines</a></li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Others</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="<?php echo url('others_smc'); ?>"> विधालय व्यवस्थापन समिति</a></li>
							<li><a class="dropdown-item" href="<?php echo url('others_tpc'); ?>"> शिक्षक अभिभावक संघ</a></li>
						</ul>
					</li>
					<li class="nav-item"><a href="<?php echo url('contact'); ?>" class="nav-link">Contact</a></li>


					@elseif($status=='others')
					<li class="nav-item "><a href="<?php echo url('/'); ?>" class="nav-link pl-0">Home</a></li>
					<li class="nav-item "><a href="<?php echo url('about'); ?>" class="nav-link">About</a></li>

					<li class="nav-item "><a href="<?php echo url('teacher'); ?>" class="nav-link">Staff</a></li>
					<li class="nav-item "><a href="<?php echo url('students'); ?>" class="nav-link">Students</a></li>
					<li class="nav-item "><a href="<?php echo url('photo_gallery'); ?>" class="nav-link">Photo gallery</a></li>
					<li class="nav-item "><a href="<?php echo url('video_gallery'); ?>" class="nav-link">Video gallery</a></li>
					<li class="nav-item "><a href="<?php echo url('blog'); ?>" class="nav-link">Blog</a></li>

					<li class="nav-item "><a href="<?php echo url('results'); ?>" class="nav-link">Results</a></li>
					<li class="nav-item "><a href="<?php echo url('routines'); ?>" class="nav-link">Routines</a></li>

					<li class="nav-item active dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Others</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="<?php echo url('others_smc'); ?>"> विधालय व्यवस्थापन समिति</a></li>
							<li><a class="dropdown-item" href="<?php echo url('others_tpc'); ?>"> शिक्षक अभिभावक संघ</a></li>
						</ul>
					</li>
					<li class="nav-item "><a href="<?php echo url('contact'); ?>" class="nav-link">Contact</a></li>



					@elseif($status=='contact')
					<li class="nav-item "><a href="<?php echo url('/'); ?>" class="nav-link pl-0">Home</a></li>
					<li class="nav-item "><a href="<?php echo url('about'); ?>" class="nav-link">About</a></li>

					<li class="nav-item "><a href="<?php echo url('teacher'); ?>" class="nav-link">Staff</a></li>
					<li class="nav-item "><a href="<?php echo url('students'); ?>" class="nav-link">Students</a></li>
					<li class="nav-item "><a href="<?php echo url('photo_gallery'); ?>" class="nav-link">
					<li class="nav-item "><a href="<?php echo url('photo_gallery'); ?>" class="nav-link">Photo gallery</a></li>
					<li class="nav-item "><a href="<?php echo url('video_gallery'); ?>" class="nav-link">Video gallery</a></li>
					<li class="nav-item "><a href="<?php echo url('blog'); ?>" class="nav-link">Blog</a></li>

					<li class="nav-item "><a href="<?php echo url('results'); ?>" class="nav-link">Results</a></li>
					<li class="nav-item "><a href="<?php echo url('routines'); ?>" class="nav-link">Routines</a></li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Others</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="<?php echo url('others_smc'); ?>"> विधालय व्यवस्थापन समिति</a></li>
							<li><a class="dropdown-item" href="<?php echo url('others_tpc'); ?>"> शिक्षक अभिभावक संघ</a></li>
						</ul>
					</li>
					<li class="nav-item active  "><a href="<?php echo url('contact'); ?>" class="nav-link">Contact</a></li>

					@endif
				</ul>
			</div>
		</div>
	</nav>
</div>