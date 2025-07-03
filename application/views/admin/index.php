<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><?= $title ?></h4>
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Welcome <span class="fw-bolder"><?= $user['username']; ?></span> to the Dashboard</h5>
                        <p class="card-text">This is your dashboard where you can manage your application.</p>
                        <p class="card-text">Use the navigation menu to access different sections.</p>
                        <p class="card-text">For more information, visit the <a href="<?= base_url('documentation') ?>">documentation</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->