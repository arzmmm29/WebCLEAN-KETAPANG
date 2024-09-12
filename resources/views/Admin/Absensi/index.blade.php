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
                                            <h4 class="card-title">DATA ABSENSI</h4>
                                        </div>
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <a href="{{url('Absensi-pdf')}}"
                                            class="btn btn-sm btn-outline-danger waves-effect waves-light">
                                            <i class="bi bi-file-earmark-pdf-fill"></i> Export PDF
                                         </a>
                                            <a href="{{ url('Absensi/create') }}"
                                                class="btn btn-sm btn-outline-primary waves-effect waves-light mr-2">
                                                <i class="bi bi-plus"></i> Tambah Data Absensi
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
                                                        <th width="10px">No.</th>
                                                        <th width="100px">Aksi</th>
                                                        <th width="100px">Tanggal</th>
                                                        <th>Nama Pegawai</th>
                                                        <th>Shif</th>
                                                        <th>Status Kerja</th>
                                                        <th>Status Kehadiran</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($list_absensi as $absensi)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>
                                                                <div class="btn-group ml-2">
                                                                    <a href="{{ url('Absensi', $absensi->id) }}/edit"
                                                                        class="btn btn-sm btn-outline-warning btn-mat">
                                                                        <i class="bi bi-pencil"></i>
                                                                    </a>
                                                                    <x-button.delete url="Absensi"
                                                                        id="{{ $absensi->id }}" />
                                                                </div>
                                                            </td>
                                                            <td>{{ $absensi->tgl_absensi }}</td>
                                                            <td>{{ $absensi->Pegawai ? $absensi->Pegawai->Nama : 'Nama Tidak Ditemukan' }}</td>
                                                            <td>{{ $absensi->shif }}</td>
                                                            <td>{{ $absensi->Hari_Kerja }}</td>
                                                            <td>{{ $absensi->Status_Kehadiran }}</td>
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
