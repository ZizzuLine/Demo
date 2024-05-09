<?php
// Include il file database.php che contiene le informazioni di connessione al database
require_once('../db/dblocale.php');

// Avvia la sessione
session_start();

if (isset($_SESSION['session_id'])) {
    header('Location: dashboard.php');
    exit;
}

// Verifica se il form è stato sottoposto
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prendi l'input dell'utente
    $username = $_POST['username'];
    $password = $_POST['password'];
echo $username;
    // Converte la password in SHA-256
    $msg = 'Converto pass in hash %s';
    $hashed_password = hash('sha256', $password);
    echo $hashed_password;

    // Prepara la query per selezionare la password dal database
    $msg = 'Inserisci username e password %s';
    $sql = "SELECT passwdhash FROM users WHERE username='$username'";
    $result = $db_config->query($sql);

    $check = $pdo->prepare($query);
    $check->bindParam(':username', $username, PDO::PARAM_STR);
    $check->execute();

    $user = $check->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        die("Errore nella query: " . $db_config->error);
        $msg = 'errore query %s';
    }

    if ($result->num_rows > 0) {
        // Utente trovato nel database, confronta le password
        $row = $result->fetch_assoc();
        $stored_password = $row['passwdhash'];

        if ($hashed_password === $stored_password) {
            // Password corretta, esegui il login
            echo "Login riuscito!";

            session_regenerate_id();
            $_SESSION['session_id'] = session_id();
            $_SESSION['session_user'] = $user['username'];
            
            header('Location: dashboard.php');
            exit;
        } else {
            // Password non corretta
            echo "Password errata.";
            $msg = 'Credenziali utente errate %s';
        }
    } else {
        // Utente non trovato nel database
        echo "Utente non trovato.";
    }
}
printf($msg, '<a href="../login.html">torna indietro</a>');

?>