<?php
// Informazioni di connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

// Connessione al database
$conn = new mysqli($servername, $username, $password, $database);

// Verifica della connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
?>