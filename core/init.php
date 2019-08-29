<?php

// Include config
require_once 'config/config.php';
require_once 'helpers/system_helper.php';

// Autoloader!!
function autoLoader($className)
{
    require_once 'lib/' . $className . '.php';
}

// Since php ver 7.2-> use spl_autoloader_register
spl_autoload_register('autoLoader');