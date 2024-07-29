<x-app>
    <div class="content-wrap mt-2">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Detail Data Pegawai</h4>
                                    <a href="{{ url('DataPegawai') }}" class="bi bi-arrow-left btn btn-sm btn-outline-primary mb-4">
                                        <i class="ti ti-chevron-left"></i> Kembali
                                    </a>

                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th scope="row">NID</th>
                                                <td>{{ $pegawai->NID }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nama Pegawai</th>
                                                <td>{{ $pegawai->Nama }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kota Kelahiran</th>
                                                <td>{{ $pegawai->Kota_Kelahiran }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tanggal Lahir</th>
                                                <td>{{ $pegawai->Tanggal_Lahir }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Jenis Kelamin</th>
                                                <td>{{ $pegawai->Jenis_Kelamin }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Status Pernikahan</th>
                                                <td>{{ $pegawai->Status_Pernikahan }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Pendidikan</th>
                                                <td>{{ $pegawai->Pendidikan }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Sekolah/Universitas</th>
                                                <td>{{ $pegawai->Sekolah_Universitas }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Alamat KTP</th>
                                                <td>{{ $pegawai->Alamat_KTP }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Alamat Domisili</th>
                                                <td>{{ $pegawai->Alamat_Domisili }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nomor Hp</th>
                                                <td>{{ $pegawai->Nomor_Hp }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Email</th>
                                                <td>{{ $pegawai->Email }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">FTK/NON-FTK</th>
                                                <td>{{ $pegawai->FTK_NonFTK }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Jabatan</th>
                                                <td>{{ $pegawai->Jabatan }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kode PRK</th>
                                                <td>{{ $pegawai->Kode_PRK }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Status</th>
                                                <td>{{ $pegawai->Status }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Klasifikasi Bidang</th>
                                                <td>{{ $pegawai->Klasifikasi_Bidang }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Bagian</th>
                                                <td>{{ $pegawai->Bagian}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nomor BPJS Kesehatan</th>
                                                <td>{{ $pegawai->Nomor_BPJS_Kesehatan }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Status Kepersetaan BPJS Kesehatan</th>
                                                <td>{{ $pegawai->Status_Kepersertaan_BPJS_Kesehatan }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nomor BPJS Ketenagakerjaan</th>
                                                <td>{{ $pegawai->Nomor_BPJS_Ketenagakerjaan }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Status Kepersertaan BPJS Ketenagakerjaan</th>
                                                <td>{{ $pegawai->Status_Kepersertaan_BPJS_Ketenagakerjaan }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Lokasi/Unit Kerja</th>
                                                <td>{{ $pegawai->Lokasi_UnitKerja }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Perusahaan Penyedia</th>
                                                <td>{{ $pegawai->Perusahaan_Penyedia }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">NIK KTP</th>
                                                <td>{{ $pegawai->NIK_KTP }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Agama</th>
                                                <td>{{ $pegawai->AGAMA }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Atasan</th>
                                                <td>{{ $pegawai->Atasan }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kabupaten/Kota</th>
                                                <td>{{ $pegawai->Kabupaten_Kota }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Provinsi</th>
                                                <td>{{ $pegawai->Provinsi }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Foto</th>
                                                <td>
                                                    <img src="{{ asset($pegawai->foto) }}"  style="height: 100px; width:100px; object-fit:cover">
                                                </td>
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
