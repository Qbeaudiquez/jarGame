<?php

function mainMenu()
{
    return $select = readline("Menu principal. (Jouer = j ,Règle = r, Difficulté = d, Exit = e) : ");
}

function makeJars()
{
    $jars = [];
    for ($i = 0; $i < 5; $i++) {
        $jars[] = 0;
    }
    $snake =  random_int(0, 4);

    $jars[$snake] = 1;

    return $jars;
}