<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/root.css" />
    <script src="js/script.js" type="text/javascript"></script>
    <title>Accueil</title>
</head>

<body>
    <main>
        <div class="container">
            <div class="google">
                <a id="google_logo"><img height="200px" width="400px" src="https://www.pngmart.com/files/16/Google-Logo-PNG-File.png" alt=" photo google-logo_zpspkcztsjo.png"/></a>
            </div>
            <form action="pages/recherche.php" method="get">
            <div class="search-container">
                <input type="text" name="search" id="search" placeholder="Rechercher une ville">
                <div class="suggestions">
                    <ul></ul>
                </div>
            </div>
            </form>
        </div>
        <footer>
            <div class= "logo">
                <a href="https://github.com/remi-garguilo/autocompletion"><img src="github.png" class="img"></a>
                <a href="https://remi-garguilo.students-laplateforme.io/"><img src="portfolio.png" class="img"></a>
            </div>
        </footer>
    </main>
</body>
</html>