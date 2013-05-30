<body>
<?php 
session_start(); 
if ( isset ( $_SESSION['user'] ) ) {
  echo "ha iniciado sesion como: ".$_SESSION['user']." con el rol " .$_SESSION['rol'];
session_unset();
session_destroy();
header('location:index.php');
} else {
header('location:index.php');
}
?>