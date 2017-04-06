<?php

$params = file_exists(__DIR__ . '/' . THEME_NAME . 'Params.php') ? include(__DIR__ . '/' . THEME_NAME . 'Params.php') : [];

$commonParams = [
    'adminEmail' => '56325162@qq.com',
];

return array_merge($commonParams, $params);
