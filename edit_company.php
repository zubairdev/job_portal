<?php require_once('private/initialize.php');

require_login(); 
if (!isset($_GET['company'])) {
	redirect_to(url_for('index.php'));
}
if(isset($_GET['company'])){
$company_id = $_GET['company'];
$company_set = find_company_by_id($company_id);
$old_photo = $company_set['photo'];
}
if (is_post_request()) {

	$company = [];
	$company['id'] = $company_id ?? '';
	$company['c_name'] = $_POST['c_name'] ?? '';
	$company['c_address'] = $_POST['c_address'] ?? '';
	$company['c_email'] = $_POST['c_email'] ?? '';
	$company['c_phone'] = $_POST['c_phone'] ?? '';
	$company['c_web'] = $_POST['c_web'] ?? '';
	$company['c_fb'] = $_POST['c_fb'] ?? '';
	$company['c_twitter'] = $_POST['c_twitter'] ?? '';
	$company['c_linkedin'] = $_POST['c_linkedin'] ?? '';
	$company['c_gplus'] = $_POST['c_gplus'] ?? '';
	$company['c_description'] = $_POST['c_description'] ?? '';
	$company['c_business'] = $_POST['c_business'] ?? '';
	$company['c_wwd'] = $_POST['c_wwd'] ?? '';

	$photo = $_FILES['photo']['name'];
	$tmp_name= $_FILES['photo']['tmp_name'];
	$local_image = "images/company/logo/";
	$upload=move_uploaded_file($tmp_name, $local_image . $photo);

	$company['photo'] = $photo;

	if (empty($company['photo'])) {
		$company['photo'] = $old_photo;
	}

	$result = update_company_by_id($company);
	if($result == true) {
		$_SESSION['message'] = "Your Company has been Edit Successfully";
		redirect_to(url_for('employer_detail.php?company=' . $company_id));
	} else {
		echo "Error: ....... ";
	}
} else {

	$company = [];
	$company['c_name'] = '';
	$company['c_address'] = '';
	$company['c_email'] = '';
	$company['c_phone'] = '';
	$company['c_web'] = '';
	$company['photo'] = '';
	$company['c_fb'] = '';
	$company['c_twitter'] = '';
	$company['c_linkedin'] = '';
	$company['c_gplus'] = '';
	$company['c_description'] = '';
	$company['c_business'] = '';
	$company['c_wwd'] = '';

}

include(SHARED_PATH . '/public_header.php');

?>

<div class="page_banner banner post-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="banner-heading">Edit your Profile</div>
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
						<form method="post"  enctype="multipart/form-data">
						<div class="form-group col-md-6 p-l">
							<label>Company Name</label>
							<input type="text" name="c_name" class="form-control" value="<?php echo $company['c_name']; ?>" required="required" data-validation-required-message="Please Enter You Comapny Name" />
						</div>
						<div class="form-group col-md-6 p-r">
							<label>Address</label>
							<input type="text" name="c_address" class="form-control" value="<?php echo $company['c_address']; ?>" required="required" data-validation-required-message="Please Enter Company Address" />
						</div>
						<div class="form-group col-md-6 p-l">
							<label>Email</label>
							<div class="input-group">
							<div class="input-group-addon">https://</div>
							<input type="text" name="c_email" class="form-control" value="<?php echo $company['c_email']; ?>" required="required"  data-validation-required-message="Please Enter The Email Address" />
						</div>
						</div>
						<div class="form-group col-md-6 p-r">
							<label>Phone Number</label>
							<input type="text" name="c_phone" class="form-control" value="<?php echo $company['c_phone'] ; ?>" required="required" data-validation-required-message="Please Enter The Phone Number" />
						</div>
						<div class="form-group col-md-6 p-l">
							<label>Website (Optional)</label>
							<input type="text" name="c_web" class="form-control" value="<?php echo $company['c_web']; ?>" placeholder="eg. www.example.com" />
						</div>
						<div class="form-group col-md-6 p-r">
							<label>Company Logo <span>(max. file size 3MB)</span></label>
							<input type="file" name="photo" class="form-control">
						</div>
						<div class="form-group social_icon col-md-6 p-l">
							<label>Facebook <span>(Optional)</span></label>
							<input type="text" name="c_fb" class="form-control" value="<?php echo $company['c_fb']; ?>" placeholder="Enter page URL" />
							<a href="#"><i class="fa fa-facebook"></i></a>
						</div>
						<div class="form-group social_icon twiiter col-md-6 p-r">
							<label>Twitter <span>(Optional)</span></label>
							<input type="text" name="c_twitter" class="form-control" value="<?php echo $company['c_twitter']; ?>" placeholder="@companyname" />
							<a href="#"><i class="fa fa-twitter"></i></a>
						</div>
						<div class="form-group social_icon linkedin col-md-6 p-l">
							<label>Linked in <span>(Optional)</span></label>
							<input type="text" name="c_linkedin" class="form-control" value="<?php echo $company['c_linkedin']; ?>" placeholder="Enter page URL" />
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
						<div class="form-group social_icon google_plus col-md-6 p-r">
							<label>Google + <span>(Optional)</span></label>
							<input type="text" name="c_gplus" class="form-control" value="<?php echo $company['c_gplus']; ?>" placeholder="Enter page URL" />
							<a href="#"><i class="fa fa-google"></i></a>
						</div>	
						<div class="form-group col-md-12 p-l p-r">
							<label>Business Details</label>
							<textarea name="c_business" class="form-control" required="required" data-validation-required-message="Please Enter The Description" placeholder="Page Body">
								<?php echo $company['c_business']; ?>
							</textarea>
						</div>
						<div class="form-group col-md-12 p-l p-r">
							<label>What We Do <span>*in bullets form</span></label>
							<textarea name="c_wwd" class="form-control" required="required" data-validation-required-message="Please Enter The Description" placeholder="Page Body">
								<?php echo $company['c_wwd']; ?>
							</textarea>
						</div>
						<div class="col-md-12 p-l">
							<!-- <a class="btn btn-default">Preview Your Profile</a> -->
							<button type="submit" name="update" class="btn btn-default">Preview Your Profile</button>
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
