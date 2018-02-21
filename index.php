<?php require_once('private/initialize.php');

include(SHARED_PATH . '/public_header.php');

?>

<div class="site-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="banner-content">
					<h1>Search between more them <br /> 50,000 open jobs.</h1>
					<p>Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.<br /> Nam eget dui consequat vitae, eleifend ac etiam rhoncus</p>
				</div>
				<div class="job-search" >
					<form method="POST" action ="browse_jobs.php">
					<div class="form-group col-md-6 padding-left b-r radius">
						<input type="text" class="form-control" name="search" placeholder="Job title /  keywords" />
						<div class="search_icon"><span class="ti-briefcase"></span></div>
					</div>
					<div class="form-group col-md-6 padding-left radius2">
						<select class="form-control" name="city">
							<option class="search_field" value="">Choose City</option>
							<option class="search_field" value="Lahore">Lahore</option>
							<option class="search_field" value="Faisalabad">Faisalabad</option>
							<option class="search_field" value="Karachi">Karachi</option>
							<option class="search_field" value="Ali Chak">Ali Chak</option>
						</select>
						<div class="search_icon"><span class="ti-location-pin"></span><i class="fa fa-angle-down"></i></div> 
					</div>
					<div class="form-group btn-search">
						<button type="submit" name="sub_search" class="btn btn-default">Search Job Result</button>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
