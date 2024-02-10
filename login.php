<style>
  #login form {
    text-align: center;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    position: relative;
    left: 750px;
    top: 300px
  }
  #html[data-bs-theme="dark"] #login form{
  background-color: rgb(33,37,41);
}
  h1 {
    color: #333;
  }

 .l842387 {
    display: block;
    margin-top: 10px;
  }

  input[type="text"], input[type="password"] {
    width: 90%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 3px;
  }

  input[type="submit"] {
    background-color: rgb(70,0,218);
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #000000 ;
  }
  
</style>
<!doctype html >
<html lang="en" id="html">
  <head>
  
    <title>Login</title>
    <?php require("head.html"); ?>

</head>
  <body>
    <?php require("navigazione.html"); ?>    
    
    <div id="login">
      <form action="verifica.php" method="post">
        <h1>Accesso</h1>
        <label class="l842387" for="username">Nome utente:</label>
        <input type="text" id="username" name="username" required>
        <label class="l842387" for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input  type="submit" value="Accedi" href="">
      </form>
    </div>

</body>
<?php require("footer.html") ?>
</html>
