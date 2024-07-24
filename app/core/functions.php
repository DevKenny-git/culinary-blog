<?php
// require_once 'connection.php';
create_tables();

function create_tables() {
    $string = "mysql:host=localhost;";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
   
   
    $con = new PDO($string, DBUSER, DBPASS, $options);

    $query = "create database if not exists ". DBNAME;
    $stm = $con->prepare($query);
    $stm->execute();
}