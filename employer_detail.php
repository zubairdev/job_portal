<?php require_once('private/initialize.php'); 
include(SHARED_PATH . '/public_header.php'); 

require_login();

if (isset($_GET['company'])) {

    $company_id = $_GET['company']; // user signup id

    $session_id = $_SESSION['u_id'];


    $sql = "SELECT * FROM company WHERE c_id = $company_id";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);
    $c_u_id = $row['user_id'];
    // Now take out exact match result

    if ($session_id == $c_u_id) {

    	$company = find_company_by_id($company_id);

    	echo "this is user_id: ".$c_u_id ."</br>";
    	echo "Id which we get from form: ".$company_id ."</br>";
    	echo "Session Id ".$session_id;

    } else {
    	redirect_to(url_for('candidates.php'));
    } // if result not match
    
} else {
	redirect_to(url_for('index.php'));
}

?> 


<div class="page_banner banner employer-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="banner-heading">Employers Details</div>    
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
							<li class="active"><a href="employer_detail.php?company=<?php echo $company_id; ?>"><i class="fa fa-caret-right"></i> My Profile</a></li>
							<li><a href="edit_company.php?company=<?php echo $company_id; ?>"><i class="fa fa-caret-right"></i> Edit Profile</a></li>
							<li><a href="post_job.php"><i class="fa fa-caret-right"></i> Post Jobs</a></li>
							<li><a href="manage_jobs.php?company=<?php echo $company_id; ?>"><i class="fa fa-caret-right"></i> Manage Jobs</a></li>
							<li><a href="manage_applications.php"><i class="fa fa-caret-right"></i> Manage Applications</a></li>
							<li><a href="#"><i class="fa fa-caret-right"></i> Change Password</a></li>
							<li class="border-none"><a href="userout.php"><i class="fa fa-caret-right"></i> Sign Out</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-9">
					<div class="col-md-8 clearfix">
						<div class="col-md-3 p-l">
							<div class="block">
								<img src="<?php echo 'images/company/logo/' .$company['photo']; ?>" alt="" class="img-responsive">
							</div>
						</div>
						<div class="col-md-9">
							<div class="job_title">
								<?php echo $company['c_name']; ?>
							</div> 
							<a href="<?php echo $company['c_fb']; ?>" target="_blank" class="user-media"><i class="fa fa-facebook"></i></a>
							<a href="<?php echo $company['c_twitter']; ?>" target="_blank" class="user-media twitter"><i class="fa fa-twitter"></i></a>
							<a href="<?php echo $company['c_linkedin']; ?>" target="_blank" class="user-media linke"><i class="fa fa-linkedin"></i></a>
							<a href="<?php echo $company['c_gplus']; ?>" target="_blank" class="user-media google"><span class="ti-google"></span></a>
						</div>
					</div>
					<!-- one 8 div -->
					<div class="col-md-4">
						<div class="contact_details">
							<span><i class="fa fa-map"></i> <?php echo $company['c_address']; ?></span>
							<span><i class="fa fa-phone"></i><?php echo"+92-".$company['c_phone']; ?></span>
							<span><i class="fa fa-envelope"></i><a href="#"><?php echo $company['c_email']; ?></a></span>
							<span><i class="fa fa-globe"></i><a href="<?php echo $company['c_web']; ?>"><?php echo $company['c_web']; ?></a></span>
						</div>
					</div>
					<!-- one 4 div -->
				</div>
						<div class="col-md-9">
							<div class="panel-body">
								<div class="page-heading">
									<h2>Company Overview</h2>
									<p> <?php echo $company['c_business']; ?></p>
								</div>
								<div class="page_details">
									<h4>What We Do : </h4>
									<?php echo 	$company['c_wwd']; ?>
								</div>
								<a href="#" class="btn btn-default">Contact Now</a>
							</div>
						</div>
			</div>
		</section>
	</main>



	<?php include(SHARED_PATH . '/public_footer.php'); ?>
