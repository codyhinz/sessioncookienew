<?php include('header.php'); ?>

    <h3 class="add_vehicle__header">Edit Vehicle Class</h3>
    <div class="edit_vehicle__form">
        <table class="text-center table-bordered">
            <thead>
                <tr>
                    <th>Class</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($classes as $class) : ?>
                <tr>
                    <td><?= $class['class'] ?></td>
                    <td class="edit_vehicle_table__td">
                    <form action="." method="POST">
                        <input type="hidden" name="action" value="delete_class">
                        <input type="hidden" name="class_id" value=<?= $class['class_id'] ?>>
                        <button class="btn" type="submit">❌</button>
                    </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <h4 class="text-center">
                <?php if(!$classes) { ?>
                    <br>There are no classes added yet.
                <?php } ?>
        </h4>
    </div>
    <h3 class="add_vehicle__header">Add Vehicle Class</h3>
    <form action="." method="POST">
        <input type="hidden" name="action" value="add_class">
        <div class="add_vehicle__input edit_make__input">
            <label for="add_class">Class:</label>
            <input id="add_class" type="text" name="class_name" maxlength="20" size="20" required>
            <button class="btn btn-primary add_vehicle__button" type="submit">Add Class</button>
        </div>
    </form>

<?php include('footer.php'); ?>