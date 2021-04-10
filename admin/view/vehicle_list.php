<?php include('header.php'); ?>

    <form action="." method="POST" class="sortBy__form">
        <div class="vehicle_dropdown_boxes">
        <select name="make_id" class="auto_selector">
            <option value="">View All Makes</option>
            <?php foreach ($makes as $make) : ?>
                <option value=<?= $make['make_id'] ?>><?= $make['make'] ?></option>
            <?php endforeach; ?>
        </select>
        <select name="type_id" class="auto_selector">
            <option value="">View All Types</option>
            <?php foreach ($types as $type) : ?> 
                <option value=<?= $type['type_id'] ?>><?= $type['type'] ?></option>
            <?php endforeach; ?>
        </select> 
        <select name="class_id" class="auto_selector">
            <option value="">View All Classes</option>
            <?php foreach($classes as $class) : ?>
                <option value=<?= $class['class_id'] ?>><?= $class['class'] ?></option>
            <?php endforeach; ?>
        </select>
        </div>
        <div class="sortBy text-center">
            <p class="sortBy__label">Sort by</label>
            <input class="sortBy__form_radio" type="radio" name="sort_by" id="sort_by_price" value="price" <?php if($sort_by !== 'year') {?>checked <?php } ?>>
            <label for="sort_by_price">Price</label>
            <input class="sortBy__form_radio" type="radio" name="sort_by" id="sort_by_year" value="year" <?php if($sort_by === 'year') {?>checked <?php } ?>>
            <label for="sort_by_year">Year</label>
            <button class="btn btn-primary sortBy__button" type="submit">Submit</button>
        </div>
    </form>
    <div class="table_body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">Year</th>
                <th scope="col">Make</th>
                <th scope="col">Model</th>
                <th scope="col">Type</th>
                <th scope="col">Class</th>
                <th scope="col">Price</th>
                <th scope="col">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($vehicles as $vehicle) : ?>
                <tr>
                    <td><?= $vehicle['year'] ?></td>
                    <td><?= $vehicle['make'] ?></td>
                    <td><?= $vehicle['model'] ?></td>
                    <td><?= $vehicle['type'] ?></td>
                    <td><?= $vehicle['class'] ?></td>
                    <td><?= '$'.number_format($vehicle['price'],2) ?></td>
                    <td>
                        <form action="." method="POST">
                            <input type="hidden" name="action" value="delete_vehicle">
                            <input type="hidden" name="vehicle_id" value=<?= $vehicle['vehicle_id'] ?>>
                            <button class="btn" type="Submit">❌</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <h2 class="no_items_message text-center">
        <?php 
            if(!$vehicles) {
                echo "No vehicles meet the criteria";
            }
        ?>
    </h2>
    <h4>
        <?php if($action === 'deleted_vehicle') { ?>
            Vehicle deleted from database.<br>
        <?php } ?>
    </h4>

<?php include('footer.php'); ?>