<?php

function insert_resume($resume) {
	global $db;
    
    $sql = "INSERT INTO  resume";
    $sql .= "(u_id, r_fname, r_lname, r_title, r_email, r_phn, r_dob, r_addr, r_photo, r_job_title, r_job_type, r_postion, r_yearExp, r_jobcat, r_exptsalry, r_skills, r_despt, r_edu1, r_splztn, r_inst1, r_year1, r_grade, r_mark1, r_inst2, r_edu2, r_mark2, r_year2, r_inst3, r_edu3, r_mark3, r_year3) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $resume['u_id']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_fname']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_lname']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_title']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_email']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_phn']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_dob']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_addr']) . "',";
    $sql .= "'" . db_escape($db, $resume['photo']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_job_title']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_job_type']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_postion']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_yearExp']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_jobcat']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_exptsalry']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_skills']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_despt']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_edu1']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_splztn']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_inst1']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_year1']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_grade']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_mark1']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_inst2']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_edu2']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_mark2']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_year2']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_inst3']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_edu3']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_mark3']) . "',";
    $sql .= "'" . db_escape($db, $resume['r_year3']) . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    // For INSERT statements, $result is true/false
    if($result) {
      return true;
    } else {
      // INSERT failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
}

function find_resume_by_id($id) {
    global $db;

    $sql = "SELECT * FROM resume ";
    $sql .= "WHERE r_id ='" . db_escape($db, $id) . "' ";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $resume = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $resume; // returns an assoc. array
}

function find_resume_by_u_id($id) {
    global $db;

    $sql = "SELECT * FROM resume ";
    $sql .= "WHERE u_id ='" . db_escape($db, $id) . "' ";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $resume = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $resume; // returns an assoc. array
}

function candidate_sign_up($candidate) {
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

function company_sign_up($company) {
	global $db;

	$hashed_password = password_hash($company['com_pass'], PASSWORD_BCRYPT);

	$sql = "INSERT INTO user ";
	$sql .= "(u_name, u_username, u_pass, u_email, u_status, u_active) ";
	$sql .= "VALUES (";
	$sql .= "'" . db_escape($db, $company['com_fname']) . "',";
	$sql .= "'" . db_escape($db, $company['com_name']) . "',";
	$sql .= "'" . db_escape($db, $hashed_password) . "',";
	$sql .= "'" . db_escape($db, $company['com_email']) . "',";
	$sql .= "'" . db_escape($db, $company['u_status']) . "',";
	$sql .= "'" . db_escape($db, $company['u_active']) . "'";
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

function find_user_by_email($email) {
	global $db;

    $sql = "SELECT * FROM user ";
    $sql .= "WHERE u_email='" . db_escape($db, $email) . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $user = mysqli_fetch_assoc($result); // find first
    mysqli_free_result($result);
    return $user; // returns an assoc. array
}

function insert_company($company) {
    global $db;

    $sql = "INSERT INTO company ";
    $sql .= "(user_id, c_name, c_address, c_email, c_phone, c_web, photo, c_fb, c_twitter, c_linkedin, c_gplus, c_description, c_business, c_wwd) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $company['user_id']) . "',";
    $sql .= "'" . db_escape($db, $company['c_name']) . "',";
    $sql .= "'" . db_escape($db, $company['c_address']) . "',";
    $sql .= "'" . db_escape($db, $company['c_email']) . "',";
    $sql .= "'" . db_escape($db, $company['c_phone']) . "',";
    $sql .= "'" . db_escape($db, $company['c_web']) . "',";
    $sql .= "'" . db_escape($db, $company['photo']) . "',";
    $sql .= "'" . db_escape($db, $company['c_fb']) . "',";
    $sql .= "'" . db_escape($db, $company['c_twitter']) . "',";
    $sql .= "'" . db_escape($db, $company['c_linkedin']) . "',";
    $sql .= "'" . db_escape($db, $company['c_gplus']) . "',";
    $sql .= "'" . db_escape($db, $company['c_description']) . "',";
    $sql .= "'" . db_escape($db, $company['c_business']) . "',";
    $sql .= "'" . db_escape($db, $company['c_wwd']) . "'";
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

function find_company_by_id($id) {
    global $db;

    $sql = "SELECT * FROM company ";
    $sql .= "WHERE c_id='" . db_escape($db, $id) . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $company = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $company; // returns an assoc. array

}

function find_company_by_user_id($id) {
    global $db;

    $sql = "SELECT * FROM company ";
    $sql .= "WHERE user_id='" . db_escape($db, $id) . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $company = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $company; // returns an assoc. array

}

function company_validation($session_id) {
    global $db;

    $sql = "SELECT * FROM company WHERE user_id = $session_id";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $company = mysqli_fetch_assoc($result);
    mysqli_free_result($result);

    return $company;
}

function find_all_user() {
    global $db;

    $sql = "SELECT * FROM user";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $user = mysqli_fetch_assoc($result);
    mysqli_free_result($result);

    return $user;
}


?>