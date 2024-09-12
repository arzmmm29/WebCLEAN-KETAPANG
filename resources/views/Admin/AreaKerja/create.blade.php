<x-app>
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Data Area Kerja</h4>
                        <a href="{{ url('AreaKerja') }}" class="btn btn-sm btn-outline-primary mb-4"><i class="bi bi-arrow-left"></i> Kembali</a>

                        <form action="{{ url('AreaKerja') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="pegawai_id" class="form-label">Nama Pegawai</label>
                                    <select class="form-control select2" name="pegawai_id" id="pegawai_id">
                                        <option value="">Select</option>
                                        @foreach ($list_pegawai as $pegawai)
                                            <option value="{{ $pegawai->id }}">{{ $pegawai->Nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom05" class="form-label">Lokasi</label>
                                    <input type="text" class="form-control" id="validationCustom04" placeholder="Lokasi" required name="Lokasi">
                                    <div class="invalid-feedback">
                                        Masukan Tanggal Masuk Kerja.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom05" class="form-label">Tanggal Masuk Kerja</label>
                                    <input type="date" class="form-control" id="validationCustom04" placeholder="Tanggal Masuk Kerja" required name="Tanggal_Mulai">
                                    <div class="invalid-feedback">
                                        Masukan Tanggal Masuk Kerja.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom05" class="form-label">Tanggal Selesai Kerja</label>
                                    <input type="date" class="form-control" id="validationCustom04" placeholder="Tanggal Selesai Kerja" required name="Tanggal_Selesai">
                                    <div class="invalid-feedback">
                                        Masukan Tanggal Selesai Kerja.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 d-flex justify-content-end">
                                <button class="btn btn-outline-danger btn-sm" type="button" onclick="window.location.href='{{ url('DataPegawai') }}'">BATAL</button>
                                <button class="btn btn-outline-primary btn-sm ms-2" type="submit">SIMPAN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</x-app>
