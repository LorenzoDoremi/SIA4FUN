<html>

<head>

</head>

<body>

    <?php
    // qua dovrai mettere i dati del tuo database.
    $username = "root";
    $pass = "";
    $database = "my_sia4fun";
    $host = "https://sia4fun.altervista.org";


    try {
        $connessione = mysqli_connect($host, $username, $pass, $database);
        echo "connesso!";

    } catch (Exception $e) {
        echo "qualcosa è andato storto: " . $e->getMessage();
    }


    ?>
</body>

</html>