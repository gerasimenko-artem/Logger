<?php

require __DIR__ . '/../vendor/autoload.php';

use Logger\FileWriter;
use Logger\SimpleFormatter;
use Logger\Logger;

// Создаём экземпляр SimpleFormatter с заданным форматом
$formatter = new SimpleFormatter('[{date}] [{level}] {message} {context}');

// Создаём экземпляр FileWriter с указанием пути к файлу логов и форматтера
$writer = new FileWriter(__DIR__ . '/app.log', $formatter);

// Создаём экземпляр Logger, передавая в конструктор врайтер и форматтер
$logger = new Logger($writer, $formatter);

// Логируем различные сообщения
$logger->info('This is an info message', ['user' => 'John Doe']);
$logger->error('This is an error message', ['exception' => 'SomeException']);

echo "Logs have been written to app.log\n";
