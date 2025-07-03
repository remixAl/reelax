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
            <div class="col-md-3 d-flex flex-column justify-content-center align-items-center my-auto">
                <img src="<?= base_url('assets/img/illustrations/exam.png') ?>" alt="" width="240px">
                <h4 class="mt-3 text-center">Unggah Paket Soal</h4>
                <p class="mb-0 text-center">Silahkan pilih jenis file untuk unggah paket soal</p>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="<?= base_url('assets/img/illustrations/word.png') ?>" alt="" width="100px">
                            </div>
                            <div class="col-md-8">
                                <h4 class="mt-2">Microsoft Word</h4>
                                <p class="mb-0">Unduh Template paket soal dan unggah paket soal menggunakan
                                    Microsoft Word</p>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" class="form-check-input" name="file_type" id="file_type_word" value="word">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="<?= base_url('assets/img/illustrations/excel.png') ?>" alt="" width="100px">
                            </div>
                            <div class="col-md-8">
                                <h4 class="mt-2">Microsoft Excel</h4>
                                <p class="mb-0">Unduh Template paket soal dan unggah paket soal menggunakan
                                    Microsoft Excel</p>
                            </div>
                            <div class="col-md-1">
                                <input type="radio" class="form-check-input" name="file_type" id="file_type_excel" value="excel">
                            </div>
                        </div>
                    </div>
                </div>
                <button id="btn-next" class="mt-2 float-end btn btn-primary" disabled style="cursor: not-allowed;">Selanjutnya</button>
            </div>
            <div class="col-md-3 text-center d-flex flex-column justify-content-center align-items-center my-auto">
                <i class="fa-solid fa-warning fs-2 text-primary"></i>
                <h4 class="mt-3">Peringatan</h4>
                <p class="mb-0">Paket Soal yang anda unggah dapat dilihat oleh guru lain dengan mata pelajaran yang sama sebagai referensi</p>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const radios = document.querySelectorAll('input[name="file_type"]');
        const btnNext = document.getElementById('btn-next');
        radios.forEach(radio => {
            radio.addEventListener('change', function() {
                if (document.querySelector('input[name="file_type"]:checked')) {
                    btnNext.disabled = false;
                    btnNext.style.cursor = 'pointer';
                } else {
                    btnNext.disabled = true;
                    btnNext.style.cursor = 'not-allowed';
                }
            });
        });
    });
</script>