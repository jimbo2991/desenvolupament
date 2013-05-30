<?php 
session_start(); 
if ( isset ( $_SESSION['user'] ) ) {
  require("sesion.php");
} else {
  require("formulariologin.php");
}
?>
