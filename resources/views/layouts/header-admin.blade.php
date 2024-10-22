<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="content-header-section">
            <!-- Toggle Sidebar -->
            <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout"
                data-action="sidebar_toggle">
                <i class="fa fa-navicon"></i>
            </button>

            <!-- Layout Options -->
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-options-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-wrench"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="page-header-options-dropdown">
                    <h6 class="dropdown-header">Header</h6>
                    <button type="button" class="btn btn-sm btn-block btn-alt-secondary" data-toggle="layout"
                        data-action="header_fixed_toggle">Fixed Mode</button>
                    <button type="button" class="btn btn-sm btn-block btn-alt-secondary d-none d-lg-block mb-10"
                        data-toggle="layout" data-action="header_style_classic">Classic Style</button>
                    <div class="d-none d-xl-block">
                        <h6 class="dropdown-header">Main Content</h6>
                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout"
                            data-action="content_layout_toggle">Toggle Layout</button>
                    </div>
                </div>
            </div>

            <!-- Color Themes -->
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-themes-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-paint-brush"></i>
                </button>
                <div class="dropdown-menu min-width-150" aria-labelledby="page-header-themes-dropdown">
                    <h6 class="dropdown-header text-center">Color Themes</h6>
                    <div class="row no-gutters text-center mb-5">
                        <div class="col-4 mb-5">
                            <a class="text-default" data-toggle="theme"
                                data-theme="{{ asset('assets/css/themes/default.css') }}" href="javascript:void(0)">
                                <i class="fa fa-2x fa-circle"></i>
                            </a>
                        </div>
                        <!-- Add more theme options here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="content-header-section">
            <!-- User Dropdown -->
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }} <i class="fa fa-angle-down ml-5"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right min-width-150"
                    aria-labelledby="page-header-user-dropdown">
                    <a class="dropdown-item" href="{{ route('admin.profile.index') }}">
                        <i class="si si-user mr-5"></i> Profile
                    </a>
                    <a class="dropdown-item" href="{{ route('admin.profile.change-password') }}">
                        <i class="si si-wrench mr-5"></i> Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="si si-logout mr-5"></i> Sign Out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->
</header>
