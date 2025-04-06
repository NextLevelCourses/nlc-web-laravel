#dev docker nlc
#start docker nlc
dev-docker-nlc-start:
	docker compose -f dev.Docker-Compose.yml up -d
#stop docker nlc
dev-docker-nlc-stop:
	docker compose -f dev.Docker-Compose.yml down
#list docker nlc
dev-docker-nlc-container:
	docker compose -f dev.Docker-Compose.yml ps
#list docker images
dev-docker-nlc-images:
	docker image ls
#restart docker nlc
dev-docker-nlc-restart:
	docker compose -f dev.Docker-Compose.yml restart
#logs docker nlc
dev-docker-nlc-logs:
	docker compose -f dev.Docker-Compose.yml logs -f
#build docker nlc
dev-docker-nlc-build:
	docker compose -f dev.Docker-Compose.yml build app
#=========================================== BEGIN::exec app ============================
#exec run migration
dev-docker-nlc-migrate:
	docker compose -f dev.Docker-Compose.yml exec app php artisan migrate
#exec run migrate refresh
dev-docker-nlc-refresh:
	docker compose -f dev.Docker-Compose.yml exec app php artisan migrate:refresh
#exec run seeder
dev-docker-nlc-seed:
	docker compose -f dev.Docker-Compose.yml exec app php artisan db:seed
#exec app docker via composer install
dev-docker-nlc-composer:
	docker compose -f dev.Docker-Compose.yml exec app composer install
#=========================================== END::exec app ============================



#=========================================== app nlc ============================
#run app nlc via shell
nlc-serve:
	php artisan serve
#migrate schema
nlc-migrate:
	php artisan migrate
#seed database
nlc-seed:
	php artisan db:seed
#refresh schema and seed
nlc-refresh:
	php artisan migrate:refresh
	php artisan db:seed
#rollback schema
nlc-rollback:
	php artisan migrate:rollback
#generate key
nlc-key-generate:
	php artisan key:generate
