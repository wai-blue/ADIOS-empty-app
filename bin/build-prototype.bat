@echo off

set /p "rootUrl=Enter the root URL for your project. Must NOT start and end with '/'. E.g my-projects/adios-empty-app: "

php %~dp0../vendor/wai-blue/adios/src/CLI/build-prototype.php ^
  --salt adios-empty-app ^
  --input %~dp0../vendor/wai-blue/adios/docs/Prototype/examples/10-simple-crm.json ^
  --rewrite-base /%rootUrl%/ ^
  --root-url http://localhost/%rootUrl% ^
  --output-folder %~dp0..