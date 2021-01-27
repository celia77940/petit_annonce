<?php

require "../vendor/autoload.php";

$router = new AltoRouter();

$router->map( 'GET', '/', 'index', 'index' );
$router->map( 'GET', '/ajouter', 'ajouter', 'ajouter' );
$router->map( 'GET', '/modifier', 'modifier', 'modifier' );
$router->map( 'GET', '/supprimer', 'supprimer', 'supprimer' );
$router->map( 'GET', '/404', '404', '404' );

$match = $router->match();

if (is_array($match)){

    if( is_callable( $match['target'] ) ) {
	   call_user_func_array( $match['target'], $match['params'] ); 
    } else {
        $target= $match['target'];
    
       include "../views/{$target}.view.php";
    }
      
}else{
    
    include "../views/404.view.php";
}

?>





