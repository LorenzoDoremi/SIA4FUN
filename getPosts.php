<style>
    .post{
        position: relative;
       
        border: 2px solid rgb(240,240,240);
        border-radius: 5px 5px 5px 5px;
        padding: 20px;
        margin: 20px; 
    }
    .box p{
        display: inline-block;
        background: rgb(240,240,240);
        border: 2px solid rgb(230,230,230);
        padding: 20px;
        border-radius: 5px;
    }

</style>
<?php
require("connessione.php");

$prezzoMax = 200;
$prezzoMin = 0;
// PREPARO LA MIA QUERY. QUESTA TECNICA PREVIENE L'HACKING BASE!
$query = $connessione->prepare('SELECT post.contenuto,utente.nome,utente.id FROM post,utente WHERE post.idutente=utente.id');
// sostituisco i punti di domanda con la variabile q
// dd è il tipo. d è double. s si usa per parole. i numeri interi. 
// $query->bind_param("dd", $prezzoMin, $prezzoMax);
$query->execute();
$risultato = $query->get_result();

// memorizzo i miei dati per poterli riutilizzare in futuro
$dati = array();
while ($row = mysqli_fetch_assoc($risultato)) {
    $dati[]= $row;
}


// inersico i dati della query che ho fatto al database. 
foreach ($dati as $row) {

    
echo "<div class=\"post\"> ";
echo      "<img src=\"static/\" alt=\"\"> </img>";
echo      "<p>".$row["nome"]."</p>";
echo      "<div class=\"descrizione\">";
echo           "<p>".$row["contenuto"]."</p>";
echo      "</div>";
echo      "<div class=\"box\">";
echo           "<p>like</p> <p>commenti</p> ";
echo      "</div>";
echo "</div>";
   
}

?>