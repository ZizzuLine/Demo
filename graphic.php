<?php


include "src/db/db_conn.php";

// Determina il tipo di filtro
$filter_type = isset($_POST['filter_type']) ? $_POST['filter_type'] : 'today';
$table = ""; // Inizializza la variabile della tabella del database
$query = "";

// Imposta la tabella del database in base all'id passato da graphic.php
if (isset($_GET['idselector']) && $_GET['idselector'] === '1') {
    $table = "temperature";
} elseif (isset($_GET['idselector']) && $_GET['idselector'] === '2') {
    $table = "humidity";
} 
elseif (isset($_GET['idselector']) && $_GET['idselector'] === '3') {
    $table = "speed";
}
elseif (isset($_GET['idselector']) && $_GET['idselector'] === '4') {
    $table = "fuel";
}
elseif (isset($_GET['idselector']) && $_GET['idselector'] === '5') {
    $table = "route";
}else {
    // Se l'id non è valido, visualizza un messaggio di errore
    echo "Invalid ID";
    exit();
}

// Crea la query SQL in base al tipo di filtro e alla tabella del database
if ($filter_type == 'today') {
    $query = "SELECT * FROM $table WHERE DATE(timestamp) = CURDATE()";
} elseif ($filter_type == '1hour') {
    $query = "SELECT * FROM $table WHERE timestamp >= DATE_SUB(NOW(), INTERVAL 1 HOUR)";
} elseif ($filter_type == 'week') {
    $query = "SELECT * FROM $table WHERE WEEK(timestamp) = WEEK(NOW()) AND YEAR(timestamp) = YEAR(NOW())";
} elseif ($filter_type == 'average') {
    $query = "SELECT ROUND(AVG(value), 2) AS average_value FROM $table";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $average_value = $row['average_value'];
    echo "<p>Average Value: $average_value</p>";
    exit();
}

$result = mysqli_query($conn, $query);

// Prepara i dati per il grafico
$timestamps = [];
$values = [];

while ($row = mysqli_fetch_assoc($result)) {
    $timestamps[] = $row['timestamp'];
    $values[] = $row['value'];
}

// Prepara i dati per il grafico
$chart_data = [
    'x' => $timestamps,
    'y' => $values,
    'type' => 'scatter',
    'mode' => 'lines+markers',
    'name' => ucfirst($table) // Utilizza il nome della tabella come nome del grafico
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualization</title>
    <link rel="stylesheet" href="css/stylesgraphic.css">
</head>
<body>
    <div class="container">
        <div class="menu">
            <form action="" method="post">
                <select name="filter_type">
                    <option value="today">Today</option>
                    <option value="1hour">Last Hour</option>
                    <option value="week">Entire Week</option>
                    <option value="average">Average Value</option>
                </select>
                <input type="submit" value="Filter">
            </form>
        </div>
        <div id="chart"></div>
    </div>

    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script>
        var chartData = <?php echo json_encode([$chart_data]); ?>;
        Plotly.newPlot('chart', chartData);
    </script>
</body>
</html>

<?php
// Chiudi la connessione al database
mysqli_close($conn);
?>
