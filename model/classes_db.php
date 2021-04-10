<?php

    function get_classes() {
        global $db;
        $query = 'SELECT * FROM classes';
        $statement = $db->prepare($query);
        $statement->execute();
        $classes = $statement->fetchAll();
        $statement->closeCursor();
        return $classes;
    }

    function get_vehicles_by_class_and_price($class_id) {
        global $db;
        $query = 'SELECT v.vehicle_id, v.year, v.model, v.price, t.type, c.class, m.make FROM vehicles v
                INNER JOIN classes c 
                ON c.class_id = v.class_id
                INNER JOIN types t
                ON v.type_id = t.type_id
                INNER JOIN makes m
                ON m.make_id = v.make_id
                WHERE c.class_id = :class_id
                ORDER BY v.price DESC';
        $statement = $db->prepare($query);
        $statement->bindValue(':class_id', $class_id);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
        
    }

    function get_vehicles_by_class_and_year($class_id) {
        global $db;
        $query = 'SELECT v.vehicle_id, v.year, v.model, v.price, t.type, c.class, m.make FROM vehicles v
                INNER JOIN classes c 
                ON c.class_id = v.class_id
                INNER JOIN types t
                ON v.type_id = t.type_id
                INNER JOIN makes m
                ON m.make_id = v.make_id
                WHERE c.class_id = :class_id
                ORDER BY v.year DESC';
        $statement = $db->prepare($query);
        $statement->bindValue(':class_id', $class_id);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles; 
    }

    function delete_class($class_id) {
        global $db;
        $query = 'DELETE FROM classes
                  WHERE class_id = :class_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':class_id', $class_id);
        $statement->execute();
        $statement->closeCursor();
    }

    function add_class($class) {
        global $db;
        $query = 'INSERT INTO classes (class)
                  VALUES (:class)';
        $statement = $db->prepare($query);
        $statement->bindValue(':class', $class);
        $statement->execute();
        $statement->closeCursor();
    }