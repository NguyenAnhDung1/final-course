<?php session_start(); ?>
<?php
  define("URL_SITE", "http://localhost:8080/New folder/final-course/app/");
?>
<?php
  if (!isset($_SESSION["login"])) {
      header("location: ".URL_SITE."index.php");
  }
?>
