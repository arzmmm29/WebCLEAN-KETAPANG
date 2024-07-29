<x-app>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <!-- /# row -->
                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Show Data Monitoring</h4>
                                    <a href="{{ url('MonitoringOvertime') }}"  class=" bi bi-arrow-left btn btn-sm btn-outline-primary mb-4"><i
                                                class="ti ti-chevron-left "></i>Kembali</a>
                                    <div class="table-responsive">
                                        <table class="table table-editable table-nowrap align-middle table-edits">
                                            <dl class="row">
                                                <dt class="col-md-4">Nama Pegawai</dt>
                                                <dd class="col-md-8">: {{ $monitoringovertime->pegawai->Nama }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Tanggal Lahir</dt>
                                                <dd class="col-md-8">: {{ $monitoringovertime->pegawai->Kota_Kelahiran}}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Tempat Lahir</dt>
                                                <dd class="col-md-8">: {{ $monitoringovertime->pegawai->Tanggal_Lahir }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Jenis Kelamin</dt>
                                                <dd class="col-md-8">: {{ $monitoringovertime->pegawai->Jenis_Kelamin }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Jam Lembur</dt>
                                                <dd class="col-md-8">: {{ $monitoringovertime->Jam_Lembur }}</dd>
                                            </dl>
                                        </table>
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
