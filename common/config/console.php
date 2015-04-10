<?php
return [
  'components' => [
        /*'authManager' => [
            'class' => 'yii\rbac\PhpManager',
        ],*/
    ],
  'modules'=>[
        'user-management' => [
            'class' => 'webvimark\modules\UserManagement\UserManagementModule',
        ],
    ],
]
?>