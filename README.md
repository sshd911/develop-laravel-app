This app is demo and used as playgraund for laravel, Nothing to do interesting here.

<hr>

###### Setup
```
$ git clone git@github.com:sshd911/develop_laravel_app.git
$ cd develop_laravel_app
$ cp .env.example .env
```

###### .env(DB Connection)
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=example
DB_USERNAME=root
DB_PASSWORD=root
```

You can run below commands, after write .env(↑DB Connection↑)

<hr>

###### Setup command. Refer to Makefile, If you want to see details of this command
```
$ make install
```

###### Filament
```
$ php artisan make:filament-user
```

###### Vite
```
$ npm run dev
```

###### Server
```
$ php artisan serve
```

###### Login
```
# email => test@test.com
# password => password1
```
