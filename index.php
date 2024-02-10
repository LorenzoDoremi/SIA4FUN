<style>
      .post{
        position: relative;
        max-width: 100%;
        width: 400px;
     
        border: 2px solid black;
        border-radius: 5px 5px 5px 5px;
        margin: 5px; 
    }
    .box p{
        display: inline-block;
        border: 2px solid red;
    }
    .post-list {
        padding-top: 100px;
    }
    #add{
        padding-top: 100px;
        position: absolute;
        right: 0;
        color: white;
    }
    button{
        background-color:rgb(70,0,218);
        color: white;
        border: 2px solid white;
        border-radius: 12px !important; 
        padding-right:10px;
    }
    button:hover{
        background-color:white;
        color: rgb(70,0,218);
        border: 2px solid rgb(70,0,218);
        border-radius: 12px;
    }
</style>
<!doctype html>
<html id="html" lang="en">
  <head>
  
    <title>Timerr</title>
    <?php require("head.html"); ?>

</head>
  <body>

  <div class="container-fluid"> 
    <?php require("navigazione.html"); ?>   
    <div class="container-fluid" id="content">
    </div>
      <div id="add">
            <button type="button"><a href="aggiungipost.php">AGGIUNGI POST</a></button>
        </div>
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


          echo "<div class=\"post-list\">";
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
      
   

</div>

</body>
<script src="static/bootstrap.bundle.min.js"></script>
</html>
