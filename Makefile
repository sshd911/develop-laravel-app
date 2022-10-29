#!make

# develop command
dev :
	@php artisan optimize
	@composer dumpautoload -o

# production command
prod:
	@php artisan optimize
	@composer dumpautoload -o
	@composer install --optimize-autoloader --no-dev
	@php artisan config:cache
	@php artisan route:cache
	@php artisan view:cache

# setup command
install:
	@npm install
	@composer install
	@php artisan migrate
	@php artisan db:seed
	@php artisan key:generate
	@npm run dev
