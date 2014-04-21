<?php

require_once __DIR__ . '/SplClassLoader.php';

$classLoader = new SplClassLoader('Dropbox', dirname(__FILE__) . '/lib');
$classLoader->register();
