<?php 

    $dsn = 'mysql:host=vkh7buea61avxg07.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=gwgpig7pseory1ab';
    $username = 'gv3eo24tco8fdz96';
    $password = 'imh9hkgu5dlkscce';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch(PDOException $e) {
        echo $e;
    }

        try {
            $db = new PDO($dsn, $username, $password);
        } catch(PDOException $e) {
            echo $e;
        }