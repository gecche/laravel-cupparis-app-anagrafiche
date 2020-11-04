# laravel-cupparis-app-anagrafiche
Pacchetto per gestione generica di anagrafiche di Cupparis Laravel App

Procedura di installazione

1 - php artisan vendor:publish 
    (copia i files)
2 - php artisan install-cupparis-package cupparis-app-anagrafiche
    (aggiorna il json generale)
3 - php artisan migrate
4 - php artisan db:seed --class=CupAnagSeeder
    (popola le tabelle anagrafiche con la versione dei files in corso)
    
```    
php artisan vendor:publish --provider="Gecche\Cupparis\App\Anagrafiche\AnagraficheServiceProvider"
composer dump-autoload
php artisan install-cupparis-package cupparis-app-anagrafiche
php artisan migrate
php artisan db:seed --class=CupAnagSeeder
```


Procedura di disinstallazione

1 - php artisan uninstall-cupparis-package cupparis-app-anagrafiche --json
    (cancella i files, aggiorna il json generale e cancella il json del pacchetto)
2 - eventualmente: 
    a - php artisan migrate:rollback
    b - cancellare i files di migrazione manualmente che iniziano con "cup_geo" 

```    
php artisan uninstall-cupparis-package cupparis-app-anagrafiche --json
php artisan migrate:rollback
rm -f database/migrations/*create_cup_anag_*.php
rm -f database/migrations/*create_datafile_cup_anag_*.php
```    
