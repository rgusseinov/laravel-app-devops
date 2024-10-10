dev:
	docker-compose up

test:
	docker-compose -f docker-compose.yml up --abort-on-container-exit --exit-code-from app

ci:
	#docker-compose -f docker-compose.yml up --abort-on-container-exit
	docker-compose run --rm app php artisan test
