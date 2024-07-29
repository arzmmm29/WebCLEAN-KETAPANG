<x-app>
    <div class="content-wrap mt-2">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tambah Data Pegawai</h4>
                                    <a href="{{ url('DataPegawai') }}"
                                        class="bi bi-arrow-left btn btn-sm btn-outline-primary mb-4">
                                        <i class="ti ti-chevron-left"></i>Kembali
                                    </a>

                                    <form action="{{ url('DataPegawai') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">NID</label>
                                                <input type="text"
                                                    class="form-control @error('NID') is-invalid @enderror"
                                                    id="validationCustom02" placeholder="NID" name="NID"
                                                    value="{{ old('NID') }}" required>
                                                @error('NID')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom01">Nama Pegawai</label>
                                                <input type="text"
                                                    class="form-control @error('Nama') is-invalid @enderror"
                                                    id="validationCustom01" placeholder="Nama Pegawai" name="Nama"
                                                    value="{{ old('Nama') }}" required>
                                                @error('Nama')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom03">Kota Kelahiran</label>
                                                <input type="text"
                                                    class="form-control @error('Kota_Kelahiran') is-invalid @enderror"
                                                    id="validationCustom03" placeholder="Kota Lahir"
                                                    name="Kota_Kelahiran" value="{{ old('Kota_Kelahiran') }}" required>
                                                @error('Kota_Kelahiran')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom05">Tanggal Lahir</label>
                                                <input type="date"
                                                    class="form-control @error('Tanggal_Lahir') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="Tanggal Lahir"
                                                    name="Tanggal_Lahir" value="{{ old('Tanggal_Lahir') }}" required
                                                    max="2004-01-01">
                                                @error('Tanggal_Lahir')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Jenis Kelamin</label>
                                                <select name="Jenis_Kelamin" id="Jenis_Kelamin"
                                                    class="form-control @error('Jenis_Kelamin') is-invalid @enderror">
                                                    <option value="">-Pilih Jenis Kelamin-</option>
                                                    <option value="Laki - laki"
                                                        {{ old('Jenis_Kelamin') == 'Laki - laki' ? 'selected' : '' }}>
                                                        Laki-Laki</option>
                                                    <option value="Wanita"
                                                        {{ old('Jenis_Kelamin') == 'Wanita' ? 'selected' : '' }}>Wanita
                                                    </option>
                                                </select>
                                                @error('Jenis_Kelamin')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="">Status Pernikahan</label>
                                                <select name="Status_Pernikahan"
                                                    class="form-control @error('Status_Pernikahan') is-invalid @enderror">
                                                    <option value="">-Pilih Status-</option>
                                                    <option value="MENIKAH"
                                                        {{ old('Status_Pernikahan') == 'MENIKAH' ? 'selected' : '' }}>
                                                        Menikah</option>
                                                    <option value="BELUM MENIKAH"
                                                        {{ old('Status_Pernikahan') == 'BELUM MENIKAH' ? 'selected' : '' }}>
                                                        Belum Menikah</option>
                                                </select>
                                                @error('status')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Pendidikan</label>
                                                <input type="text"
                                                    class="form-control @error('Pendidikan') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="Pendidikan" name="Pendidikan"
                                                    value="{{ old('Pendidikan') }}" required>
                                                @error('Pendidikan')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Sekolah/Universitas</label>
                                                <input type="text"
                                                    class="form-control @error('Sekolah_Universitas') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="Sekolah/Universitas"
                                                    name="Sekolah_Universitas" value="{{ old('Sekolah_Universitas') }}"
                                                    required>
                                                @error('Sekolah_Universitas')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Alamat KTP</label>
                                                <input type="text"
                                                    class="form-control @error('Alamat_KTP') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="Alamat KTP" name="Alamat_KTP"
                                                    value="{{ old('Alamat_KTP') }}" required>
                                                @error('Alamat_KTP')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Alamat Domisili</label>
                                                <input type="text"
                                                    class="form-control @error('Alamat_Domisili') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="Alamat Domisili"
                                                    name="Alamat_Domisili" value="{{ old('Alamat_Domisili') }}"
                                                    required>
                                                @error('Alamat_Domisili')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Nomor Hp</label>
                                                <input type="tel"
                                                    class="form-control @error('Nomor_Hp') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="Nomor Hp" name="Nomor_Hp"
                                                    value="{{ old('Nomor_Hp') }}" required>
                                                @error('Nomor_Hp')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Email</label>
                                                <input type="email"
                                                    class="form-control @error('Email') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="Email" name="Email"
                                                    value="{{ old('Email') }}" required>
                                                @error('Email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="">FTK/NON-FTK</label>
                                                <select name="FTK_NonFTK"
                                                    class="form-control @error('FTK_NonFTK') is-invalid @enderror">
                                                    <option value="">-Pilih Status-</option>
                                                    <option value="FTK"
                                                        {{ old('FTK_NonFTK') == 'FTK' ? 'selected' : '' }}>FTK</option>
                                                    <option value="Non-FTK"
                                                        {{ old('FTK_NonFTK') == 'Non-FTK' ? 'selected' : '' }}>Non-FTK
                                                    </option>
                                                </select>
                                                @error('FTK_NonFTK')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Jabatan</label>
                                                <input type="text"
                                                    class="form-control @error('Jabatan') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="Jabatan" name="Jabatan"
                                                    value="{{ old('Jabatan') }}" required>
                                                @error('Jabatan')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Kode PRK</label>
                                                <input type="text"
                                                    class="form-control @error('Kode_PRK') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="Kode PRK" name="Kode_PRK"
                                                    value="{{ old('Kode_PRK') }}" required>
                                                @error('Kode_PRK')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Status</label>
                                                <input type="text"
                                                    class="form-control @error('Status') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="Kode PRK" name="Status"
                                                    value="{{ old('Status') }}" required>
                                                @error('Status')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Klasifikasi Bidang</label>
                                                <input type="text"
                                                    class="form-control @error('Klasifikasi_Bidang') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="Klasifikasi Bidang"
                                                    name="Klasifikasi_Bidang" value="{{ old('Klasifikasi_Bidang') }}"
                                                    required>
                                                @error('Klasifikasi_Bidang')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Bagian</label>
                                                <input type="text"
                                                    class="form-control @error('Bagian') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="Bagian" name="Bagian"
                                                    value="{{ old('Bagian') }}" required>
                                                @error('Bagian')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Nomor BPJS Kesehatan</label>
                                                <input type="text"
                                                    class="form-control @error('Nomor_BPJS_Kesehatan') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="Nomor BPJS Kesehatan"
                                                    name="Nomor_BPJS_Kesehatan"
                                                    value="{{ old('Nomor_BPJS_Kesehatan') }}" required>
                                                @error('Nomor_BPJS_Kesehatan')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Status Kepesertaan BPJS
                                                    Kesehatan</label>
                                                <input type="text"
                                                    class="form-control @error('Status_Kepersertaan_BPJS_Kesehatan') is-invalid @enderror"
                                                    id="validationCustom05"
                                                    placeholder="Status Kepersertaan BPJS Kesehatan"
                                                    name="Status_Kepersertaan_BPJS_Kesehatan"
                                                    value="{{ old('Status_Kepersertaan_BPJS_Kesehatan') }}" required>
                                                @error('Status_Kepersertaan_BPJS_Kesehatan')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Nomor BPJS Ketenagakerjaan</label>
                                                <input type="text"
                                                    class="form-control @error('Nomor_BPJS_Ketenagakerjaan') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="Nomor BPJS Ketenagakerjaan"
                                                    name="Nomor_BPJS_Ketenagakerjaan"
                                                    value="{{ old('Nomor_BPJS_Ketenagakerjaan') }}" required>
                                                @error('Nomor_BPJS_Ketenagakerjaan')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Status Kepersertaan BPJS
                                                    Ketenagakerjaan</label>
                                                <input type="text"
                                                    class="form-control @error('Status_Kepersertaan_BPJS_Ketenagakerjaan') is-invalid @enderror"
                                                    id="validationCustom05"
                                                    placeholder="Status Kepersertaan BPJS Ketenagakerjaan"
                                                    name="Status_Kepersertaan_BPJS_Ketenagakerjaan"
                                                    value="{{ old('Status_Kepersertaan_BPJS_Ketenagakerjaan') }}"
                                                    required>
                                                @error('Status_Kepersertaan_BPJS_Ketenagakerjaan')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Lokasi/Unit Kerja</label>
                                                <input type="text"
                                                    class="form-control @error('Lokasi_UnitKerja') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="Lokasi/UnitKerja"
                                                    name="Lokasi_UnitKerja" value="{{ old('Lokasi_UnitKerja') }}"
                                                    required>
                                                @error('Lokasi_UnitKerja')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Perusahaan Penyedia</label>
                                                <input type="text"
                                                    class="form-control @error('Perusahaan_Penyedia') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="Perusahaan Penyedia"
                                                    name="Perusahaan_Penyedia" value="{{ old('Perusahaan_Penyedia') }}"
                                                    required>
                                                @error('Perusahaan_Penyedia')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">NIK KTP</label>
                                                <input type="number"
                                                    class="form-control @error('NIK_KTP') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="NIK KTP"
                                                    name="NIK_KTP" value="{{ old('NIK_KTP') }}"
                                                    required>
                                                @error('NIK_KTP')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Agama</label>
                                                <input type="text"
                                                    class="form-control @error('AGAMA') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="AGAMA"
                                                    name="AGAMA" value="{{ old('AGAMA') }}"
                                                    required>
                                                @error('AGAMA')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Atasan</label>
                                                <input type="text"
                                                    class="form-control @error('Atasan') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="Atasan"
                                                    name="Atasan" value="{{ old('Atasan') }}"
                                                    required>
                                                @error('Atasan')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Kabupaten/Kota</label>
                                                <input type="text"
                                                    class="form-control @error('Kabupaten_Kota') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="Kabupaten/Kota"
                                                    name="Kabupaten_Kota" value="{{ old('Kabupaten_Kota') }}"
                                                    required>
                                                @error('Kabupaten_Kota')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Provinsi</label>
                                                <input type="text"
                                                    class="form-control @error('Provinsi') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="Provinsi"
                                                    name="Provinsi" value="{{ old('Provinsi') }}"
                                                    required>
                                                @error('Provinsi')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Foto</label>
                                                <input type="file"
                                                    class="form-control @error('Foto') is-invalid @enderror"
                                                    id="validationCustom05" placeholder="Foto" name="Foto"
                                                    value="{{ old('Foto') }}" required>
                                                @error('Foto')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mt-4 d-flex justify-content-end">
                                            <button class="btn btn-outline-danger btn-sm" type="button"
                                                onclick="window.location.href='{{ url('DataPegawai') }}'">BATAL</button>
                                            <button class="btn btn-outline-primary btn-sm ms-2"
                                                type="submit">SIMPAN</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('pegawaiForm').addEventListener('submit', function (event) {
                var tanggalLahirInput = document.querySelector('input[name="Tanggal_Lahir"]');
                var tanggalLahir = new Date(tanggalLahirInput.value);
                var batasMaksimal = new Date('2004-01-01');

                if (tanggalLahir > batasMaksimal) {
                    alert('Tanggal lahir tidak boleh lebih dari 20 tahun sebelum tahun 2024.');
                    event.preventDefault(); // menghentikan form dari disubmit
                }
            });
        });
    </script>
</x-app>
