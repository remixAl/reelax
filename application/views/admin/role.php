<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><?= $title ?></h4>
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Role</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Role Name</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($roles as $index => $role) : ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1; ?></th>
                                        <td><?= $role['role']; ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/roleAccess/' . $role['id']) ?>" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Access"><i class="fas fa-key"></i></a>
                                            <a href="<?= base_url('admin/editRole/' . $role['id']) ?>" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url('admin/deleteRole/' . $role['id']) ?>" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></a>
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