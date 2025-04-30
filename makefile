
#=========================================== BEGIN::exec docker app:development ============================
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

#================================================== migration ========================================
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
prod-docker-nlc-start:
	docker compose -f prod.Docker-Compose.yml up -d
#stop docker nlc
prod-docker-nlc-stop:
	docker compose -f prod.Docker-Compose.yml down
#list docker nlc
prod-docker-nlc-container:
	docker compose -f prod.Docker-Compose.yml ps
#list docker images
prod-docker-nlc-images:
	docker image ls
#restart docker nlc
prod-docker-nlc-restart:
	docker compose -f prod.Docker-Compose.yml restart
#logs docker nlc
prod-docker-nlc-logs:
	docker compose -f prod.Docker-Compose.yml logs -f
#build docker nlc
prod-docker-nlc-build:
	docker compose -f prod.Docker-Compose.yml build app

#===================================================== migration ===========================================
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
	php artisan db:seed
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
nlc-config-refresh:
	php artisan config:clear
	php artisan config:cache
	php artisan optimize
#=========================================== END::exec local app ============================