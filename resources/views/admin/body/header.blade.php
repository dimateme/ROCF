<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="dropdown d-inline-block ms-lg-5">
                    <img src="{{asset("frontend/accueil/images/rocflogo.png")}}" alt="Logo Image" style="width: 25%">
            </div>

            <div class="navbar-brand-box">

            <span class="logo-sm" >
            <img src="frontend/admin/assets/images/rocf_sans_fond_petit.png" alt="" style="width: 25%" >
            </span>

            </div>
        </div>

        <div class="d-flex, justify-content-between,center">
            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>
            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </button>
            </div>
            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <!! -- user name -->
                    <span class="d-none d-xl-inline-block ms-1">Admin</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item text-danger" href="{{route('deconnecter')}}"><i class="ri-shut-down-line align-middle me-1 text-danger"></i>Deconnecter</a>
                </div>
            </div>



        </div>
    </div>
</header>
