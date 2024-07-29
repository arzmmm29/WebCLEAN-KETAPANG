<!-- resources/views/area_kerja/index.blade.php -->
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
                                            <h4 class="card-title">DATA AREA KERJA</h4>
                                        </div>
                                        <div class="col-md-12 text-end">
                                            <a href="{{ url('AreaKerja/create') }}"
                                                class="btn btn-sm btn-outline-primary waves-effect waves-light float-end">
                                                <i class="bi bi-plus"></i> Tambah Data Area Kerja
                                            </a>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="table-responsive">
                                        <table id="basic-datatable"
                                            class="table table-striped table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Aksi</th>
                                                    <th>Nama Pegawai</th>
                                                    <th>Lokasi/Unit Kerja</th>
                                                    <th>Klasifikasi Bidang</th>
                                                    <th>Tanggal Masuk Kerja</th>
                                                    <th>Tanggal Selesai Kerja</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($list_areakerja as $areakerja)
                                                    <tr>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a href="{{ url('AreaKerja/'.$areakerja->id) }}"
                                                                    class="btn btn-sm btn-outline-dark">
                                                                    <i class="bi bi-info"></i>
                                                                </a>
                                                                <a href="{{ url('AreaKerja/'.$areakerja->id.'/edit') }}"
                                                                    class="btn btn-sm btn-outline-warning btn-mat">
                                                                    <i class="bi bi-pencil"></i>
                                                                </a>
                                                                <form action="{{ url('AreaKerja', $areakerja->id) }}"
                                                                    method="POST" class="d-inline">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                                                        <i class="bi bi-trash"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                        <td>{{ $areakerja->pegawai->Nama }}</td>
                                                        <td>{{ $areakerja->pegawai->Lokasi_UnitKerja }}</td>
                                                        <td>{{ $areakerja->pegawai->Klasifikasi_Bidang }}</td>
                                                        <td>{{ $areakerja->Tanggal_Mulai }}</td>
                                                        <td>{{ $areakerja->Tanggal_Selesai }}</td>
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
