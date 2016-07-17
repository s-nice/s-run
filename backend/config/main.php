<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'language'=>'zh-CN',
    'bootstrap' => ['log'],   
    'modules' => [
        'admin' => [
            'class' => 'mdm\admin\Module',       
        ],
		'redactor' => 'yii\redactor\RedactorModule',
        'treemanager' =>  [
            'class' => '\kartik\tree\Module',
            // other module settings, refer detailed documentation
        ]
    ],
    
    'aliases' => [
        '@mdm/admin' => '@vendor/mdmsoft/yii2-admin',
    ],
    
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
        ]
    ],
    
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['guest'],
        ],
        

        'urlManager' => [
            'enablePrettyUrl' => true,
            //'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [  
                ['class' => 'yii\rest\UrlRule', 'controller' => 'api'],  
             ], 
        ],
        
        'view' => [
            'theme' => [
                'pathMap' => ['@backend/views' => '@backend/themes/quirk/views'],
                'baseUrl' => '@web/themes/quirk',
            ],
        ],

    ],
    'params' => $params,
];
