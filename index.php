<?php
session_start();


if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];



    $conn = new mysqli("localhost", "admin", "motdepasse", "TPFinal");

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $request = "SELECT id, username FROM users WHERE username = '$username' AND password = '$password'";
    //phrase à reproduir pour l'injection : "SELECT id, username FROM users WHERE username = 'admin' AND password = 'nimportequoi' OR '1'='1'";
    $result = $conn->query($request);
    



    if ($result->num_rows > 0) {
       
        $response = $result->fetch_assoc();
        
        session_start();
        $_SESSION['user_id'] = $response['id'];
        $_SESSION['username'] = $response['username'];
        
        
        if ($username === 'admin') {
            $_SESSION['role'] = 'admin';
            header("Location: admin.php");
            exit();
        } else {
            $_SESSION['role'] = 'user';
            header("Location: dashboard.php");
            exit();
        }
        
    }
    $error_message = "Nom d'utilisateur ou mot de passe incorrect";
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error_message)) echo "<p>$error_message</p>"; ?>
    <form method="POST" action="">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Mot de passe:</label>
        <input type="text" id="password" name="password" required>
        <br>
        <button type="submit">Connexion</button>
    </form>
    <a href="signin.php">se créer un compte</a>
</body>
</html>
