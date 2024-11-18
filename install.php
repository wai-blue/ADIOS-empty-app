<?php

// load configs
global $config;
require_once(__DIR__ . "/ConfigEnv.php");
require_once(__DIR__ . "/src/ConfigApp.php");

// load application class
require(__DIR__ . "/src/App.php");

try {
  $app = new AdiosApp($config, TRUE);
  $app->install();

  $mUser = new \ADIOS\Models\User($app);
  $idUserAdministrator = $mUser->eloquent->create([
    'login' => 'administrator',
    'password' => $mUser->hashPassword('abcd'),
    'is_active' => 1,
  ])->id;

  $mUserRole = new \ADIOS\Models\UserRole($app);
  $idRoleAdministrator = $mUserRole->eloquent->create(['name' => 'Administrator'])->id;

  $mUserHasRole = new \ADIOS\Models\UserHasRole($app);
  $mUserHasRole->eloquent->create(['id_user' => $idUserAdministrator, 'id_role' => $idRoleAdministrator])->id;

} catch (\Exception $e) {
  echo $e->getMessage();
}