<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Page</title>
    <style>
        /* Stile per la finestra modale */
        .popup {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .popup-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <!-- Pulsante per aprire la finestra modale -->
    <a onclick="openPopup()">Apri Popup</a>

    <!-- Contenuto della finestra modale -->
    <div id="popup" class="popup" onclick="closePopup(event)">
        <div class="popup-content">
            <span class="close" onclick="closePopup(event)">&times;</span>
            <p>Contenuto del popup</p>
        </div>
    </div>

    <script>
        // Funzione per aprire la finestra modale
        function openPopup() {
            document.getElementById("popup").style.display = "block";
        }

        // Funzione per chiudere la finestra modale
        function closePopup(event) {
            var popup = document.getElementById("popup");
            if (event.target == popup) {
                popup.style.display = "none";
            }
        }
    </script>

</body>

</html>