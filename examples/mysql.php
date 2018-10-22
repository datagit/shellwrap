#!/usr/bin/env php
<?php
require_once __DIR__ . '/../vendor/autoload.php';

use MrRio\ShellWrap as sh;

echo sh::mysql(['h' => '127.0.0.1', 'u' => 'root', 'database' => 'laravel_db_1', 'e' => 'show tables; SELECT * FROM users;']);

