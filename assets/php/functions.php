<?php
  try {
    //Connexion à la base de données
    $base = new PDO('mysql:host=localhost; dbname=memory', 'root', 'root');
    //Requète permettant de rechercher dans la base de données le meilleur temps
    $reponse = $base->query('SELECT MAX(TimeGame) FROM score;');

    while ($data = $reponse->fetch())
    {
      //Affichage du meilleur temps
    	echo $data['MAX(TimeGame)'];
    }

    // On teste si on reçoit la variable score du post de la fonction ajax
    if (isset($_POST['score']))
      {
        $score=$_POST['score'];
        //Insertion dans la base de données du score du joueur si il gagne
        $reponseInsert = $base->query("INSERT INTO score (TimeGame) VALUES ('$score')");
      }

  }
  //Gestion des erreurs
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  };
?>