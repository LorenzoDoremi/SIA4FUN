<?php 
// qua dovrai mettere i dati del tuo database.
$username = "root";
$pass = "";
$database = "social4sia";
$host = "localhost";
$connessione = mysqli_connect($host, $username, $pass, $database);
/*
try {
    $connessione = mysqli_connect($host, $username, $pass, $database);

}
catch (Exception $e) {
    echo "qualcosa è andato storto: ". $e->getMessage();
}
*/

?>