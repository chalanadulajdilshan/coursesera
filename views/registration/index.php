<!DOCTYPE html>
<html dir="ltr" lang="en">

    <head>

        <!-- Meta Tags -->
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="LearnPress | Education & Courses HTML Template" />
        <meta name="keywords" content="academy, course, education, education html theme, elearning, learning," />
        <meta name="author" content="ThemeMascot" />

        <!-- Page Title -->
        <title>LearnPress | Education & Courses HTML Template</title>

        <!-- Favicon and Touch Icons -->
        <link href="<?php echo MAIN_PUBLIC_URL ?>images/favicon.png" rel="shortcut icon" type="image/png">
        <link href="<?php echo MAIN_PUBLIC_URL ?>images/apple-touch-icon.png" rel="apple-touch-icon">
        <link href="<?php echo MAIN_PUBLIC_URL ?>images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
        <link href="<?php echo MAIN_PUBLIC_URL ?>images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
        <link href="<?php echo MAIN_PUBLIC_URL ?>images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

        <!-- Stylesheet -->
        <link href="<?php echo MAIN_PUBLIC_URL ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo MAIN_PUBLIC_URL ?>css/jquery-ui.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo MAIN_PUBLIC_URL ?>css/animate.css" rel="stylesheet" type="text/css">
        <link href="<?php echo MAIN_PUBLIC_URL ?>css/css-plugin-collections.css" rel="stylesheet"/>
        <!-- CSS | menuzord megamenu skins -->
        <link id="menuzord-menu-skins" href="<?php echo MAIN_PUBLIC_URL ?>css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
        <!-- CSS | Main style file -->
        <link href="<?php echo MAIN_PUBLIC_URL ?>css/style-main.css" rel="stylesheet" type="text/css">
        <!-- CSS | Preloader Styles -->
        <link href="<?php echo MAIN_PUBLIC_URL ?>css/preloader.css" rel="stylesheet" type="text/css">
        <!-- CSS | Custom Margin Padding Collection -->
        <link href="<?php echo MAIN_PUBLIC_URL ?>css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
        <!-- CSS | Responsive media queries -->
        <link href="<?php echo MAIN_PUBLIC_URL ?>css/responsive.css" rel="stylesheet" type="text/css">
        <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
        <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

        <!-- Revolution Slider 5.x CSS settings -->
        <link  href="<?php echo MAIN_PUBLIC_URL ?>js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
        <link  href="<?php echo MAIN_PUBLIC_URL ?>js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
        <link  href="<?php echo MAIN_PUBLIC_URL ?>js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

        <!-- CSS | Theme Color -->
        <link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

        <!-- external javascripts -->
        <script src="<?php echo MAIN_PUBLIC_URL ?>js/jquery-2.2.4.min.js"></script>
        <script src="<?php echo MAIN_PUBLIC_URL ?>js/jquery-ui.min.js"></script>
        <script src="<?php echo MAIN_PUBLIC_URL ?>js/bootstrap.min.js"></script>
        <!-- JS | jquery plugin collection for this theme -->
        <script src="<?php echo MAIN_PUBLIC_URL ?>js/jquery-plugin-collection.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <div id="wrapper" class="clearfix">
            <!-- preloader -->
            <div id="preloader">
                <div id="spinner">
                    <img alt="" src="<?php echo MAIN_PUBLIC_URL ?>images/preloaders/5.gif">
                </div>
                <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
            </div>

            <!-- Start main-content -->
            <div class="main-content">
                <!-- Section: home -->
                <section id="home" class="divider bg-lighter" >
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container pb-100 pt-50">
                                <div class="row">
                                    <div class="col-md-6 col-md-push-3">
                                        <div class="text-center mb-60"><a href="#" class=""><img alt="" src="<?php echo MAIN_PUBLIC_URL ?>images/logo-wide.png"></a></div>
                                        <div class="bg-lightest border-1px p-25">
                                            <h4 class="text-theme-colored text-uppercase m-0">Make an Appointment</h4>
                                            <div class="line-bottom mb-0"></div>
                                            <p>Lorem ipsum dolor sit amet, consectetur elit.</p>
                                            <form id="appointment_form" name="appointment_form" class="mt-30" method="post" action="http://html.kodesolution.live/m/learnpress/v2.0/demo/includes/appointment.php">
                                                <div class="row">
                                                   
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
                                                    <div class="col-sm-12">
                                                        <div class="form-group mb-10">
                                                            <select class="form-control required">
                                                                <option> -- Select Your Course --</option>
                                                                <?php foreach ($this->province as $key => $value) { ?>
<option> <?php echo $value['name'] ?></option>
                                                                <?php }
                                                                ?>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group mb-10">
                                                            <input name="form_phone" class="form-control required" type="text" placeholder="Enter NIC Number" aria-required="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group mb-10">
                                                            <input name="form_phone" class="form-control required" type="password" placeholder="Enter Password" aria-required="true">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group mb-0 mt-20">
                                                    <input name="form_botcheck" class="form-control" type="hidden" value="">
                                                    <button type="submit" class="btn btn-dark btn-theme-colored" data-loading-text="Please wait...">Submit</button>
                                                </div>
                                            </form>
                                            <!-- Appointment Form Validation-->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>  
            <!-- end main-content -->

            <!-- Footer -->
            <footer id="footer" class="footer bg-black-222">
                <div class="container p-20">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="mb-0">Copyright &copy;2016 ThemeMascot. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </footer>
            <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- end wrapper -->

        <!-- Footer Scripts -->
        <!-- JS | Custom script for all pages -->
        <script src="<?php echo MAIN_PUBLIC_URL ?>js/custom.js"></script>
        <script src="<?php echo MAIN_PUBLIC_URL ?>js/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
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

</html>

