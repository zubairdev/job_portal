<?php require_once('private/initialize.php');

$errors = [];
$email = '';
$password = '';

if(is_post_request()) {

  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';

  // if there were no errors, try to login
  if(empty($errors)) {
    // Using one variable ensures that msg is the same
    // $login_failure_msg = "Log in was unsuccessful.";

    $user = find_user_by_email($email);
    if($user) {

      if(password_verify($password, $user['u_pass'])) {
        // password matches
        log_in_user($user);
        redirect_to('index.php');
      } else {
        // username found, but password does not match
        // $errors[] = $login_failure_msg;
        echo "<script>alert('login unsucessful')</script>";
      }

    } else {
      // no username found
      // $errors[] = $login_failure_msg;
      echo "<script>alert('login unsucessfulllllllllll')</script>";
    }

  }

}

// if(isset($_SESSION['username'])) {
//   header("location: index.php");
// }

// if(isset($_POST['login_btn'])) {
// $email = mysqli_real_escape_string($db, $_POST['email']);
// $password = mysqli_real_escape_string($db, md5($_POST['password']));
//   $user = "SELECT * FROM user WHERE u_email ='$email' AND u_pass ='$password'";
//   $run_user = mysqli_query($db, $user);
//   $check_user = mysqli_num_rows($run_user);
             
//   if($check_user==0) {
//     echo "<script>alert('Your Emial and Password is Wrong!')</script>";
               
//   }
//     else {
//       $row= mysqli_fetch_array($run_user);
//       $name =$row['u_name'];
//       $_SESSION['username'] = $name;
//       header("location: index.php");
//     }
// }


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
								<li class="active border-right"><a href="#login"  role="tab" data-toggle="tab">Log in</a></li>
								<li><a href="signup.php">Sign up</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane fade active in" id="login">
									<form id="login" method="POST" action="login.php">
										<div class="form-group">
											<label> E-mail</label>
											<input type="email" name="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." autocomplete="off">
											<div class="search_icon"><span class="ti-user"></span></div>
										</div>
										<div class="form-group">
											<label> Password</label>
											<input type="password" name="password" class="form-control" id="password" required data-validation-required-message="Please enter your password" autocomplete="off">
											<div class="search_icon"><span class="ti-pin"></span></div>
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
