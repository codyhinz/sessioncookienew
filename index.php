<?php

    $lifetime = 3600;
    $path = '/';
    session_set_cookie_params($lifetime, $path);
    session_start();

    require('model/database.php');
    require('model/vehicles_db.php');
    require('model/makes_db.php');
    require('model/types_db.php');
    require('model/classes_db.php');

    $make_id = filter_input(INPUT_POST, 'make_id', FILTER_VALIDATE_INT);
    $type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
    $class_id = filter_input(INPUT_POST, 'class_id', FILTER_VALIDATE_INT);
    $sort_by = filter_input(INPUT_POST, 'sort_by', FILTER_SANITIZE_STRING);
    $makes = get_makes();
    $types = get_types();
    $classes = get_classes();

    

    $vehicles = list_vehicles($make_id, $sort_by, $type_id, $class_id);
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

    switch($action) {
        case 'register':
            $first_name = filter_input(INPUT_GET, 'first_name', FILTER_SANITIZE_STRING);
            if(isset($first_name)) {
                $_SESSION['userid'] = $first_name;
            }
            include('view/register.php');
            break;
        case 'logout':
            $first_name = $_SESSION['userid'];
            unset($_SESSION['userid']);
            $_SESSION = array();
            session_destroy();
            $name = session_name();
            $expire = time() - 1;
            $params = session_get_cookie_params();
            $path = $params['path'];
            $domain = $params['domain'];
            $secure = $params['secure'];
            $httponly = $params['httponly'];
            setcookie($name, '', $expire, $path, $domain, $secure, $httponly);
            include('view/logout.php');
            break;
        default:
            include('view/vehicle_list.php');
            break;
    }