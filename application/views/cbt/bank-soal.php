<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <?= $this->session->flashdata('message'); ?>
        <div class="row mb-4 justify-content-center text-center">
            <div class="col-md-3">
                <div class="card m-0 rounded-pill">
                    <h4 class="fw-bold text-center py-3 m-0 text-primary"><i class="<?= $icon; ?>"></i> <?= $title ?></h4>
                </div>
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary">Tambah Paket Soal</button>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body p-2">
                        <div class="row">
                            <div class="col-md-1">
                                <i class="fa-solid fa-warning text-primary fs-3"></i>
                            </div>
                            <div class="col-md-11">
                                <p class="text-muted mb-0">
                                    Tabel di bawah menampilkan paket soal yang telah dibuat oleh guru sesama matapelajaran di sekolah ini
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3 align-items-center">
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-6 text-end">
                                <input type="text" id="searchInput" class="form-control w-auto d-inline-block" placeholder="Cari Nama Paket..." style="max-width: 250px;">
                            </div>
                        </div>
                        <table class="table table-striped table-sm" id="bank-soal-table" style="font-size:0.92rem;">
                            <thead class="custom-table-head">
                                <tr>
                                    <th class="custom-th rounded-th-left">No</th>
                                    <th class="custom-th">Tanggal Ujian</th>
                                    <th class="custom-th">Paket Soal</th>
                                    <th class="custom-th">Nama Paket Soal</th>
                                    <th class="custom-th">Mata Pelajaran</th>
                                    <th class="custom-th">Jumlah Soal</th>
                                    <th class="custom-th">Kelas</th>
                                    <th class="custom-th">Status</th>
                                    <th class="custom-th">Dibuat Oleh</th>
                                    <th class="custom-th rounded-th-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        Kamis,<br>
                                        12 Oktober 2023
                                    </td>
                                    <td>PT-251606-IKB</td>
                                    <td>Bhs. Inggris<br>DKV-Genap25</td>
                                    <td>Desain Komunikasi Visual</td>
                                    <td>60</td>
                                    <td>XII DKV</td>
                                    <td>Sudah Digunakan</td>
                                    <td>Remixx S.Kom</td>
                                    <td>
                                        <a href="" class="text-primary"><i class="fa-solid fa-eye"></i></a>
                                        <a href="" class="text-primary"><i class="fa-solid fa-trash"></i></a>
                                        <a href="" class="text-primary"><i class="fa-solid fa-edit"></i></a>
                                        <a href="" class="text-primary"><i class="fa-solid fa-monitor"></i></a>
                                        <button class="btn btn-sm btn-primary">UJIAN</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        Jumat,<br>
                                        13 Oktober 2023
                                    </td>
                                    <td>PT-251607-IKB</td>
                                    <td>Matematika<br>DKV-Genap25</td>
                                    <td>Matematika</td>
                                    <td>50</td>
                                    <td>XII DKV</td>
                                    <td>Belum Digunakan</td>
                                    <td>Remixx S.Kom</td>
                                    <td>
                                        <a href="" class="text-primary"><i class="fa-solid fa-eye"></i></a>
                                        <a href="" class="text-primary"><i class="fa-solid fa-trash"></i></a>
                                        <a href="" class="text-primary"><i class="fa-solid fa-edit"></i></a>
                                        <a href="" class="text-primary"><i class="fa-solid fa-monitor"></i></a>
                                        <button class="btn btn-sm btn-primary">UJIAN</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        Senin,<br>
                                        16 Oktober 2023
                                    </td>
                                    <td>PT-251608-IKB</td>
                                    <td>Fisika<br>DKV-Genap25</td>
                                    <td>Fisika</td>
                                    <td>40</td>
                                    <td>XII DKV</td>
                                    <td>Sudah Digunakan</td>
                                    <td>Remixx S.Kom</td>
                                    <td>
                                        <a href="" class="text-primary"><i class="fa-solid fa-eye"></i></a>
                                        <a href="" class="text-primary"><i class="fa-solid fa-trash"></i></a>
                                        <a href="" class="text-primary"><i class="fa-solid fa-edit"></i></a>
                                        <a href="" class="text-primary"><i class="fa-solid fa-monitor"></i></a>
                                        <button class="btn btn-sm btn-primary">UJIAN</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        Selasa,<br>
                                        17 Oktober 2023
                                    </td>
                                    <td>PT-251609-IKB</td>
                                    <td>Kimia<br>DKV-Genap25</td>
                                    <td>Kimia</td>
                                    <td>55</td>
                                    <td>XII DKV</td>
                                    <td>Belum Digunakan</td>
                                    <td>Remixx S.Kom</td>
                                    <td>
                                        <a href="" class="text-primary"><i class="fa-solid fa-eye"></i></a>
                                        <a href="" class="text-primary"><i class="fa-solid fa-trash"></i></a>
                                        <a href="" class="text-primary"><i class="fa-solid fa-edit"></i></a>
                                        <a href="" class="text-primary"><i class="fa-solid fa-monitor"></i></a>
                                        <button class="btn btn-sm btn-primary">UJIAN</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Simple search filter for the table
    const searchInput = document.getElementById('searchInput');
    if (searchInput) {
        searchInput.addEventListener('keyup', function() {
            const filter = this.value.toLowerCase();
            const rows = document.querySelectorAll('#bank-soal-table tbody tr');
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(filter) ? '' : 'none';
            });
        });
    }
</script>
<style>
    .custom-table-head {
        background: #ade498;
    }

    .custom-th {
        color: #fff !important;
        border: none !important;
        font-weight: 400;
    }

    .rounded-th-left {
        border-top-left-radius: 12px;
    }

    .rounded-th-right {
        border-top-right-radius: 12px;
    }
</style>