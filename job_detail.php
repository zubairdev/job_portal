<?php require_once('private/initialize.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $job = find_job_by_u_id($id);

    $c_id = $job['company_id'];

    $company = find_company_by_id($c_id);
}

include(SHARED_PATH . '/public_header.php'); ?>

<div class="simple_bannenr">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="work-time"><?php echo $job['j_type']; ?></div>
                <div class="banner-heading"><?php echo $job['j_title']. " / " .$job['j_category']; ?></div>    
            </div>  
        </div>
    </div>
</div>
<main id="maincontent">
    <section class="resume">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="panel-body">
                        <div class="col-md-3 p-l">
                            <div class="block">
                                <img src="<?php echo 'images/company/logo/' .$company['photo']; ?>" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="job_title">
                                <?php echo $job['j_category']; ?> 
                                <a href="#"><?php echo $job['j_title']; ?></a>
                            </div> 
                            <div class="col-md-4 p-l">
                                <div class="packege">
                                    <i class="fa fa-briefcase"></i><?php echo $job['j_minexp'] . " - " . $job['j_maxexp']; ?> Years
                                </div>
                            </div>
                            <div class="col-md-4 p-l">
                             <div class="packege">
                                <i class="fa fa-usd"></i>
                                <?php echo $job['j_minsalary']. " - " .$job['j_maxsalary']; ?>
                            </div> 
                        </div>
                        <div class="col-md-4 p-l">
                             <div class="packege">
                                <i class="fa fa-clock-o"></i>
                                13 Days Ago
                            </div>
                        </div>
                        <div class="col-md-6 p-l">
                             <div class="packege">
                                <i class="fa fa-user"></i>
                                Skills: <?php echo $job['j_skills']; ?>
                            </div> 
                        </div>
                         <div class="col-md-6 p-l">
                             <div class="packege">
                                <i class="fa fa-map-marker"></i>
                             <?php echo $job['j_location']; ?>
                            </div> 
                        </div>

                </div>
                <div class="clearfix"></div>
                <div class="page-heading"></div>
                <div class="page-heading">
                    <h2>Job Description</h2>
                    <?php echo $job['j_desp'];?>
                </div>
                <div class="page_details">
                    <h4>Responsibilities : </h4>
                    <?php echo $job['j_resp']; ?>
                </div>
                <div class="page_details">
                    <h4>Requirements  : </h4>
                    <?php echo $job['j_req']; ?>
                </div>
                <a href="#" class="btn btn-default">Apply For This Job</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel-body">
                <div class="job_title block1">
                    Company Profile
                    <a href="#"><?php echo $company['c_name'] ; ?></a>
                </div> 
                <a href="https://<?php echo $company['c_fb'] ; ?>/" target="blank" class="user-media"><i class="fa fa-facebook"></i></a>
                <a href="https://<?php echo $company['c_twitter'] ; ?>/" target="blank" class="user-media twitter"><i class="fa fa-twitter"></i></a>
                <a href="http://<?php echo $company['c_linkedin'] ; ?>/" target="blank" class="user-media linke"><i class="fa fa-linkedin"></i></a>
                <a href="https://<?php echo $company['c_gplus'] ; ?>/" target="blank" class="user-media google"><span class="ti-google"></span></a>
                <div class="clearfix"></div>
                <div class="contact_details">
                    <span><i class="fa fa-map"></i> <?php echo $company['c_address'] ; ?></span>
                    <span><i class="fa fa-phone"></i> +92 <?php echo $company['c_phone'] ; ?></span>
                    <span><i class="fa fa-envelope"></i><a href="#"><?php echo $company['c_email'] ; ?></a></span>
                    <span><i class="fa fa-globe"></i><a href="#"><?php echo $company['c_web'] ; ?></a></span>
                </div>
            </div>
            <div class="panel-body">
                <div class="job_title block1">
                    Send a Query
                </div> 
                <p></p>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Full Name" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email Address" />
                </div>
                <div class="form-group">
                    <textarea  type="text" class="form-control" placeholder="Message"></textarea>
                </div>
                <a href="#" class="btn btn-default btn-block">Submit Message</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <p>Share On :</p>
            <div class="social_button col-md-4 text-center p-l">
                <a href="https://www.facebook.com/" class="facebook btn-block" target="blank"><i class="fa fa-facebook"></i> Login with Faceboook</a>
            </div>
            <div class="social_button col-md-4  p-l p-r text-center">
                <a href="https://twitter.com/" class="facebook twitter  btn-block" target="blank"><i class="fa fa-twitter"></i> Login with Faceboook</a>
            </div>
            <div class="social_button col-md-4 text-center p-r">
                <a href="https://mail.google.com/" class="facebook google  btn-block" target="blank"><i class="fa fa-google-plus"></i> Login with Faceboook</a>
            </div>
            <div class="clearfix"></div>
            <div class="page-heading">
                <h2>Similar Jobs</h2>
            </div>
            <div class="table-bg">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><div class="tab-image"><img src="images/home/img1.jpg" alt="" class="img-responsive"></div><h1>Team of PHP MySQL Developers <p>Agricultural Sceences</p></h1></td>
                            <td class="work-time">Full Time</td>
                            <td><span class="ti-location-pin"></span> Toulouse, France</td>
                            <td><a href="#" class="table-btn-default">View Job</a></td>
                        </tr>
                        <tr>
                            <td><div class="tab-image"><img src="images/home/img2.jpg" alt="" class="img-responsive"></div><h1>Urgent Opening for PHP Developer <p>Agricultural Sceences</p></h1></td>
                            <td class="work-time part">Part Time</td>
                            <td><span class="ti-location-pin"></span> Toulouse, France</td>
                            <td><a href="#" class="table-btn-default">View Job</a></td>
                        </tr>
                        <tr>
                            <td><div class="tab-image"><img src="images/home/img3.jpg" alt="" class="img-responsive"></div><h1>Urgent Require- Web Developer <p>Agricultural Sceences</p></h1></td>
                            <td class="work-time part">Part Time</td>
                            <td><span class="ti-location-pin"></span> Toulouse, France</td>
                            <td><a href="#" class="table-btn-default">View Job</a></td>
                        </tr>
                        <tr>
                            <td><div class="tab-image"><img src="images/home/img4.jpg" alt="" class="img-responsive"></div><h1>Nodejs,Angularjs Developer <p>Agricultural Sceences</p></h1></td>
                            <td class="work-time">Full Time</td>
                            <td><span class="ti-location-pin"></span> Toulouse, France</td>
                            <td><a href="#" class="table-btn-default">View Job</a></td>
                        </tr>
                        <tr>
                            <td><div class="tab-image"><img src="images/home/img5.jpg" alt="" class="img-responsive"></div><h1>Software Developer -IT Co <p>Agricultural Sceences</p></h1></td>
                            <td class="work-time Free">Free lancer</td>
                            <td><span class="ti-location-pin"></span> Toulouse, France</td>
                            <td><a href="#" class="table-btn-default">View Job</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</section>
</main>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
