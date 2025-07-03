<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><?= $title ?></h4>
        <?= $this->session->flashdata('message'); ?>
    </div>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Submenu</h5>
                        <form action="<?= base_url('menu/editSubMenu/' . $subMenu['id']) ?>" method="post">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="<?= $subMenu['title'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="menu_id" class="form-label">Menu</label>
                                <select class="form-select" id="menu_id" name="menu_id" required>
                                    <?php foreach ($menu as $m) : ?>
                                        <option value="<?= $m['id'] ?>" <?= $subMenu['menu_id'] == $m['id'] ? 'selected' : '' ?>><?= $m['menu'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="url" class="form-label">URL</label>
                                <input type="text" class="form-control" id="url" name="url" value="<?= $subMenu['url'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="icon" class="form-label">Icon</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="icon" name="icon" value="<?= $subMenu['icon'] ?>" oninput="updateIconPreview()">
                                    <span class="input-group-text" id="icon-preview"><i class="<?= $subMenu['icon'] ?>"></i></span>
                                </div>
                                <small class="form-text text-muted">Example: bx bx-user or fa fa-user</small>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" <?= $subMenu['is_active'] ? 'checked' : '' ?>>
                                <label class="form-check-label" for="is_active">Is Active</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                            <a href="<?= base_url('menu/subMenu') ?>" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function updateIconPreview() {
        var iconInput = document.getElementById('icon');
        var iconPreview = document.getElementById('icon-preview').querySelector('i');
        iconPreview.className = iconInput.value;
    }
    // Initialize preview on page load
    if (document.getElementById('icon')) {
        updateIconPreview();
    }
</script>