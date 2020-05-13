<!DOCTYPE html>
<html>
    <head>
     <title>page joueur</title>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
    <form action="action_page.php" method="post">
  
   <div class="container" >
    <label for="login"><b>Login From</b></label>
    <input type="text" placeholder="login" name="login" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Connexion</button>
   
  </div>

  <div class="container " style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn"></button>
    <span class="psw"> <a href="#">S'incrire pour jouer</a></span>
  </div>
      </form>
        </div>
    </body>
</html>