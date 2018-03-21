## A one-command self-hosted cloud/suite

- Requires Ansible 1.2 or newer
- Expects Debian Stretch 9.x hosts

Then run the playbook, like this:

	ansible-playbook -i hosts site.yml

The playbooks will configure MariaDB, Nginx, and PHP-FPM.
