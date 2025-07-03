<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <button type="button" class="float-end btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSubMenuModal">
            <span class="icon-base bx bx-plus icon-sm me-2"></span>Add Sub Menu
        </button>
        <h4 class="fw-bold py-3 mb-4"><?= $title ?></h4>
        <?= $this->session->flashdata('message'); ?>

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sub Menu List</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Sub Menu Name</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Active</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($subMenu as $index => $subMenu) : ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1; ?></th>
                                        <td><?= $subMenu['title']; ?></td>
                                        <td><?= $subMenu['menu']; ?></td>
                                        <td><?= $subMenu['url']; ?></td>
                                        <td><i class="<?= $subMenu['icon']; ?>"></i></td>
                                        <td><?= $subMenu['is_active'] ? 'Yes' : 'No'; ?></td>
                                        <td>
                                            <a href="<?= base_url('menu/editSubMenu/' . $subMenu['id']) ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Sub Menu">
                                                <i class="bx bx-edit text-warning fs-4"></i>
                                            </a>
                                            <a href="<?= base_url('menu/deleteSubMenu/' . $subMenu['id']) ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Sub Menu">
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

<!-- modalsubmenuadd -->
<div class="modal fade" id="addSubMenuModal" tabindex="-1" aria-labelledby="addSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSubMenuModalLabel">Add Sub Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('menu/subMenu'); ?>" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Sub Menu Name</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="menu_id" class="form-label">Menu</label>
                        <select class="form-select" id="menu_id" name="menu_id" required>
                            <?php foreach ($this->db->get('user_menu')->result() as $menu): ?>
                                <option value="<?= $menu->id; ?>"><?= $menu->menu; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="url" class="form-label">URL</label>
                        <input type="text" class="form-control" id="url" name="url" required>
                    </div>
                    <div class="mb-3">
                        <label for="icon" class="form-label">Icon</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="icon" value="bx bx-" name="icon" oninput="updateIconPreview()">
                            <span class="input-group-text" id="icon-preview"><i class=""></i></span>
                        </div>
                        <small class="form-text text-muted">Example: bx bx-user</small>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="is_active" name="is_active" checked>
                        <label class="form-check-label" for="is_active">Active</label>
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
<script>
    function updateIconPreview() {
        var iconInput = document.getElementById('icon');
        var iconPreview = document.getElementById('icon-preview').querySelector('i');
        iconPreview.className = iconInput.value;
    }
    // Initialize preview if editing
    if (document.getElementById('icon')) {
        updateIconPreview();
    }
</script>