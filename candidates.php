<?php require_once('private/initialize.php'); ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div class="page_banner banner employer-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="banner-heading">Browse Candidates</div>    
			</div>  
		</div>
	</div>
</div>
<main id="maincontent">
	<section class="resume">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="job-search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Job title / keywords">
							<div class="search_icon"><span class="ti-briefcase"></span></div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="City / zip code">
							<div class="search_icon"><span class="ti-location-pin"></span></div>
						</div>
						<a href="#" class="btn btn-default">Search Job Results</a>
					</div>
					<div class="job_title">Categories</div>
					<div class="borderfull-width"></div>
					<div class="clearfix"></div>
					<div class="page-heading">
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="Executive" name="ossm"> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="Executive">Executive</label> 
							</div>
						</div>
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="Manager" name="ossm" checked=""> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="Manager">Manager</label> 
							</div>
						</div>
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="Developer" name="ossm"> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="Developer">Developer</label> 
							</div>
						</div>
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="Designer" name="ossm"> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="Designer">Designer</label> 
							</div>
						</div>
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="Java" name="ossm" checked=""> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="Java">Java Developer</label> 
							</div>
						</div>
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="Civil" name="ossm" checked=""> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="Civil">Civil Engineert</label> 
							</div>
						</div>
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="Architect" name="ossm"> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="Architect">Architect</label> 
							</div>
						</div>
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="Data" name="ossm"> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="Data">Data Entry Operator</label> 
							</div>
						</div>
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="SEO" name="ossm"> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="SEO">SEO</label> 
							</div>
						</div>
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="hr" name="ossm"> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="hr">HR </label> 
							</div>
						</div>
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="Assistent" name="ossm"> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="Assistent">Assistent Manager HR </label> 
							</div>
						</div>
					</div>
					<div class="job_title">Skills</div>
					<div class="borderfull-width"></div>
					<div class="page-heading">
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="PHP" name="ossm"> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="PHP">PHP</label> 
							</div>
						</div>
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="HTML" name="ossm" checked=""> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="HTML">HTML</label> 
							</div>
						</div>
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="CSS" name="ossm"> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="CSS">CSS</label> 
							</div>
						</div>
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="JavaScript" name="ossm"> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="JavaScript">JavaScript</label> 
							</div>
						</div>
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="jQueary" name="ossm"> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="jQueary">jQueary</label> 
							</div>
						</div>
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="MySQL" name="ossm"> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="MySQL">MySQL</label> 
							</div>
						</div>
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="Wordpress" name="ossm"> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="Wordpress">Wordpress</label> 
							</div>
						</div>    
					</div>
					<div class="job_title">Job Type</div>
					<div class="borderfull-width"></div>
					<div class="page-heading">
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="cb_9" name="ossm"> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="cb_9">All Type</label> 
							</div>
						</div>
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="cb_8" name="ossm" checked=""> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="cb_8">Full Time</label> 
							</div>
						</div>
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="cb_7" name="ossm"> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="cb_7">part Time</label> 
							</div>
						</div>
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="cb_6" name="ossm"> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="cb_6">Freelancer</label> 
							</div>
						</div>    
					</div>
					<div class="job_title">Rate / Hr</div>
					<div class="borderfull-width"></div>
					<div class="page-heading">
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="cb_5" name="ossm"> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="cb_5">$0 - $25 (231)</label> 
							</div>
						</div>
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="cb_4" name="ossm" checked=""> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="cb_4">$25 - $50 (297)</label> 
							</div>
						</div>
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="cb_3" name="ossm"> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="cb_3">$50 - $100 (78)</label> 
							</div>
						</div> 
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="cb_2" name="ossm"> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="cb_2">$100 - $200 (98)</label> 
							</div>
						</div> 
						<div class="category">
							<div class="col-md-1 p-l p-r">
								<input type="checkbox" id="cb_1" name="ossm"> 
							</div>
							<div class="col-md-11 p-l p-r">
								<label for="cb_1">$200+ (21)</label> 
							</div>
						</div> 
					</div>
				</div>
				<div class="col-md-9">
					<div class="col-md-7 col-sm-7 p-l">
						<div class="page-heading">
							<p>Showing 1-8 of 254</p>
						</div>
					</div>  
					<div class="col-md-5 col-sm-5 filter p-r text-right">
						<div class="col-md-7 col-sm-5"><p>Short by:</p></div>
						<div class="col-md-5 col-sm-7 p-r">
							<div class="dropdown">
								<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">By Default <span class="caret"></span></button>
								<ul class="dropdown-menu pull-right">
									<li><a href="#">Executive</a></li>
									<li><a href="#">SEO</a></li>
									<li><a href="#">Java Developer</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="page_listing candidate">
						<?php view_all_candidates(); ?>
						<!-- <div class="sorting_content">
							<div class="tab-image"><img src="images/candidates/candidate-1.png" alt="" class="img-responsive"></div>
							<div class="overflow">
								<div class="text-shorting">
									<a href="resume.php"><h1>Homer Simpson</h1></a>
									<ul class="unstyled">
										<li>UI/UX Developer</li>
										<li><span><strong>Rate : </strong> <i class="fa fa-money"></i> $100 / Hour</span></li>
									</ul>
									<p></p>
								</div>
								<div class="bottom_text">
									<div class="contact_details col-md-4 col-sm-4 p-l">
										<span><strong>Location:</strong> Toulouse, France</span>
									</div>
									<div class="contact_details col-md-8 col-sm-8 p-l">
										<span><strong>Skills:</strong>  PHP, Html, JavaScript, jQuery, CSS, MySQL, Wordpress</span>
									</div>
									<p></p>
									<p class="col-md-12 p-l">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p>
								</div>
							</div>
						</div> -->
						<!-- <div class="sorting_content">
							<div class="tab-image"><img src="images/candidates/candidate-2.png" alt="" class="img-responsive"></div>
							<div class="overflow">
								<div class="text-shorting">
									<h1>Rachael Smith</h1>
									<ul class="unstyled">
										<li>UI/UX Developer</li>
										<li><span><strong>Rate : </strong> <i class="fa fa-money"></i> $100 / Hour</span></li>
									</ul>
									<p></p>
								</div>
								<div class="bottom_text">
									<div class="contact_details col-md-4 col-sm-4 p-l">
										<span><strong>Location:</strong> Toulouse, France</span>
									</div>
									<div class="contact_details col-md-8 col-sm-8 p-l">
										<span><strong>Skills:</strong>  PHP, Html, JavaScript, jQuery, CSS, MySQL, Wordpress</span>
									</div>
									<p></p>
									<p class="col-md-12 p-l">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p>
								</div>
							</div>
						</div>
						<div class="sorting_content">
							<div class="tab-image"><img src="images/candidates/candidate-3.png" alt="" class="img-responsive"></div>
							<div class="overflow">
								<div class="text-shorting">
									<h1>John Spectre</h1>
									<ul class="unstyled">
										<li>UI/UX Developer</li>
										<li><span><strong>Rate : </strong> <i class="fa fa-money"></i> $100 / Hour</span></li>
									</ul>
									<p></p>
								</div>
								<div class="bottom_text">
									<div class="contact_details col-md-4 col-sm-4 p-l">
										<span><strong>Location:</strong> Toulouse, France</span>
									</div>
									<div class="contact_details col-md-8 col-sm-8 p-l">
										<span><strong>Skills:</strong>  PHP, Html, JavaScript, jQuery, CSS, MySQL, Wordpress</span>
									</div>
									<p></p>
									<p class="col-md-12 p-l">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p>
								</div>
							</div>
						</div>
						<div class="sorting_content">
							<div class="tab-image"><img src="images/candidates/candidate-4.png" alt="" class="img-responsive"></div>
							<div class="overflow">
								<div class="text-shorting">
									<h1>Angela Haze</h1>
									<ul class="unstyled">
										<li>UI/UX Developer</li>
										<li><span><strong>Rate : </strong> <i class="fa fa-money"></i> $100 / Hour</span></li>
									</ul>
									<p></p>
								</div>
								<div class="bottom_text">
									<div class="contact_details col-md-4 col-sm-4 p-l">
										<span><strong>Location:</strong> Toulouse, France</span>
									</div>
									<div class="contact_details col-md-8 col-sm-8 p-l">
										<span><strong>Skills:</strong>  PHP, Html, JavaScript, jQuery, CSS, MySQL, Wordpress</span>
									</div>
									<p></p>
									<p class="col-md-12 p-l">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p>
								</div>
							</div>
						</div>
						<div class="sorting_content">
							<div class="tab-image"><img src="images/candidates/candidate-5.png" alt="" class="img-responsive"></div>
							<div class="overflow">
								<div class="text-shorting">
									<h1>Suzy Biggs</h1>
									<ul class="unstyled">
										<li>UI/UX Developer</li>
										<li><span><strong>Rate : </strong> <i class="fa fa-money"></i> $100 / Hour</span></li>
									</ul>
									<p></p>
								</div>
								<div class="bottom_text">
									<div class="contact_details col-md-4 col-sm-4 p-l">
										<span><strong>Location:</strong> Toulouse, France</span>
									</div>
									<div class="contact_details col-md-8 col-sm-8 p-l">
										<span><strong>Skills:</strong>  PHP, Html, JavaScript, jQuery, CSS, MySQL, Wordpress</span>
									</div>
									<p></p>
									<p class="col-md-12 p-l">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p>
								</div>
							</div>
						</div>
						<div class="sorting_content">
							<div class="tab-image"><img src="images/candidates/candidate-6.png" alt="" class="img-responsive"></div>
							<div class="overflow">
								<div class="text-shorting">
									<h1>Homer Simpson</h1>
									<ul class="unstyled">
										<li>UI/UX Developer</li>
										<li><span><strong>Rate : </strong> <i class="fa fa-money"></i> $100 / Hour</span></li>
									</ul>
									<p></p>
								</div>
								<div class="bottom_text">
									<div class="contact_details col-md-4 col-sm-4 p-l">
										<span><strong>Location:</strong> Toulouse, France</span>
									</div>
									<div class="contact_details col-md-8 col-sm-8 p-l">
										<span><strong>Skills:</strong>  PHP, Html, JavaScript, jQuery, CSS, MySQL, Wordpress</span>
									</div>
									<p></p>
									<p class="col-md-12 p-l">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p>
								</div>
							</div>
						</div>
						<div class="sorting_content">
							<div class="tab-image"><img src="images/candidates/candidate-7.png" alt="" class="img-responsive"></div>
							<div class="overflow">
								<div class="text-shorting">
									<h1>Rachael Smith</h1>
									<ul class="unstyled">
										<li>UI/UX Developer</li>
										<li><span><strong>Rate : </strong> <i class="fa fa-money"></i> $100 / Hour</span></li>
									</ul>
									<p></p>
								</div>
								<div class="bottom_text">
									<div class="contact_details col-md-4 col-sm-4 p-l">
										<span><strong>Location:</strong> Toulouse, France</span>
									</div>
									<div class="contact_details col-md-8 col-sm-8 p-l">
										<span><strong>Skills:</strong>  PHP, Html, JavaScript, jQuery, CSS, MySQL, Wordpress</span>
									</div>
									<p></p>
									<p class="col-md-12 p-l">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p>
								</div>
							</div>
						</div>
						<div class="sorting_content">
							<div class="tab-image"><img src="images/candidates/candidate-8.png" alt="" class="img-responsive"></div>
							<div class="overflow">
								<div class="text-shorting">
									<h1>John Spectre</h1>
									<ul class="unstyled">
										<li>UI/UX Developer</li>
										<li><span><strong>Rate : </strong> <i class="fa fa-money"></i> $100 / Hour</span></li>
									</ul>
									<p></p>
								</div>
								<div class="bottom_text">
									<div class="contact_details col-md-4 col-sm-4 p-l">
										<span><strong>Location:</strong> Toulouse, France</span>
									</div>
									<div class="contact_details col-md-8 col-sm-8 p-l">
										<span><strong>Skills:</strong>  PHP, Html, JavaScript, jQuery, CSS, MySQL, Wordpress</span>
									</div>
									<p></p>
									<p class="col-md-12 p-l">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p>
								</div>
							</div>
						</div> -->
					</div>
					<ul class="pagination pull-right">
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
</main>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
