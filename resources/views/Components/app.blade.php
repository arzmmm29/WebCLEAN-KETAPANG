<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>WebCLEAN-KETAPANG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    {{-- <link rel="shortcut icon" href="{{url('/')}}/admin-assets/assets/images/favicon.ico"> --}}

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="{{ url('/') }}/admin-assets/assets/vendor/daterangepicker/daterangepicker.css">

    <!-- Vector Map css -->
    <link rel="stylesheet"
        href="{{ url('/') }}/admin-assets/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

    <!-- Theme Config Js -->
    <script src="{{ url('/') }}/admin-assets/assets/js/config.js"></script>

    <!-- App css -->
    <link href="{{ url('/') }}/admin-assets/assets/css/app.min.css" rel="stylesheet" type="text/css"
        id="app-style" />

    <!-- Icons css -->
    <link href="{{ url('/') }}/admin-assets/assets/css/icons.min.css" rel="stylesheet" type="text/css" />


    <link href="{{ url('/') }}/admin-assets/assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ url('/') }}/admin-assets/assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ url('/') }}/admin-assets/assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ url('/') }}/admin-assets/assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ url('/') }}/admin-assets/assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/admin-assets/assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css"
        rel="stylesheet" type="text/css" />
    <!-- Select2 css -->
    <link href="{{ url('/') }}/admin-assets/assets/vendor/select2/css/select2.min.css" rel="stylesheet"
        type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        <x-layouts.header />
        <!-- ========== Topbar End ========== -->
        <!-- ========== Left Sidebar Start ========== -->
        <x-layouts.sidebar />
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <x-utils.notif />

                <!-- Start Content-->
                {!! $slot !!}
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            <x-layouts.footer />
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->
    <!-- jQuery -->
    <!-- Load jQuery first -->


    <!-- Vendor js -->
    <script src="{{ url('/') }}/admin-assets/assets/js/vendor.min.js"></script>

    <!-- Daterangepicker js -->
    <script src="{{ url('/') }}/admin-assets/assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="{{ url('/') }}/admin-assets/assets/vendor/daterangepicker/daterangepicker.js"></script>

    <!-- Apex Charts js -->
    <script src="{{ url('/') }}/admin-assets/assets/vendor/apexcharts/apexcharts.min.js"></script>

    <!-- Vector Map js -->
    <script
        src="{{ url('/') }}/admin-assets/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js">
    </script>
    <script
        src="{{ url('/') }}/admin-assets/assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js">
    </script>

    <!-- Dashboard App js -->
    <script src="{{ url('/') }}/admin-assets/assets/js/pages/demo.dashboard.js"></script>

    <!-- App js -->
    <script src="{{ url('/') }}/admin-assets/assets/js/app.min.js"></script>

    <script src="{{ url('/') }}/admin-assets/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/') }}/admin-assets/assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js">
    </script>
    <script src="{{ url('/') }}/admin-assets/assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js">
    </script>
    <script
        src="{{ url('/') }}/admin-assets/assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js">
    </script>
    <script
        src="{{ url('/') }}/admin-assets/assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js">
    </script>
    <script
        src="{{ url('/') }}/admin-assets/assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js">
    </script>
    <script src="{{ url('/') }}/admin-assets/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js">
    </script>
    <script src="{{ url('/') }}/admin-assets/assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js">
    </script>
    <script src="{{ url('/') }}/admin-assets/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ url('/') }}/admin-assets/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{ url('/') }}/admin-assets/assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ url('/') }}/admin-assets/assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js">
    </script>
    <script src="{{ url('/') }}/admin-assets/assets/vendor/datatables.net-select/js/dataTables.select.min.js">
    </script>
    <script src="{{ url('/') }}/admin-assets/assets/vendor/select2/js/select2.min.js"></script>

    @stack('script')


    <script>
        $(document).ready(function() {
            $('#basic-datatable').DataTable({
                "pagingType": "simple_numbers", // for showing the pagination controls like "Showing 1 to 10 of 57 entries"
                "lengthMenu": [10, 25, 50, 75, 100], // entries dropdown options
                "language": {
                    "search": "Search:", // Customize the search placeholder text
                    "lengthMenu": "Showing  _MENU_ entri",
                    "info": "Showing _START_ sampai _END_ dari _TOTAL_ entri",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",

                    }
                }
            });
        });
    </script>

</body>

</html>
