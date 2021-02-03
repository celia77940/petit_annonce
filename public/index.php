<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

$router = new AltoRouter();

// $router->map('Method', 'route', Tableau(Controler, Action))
$router->map( 'GET', '/', array('c'=>'AnnonceController', 'a'=>'index'));
$router->map( 'GET|POST', '/ajouter', array('c'=>'FormController', 'a'=>'ajouter'));
$router->map( 'GET', '/modifier', 'modifier', 'modifier' );
$router->map( 'GET', '/supprimer', 'supprimer', 'supprimer' );
$router->map( 'GET', '/404', '404', '404' );

$match = $router->match();
$controller = 'App\\Controllers\\' . $match['target']['c'];
$action = $match['target']['a'];


//Instancier l'objet d'après l'url
$object = new $controller();
if( count($match['params']) === 0 )
    $print =  $object->{$action}();
else
    $print =  $object->{$action}($match['params']);

echo $print;

?>





