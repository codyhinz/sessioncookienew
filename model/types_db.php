<?php 

    function get_types() {
        global $db;
        $query = 'SELECT * FROM types';
        $statement = $db->prepare($query);
        $statement->execute();
        $types = $statement->fetchAll();
        $statement->closeCursor();
        return $types;
    }

    function get_vehicles_by_type_and_price($type_id) {
        global $db;
        $query = 'SELECT v.vehicle_id, v.year, v.model, v.price, t.type, c.class, m.make FROM vehicles v
                INNER JOIN classes c 
                ON c.class_id = v.class_id
                INNER JOIN types t
                ON v.type_id = t.type_id
                INNER JOIN makes m
                ON m.make_id = v.make_id
                WHERE t.type_id = :type_id
                ORDER BY v.price DESC';
        $statement = $db->prepare($query);
        $statement->bindValue(':type_id', $type_id);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
        
    }

    function get_vehicles_by_type_and_year($type_id) {
        global $db;
        $query = 'SELECT v.vehicle_id, v.year, v.model, v.price, t.type, c.class, m.make FROM vehicles v
                INNER JOIN classes c 
                ON c.class_id = v.class_id
                INNER JOIN types t
                ON v.type_id = t.type_id
                INNER JOIN makes m
                ON m.make_id = v.make_id
                WHERE t.type_id = :type_id
                ORDER BY v.year DESC';
        $statement = $db->prepare($query);
        $statement->bindValue(':type_id', $type_id);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles; 
    }

    function delete_type($type_id) {
        global $db;
        $query = 'DELETE FROM types
                  WHERE type_id = :type_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':type_id', $type_id);
        $statement->execute();
        $statement->closeCursor();
    }

    function add_type($type) {
        global $db;
        $query = 'INSERT INTO types (type)
                  VALUES (:type)';
        $statement = $db->prepare($query);
        $statement->bindValue(':type', $type);
        $statement->execute();
        $statement->closeCursor();
    }