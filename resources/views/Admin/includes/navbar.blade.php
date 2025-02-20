<div class="main-header" style="margin-left: 18%;">
    <div class="main-header-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
        <div class="container-fluid">
            <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="submit" class="btn btn-search pe-1">
                            <i class="fa fa-search search-icon"></i>
                        </button>
                    </div>
                    <input type="text" placeholder="Search ..." class="form-control" />
                </div>
            </nav>

            <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false" aria-haspopup="true">
                        <i class="fa fa-search"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-search animated fadeIn">
                        <form class="navbar-left navbar-form nav-search">
                            <div class="input-group">
                                <input type="text" placeholder="Search ..." class="form-control" />
                            </div>
                        </form>
                    </ul>
                </li>





                <li class="nav-item topbar-user dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                        aria-expanded="false">
                        <div class="avatar-sm">
                            <img src="{{ asset('admin/assets/logo/rahatITdepartment.png') }}" alt="..."
                                class="avatar-img rounded-circle" />
                        </div>

                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">
                                    <div class="avatar-lg">
                                        <img src="{{ asset('admin/assets/logo/rahatITdepartment.png') }}" alt="image profile"
                                            class="avatar-img rounded" />
                                    </div>
                                    <div class="u-text">
                                        <h4>Rahat Forex</h4>
                                        <p class="text-muted">  info@rahatforex.com</p>
                                        {{-- <a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View
                                            Profile</a> --}}
                                            <a  class="btn btn-xs btn-secondary btn-sm " href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>
                                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                    </div>
                                </div>
                            </li>
                            <li>
                                {{-- <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">My Profile</a>
                                <a class="dropdown-item" href="#">My Balance</a>
                                <a class="dropdown-item" href="#">Inbox</a>
                                <div class="dropdown-divider"></div> --}}
                                {{-- <a class="dropdown-item" href="#">Account Setting</a>
                                <div class="dropdown-divider"></div> --}}
                                {{-- <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form> --}}
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
        <style>
            /* Ensure dropdown is positioned correctly */
.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1050;
    display: none; /* Hide dropdown initially */
    min-width: 10rem;
    padding: 0.5rem 0;
    margin: 0.125rem 0 0;
    font-size: 0.875rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

/* Ensure dropdown is visible when parent is active */
.dropdown-menu.show {
    display: block;
    animation: fadeIn 0.3s ease-in-out;
}

/* Avatar in dropdown */
.avatar-sm {
    width: 40px;
    height: 40px;
    overflow: hidden;
}

.avatar-sm img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Dropdown search input */
.nav-search .input-group {
    padding: 10px;
    width: 300px;
}

.nav-search .form-control {
    border-radius: 5px;
    border: 1px solid #ccc;
}

/* Profile section styling */
.user-box {
    display: flex;
    align-items: center;
    padding: 15px;
}

.user-box .avatar-lg {
    width: 50px;
    height: 50px;
    margin-right: 10px;
}

.user-box .avatar-lg img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Dropdown links */
.dropdown-item {
    padding: 10px 20px;
    color: #333;
    transition: background 0.3s;
}

.dropdown-item:hover {
    background-color: #f8f9fa;
    color: #007bff;
}

/* Smooth fade-in animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(5px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

        </style>
    </nav>
    <!-- End Navbar -->
</div>
