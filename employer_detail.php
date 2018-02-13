<?php require_once('private/initialize.php'); 
include(SHARED_PATH . '/public_header.php'); 

require_login();

if (isset($_GET['company'])) {

    $id = $_GET['company']; // user signup id

    $session_id = $_SESSION['u_id'];


    $sql = "SELECT * FROM company WHERE user_id=$session_id";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);
    $c_u_id = $row['user_id'];
    // Now take out exact match result

    if ($session_id == $c_u_id) {

   	$company = find_company_by_id($id);

   	echo "this is user_id: ".$c_u_id ."</br>";
   	echo "Id which we get from form: ".$id ."</br>";
   	echo "Session Id ".$session_id;

	} else {
        redirect_to(url_for('candidates.php'));
    } // if result not match
    
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
				<div class="col-md-4">
					<div class="contact_details">
						<span><i class="fa fa-map"></i> <?php echo $company['c_address']; ?></span>
						<span><i class="fa fa-phone"></i><?php echo"+92-".$company['c_phone']; ?></span>
						<span><i class="fa fa-envelope"></i><a href="#"><?php echo $company['c_email']; ?></a></span>
						<span><i class="fa fa-globe"></i><a href="<?php echo $company['c_web']; ?>"><?php echo $company['c_web']; ?></a></span>
					</div>
				</div>
			</div>
			<br />
			<br />
			<div class="row">
				<div class="col-md-8">
					<div class="panel-body">
						<div class="page-heading">
							<h2>Company Overview</h2>
							<p><?php echo $company['c_description']; ?></p>
						</div>
						<div class="page_details">
							<h4>Business Details : </h4>
							<p> <?php echo $company['c_business']; ?></p>
						</div>
						<div class="page_details">
							<h4>What We Do : </h4>
							<?php echo 	$company['c_wwd']; ?>
						</div>
						<a href="#" class="btn btn-default">Contact Now</a>
					</div>
				</div> 
				<div class="col-md-4">
					<div class="panel-body">
						<div class="job_title block1">
							Contact IFW Media
						</div> 
						<p></p>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Full Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Email Address">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="phone Number">
						</div>
						<div class="form-group">
							<textarea type="text" class="form-control" placeholder="Message"></textarea>
						</div>
						<a href="#" class="btn btn-default btn-block">Submit Message</a>
					</div>
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106051.59692771109!2d-117.91613952342153!3d33.83521175031485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcd6f98055e867%3A0x1ab89ab9a2bb160!2sAnaheim%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1493815696478" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>


<?php include(SHARED_PATH . '/public_footer.php'); ?>
