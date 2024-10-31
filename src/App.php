<?php

use \ADIOS\Core\Helper;

// load configs
require_once(__DIR__ . "/../ConfigEnv.php");
require_once(__DIR__ . "/ConfigApp.php");

// include autoloaders
require_once(__DIR__ . "/../vendor/autoload.php");


// autoloader for AdiosApp
spl_autoload_register(function($className) {
  if (strpos($className, 'AdiosApp\\') === 0) {
    $className = str_replace('AdiosApp\\', '', $className);

    $fname1 = dirname(__FILE__) . '/' . str_replace('\\', '/', $className) . '.php';
    $fname2 = dirname(__FILE__) . '/' . str_replace('\\', '/', $className) . '/Main.php';

    if (is_file($fname1)) require($fname1);
    else if (is_file($fname2)) require($fname2);
  }
});

// create own ADIOS class
class AdiosApp extends \ADIOS\Core\Loader {
  public function __construct($config = NULL, $mode = NULL) {
    parent::__construct($config, $mode);

    $this->twig->addFunction(new \Twig\TwigFunction(
      'number',
      function ($amount) { return number_format($amount, 2, ",", " "); }
    ));

  }
}
