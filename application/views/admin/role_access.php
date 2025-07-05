<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Role Access: <?= $role['role'] ?></h4>
        <?= $this->session->flashdata('message'); ?>
        <div class="table-responsive card">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Menu</th>
                        <th>Access</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($menu as $i => $m): ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= $m['menu'] ?></td>
                            <td class="text-center">
                                <div class="form-check">
                                    <input type="checkbox"
                                        class="role-access form-check-input"
                                        data-role="<?= $role['id']; ?>"
                                        data-menu="<?= $m['id']; ?>"
                                        <?= (isset($access_menu_ids) && in_array($m['id'], $access_menu_ids)) ? 'checked' : '' ?>>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <a href="<?= base_url('admin/role') ?>" class="btn btn-secondary mt-3">Back to Role List</a>
    </div>
</div>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('.role-access').on('change', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeAccess'); ?>",
            type: "POST",
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId
            }
        });
    });
</script>