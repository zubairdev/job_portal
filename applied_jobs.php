<?php require_once('private/initialize.php'); ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div class="page_banner banner listing-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="banner-heading">Job Listing</div>    
			</div>  
		</div>
	</div>
</div>
<main id="maincontent">
	<section class="resume">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="Resume">
						<h1>My Account</h1>
						<ul class="unstyled">
							<li><a href="#"><i class="fa fa-caret-right"></i> My Profile</a></li>
							<li><a href="#"><i class="fa fa-caret-right"></i> Edit Profile</a></li>
							<li><a href="#"><i class="fa fa-caret-right"></i> Notifications</a></li>
							<li><a href="#"><i class="fa fa-caret-right"></i> Favorite Candidates</a></li>
							<li class="active"><a href="#"><i class="fa fa-caret-right"></i> Manage Jobs</a></li>
							<li><a href="#"><i class="fa fa-caret-right"></i> Manage Applications</a></li>
							<li><a href="#"><i class="fa fa-caret-right"></i> Change Password</a></li>
							<li class="border-none"><a href="#"><i class="fa fa-caret-right"></i> Sign Out</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-9">
					<div class="clearfix"></div>
					<div class="page_listing">
						<div class="sorting_content">
							<div class="tab-image"><img src="images/home/img1.jpg" alt="" class="img-responsive"></div>
							<div class="overflow">
								<div class="text-shorting">
									<h1 class="col-md-6 col-sm-7"><a href="job_detail.php">Team of PHP MySQL Developers</a><p>Agricultural Sceences</p> </h1>
									
									<div class="work-time text-center col-md-2">Full Time</div>
									<div class="work-time text-center col-md-2" style="margin-left: 80px;">Applied <i class="fa fa-check"></i></div>
								</div>
								<div class="bottom_text">
									<div class="contact_details col-md-4 col-sm-4">
										<span><strong>Sallery: <i class="fa fa-money"></i></strong> $7,50,000 / P.A</span>
									</div>
									<div class="contact_details col-md-8 col-sm-8">
										<span><strong>Skills:</strong> Desinger, Developer, Html, Javascript, Jquery, CSS</span>
									</div>
									<p class="col-md-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p>
								</div>
							</div>
						</div>
						<div class="sorting_content">
							<div class="tab-image"><img src="images/home/img2.jpg" alt="" class="img-responsive"></div>
							<div class="overflow">
								<div class="text-shorting">
									<h1 class="col-md-6 col-sm-7"><a href="job_detail.php">Urgent Opening for PHP Developer</a><p>Agricultural Sceences</p> </h1>
									<div class="work-time part text-center col-md-2">Part Time</div>
								</div>
								<div class="bottom_text">
									<div class="contact_details col-md-4 col-sm-4">
										<span><strong>Sallery: <i class="fa fa-money"></i></strong> $7,50,000 / P.A</span>
									</div>
									<div class="contact_details col-md-8 col-sm-8">
										<span><strong>Skills:</strong> Desinger, Developer, Html, Javascript, Jquery, CSS</span>
									</div>
									<p class="col-md-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p>
								</div>
							</div>
						</div> 
						
					</div>
					<ul class="pagination pull-right">
						<li class="active"><a href="#"><i class="fa fa-angle-left"></i></a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li class="active"><a href="#"><i class="fa fa-angle-right"></i></a></li>    
					</ul>
				</div>
			</div>
		</div>
	</section>
</main>
<?php include(SHARED_PATH . '/public_footer.php'); ?>