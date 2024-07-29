<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box justify-content-between d-flex align-items-lg-center flex-lg-row flex-column">
                    <h4 class="page-title">Dashboard</h4>
                    <form class="d-flex mb-xxl-0 mb-2">
                        <div class="input-group">
                            <input type="text" class="form-control shadow border-0" id="dash-daterange">
                            <span class="input-group-text bg-primary border-primary text-white">
                                <i class="ri-calendar-todo-fill fs-13"></i>
                            </span>
                        </div>
                        <a href="javascript: void(0);" class="btn btn-primary ms-2">
                            <i class="ri-refresh-line"></i>
                        </a>
                    </form>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-xxl-6 row-cols-lg-3 row-cols-md-2">
            <div class="col">
                <div class="card widget-icon-box">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="text-muted text-uppercase fs-13 mt-0" title="Number of Customers">DATA PEGAWAI</h5>
                                <h3 class="my-3">{{ $jumlah_pegawai }}</h3>
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title text-bg-success rounded rounded-3 fs-3 widget-icon-box-avatar shadow">
                                    <i class="ri-group-line"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card widget-icon-box">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="text-muted text-uppercase fs-13 mt-0" title="Number of Orders">ABSENSI</h5>
                                <h3 class="my-3">{{ $jumlah_absensi }}</h3>
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title text-bg-info rounded rounded-3 fs-3 widget-icon-box-avatar shadow">
                                    <i class="bi bi-clipboard-check"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card widget-icon-box">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="text-muted text-uppercase fs-13 mt-0" title="Average Revenue">MONITORING OVER TIME</h5>
                                <h3 class="my-3">{{ $jumlah_monitoring }}</h3>
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title text-bg-danger rounded rounded-3 fs-3 widget-icon-box-avatar shadow">
                                    <i class="bi bi-clock"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card widget-icon-box">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="text-muted text-uppercase fs-13 mt-0" title="Growth">AREA KERJA</h5>
                                <h3 class="my-3">{{ $jumlah_areakerja }}</h3>
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title text-bg-primary rounded rounded-3 fs-3 widget-icon-box-avatar shadow">
                                    <i class="bi bi-geo-alt"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card widget-icon-box">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="text-muted text-uppercase fs-13 mt-0" title="Growth">ABSENSI BRIEFING</h5>
                                <h3 class="my-3">{{ $jumlah_absensibriefing }}</h3>
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title text-bg-primary rounded rounded-3 fs-3 widget-icon-box-avatar shadow">
                                    <i class="bi bi-clipboard-check"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</x-app>
