<?php require_once('private/initialize.php');

include(SHARED_PATH . '/public_header.php'); ?>

<div class="page_banner banner listing-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="banner-heading">Job Listing</div>    
            </div>  
        </div>
    </div>
</div>
<main id="maincontent">
    <section class="resume">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="job-search">
                        <form method="POST" action ="browse_jobs.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="search" placeholder="Job title / keywords">
                                <div class="search_icon"><span class="ti-briefcase"></span></div>
                            </div>
                             <div class="form-group">
                                <select class="form-control" name="city">
                                  <option value="">Choose City</option>
                                  <option value="Lahore">Lahore</option>
                                  <option value="Faislabad">Faislabad</option>
                                  <option value="Karachi">Karachi</option>
                                  <option value="Ali Chak">Ali Chak</option>
                                </select>
                                <div class="search_icon"><span class="ti-location-pin"></span></div>
                            </div>
                            <button type="submit" name="sub_search" class="btn btn-default">Search Job Results</button>
                        </form>
                    </div>
                    <div class="job_title">Categories</div>
                    <div class="borderfull-width"></div>
                    <div class="clearfix"></div>
                    <div class="page-heading">
                        <div class="category">
                            <div class="col-md-1 p-l p-r">
                             <input type="checkbox" id="Accounting" name="ossm"> 
                         </div>
                         <div class="col-md-11 p-l p-r">
                           <label for="Accounting">Accounting Jobs</label> 
                       </div>
                   </div>
                   <div class="category">
                    <div class="col-md-1 p-l p-r">
                        <input type="checkbox" id="Interior" name="ossm" checked=""> 
                    </div>
                    <div class="col-md-11 p-l p-r">
                       <label for="Interior">Interior Design Jobs</label> 
                   </div>
               </div>
               <div class="category">
                <div class="col-md-1 p-l p-r">
                 <input type="checkbox" id="Bank" name="ossm"> 
             </div>
             <div class="col-md-11 p-l p-r">
               <label for="Bank">Bank Jobs</label> 
           </div>
       </div>
       <div class="category">
        <div class="col-md-1 p-l p-r">
         <input type="checkbox" id="Content" name="ossm"> 
     </div>
     <div class="col-md-11 p-l p-r">
       <label for="Content">Content Writing Jobs</label> 
   </div>
</div>
<div class="category">
    <div class="col-md-1 p-l p-r">
     <input type="checkbox" id="Consultant" name="ossm" checked=""> 
 </div>
 <div class="col-md-11 p-l p-r">
   <label for="Consultant">Consultant Jobs</label> 
</div>
</div>
<div class="category">
    <div class="col-md-1 p-l p-r">
     <input type="checkbox" id="jobs" name="ossm" checked=""> 
 </div>
 <div class="col-md-11 p-l p-r">
   <label for="jobs">Engineering Jobs</label> 
</div>
</div>
<div class="category">
    <div class="col-md-1 p-l p-r">
     <input type="checkbox" id="export" name="ossm"> 
 </div>
 <div class="col-md-11 p-l p-r">
   <label for="export">Export Import Jobs</label> 
</div>
</div>
<div class="category">
    <div class="col-md-1 p-l p-r">
     <input type="checkbox" id="Merchandiser" name="ossm"> 
 </div>
 <div class="col-md-11 p-l p-r">
   <label for="Merchandiser">Merchandiser Jobs </label> 
</div>
</div>
<div class="category">
    <div class="col-md-1 p-l p-r">
     <input type="checkbox" id="Security" name="ossm"> 
 </div>
 <div class="col-md-11 p-l p-r">
   <label for="Security">Security  Jobs </label> 
</div>
</div>
<div class="category">
    <div class="col-md-1 p-l p-r">
     <input type="checkbox" id="hr" name="ossm"> 
 </div>
 <div class="col-md-11 p-l p-r">
   <label for="hr">HR Jobs </label> 
