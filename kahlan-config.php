<?php

use Cake\Model\ConnectionManager;

// Fix calls to redirect()
define('FULL_BASE_URL', 'http://test.invityou.com');

include 'app/webroot/kahlan.php';

restore_error_handler();
restore_exception_handler();

// Remove db connection
ConnectionManager::drop('default');

use Kahlan\Filter\Filter;

$commandLine = $this->commandLine();

$commandLine->set('spec', 'tests');
$commandLine->set('grep', '*Test.php');
$commandLine->set('src', ['app/Controller', 'app/Model']);
