<?php
require("connessione.php");



$id = $_POST["id_utente"];
echo "<br>";
$contenuto = $_POST["contenuto"];
echo "<br>";
$allegato = $_POST["allegato"];
echo "<br>";


// PREPARO LA MIA QUERY. QUESTA TECNICA PREVIENE L'HACKING BASE!
$query = $connessione->prepare("INSERT INTO post (contenuto,allegato,numerodilike)
VALUES (?,?,'0')");
// sostituisco i punti di domanda con la variabile q
// dd è il tipo. d è double. s si usa per parole. i numeri interi. 
$query->bind_param("ss",$contenuto,$allegato);
$query->execute();


header("location: /timerr/index.php")
?>