<html>
 
<head>
    <div align="center"><h1>yoyoyoyo THEOOO</h1></div>
    <title>Faille de type SQL Injection, trouve le mdp de l'admin THEO</title>
</head>
 
<body>
 
    <img src="../images/cherry-tongue.gif">
    <br><br>
 
    <div align="center">
    <form action="./auth.php" method="POST">
        <table>
            <tr>
                <td>Login</td>
                <td><input type="text" name="pseudo" maxlength="30"></td> </tr>
            <tr>
                <td>Pass</td>
                <td><input type="password" name="mdp" maxlength="30"></td> </tr>
            <tr><td colspan=2 align="center"><input type="submit" name="login" value="Login"></td></tr> </table> </form>
    </div>
 
</body>
 
</html>