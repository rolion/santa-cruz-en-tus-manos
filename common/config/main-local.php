<?php
return [
    'components' => [
        'mongodb' => [
                'class' => '\yii\mongodb\Connection',
                //'dsn' => 'mongodb://@localhost:27017/mongotestdb',
                'dsn'=> 'mongodb://192.168.100.172/database?connectTimeoutMS=300000',
                'defaultDatabaseName' => 'mymongodb',
            ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
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
