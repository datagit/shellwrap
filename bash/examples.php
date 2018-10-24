#!/usr/bin/env php
<?php
require_once __DIR__ . '/../vendor/autoload.php';

use MrRio\ShellWrap as sh;

sh::tail('-f /var/log/php.log', function($in) {
    echo "\033[32m" . date('Y-m-d H:i:s') . "\033[39m " . $in;
//    echo "dmd : " .$in;
});