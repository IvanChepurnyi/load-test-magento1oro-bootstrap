<?php

$shellDirectory = realpath(dirname($_SERVER['SCRIPT_FILENAME']));

require_once $shellDirectory . DIRECTORY_SEPARATOR . 'abstract.php';
require_once dirname($shellDirectory) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Mage.php';

Mage::app('admin');

echo Mage::getSingleton('varnishcache/vcl')->export(
    __DIR__ . '/default_4.1.vcl'
);