<main id="maincontent">
	<div class="container skill">
		<div class="row">
			<div class="col-md-9">
				<div class="page-heading">
					<h2>Find Jobs by Skill, Industry & Location</h2>
					<p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu.</p>
				</div>  
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#Skills">Jobs By Skills</a></li>
					<li><a data-toggle="tab" href="#Industry">Jobs By Industry</a></li>
					<li><a data-toggle="tab" href="#Location">Jobs By Location</a></li>
					<li class="pull-right"><a href="#" class="view">View all jobs</a></li>
				</ul>
				<div class="tab-content">
					<div id="Skills" class="tab-pane fade in active">
						<div class="col-md-4 padding-left">
							<ul class="unstyled">
								<li><a href="#"><i class="fa fa-angle-right"></i> Mechanical Engineering Jobs</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> BPO Jobs</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Networking  Jobs</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Java Jobs</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Online Marketing Jobs</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Animation  Jobs</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Design Engineer Jobs</a></li>
							</ul>
						</div>
						<div class="col-md-4 padding-left">
							<ul class="unstyled">
								<li><a href="#"><i class="fa fa-angle-right"></i> Analytics Jobs</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> UI/UX Jobs</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> NLP Jobs</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Marketing Jobs</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Banking Jobs</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> MBA Jobs</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Teaching Jobs</a></li>
							</ul>
						</div>
						<div class="col-md-4 padding-left">
							<ul class="unstyled">
								<li><a href="#"><i class="fa fa-angle-right"></i> Accounting Jobs</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Retail Jobs</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Travel Jobs</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Merchandiser Jobs</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Architecture  Jobs</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Banking Insurance Jobs</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Music Jobs</a></li>
							</ul>
						</div>
					</div>
					<div id="Industry" class="tab-pane fade">
						<div class="col-md-4 padding-left">
							<ul class="unstyled">
								<li><a href="#"><i class="fa fa-angle-right"></i>  App Developer </a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Computer Programmer </a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Database Administrator </a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Programmer </a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Software Developer </a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i>  Web Developer </a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Career Counselor </a></li>
							</ul>
						</div>
						<div class="col-md-4 padding-left">
							<ul class="unstyled">
								<li><a href="#"><i class="fa fa-angle-right"></i> School</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Teacher</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Teaching Online</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Bank Teller</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Call Center</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Social Worker</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Paramedic</a></li>
							</ul>
						</div>
						<div class="col-md-4 padding-left">
							<ul class="unstyled">
								<li><a href="#"><i class="fa fa-angle-right"></i> Freelance Editor</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Freelance Writer</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Public Relations</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Financial Advisor</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Management</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Advertising</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Consultant</a></li>
							</ul>
						</div>
					</div>
					<div id="Location" class="tab-pane fade">
						<div class="col-md-4 padding-left">
							<ul class="unstyled">
								<li><a href="#"><i class="fa fa-angle-right"></i> Lahore</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Karachi</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Isalamabad</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Bhakkar</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Bahawalpur</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Dera Ismail Khan</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Farooqabad</a></li>
							</ul>
						</div>
						<div class="col-md-4 padding-left">
							<ul class="unstyled">
								<li><a href="#"><i class="fa fa-angle-right"></i> Gujranwala</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Hafizabad</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Hyderabad</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Jaranwala</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Jehlum</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Mirpur (AJK)</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Okara</a></li>
							</ul>
						</div>
						<div class="col-md-4 padding-left">
							<ul class="unstyled">
								<li><a href="#"><i class="fa fa-angle-right"></i> Peshawar</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Pindi Bhattian</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Qalandarabad</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Rahimyar Khan</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Rawalpindi</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Sakardu</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i> Sheikhupura</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="Resume">
					<h1>Add your resume and let your next job find you.</h1>
					<a href="#" class="btn btn-cv btn-block">Upload Your CV</a>
					<p> Max 3 MB, Type: doc, docx, pdf <strong>Already registered? </strong> <a href="#">Login</a></p>
					<div class="bottom">
						<h1>Newsletter Subscription</h1>
						<p> Get best Jobs on your Email.</p>  
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Email address..." />
						</div>
						<p class="text-right"><a href="#">Subscribe Now</a></p>
					</div>
				</div>
			</div>
		</div> 
	</div>
	<section class="featured">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h2>Featured Jobs</h2>
					</div>
				</div>
			</div> 
			<div class="row">
				<div class="col-md-12">
					<div class="table-bg">
						<table class="table">
							<tbody>
								<?php
								view_all_jobs_assoc();
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div> 
			<div class="row">
				<div class="col-md-12 text-right">
					<ul class="pagination">
						<li class="active"><a href="#"><i class="fa fa-angle-left"></i></a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">20</a></li>
						<li class="active"><a href="#"><i class="fa fa-angle-right"></i></a></li>    
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="our_site">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="page-title">
						<h1>Start Your Career Today! <br />Our Site Stats Here <b class="with text-right">With Us</b></h1>
						<p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel <br /> augue. Curabitur ullamcorper tellus eget condimentum ultricies nisi.</p>
					</div>
					<div class="col-md-4 col-sm-4 padding-left">
						<div class="counter-icon"><span class="ti-briefcase"></span></div>
						<div class="overflow">
							<div class="fact-box">
								<p>Jobs</p>
								<h3 class="counter_number">2480</h3>
							</div> 
						</div>
					</div>
					<div class="col-md-4 col-sm-4 padding-left">
						<div class="counter-icon"><span class="ti-world"></span></div>
						<div class="overflow">
							<div class="fact-box">
								<p>Company</p>
								<h3 class="counter_number">8380</h3>
							</div> 
						</div>
					</div>
					<div class="col-md-4 col-sm-4 padding-left">
						<div class="counter-icon"><span class="ti-user"></span></div>
						<div class="overflow">
							<div class="fact-box">
								<p>Member</p>
								<h3 class="counter_number">2400</h3>
							</div> 
						</div>
					</div>
				</div>
			</div> 
		</div>
	</section>
	<section class="employe">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="page-heading">
						<h2>Top Employes</h2>
						<p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="client">
						<a href="#"><img src="images/home/employe1.png" alt="" class="img-responsive"  /></a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="client">
						<a href="#"><img src="images/home/employe2.png" alt="" class="img-responsive"  /></a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="client">
						<a href="#"><img src="images/home/employe3.png" alt="" class="img-responsive"  /></a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="client">
						<a href="#"><img src="images/home/employe4.png" alt="" class="img-responsive"  /></a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="client">
						<a href="#"><img src="images/home/employe5.png" alt="" class="img-responsive"  /></a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="client">
						<a href="#"><img src="images/home/employe6.png" alt="" class="img-responsive"  /></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="client">
						<a href="#"><img src="images/home/employe6.png" alt="" class="img-responsive"  /></a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="client">
						<a href="#"><img src="images/home/employe5.png" alt="" class="img-responsive"  /></a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="client">
						<a href="#"><img src="images/home/employe4.png" alt="" class="img-responsive"  /></a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="client">
						<a href="#"><img src="images/home/employe3.png" alt="" class="img-responsive"  /></a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="client">
						<a href="#"><img src="images/home/employe2.png" alt="" class="img-responsive"  /></a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="client">
						<a href="#"><img src="images/home/employe1.png" alt="" class="img-responsive"  /></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="success_story">
		<div class="container">
			<div class="row">
				<div class="col-md-4 text-right">
					<div class="page-heading2">
						<h1>Job <span>Xpress</span></h1>
						<strong>success stories</strong>
					</div>
				</div>
				<div class="col-md-8">
					<div class="testi-slider">
						<ul class="slides list-inline">
							<li>
								<div class="testi-box clearfix text-center">
									<img src="assets/images/home/t1.png" alt="" class="img-responsive">
									<div class="content">
										<p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.</p>
										<div class="content-hr"></div>
										<h4>Wabidullah Sharif</h4>
										<span>Web Designer</span>
									</div>
								</div>
							</li>
							<li>
								<div class="testi-box clearfix text-center">
									<img src="assets/images/home/t1.png" alt="" class="img-responsive">
									<div class="content">
										<p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.</p>
										<div class="content-hr"></div>
										<h4>Wabidullah Sharif</h4>
										<span>Web Designer</span>
									</div>
								</div>
							</li>
							<li>
								<div class="testi-box clearfix text-center">
									<img src="assets/images/home/t1.png" alt="" class="img-responsive">
									<div class="content">
										<p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.</p>
										<div class="content-hr"></div>
										<h4>Wabidullah Sharif</h4>
										<span>Web Designer</span>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="visitor">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="page-heading heading3">
						<h2>We are Popular <span>Everywhere</span></h2>
						<p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="vector_map">
						<img src="images/home/map.png" alt="" class="img-responsive">
					</div>
				</div> 
			</div>
		</div>
	</section>
	<section class="jobxpress">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 padding-left">
					<div class="left-col">
						<div class="col-text">
							<div class="page-heading heading4">
								<h2>Join Thousands of Companies That Realy on <span>Jobxpress</span></h2>
								<hr>
								<p>Sed consequat, leo eget bibendum sodales, augue cursus nunc, quis <br /> gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum <br />purus quam, scelerisque ut.</p>
								<a href="#" class="btn Read_more">Read More</a>
							</div> 
						</div>
					</div>
				</div>
				<div class="col-md-6 padding-left">
					<div class="right-col"></div>
				</div>
			</div>
		</div>
	</section>
	<section class="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="page-heading">
						<h2>Latest News form <span>Jobxpress</span></h2>
						<p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
					</div>
				</div>
			</div> 
			<div class="row">
				<div class="col-md-6">
					<div class="block1">
						<a href="#"><img src="assets/images/home/blog1.jpg" alt="" class="img-responsive"></a>
						<div class="block1_desc">
							<div class="col-md-2 col-sm-2 padding-left text-right">
								<h3>April 25, <span>2017</span></h3>
							</div>
							<div class="col-md-10 col-sm-10">
								<p>Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies tellus eget condimentum nisi.</p>
							</div>
						</div>
					</div>
				</div> 
				<div class="col-md-6">
					<div class="block1">
						<a href="#"><img src="assets/images/home/blog2.jpg" alt="" class="img-responsive"></a>
						<div class="block1_desc">
							<div class="col-md-2 col-sm-2 padding-left text-right">
								<h3>March 13, <span>2017</span></h3>
							</div>
							<div class="col-md-10 col-sm-10">
								<p>Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies tellus eget condimentum nisi.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php include(SHARED_PATH . '/public_footer.php'); ?>