<?php 
session_start();

require 'vendor/autoload.php';

$DB_USERNAME="root";
$DB_PASSWORD="";
$DB_NAME="anuncios";
$con = mysqli_connect('localhost', $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if (mysqli_connect_errno()) {
    printf("Erro: %s\n", mysqli_connect_error());
    exit();
}