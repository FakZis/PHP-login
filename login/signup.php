<?php
  require "header.php";
?>

  <main>
    <div class="wrapper-main">
      <section class="section-default">
        <h1>Registrieren</h1>
        <?php
          if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
              echo '<p class="signuperror">F&uuml;llen Sie alle Felder aus!</p>';
            }
            else if ($_GET['error'] == "invalidmailuid") {
              echo '<p class="signuperror">Ung&uuml;litger Benutzername und E-mail-Adresse!</p>';
            }
            else if ($_GET['error'] == "invalidmuid") {
              echo '<p class="signuperror">Ung&uuml;ltiger Benutzername!</p>';
            }
            else if ($_GET['error'] == "invalidmail") {
              echo '<p class="signuperror">Ungülitge E-mail-Adresse!</p>';
            }
            else if ($_GET['error'] == "passwordcheck") {
              echo '<p class="signuperror">Die Passw&ouml;rter stimmen nicht &uuml;berein!</p>';
            }
            else if ($_GET['error'] == "usertaken") {
              echo '<p class="signuperror">Diesen Benutzernamen gibt es schon!</p>';
            }
          }
          else if (isset($_GET['success'])) {
              if ($_GET['signup'] == "success") {
                echo '<p class="signupsuccess">Sie sind erfolgreich registriert!</p>';
              }
          }
        ?>
        <form action="includes/signup.inc.php" method="post">
          <input type="text" name="uid" placeholder="Benutzername" required>
          <input type="text" name="mail" placeholder="E-mail" required>
          <input type="password" name="pwd" placeholder="Passwort" required>
          <input type="password" name="pwd-repeat" placeholder="Passwort wiederholen" required>
          <button type="submit" name="signup-submit">Registrieren</button>
        </form>
      </section>
    </div>
  </main>

<?php
  require "footer.php";
?>
