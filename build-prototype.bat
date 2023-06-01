set /p "rewriteBase=Enter the rewrite base for your project. Must start and end with '/'. E.g /adios-empty-app/: "

php vendor\ADIOS\src\CLI\build-prototype.php ^
  --salt adios-empty-app ^
  --input-file vendor\ADIOS\docs\Prototype\examples\10-simple-crm.json ^
  --rewrite-base %rewriteBase% ^
  --root-url http://localhost/%rewriteBase%