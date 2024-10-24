inventory:
	ansible-playbook -i inventory.ini -v create_inventory.yml

create_env:
	ansible-playbook create_env.yml --vault-password-file vault_password 

deploy:
	ansible-playbook playbook.yml --vault-password-file vault_password -i inventory.ini -e "image_version=$(image_version)"

rollback:
	ansible-playbook playbook_rollback.yml --vault-password-file vault_password -i inventory.ini

encrypt:
	ansible-vault encrypt --ask-vault-password group_vars/webservers/vault.yml

decrypt:
	ansible-vault decrypt --ask-vault-password group_vars/webservers/vault.yml
