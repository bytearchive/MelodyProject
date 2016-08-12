<?php

require 'vendor/deployer/deployer/recipe/symfony.php';

server('dev', 'localhost')
    ->user('root')
    ->password('root')
    ->env('deploy_path', '/var/www/html')
    ->env('env', 'dev')
    ->stage('development');

server('preprod', 'local.dev')
    ->user('root')
    ->password('root')
    ->env('deploy_path', '/var/www/html')
    ->env('env', 'preprod')
    ->stage('preproduction');

server('prod', 'local.dev')
    ->user('root')
    ->password('root')
    ->env('deploy_path', '/var/www/html')
    ->env('env', 'prod')
    ->stage('production');

// Specify the repository from which to download your project's code.
// The server needs to have git installed for this to work.
// If you're not using a forward agent, then the server has to be able to clone
// your project from this repository.
set('repository', 'git@bitbucket.org:kraim88/symfony.git');
