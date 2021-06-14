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

    function trim_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>