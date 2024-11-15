<?php

$config['appNamespace']                  = 'AdiosApp';

// session
$config['sessionSalt']                   = 'adios';

// dirs & urls
$config['dir']                           = realpath(__DIR__ . '/..');
$config['srcDir']                        = realpath(__DIR__ . '/../src');
$config['logDir']                        = realpath(__DIR__ . '/../log');
$config['tmpDir']                        = realpath(__DIR__ . '/../tmp');
$config['uploadDir']                     = realpath(__DIR__ . '/../common/upload');
$config['uploadUrl']                     = '//' . ($_SERVER['HTTP_HOST'] ?? '') . $config['rewriteBase'] . 'common/upload';

// misc
//$config['defaultController'] = 'AdiosApp/Controllers/App/Dashboard';
$config['userRoles'] = array (
  'Administrator' => 1,
  'User' => 2,
);

$config['coreClasses'] = [
  //'Core/Permissions' => \AdiosApp\Core\Permissions::class,
  //'Core/Router' => \AdiosApp\Core\Router::class,
  //'Core/Controller' => \AdiosApp\Core\Controller::class,
// Uncomment these lines if you want to override another core classes
  // 'Core/Console' => \PortalApp\Core\Console::class,
  // 'Core/Locale' => \PortalApp\Core\Locale::class,
  // 'Core/TwigLoader' => \PortalApp\Core\TwigLoader::class,
  // 'Core/UserNotifications' => \PortalApp\Core\UserNotifications::class,
  // 'Models/User' => \SecurityAgencyApp\Models\User::class,
  // 'Models/UserRole' => \SecurityAgencyApp\Models\UserRole::class,
  // 'Models/UserHasRole' => \SecurityAgencyApp\Models\UserHasRole::class,
  // 'Controllers/Desktop' => \SecurityAgencyApp\Controllers\Desktop::class,
];

$config['db'] = [
  'provider' => \ADIOS\Core\Db\Providers\MySQLi::class,
];

$config['auth'] = [
  'provider' => \ADIOS\Auth\Providers\DefaultProvider::class,
];
