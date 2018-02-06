<?php require_once('private/initialize.php'); ?>
<?php
$msg = "";

if (isset($_POST['submit1'])) {
	$u_fname = $_POST['u_fname'];
	$u_email = $_POST['u_email'];
	$u_name = $_POST['u_name'];
	$u_pass = md5($_POST['u_pass']);
	$u_status = 2;
	$u_active = 0;

	$sql = "INSERT INTO user (u_name, u_username, u_pass, u_email, u_status, u_active) VALUES ('$u_fname','$u_name','$u_pass','$u_email','$u_status','$u_active')";
	$run = mysqli_query($con, $sql);

	if ($run) {
		$msg = "<div class='alert alert-success'>
  <strong>$u_fname!</strong> You are Signup sucessfully.
</div>";
header('refresh: 5; url=create_resume.php');

	}
	else{
		$msg ="<div class='alert alert-danger'> <strong>MySQL Error!</strong>". mysqli_error($con) ."</div>";
	}
}

if (isset($_POST['submit2'])) {
	$u_fname = $_POST['com_fname'];
	$u_email = $_POST['com_email'];
	$u_name = $_POST['com_name'];
	$u_pass = md5($_POST['com_pass']);
	$u_status = 3;
	$u_active = 0;

	$sql = "INSERT INTO user (u_name, u_username, u_pass, u_email, u_status, u_active) VALUES ('$u_fname','$u_name','$u_pass','$u_email','$u_status','$u_active')";
	$run = mysqli_query($con, $sql);

	if ($run) {
		$msg = "<div class='alert alert-success'>
  <strong>$u_fname! </strong>Your Company Signup sucessfully.
</div>";
header('refresh: 5; url=add_company.php');

	}
	else{
		$msg ="<div class='alert alert-danger'> <strong>MySQL Error!</strong>". mysqli_error($con) ."</div>";
	}
}

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
					<div id="form">
						<div id="userform">
							<ul class="nav nav-tabs nav-justified" role="tablist">
								<li class="active border-right"><a href="#candidate"  role="tab" data-toggle="tab">Candidate</a></li>
								<li><a href="#company" role="tab" data-toggle="tab">Company</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane fade active in" id="candidate">
									<?php echo $msg; ?>
									<form id="candidate" method="post" action="">
										<div class="form-group">
											<label> Full Name</label>
											<input type="text" class="form-control" name="u_fname" id="fname" required data-validation-required-message="Please enter your password" autocomplete="off">
											<div class="search_icon"><span class="ti-user"></span></div>
										</div>
										<div class="form-group">
											<label> E-mail</label>
											<input type="email" class="form-control" name="u_email" id="email" required data-validation-required-message="Please enter your email address." autocomplete="off">
											<div class="search_icon"><span class="ti-email"></span></div>
										</div>
										<div class="form-group">
											<label> Username</label>
											<input type="text" class="form-control" name="u_name" id="uname" required data-validation-required-message="Please enter your password" autocomplete="off">
											<div class="search_icon"><span class="ti-user"></span></div>
										</div>
										<div class="form-group">
											<label> Password</label>
											<input type="password" class="form-control" name="u_pass" id="password" required data-validation-required-message="Please enter your password" autocomplete="off">
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
											<input type="text" class="form-control" name="com_fname" id="fname" required data-validation-required-message="Please enter your password" autocomplete="off">
											<div class="search_icon"><span class="ti-user"></span></div>
										</div>
										<div class="form-group">
											<label> Company E-mail</label>
											<input type="email" class="form-control" name="com_email" id="email" required data-validation-required-message="Please enter your email address." autocomplete="off">
											<div class="search_icon"><span class="ti-email"></span></div>
										</div>
										<div class="form-group">
											<label> Username</label>
											<input type="text" class="form-control" name="com_name" id="uname" required data-validation-required-message="Please enter your password" autocomplete="off">
											<div class="search_icon"><span class="ti-user"></span></div>
										</div>
										<div class="form-group">
											<label> Password</label>
											<input type="password" class="form-control" name="com_pass" id="password" required data-validation-required-message="Please enter your password" autocomplete="off">
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
