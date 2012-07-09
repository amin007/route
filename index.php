<?php

include 'route.php';

$route = new Route();

$route->add('/', function() {
	echo 'HOME';
});

$route->add('/any', function() {
	echo 'ANY CALLED';
});

$route->submit();