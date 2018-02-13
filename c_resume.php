<?php require_once('private/initialize.php');

require_login();

include(SHARED_PATH . '/public_header.php');
	
	// usre.r_id and resume.u_id will be same
    $session_id = $_SESSION['u_id'];

    // candidate can create resume once
    $sql = "SELECT * FROM resume WHERE u_id = $session_id";
	$run = mysqli_query($db, $sql);
	$row = mysqli_fetch_array($run);
	$user_id = $row['r_id'];
	$check = $row['r_check'];
	echo "value: " . $check ."<br>";
	echo "Id of : " . $user_id;
	
	if($check == 'insert'){
		header("location: resume.php?id=$user_id ");
	} elseif ($check == 'empty') {
		header("location: post_job.php");
	}
	
if(is_post_request()) {

		$resume = [];
		
		$resume['u_id'] = $session_id ?? '';
		$resume['r_fname'] = $_POST['Fname'] ?? '';
		$resume['r_lname'] = $_POST['Lname'] ?? '';
		$resume['r_title'] = $_POST['title'] ?? '';
		$resume['r_email'] = $_POST['mail'] ?? '';
		$resume['r_phn'] = $_POST['phone'] ?? '';
		$resume['r_dob'] = $_POST['date'] ?? '';
		$resume['r_addr'] = $_POST['address'] ?? '';
		$resume['r_job_title'] = $_POST['jobtitle'] ?? '';
		$resume['r_job_type'] = $_POST['jobtype'] ?? '';
		$resume['r_postion'] = $_POST['position'] ?? '';
		$resume['r_yearExp'] = $_POST['exp'] ?? '';
		$resume['r_jobcat'] = $_POST['exp-jobcat'] ?? '';
		$resume['r_exptsalry'] = $_POST['salary'] ?? '';
		$resume['r_skills'] = $_POST['skills'] ?? '';
		$resume['r_despt'] = $_POST['editor1'] ?? '';
		$resume['r_edu1'] = $_POST['graduation'] ?? '';
		$resume['r_splztn'] = $_POST['splz'] ?? '';
		$resume['r_inst1'] = $_POST['Institute'] ?? '';
		$resume['r_year1'] = $_POST['year'] ?? '';
		$resume['r_grade'] = $_POST['grade'] ?? '';
		$resume['r_mark1'] = $_POST['marks'] ?? '';
		$resume['r_inst2'] = $_POST['oppinst'] ?? '';
		$resume['r_edu2'] = $_POST['oppedu'] ?? '';
		$resume['r_mark2'] = $_POST['oppmarks'] ?? '';
		$resume['r_year2'] = $_POST['oppyear1'] ?? '';
		$resume['r_inst3'] = $_POST['moreinst'] ?? '';
		$resume['r_edu3'] = $_POST['morecert'] ?? '';
		$resume['r_mark3'] = $_POST['moremarks'] ?? '';
		$resume['r_year3'] = $_POST['moreyear'] ?? ''; 
  		// Photo

		$photo = $_FILES['photo']['name'];
		$tmp_name= $_FILES['photo']['tmp_name'];
		$local_image = "images/candidates/";
		$upload=move_uploaded_file($tmp_name, $local_image . $photo);

		$resume['photo'] = $photo;


		$result = insert_resume($resume);
		if($result === true) {
			$new_id = mysqli_insert_id($db);
			$_SESSION['message'] = 'The resume was created successfully';
			redirect_to(url_for('resume.php?id=' . $new_id));
		} else {
			echo "Error: ";
		}

} else {

	$resume = [];
	$resume['r_fname'] = '';
	$resume['r_lname'] = '';
	$resume['r_title'] = '';
	$resume['r_email'] = '';
	$resume['r_phn'] = '';
	$resume['r_dob'] = '';
	$resume['r_addr'] = '';
	$resume['r_job_title'] = '';
	$resume['r_job_type'] = '';
	$resume['r_postion'] = '';
	$resume['r_yearExp'] = '';
	$resume['r_jobcat'] = '';
	$resume['r_exptsalry'] = '';
	$resume['r_skills'] = '';
	$resume['r_despt'] = '';
	$resume['r_edu1'] = '';
	$resume['r_splztn'] = '';
	$resume['r_inst1'] = '';
	$resume['r_year1'] = '';
	$resume['r_grade'] = '';
	$resume['r_mark1'] = '';
	$resume['r_inst2'] = '';
	$resume['r_edu2'] = '';
	$resume['r_mark2'] = '';
	$resume['r_year2'] = '';
	$resume['r_inst3'] = '';
	$resume['r_edu3'] = '';
	$resume['r_mark3'] = '';
	$resume['r_year3'] = '';
	$resume['r_photo'] = '';


}

?>

<div class="page_banner banner resume-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="banner-heading">Submit Resume</div>    
			</div>  
		</div>
	</div>
