<?php

$params = file_exists(__DIR__ . '/' . THEME_NAME . 'Params.php') ? include(__DIR__ . '/' . THEME_NAME . 'Params.php') : [];

$commonParams = [
    'adminEmail' => '56325162@qq.com',
    'errorEmail' => [
        '565325162@qq.com'
    ],
    //权限
    'role' => [
        ROLE_ADMIN => '管理员',
    ]
];

return array_merge($commonParams, $params);
