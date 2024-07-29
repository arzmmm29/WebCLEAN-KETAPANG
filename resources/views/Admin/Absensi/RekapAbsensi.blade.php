<x-app>
    <div class="content-wrap mt-2">
        <div class="main">
            <div class="container-fluid">
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="card-body">
                                            <a href="{{ url('Absensi') }}" class="btn btn-sm btn-outline-primary mb-4">
                                                <i class="bi bi-arrow-left"></i> Kembali
                                            </a>
                                            <h4 class="card-title">REKAP DATA ABSENSI</h4>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="filter mb-3">
                                        <form method="GET" action="{{ url('RekapAbsensi') }}" >
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        {{-- <label for="filter_month">Filter Bulan:</label> --}}
                                                        <input type="month" id="filter_month" name="filter_month"
                                                            class="form-control"
                                                            value="{{ old('filter_month', $filterMonth) }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">

                                                    <button type="submit" class="btn btn-primary">Filter</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="bootstrap-data-table-panel table_22">
                                        <div class="table-responsive">
                                            <table id="basic-datatable"
                                                class="table table-striped table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Nama</th>
                                                        <th colspan="2" class="nested-th">Status Hari</th>
                                                        <th colspan="6" class="nested-th">Shift</th>
                                                        <th colspan="4" class="nested-th">Status Kehadiran</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Hari Kerja</th>
                                                        <th>Hari Libur</th>
                                                        <th>SM</th>
                                                        <th>PS</th>
                                                        <th>MP</th>
                                                        <th>S</th>
                                                        <th>M</th>
                                                        <th>P</th>
                                                        <th>Hadir</th>
                                                        <th>Tidak Hadir</th>
                                                        <th>Izin</th>
                                                        <th>Sakit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($RekapAbsensi as $data)
                                                        <tr>
                                                            <td>{{ $data['nama'] }}</td>
                                                            <td>{{ $data['Hari Kerja'] }}</td>
                                                            <td>{{ $data['Hari Libur'] }}</td>
                                                            <td>{{ $data['SM'] }}</td>
                                                            <td>{{ $data['PS'] }}</td>
                                                            <td>{{ $data['MP'] }}</td>
                                                            <td>{{ $data['S'] }}</td>
                                                            <td>{{ $data['M'] }}</td>
                                                            <td>{{ $data['P'] }}</td>
                                                            <td>{{ $data['Hadir'] }}</td>
                                                            <td>{{ $data['Tidak Hadir'] }}</td>
                                                            <td>{{ $data['Izin'] }}</td>
                                                            <td>{{ $data['Sakit'] }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                </section>
            </div>
        </div>
    </div>
    <style>
        .nested-th {
            text-align: center;
            vertical-align: middle;
        }
    </style>
</x-app>
