#!/bin/bash

read -p "Enter the root URL for your project. Must NOT start and end with '/'. E.g my-projects/adios-empty-app: " rootUrl

php ./vendor/wai-blue/adios/src/CLI/build-prototype.php \
  --salt adios-app \
  --input ./../vendor/wai-blue/adios/docs/Prototype/examples/10-simple-crm.json \
  --rewrite-base /$rootUrl/ \
  --root-url http://localhost/$rootUrl \
  --output-folder ..
