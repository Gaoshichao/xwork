<?php
/**
 * Created by PhpStorm.
 * User: canyuanc
 * Date: 16/7/13
 * Time: 上午11:23
 */

//当前目录
define('ROOT_PATH', __DIR__);

//项目目录
define('APP_PATH', ROOT_PATH . '/Application');

//系统目录
//define('SYSTEM_PATH', ROOT_PATH . '/System');
define('SYSTEM_PATH', '/Users/canyuanc/php_project/open_source/System');

//环境(development or product)
define('ENV', 'development');

include_once SYSTEM_PATH . '/Autoload.php';

Autoload::startAutoLoad();
\System\Xwork::start();

