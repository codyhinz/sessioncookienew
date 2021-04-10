<?php


    switch($action) {
        case 'logout':
            $_SESSION = array();
            session_destroy();
            $login_message = "You have been logged out.";
            include('view/login.php');
            break;
        case 'show_login':
            include('view/login.php');
            break;
        case 'login':
            if(is_valid_admin_login($username, $password)) {
                $_SESSION['is_valid_admin'] = true;
                header('Location: .?action=list_vehicles');
            } else {
                $login_message = 'Incorrect Login Credentials Entered';
                include('view/login.php');
            }
            break;
        case 'show_register':
            $page = 'register';
            include('view/register.php');
            break;
        case 'register':
            include('util/valid_register.php');
            $errors = valid_registration($username, $password, $confirm_password);
            if ($errors) {
                $page = 'register';
                include('view/register.php');
            } else {
                try {
                    add_admin($username, $password);
                    $_SESSION['is_valid_admin'] = true;
                    header('Location: .?action=list_vehicles');
                } catch(Exception $e) {
                     $error = $e->getMessage();
                     include('view/error.php');
                }
                
            }
            break;
    }