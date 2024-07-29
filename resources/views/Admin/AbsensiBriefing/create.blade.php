<x-app>
    <div class="content-wrap mt-2">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tambah Data Absensi Briefing</h4>
                                    <a href="{{ url('AbsensiBriefing') }}" class="btn btn-sm btn-outline-primary mb-4">
                                        <i class="bi bi-arrow-left"></i> Kembali
                                    </a>
                                    <form action="{{ url('AbsensiBriefing') }}" method="post" enctype="multipart/form-data">
                                        @csrf

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

                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <select class="select2 form-control select2-multiple @error('pegawai_id') is-invalid @enderror"
                                                        data-toggle="select2" multiple="multiple"
                                                        data-placeholder="Pilih Pegawai" id="pegawaiId" name="pegawai_id[]">
                                                    <option value="">Pilih Pegawai</option>
                                                    @foreach ($list_pegawai as $pegawai)
                                                        <option value="{{ $pegawai->id }}">{{ $pegawai->Nama }}</option>
                                                    @endforeach
                                                </select>
                                                @error('pegawai_id')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <select class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan">
                                                    <option value="">--Pilih Keterangan--</option>
                                                    <option value="Pagi">Pagi</option>
                                                    <option value="Sore">Sore</option>
                                                </select>
                                                @error('keterangan')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mt-4 d-flex justify-content-end">
                                            <button class="btn btn-outline-danger btn-sm" type="button"
                                                onclick="window.location.href='{{ url('AbsensiBriefing') }}'">BATAL</button>
                                            <button class="btn btn-outline-primary btn-sm ms-2" type="submit">SIMPAN</button>
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

    <style>
        .select2-selection__choice__display {
            color: black;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            // Inisialisasi Select2 pada elemen select dengan class .select2
            $('.select2').select2();
        });
    </script>
</x-app>
