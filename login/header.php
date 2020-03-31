<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="de-DE">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Catch Ideas ist eine Marketingagentur aus Stade, die sich auf Online-Marketing und Social-Marketing spezialisiert hat.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Catch Ideas</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

  <body>

    <header>
      <nav>
        <a id="header-logo" href="#">
          <img src="img/catch_ideas_gold.png" width=250px alt="catch ideas logo">
        </a>
        <ul>
          <li><a href="index.php">&Uuml;ber uns</li>
          <li><a href="#">Projekte</li>
          <li><a href="#">Kontakt</li>
        </ul>
        <div>
          <?php
            if (isset($_SESSION['userId'])) {
              echo '<form action="includes/logout.inc.php" method="post">
                  <button type="submit" name="logout-submit">Ausloggen</button>
                  </form>';
            }
            else {
              echo '<form id="login-form" action="includes/login.inc.php" method="post">
                  <input type="text" name="mailuid" placeholder="Benutzername/E-mail..." required>
                  <input type="password" name="pwd" placeholder="Passwort..." required>
                  <button type="submit" name="login-submit">Einloggen</button>
                  </form>
                  <a class="signup-button" href="signup.php">Registrieren</a>';
            }
          ?>


        </div>
      </nav>
    </header>
