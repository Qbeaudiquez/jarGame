<?php

// import functions

require_once __DIR__ . '/functions/functions.php';

// App

$select = mainMenu();

while ($select !== "e") {
    switch ($select) {
        case "j":
            $requiredKeys = 3;
            $difficulty = readline("Choisi t'as difficulté. (Niveau 1 = 1, Niveau 2 = 2, Niveau 3 = 3) : ");
            $score = 0;
            for ($i = 0; $i < $requiredKeys; $i++) {
                $jars = makeJars($difficulty);
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
            echo 
            "Tu as 5 jarres devant toi. Choisi s'en une. Si tu tu tombe sur une clé tu continue, si tu tombe sur un serpent tu pers.\n
    Choix de la difficulté :\n
Niveau 1 : Il y a 1 serpent.\n
Niveau 2 : Il y a 2 serpent.\n
Niveau 3 : Il y a 3 serpent.\n";
            break;
        default:
            echo "Choix invalide.\n";
            break;
    }
    $select = mainMenu();
}

echo "A bientôt ! :)";
