Melody Project
================

[![Build Status](https://travis-ci.org/KevinRaimbaud/MelodyProject.svg?branch=master)](https://travis-ci.org/KevinRaimbaud/MelodyProject)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/6bf0a17f-525c-454a-bee6-2e41918831a0/mini.png)](https://insight.sensiolabs.com/projects/6bf0a17f-525c-454a-bee6-2e41918831a0)

A Symfony3 starter with the most popular WebMelody Bundles.

## Build the Docker environment
    
```bash
# When you need to build the projecy for the first time
$ ./up build
```

## Install the project
    
```bash
# Install all dependencies of the symfony project
$ composer install
```

## Launch the app
 
 ```bash
 $ sf server:start 0.0.0.0:8000
 ```
 
## SSH Config
Add the ssh config to your container and rebuild the project
 ```bash
 $ cp ~/.ssh/* $(pwd)/docker/php/ssh
 $ ./up build
 $ eval $(ssh-agent) // Started the SSH agent
 $ ssh-add           // Add your private key to it
 ```
    
## Run test in the Docker container
 ```bash
 $ phpunit
 ```
    
## Run PHP CS Fixer in the Docker container
 ```bash
 $ php-cs-fixer fix src/
 ```
