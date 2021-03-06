<?php 
function find_user_by_id($session_id) {
    global $db;

    $sql = "SELECT * FROM user ";
    $sql .= "WHERE u_id='" . db_escape($db, $session_id) . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $user = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $user; // returns an assoc. array

}

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

function update_resume_by_id($resume) {
    global $db;

    $sql = "UPDATE resume SET ";
    $sql .= "r_photo='" . db_escape($db, $resume['photo']) . "', ";
    // $sql .= "r_photo='" . db_escape($db, $photo) . "', ";
    $sql .= "r_fname='" . db_escape($db, $resume['r_fname']) . "', ";
    $sql .= "r_lname='" . db_escape($db, $resume['r_lname']) . "', ";
    $sql .= "r_title='" . db_escape($db, $resume['r_title']) . "', ";
    $sql .= "r_email='" . db_escape($db, $resume['r_email']) . "', ";
    $sql .= "r_phn='" . db_escape($db, $resume['r_phn']) . "', ";
    $sql .= "r_dob='" . db_escape($db, $resume['r_dob']) . "', ";
    $sql .= "r_addr='" . db_escape($db, $resume['r_addr']) . "', ";
    $sql .= "r_job_title='" . db_escape($db, $resume['r_job_title']) . "', ";
    $sql .= "r_job_type='" . db_escape($db, $resume['r_job_type']) . "', ";
    $sql .= "r_postion='" . db_escape($db, $resume['r_postion']) . "', ";
    $sql .= "r_yearExp='" . db_escape($db, $resume['r_yearExp']) . "', ";
    $sql .= "r_jobcat='" . db_escape($db, $resume['r_jobcat']) . "', ";
    $sql .= "r_exptsalry='" . db_escape($db, $resume['r_exptsalry']) . "', ";
    $sql .= "r_skills='" . db_escape($db, $resume['r_skills']) . "', ";
    $sql .= "r_despt='" . db_escape($db, $resume['r_despt']) . "', ";
    $sql .= "r_edu1='" . db_escape($db, $resume['r_edu1']) . "', ";
    $sql .= "r_splztn='" . db_escape($db, $resume['r_splztn']) . "', ";
    $sql .= "r_inst1='" . db_escape($db, $resume['r_inst1']) . "', ";
    $sql .= "r_year1='" . db_escape($db, $resume['r_year1']) . "', ";
    $sql .= "r_grade='" . db_escape($db, $resume['r_grade']) . "', ";
    $sql .= "r_mark1='" . db_escape($db, $resume['r_mark1']) . "', ";
    $sql .= "r_inst2='" . db_escape($db, $resume['r_inst2']) . "', ";
    $sql .= "r_edu2='" . db_escape($db, $resume['r_edu2']) . "', ";
    $sql .= "r_mark2='" . db_escape($db, $resume['r_mark2']) . "', ";
    $sql .= "r_year2='" . db_escape($db, $resume['r_year2']) . "', ";
    $sql .= "r_inst3='" . db_escape($db, $resume['r_inst3']) . "', ";
    $sql .= "r_edu3='" . db_escape($db, $resume['r_edu3']) . "', ";
    $sql .= "r_mark3='" . db_escape($db, $resume['r_mark3']) . "', ";
    $sql .= "r_year3='" . db_escape($db, $resume['r_year3']) . "' ";
    $sql .= "WHERE r_id='" . db_escape($db, $resume['id']) . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);
    // For UPDATE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // UPDATE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
}

function validate_user($user) {

    $password_required = $options['password_required'] ?? true;

    if(is_blank($user['u_fname'])) {
      $errors[] = "Full name cannot be blank.";
    } elseif (!has_length($user['u_fname'], array('min' => 2, 'max' => 255))) {
      $errors[] = "Full name must be between 2 and 255 characters.";
    }

    if(is_blank($user['u_email'])) {
      $errors[] = "Email cannot be blank.";
    } elseif (!has_length($user['u_email'], array('max' => 255))) {
      $errors[] = "Email must be less than 255 characters.";
    } elseif (!has_valid_email_format($user['u_email'])) {
      $errors[] = "Email must be a valid format.";
    }

    if(is_blank($user['u_email'])) {
      $errors[] = "Email cannot be blank.";
    } elseif (!has_unique_email($user['u_email'], $user['u_id'] ?? 0)) {
      $errors[] = "Email must be unique. Try another.";
    }

    if($password_required) {
      if(is_blank($user['u_pass'])) {
        $errors[] = "Password cannot be blank.";
      } elseif (!has_length($user['u_pass'], array('min' => 12))) {
        $errors[] = "Password must contain 12 or more characters";
      } elseif (!preg_match('/[A-Z]/', $user['u_pass'])) {
        $errors[] = "Password must contain at least 1 uppercase letter";
      } elseif (!preg_match('/[a-z]/', $user['u_pass'])) {
        $errors[] = "Password must contain at least 1 lowercase letter";
      } elseif (!preg_match('/[0-9]/', $user['u_pass'])) {
        $errors[] = "Password must contain at least 1 number";
      } elseif (!preg_match('/[^A-Za-z0-9\s]/', $user['u_pass'])) {
        $errors[] = "Password must contain at least 1 symbol";
      }

    }

    return $errors;
}

