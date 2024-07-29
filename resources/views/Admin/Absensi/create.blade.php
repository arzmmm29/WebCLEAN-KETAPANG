<x-app>
    <link href="{{ url('/') }}/admin-assets/assets/vendor/select2/css/select2.min.css" rel="stylesheet"
        type="text/css" />
    <script src="{{ url('/') }}/admin-assets/assets/vendor/select2/js/select2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tambah Data Absensi</h4>
                                    <a href="{{ url('Absensi') }}" class="btn btn-sm btn-outline-primary mb-4">
                                        <i class="bi bi-arrow-left"></i> Kembali
                                    </a>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{ url('Absensi') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-12 my-2">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <input type="date" name="tgl_absensi" id="tglAbsensi"
                                                        class="form-control">
                                                </div>
                                                <div class="col-md-2">
                                                    <select id="shift" name="shif" class="form-select">
                                                        <option value="">Pilih Shift</option>
                                                        <option value="P">P</option>
                                                        <option value="S">S</option>
                                                        <option value="M">M</option>
                                                        <option value="PS">PS</option>
                                                        <option value="SM">SM</option>
                                                        <option value="MP">MP</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2">
                                                    <select id="hari_kerja" name="Hari_Kerja" class="form-select">
                                                        <option value="">Pilih Status Hari</option>
                                                        <option value="Hari Kerja">Hari Kerja</option>
                                                        <option value="Hari Libur">Hari Libur Nasional</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <select class="select2 form-control select2-multiple"
                                                                data-toggle="select2" multiple="multiple"
                                                                data-placeholder="Pilih Pegawai" id="pegawaiId"
                                                                name="pegawai_id[]">
                                                                <option value="">Pilih Pegawai</option>
                                                                @foreach ($list_pegawai as $pegawai)
                                                                    <option value="{{ $pegawai->id }}">
                                                                        {{ $pegawai->Nama }}
                                                                    </option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                        <div class="col-md-2">
                                                            <button id="btnGas" type="button"
                                                                class="btn btn-sm btn-dark">Pilih</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-bordered" style="display:none;" id="pegawaiTable">
                                                <thead>
                                                    <tr>
                                                        <th width="20px">No</th>
                                                        <th>Nama Pegawai</th>
                                                        <th>Shift</th>
                                                        <th>Status Hari</th>
                                                        <th width="200px" class="text-center"><input type="checkbox"
                                                                id="select_all"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Rows will be added dynamically here -->
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4 d-flex justify-content-end">
                                            <button class="btn btn-outline-danger btn-sm" type="button"
                                                onclick="window.location.href='{{ url('Absensi') }}'">BATAL</button>
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

    <!-- Load JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <style>
        .select2-selection__choice__display {
            color: black
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#pegawaiId').select2({
                placeholder: 'Pilih Pegawai',
                allowClear: true
            });
        });


        document.getElementById('btnGas').addEventListener('click', function() {
            var shift = document.getElementById('shift').value;
            var hariKerja = document.getElementById('hari_kerja').value;

            var selectedPegawai = Array.from(document.querySelectorAll('#pegawaiId option:checked')).map(option =>
                option.value);

            var table = document.getElementById('pegawaiTable');
            var tbody = table.querySelector('tbody');
            tbody.innerHTML = '';

            // Clear existing hidden inputs
            document.querySelectorAll('input[name="pegawai_id[]"]').forEach(input => input.remove());

            if (selectedPegawai.length > 0 && shift && hariKerja) {
                selectedPegawai.forEach((pegawaiId, index) => {
                    var row = document.createElement('tr');
                    row.innerHTML = `
                <td>${index + 1}</td>
                <td>${document.querySelector(`#pegawaiId option[value="${pegawaiId}"]`).textContent}</td>
                <td>${shift}</td>
                <td>${hariKerja}</td>
                <td>
                    <select name="Status_Kehadiran[]" class="form-select status-kehadiran">
                        <option value="">Pilih Status</option>
                        <option value="Hadir">Hadir</option>
                        <option value="Tidak Hadir">Tidak Hadir</option>
                        <option value="Izin">Izin</option>
                        <option value="Sakit">Sakit</option>
                    </select>
                </td>
            `;
                    tbody.appendChild(row);

                    // Add a hidden input for each selected pegawai ID
                    var input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'pegawai_id[]';
                    input.value = pegawaiId;
                    document.querySelector('form').appendChild(input);
                });


                table.style.display = 'table';
            } else {
                alert('Harap pilih shift, status hari, dan pegawai terlebih dahulu.');
            }
        });





        document.getElementById('select_all').addEventListener('change', function() {
            let statusSelects = document.querySelectorAll('.status-kehadiran');
            statusSelects.forEach(select => {
                if (this.checked) {
                    select.value = 'Hadir';
                } else {
                    select.value = ''; // atau tetap pada nilai sebelumnya jika tidak ada aksi
                }
            });
        });
    </script>

</x-app>
