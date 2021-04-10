<?php
    
    require('../model/database.php');
    require('../model/vehicles_db.php');
    require('../model/makes_db.php');
    require('../model/types_db.php');
    require('../model/classes_db.php');
    require('../model/admin_db.php');

    //password parameters
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $confirm_password = filter_input(INPUT_POST, 'confirm_password', FILTER_SANITIZE_STRING);

    $make_id = filter_input(INPUT_POST, 'make_id', FILTER_VALIDATE_INT);
    $type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
    $class_id = filter_input(INPUT_POST, 'class_id', FILTER_VALIDATE_INT);
    $sort_by = filter_input(INPUT_POST, 'sort_by', FILTER_SANITIZE_STRING);
    $makes = get_makes();
    $types = get_types();
    $classes = get_classes();
    $count = get_vehicle_count();

    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
    if(!$action) {
        $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
        if(!$action) {
            $action = 'show_login';
        }
    }

    switch($action) {
        case 'login':
        case 'show_login':
        case 'register':
        case 'show_register':
        case 'logout':
            include('controller/admin.php');
            break;
        case 'edit_classes':
        case 'add_class':
        case 'delete_class':
            include('controller/classes.php');
            break;
        case 'edit_types':
        case 'add_type':
        case 'delete_type':
            include('controller/types.php');
            break;
        case 'add_make':
        case 'edit_makes':
        case 'delete_make':
            include('controller/makes.php');
            break;
        case 'add_vehicle':
        case 'added_vehicle':
        case 'delete_vehicle':
            include('controller/vehicles.php');
            break;
        default:
            include('controller/vehicles.php');
            break;
    }