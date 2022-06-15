<!DOCTYPE html>
<html>

<head>

    <title>Connexion</title>
    <link rel="shortout icon" href="../ressources/images/logo.png">
    <link rel="stylesheet" href="../ressources/css/style.css" />
</head>

<body>
    <form action="authentificate.php" method="post">
        <label for="username">
        </label>
        <input type="text" name="username" placeholder="Username" id="username" required>
        <label for="password">
        </label>
        <input type="password" name="password" placeholder="Password" id="password" required> <br />
        <input type="submit" value="Se connecter" id="login">
    </form>

</body>

</html>