<!DOCTYPE html>
<html dir="ltr" lang="en">


    <head>

        <!-- Meta Tags -->
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Skills Online Sri Lanka" />
        <meta name="keywords" content="Skills Online Sri Lanka" />
        <meta name="author" content="ThemeMascot" />

        <!-- Page Title -->
        <title>Skills Online Sri Lanka</title>

        <!-- Favicon and Touch Icons -->
        <link href="<?php echo URL; ?>public/images/favicon.png" rel="shortcut icon" type="image/png">
        <link href="<?php echo URL; ?>public/images/apple-touch-icon.png" rel="apple-touch-icon">
        <link href="<?php echo URL; ?>public/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
        <link href="<?php echo URL; ?>public/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
        <link href="<?php echo URL; ?>public/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

        <!-- Stylesheet -->
        <link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo URL; ?>public/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo URL; ?>public/css/animate.css" rel="stylesheet" type="text/css">
        <link href="<?php echo URL; ?>public/css/css-plugin-collections.css" rel="stylesheet"/>
        <!-- CSS | menuzord megamenu skins -->
        <link id="menuzord-menu-skins" href="<?php echo URL; ?>public/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
        <!-- CSS | Main style file -->
        <link href="<?php echo URL; ?>public/css/style-main.css" rel="stylesheet" type="text/css">
        <!-- CSS | Preloader Styles -->
        <link href="<?php echo URL; ?>public/css/preloader.css" rel="stylesheet" type="text/css">
        <!-- CSS | Custom Margin Padding Collection -->
        <link href="<?php echo URL; ?>public/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
        <!-- CSS | Responsive media queries -->
        <link href="<?php echo URL; ?>public/css/responsive.css" rel="stylesheet" type="text/css">
        <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
        <!-- <link href="<?php echo URL; ?>public/css/style.css" rel="stylesheet" type="text/css"> -->



        <!-- CSS | Theme Color -->
        <link href="<?php echo URL; ?>public/css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

        <link href="<?php echo URL; ?>public/css/jquery.formValid.css" rel="stylesheet" type="text/css"/>

        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <link href="<?php echo URL; ?>public/css/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />

        <script>
            var public_url = <?php echo json_encode(MAIN_PUBLIC_URL); ?>;
            var url = <?php echo json_encode(URL); ?>;
        </script>
    </head>
    <body class="someBlock">
        <div id="wrapper" class="clearfix">
            <header id="header" class="header">
                <div class="header-top p-0 bg-lighter xs-text-center" style="background-color: #d6d6d6 !important;">
                    <div class="container pt-0 pb-0">
                        <div class="row">
                            <div class="col-md-3">
                                <a class="menuzord-brand pull-left flip" href="./">
                                    <img src="<?php echo URL; ?>public/images/logo.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 hidden-sm hidden-xs">
                                <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                                    <i class="fa fa-envelope text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                                    <a href="#" class="font-12 text-gray text-uppercase">Mail Us Today</a>
                                    <h5 class="font-13 text-black m-0"> <a href="mailto:help.skillsonline@mail.natlib.lk">help.skillsonline@mail.natlib.lk</a></h5>
                                </div>
                            </div>
                            <div class="col-md-3 hidden-sm hidden-xs">
                                <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                                    <i class="fa fa-phone-square text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                                    <a href="#" class="font-12 text-gray text-uppercase">Call us for more details</a>
                                    <h5 class="font-13 text-black m-0"> <a href="tel:+94113610772">+94 1136 10772</a></h5>
                                </div>
                            </div>
                            <div class="col-md-3 hidden-sm hidden-xs">
                                <a class="menuzord-brand pull-left flip" style="margin: 10px 0px 0px 0;" href="./">
                                    <img src="<?php echo URL; ?>public/images/logo02.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-nav">
                    <div class="header-nav-wrapper navbar-scrolltofixed bg-lightest">
                        <div class="container">
                            <nav id="menuzord" class="menuzord blue bg-lightest">
                                <ul class="menuzord-menu">
                                    <li class=""><a href="<?php echo URL; ?>">Home</a>
                                    </li>
                                    <li><a href="<?php echo URL; ?>aboutus">About Us</a>

                                    </li>
                                    <li><a href="<?php echo URL; ?>course">Scholarship</a>

                                    </li>
                                    <li><a href="<?php echo URL; ?>success_stories">Success Stories</a>

                                    </li>
                                    <li><a href="<?php echo URL; ?>contactus">Contact Us</a>

                                    </li>
                                    <li class="">
                                        <a class="btn btn-default btn-transparent btn-theme-colored btn-circled btn-lg" href="<?php echo URL; ?>registration" style="border: 3px solid;"><b>Register Now</b></a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Start main-content -->
            <div class="main-content">
                <!-- Section: home -->
                <section id="home" class="divider bg-lighter" >
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container pb-100 pt-50"> 
                                <div class="main-content">
                                    <!-- Section: home -->
                                    <section id="home" class="divider bg-lighter" >
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                            

                                                    <div class="container   "  style="padding-bottom: 0px!important">  
                                                        <div class="col-md-12 bg-white border-1px">

                                                            <iframe src="https://forms.gle/uWVMMfVQaf9weTRTA" title="W3Schools Free Online Web Tutorials" style="height: 800px;">   </iframe>




                                                        </div>

                                                    </div>


                                                
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>


        </div>
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

        <footer id="footer" class="footer bg-black-222" data-bg-img="images/footer-bg.png">

            <div class="footer-bottom bg-black-333">
                <div class="container pt-15 pb-10">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="font-11 text-black-777 m-0">Copyright &copy;2021 ICT Unit VTA. All Rights Reserved</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="widget no-border m-0">
                                <ul class="list-inline sm-text-center mt-5 font-12">
                                    <li>
                                        <a href="#">FAQ</a>
                                    </li>
                                    <li>|</li>
                                    <li>
                                        <a href="#">Help Desk</a>
                                    </li>
                                    <li>|</li>
                                    <li>
                                        <a href="#">Support</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="<?php echo URL; ?>public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="<?php echo MAIN_PUBLIC_URL ?>js/sweetalert.min.js" type="text/javascript"></script>
        <script src="<?php echo MAIN_PUBLIC_URL ?>js/jquery.formValid.js" type="text/javascript"></script>

        <script src="<?php echo MAIN_PUBLIC_URL ?>ajax/js/registration.js" type="text/javascript"></script>
        <script src="<?php echo MAIN_PUBLIC_URL ?>ajax/js/district.js"></script>

        <script src="<?php echo MAIN_PUBLIC_URL ?>js/jquery.preloader.min.js" type="text/javascript"></script> 
        <script src="<?php echo MAIN_PUBLIC_URL ?>js/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
        <script src="<?php echo MAIN_PUBLIC_URL ?>js/dobpicker.js" type="text/javascript"></script>
        <script src="<?php echo MAIN_PUBLIC_URL ?>/ajax/js/nic-check.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $.dobPicker({
                    daySelector: '#dobday', /* Required */
                    monthSelector: '#dobmonth', /* Required */
                    yearSelector: '#dobyear', /* Required */
                    dayDefault: 'Day', /* Optional */
                    monthDefault: 'Month', /* Optional */
                    yearDefault: 'Year', /* Optional */
                    minimumAge: 12, /* Optional */
                    maximumAge: 80 /* Optional */
                });
            });
        </script>

    </body>


</html>