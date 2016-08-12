Melody Project
================

[![Build Status](https://travis-ci.org/KevinRaimbaud/MelodyProject.svg?branch=master)](https://travis-ci.org/KevinRaimbaud/MelodyProject)

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
 $ php bin/console server:start 0.0.0.0:8000
 ```
 
## SSH Config
Add the ssh config to your container and rebuild the project
 ```bash
 $ cp ~/.ssh/* $(pwd)/docker/php/ssh
 $ ./up build
 ```
    
    