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
                                            <h4 class="card-title">DATA ABSENSI BRIEFING</h4>
                                        </div>
                                        <div class="col-md-12 ">
                                            <a href="{{ url('AbsensiBriefing/create') }}"
                                                class="btn btn-sm btn-outline-primary  waves-effect waves-light float-end"><i
                                                    class="bi bi-plus"></i>
                                                Tambah Data AbsensiBriefing
                                            </a>
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
                                                        <th width="10px">no.</th>
                                                        <th width="100px">Aksi</th>
                                                        <th>Nama Pegawai</th>
                                                        <th>NID</th>
                                                        <th>Bagian</th>
                                                        <th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($list_absensibriefing as $absensibriefing)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>
                                                                <div class="btn-group ml-2">
                                                                    <a href="{{ url('AbsensiBriefing', $absensibriefing->id) }}/edit"
                                                                        class="btn btn-sm btn-outline-warning btn-mat">
                                                                        <i class="bi bi-pencil"></i></a>
                                                                    <x-button.delete url="AbsensiBriefing"
                                                                        id="{{ $absensibriefing->id }}" />

                                                                </div>
                                                            </td>
                                                            <td>{{ $absensibriefing->pegawai->Nama }}</td>
                                                            <td>{{ $absensibriefing->pegawai->NID}}</td>
                                                            <td>{{ $absensibriefing->pegawai->Bagian }}</td>
                                                            <td>{{ $absensibriefing->keterangan}}</td>


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
