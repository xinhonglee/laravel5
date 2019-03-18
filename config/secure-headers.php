<?php

return [
    // Toggles error reporting, see https://github.com/aidantwoods/SecureHeaders/wiki/errorReporting
    'errorReporting' => true,

    // Safe mode
    'safeMode' => false,

    // HSTS Strict-Transport-Security
    'hsts' => [
        'enabled' => true,
    ],

    // Content Security Policy
    'csp' => [
        'default' => 'self',
        'script-src' => [
            'self',
            'cdn.ampproject.org'
        ],
        'connect-src' => [
            'self',
            'cdn.ampproject.org',
            'www.googletagmanager.com',
            'amp-error-reporting.appspot.com'
        ],
        'style-src' => [
            'self',
            'unsafe-inline', // Allow inline styles
            'https://fonts.googleapis.com', // Allow stylesheets from Google Fonts
        ],
        'img-src' => [
            '*', // Allow images from anywhere
        ],
        'media-src'=> [
            '*', // Allow images from anywhere
        ],
        'worker-src' => [
          'self',
          'blob:',
          'cdn.ampproject.org'
        ]
    ],
];