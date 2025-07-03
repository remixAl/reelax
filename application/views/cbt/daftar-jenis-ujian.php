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
            <div class="col-md-9">
                <button class="btn btn-primary float-end">Tambah Jenis Ujian</button>
            </div>
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
                                <input type="text" id="searchInput" class="form-control w-auto d-inline-block" placeholder="Cari Jenis Ujian..." style="max-width: 250px;">
                            </div>
                        </div>
                        <table class="table table-striped table-sm" id="jenis-ujian-table" style="font-size:0.92rem;">
                            <thead class="custom-table-head">
                                <tr>
                                    <th class="custom-th custom-td rounded-th-left">No</th>
                                    <th class="custom-th custom-td">Nama Jenis Ujian</th>
                                    <th class="custom-th custom-td">Keterangan</th>
                                    <th class="custom-th custom-td rounded-th-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="custom-td">1</td>
                                    <td class="custom-td">USP 2023/2024</td>
                                    <td class="custom-td">Ujian Satuan Pendidikan Kelas XII Tahun Pelajaran 2023/2024</td>
                                    <td class="custom-td">
                                        <a href="#" class="text-danger me-2"><i class="fa-solid fa-trash"></i></a>
                                        <a href="#" class="text-primary"><i class="fa-solid fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="custom-td">2</td>
                                    <td class="custom-td">UTS Ganjil 2023/2024</td>
                                    <td class="custom-td">Ujian Tengah Semester Ganjil Tahun Pelajaran 2023/2024</td>
                                    <td class="custom-td">
                                        <a href="#" class="text-danger me-2"><i class="fa-solid fa-trash"></i></a>
                                        <a href="#" class="text-primary"><i class="fa-solid fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="custom-td">3</td>
                                    <td class="custom-td">UAS Genap 2023/2024</td>
                                    <td class="custom-td">Ujian Akhir Semester Genap Tahun Pelajaran 2023/2024</td>
                                    <td class="custom-td">
                                        <a href="#" class="text-danger me-2"><i class="fa-solid fa-trash"></i></a>
                                        <a href="#" class="text-primary"><i class="fa-solid fa-edit"></i></a>
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
            const rows = document.querySelectorAll('#jenis-ujian-table tbody tr');
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

    .custom-td {
        padding-top: 0.75rem !important;
        padding-bottom: 0.75rem !important;
        vertical-align: middle;
    }
</style>