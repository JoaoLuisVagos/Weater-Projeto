<?php
// Exemplo de configuração do autoload do Composer
require_once '../vendor/autoload.php';

// Carregue o arquivo .env se existir
if (file_exists(__DIR__ . '/../.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();
}

// Configurações globais (Exemplo: banco de dados)
$databaseConfig = [
    'host' => $_ENV['DB_HOST'],
    'database' => $_ENV['DB_DATABASE'],
    'username' => $_ENV['DB_USERNAME'],
    'password' => $_ENV['DB_PASSWORD'],
];
