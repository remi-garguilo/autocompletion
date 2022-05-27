<?php
require_once('controller_recherche.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="recherche.css">
    <title>Computer</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                    </ul>
                    <form class="d-flex" autocomplete="off" action="recherche.php" method="GET">
                        <input class="form-control me-2" type="text" name="search" id="computer" placeholder="Rechercher votre marque d'ordinateur">
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
    <div class="content">
        <div id="sectionUp">
        </div>
        <div id="sectionDown">
        </div>
    </div>
        <table class="table">
            <tbody>
                <?php
                foreach ($tab['start'] as $st) {  ?>
                    <tr>
                        <td><a href="element.php?id=<?php echo $st['id'] ?> "><img src="<?= $st['image']; ?>" width="200px" height="150px"></a></td>
                        <td><?= $st['nom']; ?></td>
                        <td><?= $st['description']; ?></td>
                    </tr>
                <?php };
                ?>
                <?php foreach ($tab['contain'] as $st) {  ?>
                    <tr>
                        <td><a href="element.php?id=<?php echo $st['id'] ?> "><img src="<?= $st['image']; ?>" width="200px" height="150px"></a></td>
                        <td><?= $st['nom']; ?></td>
                        <td><?= $st['description']; ?></td>
                    </tr>
                <?php }; ?>
            </tbody>
        </table>
    </main>


</body>

</html>