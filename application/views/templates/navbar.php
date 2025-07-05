<div class="layout-page">
    <!-- Navbar -->

    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-primary bg-navbar-theme shadow-sm rounded-bottom-3 px-3 py-2"
        id="layout-navbar" style="min-height:64px;">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm text-white"></i>
            </a>
        </div>
        <ul class="navbar-nav ms-2" style="width:300px;">
            <li class="nav-item">
                <span class="fw-bold text-white" style="font-size:1.15rem; line-height:1.1; letter-spacing:0.5px;">SMK ISLAM BATU</span><br>
                <span class="text-white d-block" style="font-size:1rem; line-height:1.3; white-space:normal; word-break:break-word; overflow-wrap:break-word; max-width:100%; opacity:0.92;">Halo, Selamat Datang <?= htmlspecialchars($user['fullname']) ?></span>
            </li>
        </ul>

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <ul class="navbar-nav flex-row align-items-center ms-auto gap-2">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class=" nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-gear fs-4 text-white opacity-75"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="<?= base_url('assets/img/avatars/' . $user['image']) ?>" alt class="w-px-40 h-auto rounded-circle avatar-green-border" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-semibold d-block" style="font-size:1.05rem;"><?= $user['username'] ?></span>
                                        <small class="text-muted">Admin</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= base_url('user') ?>">
                                <i class="bx bx-user me-2"></i>
                                <span class="align-middle">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bx bx-cog me-2"></i>
                                <span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= base_url('auth/logout') ?>" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item mb-2">
                    <div class="avatar avatar-online">
                        <img src="<?= base_url('assets/img/avatars/' . $user['image']) ?>" alt class="w-px-40 h-auto rounded-circle avatar-green-border" />
                    </div>
                </li>
                <!--/ User -->
            </ul>
        </div>
    </nav>

    <!-- / Navbar -->

    <style>
        .avatar-green-border {
            border: 2px solid #fff !important;
            box-shadow: 0 0 0 2px #ade498;
            padding: 2px;
            box-sizing: content-box;
            border-radius: 50% !important;
        }

        .navbar-nav .nav-item .fa-gear {
            transition: color 0.2s;
        }

        .navbar-nav .nav-item .fa-gear:hover {
            color: #697a8d !important;
        }

        .dropdown-menu {
            border-radius: 0.75rem;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
        }

        .dropdown-item:active,
        .dropdown-item:focus {
            background: #ade498 !important;
            color: #222 !important;
        }

        .avatar-online {
            /* box-shadow: 0 2px 8px rgba(0, 0, 0, 0.07); */
        }

        .navbar-nav .avatar {
            transition: box-shadow 0.2s;
        }

        .navbar-nav .avatar:hover {
            box-shadow: 0 0 0 4px #ade498;
        }
    </style>