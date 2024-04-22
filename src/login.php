<?php
// Include il file database.php che contiene le informazioni di connessione al database
require_once('db/database.php');

// Avvia la sessione
session_start();


// Verifica se il form è stato sottoposto
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prendi l'input dell'utente
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Converte la password in SHA-256
    $hashed_password = hash('sha256', $password);
    echo $hashed_password;

    // Prepara la query per selezionare la password dal database
    $sql = "SELECT passwdhash FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if (!$result) {
        die("Errore nella query: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        // Utente trovato nel database, confronta le password
        $row = $result->fetch_assoc();
        $stored_password = $row['passwdhash'];

        if ($hashed_password === $stored_password) {
            // Password corretta, esegui il login
            echo "Login riuscito!";
        } else {
            // Password non corretta
            echo "Password errata.";
        }
    } else {
        // Utente non trovato nel database
        echo "Utente non trovato.";
    }
}
?>