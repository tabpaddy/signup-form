<?php
error_reporting(E_ALL);

$HOSTNAME= 'localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='signupforms';

$conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if (!$conn) {
    die(mysqli_connect_error());
}
?>
