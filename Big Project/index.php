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

    <div class="container">
        <div class="pres-site">
            <h1>Un super site</h1>
            <p>Petite description</p>
        </div>
        <h2 class="page-title">Projets</h2>
        <?php
            $sql = "SELECT * FROM projets";
            $pre = $pdo->prepare($sql);
            $pre->bindParam("id_projet",$_GET['id_projet']);
            $pre->execute();
            $projets = $pre->fetchAll(PDO::FETCH_ASSOC);
        ?>    
        <div class="card-container">
        <?php foreach ($projets as $projet): ?>
            <div class="card">
                <a href="projects.php">
                    <img src="img/singe.jpg" alt="singe">
                    <h3><?php echo $projet['nom_projet']?></h3>
                    <p><?php echo $projet['pres_projet']?></p>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
        <h2 class="page-title">Jeux</h2>
        <div class="game-container">
            <div class="game">
                <a href="#">
                    <img src="img/jeu1.jpg" alt="jeu1">
                    <h3>Titre Jeu</h3>
                    <p>presentation jeu1</p>
                </a>
            </div>
            <div class="game">
                <a href="#">
                    <img src="img/jeu2.jpg" alt="jeu1">
                    <h3>Titre Jeu</h3>
                    <p>presentation jeu1</p>
                </a>
            </div>
        </div>
        <h2 class="page-title">Mon CV</h2>
        <div class="cv-container">
            <div class="cv-card">
                <a href="cv.php">
                    <img src="img/cv.jpg" alt="cv img">
                    <h3>Mon CV</h3>
                    <p>Lucas Durand, etudiant à guardia cybe...</p>
                </a>
            </div>
            <a href="CV/CV_Lucas_Durand.pdf" title="Pdf" target="_blank">Téléchargez mon CV</a>

        </div>
        
        <div id='ellivro' class="livre-dor">
            <h2>Laissez un avis !</h2>
            <div class="livre-dor-content">
                <form action="action_page.php">        
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your name" required>  
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placholder="Your email" required>
                    <label for="message">Subject</label>
                    <textarea id="message" name="message" placeholder="Write something.." style="height:200px" required></textarea>
                    <input type="submit" value="Submit">                
                </form>
            </div>
        </div>
    </div>
    
    <div class="footer">
        <div class="footer-content">
            <a href="#">mentions legales</a>
        </div>
    </div>

<!--  hidden.php   -->

    <script src="js/style.js"></script>

</body>