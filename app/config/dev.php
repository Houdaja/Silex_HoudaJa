<?php

/*
 * Ce fichier contient les options de configuration liés au développement de notre application
 * Ce fichier inclut la configuration de production puis paramètre Silex pour afficher des informations de débogage détaillées en cas d'erreur, ce qui est utile pendant la phase de développement.
 */



// include the prod configuration
require __DIR__ . '/prod.php';

// enable the debug mode
$app['debug'] = true;
