serve:
	docker exec -it laravel58 php artisan serve --host=0.0.0.0 --port=8000

bash:
	docker exec -it laravel58 bash

test:
	docker exec -it laravel58 php vendor/bin/phpunit

migrate:
	docker exec -it laravel58 php artisan migrate

seed:
	docker exec -it laravel58 php artisan db:seed

served:
	@docker exec -d laravel58 php artisan serve --host=0.0.0.0 --port=8000

serve-stop:
	@docker exec laravel58 pkill -f "php artisan serve"
