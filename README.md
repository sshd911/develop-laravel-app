This app is demo and used as playgraund for laravel, Nothing to do interesting here.

<hr>

###### Setup
```
git clone git@github.com:sshd911/develop_laravel_app.git &&
cd develop_laravel_app &&
cp .env.example .env
```

###### These are required, You must write anything
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=example
DB_USERNAME=hoge
DB_PASSWORD=hoge
```

###### After write .env, you can run below
```
npm install &&
composer install &&
php artisan breeze:install &&
php artisan migrate &&
php artisan key:generate &&
php artisan serve
```

###### Compile TailwindCSS
```
npm run dev
```
