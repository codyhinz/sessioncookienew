<?php 

    function get_makes() {
        global $db;
        $query = 'SELECT * FROM makes';
        $statement = $db->prepare($query);
        $statement->execute();
        $makes = $statement->fetchAll();
        $statement->closeCursor();
        return $makes;
    }

    function get_vehicles_by_make_and_price($make_id) {
        global $db;
        $query = 'SELECT v.vehicle_id, v.year, v.model, v.price, t.type, c.class, m.make FROM vehicles v
                INNER JOIN classes c 
                ON c.class_id = v.class_id
                INNER JOIN types t
                ON v.type_id = t.type_id
                INNER JOIN makes m
                ON m.make_id = v.make_id
                WHERE m.make_id = :make_id
                ORDER BY v.price DESC';
        $statement = $db->prepare($query);
        $statement->bindValue(':make_id', $make_id);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
        
    }

    function get_vehicles_by_make_and_year($make_id) {
        global $db;
        $query = 'SELECT v.vehicle_id, v.year, v.model, v.price, t.type, c.class, m.make FROM vehicles v
                INNER JOIN classes c 
                ON c.class_id = v.class_id
                INNER JOIN types t
                ON v.type_id = t.type_id
                INNER JOIN makes m
                ON m.make_id = v.make_id
                WHERE m.make_id = :make_id
                ORDER BY v.year DESC';
        $statement = $db->prepare($query);
        $statement->bindValue(':make_id', $make_id);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles; 
    }

    function delete_make($make_id) {
        global $db;
        $query = 'DELETE FROM makes
                  WHERE make_id = :make_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':make_id', $make_id);
        $statement->execute();
        $statement->closeCursor();
    }

    function add_make($make) {
        global $db;
        $query = 'INSERT INTO makes (make)
                  VALUES (:make)';
        $statement = $db->prepare($query);
        $statement->bindValue(':make', $make);
        $statement->execute();
        $statement->closeCursor();
    }