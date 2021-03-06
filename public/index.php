<?php

/**
 * Define global environment.
 */
define('PUBLIC_DIR', __DIR__);
define('APP_DIR', __DIR__ . '/../');

/**
 * Activate the autoload.
 */
require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Load parameters.
 */
require_once __DIR__ . '/../app/start.php';

/**
 * Start the app!
 */
Biome\Biome::start();
