<!-- Start main-content -->
<div class="main-content bg-lighter">
    <!-- Section: inner-header -->

    <section class="inner-header divider" data-bg-img="<?php echo URL; ?>public/images/bg/banner3.png">

        <div class="container pt-70 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title text-white text-center">Contact</h2>
                        <ol class="breadcrumb text-left text-black mt-10">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li class="active text-gray-silver">Page Title</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider">
        <div class="container">
            <div class="row pt-30">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                                <div class="media-body"> <strong>OUR OFFICE LOCATION</strong>
                                    <p>No 14, Independence Avenue, Colombo 07, Sri Lanka.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                                <div class="media-body"> <strong>OUR CONTACT NUMBER</strong>
                                    <p> +94 113610772<br>+94 711919475</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                                <div class="media-body"> <strong>OUR CONTACT E-MAIL</strong>
                                    <p>help.skillsonline@mail.natlib.lk</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="line-bottom mt-0 mb-20">Contact Us</h3>
                    <p class="mb-20"></p>
                    <!-- Contact Form -->
                    <form id="contact_form" name="contact_form" class="" action="http://html.kodesolution.live/m/learnpress/v2.0/demo/includes/sendmail.php" method="post">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input name="form_botcheck" class="form-control" type="hidden" value="" />
                            <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Send your message</button>
                            <button type="reset" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
                        </div>
                    </form>

                    <!-- Contact Form Validation-->
                    <script type="text/javascript">
                        $("#contact_form").validate({
                            submitHandler: function (form) {
                                var form_btn = $(form).find('button[type="submit"]');
                                var form_result_div = '#form-result';
                                $(form_result_div).remove();
                                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                var form_btn_old_msg = form_btn.html();
                                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                $(form).ajaxSubmit({
                                    dataType: 'json',
                                    success: function (data) {
                                        if (data.status == 'true') {
                                            $(form).find('.form-control').val('');
                                        }
                                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                                        $(form_result_div).html(data.message).fadeIn('slow');
                                        setTimeout(function () {
                                            $(form_result_div).fadeOut('slow')
                                        }, 6000);
                                    }
                                });
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Google Map -->
    <section>
        <div class="container-fluid pt-0 pb-0">
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.870594493159!2d79.86344931459271!3d6.906073995009925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2597b05ec61eb%3A0x9c59717e7d332f45!2sNational%20Library%20of%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1614788764980!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->