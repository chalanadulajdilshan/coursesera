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
        <title>DataTables - Frest - Bootstrap HTML admin template</title>
        <link rel="apple-touch-icon" href="app-assets/images/logo-favicon.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo-favicon.png">
        <link rel="shortcut icon" type="image/x-icon" href="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/images/ico/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
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
        <link href="assets/css/jm.spinner.css" rel="stylesheet" type="text/css"/>
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- END: Custom CSS-->

    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

        <!-- BEGIN: Header-->
        <?php
        include 'header.php';
        ?>

        <!-- END: Main Menu-->

        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-12 mb-2 mt-1">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h5 class="content-header-title float-left pr-1 mb-0">DataTables</h5>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb p-0 mb-0">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                        </li>
                                        <li class="breadcrumb-item active">Datatable
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body"><div class="row">
                        <div class="col-12">
                            <p>Read full documnetation <a href="" target="_blank">here</a></p>
                        </div>
                    </div>
                    <!-- Zero configuration table -->
                  <section id="basic-datatable">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Zero configuration</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body card-dashboard">
                                            <p class="card-text">DataTables has most features enabled by default, so all you need to do to
                                                use it with your own tables is to call the construction function: $().DataTable();.</p>
                                            <div class="table-responsive">
                                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"></div></div></div><div class="row"><div class="col-sm-12"><table class="table zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                                <thead>
                                                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 240.817px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">ID</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 355.6px;" aria-label="Position: activate to sort column ascending">Invoice iD</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 186.383px;" aria-label="Office: activate to sort column ascending">Class Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 76.9px;" aria-label="Age: activate to sort column ascending">Teacher</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 166.9px;" aria-label="Start date: activate to sort column ascending">date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 166.9px;" aria-label="Start date: activate to sort column ascending">Time</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 139.4px;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr role="row" class="odd">
                                                                        <td class="sorting_1">Airi Satou</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>33</td>
                                                                        <td>2008/11/28</td>
                                                                        <td>08.30PM</td>
                                                                        <td>$162,700</td>
                                                                    </tr><tr role="row" class="even">
                                                                        <td class="sorting_1">Ashton Cox</td>
                                                                        <td>Junior Technical Author</td>
                                                                        <td>San Francisco</td>
                                                                        <td>66</td>
                                                                        <td>2009/01/12</td>
                                                                        <td>08.30PM</td>
                                                                        <td>$86,000</td>
                                                                    </tr><tr role="row" class="odd">
                                                                        <td class="sorting_1">Bradley Greer</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>London</td>
                                                                        <td>41</td>
                                                                        <td>2012/10/13</td>
                                                                        <td>08.30PM</td>
                                                                        <td>$132,000</td>
                                                                    </tr><tr role="row" class="even">
                                                                        <td class="sorting_1">Brielle Williamson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>New York</td>
                                                                        <td>61</td>
                                                                        <td>2012/12/02</td>
                                                                        <td>08.30PM</td>
                                                                        <td>$372,000</td>
                                                                    </tr><tr role="row" class="odd">
                                                                        <td class="sorting_1">Cara Stevens</td>
                                                                        <td>Sales Assistant</td>
                                                                        <td>New York</td>
                                                                        <td>46</td>
                                                                        <td>2011/12/06</td>
                                                                        <td>08.30PM</td>
                                                                        <td>$145,600</td>
                                                                    </tr><tr role="row" class="even">
                                                                        <td class="sorting_1">Cedric Kelly</td>
                                                                        <td>Senior Javascript Developer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2012/03/29</td>
                                                                        <td>08.30PM</td>
                                                                        <td>$433,060</td>
                                                                    </tr><tr role="row" class="odd">
                                                                        <td class="sorting_1">Charde Marshall</td>
                                                                        <td>Regional Director</td>
                                                                        <td>San Francisco</td>
                                                                        <td>36</td>
                                                                        <td>2008/10/16</td>
                                                                        <td>08.30PM</td>
                                                                        <td>$470,600</td>
                                                                    </tr><tr role="row" class="even">
                                                                        <td class="sorting_1">Colleen Hurst</td>
                                                                        <td>Javascript Developer</td>
                                                                        <td>San Francisco</td>
                                                                        <td>39</td>
                                                                        <td>2009/09/15</td>
                                                                        <td>08.30PM</td>
                                                                        <td>$205,500</td>
                                                                    </tr><tr role="row" class="odd">
                                                                        <td class="sorting_1">Dai Rios</td>
                                                                        <td>Personnel Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>35</td>
                                                                        <td>2012/09/26</td>
                                                                        <td>08.30PM</td>
                                                                        <td>$217,500</td>
                                                                    </tr><tr role="row" class="even">
                                                                        <td class="sorting_1">Donna Snider</td>
                                                                        <td>Customer Support</td>
                                                                        <td>New York</td>
                                                                        <td>27</td>
                                                                        <td>2011/01/25</td>
                                                                        <td>08.30PM</td>
                                                                        <td>$112,000</td>
                                                                    </tr></tbody>
                                                                <tfoot>
                                                                    <tr><th rowspan="1" colspan="1">ID</th><th rowspan="1" colspan="1">Invoice ID</th><th rowspan="1" colspan="1">Class Name</th><th rowspan="1" colspan="1">Teacher</th><th rowspan="1" colspan="1">Date</th><th rowspan="1" colspan="1">Time</th><th rowspan="1" colspan="1">Salary</th></tr>
                                                                </tfoot>
                                                            </table></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                    
</div>
                    <!--/ Zero configuration table -->
                    <div class="sidenav-overlay" style="touch-action: pan-y; user-select: none;"></div>
                    <div class="drag-target" style="touch-action: pan-y; user-select: none;"></div>

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
                    <script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
                    <script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
                    <script src="app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
                    <script src="app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
                    <script src="app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
                    <script src="app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
                    <script src="app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
                    <script src="app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
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
                    <script src="app-assets/js/scripts/datatables/datatable.min.js"></script>
                    <!-- END: Page JS-->



                    </body>
                    </html>