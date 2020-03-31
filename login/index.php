<?php
  require "header.php";
?>

  <main>
    <?php
      if (isset($_SESSION['userId'])) {
        echo '<p class="login-status">Sie sind jetzt eingeloggt!</p>';
      }
      else {
        echo '<p class="login-status">Sie sind jetzt ausgeloggt!</p>';
      }
    ?>
  </main>

<?php
  require "footer.php";
?>
