<?php
    include('header.php'); ?>

    <h3 class="register_header">Register a new admin user</h3>

    <?php if(isset($errors)) { ?>
        <ul>
        <?php foreach ($errors as $error) : ?>
            <li class="register_error_message"><?= $error ?></li>
            <?php endforeach; ?>
        </ul> 
    <?php } ?>
    
    <form action="." method="POST" class="edit_vehicle__form">
        <input type="hidden" name="action" value="register">
        <div class="add_vehicle__input">
            <label for="username">Username:</label>
            <input id="username" type="text" name="username" required>
        </div>
        <div class="add_vehicle__input">
            <label for="password">Password:</label>
            <input id="password" type="password" name="password" required>
        </div>
        <div class="add_vehicle__input">
            <label for="confirm_password">Confirm password:</label>
            <input id="confirm_password" type="password" name="confirm_password" required>
        </div>
        <button class="btn btn-primary add_vehicle__button" type="submit">Register</button>
    </form>

    <?php include('footer.php');