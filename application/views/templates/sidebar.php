<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="index.html" class="app-brand-link">
                    <span class="app-brand-logo demo">
                        <img src="<?= base_url('assets/img/logo/green-black.png') ?>" alt="Logo" class="h-auto">
                    </span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <?php
            $CI = &get_instance();
            $CI->load->model('Menu_model', 'menu');
            $menus = $CI->menu->get_menu_with_submenu();
            ?>
            <ul class="menu-inner py-1">
                <?php
                $activeMenuIndex = null;
                foreach ($menus as $idx => $menu) {
                    if (!empty($menu['submenus'])) {
                        foreach ($menu['submenus'] as $submenu) {
                            if (isset($title) && ($submenu['title'] === $title || $submenu['url'] === $title)) {
                                $activeMenuIndex = $idx;
                                break 2;
                            }
                        }
                    }
                }
                if ($activeMenuIndex === null) {
                    foreach ($menus as $idx => $menu) {
                        if (!empty($menu['submenus'])) {
                            $activeMenuIndex = $idx;
                            break;
                        }
                    }
                }
                ?>
                <?php foreach ($menus as $idx => $menu): ?>
                    <li class="menu-header small text-uppercase" style="cursor:pointer;" data-menu-idx="<?= $idx ?>">
                        <span class="menu-header-text">
                            <?= $menu['menu'] ?>
                            <i class="bx bx-chevron-down float-end"></i>
                        </span>
                    </li>
                    <?php if (!empty($menu['submenus'])): ?>
                        <ul class="submenu-list" id="submenu-<?= $idx ?>" style="display:<?= $activeMenuIndex === $idx ? 'block' : 'none' ?>;">
                            <?php foreach ($menu['submenus'] as $submenu): ?>
                                <li class="menu-item<?php if (isset($title) && ($submenu['title'] === $title || $submenu['url'] === $title)) echo ' active'; ?>">
                                    <a href="<?= base_url($submenu['url']) ?>" class="menu-link">
                                        <?php if (!empty($submenu['icon'])): ?>
                                            <i class="menu-icon tf-icons <?= $submenu['icon'] ?>"></i>
                                        <?php endif; ?>
                                        <div data-i18n="<?= $submenu['title'] ?>">
                                            <?= $submenu['title'] ?>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                <?php endforeach; ?>
                <li class="menu-divider"></li>
                <li class="menu-item">
                    <a href="#" class="menu-link" data-bs-toggle="modal" data-bs-target="#logoutModal">
                        <i class="menu-icon tf-icons bx bx-power-off"></i>
                        <div data-i18n="About">Logout</div>
                    </a>
                </li>
            </ul>
        </aside>
        <!-- / Menu -->

        <!-- Logout Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to logout?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <a href="<?= base_url('auth/logout') ?>" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Accordion toggle for sidebar menu
            const menuHeaders = document.querySelectorAll('.menu-header[data-menu-idx]');
            menuHeaders.forEach(header => {
                header.addEventListener('click', function() {
                    const idx = this.getAttribute('data-menu-idx');
                    document.querySelectorAll('.submenu-list').forEach((ul, i) => {
                        if (ul.id === 'submenu-' + idx) {
                            ul.style.display = (ul.style.display === 'block') ? 'none' : 'block';
                        } else {
                            ul.style.display = 'none';
                        }
                    });
                });
            });
        </script>

        <style>
            .menu-item.active>.menu-link {
                background-color: rgb(224, 250, 226) !important;
                /* Light blue highlight */
                color: #ade498 !important;
                /* Bootstrap primary */
                font-weight: 600;
                border-radius: 6px;
            }

            .menu-item.active>.menu-link i,
            .menu-item.active>.menu-link div {
                color: #ade498 !important;
            }
        </style>