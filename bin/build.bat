@echo off

php %~dp0../vendor/wai-blue/adios/src/CLI/build-prototype.php ^
  --input %~dp0../vendor/wai-blue/adios/docs/Prototype/examples/10-simple-crm.json ^
  --output-folder %~dp0..
