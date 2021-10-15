<?php

$dsn = 'mysql:host=localhost;dbname=lojavirtual';
$user = 'root';
$pass = '2';

try{
    $conn = new PDO($dsn,$user,$pass);
}catch(PDOException $ex ){
    echo'Erro:',$ex->getMessage();
}
