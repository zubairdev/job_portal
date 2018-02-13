<?php

function url_for($script_path) {
  // add the leading '/' if not present
	if($script_path[0] != '/') {
		$script_path = "/" . $script_path;
	}
	return WWW_ROOT . $script_path;
}

function http_check($url_path='') {

	if (substr($url_path, 0, 4) === 'http') {
		// Do nothing
	} else {
		$url_path = 'http://' . $url_path;
	}
	return $url_path;
}

function u($string="") {
	return urlencode($string);
}

function raw_u($string="") {
	return rawurldecode($string);
}

function h($string="") {
	htmlspecialchars($string);
}

function redirect_to($location) {
	header("Location: " . $location);
	exit;
}

function is_post_request() {
	return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
	return $_SERVER['REQUEST_METHOD'] == 'GET';
}

function get_and_clear_session_message() {
  if(isset($_SESSION['message']) && $_SESSION['message'] != '') {
    $msg = $_SESSION['message'];
    unset($_SESSION['message']);
    return $msg;
  }
}

function display_session_message() {
  $msg = get_and_clear_session_message();
  if(!is_blank($msg)) {
    return "<div id='message' class='alert alert-success'>" . $msg . "</div>";
  }
}

?>