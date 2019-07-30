## A one-command self-hosted cloud/suite

- Requires Ansible 1.2 or newer
- Expects Debian Stretch 9.x hosts

Then run the playbook, like this:

	ansible-playbook -i hosts playbook.yml

The playbooks will configure MariaDB, Nginx, and PHP-FPM.

### Fully testable in a Virtual Machine:
Ensure you have the following software installed on your host system:
- Virtualbox
- Vagrant

#### Easy-access links for Vagrant testing:
https://privacy.box:4430  
https://wallabag.privacy.box:4430  
https://music.privacy.box:4430
https://jackett.privacy.box:4430  
https://vcs.privacy.box:4430  
https://finance.privacy.box:4430  
https://phpmyadmin.privacy.box:4430  

Example `/etc/hosts` file:
```
127.0.0.1 privacy.box
127.0.0.1 wallabag.privacy.box
127.0.0.1 music.privacy.box
127.0.0.1 matrix.privacy.box
127.0.0.1 chat.privacy.box
127.0.0.1 jackett.privacy.box
127.0.0.1 vcs.privacy.box
127.0.0.1 finance.privacy.box
127.0.0.1 phpmyadmin.privacy.box
```
