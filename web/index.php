<?php
// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
$appDir = dirname(__DIR__);
require("{$appDir}/vendor/autoload.php");
require("{$appDir}/vendor/yiisoft/yii2/Yii.php");

$config = require("{$appDir}/config/web.php");

(new yii\web\Application($config))->run();
