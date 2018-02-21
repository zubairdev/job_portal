<?php require_once('private/initialize.php'); ?>

<?php

require_login(); 
$session_id = $_SESSION['u_id'];

$company = company_validation($session_id);
$c_id = $company['c_id'];
$user_id = $company['user_id'];

if ($session_id != $user_id) {
	redirect_to(url_for('index.php'));
}

?> 

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div class="page_banner banner employer-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="banner-heading">Manage Applications</div>    
			</div>  
		</div>
	</div>
</div>
<main id="maincontent">
	<section class="manage">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php include(SHARED_PATH . '/employer_sidebar.php'); ?>
				</div>
				<div class="col-md-9">
					<div class="panel-body">
						<div class="job_title">Manage Applications</div>
						<table class="table">
							<thead class="">
								<tr>
									<th>Candidate Name</th>
									<th>Job Title</th>
									<th>Resume</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><div class="col-md-4 col-sm-4 p-l p-r"><img src="images/candidates/candidate-1.png" alt="" class="img-responsive" width="70" height="70"></div>
										<div class="overflow col-md-8 col-sm-8 p-l">
											<div class="text-shorting">
												<h1>Rachael Smith</h1>
												<p>UI/UX Developer</p>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="bottom-text"><a href="#"><i class="fa fa-eye"></i> Click to View Message</a></div>
									</td>    
									<td style="vertical-align: text-top;"><h1>Team of PHP MySQL <br />Developers</h1></td>
									<td style="vertical-align: text-top;"><a href="#"><i class="fa fa-file-pdf-o"></i> John Resume</a></td>
									<td style="vertical-align: text-top;"><span><i class="fa fa-check"></i></span> <span><i class="fa fa-trash"></i></span></td>
								</tr> 
								<tr>
									<td><div class="col-md-4 col-sm-4 p-l p-r"><img src="images/candidates/candidate-2.png" alt="" class="img-responsive" width="70" height="70"></div>
										<div class="overflow col-md-8 col-sm-8 p-l">
											<div class="text-shorting">
												<h1>Homer Simpson</h1>
												<p>UI/UX Developer</p>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="bottom-text"><a href="#"><i class="fa fa-eye"></i> Click to View Message</a></div>
									</td>    
									<td style="vertical-align: text-top;"><h1>Team of PHP MySQL <br />Developers</h1></td>
									<td style="vertical-align: text-top;"><a href="#"><i class="fa fa-file-pdf-o"></i> John Resume</a></td>
									<td style="vertical-align: text-top;"><span><i class="fa fa-check"></i></span> <span><i class="fa fa-trash"></i></span></td>
								</tr>
								<tr>
									<td><div class="col-md-4 col-sm-4 p-l p-r"><img src="images/candidates/candidate-3.png" alt="" class="img-responsive" width="70" height="70"></div>
										<div class="overflow col-md-8 col-sm-8 p-l">
											<div class="text-shorting">
												<h1>John Spectre</h1>
												<p>UI/UX Developer</p>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="bottom-text"><a href="#"><i class="fa fa-eye"></i> Click to View Message</a></div>
									</td>    
									<td style="vertical-align: text-top;"><h1>Team of PHP MySQL <br />Developers</h1></td>
									<td style="vertical-align: text-top;"><a href="#"><i class="fa fa-file-pdf-o"></i> John Resume</a></td>
									<td style="vertical-align: text-top;"><span><i class="fa fa-check"></i></span> <span><i class="fa fa-trash"></i></span></td>
								</tr>
								<tr>
									<td><div class="col-md-4 col-sm-4 p-l p-r"><img src="images/candidates/candidate-4.png" alt="" class="img-responsive" width="70" height="70"></div>
										<div class="overflow col-md-8 col-sm-8 p-l">
											<div class="text-shorting">
												<h1>Suzy Biggs</h1>
												<p>UI/UX Developer</p>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="bottom-text"><a href="#"><i class="fa fa-eye"></i> Click to View Message</a></div>
									</td>    
									<td style="vertical-align: text-top;"><h1>Team of PHP MySQL <br />Developers</h1></td>
									<td style="vertical-align: text-top;"><a href="#"><i class="fa fa-file-pdf-o"></i> John Resume</a></td>
									<td style="vertical-align: text-top;"><span><i class="fa fa-check"></i></span> <span><i class="fa fa-trash"></i></span></td>
								</tr>
								<tr class="border-none">
									<td><div class="col-md-4 col-sm-4 p-l p-r"><img src="images/candidates/candidate-5.png" alt="" class="img-responsive" width="70" height="70"></div>
										<div class="overflow col-md-8 col-sm-8 p-l">
											<div class="text-shorting">
												<h1>Angela Haze</h1>
												<p>UI/UX Developer</p>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="bottom-text"><a href="#"><i class="fa fa-eye"></i> Click to View Message</a></div>
									</td>    
									<td style="vertical-align: text-top;"><h1>Team of PHP MySQL <br />Developers</h1></td>
									<td style="vertical-align: text-top;"><a href="#"><i class="fa fa-file-pdf-o"></i> John Resume</a></td>
									<td style="vertical-align: text-top;"><span><i class="fa fa-check"></i></span> <span><i class="fa fa-trash"></i></span></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
