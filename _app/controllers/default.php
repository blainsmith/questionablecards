<?php

$app->get('/', function() use ($app) {
	
	return $app->render(
		'default.html',
		array(
			'my_unix_timestamp' => time()
		)
	);

});