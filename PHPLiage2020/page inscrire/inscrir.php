<!DOCTYPE html>
<html>
    <head>
     <title>page inscrire</title>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
    <form action="action_page.php" style="border:1px solid #ccc">

    <div class="container">
    <h1>S'inscrire</h1>
    <p>pour test votre niveau de culture generale.</p>
    <hr>

    <label for="login"><b>Login</b></label>
    <input type="text" placeholder="Enter Login" name="login" required>

    <label for="password"><b>password</b></label>
    <input type="text" placeholder="Enter password" name="password" required>

    <label for="Nom"><b>Nom</b></label>
    <input type="text" placeholder="Enter Nom" name="Nom" required>

    <label for="psw"><b>Prenom</b></label>
    <input type="password" placeholder="Enter Prenom" name="prenom" required>

    <label for="psw-confirmet"><b> confirme Password</b></label>
    <input type="password" placeholder="confirme Password" name="psw-repeat" required>

    <div class="clearfix">
      <button type="button" class="cancelbtn">creer compte</button>
      <button type="submit" class="signupbtn">choisir un fichier</button>
    </div>
  </div>
</form>
