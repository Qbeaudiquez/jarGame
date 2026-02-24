<?php

// import functions

require_once __DIR__ . '/functions/functions.php';

// App

$select = mainMenu();

while ($select !== "e") {
    switch ($select) {
        case "j":
            $requiredKeys = 3;
            $jars = makeJars();
            var_dump($jars);
            $score = 0;
            for ($i = 0; $i < $requiredKeys; $i++) {
                $jarKey = (int) readline("Choisi une jarre. ( Jarre 1 = 1, Jarre 1 = 2, Jarre 1 = 3, Jarre 1 = 4, Jarre 1 = 5 ) : ") - 1;
                if ($jars[$jarKey] === 0) {
                    echo "Tu a trouvé une clé !\n";
                    $score = $score + 1;
                    echo "Tu dispose de $score clés.\n";
                    if($score === 3) echo "Bravo ! Tu as gagné !\n";
                } else {
                    echo "Perdu tu ais tombé sur un serpent ! !\n";
                    break;
                }
            }

            break;
        case "r":

            break;
        case "d":
            $difficulty = readline("Quel difficulté veux tu choisir ? (Niveau 1 = 1, Niveau 2 = 2, Niveau 3 = 3) : ");
            break;
        default:
            echo "Choix invalide.\n";
            break;
    }
    $select = mainMenu();
}

echo "A bientôt ! :)";
