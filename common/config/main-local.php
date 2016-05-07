<?php
return [
    'components' => [
        'mongodb' => [
                'class' => '\yii\mongodb\Connection',
                //'dsn' => 'mongodb://@localhost:27017/mongotestdb',
                'dsn'=> 'mongodb://localhost/database?connectTimeoutMS=300000',
                'defaultDatabaseName' => 'datahub',
            ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=hackaton',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
