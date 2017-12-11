<?php session_start(); ?>
<?php
  define("URL_SITE", "http://localhost:8080/New%20folder/final-course/app/");
?>
<?php
  unset($_SESSION["login"]);
  header("location: ".URL_SITE."index.php");
?>
