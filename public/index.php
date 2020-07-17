<?php
declare(strict_types = 1);

define('WEBSITE_START', microtime(true));

require __DIR__ . '/../bootstrap/partages/dump.php';

require __DIR__.'/../vendor/autoload.php';


$app = require __DIR__.'/../bootstrap/App/index.php';


echo "Hello !";