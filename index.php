<?php
require_once 'vendor/autoload.php';

$twig = new Twig_Environment($loader);

$loader = new Twig_Loader_Filesystem('views');

echo $twig->render('view.twig.html', array(
    'name' => 'Fabien',
    'dazdaz' => 'Fabien'
));

