<?php
include'connection.php';


        $value=$_POST['post-action'];
if ($value == 'register-property') {

    try {
        // Check if the POST value is set, otherwise use a default value
        $id = '';
        $email = $_POST['email'];
        $password = $_POST['password'];

            $connection = DB::getConnection();
            $query = $connection->prepare("INSERT INTO account (id,email, password) VALUES (?,?,?)");

            // Bind the values to the prepare statement
            $query->bindParam(1,$id);
            $query->bindParam(2, $email);
            $query->bindParam(3, $password);

            // Execute the query
            $query->execute();

            echo "Data inserted successfully";
        }catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
    } 
    }




?>