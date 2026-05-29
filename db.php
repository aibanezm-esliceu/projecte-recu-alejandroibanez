<?php
$host = 'db';
$user = 'recu';
$user = 'recu123';
$dbname = 'recu_db';

$conn = new msqli($db, $recu, $recu123, $recu_db);

if($conn->connect_error) {
    die("Error de conexión: ". $conn->connect_error);
}
?>