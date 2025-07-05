<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <?= $this->session->flashdata('message'); ?>
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5">
                        <div class="card m-0 rounded-pill">
                            <h4 class="fw-bold text-center py-3 m-0 text-primary"><i class="<?= $icon; ?>"></i> <?= $title ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row">
                <!-- Kartu Informasi Sekolah -->
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

                <!-- Detail Informasi Sekolah -->
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
    </div>
</div>