<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        /*'authManager' => [
                'class' => 'yii\rbac\PhpManager',
                'defaultRoles' => ['user','moder','admin'], //здесь прописываем роли
                //зададим куда будут сохраняться наши файлы конфигураций RBAC
                'itemFile' => '@common/components/rbac/items.php',
                'assignmentFile' => '@common/components/rbac/assignments.php',
                'ruleFile' => '@common/components/rbac/rules.php'
        ],*/
        'user' => [
            'class' => 'webvimark\modules\UserManagement\components\UserConfig',
            'enableAutoLogin' => true,    
            /*'on afterLogin' => function($event) {
                    \webvimark\modules\UserManagement\models\UserVisitLog::newVisitor($event->identity->id);
                }*/
        ],
    ],
    

];
