<?php

use App\Njcozw\DotEnv;


error_reporting(E_ALL);
ini_set('display_errors', '1');

ini_set('allow_url_fopen', 1);

require_once __DIR__ . '/../vendor/autoload.php';

(new DotEnv(__DIR__ . '/../.env'))->fetch();
