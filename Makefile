#!make

dev :
	@php artisan optimize
	@composer dumpautoload -o
prod:
	@php artisan optimize
	@composer dumpautoload -o
	@composer install --optimize-autoloader --no-dev
	@php artisan config:cache
	@php artisan route:cache
	@php artisan view:cache