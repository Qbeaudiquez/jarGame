<?php

// import functions

require_once __DIR__ . '/functions/functions.php';

// App

$select = mainMenu();

while($select !== "e"){
    switch($select){
        case "j" :
            $jars = makeJars();
            $jarKey = (int) readline("Choisi une jarre. ( Jarre 1 = 1, Jarre 1 = 2, Jarre 1 = 3, Jarre 1 = 4, Jarre 1 = 5 ) : ");
        if ($jars[$jarKey] === 0) {
            echo "Bravo tu a trouvé la cle !\n";
        } else {
            echo "Perdu tu ais tombé sur un serpent ! !\n";
        }
            break;
        case "r" :
            
            break;
        case "d" :
            $difficulty = readline("Quel difficulté veux tu choisir ? (Niveau 1 = 1, Niveau 2 = 2, Niveau 3 = 3) : ");
            break;
        default :
            echo "Choix invalide.\n";
            break;
    }
    $select = mainMenu();
}

echo "A bientôt ! :)";