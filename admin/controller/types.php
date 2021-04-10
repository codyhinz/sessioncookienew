<?php 

    $page = 'type';

    switch($action) {
        case 'add_type':
            $type = filter_input(INPUT_POST, 'type_name', FILTER_SANITIZE_STRING);
            add_type($type);
            $types = get_types();
            include('view/types_list.php');
            break;
        case 'delete_type':
            delete_type($type_id);
            $types = get_types();
            include('view/types_list.php');
            break;
        case 'edit_types':
            $types = get_types();
            include('view/types_list.php');
            break;
        default:
            $vehicles = list_vehicles($make_id, $sort_by, $type_id, $class_id);
            include('view/vehicle_list.php');
            break;
}