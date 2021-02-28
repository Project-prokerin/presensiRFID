<div class="main-sidebar position-fixed">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/dashboard') }}">{{ config('app.name') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/dashboard') }}">
                <img src="{{ asset('photos/logo_epresensi.png') }}" alt="Epresensi" width="50px">
            </a>
        </div>
        @if (Auth::guard('guru')->user())
            <ul class="sidebar-menu">
                <li class="nav-item dropdown @if (Request::is('guru/dashboard')) active @endif">
                    <a href="{{ url('guru/dashboard') }}" class="nav-link">
                        <i class="ph ph-stack-simple-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('guru/anggota')) active @endif">
                    <a href="{{ url('guru/anggota') }}" class="nav-link">
                        <i class="ph ph-users-bold"></i>
                        <span>Anggota</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('guru/presensi')) active @endif">
                    <a href="{{ url('guru/presensi') }}" class="nav-link">
                        <i class="ph ph-calendar-blank-bold"></i>
                        <span>Presensi</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('guru/grafik')) active @endif">
                    <a href="{{ url('guru/grafik') }}" class="nav-link">
                        <i class="ph ph-chart-pie-slice-bold"></i>
                        <span>Grafik Presensi</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('guru/jammasuk')) active @endif">
                    <a href="{{ url('guru/jammasuk') }}" class="nav-link">
                        <i class="ph ph-clock-bold"></i>
                        <span>Jam Masuk</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('guru/harilibur')) active @endif">
                    <a href="{{ url('guru/harilibur') }}" class="nav-link">
                        <i class="ph ph-calendar-x-bold"></i>
                        <span>Hari Libur</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('guru/tagid')) active @endif">
                    <a href="{{ url('guru/tagid') }}" class="nav-link">
                        <i class="ph ph-tag-bold"></i>
                        <span>Tag ID</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('admin/quotes')) active @endif">
                    <a href="{{ url('admin/quotes') }}" class="nav-link">
                        <i class="ph ph-chat-circle-text-bold"></i>
                        <span>Quotes</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('admin/pemberitahuan')) active @endif">
                    <a href="{{ url('admin/pemberitahuan') }}" class="nav-link">
                        <i class="ph ph-megaphone-bold"></i>
                        <span>Pemberitahuan</span>
                    </a>
                </li>
            </ul>
        @elseif (Auth::guard('admin')->user())
            <ul class="sidebar-menu">
                <li class="nav-item dropdown @if (Request::is('admin/dashboard')) active @endif">
                    <a href="{{ url('admin/dashboard') }}" class="nav-link">
                        <i class="ph ph-stack-simple-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('admin/guru')) active @endif">
                    <a href="{{ url('admin/guru') }}" class="nav-link">
                        <i class="ph ph-user-gear-bold"></i>
                        <span>Guru</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('admin/anggota')) active @endif">
                    <a href="{{ url('admin/anggota') }}" class="nav-link">
                        <i class="ph ph-users-bold"></i>
                        <span>Anggota</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('admin/quotes')) active @endif">
                    <a href="{{ url('admin/quotes') }}" class="nav-link">
                        <i class="ph ph-chat-circle-text-bold"></i>
                        <span>Quotes</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('admin/pemberitahuan')) active @endif">
                    <a href="{{ url('admin/pemberitahuan') }}" class="nav-link">
                        <i class="ph ph-megaphone-bold"></i>
                        <span>Pemberitahuan</span>
                    </a>
                </li>
                <li class="nav-item dropdown @if (Request::is('admin/autentikasi')) active @endif">
                    <a href="{{ url('admin/autentikasi') }}" class="nav-link">
                        <i class="ph ph-fingerprint-simple"></i>
                        <span>Autentikasi & notifikasi</span>
                    </a>
                </li>
            </ul>
        @endif

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSKkVNQtcLFLDpVMxlhznwZFvXLbTqjLMlRcXxfQWGtmwPpHVDXBjBLHlwLrQglwTjRhHPMM"
                class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Email Developer
            </a>
        </div>
    </aside>
</div>
