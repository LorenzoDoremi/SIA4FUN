<style>
    
</style>
<html id="html">
    <head>
        <title>Post</title>
        <?php require ("head.html")?>
    </head>
        <body>
        <div class="container-fluid"> 
        <?php require("navigazione.html"); ?>   
        <div class="container-fluid" id="content">
        <div>
            <form action="inseriscipost.php" method="POST">
                <label for="idutente">id_utente</label>
                <input type="text" name="id_utente" value="" id="idutente" />

                <label for="contenuto">dicci cosa pensi:</label>
                <input type="text" name="contenuto" value="" id="contenuto" />

                <label for="allegato">allegato</label>
                <input type="text" name="allegato" value="" id="allegato" />

                <input type="submit" value="INVIA">
            </form>
        </div>
    </body>
</html>
