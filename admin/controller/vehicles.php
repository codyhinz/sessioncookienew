<?php

    $page = 'add';

    switch($action) {
        case 'add_vehicle':
            include('view/add_vehicle.php');
            break;
        case 'added_vehicle':
            $year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);
            $model = filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING);
            $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
            add_vehicle($make_id, $type_id, $class_id, $year, $model, $price);
            $count = get_vehicle_count();
            include('view/add_vehicle.php');
            break;
        default:
            $page = 'default';
            $vehicles = list_vehicles($make_id, $sort_by, $type_id, $class_id);
            include('view/vehicle_list.php');
            break;
}

