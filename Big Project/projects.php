<?php require_once "items/config.php"; ?>

<!DOCTYPE html>

<head>
    <title>Big Project</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
</head>

<body>
    <?php require "items/navbar.php"?>

    <div class="project-container">
        <?php
            $sql = "SELECT * FROM projets WHERE id_projet=:id_projet";
            $pre = $pdo->prepare($sql);
            $pre->bindParam("id_projet",$_GET['id_projet']);
            $pre->execute();
            $projets = $pre->fetch(PDO::FETCH_ASSOC);
        ?>
        <div class="pres-site">
            <h1>Projet n°<?php echo $projets['id_projet']?><br><?php echo $projets['nom_projet']?></h1>
        </div>
        <div class="img-projet">
            <img src="<?php echo $projets['img_projet']?>">
        </div>
        <div class="description-container">
            <div class="description">
                <h2 class="title-description">Titre 1</h2>
                <p><?php echo $projets['descr1_projet']?></p>
            </div>
            <div class="description">
                <h2 class="title-description">Titre 2 </h2>
                <p><?php echo $projets['descr2_projet']?></p>
            </div>
            <div class="description">
                <h2 class="title-description">Titre 3</h2>
                <p><?php echo $projets['descr3_projet']?></p>
            </div>
        </div>
    </div>
    


    <div class="footer">
        <div class="footer-content">
            <a href="#">mentions legales</a>
        </div>
    </div>


    <script src="js/style.js"></script>
</body>


<!-- seb@demenageur-site.com -->