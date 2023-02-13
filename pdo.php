<?php
require_once 'pdoconfig.php'; 
try {
    $conn = new PDO("mysql:host=$host;port=$port;charset=utf8;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";
    //foreach($conn->query('SELECT * from materia') as $fila) {
    //    print_r($fila);
    //}
    //$conn = null;
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
?>