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
                                            <h4 class="card-title">MONITORING OVERTIME</h4>
                                        </div>
                                        <div class="col-md-12">
                                            <a href="{{ url('MonitoringOvertime/create') }}"
                                                class="btn btn-sm btn-outline-primary  waves-effect waves-light float-end"><i
                                                    class="bi bi-plus"></i>
                                                Tambah Data Monitoring
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="bootstrap-data-table-panel table_22">
                                        <div class="table-responsive">
                                            <table id="basic-datatable"
                                                class="table table-striped table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th width="10px">no.</th>
                                                        <th width="100px">Aksi</th>
                                                        <th>Nama Pegawai</th>
                                                        <th>Tempat Lahir</th>
                                                        <th>Tanggal Lahir</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>Jam Lembur</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($list_monitoringovertime as $monitoringovertime)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>
                                                                <div class="btn-group ml-2">
                                                                    <a href="{{ url('MonitoringOvertime', $monitoringovertime->id) }}/edit"
                                                                        class="btn btn-sm btn-outline-warning btn-mat">
                                                                        <i class="bi bi-pencil"></i></a>
                                                                    <x-button.delete id="{{ $monitoringovertime->id}}"
                                                                        url="MonitoringOvertime" />

                                                                </div>
                                                            </td>
                                                            <td>  {{ $monitoringovertime->Pegawai ? $monitoringovertime->Pegawai->Nama : 'Nama Tidak Ditemukan' }}</td>
                                                            <td>{{  $monitoringovertime->Pegawai ? $monitoringovertime->Pegawai->Kota_Kelahiran : 'Nama Tidak Ditemukan' }}</td>
                                                            <td>{{  $monitoringovertime->Pegawai ? $monitoringovertime->Pegawai->Tanggal_Lahir : 'Nama Tidak Ditemukan' }}</td>
                                                            <td>{{  $monitoringovertime->Pegawai ? $monitoringovertime->Pegawai->Jenis_Kelamin : 'Nama Tidak Ditemukan' }}</td>
                                                            <td>{{ $monitoringovertime->Jam_Lembur }} Jam</td>
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
    $(document).ready(function() {
        $('#basic-datatable').DataTable();
    });
</x-app>