function candidate_sign_up($candidate) {
	global $db;

    $user = $candidate;
    $errors = validate_user($user);
    if (!empty($errors)) {
      return $errors;
    }

	$hashed_password = password_hash($candidate['u_pass'], PASSWORD_BCRYPT);

	$sql = "INSERT INTO user ";
	$sql .= "(u_name, u_pass, u_email, u_status, u_active) ";
	$sql .= "VALUES (";
	$sql .= "'" . db_escape($db, $candidate['u_fname']) . "',";
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

    $user = $company;
    $errors = validate_user($user);
    if (!empty($errors)) {
      return $errors;
    }
    
	$hashed_password = password_hash($company['u_pass'], PASSWORD_BCRYPT);

	$sql = "INSERT INTO user ";
	$sql .= "(u_name, u_pass, u_email, u_status, u_active) ";
	$sql .= "VALUES (";
	$sql .= "'" . db_escape($db, $company['u_fname']) . "',";
	$sql .= "'" . db_escape($db, $hashed_password) . "',";
	$sql .= "'" . db_escape($db, $company['u_email']) . "',";
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

// function find_all_user() {
//     global $db;

//     $sql = "SELECT * FROM user";
//     $result = mysqli_query($db, $sql);
//     confirm_result_set($result);
//     $user = mysqli_fetch_assoc($result);
//     mysqli_free_result($result);

//     return $user;
// }

function update_user_pass_by_id($confirm_pass, $id) {
    global $db;

    $sql = "UPDATE user SET ";
    $sql .= "u_pass='" . db_escape($db, $confirm_pass) . "', ";
    $sql .= "WHERE u_id='" . db_escape($db, $id) . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);

    if($result) {
      return true;
    } else {
      // UPDATE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
}

function insert_company($company) {
    global $db;

    $sql = "INSERT INTO company ";
    $sql .= "(user_id, c_name, c_email, c_address, c_phone, c_web, photo, c_fb, c_twitter, c_linkedin, c_gplus,  c_business, c_wwd) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $company['user_id']) . "',";
     $sql .= "'" . db_escape($db, $company['c_name']) . "',";
      $sql .= "'" . db_escape($db, $company['c_email']) . "',";
    $sql .= "'" . db_escape($db, $company['c_address']) . "',";
    $sql .= "'" . db_escape($db, $company['c_phone']) . "',";
    $sql .= "'" . db_escape($db, $company['c_web']) . "',";
    $sql .= "'" . db_escape($db, $company['photo']) . "',";
    $sql .= "'" . db_escape($db, $company['c_fb']) . "',";
    $sql .= "'" . db_escape($db, $company['c_twitter']) . "',";
    $sql .= "'" . db_escape($db, $company['c_linkedin']) . "',";
    $sql .= "'" . db_escape($db, $company['c_gplus']) . "',";
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

function find_company_by_id($company_id) {
    global $db;

    $sql = "SELECT * FROM company ";
    $sql .= "WHERE c_id='" . db_escape($db, $company_id) . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $company = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $company; // returns an assoc. array

}

function update_company_by_id($company) {
    global $db;

    $sql = "UPDATE company SET ";
    $sql .= "c_name='" . db_escape($db, $company['c_name']) . "', ";
    $sql .= "c_address='" . db_escape($db, $company['c_address']) . "', ";
    $sql .= "c_email='" . db_escape($db, $company['c_email']) . "', ";
    $sql .= "c_phone='" . db_escape($db, $company['c_phone']) . "', ";
    $sql .= "c_web='" . db_escape($db, $company['c_web']) . "', ";
    $sql .= "photo='" . db_escape($db, $company['photo']) . "', ";
    $sql .= "c_fb='" . db_escape($db, $company['c_fb']) . "', ";
    $sql .= "c_twitter='" . db_escape($db, $company['c_twitter']) . "', ";
    $sql .= "c_linkedin='" . db_escape($db, $company['c_linkedin']) . "', ";
    $sql .= "c_gplus='" . db_escape($db, $company['c_gplus']) . "', ";
    $sql .= "c_description='" . db_escape($db, $company['c_description']) . "', ";
    $sql .= "c_business='" . db_escape($db, $company['c_business']) . "', ";
    $sql .= "c_wwd='" . db_escape($db, $company['c_wwd']) . "' ";
    $sql .= "WHERE c_id='" . db_escape($db, $company['id']) . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);
    // For UPDATE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // UPDATE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
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

function insert_job($job) {
    global $db;

    $sql = "INSERT INTO job ";
    $sql .= "(company_id, j_title, j_type, j_category, j_minexp, j_maxexp, j_minsalary, j_maxsalary, j_location, j_skills, j_desp, j_resp, j_req, j_date) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $job['company_id']). "',";
    $sql .= "'" . db_escape($db, $job['j_title']) . "',";
    $sql .= "'" . db_escape($db, $job['j_type']) . "',";
    $sql .= "'" . db_escape($db, $job['j_category']) . "',";
    $sql .= "'" . db_escape($db, $job['j_minexp']) . "',";
    $sql .= "'" . db_escape($db, $job['j_maxexp']) . "',";
    $sql .= "'" . db_escape($db, $job['j_minsalary']) . "',";
    $sql .= "'" . db_escape($db, $job['j_maxsalary']) . "',";
    $sql .= "'" . db_escape($db, $job['j_location']) . "',";
    $sql .= "'" . db_escape($db, $job['j_skills']) . "',";
    $sql .= "'" . db_escape($db, $job['j_desp']) . "',";
    $sql .= "'" . db_escape($db, $job['j_resp']) . "',";
    $sql .= "'" . db_escape($db, $job['j_desp']) . "',";
    $sql .= "  NOW()" ;
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

function find_job_by_u_id($id) {
    global $db;

    $sql = "SELECT * FROM job,company ";
    $sql .= "WHERE job.company_id = company.c_id ";
    $sql .= "AND j_id ='" . db_escape($db, $id) . "' ";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $resume = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $resume; // returns an assoc. array
}



function find_all_job() {
    global $db;

    $sql = "SELECT * FROM job, company WHERE job.company_id = company.c_id";
    $result = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['j_id'];
        $title = $row['j_title'];
        $category = $row['j_category'];
        $type = $row['j_type'];
        $minslary = $row['j_minsalary'];
        $maxsalry = $row['j_maxsalary'];
        $desp = substr($row['j_desp'], 0, 210);
        $photo = $row['photo'];
        $skills = $row['j_skills'];
        $location = $row['j_location'];
        
        echo "    <div class='sorting_content'>
             <div class='tab-image img-res'><img src='images/company/logo/$photo' alt='' class='img-responsive' style = 'height: 100px;'></div>
             <div class='overflow'>
                 <div class='text-shorting'>
                     <h1 class='col-md-6 col-sm-7'><a href='job_detail.php?id=$id'>$title</a><p>$category</p> </h1>
                     <div class='work-time text-center col-md-2'>$type</div>
                 </div>
                 <div class='bottom_text'>
                    <div class='contact_details col-md-4 col-sm-4'>
                        <span><strong><i class='fa fa-money'></i></strong> $minslary ' - '
                        $maxsalry</span>
                    </div>
                    <div class='contact_details col-md-6 col-sm-6'>
                        <span><strong>Skills:</strong> $skills</span>
                    </div>
                    <div class='contact_details col-md-2 col-sm-2'>
                        <span><strong><i class='fa fa-map-marker'></i></strong> $location</span>
                    </div>
                    <p class='col-md-12'> $desp</p>
                </div>
            </div>
        </div>";
    }
}

function find_job_through_search() {
    global $db;
    if(isset($_POST['sub_search'])){

        $search = $_POST['search'];
        $city = $_POST['city'];
        $sql = "SELECT * FROM job,company WHERE company.c_id = job.company_id AND job.j_location = '$city' AND job.j_title LIKE '%$search%'";
        $result = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($result)) {

        $title = $row['j_title'];
        $category = $row['j_category'];
        $type = $row['j_type'];
        $minslary = $row['j_minsalary'];
        $maxsalry = $row['j_maxsalary'];
        $desp = substr($row['j_desp'], 0, 210);
        $skills = $row['j_skills'];
        $place = $row['j_location'];
        $photo = $row['photo'];
        
        echo "    <div class='sorting_content'>
             <div class='tab-image img-res'><img src='images/company/logo/$photo' alt='' style = 'height: 100px;' class='img-responsive'></div>
             <div class='overflow'>
                 <div class='text-shorting'>
                     <h1 class='col-md-6 col-sm-7'><a href='job_detail.php'>$title</a><p>$category</p> </h1>
                     <div class='work-time text-center col-md-2'>$type</div>
                 </div>
                 <div class='bottom_text'>
                    <div class='contact_details col-md-4 col-sm-4'>
                        <span><strong>Sallery: <i class='fa fa-money'></i></strong> $minslary ' - '$maxsalry</span>
                    </div>
                    <div class='contact_details col-md-5 col-sm-5'>
                        <span><strong>Skills:</strong> $skills</span>
                    </div>
                     <div class='contact_details col-md-3 col-sm-3'>
                        <span><strong>Location:</strong> $place</span>
                    </div>
                    <p class='col-md-12'> $desp</p>
                </div>
            </div>
        </div>";
    }
        }

}

function view_all_jobs_assoc() {
    global $db;

    $sql = "SELECT * FROM job,company WHERE company.c_id = job.company_id LIMIT 7";
    $run = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($run)) {
        $title = $row['j_title'];
        $category = $row['j_category'];
        $type = $row['j_type'];
        $place = $row['j_location'];
        $photo = $row['photo'];
        $id = $row['j_id'];

        echo "<tr>
                <td><div class='tab-image img-res'><img src='images/company/logo/$photo' alt= '' class='img-responsive' style = 'height: 100px;' /></div>
                <h1> $title <p>$category</p></h1></td>
                <td class='work-time'>$type</td>
                <td><span class='ti-location-pin'></span> $place, Pakistan</td>
                <td><a href='job_detail.php?id=$id' class='table-btn-default'>View Job</a></td>
            </tr>";

    }
}

