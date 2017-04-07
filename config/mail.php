<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/6
 * Time: 14:48
 */


if(YII_ENV_DEV){
    $emails = [
        'basic' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => EMAIL_SERVICE,
                'username' => EMAIL_USER,
                'password' => EMAIL_PWD,
                'port' => EMAIL_PORT,
            ],
        ]
    ];

    return isset($emails[THEME_NAME]) ? $emails[THEME_NAME] : [];
}

$emails = [
    'basic' => [
        'class' => 'yii\swiftmailer\Mailer',
        'useFileTransport' => false,
        'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => EMAIL_SERVICE,
            'username' => EMAIL_USER,
            'password' => EMAIL_PWD,
            'port' => EMAIL_PORT,
        ],
    ],
];

return isset($emails[THEME_NAME]) ? $emails[THEME_NAME] : [];

