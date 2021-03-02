<!DOCTYPE html>
<?php
include '../class/include.php';
$STUDENT = new Student(NULL);
$LAST_ID = $STUDENT->getLastStudentId();
$LAST_ID = $LAST_ID + 1;
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
        <link rel="shortcut icon" type="image/x-icon" href="../images/logo-favicon.png">
        <title>Register Page - Frest - Bootstrap HTML admin template</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">


        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/pages/authentication.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link href="app-assets/css/jquery.formValid.css" rel="stylesheet" type="text/css"/>
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="vertical-layout vertical-menu-modern semi-dark-layout 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="semi-dark-layout">
        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body"><!-- register section starts -->
                    <section class="row flexbox-container">
                        <div class="col-xl-8 col-10">
                            <div class="card bg-authentication mb-0">
                                <div class="row m-0">
                                    <!-- register section left -->
                                    <div class="col-md-6 col-12 px-0">
                                        <div class="card disable-rounded-right mb-0   h-100 d-flex justify-content-center">
                                            <div class="card-header pb-1">
                                                <center>
                                                    <a href="../index.php">  <img class="img-fluid" src="app-assets/images/Logo.png" alt="mytravelpartner" width="65%"></a>
                                                </center>
                                            </div>

                                            <div class="card-content">
                                                <div class="card-body">
                                                    <form  method="POST" id="form">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-12 mb-80">
                                                                <label  class="text-bold-600"  for="inputfirstname4">Full Name</label>
                                                                <input type="text" class="form-control" id="first_name"  placeholder="Full Name"  name="full_name" data-field="first_name">
                                                                <div class="valid-message"></div>
                                                            </div>

                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6  mb-80">
                                                                <label class="text-bold-600" for="exampleInputUsername1">Mobile Number</label>
                                                                <input type="text" class="form-control phone-inputmask" id="exampleInputUsername1" placeholder="Mobile Number" name="phone_number" data-field="mobile_number" >
                                                                <div class="valid-message"></div>
                                                            </div>

                                                            <div class="form-group col-md-6 mb-80">
                                                                <label class="text-bold-600" for="exampleInputEmail1">Email address</label>
                                                                <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Email address" name="email" data-field="email">
                                                                <div class="valid-message"></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-80">
                                                            <label class="text-bold-600" for="exampleInputPassword1">Select Your Teacher</label>
                                                            <div class="form-group">

                                                                <select class="select2 form-control" name="class_type" id="class_type" required="">
                                                                    <option value="" selected="">Select Your Teacher</option>
                                                                    <option value="1" >Theory</option> 
                                                                    <option value="2" >Revision</option> 
                                                                    <option value="3" >Practical</option> 
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6  ">
                                                                <label class="text-bold-600" for="exampleInputPassword1">Student ID</label>
                                                                <input type="text" class="form-control" id="exampleInputPassword1"  placeholder="Student ID"    name="student_id" readonly="" value="<?php echo 'STU000' . $LAST_ID ?>">
                                                            </div>

                                                            <div class="form-group col-md-6  ">
                                                                <label class="text-bold-600" for="exampleInputPassword1">Password</label>
                                                                <input type="password" class="form-control" id="exampleInputPassword1"  placeholder="Password" data-field="password"  name="password">
                                                                <div class="valid-message"></div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="text-center text-danger btn-padding font-size-new" id="message"></div>

                                                        </div>
                                                        <button type="submit" class="btn btn-primary glow position-relative w-100">SIGN UP<i  id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                                                    </form>
                                                    <hr>
                                                    <div class="d-flex flex-md-row flex-column justify-content-around">
                                                        <a href="#"  class="btn btn-social btn-google btn-block font-small-3 mr-md-1 mb-md-0 mb-1">
                                                            <i class="bx bxl-google font-medium-3"></i><span  class="pl-50 d-block text-center">Google</span></a>
                                                        <a href="#" class="btn btn-social btn-block mt-0 btn-facebook font-small-3">
                                                            <i class="bx bxl-facebook-square font-medium-3"></i><span
                                                                class="pl-50 d-block text-center">Facebook</span></a>
                                                    </div>
                                                    <hr>
                                                    <div class="text-center"><small class="mr-25">Already have an account?</small><a href="login.php"><small>Sign in</small> </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- image section right -->
                                    <div class="col-md-6 d-md-block d-none text-center align-self-center  " style="padding: 0px">
                                        <img class="img-fluid img-b-radius" src="app-assets/images/pages/register.png" alt="mytravelpartner">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- register section endss -->
                </div>
            </div>
        </div>
        <!-- END: Content-->


        <!-- BEGIN: Vendor JS-->
        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
        <script src="app-assets/js/scripts/forms/select/form-select2.min.js"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
        <script src="app-assets/js/core/app-menu.min.js"></script>
        <script src="app-assets/js/core/app.min.js"></script>
        <script src="app-assets/js/scripts/components.min.js"></script>
        <script src="app-assets/js/scripts/footer.min.js"></script>

        <!-- END: Theme JS-->
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="js/jquery.formValid.js" type="text/javascript"></script>
        <script src="ajax/js/registration.js" type="text/javascript"></script>
        <script src="js/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
        <script>
            $(function (e) {
                "use strict";
                $(".date-inputmask").inputmask("dd/mm/yyyy"),
                        $(".phone-inputmask").inputmask("9999999999"),
                        $(".email-inputmask").inputmask({
                    mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[*{2,6}][*{1,2}].*{1,}[.*{2,6}][.*{1,2}]"
                    , greedy: !1
                    , onBeforePaste: function (n, a) {
                        return (e = e.toLowerCase()).replace("mailto:", "")
                    }
                    , definitions: {
                        "*": {
                            validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~/-]"
                            , cardinality: 1
                            , casing: "lower"
                        }
                    }
                })
            });</script>

    </body>
    <!-- END: Body-->

</html>