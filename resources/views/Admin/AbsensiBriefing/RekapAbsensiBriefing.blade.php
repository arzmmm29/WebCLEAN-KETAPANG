<x-app>
    <div class="content-wrap mt-2">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="card-body">
                                            <a href="{{ url('AbsensiBriefing') }}" class="btn btn-sm btn-outline-primary mb-4">
                                                <i class="bi bi-arrow-left"></i> Kembali
                                            </a>
                                            <h4 class="card-title">REKAP ABSENSI BRIEFING</h4>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="bootstrap-data-table-panel table_22">
                                        <div class="table-responsive">
                                            <table id="basic-datatable" class="table table-striped table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Pegawai</th>
                                                        <th>NID</th>
                                                        <th>Bagian</th>
                                                        <th>Jumlah Kehadiran Pagi</th>
                                                        <th>Jumlah Kehadiran Sore</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($RekapAbsensiBriefing as $data)
                                                        <tr>
                                                            <td>{{ $data['nama'] }}</td>
                                                            <td>{{ $data['nid'] }}</td>
                                                            <td>{{ $data['bagian'] }}</td>
                                                            <td>{{ $data['pagi'] }}</td>
                                                            <td>{{ $data['sore'] }}</td>
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
</x-app>
