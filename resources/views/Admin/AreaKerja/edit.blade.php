<x-app>
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Data Area Kerja</h4>
                    <a href="{{ url('AreaKerja') }}" class="btn btn-sm btn-outline-primary mb-4">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>

                    <form action="{{ url('AreaKerja', $areakerja->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="pegawai_id" class="form-label">Nama Pegawai</label>
                                <select class="form-control select2 @error('pegawai_id') is-invalid @enderror" name="pegawai_id" id="pegawai_id" required>
                                    <option value="">Select</option>
                                    @foreach ($list_pegawai as $pegawai)
                                        <option value="{{ $pegawai->id }}" {{ $pegawai->id == old('pegawai_id', $areakerja->pegawai_id) ? 'selected' : '' }}>
                                            {{ $pegawai->Nama }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('pegawai_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="Lokasi_UnitKerja" class="form-label">Lokasi/Unit Kerja</label>
                                <input type="text" class="form-control @error('Lokasi_UnitKerja') is-invalid @enderror" id="Lokasi_UnitKerja" name="Lokasi_UnitKerja" value="{{ old('Lokasi_UnitKerja', $areakerja->Lokasi_UnitKerja) }}" required>
                                @error('Lokasi_UnitKerja')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="Klasifikasi_Bidang" class="form-label">Klasifikasi Bidang</label>
                                <input type="text" class="form-control @error('Klasifikasi_Bidang') is-invalid @enderror" id="Klasifikasi_Bidang" name="Klasifikasi_Bidang" value="{{ old('Klasifikasi_Bidang', $areakerja->Klasifikasi_Bidang) }}" required>
                                @error('Klasifikasi_Bidang')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="Tanggal_Mulai" class="form-label">Tanggal Masuk Kerja</label>
                                <input type="date" class="form-control @error('Tanggal_Mulai') is-invalid @enderror" id="Tanggal_Mulai" name="Tanggal_Mulai" value="{{ old('Tanggal_Mulai', $areakerja->Tanggal_Mulai) }}" required>
                                @error('Tanggal_Mulai')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="Tanggal_Selesai" class="form-label">Tanggal Selesai Kerja</label>
                                <input type="date" class="form-control @error('Tanggal_Selesai') is-invalid @enderror" id="Tanggal_Selesai" name="Tanggal_Selesai" value="{{ old('Tanggal_Selesai', $areakerja->Tanggal_Selesai) }}" required>
                                @error('Tanggal_Selesai')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-4 d-flex justify-content-end">
                            <button class="btn btn-outline-danger btn-sm" type="button" onclick="window.location.href='{{ url('AreaKerja') }}'">BATAL</button>
                            <button class="btn btn-outline-primary btn-sm ms-2" type="submit">SIMPAN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Halaman Edit Area Kerja -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</x-app>
