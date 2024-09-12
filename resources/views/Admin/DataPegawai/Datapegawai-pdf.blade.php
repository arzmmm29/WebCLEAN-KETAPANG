<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Pegawai</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            color: black;
            margin: 0;
            padding: 0;
            font-size: 10px; /* Mengatur ukuran font lebih kecil */
        }

        .container {
            margin: 20px;
            padding: 10px;
            text-align: center;
        }

        img {
            margin-top: 20px;
        }

        h3 {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        hr {
            margin: 20px auto;
            width: 80%;
        }

        .table-container {
            margin: 20px auto;
            padding: 10px;
            overflow-x: auto; /* Menambahkan scrollbar horizontal */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 10px; /* Mengatur ukuran font tabel lebih kecil */
            min-width: 1500px; /* Membuat lebar minimum tabel agar scrollbar muncul */
        }

        th, td {
            border: 1px solid #ddd;
            padding: 4px; /* Mengatur padding lebih kecil */
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        @media print {
            body {
                font-size: 10px; /* Mengatur ukuran font lebih kecil */
            }

            table {
                width: 100%;
                font-size: 10px; /* Mengatur ukuran font tabel lebih kecil */
            }

            th, td {
                padding: 4px; /* Mengatur padding lebih kecil */
            }

            @page {
                size: landscape; /* Mengatur orientasi halaman menjadi landscape */
                margin: 10mm; /* Mengatur margin halaman */
            }
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
            <img class="mb-3 mt-3" src="{{ url('public') }}/assets/img/pf.png" alt="Logo" height="100" width="240">
            <h3>Daftar Data Pegawai</h3>
            <hr>
        </center>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">NID</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Kota Kelahiran</th>
                        <th class="text-center">Tanggal Lahir</th>
                        <th class="text-center">Jenis Kelamin</th>
                        <th class="text-center">Status Pernikahan</th>
                        <th class="text-center">Pendidikan</th>
                        <th class="text-center">Sekolah/Universitas</th>
                        <th class="text-center">Alamat KTP</th>
                        <th class="text-center">Alamat Domisili</th>
                        <th class="text-center">Nomor HP</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">FTK/NonFTK</th>
                        <th class="text-center">Jabatan</th>
                        <th class="text-center">Kode PRK</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Klasifikasi Bidang</th>
                        <th class="text-center">Bagian</th>
                        <th class="text-center">Nomor BPJS Kesehatan</th>
                        <th class="text-center">Status Kepesertaan BPJS Kesehatan</th>
                        <th class="text-center">Nomor BPJS Ketenagakerjaan</th>
                        <th class="text-center">Status Kepesertaan BPJS Ketenagakerjaan</th>
                        <th class="text-center">Lokasi Unit Kerja</th>
                        <th class="text-center">Perusahaan Penyedia</th>
                        <th class="text-center">NIK KTP</th>
                        <th class="text-center">Agama</th>
                        <th class="text-center">Atasan</th>
                        <th class="text-center">Kabupaten/Kota</th>
                        <th class="text-center">Provinsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_pegawai as $index => $pegawai)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td class="text-center">{{ $pegawai->NID }}</td>
                            <td class="text-center">{{ $pegawai->Nama }}</td>
                            <td class="text-center">{{ $pegawai->Kota_Kelahiran }}</td>
                            <td class="text-center">{{ $pegawai->Tanggal_Lahir }}</td>
                            <td class="text-center">{{ $pegawai->Jenis_Kelamin }}</td>
                            <td class="text-center">{{ $pegawai->Status_Pernikahan }}</td>
                            <td class="text-center">{{ $pegawai->Pendidikan }}</td>
                            <td class="text-center">{{ $pegawai->Sekolah_Universitas }}</td>
                            <td class="text-center">{{ $pegawai->Alamat_KTP }}</td>
                            <td class="text-center">{{ $pegawai->Alamat_Domisili }}</td>
                            <td class="text-center">{{ $pegawai->Nomor_Hp }}</td>
                            <td class="text-center">{{ $pegawai->Email }}</td>
                            <td class="text-center">{{ $pegawai->FTK_NonFTK }}</td>
                            <td class="text-center">{{ $pegawai->Jabatan }}</td>
                            <td class="text-center">{{ $pegawai->Kode_PRK }}</td>
                            <td class="text-center">{{ $pegawai->Status }}</td>
                            <td class="text-center">{{ $pegawai->Klasifikasi_Bidang }}</td>
                            <td class="text-center">{{ $pegawai->Bagian }}</td>
                            <td class="text-center">{{ $pegawai->Nomor_BPJS_Kesehatan }}</td>
                            <td class="text-center">{{ $pegawai->Status_Kepersertaan_BPJS_Kesehatan }}</td>
                            <td class="text-center">{{ $pegawai->Nomor_BPJS_Ketenagakerjaan }}</td>
                            <td class="text-center">{{ $pegawai->Status_Kepersertaan_BPJS_Ketenagakerjaan }}</td>
                            <td class="text-center">{{ $pegawai->Lokasi_UnitKerja }}</td>
                            <td class="text-center">{{ $pegawai->Perusahaan_Penyedia }}</td>
                            <td class="text-center">{{ $pegawai->NIK_KTP }}</td>
                            <td class="text-center">{{ $pegawai->AGAMA }}</td>
                            <td class="text-center">{{ $pegawai->Atasan }}</td>
                            <td class="text-center">{{ $pegawai->Kabupaten_Kota }}</td>
                            <td class="text-center">{{ $pegawai->Provinsi }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
