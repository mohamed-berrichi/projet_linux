<?php 
session_start();

if (!isset($_SESSION['role']) && $_SESSION['role'] != 'user') {
    header("Location: login.php");
    exit();
}

$uid = $_SESSION['user_id'];
$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Bienvenue, <?php echo $username; ?>!</h2>
    <p>Vous êtes connecté en tant qu'utilisateur ID <?php echo $user_id; ?>.</p>
    <a href="logout.php">Déconnexion</a>
</body>
</html>

