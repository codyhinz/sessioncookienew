<?php 

    $dsn = 'mysql:host=hwr4wkxs079mtb19.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=vifmi5ekcwb44w9l';
    $username = 'm2hdc19rf2wturb7';
    $password = 'rkxk5ubohcqjuvfz';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }