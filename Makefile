dev:
	docker-compose up app db

test:
	docker-compose -f docker-compose.yml up --abort-on-container-exit --exit-code-from app

ci:
	docker-compose -f docker-compose.yml up --abort-on-container-exit

install:
	make -C ansible install

deploy:
	make -C ansible deploy

rollback:
	make -C ansible rollback

inventory:
	make -C ansible inventory

encrypt:
	ansible-vault encrypt --ask-vault-password ansible/group_vars/webservers/vault.yml

decrypt:
	ansible-vault decrypt --ask-vault-password ansible/group_vars/webservers/vault.yml
