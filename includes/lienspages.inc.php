<?php
$scriptName = filter_input(INPUT_SERVER, 'SCRIPT_FILENAME');
$name = substr($scriptName, strripos($scriptName, '/') + 1);
if ($name === 'index.php'){
    $dirIndex = './';
    $dirPages = './pages/';
}
else {
    $dirIndex = '../';
    $dirPages = './';
}

$pages = array('Accueil' => $dirIndex . 'index.php',
    'Route' => $dirPages . 'route.php',
    'Cross' => $dirPages . 'cross.php',
    'Piste' => $dirPages . 'piste.php',
    'Enfants' => $dirPages . 'enfants.php',
    'Nous contacter' => $dirPages . 'nous-contacter.php');
foreach ($pages as $liensPages => $nomPages) {
    echo '<li><a href="pages/',$nomPages , '">', $liensPages, '</a></li>';
}