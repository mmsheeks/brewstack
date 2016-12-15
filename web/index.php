<?php

/**
 *
 * Application root file. Do not modify this.
 *
 */

ini_set('display_errors','1'); error_reporting(E_ALL);
 
// bring in the composer auto-loader, obvs.
require_once( __DIR__ . '/../vendor/autoload.php');

// create a new Homebrew application and load it up
$app = new Homebrew\Core\Application();
$app->load();

// That's it!