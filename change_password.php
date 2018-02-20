<?php require_once('private/initialize.php');

// if (isset($_SESSION['u_id'])) {
// 	redirect_to(url_for('index.php'));
// }
require_login();

if (!isset($_GET['id'])) {
	redirect_to(url_for('index.php'));
}

$id = $_GET['id'];
$session_id = $_SESSION['u_id'];

// fetch $resume_u_id to match session_id and resume_u_id
$resume_set = find_resume_by_id($id);
$resume_u_id = $resume_set['u_id'];    

// Now take out exact match result

if ($session_id != $resume_u_id) {
    redirect_to(url_for('/candidates.php'));
}

echo "Session Id = " .$id;
echo "User SESSION id = " .$session_id;

if(isset($_POST['login_btn'])){

	$password = $_POST['password'];
	$confirm = $_POST['confirm_pass'];
	$old = $_POST['prev_pass'];

	if($password == $confirm){
		$hashed_password = password_hash($confirm, PASSWORD_BCRYPT);
		$sql = "UPDATE user SET u_pass = '$hashed_password' WHERE u_id = $session_id ";
		$run = mysqli_query($db, $sql);
		if($run){
			echo "Successfull";
		}else {
			echo "ERROR: " . $sql;
		}
	}
}

?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div class="page_banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="banner-heading">Login / Sign Up</div>
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
								<li class="active border-right"><a href="#login"  role="tab" data-toggle="tab">Change Password</a></li>
								<!-- <li><a href="signup.php">Sign up</a></li> -->
							</ul>
							<div class="tab-content">
								<div class="tab-pane fade active in" id="login">
									<form id="login" method="POST">
										<div class="form-group">
											<label> Current Password</label>
											<input type="password" name="prev_pass" class="form-control" required data-validation-required-message="Please enter your Current Password." autocomplete="off">
											<div class="search_icon"><span class="ti-pin"></span></div>
										</div>
										<div class="form-group">
											<label> New Password</label>
											<input type="password" name="password" class="form-control" id="password" required data-validation-required-message="Please enter your New password" autocomplete="off">
											<div class="search_icon"><span class="ti-lock"></span></div>
										</div>
										<div class="form-group">
											<label> Confirm Password</label>
											<input type="password" name="confirm_pass" class="form-control" id="password" required data-validation-required-message="Please confirm password" autocomplete="off">
											<div class="search_icon"><span class="ti-lock"></span></div>
										</div>
										<div class="mrgn-30-top">
											<button type="submit" name="login_btn" class="btn btn-larger btn-block"/>Log in</button>
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
