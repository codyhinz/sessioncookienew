<?php include('header.php'); ?>

    <h3 class="add_vehicle__header">Edit Vehicle Types</h3>
    <div class="edit_vehicle__form">
        <table class="text-center table-bordered">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($types as $type) : ?>
                <tr>
                    <td><?= $type['type'] ?></td>
                    <td class="edit_vehicle_table__td">
                    <form action="." method="POST">
                        <input type="hidden" name="action" value="delete_type">
                        <input type="hidden" name="type_id" value=<?= $type['type_id'] ?>>
                        <button class="btn" type="submit">❌</button>
                    </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <h4 class="text-center">
                <?php if(!$types) { ?>
                    <br>There are no types added yet.
                <?php } ?>
        </h4>
    </div>
    <h3 class="add_vehicle__header">Add Vehicle Type</h3>
    <form action="." method="POST">
        <input type="hidden" name="action" value="add_type">
        <div class="add_vehicle__input edit_make__input">
            <label for="add_type">Type:</label>
            <input id="add_type" type="text" name="type_name" maxlength="20" size="20" required>
            <button class="btn btn-primary add_vehicle__button" type="submit">Add Type</button>
        </div>
    </form>

<?php include('footer.php'); ?>