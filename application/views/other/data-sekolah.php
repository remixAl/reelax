<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <?= $this->session->flashdata('message'); ?>
        <div class="row mb-4">

            <div class="col-md-3">
                <div class="card m-0 rounded-pill">
                    <h4 class="fw-bold text-center py-3 m-0 text-primary"><i class="<?= $icon ?>"></i> <?= $title ?></h4>
                </div>
            </div>
            <div class="col-md-9">
                <ul class="nav nav-tabs justify-content-center text-center border-0" id="schoolTabNav" style="border-bottom: none;">
                    <li class="nav-item">
                        <a class="nav-link px-1 py-2 active" data-tab="profile-sekolah" href="#">Profile Sekolah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-1 py-2" data-tab="mata-pelajaran" href="#">Mata Pelajaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-1 py-2" data-tab="data-guru" href="#">Data Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-1 py-2" data-tab="data-kelas" href="#">Data Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-1 py-2" data-tab="data-siswa" href="#">Data Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-1 py-2" data-tab="data-ortu" href="#">Data Ortu</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="tab-content" style="width:100%">
                <div class="tab-pane fade show active" id="tab-profile-sekolah">
                    <!-- Kartu Informasi Sekolah -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card shadow-sm mb-4">
                                <img src="<?= base_url('assets/img/backgrounds/18.jpg') ?>" class="card-img-top" alt="Foto Sekolah">
                                <div class="card-body">
                                    <h5 class="card-title text-success mb-1">SMK ISLAM BATU</h5>
                                    <p class="mb-3">35667429</p>
                                    <div class="d-grid gap-2">
                                        <span class="my-1 btn btn-success text-white">AKREDITASI A</span>
                                        <span class="my-1 btn btn-success text-white">15 JURUSAN</span>
                                        <span class="my-1 btn btn-success text-white">90+ KERJASAMA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card shadow-sm mb-4">
                                <div class="card-body">
                                    <h5 class="text-success mb-3">Tentang</h5>
                                    <p class="text-muted">SMK Islam Batu adalah Sekolah Kejuruan yang memiliki 2 Bidang Keahlian dan 6 Kompetensi, yaitu Bisnis Manajemen; Akuntansi dan Keuangan Lembaga, Bisnis Daring dan Pemasaran, Perbankan Syariah dan Teknik Informatika; Teknik Komputer Jaringan dan Telekomunikasi, Rekayasa Perangkat Lunak dan Multimedia (Desain Komunikasi Visual).</p>
                                    <ul class="list-unstyled mb-0">
                                        <li class="py-3"><strong class="text-primary">Lembaga:</strong> Kemendikbud</li>
                                        <li class="py-3"><strong class="text-primary">Status Pendidikan:</strong> Negeri</li>
                                        <li class="py-3"><strong class="text-primary">Jenjang:</strong> Sekolah Menengah Kejuruan</li>
                                        <li class="py-3"><strong class="text-primary">Alamat:</strong> Jl Amarta 3 perum galaksi bimasakti</li>
                                        <li class="py-3"><strong class="text-primary">Kota/Kab & Provinsi:</strong> Kota Batu - Jawa Timur</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-mata-pelajaran">
                    <div class="card card-body text-center my-4">
                        <h4 class="mb-2">Mata Pelajaran</h4>
                        <p>Halaman ini berisi daftar mata pelajaran.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-data-guru">
                    <div class="card card-body text-center my-4">
                        <h4 class="mb-2">Data Guru</h4>
                        <p>Halaman ini berisi data guru.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-data-kelas">
                    <div class="card card-body text-center my-4">
                        <h4 class="mb-2">Data Kelas</h4>
                        <p>Halaman ini berisi data kelas.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-data-siswa">
                    <div class="card card-body text-center my-4">
                        <h4 class="mb-2">Data Siswa</h4>
                        <p>Halaman ini berisi data siswa.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-data-ortu">
                    <div class="card card-body text-center my-4">
                        <h4 class="mb-2">Data Ortu</h4>
                        <p>Halaman ini berisi data orang tua/wali siswa.</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // Tab switching logic
            document.querySelectorAll('#schoolTabNav .nav-link').forEach(function(tab) {
                tab.addEventListener('click', function(e) {
                    e.preventDefault();
                    // Remove active from all tabs
                    document.querySelectorAll('#schoolTabNav .nav-link').forEach(function(t) {
                        t.classList.remove('active');
                    });
                    // Hide all tab panes
                    document.querySelectorAll('.tab-pane').forEach(function(pane) {
                        pane.classList.remove('show', 'active');
                    });
                    // Activate clicked tab
                    this.classList.add('active');
                    // Show corresponding tab pane
                    var tabId = 'tab-' + this.getAttribute('data-tab');
                    var tabPane = document.getElementById(tabId);
                    if (tabPane) {
                        tabPane.classList.add('show', 'active');
                    }
                });
            });
        </script>
    </div>
</div>
<style>
    .nav-tabs .nav-link {
        color: #697a8d;
        font-weight: 500;
        border: none;
        border-radius: 0.75rem 0.75rem 0 0;
        margin-left: 0.5rem;
        margin-right: 0.5rem;
        background: #f7fafc;
        transition: background 0.2s, color 0.2s;
        position: relative;
    }

    .nav-tabs .nav-link.active {
        color: #ade498 !important;
        background: #fff !important;
        box-shadow: none;
    }

    .nav-tabs .nav-link.active::after {
        content: '';
        display: block;
        position: absolute;
        left: 16px;
        right: 16px;
        bottom: 0;
        height: 3px;
        border-radius: 2px 2px 0 0;
        background: #ade498;
    }

    .nav-tabs {
        border-bottom: none !important;
    }

    .nav-tabs .nav-item .nav-link:not(.active) {
        background: #ffffff;
        color: #697a8d;
    }

    .nav-tabs .nav-link:hover:not(.active) {
        background: #e3f7d6;
        color: #222;
    }

    .nav-tabs .nav-item:first-child .nav-link {
        border-top-left-radius: 1.5rem !important;
        border-bottom-left-radius: 1.5rem !important;
    }

    .nav-tabs .nav-item:last-child .nav-link {
        border-top-right-radius: 1.5rem !important;
        border-bottom-right-radius: 1.5rem !important;
    }

    .card-collapser:hover {
        background: #f7fafc;
    }

    .card-collapser:active {
        background: #e3f7d6;
    }

    .card-collapsible {
        transition: box-shadow 0.2s;
    }

    .card-collapsible.active {
        box-shadow: 0 0 0 2px #ade498;
    }

    .card-collapse-content {
        overflow: hidden;
        height: 0;
        opacity: 0;
        transition: height 0.35s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .card-collapsible.active .card-collapse-content {
        opacity: 1;
    }
</style>