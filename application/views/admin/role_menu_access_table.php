<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Menu</th>
            <th>Access</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($menus as $i => $menu): ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $menu['menu'] ?></td>
                <td class="text-center">
                    <input type="checkbox" class="form-check-input access-checkbox" data-menu-id="<?= $menu['id'] ?>" data-role-id="<?= $role_id ?>" <?= in_array($menu['id'], $access_menu_ids) ? 'checked' : '' ?> />
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>