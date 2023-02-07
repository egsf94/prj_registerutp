<?php
try{
    $conexion = new PDO('mysql:host=192.168.0.8;dbname=dbregutp','conec','Base2023$');
    echo "Conexion OK";
}catch(PDOExcepction $e){
    echo "Error: " . $e->getMessage();
}

?>