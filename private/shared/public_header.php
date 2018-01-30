<?php
  if(!isset($page_title)) { $page_title = 'Welcome to our Site'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>GBI - <?php echo $page_title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
  </head>
  <?php include('config/style.php'); ?>

  <body>
<div class="header-stricky">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="site-logo">
                            <a href="index-2.html"><img src="assets/images/home/site-logo.png" alt="" class="img-responsive" /></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <nav class="navbar navbar-default navbar-static-top">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div> 
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav scrollto">  
                                    <li><a href="index-2.html">Home</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Browse Jobs <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="manage_application.html">Manage Applications</a></li>  
                                            <li><a href="manage_job.html">Manage jobs</a></li> 
                                             <li><a href="job_listing.html">Job Listing</a></li>  
                                            <li><a href="job.html">Job Page</a></li>   
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employers <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="employe_detail.html">Employers Detail</a></li>  
                                            <li><a href="employe_list.html">Employers List</a></li>  
                                            <li><a href="post.html">Post A job</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Candidates <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="candidates.html">Browse Candidates</a></li>
                                            <li><a href="resume.html">Submit Resume</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="about.html">About</a></li>  
                                            <li><a href="resume2.html">Resume Page</a></li>
                                            <li><a href="faq.html">Faq</a></li>  
                                            <li><a href="price_table.html">Pricing Tables</a></li>  
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>  
                    </div>
                            <div class="col-md-3 text-right">
                                <a href="login.html" class="login active">Login</a>
                                <a href="login.html" class="signup">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
        