</div>
<main id="maincontent">
	<section class="resume">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h2>Create Your Resume</h2>
						<p>Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="panel-body">
						<div class="panel-heading">Contact Information</div>
						<hr>
						<form method="POST" enctype="multipart/form-data">
							<div class="form-group col-md-6 p-l">
								<label>Photo <span>(optional)</span></label>
								<input type="file" name="photo" class="form-control">
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Professional Title</label>
								<input type="text" name="title" class="form-control" placeholder="eg. Manager / Sr. / Jr." value="<?php echo h($resume['r_title']); ?>" />
							</div>
							<div class="form-group col-md-6 p-l">
								<label>First Name</label>
								<input type="text" name="Fname" class="form-control" placeholder="eg. Kevin" />
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Last name</label>
								<input type="text" name="Lname" class="form-control" placeholder="eg. Skoglund" />
							</div>
							<div class="form-group col-md-6 p-l">
								<label>Email</label>
								<input type="email" name="mail" class="form-control" placeholder="eg. kevin@domain.com" />
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Phone Number</label>
								<input type="text" name="phone" class="form-control" placeholder="eg. 321-1121122" />
							</div>
							<div class="form-group col-md-6 p-l">
								<label>Date Of Birth</label>
								<input type="date"  name="date" class="form-control" />
							</div>
							<div class="form-group col-md-6   p-r">
								<label>Address</label>
								<input type="text" name="address" class="form-control" />
							</div>
							<div class="borderfull-width"></div>
							<div class="panel-heading">Basic Information</div>
							<hr>
							<div class="form-group col-md-6 p-l">
								<label>Job Title</label>
								<input type="text" name="jobtitle" class="form-control" />
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Job Type</label>
								<input type="text" name="jobtype" class="form-control" />
							</div>
							<div class="form-group col-md-6 p-l">
								<label>Years of Experience</label>
								<input type="text" name="exp" class="form-control" />
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Position</label>
								<input type="text" name="position" class="form-control" />
							</div>
							<div class="form-group col-md-6 p-l">
								<label>Expected Job Category</label>
								<input type="text" name="exp-jobcat" class="form-control" />
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Expected Salary Package</label>
								<input type="text" class="form-control" name="salary" />
							</div>
							<div class="form-group col-md-12p-r">
								<label>Skills</label>
								<input type="text" class="form-control" placeholder="Skill, Skill1, Skill2, ..." name="skills" />
							</div>
							<div class="form-group col-md-12 p-l p-r">
								<label>Description About Yourself</label>
								<textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
							</div>
							<div class="borderfull-width"></div>
							<div class="panel-heading">Education Details</div>
							<hr>
							<div class="form-group col-md-6 p-l">
								<label>Basic / Graduation</label>
								<input type="text" name="graduation" class="form-control" placeholder="eg. Bachelor's of Computer Science" />
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Specialization</label>
								<input type="text" name="splz" class="form-control" />
							</div>
							<div class="form-group col-md-6 p-l">
								<label>University / Institute</label>
								<input type="text" class="form-control" name="Institute" placeholder="eg. University of Engineering and Technalogy" />
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Year</label>
								<input type="text" name="year" class="form-control" />
							</div>
							<div class="form-group col-md-6 p-l">
								<label>Grade</label>
								<input type="text" name="grade" class="form-control" placeholder="eg. A / A+ / B" />
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Marks</label>
								<input type="text" class="form-control" name="marks" placeholder="eg. 69%" />
							</div>
							<div class="row">
								<div class="col-md-12">
									<button type="button" class="btn btn-click" data-toggle="collapse" data-target="#demo"><i class="fa fa-plus-circle"></i>Add Class XII</button>
									<div id="demo" class="collapse">
										<div class="form-group col-md-6 p-l">
											<label>Institute Name</label>
											<input type="text" class="form-control" name="oppinst" />
										</div>
										<div class="form-group col-md-6 p-l">
											<label>Board / University</label>
											<input type="text" class="form-control" name="oppedu" />
										</div>
										<div class="form-group col-md-6 p-l">
											<label>Marks</label>
											<input type="text" class="form-control" name="oppmarks" />
										</div>
										<div class="form-group col-md-6 p-l">
											<label>Year</label>
											<input type="text" class="form-control" name="oppyear1" />
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<button type="button" class="btn btn-click" data-toggle="collapse" data-target="#demo2"><i class="fa fa-plus-circle"></i>Add More Certificate</button>
									<div id="demo2" class="collapse">
										<div class="form-group col-md-6 p-l">
											<label>Institute Name</label>
											<input type="text" class="form-control" name="moreinst" />
										</div>
										<div class="form-group col-md-6 p-l">
											<label>Certificate</label>
											<input type="text" class="form-control" name="morecert" />
										</div>
										<div class="form-group col-md-6 p-l">
											<label>Marks</label>
											<input type="text" class="form-control" name="moremarks" />
										</div>
										<div class="form-group col-md-6 p-l">
											<label>Year</label>
											<input type="text" class="form-control" name="moreyear" />
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 p-l">
								<button type="submit" name="sub_btn" class="btn btn-default btn-block">Preview Your Resume</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
<script>
	CKEDITOR.replace( 'editor1' );
</script>


<?php include(SHARED_PATH . '/public_footer.php'); ?>
