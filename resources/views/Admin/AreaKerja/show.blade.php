<!-- resources/views/area_kerja/show.blade.php -->
<x-app>
    <div class="content-wrap mt-2">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Detail Data Area Kerja</h4>
                                    <a href="{{ url('AreaKerja') }}" class="bi bi-arrow-left btn btn-sm btn-outline-primary mb-4">
                                        <i class="ti ti-chevron-left"></i> Kembali
                                    </a>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th width="300px" scope="row">Nama Pegawai</th>
                                                <td>{{ $areakerja->pegawai->Nama }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Lokasi Unit Kerja</th>
                                                <td>{{ $areakerja->Lokasi}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Klasifikasi Bidang</th>
                                                <td>{{ $areakerja->pegawai->Klasifikasi_Bidang }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tanggal Mulai</th>
                                                <td>{{ $areakerja->Tanggal_Mulai }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tanggal Selesai</th>
                                                <td>{{ $areakerja->Tanggal_Selesai }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app>
