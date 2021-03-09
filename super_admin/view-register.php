<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';

$id = '';
$id = $_GET['id'];
$REGESTRATIONS = new Registrations($id);
$DISTRICT = new District($REGESTRATIONS->district);
$PROVINCE = new DefaultData();
$prov = $PROVINCE->provinces();
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="author" content="PIXINVENT">
        <title>View Register - Skills Online</title>
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

                                        <li class="breadcrumb-item active">View Applicant Details
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="invoice-view-wrapper">
                    <div class="row">
                        <!-- invoice view page -->
                        <div class="col-xl-9 col-md-8 col-12">
                            <div class="card invoice-print-area">
                                <div class="card-body pb-0 mx-25">
                                    <!-- header section -->
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <span class="invoice-number mr-50">ID# </span>
                                            <span><?php echo $REGESTRATIONS->id ?></span>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <div class="d-flex align-items-center justify-content-lg-end flex-wrap">
                                                <!--                                                <div class="mr-3">
                                                                                                    <small class="text-muted">Issue Date:</small>
                                                                                                    <span>08/10/2019</span>
                                                                                                </div>-->
                                                <div>
                                                    <small class="text-muted">Date Recorded:</small>
                                                    <span><?php echo $REGESTRATIONS->created_date ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- logo and title -->
                                    <div class="row my-2 my-sm-3">
                                        <div class="col-sm-6 col-12 text-center text-sm-left order-2 order-sm-1">
                                            <h4 class="text-primary"> <?php echo $REGESTRATIONS->first_name . ' ' . $REGESTRATIONS->middle_name . ' ' . $REGESTRATIONS->last_name ?> </h4>
                                            <h5 class="invoice-from">Scholarship :-  <span> <?php echo $REGESTRATIONS->scholarship ?></span></h5>
                                        </div>
                                    </div>
                                    <hr>
                                    <!-- invoice address and contact -->
                                    <div class="row invoice-info">

                                        <div class="card icon-tab"> 

                                            <div class="card-content mt-2">

                                                <div class="card-body">
                                                    <h6 class="invoice-from">How did you hear about us :-  <span> <?php echo $REGESTRATIONS->about_us ?></span></h6>
                                                    <form action="#" class="wizard-horizontal form repeater-default" id="form-data">
                                                        <fieldset>
                                                            <div class="br">
                                                                <div class="row">  
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>First Name</label>
                                                                            <input type="text" class="form-control"    value="<?php echo $REGESTRATIONS->first_name ?>" readonly="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Middle Name</label>
                                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->middle_name ?>" readonly="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Last Name</label>
                                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->last_name ?>" readonly="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Gender</label>
                                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->gender ?>" readonly="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Date Of Birth</label>
                                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->date_of_birth ?>" readonly="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Email</label>
                                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->email ?>" readonly="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Mobile Phone</label>
                                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->mobile_phone ?>" readonly="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Land Phone</label>
                                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->land_phone ?>" readonly="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Province</label>
                                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $prov[$REGESTRATIONS->province] ?>" readonly="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>District</label>
                                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $DISTRICT->name ?>" readonly="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label>Is Student?</label>
                                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->is_student ?>" readonly="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-8"> 
                                                                        <div class="form-group">
                                                                            <label>If yes, Details</label>
                                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->student_status ?>" readonly="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label>Employee Status</label>
                                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->employee_status ?>" readonly="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-8"> 
                                                                        <div class="form-group">
                                                                            <label>If Unemployed, Reasons for Unemployed</label>
                                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->reason_for_unemployee ?>" readonly="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12"> 
                                                                        <div class="form-group">
                                                                            <label> If you are unemployed, please provide us some details to assess your suitability for the scholarship </label>
                                                                            <textarea class="form-control" readonly="true"><?php echo $REGESTRATIONS->reason_for_unemployee ?>" </textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12"> 
                                                                        <div class="form-group">
                                                                            <label>Current Occupation </label>
                                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->current_occupation ?>" readonly="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12"> 
                                                                        <div class="form-group">
                                                                            <label>Education</label>
                                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->education ?>" readonly="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12"> 
                                                                        <div class="form-group">
                                                                            <label>Field of studies</label>
                                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->field_of_study ?>" readonly="true">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-12"> 
                                                                        <div class="form-group">
                                                                            <label>English Language Proficiency</label>
                                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->english_language_proficiency ?>" readonly="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6"> 
                                                                        <div class="form-group">
                                                                            <label> Do you have access to Internet?</label>
                                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->have_internet ?>" readonly="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6"> 
                                                                        <div class="form-group">
                                                                            <label> If you are selected, do you plan to use the Computer Lab at the </label>
                                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->how_access_course ?>" readonly="true">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-12"> 
                                                                        <div class="form-group">
                                                                            <label> If you are selected, Do you plan to use the Computer Lab at the </label>
                                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->computer_lab ?>" readonly="true">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>  

                                                        </fieldset> 
                                                    </form> 
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <hr>
                                </div>

                            </div>
                        </div>
                        <!-- invoice action  -->
                        <div class="col-xl-3 col-md-4 col-12">
                            <div class="card invoice-action-wrapper shadow-none border">
                                <div class="card-body">
                                    <div class="invoice-action-btn">
                                        <button class="btn btn-primary btn-block invoice-send-btn">
                                            <i class="bx bx-send"></i>
                                            <span>Print Details</span>
                                        </button>
                                    </div>
                                    <br>
                                    <div class="invoice-action-btn">
                                        <a href="edit-registration.php?id=<?php echo $REGESTRATIONS->id ?>"  target="_blank" class="btn btn-light-primary btn-block">
                                            <span>Edit Details</span>
                                        </a>
                                    </div>
                                    <br>
                                    <div class="invoice-action-btn">
                                        <button class="btn btn-light-primary btn-block invoice-print">
                                            <span>Contact Via Mail</span>
                                        </button>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--                <div class="content-body">  
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
                                                                            <label>Student Id</label>
                                                                            <input type="text" class="form-control"    value="<?php echo $REGESTRATIONS->student_id ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Student Full Name</label>
                                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->full_name ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Email</label>
                                                                            <input type="text" class="form-control" name="email"  value="<?php echo $REGESTRATIONS->email ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Phone Number</label>
                                                                            <input type="text" class="form-control"  name="phone_number" value="<?php echo $REGESTRATIONS->phone_number ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6"> 
                                                                    </div>
                                                                    <div class="col-sm-6"> 
                                                                        <button class="btn btn-warning mb-1" type="button" id="update" style="float: right;color: white;margin-top: 20px">
                                                                            <span class=" spinner-border-sm" role="status" aria-hidden="true"></span>
                                                                            Update
                                                                        </button>
                                                                        <input type="hidden"   name="id" value="<?php echo $id ?>"/>
                                                                        <input type="hidden"   name="update"/>
                                                                    </div>
                
                                                                </div>
                                                            </div>  
                
                                                        </fieldset> 
                                                    </form> 
                                                </div>
                                            </div>
                                        </div> 
                                    </section>
                                </div> -->
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
        <script src="js/jquery.preloader.min.js" type="text/javascript"></script>
        <script src="tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
        <script src="ajax/js/student.js" type="text/javascript"></script>
        <script>
            tinymce.init({
                selector: "#description",
                // ===========================================
                // INCLUDE THE PLUGIN
                // ===========================================

                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                // ===========================================
                // PUT PLUGIN'S BUTTON on the toolbar
                // ===========================================

                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
                // ===========================================
                // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
                // ===========================================

                relative_urls: false

            });
        </script>

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function () {
                $(".datepicker").datepicker({
                    dateFormat: 'yy-mm-dd',
                    minDate: 'today'
                });
            });
        </script> 
    </body>

</html>