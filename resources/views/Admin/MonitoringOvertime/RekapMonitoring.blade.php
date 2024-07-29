<x-app>
    <div class="content-wrap mt-2">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <a href="{{ url('MonitoringOvertime') }}"
                                    class="btn btn-sm btn-outline-primary mb-4">
                                    <i class="bi bi-arrow-left"></i> Kembali
                                </a>
                                    <h4 class="card-title">Rekap Monitoring Overtime</h4>
                                    <div class="bootstrap-data-table-panel">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th width="10px">No.</th>
                                                        <th>Nama Pegawai</th>
                                                        <th>Total Jam Lembur</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($RekapMonitoring as $data)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $data['nama'] }}</td>
                                                            <td>{{ $data['Total Jam Lembur'] }} Jam</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app>
