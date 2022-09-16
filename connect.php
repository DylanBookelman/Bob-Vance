<?php
$servername = "localhost";
$username = "bit_academy";
$password = "bit_academy";
try{
$conn = new PDO("mysql:host=$servername;dbname=deepdive",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "connected to server";
} catch(PDOException $e){
    echo $e->getMessage();
}
?>