<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="author" content="PIXINVENT">
        <title>Create Teachers - EasyTutor.lk</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo-favicon.png"> 
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
        <link href="assets/css/jm.spinner.css" rel="stylesheet" type="text/css"/>
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.min.css">
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <!-- END: Theme CSS-->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">        <!-- BEGIN: Page CSS-->   
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"> 
        <link href="assets/css/preloader.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="someBlock vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

        <!-- BEGIN: Header-->
        <div class="header-navbar-shadow"></div>

        <!-- END: Header-->
        <?php include './header.php'; ?>

        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-12 mb-2 mt-1">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h5 class="content-header-title float-left pr-1 mb-0">Dashboard</h5>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb p-0 mb-0">
                                        <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                                        </li>

                                        <li class="breadcrumb-item active">Create Teachers
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body">  
                    <section id="info-tabs-">

                        <div class="card icon-tab"> 
                            <div class="card-content mt-2">
                                <div class="card-body">
                                    <form action="#" class="wizard-horizontal form repeater-default" id="form-data">
                                        <fieldset>
                                            <div class="br">
                                                <div class="row">  
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Teachers Full Name</label>
                                                            <input type="text" class="form-control" placeholder="Enter Full Name" id="full_name" name="full_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>NIC Number</label>
                                                            <input type="text" class="form-control" placeholder="Enter NIC Number" id="nic_number" name="nic_number">

                                                        </div>
                                                    </div>


                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Mobile Number </label>
                                                            <input type="text" class="form-control  " placeholder="Enter Mobile Number" id="mobile_number" name="mobile_number">
                                                        </div>
                                                    </div>  
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="text" class="form-control  " placeholder="Enter Email Address" id="email" name="email">
                                                        </div>
                                                    </div>  

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Select District</label>
                                                            <select class="select2 form-control" id="district" >
                                                                <option value="" selected="">-- Select District -- </option>
                                                                <?php
                                                                $DISTRICT = new District(NULL);
                                                                foreach ($DISTRICT->all() as $district) {
                                                                    ?>
                                                                    <option value="<?php echo $district['id'] ?>" ><?php echo $district['name'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div> 
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Select City</label>
                                                            <select class="select2 form-control" name="city" id="city-bar">
                                                                <option> -- Select District First --</option>
                                                            </select>
                                                        </div>
                                                    </div> 

                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Address </label>
                                                            <input type="text" class="form-control" placeholder="Enter Address" id="address" name="address"  >
                                                        </div>
                                                    </div>  
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Subject </label>
                                                            <input type="text" class="form-control" placeholder="Enter Address" id="subject" name="subject"  >
                                                        </div>
                                                    </div>  
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Teacher Login URL</label>
                                                            <input type="text" class="form-control" placeholder="Enter teacher login url" id="login_url_teacher" name="login_url_teacher"   >
                                                        </div>
                                                    </div>  
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Student Login URL</label>
                                                            <input type="text" class="form-control" placeholder="Enter student login url" id="login_url_student" name="login_url_student" >
                                                        </div>
                                                    </div> 

                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>User Name</label>
                                                            <input type="text" class="form-control" placeholder="Enter User Name" id="username" name="username"  >
                                                        </div>
                                                    </div>  
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <input type="text" class="form-control" placeholder="Enter Password" id="password" name="password"  >
                                                        </div>
                                                    </div>  


                                                    <div class="col-sm-12"  > 
                                                        <label>Teacher Image <b><span class="text-danger text-uppercase">Please use this image size ( 255px * 300px )</span></b></label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="image_name" name="image_name">
                                                            <label class="custom-file-label" for="main_img_tour">select image</label>
                                                        </div> 
                                                    </div>


                                                    <div class="col-md-6  mt-10">

                                                        <div class="form-group">
                                                            <div class="checkbox checkbox-primary mt-1">
                                                                <input type="checkbox" id="agree"   name="is_active" value="1" checked="" >
                                                                <label for="agree" class="text-danger">Is Active / Inactive</label>
                                                            </div>  
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-6"> 
                                                        <button class="btn btn-warning mb-1" type="button" id="create" style="float: right;color: white;margin-top: 20px">
                                                            <span class=" spinner-border-sm" role="status" aria-hidden="true"></span>
                                                            Create
                                                        </button>
                                                        <input type="hidden"   name="create"/>
                                                    </div>
                                                </div>
                                            </div>  

                                        </fieldset> 
                                    </form> 
                                </div>
                            </div>
                        </div> 
                    </section>
                </div>


            </div>
        </div>
        <!-- END: Content-->



        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <!-- BEGIN: Footer-->

        <!-- END: Footer-->
        <script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script> 

        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
        <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>

        <script src="app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
        <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script> 
        <script src="app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
        <script src="app-assets/js/core/app-menu.min.js"></script>
        <script src="app-assets/js/core/app.min.js"></script>
        <script src="app-assets/js/scripts/components.min.js"></script>
        <script src="app-assets/js/scripts/footer.min.js"></script>
        <script src="app-assets/js/scripts/customizer.min.js"></script> 
        <script src="app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
        <script src="app-assets/js/scripts/forms/number-input.min.js"></script>
        <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
        <script src="app-assets/js/scripts/forms/select/form-select2.min.js"></script>
        <!-- END: Page JS-->
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="ajax/js/city.js" type="text/javascript"></script>
        <script src="ajax/js/teacher.js" type="text/javascript"></script>
        <script src="js/jquery.preloader.min.js" type="text/javascript"></script>



    </body>

</html>