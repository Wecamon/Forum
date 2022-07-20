# Installation
/Forum
+ docker-compose build
+ docker-compose up -d
+ docker-compose exec php bash
+ composer install

## Creating new entities:

/Forum/app
+ symfony console make:entity
+ ...

/Forum
+ docker-compose exec php bash
+ php bin/console make:migration
+ php bin/console d:m:m


### Useful commands
Inside php container
+ php bin/console d:s:v
(Validates doctrine mapping and database schema)
+ php bin/console d:m:list
(Lists all migrations of the project)
+ php bin/console d:m:execute "DoctrineMigrations\Version[versionNumber]" [--up] [--down]
(Executes the specified migration up or down)
+ php bin/console d:s:u --dump-sql (If your database schema is wrong, the Doctrine will show you what SQL
queries shall be executed in order to keep schema up to date)
+ php bin/console d:s:u --force
(Fixes your database schema and makes it relevant)