<?php
include'connection.php';

function collectpost($value)
{
        $value=$_POST['post-action'];
if ($value == 'register-property') {

    try {
        // Check if the POST value is set, otherwise use a default value
        $value = isset($_POST['post-action']) ? $_POST['post-action'] : $value;

            $email = $_POST['email'];
            $password = $_POST['password'];
            $id = '';
            $connection = DB::getConnection();
            $query = $connection->prepare("INSERT INTO account(id,email, password) VALUES (?,?,?)");

            // Bind the values to the prepare statement
            $query->bindParam(1, $email);
            $query->bindParam(2, $password);
            $query->bindParam(3,$id);

            // Execute the query
            $query->execute();

            echo "Data inserted successfully";
        }catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
    } 
    }
}



?>