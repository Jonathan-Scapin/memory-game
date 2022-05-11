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
<p><progress id="avancement" value="0" max="120"></progress></p>    
      <div id="compte_a_rebours"> </div>
    <div class="game">
        <div>
            <p> Meilleur temps (secondes) : <?php include('php/functions.php'); ?>
            </p>
        </div>
        <div class="controls">
            <button>Commencez !!!</button>
            <div class="stats">
                <div class="moves">0 coups</div>
                <div class="timer">temps: 0 sec</div>
            </div>
        </div>
        <div class="board-container">
            <div class="board" data-dimension="4"></div>
            <div class="win">Félicitation tu as gagné !</div>
        </div>
    </div>
    <script src="assets/scripts/main.js"></script>
    <script src="assets/scripts/progress.js"></script>
</body>

</html>