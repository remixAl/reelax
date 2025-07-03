<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <button type="button" class="float-end btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMenuModal">
            <span class="icon-base bx bx-plus icon-sm me-2"></span>Add Menu
        </button>
        <h4 class="fw-bold py-3 mb-4"><?= $title ?></h4>
        <?= $this->session->flashdata('message'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Menu List</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Menu Name</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($menu as $index => $menu) : ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1; ?></th>
                                        <td><?= $menu['menu']; ?></td>
                                        <td>
                                            <a href="<?= base_url('menu/editMenu/' . $menu['id']) ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Menu">
                                                <i class="bx bx-edit text-warning fs-4"></i>
                                            </a>
                                            <a href="<?= base_url('menu/deleteMenu/' . $menu['id']) ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Menu">
                                                <i class="bx bx-trash text-danger fs-4"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tambah menu Modal -->
<div class="modal fade" id="addMenuModal" tabindex="-1" aria-labelledby="addMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addMenuModalLabel">Add Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('menu/'); ?>" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="menu" class="form-label">Menu Name</label>
                        <input type="text" class="form-control" id="menu" name="menu" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>