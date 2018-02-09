<?php require_once('private/initialize.php'); ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

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
						<div class="form-group col-md-6 p-l">
							<label>Email</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group col-md-6 p-r">
							<label>Job Title</label>
							<input type="text" class="form-control" />
						</div>
						<div class="form-group col-md-6 p-l">
							<label>Job Type</label>
							<select class="form-control">
								<option>--- Choose a Category ---</option>
								<option>IT</option>
								<option>IT</option>
								<option>IT</option>
							</select>
						</div>
						<div class="form-group col-md-6 p-r">
							<label>Job Category</label>
							<select class="form-control">
								<option>--- Choose a Category ---</option>
								<option>IT</option>
								<option>IT</option>
								<option>IT</option>
							</select>
						</div>
						<div class="form-group col-md-6 p-l">
							<label>Job Tags <span>(Optional)</span></label>
							<input type="text" class="form-control" placeholder="eg. Designer, Developer, HTML" />
						</div>
						<div class="form-group col-md-6 p-r">
							<label>Location <span>(Optional)</span></label>
							<input type="text" class="form-control" />
						</div>
						<div class="form-group col-md-12 p-l p-r">
							<label>Job Description</label>
							 <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
						</div>
						<div class="form-group col-md-6 p-l">
							<label>Application Email/URL</label>
							<input type="text" class="form-control" placeholder="Enter your email address or website URL" />
						</div>
						<div class="form-group col-md-6 p-r">
							<label>Minimum Rate Per Hour <span>(Optional)</span></label>
							<input type="text" class="form-control" placeholder="eg $ 10" />
						</div>
						<div class="form-group col-md-6 p-l">
							<label>Minimum Rate Per Hour <span>(Optional)</span></label>
							<input type="text" class="form-control" placeholder="eg $ 16" />
						</div>
						<div class="form-group col-md-6 p-r">
							<label>Minimum Salery <span>(Optional)</span></label>
							<input type="text" class="form-control" placeholder="eg $ 2500" />
						</div>
						<div class="form-group col-md-6 p-l">
							<label>Maximun Salery <span>(Optional)</span></label>
							<input type="text" class="form-control" placeholder="eg $ 4500" />
						</div>
						<div class="form-group col-md-6 p-r">
							<label>Hours Per Week <span>(Optional)</span></label>
							<input type="text" class="form-control" placeholder="eg $ 45" />
						</div>

						<div class="borderfull-width"></div>
						<div class="panel-heading">Company Information</div>
						<hr>
						<div class="form-group col-md-6 p-l">
							<label>Company Name</label>
							<input type="text" class="form-control" />
						</div>
						<div class="form-group col-md-6 p-r">
							<label>Address</label>
							<input type="text" class="form-control" />
						</div>
						<div class="form-group col-md-6 p-l">
							<label>Email</label>
							<input type="text" class="form-control" />
						</div>
						<div class="form-group col-md-6 p-r">
							<label>Phone Number</label>
							<input type="text" class="form-control" />
						</div>
						<div class="form-group col-md-6 p-l">
							<label>Website (Optional)</label>
							<input type="text" class="form-control" placeholder="eg. www.example.com" />
						</div>
						<div class="form-group col-md-6 p-r">
							<label>Company Logo <span>(max. file size 3MB)</span></label>
							<input type="file" name="img[]" class="file form-control">
							<input type="text" class="form-control">
							<span class="input-group-btn text-right">
								<button class="browse btn btn-default input-lg" type="button"> Choose </button>
							</span>
						</div>
						<div class="form-group social_icon col-md-6 p-l">
							<label>Facebook <span>(Optional)</span></label>
							<input type="text" class="form-control" placeholder="Enter page URL" />
							<a href="#"><i class="fa fa-facebook"></i></a>
						</div>
						<div class="form-group social_icon twiiter col-md-6 p-r">
							<label>Twitter <span>(Optional)</span></label>
							<input type="text" class="form-control" placeholder="@companyname" />
							<a href="#"><i class="fa fa-twitter"></i></a>
						</div>
						<div class="form-group social_icon linkedin col-md-6 p-l">
							<label>Linked in <span>(Optional)</span></label>
							<input type="text" class="form-control" placeholder="Enter page URL" />
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
						<div class="form-group social_icon google_plus col-md-6 p-r">
							<label>Google + <span>(Optional)</span></label>
							<input type="text" class="form-control" placeholder="Enter page URL" />
							<a href="#"><i class="fa fa-google"></i></a>
						</div>
						<div class="col-md-12 p-l">
							<a href="#" class="btn btn-default">Preview Your Resume</a>
						</div>
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
<!-- <script type="text/javascript" src="js/wysihtml.js"></script>
<script type="text/javascript" src="js/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="js/file.js"></script> -->
<?php include(SHARED_PATH . '/public_footer.php'); ?>
