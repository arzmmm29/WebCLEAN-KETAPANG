<x-app>
    <div class="content-wrap mt-2">
        <div class="main">
            <div class="container-fluid">
                <!-- /# row -->
                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Data Monitoring</h4>
                                    <div class="table-responsive">
                                        <a href="{{ url('MonitoringOvertime ') }}"
                                            class="bi bi-arrow-left btn btn-sm btn-outline-primary mb-4">
                                            <i class="ti ti-chevron-left"></i>Kembali
                                        </a>

                                        @if(session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                            <form action="{{ url('MonitoringOvertime', $monitoringovertime->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text"
                                                            class="form-control @error('Nama') is-invalid @enderror"
                                                            placeholder="Nama Pegawai" name="Nama"
                                                            value="{{ old('Nama', $monitoringovertime->pegawai->Nama) }}">
                                                        @error('Nama')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text"
                                                            class="form-control @error('Tanggal_Lahir') is-invalid @enderror"
                                                            placeholder="Tanggal Lahir" name="Tanggal_Lahir"
                                                            value="{{ old('Tanggal_Lahir', $monitoringovertime->pegawai->Tanggal_Lahir) }}">
                                                        @error('Tanggal_Lahir')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text"
                                                            class="form-control @error('Kota_Kelahiran') is-invalid @enderror"
                                                            placeholder="Kota Kelahiran" name="Kota_Kelahiran"
                                                            value="{{ old('Kota_Kelahiran', $monitoringovertime->pegawai->Kota_Kelahiran) }}">
                                                        @error('Kota_Kelahiran')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text"
                                                            class="form-control @error('Jenis_Kelamin') is-invalid @enderror"
                                                            placeholder="Jenis Kelamin" name="Jenis_Kelamin"
                                                            value="{{ old('Jenis_Kelamin', $monitoringovertime->pegawai->Jenis_Kelamin) }}">
                                                        @error('Jenis_Kelamin')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text"
                                                            class="form-control @error('jam_lembur') is-invalid @enderror"
                                                            placeholder="Jam Lembur" name="jam_lembur"
                                                            value="{{ old('jam_lembur', $monitoringovertime->jam_lembur) }}">
                                                        @error('jam_lembur')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="button-group float-end">
                                                <a href="{{ url('MonitoringOvertime') }}"
                                                    class="btn btn-sm waves-effect waves-light ml-3 float-end"
                                                    style="border: 1px solid red; color:red">
                                                    BATAL
                                                </a>
                                                <button class="btn btn-sm waves-effect waves-light float-end"
                                                    style="border: 1px solid #696CFF; color:#696CFF; margin-right:5px"
                                                    type="submit">
                                                    SIMPAN
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
            </div>
        </div>
    </div>
</x-app>
