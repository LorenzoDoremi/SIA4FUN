<?php
require("connessione.php");




$prezzoMax = 200;
$prezzoMin = 0;
// PREPARO LA MIA QUERY. QUESTA TECNICA PREVIENE L'HACKING BASE!
$query = $connessione->prepare('SELECT post.contenuto,utente.nome,utente.id FROM post,utente WHERE utente.nome=\'alessandro\' AND post.id=utente.id');
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


// creo una table. le class sono quelle di Bootstrap 
echo "<table class=\"table table-dark table-striped table-bordered\">";
// creo la prima riga giusto per mettere i nomi delle colonna
echo "<tr>";
    echo "<td> meme </td>";
    echo "<td> nome</td>";
    echo "<td> id </td>";
echo "</tr>";


// inersico i dati della query che ho fatto al database. 
foreach ($dati as $row) {
    // creo una row della tabella per ogni record. 
    echo "<tr>";
        echo "<td>".$row["contenuto"]."</td>";
        echo "<td>".$row["nome"]."</td>";
        echo "<td>".$row["id"]."</td>";
    echo "</tr>";
   
}
echo "</table>";
?>