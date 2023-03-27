<?php

require __DIR__ . "/../vendor/autoload.php";

use \internal\Route;

include __DIR__ . "/../src/routes/web.php";

Route::invoke();
