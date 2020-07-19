<?php
declare( strict_types=1 );

define( 'WEBSITE_START', microtime( true ) );

require __DIR__ . '/../bootstrap/partages/dump.php';

require __DIR__ . '/../vendor/autoload.php';


$dotenv = Dotenv\Dotenv::createImmutable( __DIR__ . '/../' );
$dotenv->load();
$dotenv->required( 'DATABASE_SOURCE' );


$app = Bootstrap\App::singleton();

require_once __DIR__ . '/../routes/admin.php';
require_once __DIR__ . '/../routes/api.php';

$app->routeur->traiterURI($uri);