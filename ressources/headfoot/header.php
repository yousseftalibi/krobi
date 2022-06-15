<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortout icon" href="../ressources/images/logo.png">
    <?php echo $css ?>
    <link rel="stylesheet" href="../ressources/css/style_header.css">
    <script src="js/jquery-3.4.1.min.js">
    </script>
    <script src="js/menu.js"></script>
    <title><?php echo $title ?></title>
</head>

<body>
    <header>
        <a href="../../Evolution/evolution.php"><img id="logo" src="../ressources/images/logo.png" alt="Logo de l'application"></a>
        <nav id="mainNav">
            <ul class="menu">
                <li class="menu-principal"><a href="../Evolution/evolution.php">Accueil</a></li>
                <li class="menu-principal"><a href="../Historique/historique.php">Historique</a></li>
                <li class="menu-principal"><a href="../FAQ/FAQ.php">FAQ</a></li>
                <li class="menu-principal"><a href="../Mode Emploi/modeemploi.php">Mode d'emploi</a></li>
                <li class="menu-principal"><input id="input" type="search" placeholder="Recherche..."><a href="#input"><img src="../ressources/images/loupe.png" alt="loupe de recherche"></a></li>
            </ul>
            <ul class="menu-deroulant">
                <li class="deroulant menu-principal">
                    <a href="#">
                        <img src="../ressources/images/ecrou.png" alt="logo de paramètre">
                    </a>
                    <ul class="sous-menu">
                        <li><a href="#">Options</a></li>
                        <li><a href="../../Accueil/index.php">Déconnexion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <input type="button" id="toggle" value="☰" style="cursor: pointer;">
    </header>
    <main>
        <div id="title"><?php echo $title ?></div>
        <div id="body">