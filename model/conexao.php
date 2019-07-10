<?php
$dsn ="mysql:host=localhost;dbname=locadora;port=3307";
$user="root";
$pass="";


try{
    $db = new PDO($dsn,$user,$pass);
}catch(PDOException $ex){
    echo "Houve uma falha na conexão! Verifique novamente!!";
    exit;
}