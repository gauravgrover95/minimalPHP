<?php

/** base route if any- **/
// here you can specify application of your project
$baseRoute = 'minimalPHP/';
$namespace = 'App\App\Controller\\';

$routes = [
	
	// Enter your routes here
	$baseRoute . '' => 
	 $namespace . 'HomeController::get',

];



// Initialising routes and loading matched route
\Link::all($routes);