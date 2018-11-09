<?php

include_once "vendor/autoload.php";
//require_once 'common/Darren.php';
//require_once 'common/Since.php';
//require_once 'lib/Darren.php';
//require_once 'lib/Since.php';
//require_once 'project/Darren.php';
//require_once 'src/Darren.php';
//require_once 'Darren.php';

src\darren\Darren::testAutoload();
project\darren\Darren::testAutoload();
common\darren\Darren::testAutoload();
common\since\Since::testAutoload();
\lib\darren\Darren::testAutoload();
\lib\since\Since::testAutoload();
die;


/*
//当调用不存在的类时，系统自动调用__autolaod()查找
function __autolaod($class)
{
    $file = $class . '.php';
    if (is_file($file)) {
        require_once($file);
    }
}

function loader($class)
{
    $file = $class . '.php';
    if (is_file($file)) {
        require_once($file);
    }
}
spl_autoload_register('loader');
*/

Darren::testAutoload();

