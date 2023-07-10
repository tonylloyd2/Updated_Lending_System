<?php

$servername = 'localhost';
$dbusername = 'lloyd';
$dbpassword = '1234';
$databasename = 'lending_system';

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $databasename);

if (!$conn) {
    exit;
}
