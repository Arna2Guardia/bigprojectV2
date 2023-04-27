
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

    <div class="hidden-page">
        <h1>Welcome</h1>
        <div class="img-meme">
            <img src="img/stegano_meme.jpg">
        </div>
        <div class="challenge">
            <a href="img/base-jumping.jpg" download><button>Démarrer le challenge</button></a>
            <form>
                <label for="password">Flag :</label>
                <input type="password" id="password" name="password">
              </form>
        </div>
    </div>
    <div class="footer">
        <div class="footer-content">
            <a href="#">mentions legales</a>
        </div>
    </div>

    <script src="js/style.js"></script>
</body>