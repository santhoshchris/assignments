<?php 

//Opens a connection to the MySQL database
//Shared between all the PHP files in our application

//This is for security, so they are never publicly visable

$user = getenv ('DB_USER'); 
$pass = getenv ('DB PASS');
$data_source = getenv('DATA_SOURCE');

$data_source = 'mysql:host=localhost;dbname=chri0163';

//PDO: PHP Data Objects
//Allows us to connect to many different kinds of databases

$db = new PDO($data_source, $user, $pass);

//force the connection to communicate in UTF-8
//and support many human languages

$db->exec('SET NAMES utf8');

