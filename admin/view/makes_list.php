<?php include('header.php'); ?>

    <h3 class="add_vehicle__header">Edit Vehicle Makes</h3>
    <div class="edit_vehicle__form">
        <table class="text-center table-bordered">
            <thead>
                <tr>
                    <th>Make</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($makes as $make) : ?>
                <tr>
                    <td><?= $make['make'] ?></td>
                    <td class="edit_vehicle_table__td">
                    <form action="." method="POST">
                        <input type="hidden" name="action" value="delete_make">
                        <input type="hidden" name="make_id" value=<?= $make['make_id'] ?>>
                        <button class="btn" type="submit">❌</button>
                    </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <h4 class="text-center">
                <?php if(!$makes) { ?>
                    <br>There are no makes added yet.
                <?php } ?>
        </h4>
    </div>
    <h3 class="add_vehicle__header">Add Vehicle Make</h3>
    <form action="." method="POST">
        <input type="hidden" name="action" value="add_make">
        <div class="add_vehicle__input edit_make__input">
            <label for="add_make">Make:</label>
            <input id="add_make" type="text" name="make_name" maxlength="20" size="20" required>
            <button class="btn btn-primary add_vehicle__button" type="submit">Add Make</button>
        </div>
    </form>

<?php include('footer.php'); ?>