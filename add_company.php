<?php require_once('private/initialize.php');

require_login();
$_SESSION['u_id'];
$session_id = $_SESSION['u_id'];

	// restrict company to open add company page again
$company = company_validation($session_id);
$c_id = $company['c_id'];
$user_id = $company['user_id'];
$c_check = $company['c_check'];

if ($c_check == 'insert') {
	redirect_to(url_for('employer_detail.php?company=' . $c_id));
} else {
	// do nothing
}
	$user = find_user_by_id($session_id);
	$status = $user['u_status'];
	if ($status == 3) {
		// do nothing
	} else {
		redirect_to(url_for('browse_jobs.php'));
	}
	echo "This is Status : " .$status;
if (is_post_request()) {

	$company = [];
	$company['user_id'] = $session_id ?? '';
	$company['c_address'] = $_POST['c_address'] ?? '';
	$company['c_phone'] = $_POST['c_phone'] ?? '';
	$company['c_web'] = $_POST['c_web'] ?? '';
	$company['c_fb'] = $_POST['c_fb'] ?? '';
	$company['c_twitter'] = $_POST['c_twitter'] ?? '';
	$company['c_linkedin'] = $_POST['c_linkedin'] ?? '';
	$company['c_gplus'] = $_POST['c_gplus'] ?? '';
	$company['c_business'] = $_POST['c_business'] ?? '';
	$company['c_wwd'] = $_POST['c_wwd'] ?? '';

	$photo = $_FILES['photo']['name'];
	$tmp_name= $_FILES['photo']['tmp_name'];
	$local_image = "images/company/logo/";
	$upload=move_uploaded_file($tmp_name, $local_image . $photo);
	$company['photo'] = $photo;

	$result = insert_company($company);
	if ($result === true) {
		$new_id = mysqli_insert_id($db);
		$_SESSION['message'] = "Your Company has been Added Successfully";
		redirect_to(url_for('employer_detail.php?company=' . $new_id));
	} else {
		echo "Error: ....... ";
	}

} else {

	$company = [];
	$company['c_address'] = '';
	$company['c_phone'] = '';
	$company['c_web'] = '';
	$company['photo'] = '';
	$company['c_fb'] = '';
	$company['c_twitter'] = '';
	$company['c_linkedin'] = '';
	$company['c_gplus'] = '';
	$company['c_business'] = '';
	$company['c_wwd'] = '';

}

include(SHARED_PATH . '/public_header.php');

?>

<div class="page_banner banner post-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="banner-heading">Create your Profile</div>
			</div>
		</div>
	</div>
</div>
<main id="maincontent">
	<section class="resume">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h2>Add Your Company</h2>
						<p>Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="panel-body">
						<div class="borderfull-width"></div>
						<div class="panel-heading">Company Information</div>
						<hr>
						<form method="post" action="add_company.php" enctype="multipart/form-data">
						<div class="form-group col-md-6 p-l">
							<label>Website (Optional)</label>
								<input type="text" name="c_web" class="form-control" placeholder="eg. http://www.example.com" />
						</div>
						<div class="form-group col-md-6 p-r">
							<label>Phone Number</label>
							<input type="text" name="c_phone" class="form-control" required="required" data-validation-required-message="Please Enter The Phone Number" />
						</div>
						<div class="form-group col-md-6 p-l">
							<label>Address</label>
							<input type="text" name="c_address" class="form-control" required="required" data-validation-required-message="Please Enter Company Address "/>
						</div>
						<div class="form-group col-md-6 p-r">
							<label>Company Logo <span>(max. file size 3MB)</span></label>
							<input type="file" name="photo" class="form-control">
						</div>
						<div class="form-group social_icon col-md-6 p-l">
							<label>Facebook <span>(Optional)</span></label>
								<input type="text" name="c_fb" class="form-control" placeholder="Enter page URL" />
								<a href="#"><i class="fa fa-facebook"></i></a>
						</div>
						<div class="form-group social_icon twiiter col-md-6 p-r">
							<label>Twitter <span>(Optional)</span></label>
							<input type="text" name="c_twitter" class="form-control" placeholder="@companyname" />
							<a href="#"><i class="fa fa-twitter"></i></a>
						</div>
						<div class="form-group social_icon linkedin col-md-6 p-l">
							<label>Linked in <span>(Optional)</span></label>
							<input type="text" name="c_linkedin" class="form-control" placeholder="Enter page URL" />
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
						<div class="form-group social_icon google_plus col-md-6 p-r">
							<label>Google + <span>(Optional)</span></label>
							<input type="text" name="c_gplus" class="form-control" placeholder="Enter page URL" />
							<a href="#"><i class="fa fa-google"></i></a>
						</div>
						<div class="form-group col-md-12 p-l p-r">
							<label>Business Details</label>
							<textarea name="c_business" class="form-control" required="required" data-validation-required-message="Please Enter The Description" placeholder="Page Body"></textarea>
						</div>
						<div class="form-group col-md-12 p-l p-r">
							<label>What We Do <span>*in bullets form</span></label>
							<textarea name="c_wwd" class="form-control" required="required" data-validation-required-message="Please Enter The Description" placeholder="Page Body"></textarea>
						</div>
						<div class="col-md-12 p-l">
							<!-- <a class="btn btn-default">Preview Your Profile</a> -->
							<button type="submit" name="submit" class="btn btn-default">Preview Your Profile</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
<script>
	CKEDITOR.replace( 'c_description' );
	CKEDITOR.replace( 'c_business' );
	CKEDITOR.replace( 'c_wwd' );
</script>
<?php include(SHARED_PATH . '/public_footer.php'); ?>
