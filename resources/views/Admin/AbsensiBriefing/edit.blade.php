<x-app>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Edit Data Absensi Briefing</h4>
                                    <div class="table-responsive">
                                        <a href="{{ url('AbsensiBriefing') }}" class="btn btn-sm btn-outline-primary mb-4">
                                            <i class="bi bi-arrow-left"></i> Kembali
                                        </a>
                                        <form action="{{ url('AbsensiBriefing', $absensibriefing->id) }}" method="post">
                                            @csrf
                                            @method('PUT')

                                            <!-- Tampilkan pesan error -->
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <label for="Nama" class="form-label">Nama Pegawai</label>
                                                    <input type="text" class="form-control" id="Nama" name="Nama" value="{{ $absensibriefing->pegawai->Nama }}" disabled>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="NID" class="form-label">NID</label>
                                                    <input type="text" class="form-control" id="NID" name="NID" value="{{ $absensibriefing->pegawai->NID }}" disabled>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="Bagian" class="form-label">Bagian</label>
                                                    <input type="text" class="form-control" id="Bagian" name="Bagian" value="{{ $absensibriefing->pegawai->Bagian }}" disabled>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="keterangan" class="form-label">Pilihan Keterangan</label>
                                                    <select class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan">
                                                        <option value="">--Pilih Keterangan--</option>
                                                        <option value="Pagi" {{ $absensibriefing->keterangan == 'Pagi' ? 'selected' : '' }}>Pagi</option>
                                                        <option value="Sore" {{ $absensibriefing->keterangan == 'Sore' ? 'selected' : '' }}>Sore</option>
                                                    </select>
                                                    @error('keterangan')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mt-4 d-flex justify-content-end">
                                                <button class="btn btn-outline-danger btn-sm" type="button" onclick="window.location.href='{{ url('AbsensiBriefing') }}'">BATAL</button>
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
