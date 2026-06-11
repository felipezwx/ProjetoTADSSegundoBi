<?php
$servername = "192.168.1.100";
$username = "felipe";
$password = "Vinicius20052008";
$dbname = "be_fit";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>