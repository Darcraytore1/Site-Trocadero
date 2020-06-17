<?php 
session_start();
session_destroy();
header("Location: https://etudiant.u-pem.fr/~dalbisso/index.php");
exit();
?>