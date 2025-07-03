<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Edit Role</h4>
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('admin/editRole/' . $role['id']) ?>" method="post">
                            <div class="mb-3">
                                <label for="role" class="form-label">Role Name</label>
                                <input type="text" class="form-control" id="role" name="role" value="<?= $role['role'] ?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                            <a href="<?= base_url('admin/role') ?>" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>