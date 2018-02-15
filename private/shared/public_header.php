<?php
  if(!isset($page_title)) { $page_title = 'Welcome to our Site'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title><?php echo $page_title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include(PROJECT_PATH . '/config/style.php'); ?>
    
  </head>

  <body>

            <!-- Top Navigation Bar Start -->

      <div class="header-stricky">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="site-logo">
                            <a href="index.php"><img src="images/home/site-logo.png" alt="" class="img-responsive" /></a>
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
                                    <li><a href="index.php">Home</a></li>
                                    <li class="dropdown">
                                        <a href="browse_jobs.php" class="dropdown-toggle" data-toggle="dropdown">Browse Jobs<!--  <i class="fa fa-angle-down"></i> --></a>
                                        <!-- <ul class="dropdown-menu">
                                            <li><a href="manage_application.html">Manage Applications</a></li>  
                                            <li><a href="manage_job.html">Manage jobs</a></li> 
                                             <li><a href="job_listing.html">Job Listing</a></li>  
                                            <li><a href="job.html">Job Page</a></li>   
                                        </ul> -->
                                    </li>
                                    <li class="dropdown">
                                        <a href="employer_list.php" class="dropdown-toggle" data-toggle="dropdown">Employers</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="candidates.php" class="dropdown-toggle" data-toggle="dropdown">Candidates</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>  
                    </div>
                    <?php
                        if (isset($_SESSION['u_id'])) {
                            $id = $_SESSION['u_id'];
                        
                        $resume = find_resume_by_u_id($id);
                        $company = find_company_by_user_id($id);
                    ?>
                    <?php if ($resume['u_id'] == $id) { ?>
                            <div class="col-md-3 text-right">
                                <!-- <a href="login.php" class="login active"><?php // echo $_SESSION['u_username']; ?></a>
                                <a href="userout.php" class="signup">Logout</a> -->

                                <ul class="nav navbar-nav scrollto" style="float: right; margin: 0 5px 5px 0;">
                                    <li class="dropdown">
                                        <a href="browse_jobs.php" class="dropdown-toggle user" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i> <?php echo $_SESSION['u_username']; ?> <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu user-dropdown">
                                            <li><a href="resume.php?id=<?php echo $resume['r_id']; ?>">View Profile</a></li>
                                            <li><a href="userout.php">Log Out</a></li>   
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        <?php } elseif ($company['user_id'] == $id) { ?>
                            <div class="col-md-3 text-right">
                                <ul class="nav navbar-nav scrollto" style="float: right; margin: 0 5px 5px 0;">
                                    <li class="dropdown">
                                        <a href="browse_jobs.php" class="dropdown-toggle user" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i> <?php echo $_SESSION['u_username']; ?> <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu user-dropdown">
                                            <li><a href="employer_detail.php?company=<?php echo $company['c_id']; ?>">View Profile</a></li>
                                            <li><a href="userout.php">Log Out</a></li>   
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        <?php } ?> 
                    <?php } else { ?> 
                            <div class="col-md-3 text-right">
                                <a href="login.php" class="login active">Login</a>
                                <a href="signup.php" class="signup">Sign Up</a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- Top Navigation Bar End -->

                <?php echo display_session_message(); ?>
        
                

    