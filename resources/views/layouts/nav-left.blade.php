<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        {{-- <li class="sidebar-toggler-wrapper hide">
            <div class="sidebar-toggler">
                <span></span>
            </div>
        </li> --}}
        <!-- END SIDEBAR TOGGLER BUTTON -->
        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->

        @if (session('user.role') == '1' || session('user.role') == '2')
            <li class="nav-item start {!! in_array(\Request::route()->getName(), ['dashboard']) ? 'active open' : '' !!} ">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="icon-bar-chart"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
        @endif

        @if (session('user.role') == '1' || session('user.role') == '2')
            <li class="nav-item start {!! in_array(\Request::route()->getName(), ['kategori-pmks.index', 'kategori-pmks.create', 'kategori-pmks.show', 'kategori-pmks.edit', 'kategori-pmks.search']) ? 'active open' : '' !!} ">
                <a href="{{ route('kategori-pmks.index') }}" class="nav-link">
                    <i class="icon-docs"></i>
                    <span class="title">Kategori PMKS</span>
                </a>
            </li>
        @endif

        @if (session('user.role') == '1' || session('user.role') == '2')
            <li class="nav-item start {!! in_array(\Request::route()->getName(), ['program.index', 'program.create', 'program.show', 'program.edit', 'program.search']) ? 'active open' : '' !!} ">
                <a href="{{ route('program.index') }}" class="nav-link">
                    <i class="icon-layers"></i>
                    <span class="title">Program</span>
                </a>
            </li>
        @endif

        @if (session('user.role') == '1' || session('user.role') == '2')
            <li class="nav-item start {!! in_array(\Request::route()->getName(), ['kegiatan.index', 'kegiatan.create', 'kegiatan.show', 'kegiatan.edit', 'kegiatan.search']) ? 'active open' : '' !!} ">
                <a href="{{ route('kegiatan.index') }}" class="nav-link">
                    <i class="icon-layers"></i>
                    <span class="title">Kegiatan</span>
                </a>
            </li>
        @endif

        @if (session('user.role') == '1' || session('user.role') == '2')
            <li class="nav-item start {!! in_array(\Request::route()->getName(), ['lkpj.index', 'lkpj.create', 'lkpj.show', 'lkpj.edit', 'lkpj.search']) ? 'active open' : '' !!} ">
                <a href="{{ route('lkpj.index') }}" class="nav-link">
                    <i class="icon-folder-alt"></i>
                    <span class="title">LKPJ</span>
                </a>
            </li>
        @endif

        @if (session('user.role') == '1' || session('user.role') == '2')
            <li class="nav-item start {!! in_array(\Request::route()->getName(), ['lppd.index', 'lppd.create', 'lppd.show', 'lppd.edit', 'lppd.search']) ? 'active open' : '' !!} ">
                <a href="{{ route('lppd.index') }}" class="nav-link">
                    <i class="icon-folder-alt"></i>
                    <span class="title">LPPD</span>
                </a>
            </li>
        @endif

        {{-- @if (session('user.role') == '1' || session('user.role') == '2')
            <li class="nav-item start {!! in_array(\Request::route()->getName(), ['lakip']) ? 'active open' : '' !!} ">
                <a href="{{ route('lakip') }}" class="nav-link">
                    <i class="icon-folder-alt"></i>
                    <span class="title">LAKIP</span>
                </a>
            </li>
        @endif --}}

        @if (session('user.role') == '1' || session('user.role') == '2')
            <li class="nav-item start {!! in_array(\Request::route()->getName(), ['member.index', 'member.create', 'member.show', 'member.edit', 'member.search']) ? 'active open' : '' !!} ">
                <a href="{{ route('member.index') }}" class="nav-link">
                    <i class="icon-users"></i>
                    <span class="title">Pengguna</span>
                </a>
            </li>
        @endif

        <li class="nav-item start {!! in_array(\Request::route()->getName(), ['profile','profile.index']) ? 'active open' : '' !!} ">
            <a href="{{ route('profile.index') }}" class="nav-link">
                <i class="icon-user"></i>
                <span class="title">Profile</span>
            </a>
        </li>
    </ul>
    <!-- END SIDEBAR MENU -->
    <!-- END SIDEBAR MENU -->
</div>
