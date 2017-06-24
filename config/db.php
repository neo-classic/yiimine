<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=database',
    'username' => 'username',
    'password' => 'password',
    'charset' => 'utf8',
    'enableQueryCache' => true,
    'enableSchemaCache' => true,
    'queryCacheDuration' => 3600 * 24,
];
