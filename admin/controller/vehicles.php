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
        case 'delete_vehicle':
            $page = 'default';
            $vehicle_id = filter_input(INPUT_POST, 'vehicle_id', FILTER_VALIDATE_INT);
            delete_vehicle($vehicle_id);
            $count = get_vehicle_count();
            $action = 'deleted_vehicle';
            include('controller/vehicles.php');
            break;
        default:
            $page = 'default';
            $vehicles = list_vehicles($make_id, $sort_by, $type_id, $class_id);
            include('view/vehicle_list.php');
            break;
    }

