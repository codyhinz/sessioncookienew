<?php 

    $page = 'class';

    switch($action) {
        case 'add_class':
            $class = filter_input(INPUT_POST, 'class_name', FILTER_SANITIZE_STRING);
            add_class($class);
            $classes = get_classes();
            include('view/class_list.php');
            break;
        case 'delete_class':
            delete_class($class_id);
            $classes = get_classes();
            include('view/class_list.php');
            break;
        case 'edit_classes':
            $classes = get_classes();
            include('view/class_list.php');
            break;
        default:
            $vehicles = list_vehicles($make_id, $sort_by, $type_id, $class_id);
            include('view/vehicle_list.php');
            break;
}