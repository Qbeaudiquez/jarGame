<?php

function mainMenu()
{
    return readline("Menu principal. (Jouer = j ,Règle = r, Exit = e) : ");
}

function makeJars($difficulty)
{
    $jars = [];
    for ($i = 0; $i < 5; $i++) {
        $jars[] = 0;
    }
    for($i = 0 ; $i < $difficulty; $i++){

    $snake =  random_int(0, 4);
    while($jars[$snake] === 1 ){
    $snake =  random_int(0, 4);
    }
    $jars[$snake] = 1;
    }
    return $jars;
}
