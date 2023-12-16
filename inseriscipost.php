<?php
require("connessione.php");



$id = $_POST["id_utente"];
$contenuto = $_POST["contenuto"];
$allegato = $_POST["allegato"];


// PREPARO LA MIA QUERY. QUESTA TECNICA PREVIENE L'HACKING BASE!
$query = $connessione->prepare("INSERT INTO post (idutente,contenuto,allegato,numerodilike)
VALUES (?, ?,?,'0')");
// sostituisco i punti di domanda con la variabile q
// dd è il tipo. d è double. s si usa per parole. i numeri interi. 
$query->bind_param("dss",$id,$contenuto,$allegato);
$query->execute();
