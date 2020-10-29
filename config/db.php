<?php
//Enable to use headers
ob_start();

//Set sessions
if(!isset($_SESSION)){
    session_start();
}

//Database Connection Variables
$DB_SERVER = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'phpauth';

$connection = mysqli_connect($DB_SERVER,$DB_USER,$DB_PASS,$DB_NAME) or die('Database connection not established');
