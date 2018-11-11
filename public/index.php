<?php

use App\Database\Database;

require "../vendor/autoload.php";

$settings = require "../src/settings.php";

$app = new Slim\App($settings);

require "../src/dependencies.php";

require "../src/routes.php";

new Database();

$app->run();