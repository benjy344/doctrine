<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once 'vendor/autoload.php';

// DB connection configuration
$dbParams = array(
    'host'     => '127.0.0.1',
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => 'root',
    'dbname'   => 'formation',
);

$config = Setup::createYAMLMetadataConfiguration([realpath(__DIR__."/mappings")], /* isDevMode */ true);

$em = EntityManager::create($dbParams, $config);