@echo off

echo dump sql
php app/console doctrine:schema:create --dump-sql > ..\SymfonyProd\sql_create_dump.sql
php app/console doctrine:schema:update --dump-sql > ..\SymfonyProd\sql_update_dump.sql


echo copy config
copy composer.json ..\SymfonyProd\composer.json
copy app\config\config.yml ..\SymfonyProd\app\config\config.yml
copy app\config\config_prod.yml ..\SymfonyProd\app\config\config_prod.yml
copy app\config\parameters.yml.dist ..\SymfonyProd\app\config\parameters.yml.dist
copy app\config\parameters.yml ..\SymfonyProd\app\config\parameters.yml
copy app\config\routing.yml ..\SymfonyProd\app\config\routing.yml
copy app\config\security.yml ..\SymfonyProd\app\config\security.yml
copy app\AppKernel.php ..\SymfonyProd\app\AppKernel.php


echo copy source files
xcopy "app\Resources" "..\SymfonyProd\app\Resources" /E /Y
xcopy "src\Nabli" "..\SymfonyProd\src\Nabli" /E /Y

cd ..\SymfonyProd
echo clear cache
php composer.phar install --no-dev --optimize-autoloader


echo dump assets
php app/console assetic:dump --env=prod

echo uploading to live environment
#call upload-to-strato.bat #
..\..\..\Putty\WinSCP.com /script=winscp_script.txt

cd ..\Symfony