function view_all_jobs_category($cat, $id1) {
    global $db;

    $sql = "SELECT * FROM job,company WHERE company.c_id = job.company_id AND j_category = '$cat' LIMIT 5";
    $run = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_assoc($run)) {
        if ($row['j_id'] == $id1) { continue; }
        else {
        $title = $row['j_title'];
        $category = $row['j_category'];
        $type = $row['j_type'];
        $place = $row['j_location'];
        $photo = $row['photo'];
        $idz = $row['j_id'];

        echo "<tr>
                <td><div class='tab-image img-res'><img src='images/company/logo/$photo' alt= '' class='img-responsive' style = 'height: 100px;' /></div>
                <h1> $title <p>$category</p></h1></td>
                <td class='work-time'>$type</td>
                <td><span class='ti-location-pin'></span> $place, Pakistan</td>
                <td><a href='job_detail.php?id=$idz' class='table-btn-default'>View Job</a></td>
            </tr>";

    }
}
}

function view_jobs_of_company($id) {
    global $db;
    $sql = "SELECT * FROM job WHERE company_id = $id";
    $run = mysqli_query($db, $sql);
    while($row = mysqli_fetch_array($run)){
        $name = $row['j_title'];
        $title = $row['j_category'];
        $type = $row['j_type'];
        echo "
        <tr>
        <td><h1>$name <p>$title</p></h1></td>
        <td class='work-time'>$type</td>
        <td><span><i class='fa fa-pencil'></i></span> <span><i class='fa fa-trash'></i></span></td>
        </tr>";

    }
}

function view_all_candidates() {
    global $db;

    $sql = "SELECT * FROM resume";
    $run = mysqli_query($db, $sql);
    while($row =  mysqli_fetch_array($run)){
        $fname = $row['r_fname'];
        $lname = $row['r_lname'];
        $title = $row['r_title'];
        $skills = $row['r_skills'];
        $about = $row['r_despt'];
        $photo = $row['r_photo'];
        echo "
        <div class='sorting_content'>
            <div class='tab-image img-res'><img src='images/candidates/$photo' alt='' class='img-responsive'></div>
                    <div class='overflow'>
                        <div class='text-shorting'>
                                <h1>$fname $lname</h1>
                                <ul class='unstyled'>
                                    <li>$title</li>
                                </ul>
                        </div>
                        <div class='bottom_text'>
                            <div class='contact_details col-md-12 col-sm-12 p-l'>
                                <span><strong>Skills: </strong > $skills</span>
                            </div>
                                <p class='col-md-12 p-l'>$about</p>
                            </div>
                        </div>
        </div>";
    }

}
?>