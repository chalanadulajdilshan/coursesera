<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
$id = '';
$id = $_GET['id'];
$REGESTRATIONS = new Registrations($id);
?>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="author" content="PIXINVENT">
        <title>Edit News -  </title>
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

                                        <li class="breadcrumb-item active">Edit Student Registration
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
                                                            <label>NIC</label>
                                                            <input type="text" class="form-control"   name="nic"  value="<?php echo $REGESTRATIONS->nic ?>"  >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <input type="text" class="form-control"   name="first_name"  value="<?php echo $REGESTRATIONS->first_name ?>"  >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Middle Name</label>
                                                            <input type="text" class="form-control" name="middle_name"  value="<?php echo $REGESTRATIONS->middle_name ?>"  >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <input type="text" class="form-control" name="last_name"  value="<?php echo $REGESTRATIONS->last_name ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Gender</label>
                                                            <input type="text" class="form-control" name="gender"  value="<?php echo $REGESTRATIONS->gender ?>"  >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Date Of Birth</label> 
                                                            <input type="text" class="form-control" name="date_of_birth"  value="<?php echo $REGESTRATIONS->date_of_birth ?>"  >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="text" class="form-control" name="email"  value="<?php echo $REGESTRATIONS->email ?>"  >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Mobile Phone</label>
                                                            <input type="text" class="form-control" name="mobile_phone"  value="<?php echo $REGESTRATIONS->mobile_phone ?>"  >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Land Phone</label>
                                                            <input type="text" class="form-control" name="land_phone"  value="<?php echo $REGESTRATIONS->land_phone ?>"  >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Province</label>
                                                            <input type="text" class="form-control" name="province"  value="<?php echo $REGESTRATIONS->province ?>"  >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>District</label>
                                                            <?php
                                                            $DISTRICT = new District($id);
                                                            foreach ($DISTRICT->)
                                                            ?>
                                                            <select  class="form-control" name="district">
                                                                <option><?php echo $REGESTRATIONS->district ?> </option>
                                                            </select>
                                                            <?php } ?>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Is Student?</label>
                                                            <input type="text" class="form-control" name="is_student"  value="<?php echo $REGESTRATIONS->is_student ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8"> 
                                                        <div class="form-group">
                                                            <label>If yes, Details</label>
                                                            <input type="text" class="form-control" name="student_status"  value="<?php echo $REGESTRATIONS->student_status ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Employee Status</label>
                                                            <input type="text" class="form-control" name="employee_status"  value="<?php echo $REGESTRATIONS->employee_status ?>"  >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8"> 
                                                        <div class="form-group">
                                                            <label>If Unemployed, Reasons for Unemployed</label>
                                                            <input type="text" class="form-control" name="reason_for_unemployee"  value="<?php echo $REGESTRATIONS->reason_for_unemployee ?>"   >
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
                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->current_occupation ?>"  >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12"> 
                                                        <div class="form-group">
                                                            <label>Education</label>
                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->education ?>"  >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12"> 
                                                        <div class="form-group">
                                                            <label>Field of studies</label>
                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->field_of_study ?>" >
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
                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->have_internet ?>"  >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6"> 
                                                        <div class="form-group">
                                                            <label> If you are selected, do you plan to use the Computer Lab at the </label>
                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->how_access_course ?>"  >
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12"> 
                                                        <div class="form-group">
                                                            <label> If you are selected, Do you plan to use the Computer Lab at the </label>
                                                            <input type="text" class="form-control" name="full_name"  value="<?php echo $REGESTRATIONS->computer_lab ?>"  >
                                                        </div>
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
        <script src="ajax/js/news.js" type="text/javascript"></script>
        <script src="js/jquery.preloader.min.js" type="text/javascript"></script>
        <script src="tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
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