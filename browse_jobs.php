<?php require_once('private/initialize.php'); ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

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
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Job title / keywords">
                            <div class="search_icon"><span class="ti-briefcase"></span></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="City / zip code">
                            <div class="search_icon"><span class="ti-location-pin"></span></div>
                        </div>
                        <a href="#" class="btn btn-default">Search Job Results</a>
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
            <div class="sorting_content">
             <div class="tab-image"><img src="images/home/img1.jpg" alt="" class="img-responsive"></div>
             <div class="overflow">
                 <div class="text-shorting">
                     <h1 class="col-md-6 col-sm-7"><a href="job_detail.php">Team of PHP MySQL Developers</a><p>Agricultural Sceences</p> </h1>
                     <div class="work-time text-center col-md-2">Full Time</div>
                 </div>
                 <div class="bottom_text">
                    <div class="contact_details col-md-4 col-sm-4">
                        <span><strong>Sallery: <i class="fa fa-money"></i></strong> $7,50,000 / P.A</span>
                    </div>
                    <div class="contact_details col-md-8 col-sm-8">
                        <span><strong>Skills:</strong> Desinger, Developer, Html, Javascript, Jquery, CSS</span>
                    </div>
                    <p class="col-md-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p>
                </div>
            </div>
        </div>
        <div class="sorting_content">
         <div class="tab-image"><img src="images/home/img2.jpg" alt="" class="img-responsive"></div>
         <div class="overflow">
             <div class="text-shorting">
                 <h1 class="col-md-6 col-sm-7"><a href="job_detail.php">Urgent Opening for PHP Developer</a><p>Agricultural Sceences</p> </h1>
                 <div class="work-time part text-center col-md-2">Part Time</div>
             </div>
             <div class="bottom_text">
                <div class="contact_details col-md-4 col-sm-4">
                    <span><strong>Sallery: <i class="fa fa-money"></i></strong> $7,50,000 / P.A</span>
                </div>
                <div class="contact_details col-md-8 col-sm-8">
                    <span><strong>Skills:</strong> Desinger, Developer, Html, Javascript, Jquery, CSS</span>
                </div>
                <p class="col-md-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p>
            </div>
        </div>
    </div> 
    <div class="sorting_content">
     <div class="tab-image"><img src="images/home/img3.jpg" alt="" class="img-responsive"></div>
     <div class="overflow">
         <div class="text-shorting">
             <h1 class="col-md-6 col-sm-7"><a href="">Urgent Require- Web Developer</a><p>Agricultural Sceences</p> </h1>
             <div class="work-time part text-center col-md-2">Part Time</div>
         </div>
         <div class="bottom_text">
            <div class="contact_details col-md-4 col-sm-4">
                <span><strong>Sallery: <i class="fa fa-money"></i></strong> $7,50,000 / P.A</span>
            </div>
            <div class="contact_details col-md-8 col-sm-8">
                <span><strong>Skills:</strong> Desinger, Developer, Html, Javascript, Jquery, CSS</span>
            </div>
            <p class="col-md-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p>
        </div>
    </div>
</div> 
<div class="sorting_content">
 <div class="tab-image"><img src="images/home/img4.jpg" alt="" class="img-responsive"></div>
 <div class="overflow">
     <div class="text-shorting">
         <h1 class="col-md-6 col-sm-7"><a href="">Nodejs,Angularjs Developer</a><p>Agricultural Sceences</p> </h1>
         <div class="work-time text-center col-md-2">Full Time</div>
     </div>
     <div class="bottom_text">
        <div class="contact_details col-md-4 col-sm-4">
            <span><strong>Sallery: <i class="fa fa-money"></i></strong> $7,50,000 / P.A</span>
        </div>
        <div class="contact_details col-md-8 col-sm-8">
            <span><strong>Skills:</strong> Desinger, Developer, Html, Javascript, Jquery, CSS</span>
        </div>
        <p class="col-md-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p>
    </div>
