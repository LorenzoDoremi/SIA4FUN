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
    top: 200px
  }
  #login label{
    font-size:20px;
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
      <form action="registrazione.php" method="post">
        <label for="HTML">Nickname</label><br>
        <input type="text" value="" name="nickname"><br><br>
        <label for="html">Name</label><br>
        <input type="text" value="" name="nome"><br><br>
        <label for="html">Surname</label><br>
        <input type="text" value="" name="cognome"><br><br>
        <label for="html">E-Mail</label><br>
        <input type="email" value="" name="e-mail"><br><br>
        <label for="html">Password</label><br>
        <input type="password" value="" name="password"><br><br>
        <input type="submit">
      </form>
    </div>

</body>
<?php require("footer.html") ?>
</html>
<?php require("registrazione.php") ?>

