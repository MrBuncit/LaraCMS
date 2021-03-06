    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-left ms-3"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute right-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="/UI/pages/dashboard.html">
                <span class="ms-1 font-weight-bold">Balada [La]ravel</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">

                @if (Auth::check())
                    <li><a href="{{ route('home') }}"></a></li>

                @endif
                @role('admin')
                    <li class="nav-item">
                        <a class="nav-link  active" href="#">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <span class="fa fa-users"></span>
                            </div>
                            <span class="nav-link-text ms-1">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  " href="{{ route('authors.index') }}">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <span class="fa fa-user-secret"></span>
                            </div>
                            <span class="nav-link-text ms-1">Penulis</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  " href="{{ route('books.index') }}">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <span class="fa fa-users"></span>
                            </div>
                            <span class="nav-link-text ms-1">Buku</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  " href="{{ route('staffs') }}">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <span class="fa fa-users"></span>
                            </div>
                            <span class="nav-link-text ms-1">Staff</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  " href="#">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <span class="fa fa-users"></span>
                            </div>
                            <span class="nav-link-text ms-1">Tables</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link  " href="#">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <span class="fa fa-users"></span>
                            </div>
                            <span class="nav-link-text ms-1">Billing</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  " href="#">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <span class="fa fa-users"></span>
                            </div>
                            <span class="nav-link-text ms-1">User</span>
                        </a>
                    </li>

                    <li class="nav-item mt-3">
                        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="#">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <span class="fa fa-users"></span>
                            </div>
                            <span class="nav-link-text ms-1">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="#">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <span class="fa fa-users"></span>
                            </div>
                            <span class="nav-link-text ms-1">Sign In</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="#">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <span class="fa fa-users"></span>
                            </div>
                            <span class="nav-link-text ms-1">Sign Up</span>
                        </a>
                    </li>
                @endrole
            </ul>
        </div>
    </aside>
