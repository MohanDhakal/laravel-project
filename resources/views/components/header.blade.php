<div class="bg-top navbar-light">
	<div class="container">
		<div class="row no-gutters d-flex align-items-center align-items-stretch">
			<div class="col-md-4 d-flex align-items-center py-4">
				<a class="navbar-brand" href="<?php echo url('/'); ?>">Tri Shaheed. <span>Model School</span></a>
			</div>
			<div class="col-lg-8 d-block">
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
							<a href="#" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
								<span>Apply now</span>
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container d-flex align-items-center px-4">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav mr-auto">
				@if($status=='home')
				<li class="nav-item active"><a href="<?php echo url('/'); ?>" class="nav-link pl-0">Home</a></li>
				<li class="nav-item "><a href="<?php echo url('about'); ?>" class="nav-link">About</a></li>
				<li class="nav-item "><a href="<?php echo url('gallery'); ?>" class="nav-link">gallery</a></li>
				<li class="nav-item "><a href="<?php echo url('teacher'); ?>" class="nav-link">Staff</a></li>
				<li class="nav-item "><a href="<?php echo url('blog'); ?>" class="nav-link">Blog</a></li>
				<li class="nav-item "><a href="<?php echo url('contact'); ?>" class="nav-link">Contact</a></li>
				@elseif($status=='about')
				<li class="nav-item "><a href="<?php echo url('/'); ?>" class="nav-link pl-0">Home</a></li>
				<li class="nav-item active"><a href="<?php echo url('about'); ?>" class="nav-link">About</a></li>
				<li class="nav-item "><a href="<?php echo url('gallery'); ?>" class="nav-link">gallery</a></li>
				<li class="nav-item "><a href="<?php echo url('teacher'); ?>" class="nav-link">Staff</a></li>
				<li class="nav-item "><a href="<?php echo url('blog'); ?>" class="nav-link">Blog</a></li>
				<li class="nav-item "><a href="<?php echo url('contact'); ?>" class="nav-link">Contact</a></li>
				@elseif($status=='gallery')
				<li class="nav-item "><a href="<?php echo url('/'); ?>" class="nav-link pl-0">Home</a></li>
				<li class="nav-item "><a href="<?php echo url('about'); ?>" class="nav-link">About</a></li>
				<li class="nav-item active"><a href="<?php echo url('gallery'); ?>" class="nav-link">gallery</a></li>
				<li class="nav-item "><a href="<?php echo url('teacher'); ?>" class="nav-link">Staff</a></li>
				<li class="nav-item "><a href="<?php echo url('blog'); ?>" class="nav-link">Blog</a></li>
				<li class="nav-item "><a href="<?php echo url('contact'); ?>" class="nav-link">Contact</a></li>
		
				@elseif($status=='staff')
				<li class="nav-item "><a href="<?php echo url('/'); ?>" class="nav-link pl-0">Home</a></li>
				<li class="nav-item "><a href="<?php echo url('about'); ?>" class="nav-link">About</a></li>
				<li class="nav-item "><a href="<?php echo url('gallery'); ?>" class="nav-link">gallery</a></li>
				<li class="nav-item active"><a href="<?php echo url('teacher'); ?>" class="nav-link">Staff</a></li>
				<li class="nav-item "><a href="<?php echo url('blog'); ?>" class="nav-link">Blog</a></li>
				<li class="nav-item "><a href="<?php echo url('contact'); ?>" class="nav-link">Contact</a></li>
		
				@elseif($status=='blog')
				<li class="nav-item "><a href="<?php echo url('/'); ?>" class="nav-link pl-0">Home</a></li>
				<li class="nav-item "><a href="<?php echo url('about'); ?>" class="nav-link">About</a></li>
				<li class="nav-item "><a href="<?php echo url('gallery'); ?>" class="nav-link">gallery</a></li>
				<li class="nav-item "><a href="<?php echo url('teacher'); ?>" class="nav-link">Staff</a></li>
				<li class="nav-item active"><a href="<?php echo url('blog'); ?>" class="nav-link">Blog</a></li>
				<li class="nav-item "><a href="<?php echo url('contact'); ?>" class="nav-link">Contact</a></li>
		
				@elseif($status=='contact')
				<li class="nav-item "><a href="<?php echo url('/'); ?>" class="nav-link pl-0">Home</a></li>
				<li class="nav-item "><a href="<?php echo url('about'); ?>" class="nav-link">About</a></li>
				<li class="nav-item "><a href="<?php echo url('gallery'); ?>" class="nav-link">gallery</a></li>
				<li class="nav-item "><a href="<?php echo url('teacher'); ?>" class="nav-link">Staff</a></li>
				<li class="nav-item "><a href="<?php echo url('blog'); ?>" class="nav-link">Blog</a></li>
				<li class="nav-item active "><a href="<?php echo url('contact'); ?>" class="nav-link">Contact</a></li>
				@endif
			</ul>
		</div>
	</div>
</nav>