<div class="edit_vehicles_nav">
    <h3 class="edit_vehicles_nav__header">Edit/View links</h3>
    <?php 
    switch($page) {
        case 'class': ?>
           <a class="edit_vehicles_nav__link" href=".?action=list_vehicles">View Full Vehicle List</a><br>
            <a class="edit_vehicles_nav__link" href=".?action=add_vehicle">Add Vehicle</a><br>
            <a class="edit_vehicles_nav__link" href=".?action=edit_makes">View/Edit Vehicle Makes</a><br>
            <a class="edit_vehicles_nav__link" href=".?action=edit_types">View/Edit Vehicle Types</a><br>
        <?php   break; 
        case 'type': ?>
            <a class="edit_vehicles_nav__link" href=".?action=list_vehicles">View Full Vehicle List</a><br>
            <a class="edit_vehicles_nav__link" href=".?action=add_vehicle">Add Vehicle</a><br>
            <a class="edit_vehicles_nav__link" href=".?action=edit_makes">View/Edit Vehicle Makes</a><br>
            <a class="edit_vehicles_nav__link" href=".?action=edit_classes">View/Edit Vehicle Classes</a><br>
        <?php    break;
        case 'make': ?>
            <a class="edit_vehicles_nav__link" href=".?action=list_vehicles">View Full Vehicle List</a><br>
            <a class="edit_vehicles_nav__link" href=".?action=add_vehicle">Add Vehicle</a><br>
            <a class="edit_vehicles_nav__link" href=".?action=edit_types">View/Edit Vehicle Types</a><br>
            <a class="edit_vehicles_nav__link" href=".?action=edit_classes">View/Edit Vehicle Classes</a><br>
        <?php   break;
        case 'add': ?>
            <a class="edit_vehicles_nav__link" href=".?action=list_vehicles">View Full Vehicle List</a><br>
            <a class="edit_vehicles_nav__link" href=".?action=edit_types">View/Edit Vehicle Types</a><br>
            <a class="edit_vehicles_nav__link" href=".?action=edit_makes">View/Edit Vehicle Makes</a><br>
            <a class="edit_vehicles_nav__link" href=".?action=edit_classes">View/Edit Vehicle Classes</a><br>
        <?php   break;
        default: ?>
            <?php if(count($vehicles) < $count[0]) { ?>
            <a class="edit_vehicles_nav__link" href=".?action=list_vehicles">View Full Vehicle List</a><br>
            <?php } ?>
            <a class="edit_vehicles_nav__link" href=".?action=add_vehicle">Add Vehicle</a><br>
            <a class="edit_vehicles_nav__link" href=".?action=edit_makes">View/Edit Vehicle Makes</a><br>
            <a class="edit_vehicles_nav__link" href=".?action=edit_types">View/Edit Vehicle Types</a><br>
            <a class="edit_vehicles_nav__link" href=".?action=edit_classes">View/Edit Vehicle Classes</a><br>
        <?php   break;
    } ?>
</div>
</main>
<footer><hr/>&copy 2021 Zippy Used Auto</footer>
</body>
</html>