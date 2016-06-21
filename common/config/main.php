<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'name' => 'S-RUN',
    'timeZone'=>'Asia/Shanghai',
	'language' => 'zh-CN',
	
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		'formatter' => [
            'dateFormat' => 'yyyy年MM月dd日',
            'datetimeFormat' => 'yyyy-MM-dd H:mm:ss',
            'decimalSeparator' => ',',
            'thousandSeparator' => ' ',
            'currencyCode' => 'CNY'
        ],
    ],
];
