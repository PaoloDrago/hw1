<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'porsche_store';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}
?>