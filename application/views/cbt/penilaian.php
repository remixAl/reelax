<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row mb-4 justify-content-center text-center">
            <div class="col-md-3">
                <div class="card m-0 rounded-pill">
                    <h4 class="fw-bold text-center py-3 m-0 text-primary"><i class="<?= $icon ?>"></i> <?= $title ?></h4>
                </div>
            </div>
            <div class="col-md-9">
                <ul class="nav nav-tabs justify-content-end border-0" style="border-bottom: none;">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Penilaian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hasil & Analisa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pengaturan</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row mb-4 justify-content-center text-center" id="penilaian-controls-row">
            <div class="col-md-3">
                <button id="tambahPenilaianBtn" class="btn btn-primary mt-3 float-start">Tambah Penilaian</button>
                <nav id="row-pagination" aria-label="Page navigation" class="mt-3 d-none">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-9">
                <input type="text" id="searchInput" class="form-control w-auto d-inline-block float-end" placeholder="Cari Penilaian..." style="max-width: 250px;">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <div id="tab-content-penilaian" class="py-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row mt-3">
                                <!-- Card 1 -->
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <span class="badge rounded-pill bg-danger text-white">UAS-GENAP</span>
                                                    <span class="badge rounded-pill bg-secondary text-white">2-RUANG UAS-GENAP</span>
                                                    <h5 class="mt-1 fw-semibold text-primary">Matematika XI IPA 1</h5>
                                                    <span class="badge bg-light text-dark border border-secondary">No. Token : X1MATH</span>
                                                    <div class="row">
                                                        <div class="col-md-8 p-0">
                                                            <i class="fa-solid fa-calendar mr-2"></i> Senin, 10 Juni 2025
                                                        </div>
                                                        <div class="col-md-4 p-0">
                                                            <i class="fa-solid fa-people-roof mr-2"></i> 32 Siswa
                                                        </div>
                                                        <div class="pt-1 col-md-8 p-0">
                                                            <i class="fa-solid fa-clock mr-2"></i> 07.30 - 09.30 WIB
                                                        </div>
                                                        <div class="pt-1 col-md-4 p-0">
                                                            <i class="fa-solid fa-stopwatch mr-2"></i> 120 Menit
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 d-flex justify-content-center align-items-stretch">
                                                    <div style="border-left:2px solid #dee2e6; height:100%; width:0;"></div>
                                                </div>
                                                <div class="col-md-3 p-0">
                                                    <button class="btn btn-warning">Hitung Nilai</button>
                                                    <div class="mt-2">
                                                        <button class="btn btn-secondary" disabled><i class="fa-solid fa-lock"></i> Bagikan Nilai</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card 2 -->
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <span class="badge rounded-pill bg-info text-white">UTS-GANJIL</span>
                                                    <span class="badge rounded-pill bg-secondary text-white">1-RUANG UTS-GANJIL</span>
                                                    <h5 class="mt-1 fw-semibold text-primary">Bahasa Inggris X IPS 2</h5>
                                                    <span class="badge bg-light text-dark border border-secondary">No. Token : X2ENG</span>
                                                    <div class="row">
                                                        <div class="col-md-8 p-0">
                                                            <i class="fa-solid fa-calendar mr-2"></i> Rabu, 12 Juni 2025
                                                        </div>
                                                        <div class="col-md-4 p-0">
                                                            <i class="fa-solid fa-people-roof mr-2"></i> 28 Siswa
                                                        </div>
                                                        <div class="pt-1 col-md-8 p-0">
                                                            <i class="fa-solid fa-clock mr-2"></i> 10.00 - 12.00 WIB
                                                        </div>
                                                        <div class="pt-1 col-md-4 p-0">
                                                            <i class="fa-solid fa-stopwatch mr-2"></i> 120 Menit
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 d-flex justify-content-center align-items-stretch">
                                                    <div style="border-left:2px solid #dee2e6; height:100%; width:0;"></div>
                                                </div>
                                                <div class="col-md-3 p-0">
                                                    <button class="btn btn-warning">Hitung Nilai</button>
                                                    <div class="mt-2">
                                                        <button class="btn btn-secondary" disabled><i class="fa-solid fa-lock"></i> Bagikan Nilai</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card 3 -->
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <span class="badge rounded-pill bg-warning text-white">UAS-GANJIL</span>
                                                    <span class="badge rounded-pill bg-secondary text-white">LAB-KIMIA UAS-GANJIL</span>
                                                    <h5 class="mt-1 fw-semibold text-primary">Kimia XII IPA 3</h5>
                                                    <span class="badge bg-light text-dark border border-secondary">No. Token : XII3CHEM</span>
                                                    <div class="row">
                                                        <div class="col-md-8 p-0">
                                                            <i class="fa-solid fa-calendar mr-2"></i> Jumat, 14 Juni 2025
                                                        </div>
                                                        <div class="col-md-4 p-0">
                                                            <i class="fa-solid fa-people-roof mr-2"></i> 30 Siswa
                                                        </div>
                                                        <div class="pt-1 col-md-8 p-0">
                                                            <i class="fa-solid fa-clock mr-2"></i> 13.00 - 15.00 WIB
                                                        </div>
                                                        <div class="pt-1 col-md-4 p-0">
                                                            <i class="fa-solid fa-stopwatch mr-2"></i> 120 Menit
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 d-flex justify-content-center align-items-stretch">
                                                    <div style="border-left:2px solid #dee2e6; height:100%; width:0;"></div>
                                                </div>
                                                <div class="col-md-3 p-0">
                                                    <button class="btn btn-warning">Hitung Nilai</button>
                                                    <div class="mt-2">
                                                        <button class="btn btn-primary">Bagikan Nilai</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Analisa Tab Content -->
                <div id="tab-content-hasil" class="py-3 d-none">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row mt-3">
                                <!-- Card 1 Analisa -->
                                <div class="col-md-4">
                                    <div class="card h-100">
                                        <div class="card-body h-100">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <span class="badge rounded-pill bg-danger text-white">UAS-GENAP</span>
                                                    <span class="badge rounded-pill bg-secondary text-white">2-RUANG UAS-GENAP</span>
                                                    <h5 class="mt-1 fw-semibold text-primary">Matematika XI IPA 1</h5>
                                                    <p class="mt-1"><span class="badge bg-light text-dark border border-secondary">No. Token : X1MATH</span></p>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <i class="fa-solid fa-calendar mr-2"></i> Senin, 10 Juni 2025
                                                        </div>
                                                        <div class="col-md-6">
                                                            <i class="fa-solid fa-people-roof mr-2"></i> 32 Siswa
                                                        </div>
                                                        <div class="col-md-6 pt-1">
                                                            <i class="fa-solid fa-clock mr-2"></i> 07.30 - 09.30 WIB
                                                        </div>
                                                        <div class="col-md-6 pt-1">
                                                            <i class="fa-solid fa-stopwatch mr-2"></i> 120 Menit
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 d-flex justify-content-center align-items-stretch">
                                                    <div style="border-left:2px solid #dee2e6; height:100%; width:0;"></div>
                                                </div>
                                                <div class="col-md-3 d-flex flex-column justify-content-center align-items-stretch p-0">
                                                    <button class="btn btn-info mb-2">Analisa</button>
                                                    <div class="d-flex flex-column gap-1">
                                                        <button class="btn btn-success btn-sm">Cetak</button>
                                                        <button class="btn btn-primary btn-sm">Unduh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card 2 Analisa -->
                                <div class="col-md-4">
                                    <div class="card h-100">
                                        <div class="card-body h-100">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <span class="badge rounded-pill bg-info text-white">UTS-GANJIL</span>
                                                    <span class="badge rounded-pill bg-secondary text-white">1-RUANG UTS-GANJIL</span>
                                                    <h5 class="mt-1 fw-semibold text-primary">Bahasa Inggris X IPS 2</h5>
                                                    <p class="mt-1"><span class="badge bg-light text-dark border border-secondary">No. Token : X2ENG</span></p>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <i class="fa-solid fa-calendar mr-2"></i> Rabu, 12 Juni 2025
                                                        </div>
                                                        <div class="col-md-6">
                                                            <i class="fa-solid fa-people-roof mr-2"></i> 28 Siswa
                                                        </div>
                                                        <div class="col-md-6 pt-1">
                                                            <i class="fa-solid fa-clock mr-2"></i> 10.00 - 12.00 WIB
                                                        </div>
                                                        <div class="col-md-6 pt-1">
                                                            <i class="fa-solid fa-stopwatch mr-2"></i> 120 Menit
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 d-flex justify-content-center align-items-stretch">
                                                    <div style="border-left:2px solid #dee2e6; height:100%; width:0;"></div>
                                                </div>
                                                <div class="col-md-3 d-flex flex-column justify-content-center align-items-stretch p-0">
                                                    <button class="btn btn-info mb-2">Analisa</button>
                                                    <div class="d-flex flex-column gap-1">
                                                        <button class="btn btn-success btn-sm">Cetak</button>
                                                        <button class="btn btn-primary btn-sm">Unduh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card 3 Analisa -->
                                <div class="col-md-4">
                                    <div class="card h-100">
                                        <div class="card-body h-100">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <span class="badge rounded-pill bg-warning text-white">UAS-GANJIL</span>
                                                    <span class="badge rounded-pill bg-secondary text-white">LAB-KIMIA UAS-GANJIL</span>
                                                    <h5 class="mt-1 fw-semibold text-primary">Kimia XII IPA 3</h5>
                                                    <p class="mt-1"><span class="badge bg-light text-dark border border-secondary">No. Token : XII3CHEM</span></p>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <i class="fa-solid fa-calendar mr-2"></i> Jumat, 14 Juni 2025
                                                        </div>
                                                        <div class="col-md-6">
                                                            <i class="fa-solid fa-people-roof mr-2"></i> 30 Siswa
                                                        </div>
                                                        <div class="col-md-6 pt-1">
                                                            <i class="fa-solid fa-clock mr-2"></i> 13.00 - 15.00 WIB
                                                        </div>
                                                        <div class="col-md-6 pt-1">
                                                            <i class="fa-solid fa-stopwatch mr-2"></i> 120 Menit
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 d-flex justify-content-center align-items-stretch">
                                                    <div style="border-left:2px solid #dee2e6; height:100%; width:0;"></div>
                                                </div>
                                                <div class="col-md-3 d-flex flex-column justify-content-center align-items-stretch p-0">
                                                    <button class="btn btn-info mb-2">Analisa</button>
                                                    <div class="d-flex flex-column gap-1">
                                                        <button class="btn btn-success btn-sm">Cetak</button>
                                                        <button class="btn btn-primary btn-sm">Unduh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pengaturan Tab Content -->
                <div id="tab-content-pengaturan" class="py-3 d-none">
                    <div class="row mt-3">
                        <!-- Card 1 Pengaturan -->
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-body h-100">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <span class="badge rounded-pill bg-danger text-white">UAS-GENAP</span>
                                            <span class="badge rounded-pill bg-secondary text-white">2-RUANG UAS-GENAP</span>
                                            <h5 class="mt-1 fw-semibold text-primary">Matematika XI IPA 1</h5>
                                            <p class="mt-1"><span class="badge bg-light text-dark border border-secondary">No. Token : X1MATH</span></p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <i class="fa-solid fa-calendar mr-2"></i> Senin, 10 Juni 2025
                                                </div>
                                                <div class="col-md-6">
                                                    <i class="fa-solid fa-people-roof mr-2"></i> 32 Siswa
                                                </div>
                                                <div class="col-md-6 pt-1">
                                                    <i class="fa-solid fa-clock mr-2"></i> 07.30 - 09.30 WIB
                                                </div>
                                                <div class="col-md-6 pt-1">
                                                    <i class="fa-solid fa-stopwatch mr-2"></i> 120 Menit
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1 d-flex justify-content-center align-items-stretch">
                                            <div style="border-left:2px solid #dee2e6; height:100%; width:0;"></div>
                                        </div>
                                        <div class="col-md-3 d-flex flex-column justify-content-center align-items-stretch p-0">
                                            <button class="btn btn-primary">Pengaturan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card 2 Pengaturan -->
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-body h-100">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <span class="badge rounded-pill bg-info text-white">UTS-GANJIL</span>
                                            <span class="badge rounded-pill bg-secondary text-white">1-RUANG UTS-GANJIL</span>
                                            <h5 class="mt-1 fw-semibold text-primary">Bahasa Inggris X IPS 2</h5>
                                            <p class="mt-1"><span class="badge bg-light text-dark border border-secondary">No. Token : X2ENG</span></p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <i class="fa-solid fa-calendar mr-2"></i> Rabu, 12 Juni 2025
                                                </div>
                                                <div class="col-md-6">
                                                    <i class="fa-solid fa-people-roof mr-2"></i> 28 Siswa
                                                </div>
                                                <div class="col-md-6 pt-1">
                                                    <i class="fa-solid fa-clock mr-2"></i> 10.00 - 12.00 WIB
                                                </div>
                                                <div class="col-md-6 pt-1">
                                                    <i class="fa-solid fa-stopwatch mr-2"></i> 120 Menit
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1 d-flex justify-content-center align-items-stretch">
                                            <div style="border-left:2px solid #dee2e6; height:100%; width:0;"></div>
                                        </div>
                                        <div class="col-md-3 d-flex flex-column justify-content-center align-items-stretch p-0">
                                            <button class="btn btn-primary">Pengaturan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card 3 Pengaturan -->
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-body h-100">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <span class="badge rounded-pill bg-warning text-white">UAS-GANJIL</span>
                                            <span class="badge rounded-pill bg-secondary text-white">LAB-KIMIA UAS-GANJIL</span>
                                            <h5 class="mt-1 fw-semibold text-primary">Kimia XII IPA 3</h5>
                                            <p class="mt-1"><span class="badge bg-light text-dark border border-secondary">No. Token : XII3CHEM</span></p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <i class="fa-solid fa-calendar mr-2"></i> Jumat, 14 Juni 2025
                                                </div>
                                                <div class="col-md-6">
                                                    <i class="fa-solid fa-people-roof mr-2"></i> 30 Siswa
                                                </div>
                                                <div class="col-md-6 pt-1">
                                                    <i class="fa-solid fa-clock mr-2"></i> 13.00 - 15.00 WIB
                                                </div>
                                                <div class="col-md-6 pt-1">
                                                    <i class="fa-solid fa-stopwatch mr-2"></i> 120 Menit
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1 d-flex justify-content-center align-items-stretch">
                                            <div style="border-left:2px solid #dee2e6; height:100%; width:0;"></div>
                                        </div>
                                        <div class="col-md-3 d-flex flex-column justify-content-center align-items-stretch p-0">
                                            <button class="btn btn-primary">Pengaturan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav id="bottom-pagination" aria-label="Page navigation" class="mt-4">
            <ul class="pagination mb-0">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
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
</style>
<script>
    // Tab switching logic: show/hide content for each tab and controls
    document.addEventListener('DOMContentLoaded', function() {
        const tabContents = {
            'Penilaian': document.getElementById('tab-content-penilaian'),
            'Hasil & Analisa': document.getElementById('tab-content-hasil'),
            'Pengaturan': document.getElementById('tab-content-pengaturan')
        };
        const tambahBtn = document.getElementById('tambahPenilaianBtn');
        const rowPagination = document.getElementById('row-pagination');
        const bottomPagination = document.getElementById('bottom-pagination');
        document.querySelectorAll('.nav-link').forEach(tab => {
            tab.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelectorAll('.nav-link').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                Object.keys(tabContents).forEach(key => tabContents[key].classList.add('d-none'));
                tabContents[this.textContent.trim()].classList.remove('d-none');
                if (this.textContent.trim() === 'Penilaian') {
                    tambahBtn.style.display = '';
                    rowPagination.classList.add('d-none');
                    bottomPagination.style.display = '';
                } else {
                    tambahBtn.style.display = 'none';
                    rowPagination.classList.remove('d-none');
                    bottomPagination.style.display = 'none';
                }
            });
        });
        // Default state
        tambahBtn.style.display = '';
        rowPagination.classList.add('d-none');
        bottomPagination.style.display = '';
    });
    // Search bar filter for Penilaian, Analisa, and Pengaturan
    function filterCards(tabId) {
        const input = document.getElementById('searchInput');
        const filter = input.value.toLowerCase();
        const tab = document.getElementById(tabId);
        if (!tab) return;
        const cards = tab.querySelectorAll('.col-md-4');
        cards.forEach(card => {
            const text = card.textContent.toLowerCase();
            card.style.display = text.includes(filter) ? '' : 'none';
        });
    }

    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', function() {
        const activeTab = document.querySelector('.nav-link.active').textContent.trim();
        if (activeTab === 'Penilaian') {
            filterCards('tab-content-penilaian');
        } else if (activeTab === 'Hasil & Analisa') {
            filterCards('tab-content-hasil');
        } else if (activeTab === 'Pengaturan') {
            filterCards('tab-content-pengaturan');
        }
    });
</script>