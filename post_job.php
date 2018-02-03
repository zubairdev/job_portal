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
							<textarea id="wysihtml5-editor" spellcheck="false" autofocus placeholder="Enter something ...">
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

<!-- <script type="text/javascript" src="js/wysihtml.js"></script>
<script type="text/javascript" src="js/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="js/file.js"></script> -->
<?php include(SHARED_PATH . '/public_footer.php'); ?>
