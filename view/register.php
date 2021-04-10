<?php include('header.php');

    if (isset($_SESSION['userid'])) { ?>
        <h2>Thank you for registering, <?= $_SESSION['userid'] ?>!</h2>
        <p><a href=".?action=list_vehicles">Click here</a> to view our vehicle list.</p>
        <?php } 
    else { ?>
    <form action="." method="GET" class="register_vehicle__form">
        <input type="hidden" name="action" value="register">
        <div class="register_vehicle__input">
            <label class="register__label" for="register_fName">Please enter your first name:</label>
            <br><input type="text" id="register_fName" name="first_name" required>
        </div>
        <button class="register_vehicle__button btn btn-primary" type="submit">Register</Register>
    </form>
    <?php } ?>

<?php include('footer.php'); ?>