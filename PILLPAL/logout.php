<?php 
session_start();
unset($_SESSION['Nom']);
unset($_SESSION['Prenom']);
unset($_SESSION['CNE']);
unset($_SESSION['Email']);
unset($_SESSION['Phone']);
header('Location: log.php');
?>