</div>
</div>
<div class="category">
    <div class="col-md-1 p-l p-r">
     <input type="checkbox" id="hotel" name="ossm"> 
 </div>
 <div class="col-md-11 p-l p-r">
   <label for="hotel">Hotel Jobs </label> 
</div>
</div>
</div>
<div class="job_title">Job Type</div>
<div class="borderfull-width"></div>
<div class="page-heading">
    <div class="category">
        <div class="col-md-1 p-l p-r">
         <input type="checkbox" id="cb_9" name="ossm"> 
     </div>
     <div class="col-md-11 p-l p-r">
       <label for="cb_9">All Type</label> 
   </div>
</div>
<div class="category">
    <div class="col-md-1 p-l p-r">
     <input type="checkbox" id="cb_8" name="ossm" checked=""> 
 </div>
 <div class="col-md-11 p-l p-r">
   <label for="cb_8">Full Time</label> 
</div>
</div>
<div class="category">
    <div class="col-md-1 p-l p-r">
     <input type="checkbox" id="cb_7" name="ossm"> 
 </div>
 <div class="col-md-11 p-l p-r">
   <label for="cb_7">part Time</label> 
</div>
</div>
<div class="category">
    <div class="col-md-1 p-l p-r">
     <input type="checkbox" id="cb_6" name="ossm"> 
 </div>
 <div class="col-md-11 p-l p-r">
   <label for="cb_6">Freelancer</label> 
</div>
</div>    
</div>
<div class="job_title">Rate / Hr</div>
<div class="borderfull-width"></div>
<div class="page-heading">
    <div class="category">
        <div class="col-md-1 p-l p-r">
         <input type="checkbox" id="cb_5" name="ossm"> 
     </div>
     <div class="col-md-11 p-l p-r">
       <label for="cb_5">$0 - $25 (231)</label> 
   </div>
</div>
<div class="category">
    <div class="col-md-1 p-l p-r">
     <input type="checkbox" id="cb_4" name="ossm" checked=""> 
 </div>
 <div class="col-md-11 p-l p-r">
   <label for="cb_4">$25 - $50 (297)</label> 
</div>
</div>
<div class="category">
    <div class="col-md-1 p-l p-r">
     <input type="checkbox" id="cb_3" name="ossm"> 
 </div>
 <div class="col-md-11 p-l p-r">
   <label for="cb_3">$50 - $100 (78)</label> 
</div>
</div> 
<div class="category">
    <div class="col-md-1 p-l p-r">
      <input type="checkbox" id="cb_2" name="ossm"> 
  </div>
  <div class="col-md-11 p-l p-r">
    <label for="cb_2">$100 - $200 (98)</label> 
</div>
</div> 
<div class="category">
    <div class="col-md-1 p-l p-r">
        <input type="checkbox" id="cb_1" name="ossm"> 
    </div>
    <div class="col-md-11 p-l p-r">
        <label for="cb_1">$200+ (21)</label> 
    </div>
</div> 
</div>
</div>
<div class="col-md-9">
    <div class="col-md-7 col-sm-7 p-l">
        <div class="page-heading">
            <p>Showing 1-8 of 254</p>
        </div>
    </div>  
    <div class="col-md-5 col-sm-5 filter p-r text-right">
        <div class="col-md-7 col-sm-5"><p>Short by:</p></div>
        <div class="col-md-5 col-sm-7 p-r">
            <div class="dropdown">
                <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Recent Jobs
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#">Web Developer</a></li>
                        <li><a href="#">MySQL Developers</a></li>
                        <li><a href="#">Web Designer</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="page_listing">
            <?php
            if (is_post_request()) {
                find_job_through_search();
            } else {
                find_all_job();
            }
                
            ?>
</div>
<ul class="pagination pull-right">
    <li class="active"><a href="#"><i class="fa fa-angle-left"></i></a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li class="active"><a href="#"><i class="fa fa-angle-right"></i></a></li>    
</ul>
</div>
</div>
</div>
</section>
</main>
<?php include(SHARED_PATH . '/public_footer.php'); ?>