<!DOCTYPE html>
<html lang="en">

<head>
    <title>Absensi</title>
    <style type="text/css">
        body {
            font-family: Arial;
            color: black;
        }

        .table-container {
            margin: 20px;
        }
    </style>

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
    <center>
        <!-- ubah ke logo sistem nantik ye im -->
        <img class="mb-3 mt-3" src="{{ url('public') }}/assets/img/pf.png" alt="Logo" height="100" width="240">
        <h3>Daftar Data Absensi</h3>
        <hr style="width: 50%; border-width: 5px; color: black">
    </center>

    <div class="container">
        <div class="bootstrap-data-table-panel table_22">
            <div class="table-responsive">
                <table class="table table-striped table-bordered mt-4">
                    <thead>
                        <tr>
                            <th class="text-center" width="5%">No</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Nama Pegawai</th>
                            <th class="text-center">Shif</th>
                            <th class="text-center">Status Kerja</th>
                            <th class="text-center">Status Kehadiran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_absensi as $index => $absensi)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td class="text-center">{{ $absensi->tgl_absensi }}</td>
                                <td class="text-center">{{ $absensi->Pegawai->Nama }}</td> <!-- Tampilkan hanya nama -->
                                <td class="text-center">{{ $absensi->shif }}</td>
                                <td class="text-center">{{ $absensi->Hari_Kerja }}</td>
                                <td class="text-center">{{ $absensi->Status_Kehadiran }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    window.print();
</script>

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




</body>

</html>
