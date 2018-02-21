<?php

function log_in_user($user) {

	session_regenerate_id();
	$_SESSION['u_id'] = $user['u_id'];
	$_SESSION['last_login'] = time();
	$_SESSION['u_name'] = $user['u_name'];
	$_SESSION['u_email'] = $user['u_email'];
	return true;
}

function log_out_user() {
	unset($_SESSION['u_id']);
	unset($_SESSION['last_login']);
	unset($_SESSION['u_name']);
	unset($_SESSION['u_email']);

	return true;
}

function is_logged_in() {
    // Having a admin_id in the session serves a dual-purpose:
    // - Its presence indicates the admin is logged in.
    // - Its value tells which admin for looking up their record.
    return isset($_SESSION['u_id']);
}

  // Call require_login() at the top of any page which needs to
  // require a valid login before granting acccess to the page.
function require_login() {
    if(!is_logged_in()) {
      	redirect_to(url_for('login.php'));
    } else {
      // Do nothing, let the rest of the page proceed
    }
}

?>