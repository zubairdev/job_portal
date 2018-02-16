<?php
require_once('private/initialize.php');

require_login();

if (!isset($_GET['id'])) {
	redirect_to(url_for('index.php'));
}
if(isset($_GET['id'])){
$id = $_GET['id'];
$resume = find_resume_by_id($id);
$old_photo = $resume['r_photo'];
}

if (is_post_request()) {

	$resume = [];
	$resume['id'] = $id ?? '';
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

	$photo = $_FILES['photo']['name'];
	$tmp_name= $_FILES['photo']['tmp_name'];
	$local_image = "images/candidates/";
	$upload=move_uploaded_file($tmp_name, $local_image . $photo);

	$resume['photo'] = $photo;

	if (empty($resume['photo'])) {
		$resume['photo'] = $old_photo;
	}

	$result = update_resume_by_id($resume);
	if($result == true) {
    	$_SESSION['message'] = 'The resume was updated successfully.';
    	redirect_to(url_for('resume.php?id=' . $id));
  	} else {
    	echo 'Errorrr .....';
    	//var_dump($errors);
  	}

}
?>



<?php include(SHARED_PATH . '/public_header.php'); ?>

<div class="page_banner banner resume-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="banner-heading">Edit Resume</div>    
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
						<form method="POST" enctype="multipart/form-data" action="">
							<div class="form-group col-md-6 p-l">
								<label>Photo <span>(optional)</span></label>
								<input type="file" name="photo" class="form-control">
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Professional Title</label>
								<input type="text" name="title" class="form-control" placeholder="eg. Manager / Sr. / Jr." value="<?php echo $resume['r_title']; ?>" required />
							</div>
							<div class="form-group col-md-6 p-l">
								<label>First Name</label>
								<input type="text" name="Fname" class="form-control" placeholder="eg. Kevin" value="<?php echo $resume['r_fname']; ?>" required />
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Last name</label>
								<input type="text" name="Lname" class="form-control" placeholder="eg. Skoglund" value="<?php echo $resume['r_lname']; ?>" required />
							</div>
							<div class="form-group col-md-6 p-l">
								<label>Email</label>
								<input type="email" name="mail" class="form-control" placeholder="eg. kevin@domain.com" value="<?php echo $resume['r_email']; ?>" required />
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Phone Number</label>
								<input type="text" name="phone" class="form-control" placeholder="eg. 321-1121122" value="<?php echo $resume['r_phn']; ?>" required />
							</div>
							<div class="form-group col-md-6 p-l">
								<label>Date Of Birth</label>
								<input type="date"  name="date" class="form-control" value="<?php echo $resume['r_dob']; ?>" required />
							</div>
							<div class="form-group col-md-6   p-r">
								<label>Address</label>
								<input type="text" name="address" class="form-control" value="<?php echo $resume['r_addr']; ?>" required />
							</div>
							<div class="borderfull-width"></div>
							<div class="panel-heading">Basic Information</div>
							<hr>
							<div class="form-group col-md-6 p-l">
								<label>Job Title</label>
								<input type="text" name="jobtitle" class="form-control" value="<?php echo $resume['r_job_title']; ?>" />
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Job Type</label>
								<input type="text" name="jobtype" class="form-control" value="<?php echo $resume['r_job_type']; ?>" />
							</div>
							<div class="form-group col-md-6 p-l">
								<label>Years of Experience</label>
								<input type="text" name="exp" class="form-control" value="<?php echo $resume['r_yearExp']; ?>" />
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Position</label>
								<input type="text" name="position" class="form-control" value="<?php echo $resume['r_postion']; ?>" />
							</div>
							<div class="form-group col-md-6 p-l">
								<label>Expected Job Category</label>
								<input type="text" name="exp-jobcat" class="form-control" value="<?php echo $resume['r_jobcat']; ?>" />
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Expected Salary Package</label>
								<input type="text" class="form-control" name="salary" value="<?php echo $resume['r_exptsalry']; ?>" />
							</div>
							<div class="form-group col-md-12p-r">
								<label>Skills</label>
								<input type="text" class="form-control" placeholder="Skill, Skill1, Skill2, ..." name="skills" value="<?php echo $resume['r_skills']; ?>" />
							</div>
							<div class="form-group col-md-12 p-l p-r">
								<label>Description About Yourself</label>
								<textarea name="editor1" class="form-control" placeholder="Page Body" ><?php echo $resume['r_despt']; ?></textarea>
							</div>
							<div class="borderfull-width"></div>
							<div class="panel-heading">Education Details</div>
							<hr>
							<div class="form-group col-md-6 p-l">
								<label>Basic / Graduation</label>
								<input type="text" name="graduation" class="form-control" placeholder="eg. Bachelor's of Computer Science" value="<?php echo $resume['r_edu1']; ?>" required />
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Specialization</label>
								<input type="text" name="splz" class="form-control" value="<?php echo $resume['r_splztn']; ?>" />
							</div>
							<div class="form-group col-md-6 p-l">
								<label>University / Institute</label>
								<input type="text" class="form-control" name="Institute" placeholder="eg. University of Engineering and Technalogy" value="<?php echo $resume['r_inst1']; ?>" />
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Year</label>
								<input type="text" name="year" class="form-control" value="<?php echo $resume['r_year1']; ?>" />
							</div>
							<div class="form-group col-md-6 p-l">
								<label>Grade</label>
								<input type="text" name="grade" class="form-control" placeholder="eg. A / A+ / B" required value="<?php echo $resume['r_grade']; ?>" />
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Marks</label>
								<input type="text" class="form-control" name="marks" placeholder="eg. 69%" value="<?php echo $resume['r_mark1']; ?>" />
							</div>
							<div class="row">
								<div class="col-md-12">
									<button type="button" class="btn btn-click" data-toggle="collapse" data-target="#demo"><i class="fa fa-plus-circle"></i>Add Class XII</button>
									<div id="demo" class="collapse">
										<div class="form-group col-md-6 p-l">
											<label>Institute Name</label>
											<input type="text" class="form-control" name="oppinst" value="<?php echo $resume['r_inst2']; ?>" />
										</div>
										<div class="form-group col-md-6 p-l">
											<label>Board / University</label>
											<input type="text" class="form-control" name="oppedu" value="<?php echo $resume['r_edu2']; ?>" />
										</div>
										<div class="form-group col-md-6 p-l">
											<label>Marks</label>
											<input type="text" class="form-control" name="oppmarks" value="<?php echo $resume['r_mark2']; ?>" />
										</div>
										<div class="form-group col-md-6 p-l">
											<label>Year</label>
											<input type="text" class="form-control" name="oppyear1" value="<?php echo $resume['r_year2']; ?>" />
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
											<input type="text" class="form-control" name="moreinst" value="<?php echo $resume['r_inst3']; ?>" />
										</div>
										<div class="form-group col-md-6 p-l">
											<label>Certificate</label>
											<input type="text" class="form-control" name="morecert" value="<?php echo $resume['r_edu3']; ?>" />
										</div>
										<div class="form-group col-md-6 p-l">
											<label>Marks</label>
											<input type="text" class="form-control" name="moremarks" value="<?php echo $resume['r_mark3']; ?>" />
										</div>
										<div class="form-group col-md-6 p-l">
											<label>Year</label>
											<input type="text" class="form-control" name="moreyear" value="<?php echo $resume['r_year3']; ?>" />
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
