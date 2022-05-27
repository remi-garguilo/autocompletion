<?php
require_once('controller_element.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="element.css">
    <title>Element</title>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
                        </li>
                    </ul>
                    <form class="d-flex" autocomplete="off" action="recherche.php" method="GET">
                        <input class="form-control me-2" type="text" name="search" id="voiture" placeholder="Rechercher votre Voiture">
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div class="content">
        <div id="sectionUp">
        </div>
        <div id="sectionDown">
        </div>
    </div>
    <main>
        <div class="image">
            <img src= <?php echo $tab[0]['image'] ?> alt="image computer">
        </div>
        <h1><?php echo $tab[0]['nom'] ?></h1>
        <p><?php echo $tab[0]['description'] ?></p>
    </main>
</body>
</html>