<?php
// Connexion à la base de données (à personnaliser selon vos besoins)
$conn = new mysqli("localhost", "admin", "motdepasse", "TPFinal");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Vérifie si le formulaire d'inscription a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Valider et récupérer les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    $request = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = $conn->query($request);

    if ($result) {
        echo "Utilisateur ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout de l'utilisateur : " . $conn->error;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de Compte</title>
</head>
<body>
    <h2>Création de Compte</h2>
    <?php if (isset($success_message)) echo "<p>$success_message</p>"; ?>
    <?php if (isset($error_message)) echo "<p>$error_message</p>"; ?>
    <form method="post" action="">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Créer un Compte</button>
    </form>
    <a href="index.php">se connecter</a>
</body>
</html>
