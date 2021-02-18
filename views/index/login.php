<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="CRMS - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Login - CRMS admin template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo MAIN_PUBLIC_URL; ?>img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo MAIN_PUBLIC_URL; ?>css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?php echo MAIN_PUBLIC_URL; ?>css/font-awesome.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="<?php echo MAIN_PUBLIC_URL; ?>css/feather.css">

    <!--font style-->
    <link href="../css2.css?family=Inter:wght@200;300;400;500;600&display=swap" rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo MAIN_PUBLIC_URL; ?>css/style.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

    <script>
        var Globals = <?php
                        echo json_encode(array(
                            'url_admin' => URL_Admin, 'url' => URL
                        ));
                        ?>;
    </script>
</head>

<body class="account-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="account-content">

            <div class="container">

                <!-- Account Logo -->
                <div class="account-logo">
                    <a href="index.html"><img src="<?php echo MAIN_PUBLIC_URL; ?>img/logo.png" alt="Dreamguy's Technologies"></a>
                </div>
                <!-- /Account Logo -->

                <div class="account-box">
                    <div class="account-wrapper">
                        <h3 class="account-title">Login</h3>
                        <p class="account-subtitle">Access to our dashboard</p>

                        <!-- Account Form -->
                        <form id="sign_in">
                            <div class="form-group">
                                <label>Username</label>
                                <input id="username" name="username" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label>Password</label>
                                    </div>
                                    <div class="col-auto">
                                        <a id="show_pass" class="text-muted" href="#">
                                            Show Password
                                        </a>
                                    </div>
                                </div>
                                <input id="password" name="password" class="form-control" type="password">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn login_btn" type="submit">Login</button>
                            </div>
                            <div class="account-footer">
                            </div>
                        </form>
                        <!-- /Account Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="<?php echo MAIN_PUBLIC_URL; ?>js/jquery-3.5.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="<?php echo MAIN_PUBLIC_URL; ?>js/popper.min.js"></script>
    <script src="<?php echo MAIN_PUBLIC_URL; ?>js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="<?php echo MAIN_PUBLIC_URL; ?>js/app.js"></script>



    <script>
        $('#show_pass').click(function() {

            var y = $('#show_pass');

            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
                y.html('Hide Password');
            } else {
                x.type = "password";
                y.html('Show Password');
            }
        });





        $("form#sign_in").submit(function(e) {
            e.preventDefault();

            

            $(".login_btn").prop('disabled', "disabled");
            $(".login_btn").html("Please Wait..."); //html
            var data = new FormData(this);
            //            alert(Globals.url_admin);
            $.ajax({
                url: Globals.url + "index/login/",
                type: "POST",
                data: data,
                dataType: "json",
                async: true,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {

                    //                        $(".username_error").html('');
                    //                        $(".password_error").html('');

                    $(".login_btn").prop('disabled', false);
                    $(".login_btn").html("Login");
                    if (data.has_errors === true) {
                        toastr.error("Somthing went wrong", 'Login Error');



                    } else {
                        if (data.status === true) {

                            window.open(Globals.url + 'dashboard', '_self');

                        } else {
                            Notiflix.Notify.Failure('Username or password invalid');
                        }
                    }
                }
            });
        });
    </script>
 
</body>

</html>