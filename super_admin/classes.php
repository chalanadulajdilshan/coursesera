<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title></title>
        <link rel="apple-touch-icon" href="app-assets/images/logo-favicon.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo-favicon.png">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/swiper.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/ui/plyr.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/toastr.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/toastr.css">        <!-- END: Theme CSS-->
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-ecommerce.min.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- END: Custom CSS-->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

        <!-- BEGIN: Header-->
        <?php
        include 'header.php';
        ?>
        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-12 mb-2 mt-1">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h5 class="content-header-title float-left pr-1 mb-0">Tabs</h5>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb p-0 mb-0">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#">Components</a>
                                        </li>
                                        <li class="breadcrumb-item active">Tabs
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body"><!-- Basic tabs start -->
                    <section id="basic-tabs-components">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <h4>Basic Tab</h4>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <ul class="nav nav-tabs nav-justified" role="tablist">
                                        <li class="nav-item current">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Online_Class" aria-controls="Online_Class" role="tab" aria-selected="true">
                                                <i class="bx bx-home align-middle"></i>
                                                <span class="align-middle">Online Class</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Video_Serious" aria-controls="Video_Serious" role="tab" aria-selected="false">
                                                <i class="bx bx-user align-middle"></i>
                                                <span class="align-middle">Video Serious</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="about-tab" data-toggle="tab" href="#Home_Work" aria-controls="Home_Work" role="tab" aria-selected="false">
                                                <i class="bx bx-message-square align-middle"></i>
                                                <span class="align-middle">Home Work</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="about-tab" data-toggle="tab" href="#Papers" aria-controls="Papers" role="tab" aria-selected="false">
                                                <i class="bx bx-message-square align-middle"></i>
                                                <span class="align-middle">Papers</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="about-tab" data-toggle="tab" href="#New_Work" aria-controls="New_Work" role="tab" aria-selected="false">
                                                <i class="bx bx-message-square align-middle"></i>
                                                <span class="align-middle">New Work</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="Online_Class" aria-labelledby="Online_Class-tab" role="tabpanel">
                                            <section id="media-player-wrapper">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card p-2">
                                                            <h6 class="card-title">Video</h6>
                                                            <!-- VIDEO -->
                                                            <div class="plyr plyr--full-ui plyr--video plyr--youtube plyr--fullscreen-enabled plyr--paused plyr--stopped plyr__poster-enabled" id="plyr-video-player"><div class="plyr__controls"><button class="plyr__controls__item plyr__control" type="button" data-plyr="play" aria-label="Play, View From A Blue Moon - Official Trailer (4K Ultra HD) - John Florence"><svg class="icon--pressed" role="presentation" focusable="false"><use xlink:href="#plyr-pause"></use></svg><svg class="icon--not-pressed" role="presentation" focusable="false"><use xlink:href="#plyr-play"></use></svg><span class="label--pressed plyr__sr-only">Pause</span><span class="label--not-pressed plyr__sr-only">Play</span></button><div class="plyr__controls__item plyr__progress__container"><div class="plyr__progress"><input data-plyr="seek" type="range" min="0" max="100" step="0.01" value="0" autocomplete="off" role="slider" aria-label="Seek" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" id="plyr-seek-9563" style="--value:0%;"><progress class="plyr__progress__buffer" min="0" max="100" value="0" role="progressbar" aria-hidden="true">% buffered</progress><span class="plyr__tooltip">00:00</span></div></div><div class="plyr__controls__item plyr__time--current plyr__time" aria-label="Current time">-03:04</div><div class="plyr__controls__item plyr__volume"><button type="button" class="plyr__control" data-plyr="mute"><svg class="icon--pressed" role="presentation" focusable="false"><use xlink:href="#plyr-muted"></use></svg><svg class="icon--not-pressed" role="presentation" focusable="false"><use xlink:href="#plyr-volume"></use></svg><span class="label--pressed plyr__sr-only">Unmute</span><span class="label--not-pressed plyr__sr-only">Mute</span></button><input data-plyr="volume" type="range" min="0" max="1" step="0.05" value="1" autocomplete="off" role="slider" aria-label="Volume" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100" id="plyr-volume-9563" style="--value:100%;" aria-valuetext="100.0%"></div><button class="plyr__controls__item plyr__control" type="button" data-plyr="captions"><svg class="icon--pressed" role="presentation" focusable="false"><use xlink:href="#plyr-captions-on"></use></svg><svg class="icon--not-pressed" role="presentation" focusable="false"><use xlink:href="#plyr-captions-off"></use></svg><span class="label--pressed plyr__sr-only">Disable captions</span><span class="label--not-pressed plyr__sr-only">Enable captions</span></button><div class="plyr__controls__item plyr__menu"><button aria-haspopup="true" aria-controls="plyr-settings-9563" aria-expanded="false" type="button" class="plyr__control" data-plyr="settings"><svg role="presentation" focusable="false"><use xlink:href="#plyr-settings"></use></svg><span class="plyr__sr-only">Settings</span></button><div class="plyr__menu__container" id="plyr-settings-9563" hidden=""><div><div id="plyr-settings-9563-home"><div role="menu"><button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true" hidden=""><span>Captions<span class="plyr__menu__value">Disabled</span></span></button><button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true" hidden=""><span>Quality<span class="plyr__menu__value">undefined</span></span></button><button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true"><span>Speed<span class="plyr__menu__value">Normal</span></span></button></div></div><div id="plyr-settings-9563-captions" hidden=""><button type="button" class="plyr__control plyr__control--back"><span aria-hidden="true">Captions</span><span class="plyr__sr-only">Go back to previous menu</span></button><div role="menu"></div></div><div id="plyr-settings-9563-quality" hidden=""><button type="button" class="plyr__control plyr__control--back"><span aria-hidden="true">Quality</span><span class="plyr__sr-only">Go back to previous menu</span></button><div role="menu"></div></div><div id="plyr-settings-9563-speed" hidden=""><button type="button" class="plyr__control plyr__control--back"><span aria-hidden="true">Speed</span><span class="plyr__sr-only">Go back to previous menu</span></button><div role="menu"><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="0.5"><span>0.5×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="0.75"><span>0.75×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="true" value="1"><span>Normal</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.25"><span>1.25×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.5"><span>1.5×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.75"><span>1.75×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="2"><span>2×</span></button></div></div></div></div></div><button class="plyr__controls__item plyr__control" type="button" data-plyr="fullscreen"><svg class="icon--pressed" role="presentation" focusable="false"><use xlink:href="#plyr-exit-fullscreen"></use></svg><svg class="icon--not-pressed" role="presentation" focusable="false"><use xlink:href="#plyr-enter-fullscreen"></use></svg><span class="label--pressed plyr__sr-only">Exit fullscreen</span><span class="label--not-pressed plyr__sr-only">Enter fullscreen</span></button></div>
                                                                <div class="plyr__video-wrapper plyr__video-embed" style="padding-bottom: 56.25%;"><iframe id="youtube-2722" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="Player for View From A Blue Moon - Official Trailer (4K Ultra HD) - John Florence" src="https://www.youtube.com/embed/bTqVqk7FSmY?autoplay=0&amp;controls=0&amp;disablekb=1&amp;playsinline=1&amp;cc_load_policy=0&amp;cc_lang_pref=auto&amp;widget_referrer=https%3A%2F%2Fwww.pixinvent.com%2Fdemo%2Ffrest-clean-bootstrap-admin-dashboard-template%2Fhtml%2Fltr%2Fvertical-menu-template-semi-dark%2Fext-component-media-player.html&amp;noCookie=false&amp;rel=0&amp;showinfo=0&amp;iv_load_policy=3&amp;modestbranding=1&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.pixinvent.com&amp;widgetid=1" width="640" height="360" frameborder="0"></iframe><div class="plyr__poster" style="background-image: url(&quot;https://i.ytimg.com/vi/bTqVqk7FSmY/maxresdefault.jpg&quot;);"></div></div>
                                                                <button type="button" class="plyr__control plyr__control--overlaid" data-plyr="play" aria-label="Play, View From A Blue Moon - Official Trailer (4K Ultra HD) - John Florence"><svg role="presentation" focusable="false"><use xlink:href="#plyr-play"></use></svg><span class="plyr__sr-only">Play</span></button></div>
                                                            <!-- VIDEO END -->
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </section>

                                        </div>
                                        <div class="tab-pane" id="Video_Serious" aria-labelledby="Video_Serious-tab" role="tabpanel">
                                            <div id="accordion-icon-wrapper3" class="collapse-icon accordion-icon-rotate">

                                                <div class="accordion" id="accordionWrapar4" data-toggle-hover="true">
                                                    <div class="card collapse-header">
                                                        <div id="heading47" class="card-header" data-toggle="collapse" role="button" data-target="#accordion73" aria-expanded="false" aria-controls="accordion73">
                                                            <span class="collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                Detailed sales process?
                                                            </span>
                                                        </div>
                                                        <div id="accordion73" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading47" class="collapse">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <section id="media-player-wrapper">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="card p-2">
                                                                                    <h6 class="card-title">Video</h6>
                                                                                    <!-- VIDEO -->
                                                                                    <div class="plyr plyr--full-ui plyr--video plyr--youtube plyr--fullscreen-enabled plyr--paused plyr--stopped plyr__poster-enabled" id="plyr-video-player"><div class="plyr__controls"><button class="plyr__controls__item plyr__control" type="button" data-plyr="play" aria-label="Play, View From A Blue Moon - Official Trailer (4K Ultra HD) - John Florence"><svg class="icon--pressed" role="presentation" focusable="false"><use xlink:href="#plyr-pause"></use></svg><svg class="icon--not-pressed" role="presentation" focusable="false"><use xlink:href="#plyr-play"></use></svg><span class="label--pressed plyr__sr-only">Pause</span><span class="label--not-pressed plyr__sr-only">Play</span></button><div class="plyr__controls__item plyr__progress__container"><div class="plyr__progress"><input data-plyr="seek" type="range" min="0" max="100" step="0.01" value="0" autocomplete="off" role="slider" aria-label="Seek" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" id="plyr-seek-9563" style="--value:0%;"><progress class="plyr__progress__buffer" min="0" max="100" value="0" role="progressbar" aria-hidden="true">% buffered</progress><span class="plyr__tooltip">00:00</span></div></div><div class="plyr__controls__item plyr__time--current plyr__time" aria-label="Current time">-03:04</div><div class="plyr__controls__item plyr__volume"><button type="button" class="plyr__control" data-plyr="mute"><svg class="icon--pressed" role="presentation" focusable="false"><use xlink:href="#plyr-muted"></use></svg><svg class="icon--not-pressed" role="presentation" focusable="false"><use xlink:href="#plyr-volume"></use></svg><span class="label--pressed plyr__sr-only">Unmute</span><span class="label--not-pressed plyr__sr-only">Mute</span></button><input data-plyr="volume" type="range" min="0" max="1" step="0.05" value="1" autocomplete="off" role="slider" aria-label="Volume" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100" id="plyr-volume-9563" style="--value:100%;" aria-valuetext="100.0%"></div><button class="plyr__controls__item plyr__control" type="button" data-plyr="captions"><svg class="icon--pressed" role="presentation" focusable="false"><use xlink:href="#plyr-captions-on"></use></svg><svg class="icon--not-pressed" role="presentation" focusable="false"><use xlink:href="#plyr-captions-off"></use></svg><span class="label--pressed plyr__sr-only">Disable captions</span><span class="label--not-pressed plyr__sr-only">Enable captions</span></button><div class="plyr__controls__item plyr__menu"><button aria-haspopup="true" aria-controls="plyr-settings-9563" aria-expanded="false" type="button" class="plyr__control" data-plyr="settings"><svg role="presentation" focusable="false"><use xlink:href="#plyr-settings"></use></svg><span class="plyr__sr-only">Settings</span></button><div class="plyr__menu__container" id="plyr-settings-9563" hidden=""><div><div id="plyr-settings-9563-home"><div role="menu"><button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true" hidden=""><span>Captions<span class="plyr__menu__value">Disabled</span></span></button><button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true" hidden=""><span>Quality<span class="plyr__menu__value">undefined</span></span></button><button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true"><span>Speed<span class="plyr__menu__value">Normal</span></span></button></div></div><div id="plyr-settings-9563-captions" hidden=""><button type="button" class="plyr__control plyr__control--back"><span aria-hidden="true">Captions</span><span class="plyr__sr-only">Go back to previous menu</span></button><div role="menu"></div></div><div id="plyr-settings-9563-quality" hidden=""><button type="button" class="plyr__control plyr__control--back"><span aria-hidden="true">Quality</span><span class="plyr__sr-only">Go back to previous menu</span></button><div role="menu"></div></div><div id="plyr-settings-9563-speed" hidden=""><button type="button" class="plyr__control plyr__control--back"><span aria-hidden="true">Speed</span><span class="plyr__sr-only">Go back to previous menu</span></button><div role="menu"><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="0.5"><span>0.5×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="0.75"><span>0.75×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="true" value="1"><span>Normal</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.25"><span>1.25×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.5"><span>1.5×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.75"><span>1.75×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="2"><span>2×</span></button></div></div></div></div></div><button class="plyr__controls__item plyr__control" type="button" data-plyr="fullscreen"><svg class="icon--pressed" role="presentation" focusable="false"><use xlink:href="#plyr-exit-fullscreen"></use></svg><svg class="icon--not-pressed" role="presentation" focusable="false"><use xlink:href="#plyr-enter-fullscreen"></use></svg><span class="label--pressed plyr__sr-only">Exit fullscreen</span><span class="label--not-pressed plyr__sr-only">Enter fullscreen</span></button></div>
                                                                                        <div class="plyr__video-wrapper plyr__video-embed" style="padding-bottom: 56.25%;"><iframe id="youtube-2722" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="Player for View From A Blue Moon - Official Trailer (4K Ultra HD) - John Florence" src="https://www.youtube.com/embed/bTqVqk7FSmY?autoplay=0&amp;controls=0&amp;disablekb=1&amp;playsinline=1&amp;cc_load_policy=0&amp;cc_lang_pref=auto&amp;widget_referrer=https%3A%2F%2Fwww.pixinvent.com%2Fdemo%2Ffrest-clean-bootstrap-admin-dashboard-template%2Fhtml%2Fltr%2Fvertical-menu-template-semi-dark%2Fext-component-media-player.html&amp;noCookie=false&amp;rel=0&amp;showinfo=0&amp;iv_load_policy=3&amp;modestbranding=1&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.pixinvent.com&amp;widgetid=1" width="640" height="360" frameborder="0"></iframe><div class="plyr__poster" style="background-image: url(&quot;https://i.ytimg.com/vi/bTqVqk7FSmY/maxresdefault.jpg&quot;);"></div></div>
                                                                                        <button type="button" class="plyr__control plyr__control--overlaid" data-plyr="play" aria-label="Play, View From A Blue Moon - Official Trailer (4K Ultra HD) - John Florence"><svg role="presentation" focusable="false"><use xlink:href="#plyr-play"></use></svg><span class="plyr__sr-only">Play</span></button></div>
                                                                                    <!-- VIDEO END -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading93" class="card-header" data-toggle="collapse" role="button" data-target="#accordion36" aria-expanded="false" aria-controls="accordion36">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                What you sales ?
                                                            </span>
                                                        </div>
                                                        <div id="accordion36" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading93" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading57" class="card-header" data-toggle="collapse" role="button" data-target="#accordion74" aria-expanded="false" aria-controls="accordion74">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How to apply for a sales card?
                                                            </span>
                                                        </div>
                                                        <div id="accordion74" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading57" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                    drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                    sweet.

                                                                    Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                    Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading84" class="card-header" data-toggle="collapse" role="button" data-target="#accordion803" aria-expanded="false" aria-controls="accordion803">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How secure is my data in sales App?
                                                            </span>
                                                        </div>
                                                        <div id="accordion803" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading84" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                    jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.

                                                                    Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                    Jelly jelly beans marshmallow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading94" class="card-header" data-toggle="collapse" role="button" data-target="#accordion122" aria-expanded="false" aria-controls="accordion122">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How do I know sales?
                                                            </span>
                                                        </div>
                                                        <div id="accordion122" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading94" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading105" class="card-header" data-toggle="collapse" role="button" data-target="#accordion144" aria-expanded="false" aria-controls="accordion144">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                Download offline sales doc
                                                            </span>
                                                        </div>
                                                        <div id="accordion144" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading105" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading115" class="card-header" data-toggle="collapse" role="button" data-target="#accordion93" aria-expanded="false" aria-controls="accordion93">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How secure my sales information?
                                                            </span>
                                                        </div>
                                                        <div id="accordion93" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading115" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="Home_Work" aria-labelledby="Home_Work-tab" role="tabpanel">
                                            <div id="accordion-icon-wrapper3" class="collapse-icon accordion-icon-rotate">

                                                <div class="accordion" id="accordionWrapar4" data-toggle-hover="true">
                                                    <div class="card collapse-header">
                                                        <div id="heading47" class="card-header" data-toggle="collapse" role="button" data-target="#accordion73" aria-expanded="false" aria-controls="accordion73">
                                                            <span class="collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                Detailed sales process?
                                                            </span>
                                                        </div>
                                                        <div id="accordion73" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading47" class="collapse">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                    bear
                                                                    claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                    fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                    Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                    oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                    cheesecake
                                                                    liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Voluptates
                                                                    alias
                                                                    architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                    vel illo
                                                                    debitis
                                                                    dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                    facilis.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading93" class="card-header" data-toggle="collapse" role="button" data-target="#accordion36" aria-expanded="false" aria-controls="accordion36">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                What you sales ?
                                                            </span>
                                                        </div>
                                                        <div id="accordion36" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading93" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading57" class="card-header" data-toggle="collapse" role="button" data-target="#accordion74" aria-expanded="false" aria-controls="accordion74">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How to apply for a sales card?
                                                            </span>
                                                        </div>
                                                        <div id="accordion74" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading57" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                    drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                    sweet.

                                                                    Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                    Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading84" class="card-header" data-toggle="collapse" role="button" data-target="#accordion803" aria-expanded="false" aria-controls="accordion803">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How secure is my data in sales App?
                                                            </span>
                                                        </div>
                                                        <div id="accordion803" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading84" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                    jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.

                                                                    Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                    Jelly jelly beans marshmallow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading94" class="card-header" data-toggle="collapse" role="button" data-target="#accordion122" aria-expanded="false" aria-controls="accordion122">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How do I know sales?
                                                            </span>
                                                        </div>
                                                        <div id="accordion122" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading94" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading105" class="card-header" data-toggle="collapse" role="button" data-target="#accordion144" aria-expanded="false" aria-controls="accordion144">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                Download offline sales doc
                                                            </span>
                                                        </div>
                                                        <div id="accordion144" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading105" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading115" class="card-header" data-toggle="collapse" role="button" data-target="#accordion93" aria-expanded="false" aria-controls="accordion93">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How secure my sales information?
                                                            </span>
                                                        </div>
                                                        <div id="accordion93" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading115" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="Papers" aria-labelledby="Papers-tab" role="tabpanel">
                                            <div id="accordion-icon-wrapper3" class="collapse-icon accordion-icon-rotate">

                                                <div class="accordion" id="accordionWrapar4" data-toggle-hover="true">
                                                    <div class="card collapse-header">
                                                        <div id="heading47" class="card-header" data-toggle="collapse" role="button" data-target="#accordion73" aria-expanded="false" aria-controls="accordion73">
                                                            <span class="collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                Detailed sales process?
                                                            </span>
                                                        </div>
                                                        <div id="accordion73" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading47" class="collapse">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                    bear
                                                                    claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                    fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                    Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                    oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                    cheesecake
                                                                    liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Voluptates
                                                                    alias
                                                                    architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                    vel illo
                                                                    debitis
                                                                    dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                    facilis.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading93" class="card-header" data-toggle="collapse" role="button" data-target="#accordion36" aria-expanded="false" aria-controls="accordion36">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                What you sales ?
                                                            </span>
                                                        </div>
                                                        <div id="accordion36" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading93" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading57" class="card-header" data-toggle="collapse" role="button" data-target="#accordion74" aria-expanded="false" aria-controls="accordion74">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How to apply for a sales card?
                                                            </span>
                                                        </div>
                                                        <div id="accordion74" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading57" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                    drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                    sweet.

                                                                    Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                    Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading84" class="card-header" data-toggle="collapse" role="button" data-target="#accordion803" aria-expanded="false" aria-controls="accordion803">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How secure is my data in sales App?
                                                            </span>
                                                        </div>
                                                        <div id="accordion803" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading84" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                    jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.

                                                                    Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                    Jelly jelly beans marshmallow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading94" class="card-header" data-toggle="collapse" role="button" data-target="#accordion122" aria-expanded="false" aria-controls="accordion122">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How do I know sales?
                                                            </span>
                                                        </div>
                                                        <div id="accordion122" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading94" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading105" class="card-header" data-toggle="collapse" role="button" data-target="#accordion144" aria-expanded="false" aria-controls="accordion144">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                Download offline sales doc
                                                            </span>
                                                        </div>
                                                        <div id="accordion144" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading105" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading115" class="card-header" data-toggle="collapse" role="button" data-target="#accordion93" aria-expanded="false" aria-controls="accordion93">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How secure my sales information?
                                                            </span>
                                                        </div>
                                                        <div id="accordion93" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading115" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="New_Work" aria-labelledby="New_Work-tab" role="tabpanel">
                                            <div id="accordion-icon-wrapper3" class="collapse-icon accordion-icon-rotate">

                                                <div class="accordion" id="accordionWrapar4" data-toggle-hover="true">
                                                    <div class="card collapse-header">
                                                        <div id="heading47" class="card-header" data-toggle="collapse" role="button" data-target="#accordion73" aria-expanded="false" aria-controls="accordion73">
                                                            <span class="collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                Detailed sales process?
                                                            </span>
                                                        </div>
                                                        <div id="accordion73" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading47" class="collapse">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                    bear
                                                                    claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                    fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                    Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                    oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                    cheesecake
                                                                    liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Voluptates
                                                                    alias
                                                                    architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                    vel illo
                                                                    debitis
                                                                    dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                    facilis.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading93" class="card-header" data-toggle="collapse" role="button" data-target="#accordion36" aria-expanded="false" aria-controls="accordion36">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                What you sales ?
                                                            </span>
                                                        </div>
                                                        <div id="accordion36" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading93" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading57" class="card-header" data-toggle="collapse" role="button" data-target="#accordion74" aria-expanded="false" aria-controls="accordion74">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How to apply for a sales card?
                                                            </span>
                                                        </div>
                                                        <div id="accordion74" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading57" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                    drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                    sweet.

                                                                    Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                    Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading84" class="card-header" data-toggle="collapse" role="button" data-target="#accordion803" aria-expanded="false" aria-controls="accordion803">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How secure is my data in sales App?
                                                            </span>
                                                        </div>
                                                        <div id="accordion803" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading84" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                    jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.

                                                                    Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                    Jelly jelly beans marshmallow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading94" class="card-header" data-toggle="collapse" role="button" data-target="#accordion122" aria-expanded="false" aria-controls="accordion122">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How do I know sales?
                                                            </span>
                                                        </div>
                                                        <div id="accordion122" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading94" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading105" class="card-header" data-toggle="collapse" role="button" data-target="#accordion144" aria-expanded="false" aria-controls="accordion144">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                Download offline sales doc
                                                            </span>
                                                        </div>
                                                        <div id="accordion144" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading105" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading115" class="card-header" data-toggle="collapse" role="button" data-target="#accordion93" aria-expanded="false" aria-controls="accordion93">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How secure my sales information?
                                                            </span>
                                                        </div>
                                                        <div id="accordion93" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading115" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                    <!-- Basic Tag Input end -->


                    <!-- BEGIN: Footer-->
                    <footer class="footer footer-static footer-light">
                        <p class="clearfix mb-0"><span class="float-left d-inline-block">2020 © PIXINVENT</span><span class="float-right d-sm-inline-block d-none">Crafted with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a></span>
                            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
                        </p>
                    </footer>
                    <!-- END: Footer-->


                    <!-- BEGIN: Vendor JS-->
                    <script src="app-assets/vendors/js/vendors.min.js"></script>
                    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
                    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
                    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
                    <!-- BEGIN Vendor JS-->

                    <!-- BEGIN: Page Vendor JS-->
                    <script src="app-assets/vendors/js/ui/plyr.min.js"></script>
                    <!-- END: Page Vendor JS-->

                    <!-- BEGIN: Theme JS-->
                    <script src="app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
                    <script src="app-assets/js/core/app-menu.min.js"></script>
                    <script src="app-assets/js/core/app.min.js"></script>
                    <script src="app-assets/js/scripts/components.min.js"></script>
                    <script src="app-assets/js/scripts/footer.min.js"></script>
                    <script src="app-assets/js/scripts/customizer.min.js"></script>
                    <!-- END: Theme JS-->

                    <!-- BEGIN: Page JS-->
                    <script src="app-assets/js/scripts/navs/navs.min.js"></script>
                    <!-- END: Page JS-->
                    <script src="app-assets/js/scripts/extensions/ext-component-media-player.min.js"></script>




                    </body>
                    </html>