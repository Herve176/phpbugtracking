<?php

function collectpost($value=$_POST['post-action'])
{ try{
if($value=='register-prpoperty'){

$email=$_POST['email'];
$password=$_POST['password'];
$connection=DB::getConnection();
$query=$connection->prepare("INSERT INTO account(email,password) VALUES(?,?)");

//bind the values to the preppare statement
$query->bindParam(1,$email);
$query->bindParam(2,$password);
//execute the queries
$query->execute();

echo "Data inserted successfully";
}catch(PDOException $e){
        echo "Error: " .$e->getMessage();
}



}
}


?>