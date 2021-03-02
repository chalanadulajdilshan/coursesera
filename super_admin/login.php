<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Admin - Skills Online </title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
        <link rel="shortcut icon" type="image/x-icon" href="../images/logo-favicon.png">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <!-- END: Vendor CSS-->

        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
        <!-- END: Theme CSS-->
        <link href="css/jquery.formValid.css" rel="stylesheet" type="text/css"/>
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/pages/authentication.css">
        <link href="../css/jquery.formValid.css" rel="stylesheet" type="text/css"/>
         <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- END: Custom CSS-->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <!-- END: Custom CSS-->
        <link href="app-assets/css/jquery.formValid.css" rel="stylesheet" type="text/css"/>
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
                <div class="content-body"><!-- login page start -->
                    <section id="auth-login" class="row flexbox-container">
                        <div class="col-xl-8 col-11">
                            <div class="card bg-authentication mb-0">
                                <div class="row m-0">
                                    <!-- left section-login -->
                                    <div class="col-md-6 col-12 px-0">
                                        <div class="card disable-rounded-right mb-0   h-100 d-flex justify-content-center">
                                            <div class="card-header pb-1">
                                                <div class="card-title">
                                                    <center>
                                                        <a href="#">  <img class="img-fluid" src="app-assets/images/Logo.png" alt="easytutor.lk" style="width: 60%"></a>
                                                    </center>
                                                </div>
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                              
                                                    <div class="divider">
                                                        <div class="divider-text text-uppercase text-muted"><small>or login with
                                                                email</small>
                                                        </div>
                                                    </div>
                                                    <form action="" id="form">
                                                        <div class="form-group mb-50">
                                                            <label class="text-bold-600" for="exampleInputEmail1">User Name</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="User Name"  name="username"   data-field="username">
                                                            <div class="valid-message"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="text-bold-600" for="exampleInputPassword1">Password</label>
                                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" id="password" data-field="password">
                                                            <div class="valid-message"></div>
                                                        </div>
                                                        <div class="form-group d-flex flex-md-row flex-column justify-content-between align-items-center">
                                                            <div class="text-left">
                                                                <div class="checkbox checkbox-sm">
                                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                                    <label class="checkboxsmall" for="exampleCheck1"><small>Keep me logged in</small></label>
                                                                </div>
                                                            </div>
<!--                                                            <div class="text-right"><a href="forget-password.php" class="card-link"><small>Forgot Password?</small></a></div>-->
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="text-center text-danger btn-padding font-size-new" id="message"></div>

                                                        </div>
                                                        <button type="submit" class="btn btn-primary glow w-100 position-relative">Login</button> 
                                                    </form>
                                                    <hr>
<!--                                                    <div class="text-center"><small class="mr-25">Don't have an account?</small><a  href="#"><small>Sign up</small></a></div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- right section image -->
                                    <div class="col-md-6 d-md-block d-none text-center align-self-center  " style="padding: 0px">
                                        <div class="card-content">
                                            <img class="img-fluid img-b-radius" src="app-assets/images/pages/login.png" alt="Mytravelpartner">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>  
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
 

        <!-- BEGIN: Theme JS-->
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
        <script src="app-assets/js/core/app-menu.min.js"></script>
        <script src="app-assets/js/core/app.min.js"></script>
        <script src="app-assets/js/scripts/components.min.js"></script>
        <script src="app-assets/js/scripts/footer.min.js"></script>
        <!-- END: Theme JS-->
        <script src="js/jquery.formValid.js" type="text/javascript"></script>
        <script src="ajax/js/login.js" type="text/javascript"></script>
    </body>

</html>