<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route('dashboard') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img style="margin-left: -35px;" src="{{ asset('backend/assets/images/bear_cofe.gif') }}" alt="logo-sm-light" height="75">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('backend/assets/images/bear_cofe.gif') }}" alt="logo-light" height="75">
                    </span>
                </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>
        </div>
        
        <div class="d-flex">
            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </button>
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img style="object-fit: cover;" class="rounded-circle header-profile-user" src="{{ (!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image): asset('backend/assets/images/cofe_logo.png') }}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">Vichra</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                </div>
                
            </div>
        </div>
    </div>
</header>