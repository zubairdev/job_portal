<?php require_once('private/initialize.php');

require_login();

 $s_id = $_SESSION['u_id'];

 $company = find_company_by_user_id($s_id);
 $company_id = $company['c_id'];

 echo "this is company id: " .$company_id ."</br>";
 echo "this is session id: " .$s_id ."</br>";



if(is_post_request()) {

	$job = [];
	$job['company_id'] = $company_id ?? '';
	$job['j_title'] = $_POST['j_title'] ?? '';
	$job['j_type'] = $_POST['j_type'] ?? '';
	$job['j_category'] = $_POST['j_category'] ?? '';
	$job['j_minexp'] = $_POST['j_minexp'] ?? '';
	$job['j_maxexp'] = $_POST['j_maxexp'] ?? '';
	$job['j_minsalary'] = $_POST['j_minsalary'] ?? '';
	$job['j_maxsalary'] = $_POST['j_maxsalary'] ?? '';
	$job['j_location'] = $_POST['j_city'] ?? '';
	$job['j_skills'] = $_POST['j_skills'] ?? '';
	$job['j_desp'] = $_POST['j_despt'] ?? '';
	$job['j_resp'] = $_POST['j_resp'] ?? '';
	$job['j_req'] = $_POST['j_req'] ?? '';

	$result = insert_job($job);
	if($result == true) {
		echo 'inserted ...';
		$new_id = mysqli_insert_id($db);
		$_SESSION['message'] = 'The job was created successfully';
		redirect_to(url_for('job_detail.php?id=' . $new_id ));
	} else {
		echo "Error: ";
	}


} else {

	$job = [];
	$job['company_id'] = '';
	$job['j_title'] = '';
	$job['j_type'] = '';
	$job['j_category'] = '';
	$job['j_minexp'] = '';
	$job['j_maxexp'] = '';
	$job['j_minsalary'] = '';
	$job['j_maxsalary'] = '';
	$job['j_city'] = '';
	$job['j_skills'] = '';
	$job['j_desp'] = '';
	$job['j_resp'] = '';
	$job['j_req'] = '';
}

include(SHARED_PATH . '/public_header.php'); ?>

