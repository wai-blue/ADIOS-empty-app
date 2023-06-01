@echo off

set /p "rewriteBase=Enter the rewrite base for your project. Must start and end with '/'. E.g /adios-empty-app/: "

php ..\vendor\wai-blue\adios\src\CLI\build-prototype.php ^
  --salt adios-empty-app ^
  --input-file ..\vendor\wai-blue\adios\docs\Prototype\examples\10-simple-crm.json ^
  --rewrite-base %rewriteBase% ^
  --root-url http://localhost%rewriteBase% ^
  --output-folder ..