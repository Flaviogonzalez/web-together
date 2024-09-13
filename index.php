<?php

declare(strict_types=1);

use Slim\App;
use UMA\DIC\Container;


/** @var Container $cnt */
$cnt = require_once __DIR__ . '/bootstrap.php';

/** @var App $app */
$app = $cnt->get(App::class);
$app->run();