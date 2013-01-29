<?php 

if($_SERVER['SERVER_NAME'] == 'questionablecards.com'){
    ORM::configure('mysql:host=HOST;dbname=DATABASE');
    ORM::configure('username', '');
    ORM::configure('password', '');
}else{
    ORM::configure('mysql:host=localhost;dbname=questionablecards');
    ORM::configure('username', 'root');
    ORM::configure('password', '');
}

$app = new \Slim\Slim(
	array(
		'view' => new \Slim\Extras\Views\Twig(),
		'templates.path' => '_app/views/',
		'cookies.lifetime' => time() + (3600*24*30),
		'cookies.secret' => 'ShittingMidgets',
		'cookies.cipher' => MCRYPT_RIJNDAEL_256,
		'cookies.cipher_mode' => MCRYPT_MODE_CBC
	)
);

$app->add(new \Slim\Middleware\SessionCookie(
	array(
		'expires' => time() + (3600*24*30),
		'path' => '/',
		'domain' => null,
		'secure' => false,
		'httponly' => false,
		'name' => 'slim_session',
		'secret' => 'ShittingMidgets',
		'cipher' => MCRYPT_RIJNDAEL_256,
    'cipher_mode' => MCRYPT_MODE_CBC
	)
));