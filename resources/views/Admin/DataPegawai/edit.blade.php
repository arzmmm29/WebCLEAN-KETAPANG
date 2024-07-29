<x-app>
    <div class="content-wrap mt-2">
        <div class="main">
            <div class="container-fluid">
                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Data Pegawai</h4>
                                    <div class="table-responsive">
                                        <a href="{{ url('DataPegawai') }}"
                                            class="bi bi-arrow-left btn btn-sm btn-outline-primary mb-4">
                                            <i class="ti ti-chevron-left"></i> Kembali
                                        </a>
                                        <form action="{{ url('DataPegawai', $pegawai->id) }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <label for="NID" class="form-label">NID</label>
                                                    <input type="text"
                                                        class="form-control @error('NID') is-invalid @enderror"
                                                        id="NID" name="NID"
                                                        value="{{ old('NID', $pegawai->NID) }}">
                                                    @error('NID')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Nama" class="form-label">Nama</label>
                                                    <input type="text"
                                                        class="form-control @error('Nama') is-invalid @enderror"
                                                        id="Nama" name="Nama"
                                                        value="{{ old('Nama', $pegawai->Nama) }}">
                                                    @error('Nama')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Kota_Kelahiran" class="form-label">Kota
                                                        Kelahiran</label>
                                                    <input type="text"
                                                        class="form-control @error('Kota_Kelahiran') is-invalid @enderror"
                                                        id="Kota_Kelahiran" name="Kota_Kelahiran"
                                                        value="{{ old('Kota_Kelahiran', $pegawai->Kota_Kelahiran) }}">
                                                    @error('Kota_Kelahiran')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Tanggal_Lahir" class="form-label">Tanggal Lahir</label>
                                                    <input type="date"
                                                        class="form-control @error('Tanggal_Lahir') is-invalid @enderror"
                                                        id="Tanggal_Lahir" name="Tanggal_Lahir"
                                                        value="{{ old('Tanggal_Lahir', $pegawai->Tanggal_Lahir) }}">
                                                    @error('Tanggal_Lahir')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Jenis_Kelamin" class="form-label">Jenis Kelamin</label>
                                                    <input type="text"
                                                        class="form-control @error('Jenis_Kelamin') is-invalid @enderror"
                                                        id="Jenis_Kelamin" name="Jenis_Kelamin"
                                                        value="{{ old('Jenis_Kelamin', $pegawai->Jenis_Kelamin) }}"
                                                        readonly>
                                                    @error('Jenis_Kelamin')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Status_Pernikahan" class="form-label">Status
                                                        Pernikahan</label>
                                                    <input type="text"
                                                        class="form-control @error('Status_Pernikahan') is-invalid @enderror"
                                                        id="Status_Pernikahan" name="Status_Pernikahan"
                                                        value="{{ old('Status_Pernikahan', $pegawai->Status_Pernikahan) }}">
                                                    @error('Status_Pernikahan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Pendidikan" class="form-label">Pendidikan</label>
                                                    <input type="text"
                                                        class="form-control @error('Pendidikan') is-invalid @enderror"
                                                        id="Pendidikan" name="Pendidikan"
                                                        value="{{ old('Pendidikan', $pegawai->Pendidikan) }}">
                                                    @error('Pendidikan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Sekolah_Universitas"
                                                        class="form-label">Sekolah/Universitas</label>
                                                    <input type="text"
                                                        class="form-control @error('Sekolah_Universitas') is-invalid @enderror"
                                                        id="Sekolah_Universitas" name="Sekolah_Universitas"
                                                        value="{{ old('Sekolah_Universitas', $pegawai->Sekolah_Universitas) }}">
                                                    @error('Sekolah_Universitas')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Alamat_KTP" class="form-label">Alamat KTP</label>
                                                    <input type="text"
                                                        class="form-control @error('Alamat_KTP') is-invalid @enderror"
                                                        id="Alamat_KTP" name="Alamat_KTP"
                                                        value="{{ old('Alamat_KTP', $pegawai->Alamat_KTP) }}">
                                                    @error('Alamat_KTP')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Alamat_Domisili" class="form-label">Alamat
                                                        Domisili</label>
                                                    <input type="text"
                                                        class="form-control @error('Alamat_Domisili') is-invalid @enderror"
                                                        id="Alamat_Domisili" name="Alamat_Domisili"
                                                        value="{{ old('Alamat_Domisili', $pegawai->Alamat_Domisili) }}">
                                                    @error('Alamat_Domisili')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Nomor_Hp" class="form-label">Nomor HP</label>
                                                    <input type="text"
                                                        class="form-control @error('Nomor_Hp') is-invalid @enderror"
                                                        id="Nomor_Hp" name="Nomor_Hp"
                                                        value="{{ old('Nomor_Hp', $pegawai->Nomor_Hp) }}">
                                                    @error('Nomor_Hp')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Email" class="form-label">Email</label>
                                                    <input type="email"
                                                        class="form-control @error('Email') is-invalid @enderror"
                                                        id="Email" name="Email"
                                                        value="{{ old('Email', $pegawai->Email) }}">
                                                    @error('Email')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="FTK_NonFTK" class="form-label">FTK/Non-FTK</label>
                                                    <input type="text"
                                                        class="form-control @error('FTK_NonFTK') is-invalid @enderror"
                                                        id="FTK_NonFTK" name="FTK_NonFTK"
                                                        value="{{ old('FTK_NonFTK', $pegawai->FTK_NonFTK) }}">
                                                    @error('FTK_NonFTK')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Jabatan" class="form-label">Jabatan</label>
                                                    <input type="text"
                                                        class="form-control @error('Jabatan') is-invalid @enderror"
                                                        id="Jabatan" name="Jabatan"
                                                        value="{{ old('Jabatan', $pegawai->Jabatan) }}">
                                                    @error('Jabatan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Kode_PRK" class="form-label">Kode PRK</label>
                                                    <input type="text"
                                                        class="form-control @error('Kode_PRK') is-invalid @enderror"
                                                        id="Kode_PRK" name="Kode_PRK"
                                                        value="{{ old('Kode_PRK', $pegawai->Kode_PRK) }}">
                                                    @error('Kode_PRK')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Status" class="form-label">Status</label>
                                                    <input type="text"
                                                        class="form-control @error('Status') is-invalid @enderror"
                                                        id="Status" name="Status"
                                                        value="{{ old('Status', $pegawai->Status) }}">
                                                    @error('Status')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Klasifikasi_Bidang" class="form-label">Klasifikasi
                                                        Bidang</label>
                                                    <input type="text"
                                                        class="form-control @error('Klasifikasi_Bidang') is-invalid @enderror"
                                                        id="Klasifikasi_Bidang" name="Klasifikasi_Bidang"
                                                        value="{{ old('Klasifikasi_Bidang', $pegawai->Klasifikasi_Bidang) }}">
                                                    @error('Klasifikasi_Bidang')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Bagian" class="form-label">Bagian</label>
                                                    <input type="text"
                                                        class="form-control @error('Bagian') is-invalid @enderror"
                                                        id="Bagian" name="Bagian"
                                                        value="{{ old('Bagian', $pegawai->Bagian) }}">
                                                    @error('Bagian')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Nomor_BPJS_Kesehatan" class="form-label">Nomor BPJS
                                                        Kesehatan</label>
                                                    <input type="text"
                                                        class="form-control @error('Nomor_BPJS_Kesehatan') is-invalid @enderror"
                                                        id="Nomor_BPJS_Kesehatan" name="Nomor_BPJS_Kesehatan"
                                                        value="{{ old('Nomor_BPJS_Kesehatan', $pegawai->Nomor_BPJS_Kesehatan) }}">
                                                    @error('Nomor_BPJS_Kesehatan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Status_Kepersertaan_BPJS_Kesehatan"
                                                        class="form-label">Status Kepersertaan BPJS Kesehatan</label>
                                                    <input type="text"
                                                        class="form-control @error('Status_Kepersertaan_BPJS_Kesehatan') is-invalid @enderror"
                                                        id="Status_Kepersertaan_BPJS_Kesehatan"
                                                        name="Status_Kepersertaan_BPJS_Kesehatan"
                                                        value="{{ old('Status_Kepersertaan_BPJS_Kesehatan', $pegawai->Status_Kepersertaan_BPJS_Kesehatan) }}">
                                                    @error('Status_Kepersertaan_BPJS_Kesehatan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Nomor_BPJS_Ketenagakerjaan" class="form-label">Nomor
                                                        BPJS Ketenagakerjaan</label>
                                                    <input type="text"
                                                        class="form-control @error('Nomor_BPJS_Ketenagakerjaan') is-invalid @enderror"
                                                        id="Nomor_BPJS_Ketenagakerjaan"
                                                        name="Nomor_BPJS_Ketenagakerjaan"
                                                        value="{{ old('Nomor_BPJS_Ketenagakerjaan', $pegawai->Nomor_BPJS_Ketenagakerjaan) }}">
                                                    @error('Nomor_BPJS_Ketenagakerjaan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Lokasi_UnitKerja" class="form-label">Lokasi Unit
                                                        Kerja</label>
                                                    <input type="text"
                                                        class="form-control @error('Lokasi_UnitKerja') is-invalid @enderror"
                                                        id="Lokasi_UnitKerja" name="Lokasi_UnitKerja"
                                                        value="{{ old('Lokasi_UnitKerja', $pegawai->Lokasi_UnitKerja) }}">
                                                    @error('Lokasi_UnitKerja')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Perusahaan_Penyedia" class="form-label">Perusahaan
                                                        Penyedia</label>
                                                    <input type="text"
                                                        class="form-control @error('Perusahaan_Penyedia') is-invalid @enderror"
                                                        id="Perusahaan_Penyedia" name="Perusahaan_Penyedia"
                                                        value="{{ old('Perusahaan_Penyedia', $pegawai->Perusahaan_Penyedia) }}">
                                                    @error('Perusahaan_Penyedia')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="NIK_KTP" class="form-label">NIK KTP</label>
                                                    <input type="text"
                                                        class="form-control @error('NIK_KTP') is-invalid @enderror"
                                                        id="NIK_KTP" name="NIK_KTP"
                                                        value="{{ old('NIK_KTP', $pegawai->NIK_KTP) }}">
                                                    @error('NIK_KTP')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="AGAMA" class="form-label">AGAMA</label>
                                                    <input type="text" class="form-control" id="AGAMA"
                                                        name="AGAMA" value="{{ old('AGAMA', $pegawai->AGAMA) }}">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Atasan" class="form-label">Atasan</label>
                                                    <input type="text" class="form-control" id="Atasan"
                                                        name="Atasan" value="{{ old('Atasan', $pegawai->Atasan) }}">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Kabupaten_Kota"
                                                        class="form-label">Kabupaten/Kota</label>
                                                    <input type="text" class="form-control" id="Kabupaten_Kota"
                                                        name="Kabupaten_Kota"
                                                        value="{{ old('Kabupaten_Kota', $pegawai->Kabupaten_Kota) }}">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Provinsi" class="form-label">Provinsi</label>
                                                    <input type="text" class="form-control" id="Provinsi"
                                                        name="Provinsi"
                                                        value="{{ old('Provinsi', $pegawai->Provinsi) }}">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="foto" class="form-label">Foto</label>
                                                    <input type="file" class="form-control" id="foto"
                                                        name="foto">
                                                    @if ($errors->has('foto'))
                                                        <div class="alert alert-danger mt-2">
                                                            {{ $errors->first('foto') }}
                                                        </div>
                                                    @endif
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
