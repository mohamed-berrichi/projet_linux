<?
    $login = $_POST["pseudo"];
    $mdp = $_POST["mdp"];
 
    if ($login != "" && $mdp != "") {
 
        @mysqli_connect("localhost", "thehohoho", "mdpdemalade") or die("Impossible de se connecter à la base de données, recommence THEO");
        @mysqli_select_db("users") or die("Table inexistante");
 
        $resultat = mysqli_numrows(mysqli_query("SELECT * from admin WHERE pseudo='$login' AND mdp='$mdp';"));
 
        mysqli_close();
 
        if ($resultat == 1) echo "Authentification réussie, tu va être redirigés THEO!!!. <script>window.location='./admin.php'</script>";
        else header("Location: ./");
    } else header("Location: ./");
 
 
?>