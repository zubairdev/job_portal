<?php require_once('private/initialize.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $job = find_job_by_u_id($id);

    $c_id = $job['company_id'];
    $cat = $job['j_category'];
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
                <div class="col-md-12">
                    <div class="col-md-8">
                        <div class="panel-body">
                            <div class="col-md-3 p-l">
                                <div class="block">
                                    <img src="<?php echo 'images/company/logo/' .$job['photo']; ?>" alt="" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="job_title">
                                     <?php echo $job['j_title']; ?>
                                    <a href="#"><?php echo $job['j_category']; ?></a>
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
                                        <?php echo $job['j_date']; ?>
                                    </div>
                                </div>
                                <div class="col-md-8 p-l">
                                    <div class="packege">
                                        <i class="fa fa-user"></i>
                                        Skills: <?php echo $job['j_skills']; ?>
                                    </div> 
                                </div>
                                <div class="col-md-4 p-l">
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
                            <!-- <a href="#" class="btn btn-default">Apply For This Job</a> -->
                        </div>
                    </div>
                <!-- Right Side company detail Area in col-md-4 -->
                <div class="col-md-4">
                    <div class="panel-body">
                        <div class="job_title block1">
                            Company Profile
                            <a href="#"><?php echo $job['c_name'] ; ?></a>
                        </div> 
                        <a href="https://<?php echo $job['c_fb'] ; ?>/" target="blank" class="user-media"><i class="fa fa-facebook"></i></a>
                        <a href="https://<?php echo $job['c_twitter'] ; ?>/" target="blank" class="user-media twitter"><i class="fa fa-twitter"></i></a>
                        <a href="http://<?php echo $job['c_linkedin'] ; ?>/" target="blank" class="user-media linke"><i class="fa fa-linkedin"></i></a>
                        <a href="https://<?php echo $job['c_gplus'] ; ?>/" target="blank" class="user-media google"><span class="ti-google"></span></a>
                        <div class="clearfix"></div>
                        <div class="contact_details">
                            <span><i class="fa fa-map"></i> <?php echo $job['c_address'] ; ?></span>
                            <span><i class="fa fa-phone"></i> +92 <?php echo $job['c_phone'] ; ?></span>
                            <span><i class="fa fa-envelope"></i><a href="#"><?php echo $job['c_email'] ; ?></a></span>
                            <span><i class="fa fa-globe"></i><a href="#"><?php echo $job['c_web'] ; ?></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="clearfix"></div>
                <div class="page-heading">
                    <h2>Similar Jobs</h2>
                </div>
                <div class="table-bg">
                    <table class="table">
                        <tbody>
                            <?php 
                                $cat = $job['j_category'];
                                $id1 = $job['j_id'];
                                view_all_jobs_category($cat, $id1);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>


<?php include(SHARED_PATH . '/public_footer.php'); ?>
