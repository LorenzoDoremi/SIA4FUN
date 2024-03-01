<?php

require("connessione.php");


    
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["nome"]; 
    $surname =  $_POST["cognome"];      
    $email = $_POST["e-mail"]; 
    $password = $_POST["password"]; 
    $nickname = $_POST["nickname"]; 
    
    // seleziona un utente con stessa mail e password
    $query = $connessione->prepare('SELECT utente.nome, utente.cognome, utente.nickname FROM utente WHERE utente.email=?');
    // sostituisco i punti di domanda con la variabile q
    // dd è il tipo. d è double. s si usa per parole. i numeri interi. 
    $query->bind_param("s", $email);
    $query->execute();
    $risultato = $query->get_result();
    // memorizzo i miei dati per poterli riutilizzare in futuro
    $dati = array();
    while ($row = mysqli_fetch_assoc($risultato)) {
        $dati[]= $row;
    }
    // se esiste c'è un problema. altrimenti, insert nuovo utente. 
    if (count($dati)>0){
        echo "utente già esistente";
        echo "<a href=\"signup.html\"> torna alla registrazione </a>";
    }
    else {
        
        $query = $connessione->prepare('INSERT INTO utente (nickname, nome,cognome,email,password) VALUES (?,?,?,?,?)');
        $query->bind_param("sssss",$nickname, $name,$surname,$email, $password);
        $query->execute();

        echo "registrazione avvenuta con successo!";
        echo "<a href=\"signup.html\"> divertiti con Timerr! </a>";

    }
    


    //
   
    


}	
    
?>



