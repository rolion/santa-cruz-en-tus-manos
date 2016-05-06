<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
		'gii1' => [
			'class' => 'yii\gii\Module',
			    'generators' => [
			        'mongoDbModel' => [
			                'class' => 'yii\mongodb\gii\model\Generator'
			    ]
			],
		],
	]
];
