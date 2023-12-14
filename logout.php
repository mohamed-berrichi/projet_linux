<?php
session_start();

// Détruit la session et redirige vers la page de login
session_destroy();
header("Location: login.php");
exit();
?>
