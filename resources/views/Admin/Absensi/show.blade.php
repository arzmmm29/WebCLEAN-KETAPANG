<x-app>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Detail Data Absensi</h4>
                                    <a href="{{ url('Absensi') }}" class="bi bi-arrow-left btn btn-sm btn-outline-primary mb-4">
                                        <i class="ti ti-chevron-left"></i> Kembali
                                    </a>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th width="300px" scope="row">Nama Pegawai</th>
                                                <td>{{ $absensi->pegawai->Nama }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kode PRK</th>
                                                <td>{{ $absensi->pegawai->Kode_PRK}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">NIK</th>
                                                <td>{{ $absensi->pegawai->NIK_KTP}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Status</th>
                                                <td>{{ $absensi->pegawai->Status}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Bagian</th>
                                                <td>{{ $absensi->pegawai->Bagian}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Status Kehadiran</th>
                                                <td>{{ $absensi->Status_Kehadiran }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Shif Hari Kerja</th>
                                                <td>{{ $absensi->hari_kerja}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Shif</th>
                                                <td>{{ $absensi->shif }}</td>
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
