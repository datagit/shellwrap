#!/usr/bin/env php
<?php
require_once __DIR__ . '/../vendor/autoload.php';

use MrRio\ShellWrap as sh;

$sh = new sh();

try {
    $curl = $sh->curl('https://github.com/datagit/shellwrap/blob/master/README.md');
    $grep = $sh->grep('ShellWrap', $curl);
    echo "match\n";
    echo $grep;
} catch (Exception $e) {
    #echo $e->getMessage();
    #echo $e->getCode();
    echo "no match\n";
}
