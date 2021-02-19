 
        <div id="wrapper" class="clearfix">
            <!-- preloader -->
             

            <!-- Start main-content -->
            <div class="main-content">
                <!-- Section: home -->
                <section id="home" class="divider bg-lighter" >
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container pb-100 pt-50">
                                <div class="row">
                                    <div class="col-md-10 col-md-push-1">
                                       
                                        <div class="bg-lightest border-1px p-25">
                                            <h4 class="text-theme-colored text-uppercase m-0">Make an Appointment</h4>
                                            <div class="line-bottom mb-0"></div>
                                            <p>Application for NL-VTA and CO-Coursera-Udemy-Google Skills Online Sri
                                                Lanka Programme.</p>
                                            <form id="appointment_form" name="appointment_form" class="mt-30" method="post" action="http://html.kodesolution.live/m/learnpress/v2.0/demo/includes/appointment.php">
                                                <div class="row">
                                                    <h5 class="text-theme-colored text-uppercase mb-10">1) Personal Data</h5>

                                                    <div class="col-sm-12">
                                                        <lable> <b>Your Name <span class="red">*</span></b>  </lable>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group mb-10">
                                                            <input name="form_name" class="form-control" type="text" required="" placeholder="First Name" aria-required="true">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group mb-10">
                                                            <input name="form_name" class="form-control" type="text" required="" placeholder="Second Name" aria-required="true">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <lable> <b>  Your Email <span class="red">*</span></b>  </lable>
                                                        <div class="form-group mb-10">
                                                            <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <lable> <b>Phone Number <span class="red">*</span></b>  </lable>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group mb-10">
                                                            <input name="form_phone" class="form-control required phone-inputmask" type="text" placeholder="Mobile Number +9476" aria-required="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group mb-10">
                                                            <input name="form_phone" class="form-control required phone-inputmask" type="text" placeholder="Hand Phone Number +9411" aria-required="true">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <lable> <b>  Date of Birth <span class="red">*</span></b>  </lable>
                                                        <div class="form-group mb-10">
                                                            <input name="form_email" class="form-control" type="text" placeholder="DD/MM/YYYY" >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <lable> <b>  Gender <span class="red">*</span></b>  </lable>
                                                        <div class="form-group mb-10">
                                                            <select class="form-control required">
                                                                <option> -- Select Option -- </option>
                                                                <option> Male </option>
                                                                <option> Female </option>
                                                                <option> Other </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <lable> <b>  Residential address <span class="red">*</span></b>  </lable>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group mb-10">
                                                            <input name="form_email" class="form-control" type="text" placeholder="No:" >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="form-group mb-10">
                                                            <input name="form_email" class="form-control" type="text" placeholder="Street: " >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group mb-10">
                                                            <select class="form-control required" id="province">
                                                                <option> -- Select Your Province --</option>
                                                                <?php foreach ($this->province as $key => $value) { ?>
                                                                    <option value="<?php echo $value['id'] ?>"> <?php echo $value['name'] ?></option>
                                                                <?php }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group mb-10">
                                                            <select class="form-control " id="distric-bar">
                                                                <option> -- Select Your District --</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group mb-10">
                                                            <input name="form_phone" class="form-control " type="text" placeholder="Enter Your City" >
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12">
                                                        <h5 class="text-theme-colored text-uppercase mb-10">2) Do you consider yourself differently abled? <span class="red">*</span></h5>

                                                    </div>
                                                    <div class="col-sm-3"> 
                                                        <div class="form-group mb-10"> 
                                                            <input type="radio" id="contactChoice2"  name="contact" value="mail" class="ml-20">
                                                            <label for="contactChoice2">Yes</label>

                                                            <input type="radio" id="contactChoice3"  name="contact" value="mail"   class="ml-30">
                                                            <label for="contactChoice3">No</label>
                                                        </div> 
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <h5 class="text-theme-colored text-uppercase mb-10">3) Current Status</h5>

                                                        <label class="mb-0 red"> <small> 3.1. Student Status:</small></label><br>
                                                        <label class="ml-20"> Are you a student? <span class="red">*</span></label>

                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail" class="ml-10">
                                                        <label for="contactChoice2">Yes</label>

                                                        <input type="radio" id="contactChoice3"  name="contact" value="mail"  class="ml-30">
                                                        <label for="contactChoice3">No</label>  <br>
                                                        <label class="mb-0 red" > <small>3.2. If yes provide details</small></label><br>


                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail" class="ml-20">
                                                        <label for="contactChoice2" >College Student Full-time</label><br>

                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail" class="ml-20">
                                                        <label for="contactChoice2" >Undergraduate Student Full-time</label><br>

                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail" class="ml-20">
                                                        <label for="contactChoice2" >Undergraduate Student Part-time</label><br>

                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail" class="ml-20">
                                                        <label for="contactChoice2" >Graduate Student Full-time</label><br> 

                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail" class="ml-20">
                                                        <label for="contactChoice2" >Graduate Student Part-time</label><br> 

                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail" class="ml-20">
                                                        <label for="contactChoice2" >Post-graduate Student Full-time</label><br> 

                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail" class="ml-20">
                                                        <label for="contactChoice2" >Post-graduate Student Part-time</label><br>  

                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="mb-0 red"> <small>3.3. Employee Status:</small></label><br>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail"  class="ml-20" > 
                                                        <label for="contactChoice2">Employed Full-time</label>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail"  > 
                                                        <label for="contactChoice2">Employed Part-time</label>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail"  > 
                                                        <label for="contactChoice2">Seeking Opportunities</label> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail"  class="ml-20" > 
                                                        <label for="contactChoice2"  >Unemployed</label> 
                                                    </div>
                                                    <div class="col-sm-12"> 
                                                        <label class="mb-0 red"> <small>3.4. Reasons for unemployed*</small></label><br>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail" class="ml-20" > 
                                                        <label for="contactChoice2"  >I was employed in the past but am currently unemployed (reasons are not    related to COVID 19)</label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail" class="ml-20"  > 
                                                        <label for="contactChoice2" >I have recently lost my job/source of income due to COVID 19</label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail" class="ml-20" > 
                                                        <label for="contactChoice2"  >I was never employed and am currently looking for a job</label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="mb-0 red"> <small>  3.5. If you are unemployed, please provide us some details to assess your suitability   for the scholarship </small></label>
                                                        <div class="form-group mb-10">
                                                            <textarea name="form_message" class="form-control required"  placeholder="Enter Message" rows="5" aria-required="true" class="ml-20"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-8">
                                                        <h5 class="text-theme-colored text-uppercase mb-10">4) Current Occupation <span class="red">*</span></h5>

                                                        <div class="form-group mb-10">
                                                            <select class="form-control " >
                                                                <option> Teacher</option>
                                                                <option> Librarian</option>
                                                                <option> Student</option>
                                                                <option>Self-employed</option>
                                                                <option>Other</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <h5 class="text-theme-colored text-uppercase mb-10">5) Education <span class="red">*</span></h5>
                                                        <div class="form-group mb-10">
                                                            <select class="form-control " >
                                                                <option> GCE (O/L)</option>
                                                                <option> GCE (A/L)</option>
                                                                <option> Bachelor’s Degree</option>
                                                                <option>Master’s Degree</option>
                                                                <option>PHD</option>
                                                                <option>Diploma</option>
                                                                <option>Postgraduate Diploma</option>
                                                                <option>Other</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <h5 class="text-theme-colored text-uppercase mb-10">6) Field of studies <span class="red">*</span></h5>
                                                        <div class="form-group mb-10">
                                                            <select class="form-control " >
                                                                <option> Education</option>
                                                                <option> Computer science</option>
                                                                <option> Accountancy</option>
                                                                <option> Engineering</option> 
                                                                <option>Other</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <h5 class="text-theme-colored text-uppercase mb-10">7) English Language Proficiency <span class="red">*</span></h5>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="contactChoice2" class="ml-30">Basic</label>
                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail"  > 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="contactChoice2">Intermediary</label>
                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail"  > 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="contactChoice2">Fluent</label>
                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail"  > 
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h5 class="text-theme-colored text-uppercase mb-0">8) Connectivity <span class="red">*</span></h5>

                                                        <small class="red"><b>This is an online learning opportunity. Participants need an internet connection and
                                                                device. The courses can be accessed through smartphone, tablet, desktop or laptop.</b></small>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h5 class="text-theme-colored text-uppercase mb-0">9) Do you have access to Internet?  <span class="red">*</span></h5>
                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail" class="ml-20">
                                                        <label for="contactChoice2">Yes</label>

                                                        <input type="radio" id="contactChoice3"  name="contact" value="mail"  class="ml-30">
                                                        <label for="contactChoice3">No</label>  <br>
                                                    </div>


                                                    <div class="col-md-12">
                                                        <h5 class="text-theme-colored text-uppercase mb-0">10) If you are selected, how do you access the course?  <span class="red">*</span></h5>
                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail" class="ml-20">
                                                        <label for="contactChoice2">Smart phone</label><br>

                                                        <input type="radio" id="contactChoice3"  name="contact" value="mail"  class="ml-20">
                                                        <label for="contactChoice3">Tablet</label>  <br>

                                                        <input type="radio" id="contactChoice3"  name="contact" value="mail"  class="ml-20" >
                                                        <label for="contactChoice3">Laptop</label>  <br>

                                                        <input type="radio" id="contactChoice3"  name="contact" value="mail"  class="ml-20">
                                                        <label for="contactChoice3">Desktop PC</label>  <br>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h5 class="text-theme-colored text-uppercase mb-0">11) If you are selected, do you plan to use the Computer Lab at the  <span class="red">*</span></h5>

                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail" class="ml-20">
                                                        <label for="contactChoice2">National Library</label><br>

                                                        <input type="radio" id="contactChoice3"  name="contact" value="mail"  class="ml-20">
                                                        <label for="contactChoice3">VTA Training Centres</label>  <br>

                                                        <input type="radio" id="contactChoice3"  name="contact" value="mail" class="ml-20">
                                                        <label for="contactChoice3">Colombo Public Library</label>  <br>

                                                        <input type="radio" id="contactChoice3"  name="contact" value="mail" class="ml-20">
                                                        <label for="contactChoice3"> No I do not</label>  <br>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h5 class="text-theme-colored text-uppercase mb-0">12) Indicate the scholarship you are applying for  <span class="red">*</span></h5>

                                                        <input type="radio" id="contactChoice2"  name="contact" value="mail" class="ml-20" >
                                                        <label for="contactChoice2">Coursera</label><br>

                                                        <input type="radio" id="contactChoice3"  name="contact" value="mail"  class="ml-20" >
                                                        <label for="contactChoice3">Udemy</label>  <br>

                                                        <input type="radio" id="contactChoice3"  name="contact" value="mail"  class="ml-20">
                                                        <label for="contactChoice3">Google</label>  <br> 
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h5 class="text-theme-colored text-uppercase mb-0">13) Consent <span class="red">*</span></h5>
                                                        <label class="red text-justify ml-20"> <small> We would be forwarding your email address to Commonwealth of Learning and to
                                                                Coursera for inviting you to the COL-Coursera-NL Skills Online for Employability
                                                                Program. Please tick one of the following to offer your consent to the same. You can
                                                                opt out if you do not like your email to be forwarded to them.</small> </label><br>


                                                        <input type="radio" id="contactChoice3"  name="contact" value="mail"  class="ml-30" >
                                                        <label for="contactChoice3">Yes, I give my consent</label>  <br>

                                                        <input type="radio" id="contactChoice3"  name="contact" value="mail" class="ml-30">
                                                        <label for="contactChoice3">No, I wish to opt out</label>  <br> 
                                                    </div>
                                                </div>
                                                <h5 class="text-theme-colored text-uppercase mb-0">14) Declaration <span class="red">*</span></h5>
                                                <label class="red text-justify" class="ml-20"> <small>By submitting this form, I certify that all information contained in this application
                                                        form are true and complete. I also commit to complete at least one course on
                                                        Coursera learning platform.</small> </label><br>

                                                <div class="form-group mb-0 mt-20">
                                                    <input name="form_botcheck" class="form-control" type="hidden" value="">
                                                    <button type="submit" class="btn btn-dark btn-theme-colored" data-loading-text="Please wait...">Submit</button>
                                                </div>
                                        </div>






                                        </form>
                                        <!-- Appointment Form Validation-->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
         
    </div>  
    <!-- end main-content -->

    <!-- Footer -->
     
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
 
 
 
