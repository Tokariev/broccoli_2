<?php
  require "db.php";
?>
<?php session_start();
if (array_key_exists("logged_user", $_SESSION)) {
    echo "Привет " . $_SESSION['logged_user'];
} else {
   header('Location:/signup.php');
   exit;
}
?>
 <!-- если пользовател не выходил с учотной записи пропустить сразу на главную -->
 <?php if( isset($_SESSION['logged_user'])) : ?>
     <hr>
     <a href="/logout.php">Выйти</a>
 <?php else : ?>
 <?php endif; ?>


