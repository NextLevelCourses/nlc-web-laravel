#=========================================== BEGIN::exec docker ============================
docker-nlc-start:
	docker compose -f dev.Docker-Compose.yml up -d
#stop docker nlc
docker-nlc-stop:
	docker compose -f dev.Docker-Compose.yml down
#list docker nlc
docker-nlc-container:
	docker compose -f dev.Docker-Compose.yml ps
#list docker images
docker-nlc-images:
	docker image ls
#restart docker nlc
docker-nlc-restart:
	docker compose -f dev.Docker-Compose.yml restart
#logs docker nlc
docker-nlc-logs:
	docker compose -f dev.Docker-Compose.yml logs -f
#build docker nlc
docker-nlc-build:
	docker compose -f dev.Docker-Compose.yml build app
#=========================================== END::exec docker ============================

#=========================================== BEGIN::exec docker app:development ============================
#exec run migrate only
dev-docker-nlc-migrate:
	docker compose -f dev.Docker-Compose.yml exec app php artisan migrate
dev-docker-nlc-migrate-rollback:
	docker compose -f dev.Docker-Compose.yml exec app php artisan migrate:rollback
#exec run migrate refresh
dev-docker-nlc-refresh:
	docker compose -f dev.Docker-Compose.yml exec app php artisan migrate:refresh
#exec run seeder
dev-docker-nlc-seed:
	docker compose -f dev.Docker-Compose.yml exec app php artisan db:seed
#exec app docker via composer install
dev-docker-nlc-composer:
	docker compose -f dev.Docker-Compose.yml exec app composer install
#=========================================== END::exec docker app:development ============================



#=========================================== BEGIN::exec docker app:production ============================
#exec run migrate only
prod-docker-nlc-migrate:
	docker compose -f prod.Docker-Compose.yml exec app php artisan migrate
prod-docker-nlc-migrate-rollback:
	docker compose -f prod.Docker-Compose.yml exec app php artisan migrate:rollback
#exec run migrate refresh
prod-docker-nlc-refresh:
	docker compose -f prod.Docker-Compose.yml exec app php artisan migrate:refresh
#exec run seeder
prod-docker-nlc-seed:
	docker compose -f prod.Docker-Compose.yml exec app php artisan db:seed
#exec app docker via composer install
prod-docker-nlc-composer:
	docker compose -f prod.Docker-Compose.yml exec app composer install
#=========================================== END::exec docker app:production ============================



#=========================================== BEGIN::exec local app ============================
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
#=========================================== END::exec local app ============================