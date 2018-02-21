<?php require_once('private/initialize.php');
include(SHARED_PATH . '/public_header.php'); 

require_login();
if (isset($_GET['company'])) {
	$id = $_GET['company'];
	}
	echo "this is company id: ". $id;
 ?>
<div class="page_banner banner employer-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="banner-heading">Manage Jobs</div>    
			</div>  
		</div> 
	</div>
</div>
<main id="maincontent">
	<section class="manage">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
				<div class="Resume">
						<h1>My Account</h1>
						<ul class="unstyled">
							<li class="active"><a href="employer_detail.php?company=<?php echo $id; ?>"><i class="fa fa-caret-right"></i> My Profile</a></li>
							<li><a href="edit_company.php?company=<?php echo $id; ?>"><i class="fa fa-caret-right"></i> Edit Profile</a></li>
							<li><a href="post_job.php"><i class="fa fa-caret-right"></i> Post Jobs</a></li>
							<li><a href="manage_jobs.php?company=<?php echo $id; ?>"><i class="fa fa-caret-right"></i> Manage Jobs</a></li>
							<li><a href="manage_applications.php"><i class="fa fa-caret-right"></i> Manage Applications</a></li>
							<li><a href="#"><i class="fa fa-caret-right"></i> Change Password</a></li>
							<li class="border-none"><a href="userout.php"><i class="fa fa-caret-right"></i> Sign Out</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-9">
					<div class="panel-body">
						<div class="job_title">Manage Applications</div>
						<table class="table">
							<thead class="">
								<tr>
									<th>Job Title</th>
									<th>Job Type</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php 
									if (isset($_GET['company'])) {
										$id = $_GET['company'];
										view_jobs_of_company($id);
										}
									?>
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
