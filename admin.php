<?php
session_start();

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['role'])&&$_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}

// Récupère les informations de l'utilisateur depuis la session
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <h2>Bienvenue, <?php echo $username; ?>!</h2>
    <p>Vous êtes connecté en tant qu'administrateur</p>
    <a href="logout.php">Déconnexion</a>
</body>
</html>