</div>
</div>
<div class="sorting_content">
 <div class="tab-image"><img src="images/home/img5.jpg" alt="" class="img-responsive"></div>
 <div class="overflow">
     <div class="text-shorting">
         <h1 class="col-md-6 col-sm-7"><a href="">Software Developer -IT Co</a><p>Agricultural Sceences</p> </h1>
         <div class="work-time Free text-center col-md-2">Freelancer</div>
     </div>
     <div class="bottom_text">
        <div class="contact_details col-md-4 col-sm-4">
            <span><strong>Sallery: <i class="fa fa-money"></i></strong> $7,50,000 / P.A</span>
        </div>
        <div class="contact_details col-md-8 col-sm-8">
            <span><strong>Skills:</strong> Desinger, Developer, Html, Javascript, Jquery, CSS</span>
        </div>
        <p class="col-md-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p>
    </div>
</div>
</div>
<div class="sorting_content">
 <div class="tab-image"><img src="images/home/img6.jpg" alt="" class="img-responsive"></div>
 <div class="overflow">
     <div class="text-shorting">
         <h1 class="col-md-6 col-sm-7"><a href="">Website Developer and Head of Developers</a><p>Agricultural Sceences</p> </h1>
         <div class="work-time text-center col-md-2">Full Time</div>
     </div>
     <div class="bottom_text">
        <div class="contact_details col-md-4 col-sm-4">
            <span><strong>Sallery: <i class="fa fa-money"></i></strong> $7,50,000 / P.A</span>
        </div>
        <div class="contact_details col-md-8 col-sm-8">
            <span><strong>Skills:</strong> Desinger, Developer, Html, Javascript, Jquery, CSS</span>
        </div>
        <p class="col-md-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p>
    </div>
</div>
</div>
<div class="sorting_content">
 <div class="tab-image"><img src="images/home/img7.jpg" alt="" class="img-responsive"></div>
 <div class="overflow">
     <div class="text-shorting">
         <h1 class="col-md-6 col-sm-7"><a href="">Software Developer-Winforms-wpf</a><p>Agricultural Sceences</p> </h1>
         <div class="work-time text-center col-md-2">Full Time</div>
     </div>
     <div class="bottom_text">
        <div class="contact_details col-md-4 col-sm-4">
            <span><strong>Sallery: <i class="fa fa-money"></i></strong> $7,50,000 / P.A</span>
        </div>
        <div class="contact_details col-md-8 col-sm-8">
            <span><strong>Skills:</strong> Desinger, Developer, Html, Javascript, Jquery, CSS</span>
        </div>
        <p class="col-md-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p>
    </div>
</div>
</div>
<div class="sorting_content">
 <div class="tab-image"><img src="images/home/img7.jpg" alt="" class="img-responsive"></div>
 <div class="overflow">
     <div class="text-shorting">
         <h1 class="col-md-6 col-sm-7"><a href="">Software Developer -Leading IT Company</a><p>Agricultural Sceences</p> </h1>
         <div class="work-time part text-center col-md-2">part Time</div>
     </div>
     <div class="bottom_text">
        <div class="contact_details col-md-4 col-sm-4">
            <span><strong>Sallery: <i class="fa fa-money"></i></strong> $7,50,000 / P.A</span>
        </div>
        <div class="contact_details col-md-8 col-sm-8">
            <span><strong>Skills:</strong> Desinger, Developer, Html, Javascript, Jquery, CSS</span>
        </div>
        <p class="col-md-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis ultricies nec pellentesque eu.</p>
    </div>
</div>
</div>
</div>
<ul class="pagination pull-right">
    <li class="active"><a href="#"><i class="fa fa-angle-left"></i></a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">...</a></li>
    <li><a href="#">20</a></li>
    <li class="active"><a href="#"><i class="fa fa-angle-right"></i></a></li>    
</ul>
</div>
</div>
</div>
</section>
</main>
<?php include(SHARED_PATH . '/public_footer.php'); ?>