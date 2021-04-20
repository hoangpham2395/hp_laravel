# HP Laravel

## Environment

- Laravel 8.37.0
- PHP >= 7.3
- Apache 2.4
- MySQL >= 5.7
- Composer 2

## Setup

- Clone project
```
git clone https://github.com/hoangpham2395/hp_laravel.git
```

- Install vendor
```
cd hp_laravel
composer install
cp .env.example .env
php artisan key:generate
```

- Permission
```
sudo chmod -R 777 bootstrap/cache
sudo chmod -R 777 storage/logs/
sudo chmod -R 777 storage/framework
sudo chmod -R 777 public/media
sudo chmod -R 777 public/tmp
```

- Config database > Open file .env and change
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hp_laravel
DB_USERNAME=root
DB_PASSWORD=
```

- Remove cache
```
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
```

- Run database
```
php artisan migrate
php artisan db:seed
```

- Config supervisor
```
https://stackoverflow.com/questions/28702780/setting-up-supervisord-on-a-aws-ami-linux-server
[program:appname-worker]
process_name=%(program_name)s_%(process_num)02d
command=php artisan queue:work
directory=/var/www/php/appname
autostart=true
autorestart=true
numprocs=1
redirect_stderr=true
stdout_logfile=/var/www/php/appname/storage/logs/queues/jobs.out.log
stderr_logfile=/var/www/php/appname/storage/logs/queues/jobs.err.log
```
