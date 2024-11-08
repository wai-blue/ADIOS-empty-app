<?php

ini_set('html_errors', "1");
ini_set('error_prepend_string', "<pre style='color: #333; font-face:monospace; font-size:8pt;'>");
ini_set('error_append_string', "</pre>");

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL ^ E_NOTICE ^ E_WARNING);

define('_ADIOS_ID', 'securityagency');

// load configs
require_once(__DIR__ . "/ConfigEnv.php");
require_once(__DIR__ . "/src/ConfigApp.php");

// echo password_hash('administrator', PASSWORD_DEFAULT);exit;

// load application class
require("src/App.php");

// render
$app = new AdiosApp($config);
// list($route, $params) = $app->extractRouteParamsFromRequest(); _var_dump($app->router->applyRouting($route, $params));exit;
$app->install();
