dev:
	docker-compose up app db

test:
	docker-compose -f docker-compose.yml up --abort-on-container-exit --exit-code-from app

ci:
	docker-compose -f docker-compose.yml up --abort-on-container-exit

install:
	make -C ansible install

deploy:
	make -C ansible deploy -e "image_version=$(VERSION)"

rollback:
	make -C ansible rollback -e rollback_batch=$(ROLLBACK_BATCH)"


inventory:
	make -C ansible inventory

create_env:
	make -C ansible create_env

encrypt:
	ansible-vault encrypt --ask-vault-password ansible/group_vars/webservers/vault.yml

decrypt:
	ansible-vault decrypt --ask-vault-password ansible/group_vars/webservers/vault.yml
