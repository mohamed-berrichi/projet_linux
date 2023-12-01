<?
 
    $headers = http_get_request_headers();
 
    if (!isset($headers["Referer"]) || $headers["Referer"] != "http://".$headers["Host"]."/hacking/admin/auth.php")
        header("Location: ./");
 
?>
 
<html>
 
<head>
 
    <div align="center"><h1>yoyoyo THEOOOOOO</h1></div>
    <title>Faille de type SQL Injection et Referrer Spoofing, alors c'est comment THEO</title>
 
</head>
 
<body>
 
    <img src="../images/jojo.gif">
    <br><br>
    [Message d'accueil]
 
</body>
</html>