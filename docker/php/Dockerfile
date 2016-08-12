FROM php:7.0.8-fpm

# Right access
RUN usermod -u 1000 www-data

# Install Packages
RUN apt-get update && apt-get install -y vim zsh git zlib1g-dev libicu-dev
RUN docker-php-ext-install pdo pdo_mysql mysqli zip mbstring bcmath intl opcache calendar pcntl

RUN git config --global core.excludesfile '~/.gitignore_global'

# Instal Oh my Zsh
RUN bash -c "$(curl -fsSL https://raw.github.com/robbyrussell/oh-my-zsh/master/tools/install.sh)"
RUN sed -i -- 's/robbyrussell/wezm+/g' /root/.zshrc # Other awesome theme: random kafeitu sonicradish wezm+
RUN echo "plugins=(symfony2)" >> ~/.zshrc

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

# Install the Symfony Installer
RUN curl -LsS http://symfony.com/installer -o /usr/local/bin/symfony
RUN chmod a+x /usr/local/bin/symfony

# PHP Deployer
RUN curl -LO http://deployer.org/deployer.phar
RUN mv deployer.phar /usr/local/bin/dep
RUN chmod +x /usr/local/bin/dep

# PHP CS Fixer
RUN curl -L https://github.com/FriendsOfPHP/PHP-CS-Fixer/releases/download/v1.11.6/php-cs-fixer.phar -o php-cs-fixer
RUN chmod a+x php-cs-fixer
RUN mv php-cs-fixer /usr/local/bin/php-cs-fixer

# PHP Unit
RUN curl https://phar.phpunit.de/phpunit.phar -L -o phpunit.phar
RUN chmod +x phpunit.phar
RUN mv phpunit.phar /usr/local/bin/phpunit

#NodeJS Lib
RUN apt-get install -y nodejs nodejs-legacy npm
RUN npm install -g bower
RUN npm install -g gulp-cli
RUN npm install -g grunt-cli
RUN npm install -g ungit

# Add Config
ADD php.ini /usr/local/etc/php/conf.d/
ADD vim/.vimrc /root
ADD git/.gitignore_global /root

# SSh Config
ADD ssh /root/.ssh
ADD ssh /root/.ssh
RUN if [ -f ~/.ssh/id_rsa ]; then chmod 600 ~/.ssh/id_rsa; fi
RUN if [ -f ~/.ssh/id_rsa.pub ]; then chmod 600 ~/.ssh/id_rsa.pub; fi
ADD ssh.sh /ssh.sh
RUN chmod 777 /ssh.sh

# ENTRYPOINT
ADD entrypoint.sh /entrypoint.sh
RUN chmod 777 /entrypoint.sh