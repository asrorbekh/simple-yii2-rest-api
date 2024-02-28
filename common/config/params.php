<?php
return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName' => 'Example.com mailer',
    'user.passwordResetTokenExpire' => 3600,
    'user.passwordMinLength' => 8,
    'yiisoft/yii-swagger' => [
        'annotation-paths' => [
            '@src/Controller' // Directory where annotations are used
        ],
        'cacheTTL' => 60 // Enables caching and sets TTL, "null" value means infinite cache TTL.
    ],
];
