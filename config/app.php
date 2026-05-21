<?php
/**
 * Основная конфигурация приложения
 */

return [
    'name' => 'CMS System',
    'description' => 'Система управления контентом',
    'keywords' => 'cms, content, management',
    'timezone' => $_ENV['APP_TIMEZONE'] ?? 'UTC',
    'debug' => filter_var($_ENV['APP_DEBUG'] ?? false, FILTER_VALIDATE_BOOLEAN),
    'log_level' => $_ENV['LOG_LEVEL'] ?? 'debug',
    
    // Настройки безопасности
    'security' => [
        'hash_algo' => 'bcrypt',
        'session_lifetime' => 3600,
        'session_secure' => filter_var($_ENV['SESSION_SECURE'] ?? true, FILTER_VALIDATE_BOOLEAN), // true в production
        'session_http_only' => true,
        'session_same_site' => 'Strict',
    ],
    
    // Параметры загрузки файлов
    'uploads' => [
        'max_size' => 50 * 1024 * 1024, // 50MB
        'allowed_mimes' => [
            'image/jpeg',
            'image/png',
            'image/gif',
            'image/webp',
            'application/pdf',
            'video/mp4',
            'video/webm',
        ],
        'allowed_extensions' => ['jpg', 'jpeg', 'png', 'gif', 'webp', 'pdf', 'mp4', 'webm'],
    ],
    
    // Пагинация
    'pagination' => [
        'per_page' => 10,
    ],
];
