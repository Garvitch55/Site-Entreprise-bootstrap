<?php

//on va définir l'adresse de la racine comme une variable global costante

define('ROOT', __DIR__ . '/');
//fonction qui charge le fichier
function load(string $file)
{
    require ROOT . $file;
}
function start_page(string $title)
{
    load('head.php');
    head_with_title($title);
    // load('nav.php');
}
