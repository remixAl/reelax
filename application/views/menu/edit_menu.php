<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <button type="button" class="float-end btn btn-warning">
            <span class="icon-base fa-solid fa-arrow-left icon-sm me-2"></span>Kembali
        </button>
        <h4 class="fw-bold py-3 mb-4"><?= $title ?></h4>
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Menu</h5>
                        <form action="<?= base_url('menu/editMenu/' . $menu['id']) ?>" method="post">
                            <div class="mb-3">
                                <label for="menu" class="form-label">Menu Name</label>
                                <input type="text" class="form-control" id="menu" name="menu" value="<?= $menu['menu'] ?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Menu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>