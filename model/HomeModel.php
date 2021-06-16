<?php
    function createUser($data){
        try {
            $conn=openDatabaseConnection();
    
            $stmt = $conn->prepare("INSERT INTO user (`name`, adress, phone) VALUES (:name, :adress, :phone)");
    
            $stmt->bindParam(":name", $data['name']);
            $stmt->bindParam(":adress", $data['adress']);
            $stmt->bindParam(":phone", $data['phone']);
    
            // Voer de query uit
            $stmt->execute(); 
        }
        catch(PDOException $e){
    
            echo "Connection failed: " . $e->getMessage();
        }
    
        $conn = null;
    }

    function getAllUsers(){
        try {
            $conn=openDatabaseConnection();
        
            $stmt = $conn->prepare("SELECT * FROM user");

            $stmt->execute();

            $result = $stmt->fetchAll();
    
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
        $conn = null;

        return $result;
    }

    function getUser($id){
        try {
            $conn=openDatabaseConnection();
        
            $stmt = $conn->prepare("SELECT * FROM user WHERE id = :id");

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            $result = $stmt->fetch();
    
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
        $conn = null;

        return $result;
    }

    function changeUser($data){
        try {
            $conn=openDatabaseConnection();
    
            $stmt = $conn->prepare("UPDATE user
                                    SET `name` = :name,
                                        adress = :adress,
                                        phone = :phone
                                    WHERE id = :id");
    
            $stmt->bindParam(":id", $data['id']);
            $stmt->bindParam(":name", $data['name']);
            $stmt->bindParam(":adress", $data['adress']);
            $stmt->bindParam(":phone", $data['phone']);
    
            // Voer de query uit
            $stmt->execute(); 
        }
        catch(PDOException $e){
    
            echo "Connection failed: " . $e->getMessage();
        }
    
        $conn = null;
    }

    function destroyUser($id){
        try {
            $conn=openDatabaseConnection();
    
            $stmt = $conn->prepare("DELETE FROM user WHERE id = :id");
    
            $stmt->bindParam(":id", $id);
    
            // Voer de query uit
            $stmt->execute(); 
        }
        catch(PDOException $e){
    
            echo "Connection failed: " . $e->getMessage();
        }
    
        $conn = null;
    }

    function createHorse($data){
        $jumpBool = 0;
        if($data["jump"] == "Ja"){
            $jumpBool = 1;
        }
        try {
            $conn=openDatabaseConnection();
    
            $stmt = $conn->prepare("INSERT INTO horse (`name`, `type`, breed, age, jump) VALUES (:name, 'Paard', :breed, :age, $jumpBool)");
    
            $stmt->bindParam(":name", $data['name']);
            $stmt->bindParam(":breed", $data['breed']);
            $stmt->bindParam(":age", $data['age']);
    
            // Voer de query uit
            $stmt->execute(); 
        }
        catch(PDOException $e){
    
            echo "Connection failed: " . $e->getMessage();
        }
    
        $conn = null;
    }

    function createPony($data){
        
        try {
            $conn=openDatabaseConnection();
    
            $stmt = $conn->prepare("INSERT INTO horse (`name`, `type`, breed, age, wither_height) VALUES (:name, 'Pony', :breed, :age, :height)");
    
            $stmt->bindParam(":name", $data['name']);
            $stmt->bindParam(":breed", $data['breed']);
            $stmt->bindParam(":age", $data['age']);
            $stmt->bindParam(":height", $data['height']);
    
            // Voer de query uit
            $stmt->execute(); 
        }
        catch(PDOException $e){
    
            echo "Connection failed: " . $e->getMessage();
        }
    
        $conn = null;
    }

    function getAllHorses(){
        try {
            $conn=openDatabaseConnection();
        
            $stmt = $conn->prepare("SELECT * FROM horse ORDER BY `type`");

            $stmt->execute();

            $result = $stmt->fetchAll();
    
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
        $conn = null;

        return $result;
    }

    function getHorse($id){
        try {
            $conn=openDatabaseConnection();
        
            $stmt = $conn->prepare("SELECT * FROM horse WHERE id = :id");

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            $result = $stmt->fetch();
    
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
        $conn = null;

        return $result;
    }

    function destroyHorse($id){
        try {
            $conn=openDatabaseConnection();
    
            $stmt = $conn->prepare("DELETE FROM horse WHERE id = :id");
    
            $stmt->bindParam(":id", $id);
    
            // Voer de query uit
            $stmt->execute(); 
        }
        catch(PDOException $e){
    
            echo "Connection failed: " . $e->getMessage();
        }
    
        $conn = null;
    }

    function changeHorse($data){
        $jumpBool = 0;
        if($data["jump"] == "Ja"){
            $jumpBool = 1;
        }

        if($data['height'] == ""){
            $data['height'] = NULL;
        }
        try {
            $conn=openDatabaseConnection();
    
            $stmt = $conn->prepare("UPDATE horse
                                    SET `name` = :name,
                                        breed = :breed,
                                        age = :age,
                                        jump = $jumpBool,
                                        wither_height = :height
                                    WHERE id = :id");
    
            $stmt->bindParam(":id", $data['id']);
            $stmt->bindParam(":name", $data['name']);
            $stmt->bindParam(":breed", $data['breed']);
            $stmt->bindParam(":age", $data['age']);
            $stmt->bindParam(":height", $data['height']);
    
            // Voer de query uit
            $stmt->execute(); 
        }
        catch(PDOException $e){
    
            echo "Connection failed: " . $e->getMessage();
        }
    
        $conn = null;
    }

    function createReservation($data){
        try {
            $conn=openDatabaseConnection();
    
            $stmt = $conn->prepare("INSERT INTO reservation (`user_id`, horse_id, `date`, start_time, duration, cost) 
                                    VALUES (:user_id, :horse_id, :date, :start_time, :duration, :cost)");
    
            $stmt->bindParam(":user_id", $data['user']);
            $stmt->bindParam(":horse_id", $data['horse']);
            $stmt->bindParam(":date", $data['date']);
            $stmt->bindParam(":start_time", $data['start_time']);
            $stmt->bindParam(":duration", $data['duration']);
            $stmt->bindParam(":cost", $data['cost']);
    
            // Voer de query uit
            $stmt->execute(); 
        }
        catch(PDOException $e){
    
            echo "Connection failed: " . $e->getMessage();
        }
    
        $conn = null;
    }

    function trim_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>