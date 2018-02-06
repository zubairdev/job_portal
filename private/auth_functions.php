<?php

function log_in_admin($user) {

	session_regenerate_id();
	$_SESSION['u_id'] = $user['u_id'];
	$_SESSION['last_login'] = time();
	$_SESSION['u_username'] = $user['u_username'];
	$_SESSION['u_email'] = $user['u_email'];
	return true;
}

function log_out_user() {
	unset($_SESSION['u_id']);
	unset($_SESSION['last_login']);
	unset($_SESSION['u_username']);
	unset($_SESSION['u_email']);

	return true;
}

?>