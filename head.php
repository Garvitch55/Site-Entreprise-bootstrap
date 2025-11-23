<?php

/** 
 * Génere l'entète de la page avec un titre personalisé 
 * @param $title
 * @return void
 */

function head_with_title($title = "Entreprise: Bootstrap")
{
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<base href="http://localhost:8080/entreprise/">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="public/build/style.css">
<title><?= $title ?></title>

    </head>

    <body>
    <?php
}

    ?>