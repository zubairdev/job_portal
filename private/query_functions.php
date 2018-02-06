<?php

function insert_candidate($candidate) {
	global $db;

	$hashed_password = password_hash($candidate['u_pass'], PASSWORD_BCRYPT);

	$sql = "INSERT INTO user ";
	$sql .= "(u_name, u_username, u_pass, u_email, u_status, u_active) ";
	$sql .= "VALUES (";
	$sql .= "'" . db_escape($db, $candidate['u_fname']) . "',";
	$sql .= "'" . db_escape($db, $candidate['u_name']) . "',";
	$sql .= "'" . db_escape($db, $hashed_password) . "',";
	$sql .= "'" . db_escape($db, $candidate['u_email']) . "',";
	$sql .= "'" . db_escape($db, $candidate['u_status']) . "',";
	$sql .= "'" . db_escape($db, $candidate['u_active']) . "'";
	$sql .= ")";

	$result = mysqli_query($db, $sql);
	if ($result) {
		return true;
	} else {
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}
}

?>