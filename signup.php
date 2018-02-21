<?php require_once('private/initialize.php'); ?>
<?php

		// Code Start Here

if (is_post_request()) {

	if (isset($_POST['submit1'])) {

		$candidate = [];
		$candidate['u_fname'] = $_POST['u_fname'] ?? '';
		$candidate['u_email'] = $_POST['u_email'] ?? '';
		$candidate['u_pass'] = $_POST['u_pass'] ?? '';
		$candidate['u_status'] = 2;
		$candidate['u_active'] = 1;

		$result = candidate_sign_up($candidate);
		if ($result === true) {
			$new_id = mysqli_insert_id($db);
			// Creating Session
			$email = $candidate['u_email'];
			$user = find_user_by_email($email);
			log_in_user($user);
			$_SESSION['message'] = 'You have successfully created an account.';
			redirect_to('c_resume.php');
		} else {
			$errors = $result;
		}

	}

	if (isset($_POST['submit2'])) {

		$company = [];
		$company['u_fname'] = $_POST['com_fname'] ?? '';
		$company['u_email'] = $_POST['com_email'] ?? '';
		$company['u_pass'] = $_POST['com_pass'] ?? '';
		$company['u_status'] = 3;
		$company['u_active'] = 1;

		$result = company_sign_up($company);
		if ($result === true) {
			$new_id = mysqli_insert_id($db);

				// Creating Session
			$email = $company['u_email'];
			$user = find_user_by_email($email);
			log_in_user($user);

			$_SESSION['message'] = 'You have successfully created an account.';
			redirect_to('add_company.php');
		} else {
			$errors = $result;
		}

	}

} else {
	$candidate = [];
	$candidate['u_fname'] = '';
	$candidate['u_email'] = '';
	$candidate['u_pass'] = '';
	$candidate['u_status'] = '';
	$candidate['u_active'] = '';

}

		// Code ended Here


?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div class="page_banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="banner-heading">Sign Up</div>    
			</div>  
		</div>
	</div>
</div>
<main id="maincontent">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="page-tab">
					<?php if (!empty($errors)) {echo display_errors($errors);} ?>
					<?php // echo display_errors($errors); ?>
					<div id="form">
						<div id="userform">
							<ul class="nav nav-tabs nav-justified" role="tablist">
								<li class="active border-right"><a href="#candidate"  role="tab" data-toggle="tab">Candidate</a></li>
								<li><a href="#company" role="tab" data-toggle="tab">Company</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane fade active in" id="candidate">
									<form id="candidate" method="post" action="">
										<div class="form-group">
											<label> Full Name</label>
											<input type="text" class="form-control" name="u_fname" id="fname" required data-validation-required-message="Please enter your Full Name">
											<div class="search_icon"><span class="ti-user"></span></div>
										</div>
										<div class="form-group">
											<label> E-mail</label>
											<input type="email" class="form-control" name="u_email" id="email" required data-validation-required-message="Please enter your email address.">
											<div class="search_icon"><span class="ti-email"></span></div>
										</div>
										<div class="form-group">
											<label> Password</label>
											<input type="password" class="form-control" name="u_pass" id="password" required data-validation-required-message="Please enter your password">
											<div class="search_icon"><span class="ti-pin"></span></div>
										</div>
										<div class="mrgn-30-top">
											<button type="submit" name="submit1" class="btn btn-larger btn-block"/>Sign Up</button>
										</div>
									</form>
								</div>
								<div class="tab-pane fade" id="company">
									<form id="company" method="post" action="">
										<div class="form-group">
											<label> Company Name</label>
											<input type="text" class="form-control" name="com_fname" id="fname" required data-validation-required-message="Please enter your company name">
											<div class="search_icon"><span class="ti-user"></span></div>
										</div>
										<div class="form-group">
											<label> Company E-mail</label>
											<input type="email" class="form-control" name="com_email" id="email" required data-validation-required-message="Please enter your company email.">
											<div class="search_icon"><span class="ti-email"></span></div>
										</div>
										<div class="form-group">
											<label> Password</label>
											<input type="password" class="form-control" name="com_pass" id="password" required data-validation-required-message="Please enter your password">
											<div class="search_icon"><span class="ti-pin"></span></div>
										</div>
										<div class="mrgn-30-top">
											<button type="submit" name="submit2" class="btn btn-larger btn-block"/>Sign Up</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 
	</div>
</main>


<?php include(SHARED_PATH . '/public_footer.php'); ?>
