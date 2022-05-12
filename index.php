<?php
    // contrôle errors
    // error_reporting(E_ALL);
    // ini_set("display_errors", 1);
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/styles.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <title>Memory game for O'Clock</title>
</head>

<body>
    <div>
        <div id="progress_bar"></div>
    </div>
    <div class="game">
        <div class="controls">
            <div class="stats">
                <div class="moves">0 coups</div>
                <div class="timer">temps: 0 sec</div>
                <div>Meilleur temps (secondes) : <?php include ('../memory-game/assets/php/functions.php'); ?></div>               
            </div>
        </div>
        <div class="board-container">
            <div class="board" data-dimension="4"></div>
            <div class="win">Félicitation tu as gagné !</div>
        </div>
    </div>
    <script src="assets/scripts/main.js"></script>
</body>

</html>