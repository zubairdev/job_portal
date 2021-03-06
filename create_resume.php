<?php require_once('private/initialize.php');
	

			if(isset($_POST['submit1'])) {
				$title = $_POST['title'];
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$mail = $_POST['mail'];
				$phone = $_POST['phone'];
				$addr = $_POST['addr'];

				$sql = "INSERT INTO resume_cinfo (cinfo_fname, cinfo_lname,cinfo_email,cinfo_phone,cinfo_addr,cinfo_prof_title) VALUES ('$fname','$lname','$mail','$phone','$addr','$title')";
				$ex = mysqli_query($db, $sql);
				if($ex){
					echo '<script>
						function myFunction() {
    						$(".panel-body>ul>li").removeClass("active");
    						$(".panel-body ul li#li2").addClass(" active");
    						
						}
						myFunction();
					</script>';
				}
				else{
					echo "MySQL ERRO: " .$sql. "<br/>" . mysqli_error($db);
				}

}
?>


<?php include(SHARED_PATH . '/public_header.php'); ?>

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
						<ul class="nav nav-tabs nav-justified m-12" role="tablist">
							<li id="li1" class="active border-right"><a href="#cinfo"  role="tab" data-toggle="tab">Contact Information</a></li>
							<li id="li2"><a href="#binfo" role="tab" data-toggle="tab">Basic Information</a></li>				
							<li id="li3"><a href="#einfo" role="tab" data-toggle="tab">Education Details</a></li>
						</ul>
						<div class="tab-content">
							<!-- Contact Information -->
							<div class="tab-pane fade active in" id="cinfo">
								<form method="POST" enctype="multipart/form-data" action="">
									<div class="form-group col-md-6 p-l">
										<label>Photo <span>(optional)</span></label>
										<input type="file" name="photo" class="form-control">
									</div>
									<div class="form-group col-md-6 p-r">
										<label>Professional Title</label>
										<input type="text" name="title" class="form-control" />
									</div>
									<div class="form-group col-md-6 p-l">
										<label>First Name</label>
										<input type="text" name="fname" class="form-control" />
									</div>
									<div class="form-group col-md-6 p-r">
										<label>Last name</label>
										<input type="text" name="lname" class="form-control" />
									</div>
									<div class="form-group col-md-6 p-l">
										<label>Email</label>
										<input type="email" name="mail" class="form-control" />
									</div>
									<div class="form-group col-md-6 p-r">
										<label>Phone Number</label>
										<input type="text" name="phone" class="form-control" />
									</div>
									<div class="form-group col-md-6 p-l">
										<label>Date Of Birth</label>
										<input type="date"  name="dob" class="form-control" />
									</div>
									<div class="form-group col-md-6 p-r">
										<label>Address</label>
										<input type="text" name="addr" class="form-control" />
									</div>
									<div class="col-md-4 p-l">
										<input type="submit" name="submit1" value="Next" id="btn1" class="btn btn-default btn-block" />
										<input type="hidden" href="#binfo" role="tab" data-toggle="tab">
									</div>
								</form>
							</div>

							<!-- Basic Information -->
							<div class="tab-pane fade" id="binfo">
								<form method="POST" enctype="multipart/form-data" >
									<div class="form-group col-md-6 p-l">
										<label>Job Title</label>
										<input type="text" name="jobtitle" class="form-control" />
									</div>
									<div class="form-group col-md-6 p-r">
										<label>Position</label>
										<input type="text" name="position" class="form-control" />
									</div>
									<div class="form-group col-md-6 p-l">
										<label>Years of Experience</label>
										<input type="text" name="exp" class="form-control" />
									</div>
									<div class="form-group col-md-6 p-r">
										<label>Position</label>
										<select class="form-control" name="category">
											<option>--- Choose a Category ---</option>
											<option>IT</option>
											<option>IT</option>
											<option>IT</option>
										</select>
									</div>
									<div class="form-group col-md-6 p-l">
										<label>Expected Job Category</label>
										<select class="form-control" name="jobcat">
											<option>--- Choose a Category ---</option>
											<option>IT</option>
											<option>IT</option>
											<option>IT</option>
										</select>
									</div>
									<div class="form-group col-md-6 p-r">
										<label>Expected Salary Package</label>
										<input type="text" class="form-control" name="salary" />
									</div>
									<div class="form-group col-md-12 p-l p-r">
										<label>Description About Yourself</label>
										<div id="wysihtml5-editor-toolbar">
											<header>
												<ul class="commands">
													<li data-wysihtml5-command="bold" title="Make text bold (CTRL + B)" class="command"></li>
													<li data-wysihtml5-command="italic" title="Make text italic (CTRL + I)" class="command"></li>
													<li data-wysihtml5-command="insertUnorderedList" title="Insert an unordered list" class="command"></li>
													<li data-wysihtml5-command="insertOrderedList" title="Insert an ordered list" class="command"></li>
													<li data-wysihtml5-command="createLink" title="Insert a link" class="command"></li>
													<li data-wysihtml5-command="insertImage" title="Insert an image" class="command"></li>
													<li data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" title="Insert headline 1" class="command"></li>
													<li data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" title="Insert headline 2" class="command"></li>
													<li data-wysihtml5-command-group="foreColor" class="fore-color command" title="Color the selected text" >
														<ul>
															<li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="silver"></li>
															<li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="gray"></li>
															<li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="maroon"></li>
															<li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="red"></li>
															<li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="purple"></li>
															<li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="green"></li>
															<li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="olive"></li>
															<li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="navy"></li>
															<li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="blue"></li>
														</ul>
													</li>
													<li data-wysihtml5-command="insertSpeech" title="Insert speech" class="command"></li>
													<li data-wysihtml5-action="change_view" title="Show HTML" class="action"></li>
												</ul>
											</header>
											<div data-wysihtml5-dialog="createLink" style="display: none;">
												<label>
													Link:
													<input data-wysihtml5-dialog-field="href" value="http://">
												</label>
												<a data-wysihtml5-dialog-action="save">OK</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Cancel</a>
											</div>
											<div data-wysihtml5-dialog="insertImage" style="display: none;">
												<label>
													Image:
													<input data-wysihtml5-dialog-field="src" value="http://">
												</label>
												<a data-wysihtml5-dialog-action="save">OK</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Cancel</a>
											</div>
										</div>
										<textarea id="wysihtml5-editor" name="editor" spellcheck="false" autofocus placeholder="Enter something ...">
											<h1>A better approach to rich text editing</h1>
											<p>wysihtml5 is an <span class="wysiwyg-color-green"><a href="#">open source</a></span> rich text editor based on HTML5 technology and the progressive-enhancement approach.
											It uses a sophisticated security concept and aims to generate fully valid HTML5 markup by preventing unmaintainable tag soups and inline styles.</p>
											<h2>Features</h2>
											<ul>
												<li>It's fast and lightweight (smaller than TinyMCE, Aloha, ...)</li>
												<li>Auto-linking of urls as-you-type</li>
												<li>Generates valid and semantic HTML5 markup (even when the content is pasted from MS Word)</li>
												<li>Uses class names instead of inline styles</li>
												<li>Unifies line break handling across browsers</li>
												<li>Uses sandboxed iframes in order to prevent identity theft through XSS</li>
												<li>Speech-input for Chrome</li>
												<li>No jQuery required</li>
											</ul>
											<h2>Browser Support</h2>
											<ul>

												<li><strong>Graceful degradation:</strong> Unsupported browsers will get a <i>&amp;lt;textarea&amp;gt;</i></li>
											</ul>
										</textarea>
									</div>
									<div class="col-md-4 p-l">
										<a id="btn2" href="#einfo" role="tab" data-toggle="tab" class="btn btn-default btn-block">Next</a>
									</div>
								</form>
							</div>

							<!-- Education Details -->
							<div class="tab-pane fade" id="einfo">
								<form method="POST" enctype="multipart/form-data">
									<div class="form-group col-md-6 p-l">
										<label>Basic / Graduation</label>
										<input type="text" name="graduation" class="form-control" />
									</div>
									<div class="form-group col-md-6 p-r">
										<label>Specialization</label>
										<select class="form-control" name="special">
											<option>--- Choose a Category ---</option>
											<option>IT</option>
											<option>IT</option>
											<option>IT</option>
										</select>
									</div>
									<div class="form-group col-md-6 p-l">
										<label>University / Institute</label>
										<input type="text" class="form-control" name="Institute" />
									</div>
									<div class="form-group col-md-6 p-r">
										<label>Year</label>
										<select class="form-control" name="year">
											<option>--- Choose a Category ---</option>
											<option>IT</option>
											<option>IT</option>
											<option>IT</option>
										</select>
									</div>
									<div class="form-group col-md-6 p-l">
										<label>Grading System</label>
										<select class="form-control" name="grade">
											<option>--- Choose a Category ---</option>
											<option>IT</option>
											<option>IT</option>
											<option>IT</option>
										</select>
									</div>
									<div class="form-group col-md-6 p-r">
										<label>Marks</label>
										<input type="text" class="form-control" name="marks" />
									</div>
									<div class="row">
										<div class="col-md-12">
											<button type="button" class="btn btn-click" data-toggle="collapse" data-target="#demo"><i class="fa fa-plus-circle"></i>Add Class XII</button>
											<div id="demo" class="collapse">
												<div class="form-group col-md-6 p-l">
													<label>Basic / Institute</label>
													<input type="text" class="form-control" name="oppgrade" />
												</div>
												<div class="form-group col-md-6 p-l">
													<label>University / Institute</label>
													<input type="text" class="form-control" name="oppinstitute" />
												</div>
												<div class="form-group col-md-6 p-l">
													<label>Marks</label>
													<input type="text" class="form-control" name="oppmarks" />
												</div>
												<div class="form-group col-md-6 p-l">
													<label>Year</label>
													<select class="form-control" name="oppyear">
														<option>2017</option>
														<option>2016</option>
														<option>2015</option>
														<option>2014</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<button type="button" class="btn btn-click" data-toggle="collapse" data-target="#demo2"><i class="fa fa-plus-circle"></i>Add More Certificate</button>
											<div id="demo2" class="collapse">
												<div class="form-group col-md-6 p-l">
													<label>University / Graduation</label>
													<input type="text" class="form-control" name="moregrade" />
												</div>
												<div class="form-group col-md-6 p-l">
													<label>Marks</label>
													<input type="text" class="form-control" name="moremarks" />
												</div>
												<div class="form-group col-md-6 p-l">
													<label>Year</label>
													<select class="form-control" name="moreyear">
														<option>2017</option>
														<option>2016</option>
														<option>2015</option>
														<option>2014</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 p-l">
								<a id="btn3" href="#Emp" role="tab" data-toggle="tab" class="btn btn-default btn-block">Preview Resume</a>
							</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>




<?php include(SHARED_PATH . '/public_footer.php'); ?>
<script>

 //    document.getElementById("btn1").addEventListener("click", myFunction);

	// function myFunction() {
 //    	$(".panel-body>ul>li").removeClass("active");
 //    	$(".panel-body ul li#li2").addClass(" active");
	// }

	// document.getElementById("btn2").addEventListener("click", myFunction1);

	// function myFunction1() {
 //    	$(".panel-body>ul>li").removeClass("active");
 //    	$(".panel-body ul li#li3").addClass(" active");
	// }
	
</script>