<div class="page_banner banner post-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="banner-heading">Post A Job</div>    
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
						<h2>Add A Job</h2>
						<p>Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="panel-body">
						<div class="panel-heading">Job Details</div>
						<hr>
						<form method="POST" enctype="multipart/form-data">
							<div class="form-group col-md-6 p-l">
								<label>Job Title</label>
								<input type="text" name="j_title" class="form-control" />
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Job Type</label>
								<select class="form-control" name="j_type">
									<option>--- Choose a Category ---</option>
									<option value="Full Time">Full Time</option>
									<option value="Half Time">Half Time</option>
									<option value="Free Lancer">Free Lancer</option>
								</select>
							</div>
							<div class="form-group col-md-6 p-l">
								<label>Job Category</label>
								<select class="form-control" name="j_category">
									<option>--- Choose a Category ---</option>
									<option value="Web Developer">Web Developer</option>
									<option value="Designer">Designer</option>
									<option value="Marketing">Marketing</option>
									<option value="Machine Worker">Machine Worker</option>
									<option value="Social Media">Social Media</option>
								</select>
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Minimun Expirence Required</label>
								<input type="text" class="form-control" name="j_minexp" />
							</div>
							<div class="form-group col-md-6 p-l">
								<label>Maximun Expirence Required</label>
								<input type="text" class="form-control" name="j_maxexp" />
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Select City</label>
								<select class="form-control" name="j_city">
									<option>--- Choose a City ---</option>
									<option value="">Select City</option>
									<option value="Abbaspur">Abbaspur</option>
									<option value="Abbottabad">Abbottabad</option>
									<option value="Abdul Hakim">Abdul Hakim</option>
									<option value="Adda Jahan Khan">Adda Jahan Khan</option>
									<option value="Adda Shaiwala">Adda Shaiwala</option>
									<option value="Ahmadpur East">Ahmadpur East</option>
									<option value="Ahmed pur Sial">Ahmed pur Sial</option>
									<option value="Akhora Khattak">Akhora Khattak</option>
									<option value="Ali Chak">Ali Chak</option>
									<option value="Alipur">Alipur</option>
									<option value="Allahabad">Allahabad</option>
									<option value="Amangarh">Amangarh</option>
									<option value="Ambela">Ambela</option>
									<option value="Arifwala">Arifwala</option>                           
									<option value="Astore">Astore</option>
									<option value="Attock">Attock</option>
									<option value="Babri Banda">Babri Banda</option> 
									<option value="Badin">Badin</option>
									<option value="Bagh">Bagh</option>
									<option value="Bahawalnagar">Bahawalnagar</option>             
									<option value="Bahawalpur">Bahawalpur</option>
									<option value="Bajaur">Bajaur</option>
									<option value="Balakot">Balakot</option>                             
									<option value="Bannu">Bannu</option>
									<option value="Barbar Loi">Barbar Loi</option>
									<option value="Barkhan">Barkhan</option>                             
									<option value="Baroute">Baroute</option>
									<option value="Bat Khela">Bat Khela</option>
									<option value="Battagram">Battagram</option>                       
									<option value="Besham">Besham</option>
									<option value="Bewal">Bewal</option>
									<option value="Bhakkar">Bhakkar</option>                              
									<option value="Bhalwal">Bhalwal</option>                              
									<option value="Bhan Saeedabad">Bhan Saeedabad</option>
									<option value="Bhara Kahu">Bhara Kahu</option>                        
									<option value="Bhera">Bhera</option>
									<option value="Bhimbar">Bhimbar</option>
									<option value="Bhirya Road">Bhirya Road</option>               
									<option value="Bhuawana">Bhuawana</option>
									<option value="Bisham">Bisham</option>
									<option value="Blitang">Blitang</option>                              
									<option value="Bolan">Bolan</option>
									<option value="Buchay Key">Buchay Key</option>
									<option value="Bunner">Bunner</option>                             
									<option value="Burewala">Burewala</option>
									<option value="Chacklala">Chacklala</option>
									<option value="Chaghi">Chaghi</option>
									<option value="Chaininda">Chaininda</option>
									<option value="Chak 4 b c">Chak 4 b c</option>
									<option value="Chak 46">Chak 46</option>
									<option value="Chak Jamal">Chak Jamal</option>
									<option value="Chak Jhumra">Chak Jhumra</option>
									<option value="Chak Sawara">Chak Sawara</option>
									<option value="Chak Sheza">Chak Sheza</option>
									<option value="Chakwal">Chakwal</option>
									<option value="Chaman">Chaman</option>
									<option value="Charsada">Charsada</option>
									<option value="Chashma">Chashma</option>
									<option value="Chawinda">Chawinda</option>
									<option value="Cherat">Cherat</option>
									<option value="Chicha watni">Chicha watni</option>
									<option value="Chilas">Chilas</option>
									<option value="Chiniot">Chiniot</option>
									<option value="Chishtian">Chishtian</option>
									<option value="Chitral">Chitral</option>
									<option value="Choa Saiden Shah">Choa Saiden Shah</option>
									<option value="Chohar Jamali">Chohar Jamali</option>
									<option value="Choppar Hatta">Choppar Hatta</option>
									<option value="Chowk Azam">Chowk Azam</option>
									<option value="Chowk Maitla">Chowk Maitla</option>
									<option value="Chowk Munda">Chowk Munda</option>
									<option value="Chunian">Chunian</option>
									<option value="Dadakhel">Dadakhel</option>
									<option value="Dadu">Dadu</option>
									<option value="Daharki">Daharki</option>
									<option value="Dandot">Dandot</option>
									<option value="Dargai">Dargai</option>
									<option value="Darya Khan">Darya Khan</option>
									<option value="Daska">Daska</option>
									<option value="Daud Khel">Daud Khel</option>
									<option value="Daulat Pur">Daulat Pur</option>
									<option value="Daur">Daur</option>
									<option value="Deh Pathaan">Deh Pathaan</option>
									<option value="Lahore">Lahore</option>
									<option value="Isalamabad">Isalamabad</option>
									<option value="Karachi">Karachi</option>

								</select>
							</div>
							<div class="form-group col-md-12 p-l">
								<label>Skills</label>
								<input type="text"  placeholder="Php, Laravel , MySql ..." class="form-control" name="j_skills" />
							</div>
							<div class="form-group col-md-12 p-l p-r">
								<label>Job Description</label>
								<textarea name="j_despt" class="form-control" placeholder="Page Body"></textarea>
							</div>
							<div class="form-group col-md-12 p-l p-r">
								<label>Responsibilities</label>
								<textarea name="j_resp" class="form-control" placeholder="Page Body"></textarea>
							</div>
							<div class="form-group col-md-12 p-l p-r">
								<label>Requirements</label>
								<textarea name="j_req" class="form-control" placeholder="Page Body"></textarea>
							</div>
							<div class="form-group col-md-6 p-l">
								<label>Minimum Salery <span>(Optional)</span></label>
								<input type="text" class="form-control" name="j_minsalary" placeholder="eg $ 2500" />
							</div>
							<div class="form-group col-md-6 p-r">
								<label>Maximun Salery <span>(Optional)</span></label>
								<input type="text" class="form-control" name="j_maxsalary" placeholder="eg $ 4500" />
							</div>
							<div class="col-md-12 p-l">
								<button type="submit" name="submit" class="btn btn-default">Preview</button>
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
	CKEDITOR.replace( 'j_despt' );
	CKEDITOR.replace( 'j_req' );
	CKEDITOR.replace( 'j_resp' );
</script>
<!-- <script type="text/javascript" src="js/wysihtml.js"></script>
<script type="text/javascript" src="js/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="js/file.js"></script> -->
<?php include(SHARED_PATH . '/public_footer.php'); ?>
