This app is demo and used as playgraund for laravel, Nothing to do interesting here.

<hr>

###### Setup
```
git clone git@github.com:sshd911/develop_laravel_app.git &&
cd develop_laravel_app &&
cp .env.example .env
```

###### .env(DB Connection)
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=example
DB_USERNAME=hoge
DB_PASSWORD=hoge
```

###### You can run below commands, after write .env(↑DB Connection↑)
```
npm install &&
composer install &&
php artisan breeze:install &&
php artisan migrate &&
php artisan db:seed &&
php artisan key:generate &&
php artisan serve
```

###### Filament
```
php artisan make:filament-user
# localhost/admin/login
```
###### Vite
```
npm run dev
```
