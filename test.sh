#!/bin/bash

# Mise à jour du système
sudo apt-get update
sudo apt-get upgrade -y

# Installation de Nginx
sudo apt install nginx -y
sudo systemctl enable nginx
sudo ufw allow 'Nginx Full'
sudo ufw --force enable

sudo tee /etc/nginx/sites-available/wordpress <<EOF
server {
    listen 80;
    server_name localhost;

    root /var/www/html;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$args;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php8.0-fpm.sock;
    }
}
EOF

# Installation de MariaDB (MySQL)
sudo apt install mariadb-server -y
# Configuration des réponses pour mysql-server
echo "mysql-server mysql-server/root_password password root" | sudo debconf-set-selections
echo "mysql-server mysql-server/root_password_again password root" | sudo debconf-set-selections


# Sécurisation de la base de données MySQL
sudo mysql_secure_installation <<EOF

y
secret
secret
y
y
y
y
EOF

# Installation de PHP8
sudo apt install software-properties-common -y
sudo add-apt-repository ppa:ondrej/php -y
sudo apt-get update
sudo apt install php8.0 -y
sudo apt install php8.0-fpm -y
sudo apt install php8.0-mysql -y
sudo apt install php8.0-gd -y
sudo apt install php8.0-curl -y

# Installation de WordPress (à personnaliser)
sudo mkdir -p /var/www/html
sudo chown www-data:www-data /var/www/html
cd /var/www/html
sudo wget https://wordpress.org/latest.tar.gz
sudo tar -xvzf latest.tar.gz
sudo mv wordpress/* .
sudo rm -rf wordpress
sudo rm -f latest.tar.gz
sudo cp wp-config-sample.php wp-config.php
sudo nano wp-config.php
# Vous devrez configurer wp-config.php avec les paramètres de base de données appropriés.

# Redémarrage des services
sudo systemctl restart nginx
sudo systemctl restart php8.0-fpm

# Redémarrage de MariaDB si nécessaire
sudo systemctl restart mariadb
