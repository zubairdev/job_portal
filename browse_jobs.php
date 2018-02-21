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
                                  <option value="Faislabad">Faislabad</option>
                                  <option value="Karachi">Karachi</option>
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