<?php
$params = require(__DIR__ . '/params.php');
$config = [
    'id' => 'm.idaxuebao.com',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'defaultRoute' => 'index',
    'name' => '大学宝手机网页',
    'components' => [
        'request' => [
            'cookieValidationKey' => 'cfda40a3d3a1073d7e77281f336fa41ef68d69b5',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require_once(__DIR__ . '/db.php'),
        'urlManager' => array(
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        	'suffix' => '.html',
            'rules' => require_once __DIR__.'/rules.php',
        ),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['192.168.177.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
