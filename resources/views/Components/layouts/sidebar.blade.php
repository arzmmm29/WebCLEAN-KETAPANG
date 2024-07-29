<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="index.html" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{ url('/') }}/admin-assets/assets/images/1.png" alt=""
                style="width: auto; height:70px;">
        </span>
        <span class="logo-sm">
            <img src="{{ url('/') }}/admin-assets/assets/images/1.png" alt=""
                style="width: auto; height:70px;">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="index.html" class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{ url('/') }}/admin-assets/assets/images/1.png" alt=""
                style="width: auto; height:70px;">
        </span>
        <span class="logo-sm">
            <img src="{{ url('/') }}/admin-assets/assets/images/1.png" alt=""
                style="width: auto; height:70px;">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user p-3 text-white">
            <a href="{{ url('Dashboard') }}" class="d-flex align-items-center text-reset">
                <div class="flex-shrink-0">
                    <img src="{{ url('/') }}/admin-assets/assets/images/users/avatar-1.jpg" alt="user-image"
                        height="42" class="rounded-circle shadow">
                </div>
                <div class="flex-grow-1 ms-2">
                    <span class="fw-semibold fs-15 d-block">
                        @if (auth()->check())
                            {{ auth()->user()->username }}
                        @endif
                    </span>
                    {{-- <span class="fs-13">Admin</span> --}}
                </div>
                <div class="ms-auto">
                    <i class="ri-arrow-right-s-fill fs-20"></i>
                </div>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">
            <li class="side-nav-title mt-1"> Main</li>

            <li class="side-nav-item">
                <a href="{{ url('Dashboard') }}" class="side-nav-link">
                    <i class="ri-dashboard-2-fill"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ url('DataPegawai') }}" class="side-nav-link">
                    <i class="ri-user-2-fill"></i>
                    <span> Data Pegawai </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#absensiDropdown" aria-expanded="false"
                    aria-controls="absensiDropdown" class="side-nav-link">
                    <i class="bi bi-clipboard-check"></i>
                    <span>Absensi</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="absensiDropdown">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ url('Absensi') }}">Data Absensi</a>
                        </li>
                        <li>
                            <a href="{{ url('RekapAbsensi') }}">Rekap Absensi</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#monitoringovertimeDropdown" aria-expanded="false"
                    aria-controls="monitoringovertimeDropdown" class="side-nav-link">
                    <i class="bi bi-clock"></i>
                    <span>Monitoring Overtime</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="monitoringovertimeDropdown">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ url('MonitoringOvertime') }}">Data Monitoing</a>
                        </li>
                        <li>
                            <a href="{{ url('RekapMonitoring') }}">Rekap Monitoing</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a href="{{ url('AreaKerja') }}" class="side-nav-link">
                    <i class="bi bi-geo-alt"></i>
                    <span>Area Kerja</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#absensibriefingDropdown" aria-expanded="false"
                    aria-controls="absensibriefingDropdown" class="side-nav-link">
                    <i class="bi bi-clipboard-check"></i>
                    <span>Absensi Briefing</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="absensibriefingDropdown">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ url('AbsensiBriefing') }}">Data Absensi Briefing</a>
                        </li>
                        <li>
                            <a href="{{ url('RekapAbsensiBriefing') }}">Rekap Briefing</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <!--- End Sidemenu -->
        <div class="clearfix"></div>
    </div>
</div>
