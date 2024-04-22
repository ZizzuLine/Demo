<?php
function updateDatabaseFromThingSpeak($channel_id, $api_key, $field_to_table_mapping) {
    // cURL-init
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_PROXY, ""); // Bypass proxy

    // Esegui la richiesta per ogni campo
    foreach ($field_to_table_mapping as $field => $table) {
        //create url post thingspeak
        $url = "https://api.thingspeak.com/channels/$channel_id/fields/$field/last.json?api_key=$api_key";

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $json_data = curl_exec($ch);

        // check if there is an error by the connection
        if (curl_errno($ch)) {
            //echo 'cURL-Error: ' . curl_error($ch);
        } else {
            //Convert json data into php array
            $data = json_decode($json_data, true);

            // check if field exists in data
            if (isset($data[$field])) {
                $value = $data[$field];
                //echo "<p>$field: $value</p>";

                // Verifica la variazione e invia al database solo se è presente una variazione
                $conn = mysqli_connect("localhost", "root", "", "zizzuline");
                if (!$conn) {
                    //echo "Connection failed!";
                } else {
                    // Controlla se il valore attuale è diverso dall'ultimo valore nel database
                    if (!empty($table)) {
                        $check_query = "SELECT value FROM $table ORDER BY id DESC LIMIT 1";
                        $check_result = mysqli_query($conn, $check_query);

                        if (mysqli_num_rows($check_result) > 0) {
                            $row = mysqli_fetch_assoc($check_result);
                            $last_value = $row['value'];
                            if ($value != $last_value) {
                                // Ottieni l'ID più alto presente nella tabella e incrementalo di uno
                                $check_id_query = "SELECT MAX(id) AS max_id FROM $table";
                                $check_id_result = mysqli_query($conn, $check_id_query);
                                $row_id = mysqli_fetch_assoc($check_id_result);
                                $next_id = $row_id['max_id'] + 1;

                                // time and date of last modify on thingspeak
                                $timestamp = date("Y-m-d H:i:s");

                                // Inserisci il nuovo record con l'ID incrementato
                                $sql = "INSERT INTO $table (id, timestamp, value) VALUES ('$next_id', '$timestamp', '$value')";
                                if (mysqli_query($conn, $sql)) {
                                    //echo "Record inserted successfully";
                                } else {
                                    //echo "Error inserting record: " . mysqli_error($conn);
                                }
                            } else {
                                //echo "No variance in value, not updating database.";
                            }
                        } else {
                            // time and date of last modify on thingspeak
                            $timestamp = date("Y-m-d H:i:s");

                            // Inserisci il nuovo record con l'ID incrementato
                            $sql = "INSERT INTO $table (id, timestamp, value) VALUES ('1', '$timestamp', '$value')";
                            if (mysqli_query($conn, $sql)) {
                                //echo "Record inserted successfully";
                            } else {
                                //echo "Error inserting record: " . mysqli_error($conn);
                            }
                        }
                    } else {
                        //echo "No table specified for field $field.";
                    }

                    mysqli_close($conn);
                }
            } else {
                //echo "Field $field not present in ThingSpeak data.";
            }
        }
    }

    curl_close($ch);
}

// Utilizzo della funzione
$channel_id = "2497042"; // id public channel
$api_key = "H6Y216Q86ERLFYI1"; // api key write

// Definisci la mappatura dei campi ThingSpeak alle rispettive tabelle nel database
$field_to_table_mapping = array(
    'field1' => 'temperature',
    'field2' => 'humidity',
    'field3' => 'speed',
    'field4' => 'fuel',
    'field5' => '',
    'field6' => '',
    'field7' => '',
    'field8' => '',
);

updateDatabaseFromThingSpeak($channel_id, $api_key, $field_to_table_mapping);
?>
