<x-app>
    <div class="content-wrap mt-2">
        <div class="main">
            <div class="container-fluid">
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <h4 class="card-title">DATA PEGAWAI</h4>
                                        </div>
                                        <div class="col-md-12 text-end">
                                            <a href="{{url('Data-Pegawai-pdf')}}"
                                            class="btn btn-sm btn-outline-danger waves-effect waves-light">
                                            <i class="bi bi-file-earmark-pdf-fill"></i> Export PDF
                                         </a>
                                            <a href="{{ url('DataPegawai/create') }}"
                                                class="btn btn-sm btn-outline-primary waves-effect waves-light float-end">
                                                <i class="bi bi-plus"></i> Tambah Data Pegawai
                                            </a>
                                            <a type="button" class="btn btn-sm btn-outline-success"
                                                data-bs-toggle="modal" data-bs-target="#exampleModalLargeExcel">
                                                <i class="bi bi-file-earmark-excel"></i> Import Excel
                                            </a>
                                        </div>
                                    </div>
                                    @include('Admin.DataPegawai.Modal.excel')
                                    <hr>
                                    <div class="table-responsive">
                                        <table id="basic-datatable"
                                            class="table table-striped table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th width="10px">no.</th>
                                                    <th width="100px">Aksi</th>
                                                    <th>NID</th>
                                                    <th>Nama Pegawai</th>
                                                    <th>Kota Kelahiran</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Status Pernikahan</th>
                                                    <th>Pendidikan</th>
                                                    <th>Agama</th>
                                                    <th>Foto</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($list_pegawai as $pegawai)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            <div class="btn-group ml-2">
                                                                <a href="{{ url('DataPegawai', $pegawai->id) }}"
                                                                    class="btn btn-sm btn-outline-dark">
                                                                    <i class="bi bi-info"></i>
                                                                </a>
                                                                <a href="{{ url('DataPegawai', $pegawai->id) }}/edit"
                                                                    class="btn btn-sm btn-outline-warning btn-mat">
                                                                    <i class="bi bi-pencil"></i>
                                                                </a>
                                                                <x-button.delete url="DataPegawai"
                                                                    id="{{ $pegawai->id }}" />
                                                            </div>
                                                        </td>
                                                        <td>{{ $pegawai->NID }}</td>
                                                        <td>{{ $pegawai->Nama }}</td>
                                                        <td>{{ $pegawai->Kota_Kelahiran }}</td>
                                                        <td>{{ $pegawai->Tanggal_Lahir }}</td>
                                                        <td>{{ $pegawai->Jenis_Kelamin }}</td>
                                                        <td>{{ $pegawai->Status_Pernikahan }}</td>
                                                        <td>{{ $pegawai->Pendidikan }}</td>
                                                        <td>{{ $pegawai->AGAMA }}</td>
                                                        <td><img src="{{ asset($pegawai->foto) }}" alt=""
                                                                style="height: 60px; width:50px; object-fit:cover">
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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
