<?php 

    $page = 'make';

    switch($action) {
        case 'add_make':
            $make = filter_input(INPUT_POST, 'make_name', FILTER_SANITIZE_STRING);
            add_make($make);
            $makes = get_makes();
            include('view/makes_list.php');
            break;
        case 'delete_make':
            delete_make($make_id);
            $makes = get_makes();
            include('view/makes_list.php');
            break;
        case 'edit_makes':
            $makes = get_makes();
            include('view/makes_list.php');
            break;
        default:
            $vehicles = list_vehicles($make_id, $sort_by, $type_id, $class_id);
            include('view/vehicle_list.php');
            break;
}