<x-app>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Edit Data Absensi</h4>
                                    <div class="table-responsive">
                                        <a href="{{ url('Absensi') }}" class="btn btn-sm btn-outline-primary mb-4">
                                            <i class="bi bi-arrow-left"></i> Kembali
                                        </a>
                                        <form action="{{ url('Absensi', $absensi->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="row g-3">
                                                <!-- Menampilkan pesan error -->
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                <div class="col-md-6">
                                                    <label for="Nama" class="form-label">Nama Pegawai</label>
                                                    <input type="text" class="form-control" id="Nama" name="Nama" value="{{ $absensi->pegawai->Nama }}" readonly>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Bagian" class="form-label">Bagian</label>
                                                    <input type="text" class="form-control" id="Bagian" name="Bagian" value="{{ $absensi->pegawai->Bagian }}" readonly>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Status_Kehadiran" class="form-label">Status Kehadiran</label>
                                                    <select class="form-control" name="Status_Kehadiran" id="Status_Kehadiran">
                                                        <option value="">--Pilih Status Kehadiran--</option>
                                                        <option value="Hadir" {{ $absensi->Status_Kehadiran == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                                                        <option value="Tidak Hadir" {{ $absensi->Status_Kehadiran == 'Tidak Hadir' ? 'selected' : '' }}>Tidak Hadir</option>
                                                        <option value="Izin" {{ $absensi->Status_Kehadiran == 'Izin' ? 'selected' : '' }}>Izin</option>
                                                        <option value="Sakit" {{ $absensi->Status_Kehadiran == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                                                    </select>
                                                    @error('Status_Kehadiran')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="hari_kerja" class="form-label">Pilihan Hari Kerja</label>
                                                    <select class="form-control" name="hari_kerja" id="hari_kerja">
                                                        <option value="">--Pilih Hari--</option>
                                                        <option value="Hari Kerja" {{ $absensi->hari_kerja == 'Hari Kerja' ? 'selected' : '' }}>Hari Kerja</option>
                                                        <option value="Hari Libur" {{ $absensi->hari_kerja == 'Hari Libur' ? 'selected' : '' }}>Hari Libur Nasional</option>
                                                    </select>
                                                    @error('hari_kerja')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="shif" class="form-label">Shif</label>
                                                    <select class="form-control" name="shif" id="shif">
                                                        <option value="">--Pilih Shif--</option>
                                                        <option value="PS" {{ $absensi->shif == 'PS' ? 'selected' : '' }}>PS</option>
                                                        <option value="SM" {{ $absensi->shif == 'SM' ? 'selected' : '' }}>SM</option>
                                                        <option value="MP" {{ $absensi->shif == 'MP' ? 'selected' : '' }}>MP</option>
                                                        <option value="P" {{ $absensi->shif == 'P' ? 'selected' : '' }}>P</option>
                                                        <option value="S" {{ $absensi->shif == 'S' ? 'selected' : '' }}>S</option>
                                                        <option value="M" {{ $absensi->shif == 'M' ? 'selected' : '' }}>M</option>
                                                    </select>
                                                    @error('shif')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mt-4 d-flex justify-content-end">
                                                <button class="btn btn-outline-danger btn-sm" type="button" onclick="window.location.href='{{ url('Absensi') }}'">BATAL</button>
                                                <button class="btn btn-outline-primary btn-sm ms-2" type="submit">SIMPAN</button>
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
