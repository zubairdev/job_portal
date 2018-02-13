<?php require_once('private/initialize.php');

require_login();

if (isset($_GET['id'])) {

    $id = $_GET['id']; // user signup id
    // $for_redirect = $id;
    $session_id = $_SESSION['u_id'];

    $sql = "SELECT * FROM resume ";
    $sql .= "WHERE r_id='" . db_escape($db, $id) . "' ";
    $result = mysqli_query($db, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $resume_u_id = $row['u_id'];
    }

    // Now take out exact match result

    if ($session_id == $resume_u_id) {
        $resume = find_resume_by_id($id);
    } else {
        redirect_to(url_for('candidates.php'));
    } // if result not match

    /*echo 'URL ID: ' . $id . '<br>'; // from resume table
    echo 'Session ID: ' . $session_id . '<br>'; // from user table (Session)
    echo 'Resume U_ID: ' . $resume_u_id . '<br>'; // from resume table
    echo $resume_fname . '<br>';
    echo $resume_lname . '<br>';*/

} else {

    redirect_to(url_for('index.php'));
} // if $_GET['id'] is not set


include(SHARED_PATH . '/public_header.php');

?>

<div class="page_banner banner resume-banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="banner-heading">Resume Paage</div>    
                            </div>  
                        </div>
                    </div>
                </div>
                <main id="maincontent">
                    <section class="resume2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 author">
                                    <div class="panel-body">
                                        <a href="#"><img src="<?php echo 'images/candidates/' . $resume['r_photo']; ?>" alt="" class="img-responsive" /></a>
                                        <div class="job_title">
                                            <p>Hi, <?php echo $resume['r_fname']; ?></p>
                                           <!--  Hi, John Anderson  -->
                                            <a href="#"><?php echo $resume['r_title']; ?></a>
                                        </div>
                                        <div class="contact_details">
                                            <span><i class="fa fa-envelope"></i><a href="#"><?php echo $resume['r_email']; ?></a></span>
                                            <span><i class="fa fa-phone"></i>+92- <?php echo $resume['r_phn']; ?></span>
                                            <span><i class="fa fa-map-marker"></i><?php echo $resume['r_addr']; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="panel-body">
                                        <div class="page-heading"><h2>Basic Information</h2>
                                        <div class="contact_details col-md-6 p-l">
                                            <span><strong>Job Title:</strong> <?php echo $resume['r_job_title']; ?></span>
                                        </div>
                                        <div class="contact_details col-md-6 p-l">
                                            <span><strong>Job Type:</strong> <?php echo $resume['r_job_type']; ?></span>
                                        </div>
                                        <div class="contact_details col-md-6 p-l">
                                            <span><strong>Position:</strong> <?php echo $resume['r_postion']; ?></span>
                                        </div>
                                        <div class="contact_details col-md-6 p-l">
                                            <span><strong>Job Category:</strong> <?php echo $resume['r_jobcat']; ?></span>
                                        </div>
                                        <div class="contact_details col-md-6 p-l">
                                            <span><strong>Experience:</strong><?php echo $resume['r_yearExp']; ?></span>
                                        </div>
                                        <div class="contact_details col-md-6 p-l">
                                            <span><strong>Salary Package:</strong><?php echo $resume['r_exptsalry']; ?></span>
                                        </div>
                                        <div class="contact_details col-md-6 p-l">
                                            <span><strong>Skills: </strong><?php echo $resume['r_skills']; ?></span>
                                        </div>
                                        </div>
                                        
                                        <div class="job_title">About Me:</div>
                                        <div class="page-heading">
                                            <p><?php echo $resume['r_despt']; ?></p>
                                        <div class="borderfull-width"></div>
                                        </div>
                                        <div class="page-heading">
                                            <h2>Education Information</h2>
                                            <div class="contact_details col-md-4 p-l">
                                                <span><strong><?php echo $resume['r_inst1']; ?></strong></span>
                                                <span><?php echo $resume['r_edu1']; ?></span>
                                                <span><strong>Specilization:</strong> <?php echo $resume['r_splztn']; ?></span>
                                                <span><?php echo $resume['r_year1']; ?></span>
                                                <span><?php echo $resume['r_grade']; ?> Grade</span>
                                            </div>
                                            <div class="contact_details col-md-4 p-l">
                                                <span><strong><?php echo $resume['r_inst2']; ?></strong></span>
                                                <span><?php echo $resume['r_edu2']; ?></span>
                                                <span><?php echo $resume['r_year2']; ?></span>
                                                <span><?php echo $resume['r_mark2'] . ' %'; ?></span>
                                            </div>
                                            <div class="contact_details col-md-4 p-l">
                                                <span><strong><?php echo $resume['r_inst3']; ?></strong></span>
                                                <span><?php echo $resume['r_edu3']; ?></span>
                                                <span><?php echo $resume['r_year3']; ?></span>
                                                <span><?php echo $resume['r_mark3'] . ' %'; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>


<?php include(SHARED_PATH . '/public_footer.php'); ?>
