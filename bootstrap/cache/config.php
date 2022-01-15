<?php return array (
  'app' => 
  array (
    'name' => 'Ticky',
    'env' => 'production',
    'debug' => false,
    'url' => 'http://soporte.recargaloya.com',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:VmtiRGZqZFlkcGtpT1Y2NVpTZ3FtYlJLSFludGlEMVg=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'App\\Extended\\ExtendedTranslationServiceProvider',
      21 => 'Illuminate\\Validation\\ValidationServiceProvider',
      22 => 'Illuminate\\View\\ViewServiceProvider',
      23 => 'Spatie\\Permission\\PermissionServiceProvider',
      24 => 'App\\Providers\\AppServiceProvider',
      25 => 'App\\Providers\\AuthServiceProvider',
      26 => 'App\\Providers\\EventServiceProvider',
      27 => 'App\\Providers\\RouteServiceProvider',
      28 => 'App\\Providers\\MailConfigServiceProvider',
      29 => 'App\\Providers\\ConfigServiceProvider',
      30 => 'SocialiteProviders\\Manager\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
    ),
  ),
  'app_list_permissions' => 
  array (
    'tickets' => 
    array (
      0 => 'create_ticket',
      1 => 'edit_ticket',
      2 => 'update_ticket',
      3 => 'view_ticket',
      4 => 'view_any_ticket',
      5 => 'close_ticket',
      6 => 'delete_ticket',
      7 => 'delete_any_ticket',
      8 => 'permanently_delete_ticket',
      9 => 'manage_tickets',
      10 => 'reassign_ticket',
      11 => 'update_any_ticket',
      12 => 'reply_ticket',
      13 => 'create_ticket_reply',
      14 => 'create_any_ticket_reply',
      15 => 'update_ticket_reply',
      16 => 'delete_ticket_reply',
      17 => 'delete_any_ticket_reply',
      18 => 'update_any_ticket_reply',
    ),
    'categories' => 
    array (
      0 => 'manage_categories',
      1 => 'create_category',
      2 => 'edit_category',
      3 => 'delete_category',
      4 => 'view_category',
      5 => 'view_any_category',
      6 => 'delete_any_category',
      7 => 'update_any_category',
    ),
    'users' => 
    array (
      0 => 'create_user',
      1 => 'update_user',
      2 => 'delete_user',
      3 => 'view_user',
      4 => 'viewany_user',
      5 => 'permanently_delete_user',
      6 => 'manage_customers',
      7 => 'create_customer',
      8 => 'update_customer',
      9 => 'manage_employees',
      10 => 'create_employee',
      11 => 'update_employee',
    ),
    'roles' => 
    array (
      0 => 'assign_role',
      1 => 'create_role',
      2 => 'edit_role',
      3 => 'delete_role',
      4 => 'view_role',
      5 => 'permanently_delete_role',
      6 => 'assign_permissions',
      7 => 'manage_acl',
    ),
    'articles' => 
    array (
      0 => 'manage_articles',
      1 => 'create_article',
      2 => 'update_article',
      3 => 'delete_article',
      4 => 'permanently_delete_article',
      5 => 'unpublish_article',
      6 => 'publish_article',
      7 => 'view_any_article',
      8 => 'delete_any_article',
      9 => 'update_any_article',
    ),
    'saved_reply' => 
    array (
      0 => 'create_saved_reply',
      1 => 'view_saved_reply',
      2 => 'edit_saved_reply',
      3 => 'delete_saved_reply',
    ),
    'modules' => 
    array (
      0 => 'upload_module',
      1 => 'list_modules',
      2 => 'manage_modules',
    ),
    'insights' => 
    array (
      0 => 'view_insights',
      1 => 'view_all_insights',
    ),
    'other' => 
    array (
      0 => 'add_reply_signature',
      1 => 'view_error_logs',
      2 => 'delete_error_log',
      3 => 'update_settings',
      4 => 'view_settings',
      5 => 'update_application',
      6 => 'view_customer_purchase',
      7 => 'update_customer_purchase',
      8 => 'admin_only',
    ),
  ),
  'app_list_roles' => 
  array (
    'roles' => 
    array (
      'admin' => 
      array (
        0 => 'create_ticket',
        1 => 'edit_ticket',
        2 => 'update_ticket',
        3 => 'view_ticket',
        4 => 'view_any_ticket',
        5 => 'close_ticket',
        6 => 'delete_ticket',
        7 => 'delete_any_ticket',
        8 => 'permanently_delete_ticket',
        9 => 'manage_tickets',
        10 => 'reassign_ticket',
        11 => 'update_any_ticket',
        12 => 'create_ticket_reply',
        13 => 'create_any_ticket_reply',
        14 => 'update_ticket_reply',
        15 => 'delete_ticket_reply',
        16 => 'delete_any_ticket_reply',
        17 => 'manage_categories',
        18 => 'create_category',
        19 => 'edit_category',
        20 => 'delete_category',
        21 => 'view_category',
        22 => 'view_any_category',
        23 => 'delete_any_category',
        24 => 'update_any_category',
        25 => 'create_user',
        26 => 'update_user',
        27 => 'delete_user',
        28 => 'view_user',
        29 => 'viewany_user',
        30 => 'permanently_delete_user',
        31 => 'manage_customers',
        32 => 'create_customer',
        33 => 'update_customer',
        34 => 'manage_employees',
        35 => 'create_employee',
        36 => 'update_employee',
        37 => 'assign_role',
        38 => 'create_role',
        39 => 'edit_role',
        40 => 'delete_role',
        41 => 'view_role',
        42 => 'permanently_delete_role',
        43 => 'assign_permissions',
        44 => 'manage_articles',
        45 => 'create_article',
        46 => 'update_article',
        47 => 'delete_article',
        48 => 'permanently_delete_article',
        49 => 'unpublish_article',
        50 => 'publish_article',
        51 => 'view_any_article',
        52 => 'delete_any_article',
        53 => 'update_any_article',
        54 => 'create_saved_reply',
        55 => 'view_saved_reply',
        56 => 'edit_saved_reply',
        57 => 'delete_saved_reply',
        58 => 'view_error_logs',
        59 => 'update_settings',
        60 => 'view_settings',
        61 => 'update_application',
        62 => 'view_customer_purchase',
        63 => 'update_customer_purchase',
        64 => 'admin_only',
        65 => 'upload_module',
        66 => 'list_modules',
        67 => 'manage_modules',
      ),
      'agent' => 
      array (
        0 => 'edit_ticket',
        1 => 'view_ticket',
        2 => 'close_ticket',
        3 => 'reply_ticket',
        4 => 'view_category',
        5 => 'create_ticket_reply',
        6 => 'create_saved_reply',
        7 => 'edit_saved_reply',
        8 => 'delete_saved_reply',
      ),
      'non-restricted_agent' => 
      array (
        0 => 'edit_ticket',
        1 => 'view_ticket',
        2 => 'close_ticket',
        3 => 'reply_ticket',
        4 => 'view_category',
        5 => 'create_ticket_reply',
        6 => 'create_saved_reply',
        7 => 'view_saved_reply',
        8 => 'edit_saved_reply',
        9 => 'delete_saved_reply',
        10 => 'view_customer_purchase',
      ),
      'customer' => 
      array (
        0 => 'create_ticket',
        1 => 'view_ticket',
        2 => 'close_ticket',
        3 => 'reply_ticket',
        4 => 'view_category',
        5 => 'create_ticket_reply',
      ),
    ),
  ),
  'app_list_roles_demo' => 
  array (
    'roles' => 
    array (
      'admin' => 
      array (
        0 => 'create_ticket',
        1 => 'edit_ticket',
        2 => 'update_ticket',
        3 => 'view_ticket',
        4 => 'view_any_ticket',
        5 => 'close_ticket',
        6 => 'reply_ticket',
        7 => 'update_ticket_reply',
        8 => 'update_any_ticket_reply',
        9 => 'manage_tickets',
        10 => 'reassign_ticket',
        11 => 'update_any_ticket',
        12 => 'create_ticket_reply',
        13 => 'create_any_ticket_reply',
        14 => 'manage_categories',
        15 => 'create_category',
        16 => 'view_category',
        17 => 'view_any_category',
        18 => 'view_user',
        19 => 'viewany_user',
        20 => 'manage_customers',
        21 => 'manage_employees',
        22 => 'manage_articles',
        23 => 'create_article',
        24 => 'view_any_article',
        25 => 'create_saved_reply',
        26 => 'view_saved_reply',
        27 => 'list_modules',
        28 => 'view_settings',
        29 => 'manage_acl',
        30 => 'view_insights',
        31 => 'view_all_insights',
        32 => 'view_customer_purchase',
        33 => 'update_any_ticket_reply',
        34 => 'publish_article',
      ),
      'agent' => 
      array (
        0 => 'create_ticket',
        1 => 'edit_ticket',
        2 => 'update_ticket',
        3 => 'view_ticket',
        4 => 'close_ticket',
        5 => 'reply_ticket',
        6 => 'view_category',
        7 => 'create_ticket_reply',
        8 => 'update_any_ticket_reply',
        9 => 'create_saved_reply',
      ),
      'non-restricted_agent' => 
      array (
        0 => 'edit_ticket',
        1 => 'create_ticket',
        2 => 'update_ticket',
        3 => 'view_ticket',
        4 => 'close_ticket',
        5 => 'reply_ticket',
        6 => 'view_category',
        7 => 'create_ticket_reply',
        8 => 'create_saved_reply',
        9 => 'view_saved_reply',
        10 => 'update_any_ticket_reply',
        11 => 'view_customer_purchase',
      ),
      'customer' => 
      array (
        0 => 'create_ticket',
        1 => 'view_ticket',
        2 => 'close_ticket',
        3 => 'reply_ticket',
        4 => 'view_category',
        5 => 'create_ticket_reply',
      ),
    ),
  ),
  'audit' => 
  array (
    'enabled' => true,
    'implementation' => 'OwenIt\\Auditing\\Models\\Audit',
    'user' => 
    array (
      'morph_prefix' => 'user',
      'guards' => 
      array (
        0 => 'web',
        1 => 'api',
      ),
    ),
    'resolver' => 
    array (
      'user' => 'OwenIt\\Auditing\\Resolvers\\UserResolver',
      'ip_address' => 'OwenIt\\Auditing\\Resolvers\\IpAddressResolver',
      'user_agent' => 'OwenIt\\Auditing\\Resolvers\\UserAgentResolver',
      'url' => 'OwenIt\\Auditing\\Resolvers\\UrlResolver',
    ),
    'events' => 
    array (
      0 => 'created',
      1 => 'updated',
      2 => 'deleted',
      3 => 'restored',
    ),
    'strict' => false,
    'timestamps' => false,
    'threshold' => 0,
    'driver' => 'database',
    'drivers' => 
    array (
      'database' => 
      array (
        'table' => 'audits',
        'connection' => NULL,
      ),
    ),
    'console' => false,
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'sanctum',
        'provider' => 'users',
        'hash' => false,
      ),
      'sanctum' => 
      array (
        'driver' => 'sanctum',
        'provider' => NULL,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'null',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
          'cluster' => NULL,
          'encrypted' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/home/fastbrao/soporte.recargaloya.com/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => NULL,
        'secret' => NULL,
        'region' => 'us-east-1',
        'table' => 'cache',
      ),
    ),
    'prefix' => 'laravel_cache',
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => '/home/fastbrao/soporte.recargaloya.com/database/database.sqlite',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'fastbrao_soporte_recargaloya',
        'username' => 'fastbrao_soporte_recargaloya',
        'password' => '(c;AmBmDP7aO',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'modes' => 
        array (
          0 => 'STRICT_TRANS_TABLES',
          1 => 'NO_ZERO_IN_DATE',
          2 => 'NO_ZERO_DATE',
          3 => 'ERROR_FOR_DIVISION_BY_ZERO',
          4 => 'NO_ENGINE_SUBSTITUTION',
        ),
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => '127.0.0.1',
        'port' => '5432',
        'database' => 'forge',
        'username' => 'forge',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => 'localhost',
        'port' => '1433',
        'database' => 'forge',
        'username' => 'forge',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'options' => 
      array (
        'cluster' => 'predis',
        'prefix' => 'laravel_database_',
      ),
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => 6379,
        'database' => 0,
      ),
      'cache' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => 6379,
        'database' => 1,
      ),
    ),
  ),
  'debugbar' => 
  array (
    'enabled' => false,
    'except' => 
    array (
      0 => 'telescope*',
      1 => 'horizon*',
    ),
    'storage' => 
    array (
      'enabled' => true,
      'driver' => 'file',
      'path' => '/home/fastbrao/soporte.recargaloya.com/storage/debugbar',
      'connection' => NULL,
      'provider' => '',
      'hostname' => '127.0.0.1',
      'port' => 2304,
    ),
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'error_handler' => false,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => true,
      'route' => true,
      'auth' => false,
      'gate' => true,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
      'cache' => false,
      'models' => true,
      'livewire' => true,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'backtrace_exclude_paths' => 
        array (
        ),
        'timeline' => false,
        'duration_background' => true,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => false,
        'show_copy' => false,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'timeline' => false,
        'data' => false,
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
      'cache' => 
      array (
        'values' => true,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_domain' => NULL,
    'theme' => 'auto',
    'debug_backtrace_limit' => 50,
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/home/fastbrao/soporte.recargaloya.com/storage/app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/home/fastbrao/soporte.recargaloya.com/storage/app/public',
        'url' => 'http://soporte.recargaloya.com/storage',
        'visibility' => 'public',
      ),
      'ticket' => 
      array (
        'driver' => 'local',
        'root' => '/home/fastbrao/soporte.recargaloya.com/storage/app/public/tickets',
        'url' => 'http://soporte.recargaloya.com/storage/tickets',
        'visibility' => 'public',
      ),
      'ticket_conversation' => 
      array (
        'driver' => 'local',
        'root' => '/home/fastbrao/soporte.recargaloya.com/storage/app/public/tickets/conversation',
        'url' => 'http://soporte.recargaloya.com/storage/tickets/conversation',
        'visibility' => 'public',
      ),
      'article' => 
      array (
        'driver' => 'local',
        'root' => '/home/fastbrao/soporte.recargaloya.com/storage/app/public/articles',
        'url' => 'http://soporte.recargaloya.com/storage/articles',
        'visibility' => 'public',
      ),
      'avatar' => 
      array (
        'driver' => 'local',
        'root' => '/home/fastbrao/soporte.recargaloya.com/storage/app/public/avatars',
        'url' => 'http://soporte.recargaloya.com/storage/avatars',
        'visibility' => 'public',
      ),
      'media' => 
      array (
        'driver' => 'local',
        'root' => '/home/fastbrao/soporte.recargaloya.com/storage/app/public//home/fastbrao/soporte.recargaloya.com/storage/app/public/medias',
        'url' => 'http://soporte.recargaloya.com/storage//home/fastbrao/soporte.recargaloya.com/storage/app/public/medias',
        'visibility' => 'public',
      ),
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'daily',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/home/fastbrao/soporte.recargaloya.com/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/home/fastbrao/soporte.recargaloya.com/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
    ),
  ),
  'mail' => 
  array (
    'driver' => 'sendmail',
    'host' => '',
    'port' => '587',
    'from' => 
    array (
      'address' => 'support@soporte.recargaloya.com',
      'name' => 'Soporte | RecargaloYa!',
    ),
    'encryption' => 'tls',
    'username' => '',
    'password' => '',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/home/fastbrao/soporte.recargaloya.com/resources/views/vendor/mail',
      ),
    ),
    'log_channel' => NULL,
  ),
  'media-library' => 
  array (
    'disk_name' => 'public',
    'max_file_size' => 10485760,
    'queue_name' => '',
    'media_model' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
    'remote' => 
    array (
      'extra_headers' => 
      array (
        'CacheControl' => 'max-age=604800',
      ),
    ),
    'responsive_images' => 
    array (
      'width_calculator' => 'Spatie\\MediaLibrary\\ResponsiveImages\\WidthCalculator\\FileSizeOptimizedWidthCalculator',
      'use_tiny_placeholders' => true,
      'tiny_placeholder_generator' => 'Spatie\\MediaLibrary\\ResponsiveImages\\TinyPlaceholderGenerator\\Blurred',
    ),
    'default_loading_attribute_value' => 'auto',
    'conversion_file_namer' => 'Spatie\\MediaLibrary\\Conversions\\DefaultConversionFileNamer',
    'path_generator' => 'Spatie\\MediaLibrary\\Support\\PathGenerator\\DefaultPathGenerator',
    'url_generator' => 'Spatie\\MediaLibrary\\Support\\UrlGenerator\\DefaultUrlGenerator',
    'version_urls' => false,
    'image_optimizers' => 
    array (
      'Spatie\\ImageOptimizer\\Optimizers\\Jpegoptim' => 
      array (
        0 => '--strip-all',
        1 => '--all-progressive',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Pngquant' => 
      array (
        0 => '--force',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Optipng' => 
      array (
        0 => '-i0',
        1 => '-o2',
        2 => '-quiet',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Svgo' => 
      array (
        0 => '--disable=cleanupIDs',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Gifsicle' => 
      array (
        0 => '-b',
        1 => '-O3',
      ),
    ),
    'image_generators' => 
    array (
      0 => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Image',
      1 => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Webp',
      2 => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Pdf',
      3 => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Svg',
      4 => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Video',
    ),
    'image_driver' => 'gd',
    'ffmpeg_path' => '/usr/bin/ffmpeg',
    'ffprobe_path' => '/usr/bin/ffprobe',
    'temporary_directory_path' => NULL,
    'jobs' => 
    array (
      'perform_conversions' => 'Spatie\\MediaLibrary\\Conversions\\Jobs\\PerformConversionsJob',
      'generate_responsive_images' => 'Spatie\\MediaLibrary\\ResponsiveImages\\Jobs\\GenerateResponsiveImagesJob',
    ),
  ),
  'menu' => 
  array (
    'sidebar' => 
    array (
      0 => 
      array (
        'name' => 'Dashboard',
        'order' => 1,
        'target' => '',
        'icon' => 'fas fa-fw fa-tachometer-alt',
        'route' => NULL,
        'url' => NULL,
        'vue_route' => '#/',
        'sub_items' => 
        array (
        ),
        'permissions' => 
        array (
        ),
      ),
      1 => 
      array (
        'name' => 'Home page',
        'order' => 2,
        'target' => '_blank',
        'icon' => 'far fa-fw fa-eye',
        'route' => 'frontend',
        'url' => NULL,
        'sub_items' => 
        array (
        ),
        'permissions' => 
        array (
        ),
      ),
      2 => 
      array (
        'name' => 'Tickets',
        'order' => 3,
        'target' => '',
        'icon' => 'fas fa-fw fa-ticket-alt',
        'route' => 'dashboard.tickets',
        'url' => NULL,
        'sub_items' => 
        array (
        ),
        'permissions' => 
        array (
        ),
      ),
      3 => 
      array (
        'name' => 'Articles',
        'order' => 4,
        'target' => '',
        'icon' => 'far fa-fw fa-newspaper',
        'route' => NULL,
        'url' => NULL,
        'vue_route' => '#/articles',
        'sub_items' => 
        array (
        ),
        'permissions' => 
        array (
          0 => 'manage_articles',
        ),
      ),
      4 => 
      array (
        'name' => 'Categories',
        'order' => 5,
        'target' => '',
        'icon' => 'fas fa-fw fa-folder-open',
        'route' => NULL,
        'url' => NULL,
        'vue_route' => '#/categories',
        'sub_items' => 
        array (
        ),
        'permissions' => 
        array (
          0 => 'manage_categories',
        ),
      ),
      5 => 
      array (
        'name' => 'Saved replies',
        'order' => 6,
        'target' => '',
        'icon' => 'fas fa-fw fa-reply-all',
        'route' => NULL,
        'url' => NULL,
        'vue_route' => '#/saved_replies',
        'sub_items' => 
        array (
        ),
        'permissions' => 
        array (
          0 => 'create_saved_reply',
        ),
      ),
      6 => 
      array (
        'name' => 'Customers',
        'order' => 7,
        'target' => '',
        'icon' => 'fas fa-fw fa-user',
        'route' => 'dashboard.customers',
        'url' => NULL,
        'sub_items' => 
        array (
        ),
        'permissions' => 
        array (
          0 => 'manage_customers',
        ),
      ),
      7 => 
      array (
        'name' => 'Employees',
        'order' => 8,
        'target' => '',
        'icon' => 'fas fa-fw fa-user-tie',
        'route' => 'dashboard.employees',
        'url' => NULL,
        'sub_items' => 
        array (
        ),
        'permissions' => 
        array (
          0 => 'manage_employees',
        ),
      ),
      8 => 
      array (
        'name' => 'Modules',
        'target' => '',
        'icon' => 'fas fa-boxes',
        'route' => 'dashboard.modules_manager',
        'url' => NULL,
        'sub_items' => 
        array (
        ),
        'permissions' => 
        array (
          0 => 'list_modules',
        ),
        'order' => 9,
      ),
      'settings' => 
      array (
        'name' => 'Settings',
        'label' => 'Settings',
        'order' => 10,
        'target' => '',
        'icon' => 'fas fa-fw fa-sliders-h',
        'route' => 'dashboard.settings',
        'url' => NULL,
        'permissions' => 
        array (
          0 => 'view_settings',
        ),
        'sub_items' => 
        array (
          'customizer' => 
          array (
            'name' => 'Customizer',
            'target' => '',
            'icon' => 'fas fa-palette',
            'route' => 'modules.customizer',
            'url' => '#',
            'sub_items' => 
            array (
            ),
            'permissions' => 
            array (
              0 => 'view_settings',
            ),
            'order' => 3,
          ),
        ),
      ),
      'tanslation' => 
      array (
        'name' => 'Translation',
        'target' => '',
        'icon' => 'fas fa-fw fa-language',
        'route' => 'languages.index',
        'url' => NULL,
        'sub_items' => 
        array (
        ),
        'permissions' => 
        array (
          0 => 'admin_only',
        ),
        'order' => 8,
      ),
    ),
  ),
  'modules' => 
  array (
    'namespace' => 'Modules',
    'stubs' => 
    array (
      'enabled' => false,
      'path' => '/home/fastbrao/soporte.recargaloya.com/vendor/nwidart/laravel-modules/src/Commands/stubs',
      'files' => 
      array (
        'routes/web' => 'Routes/web.php',
        'routes/api' => 'Routes/api.php',
        'views/index' => 'Resources/views/index.blade.php',
        'views/master' => 'Resources/views/layouts/master.blade.php',
        'scaffold/config' => 'Config/config.php',
        'composer' => 'composer.json',
        'assets/js/app' => 'Resources/assets/js/app.js',
        'assets/sass/app' => 'Resources/assets/sass/app.scss',
        'webpack' => 'webpack.mix.js',
        'package' => 'package.json',
      ),
      'replacements' => 
      array (
        'routes/web' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
        ),
        'routes/api' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'webpack' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'json' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'views/index' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'views/master' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
        ),
        'scaffold/config' => 
        array (
          0 => 'STUDLY_NAME',
        ),
        'composer' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'VENDOR',
          3 => 'AUTHOR_NAME',
          4 => 'AUTHOR_EMAIL',
          5 => 'MODULE_NAMESPACE',
          6 => 'PROVIDER_NAMESPACE',
        ),
      ),
      'gitkeep' => true,
    ),
    'paths' => 
    array (
      'modules' => '/home/fastbrao/soporte.recargaloya.com/Modules',
      'assets' => '/home/fastbrao/soporte.recargaloya.com/public/modules',
      'migration' => '/home/fastbrao/soporte.recargaloya.com/database/migrations',
      'generator' => 
      array (
        'config' => 
        array (
          'path' => 'Config',
          'generate' => true,
        ),
        'command' => 
        array (
          'path' => 'Console',
          'generate' => true,
        ),
        'migration' => 
        array (
          'path' => 'Database/Migrations',
          'generate' => true,
        ),
        'seeder' => 
        array (
          'path' => 'Database/Seeders',
          'generate' => true,
        ),
        'factory' => 
        array (
          'path' => 'Database/factories',
          'generate' => true,
        ),
        'model' => 
        array (
          'path' => 'Models',
          'generate' => true,
        ),
        'routes' => 
        array (
          'path' => 'Routes',
          'generate' => true,
        ),
        'controller' => 
        array (
          'path' => 'Http/Controllers',
          'generate' => true,
        ),
        'filter' => 
        array (
          'path' => 'Http/Middleware',
          'generate' => true,
        ),
        'request' => 
        array (
          'path' => 'Http/Requests',
          'generate' => true,
        ),
        'provider' => 
        array (
          'path' => 'Providers',
          'generate' => true,
        ),
        'assets' => 
        array (
          'path' => 'Resources/assets',
          'generate' => true,
        ),
        'lang' => 
        array (
          'path' => 'Resources/lang',
          'generate' => true,
        ),
        'views' => 
        array (
          'path' => 'Resources/views',
          'generate' => true,
        ),
        'test' => 
        array (
          'path' => 'Tests/Unit',
          'generate' => true,
        ),
        'test-feature' => 
        array (
          'path' => 'Tests/Feature',
          'generate' => true,
        ),
        'repository' => 
        array (
          'path' => 'Repositories',
          'generate' => false,
        ),
        'event' => 
        array (
          'path' => 'Events',
          'generate' => false,
        ),
        'listener' => 
        array (
          'path' => 'Listeners',
          'generate' => false,
        ),
        'policies' => 
        array (
          'path' => 'Policies',
          'generate' => false,
        ),
        'rules' => 
        array (
          'path' => 'Rules',
          'generate' => false,
        ),
        'jobs' => 
        array (
          'path' => 'Jobs',
          'generate' => false,
        ),
        'emails' => 
        array (
          'path' => 'Emails',
          'generate' => false,
        ),
        'notifications' => 
        array (
          'path' => 'Notifications',
          'generate' => false,
        ),
        'resource' => 
        array (
          'path' => 'Http/Resources',
          'generate' => false,
        ),
      ),
    ),
    'scan' => 
    array (
      'enabled' => true,
      'paths' => 
      array (
        0 => '/home/fastbrao/soporte.recargaloya.com/vendor/*/*',
      ),
    ),
    'composer' => 
    array (
      'vendor' => 'pandisoft',
      'author' => 
      array (
        'name' => 'Pandisoft',
        'email' => 'pandisoft.com@gmail.com',
      ),
    ),
    'cache' => 
    array (
      'enabled' => false,
      'key' => 'laravel-modules',
      'lifetime' => 60,
    ),
    'register' => 
    array (
      'translations' => true,
      'files' => 'register',
    ),
    'activators' => 
    array (
      'file' => 
      array (
        'class' => 'Nwidart\\Modules\\Activators\\FileActivator',
        'statuses-file' => '/home/fastbrao/soporte.recargaloya.com/modules_statuses.json',
        'cache-key' => 'activator.installed',
        'cache-lifetime' => 604800,
      ),
    ),
    'activator' => 'file',
    'commands' => 
    array (
      0 => 'CommandMakeCommand',
      1 => 'ControllerMakeCommand',
      2 => 'DisableCommand',
      3 => 'DumpCommand',
      4 => 'EnableCommand',
      5 => 'EventMakeCommand',
      6 => 'JobMakeCommand',
      7 => 'ListenerMakeCommand',
      8 => 'MailMakeCommand',
      9 => 'MiddlewareMakeCommand',
      10 => 'NotificationMakeCommand',
      11 => 'ProviderMakeCommand',
      12 => 'RouteProviderMakeCommand',
      13 => 'InstallCommand',
      14 => 'ListCommand',
      15 => 'ModuleDeleteCommand',
      16 => 'ModuleMakeCommand',
      17 => 'FactoryMakeCommand',
      18 => 'PolicyMakeCommand',
      19 => 'RequestMakeCommand',
      20 => 'RuleMakeCommand',
      21 => 'MigrateCommand',
      22 => 'MigrateRefreshCommand',
      23 => 'MigrateResetCommand',
      24 => 'MigrateRollbackCommand',
      25 => 'MigrateStatusCommand',
      26 => 'MigrationMakeCommand',
      27 => 'ModelMakeCommand',
      28 => 'PublishCommand',
      29 => 'PublishConfigurationCommand',
      30 => 'PublishMigrationCommand',
      31 => 'PublishTranslationCommand',
      32 => 'SeedCommand',
      33 => 'SeedMakeCommand',
      34 => 'SetupCommand',
      35 => 'UnUseCommand',
      36 => 'UpdateCommand',
      37 => 'UseCommand',
      38 => 'ResourceMakeCommand',
      39 => 'TestMakeCommand',
      40 => 'LaravelModulesV6Migrator',
    ),
    'composer-output' => false,
  ),
  'permission' => 
  array (
    'models' => 
    array (
      'permission' => 'Spatie\\Permission\\Models\\Permission',
      'role' => 'Spatie\\Permission\\Models\\Role',
    ),
    'table_names' => 
    array (
      'roles' => 'roles',
      'permissions' => 'permissions',
      'model_has_permissions' => 'model_has_permissions',
      'model_has_roles' => 'model_has_roles',
      'role_has_permissions' => 'role_has_permissions',
    ),
    'column_names' => 
    array (
      'model_morph_key' => 'model_id',
    ),
    'display_permission_in_exception' => false,
    'display_role_in_exception' => false,
    'enable_wildcard_permission' => false,
    'cache' => 
    array (
      'expiration_time' => 
      DateInterval::__set_state(array(
         'y' => 0,
         'm' => 0,
         'd' => 0,
         'h' => 24,
         'i' => 0,
         's' => 0,
         'f' => 0.0,
         'weekday' => 0,
         'weekday_behavior' => 0,
         'first_last_day_of' => 0,
         'invert' => 0,
         'days' => false,
         'special_type' => 0,
         'special_amount' => 0,
         'have_weekday_relative' => 0,
         'have_special_relative' => 0,
      )),
      'key' => 'spatie.permission.cache',
      'model_key' => 'name',
      'store' => 'default',
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => NULL,
        'secret' => NULL,
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'sanctum' => 
  array (
    'stateful' => 
    array (
      0 => 'localhost',
      1 => 'localhost:3000',
      2 => '127.0.0.1',
      3 => '127.0.0.1:8000',
      4 => '::1',
    ),
    'expiration' => NULL,
    'middleware' => 
    array (
      'verify_csrf_token' => 'App\\Http\\Middleware\\VerifyCsrfToken',
      'encrypt_cookies' => 'App\\Http\\Middleware\\EncryptCookies',
    ),
  ),
  'scout' => 
  array (
    'driver' => 'null',
    'prefix' => '',
    'queue' => true,
    'chunk' => 
    array (
      'searchable' => 500,
      'unsearchable' => 500,
    ),
    'soft_delete' => false,
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'App\\User',
      'key' => NULL,
      'secret' => NULL,
      'webhook' => 
      array (
        'secret' => NULL,
        'tolerance' => 300,
      ),
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => 525600,
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/home/fastbrao/soporte.recargaloya.com/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'ticky_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'setting_fields' => 
  array (
    'app' => 
    array (
      'title' => 'General',
      'key' => 'general',
      'desc' => 'General settings',
      'icon' => 'fas fa-sliders-h',
      'elements' => 
      array (
        0 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'app_name',
          'label' => 'App Name',
          'rules' => 'required|min:2|max:50',
        ),
        1 => 
        array (
          'type' => 'file',
          'data' => 'file',
          'name' => 'app_logo',
          'label' => 'App logo',
          'rules' => 'required',
        ),
        2 => 
        array (
          'type' => 'file',
          'data' => 'file',
          'name' => 'favicon',
          'label' => 'Favicon',
          'rules' => 'required',
        ),
        3 => 
        array (
          'type' => 'checkbox',
          'data' => 'integer',
          'name' => 'user_can_register',
          'label' => 'User can register',
          'rules' => '',
        ),
        4 => 
        array (
          'type' => 'checkbox',
          'data' => 'boolean',
          'name' => 'verify_email',
          'label' => 'Users must verify their email address',
          'rules' => '',
        ),
        5 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'admin_email',
          'label' => 'Admin email',
          'rules' => 'required',
        ),
        6 => 
        array (
          'type' => 'select',
          'data' => 'string',
          'name' => 'default_lang',
          'label' => 'Language',
          'options' => 
          array (
          ),
          'rules' => 'required',
        ),
      ),
    ),
    'Locale' => 
    array (
      'title' => 'Localization',
      'key' => 'localization',
      'desc' => 'Set your localization settings like format of Date and number etc.',
      'icon' => 'fas fa-globe',
      'elements' => 
      array (
        0 => 
        array (
          'type' => 'select',
          'data' => 'string',
          'name' => 'date_format',
          'label' => 'Date format',
          'rules' => 'required',
          'class' => 'w-auto px-2',
          'options' => 
          array (
            'm/d/Y' => '01/15/2022',
            'm.d.y' => '01.15.22',
            'j, n, Y' => '15, 1, 2022',
            'M j, Y' => 'Jan 15, 2022',
            'D, M j, Y' => 'Sat, Jan 15, 2022',
          ),
          'value' => 'm/d/Y',
        ),
        1 => 
        array (
          'type' => 'select',
          'data' => 'string',
          'name' => 'time_format',
          'label' => 'Time format',
          'rules' => 'string',
          'class' => 'w-auto px-2',
          'options' => 
          array (
            'g:i a' => '10:18 am (12-hour format)',
            'g:i:s A' => '10:18 AM (12-hour format)',
            'G:i' => '10:18 (24-hour format)',
            'h:i:s a' => '10:18:17 am (12-hour with leading zero)',
            'h:i:s A' => '10:18:17 AM',
          ),
          'value' => 'g:i a',
        ),
        2 => 
        array (
          'type' => 'select',
          'data' => 'string',
          'name' => 'timezone',
          'label' => 'Timezone',
          'class' => 'w-auto px-2',
          'rules' => 'string',
          'options' => 
          array (
            'Africa/Abidjan' => 'Africa/Abidjan',
            'Africa/Accra' => 'Africa/Accra',
            'Africa/Addis_Ababa' => 'Africa/Addis_Ababa',
            'Africa/Algiers' => 'Africa/Algiers',
            'Africa/Asmara' => 'Africa/Asmara',
            'Africa/Bamako' => 'Africa/Bamako',
            'Africa/Bangui' => 'Africa/Bangui',
            'Africa/Banjul' => 'Africa/Banjul',
            'Africa/Bissau' => 'Africa/Bissau',
            'Africa/Blantyre' => 'Africa/Blantyre',
            'Africa/Brazzaville' => 'Africa/Brazzaville',
            'Africa/Bujumbura' => 'Africa/Bujumbura',
            'Africa/Cairo' => 'Africa/Cairo',
            'Africa/Casablanca' => 'Africa/Casablanca',
            'Africa/Ceuta' => 'Africa/Ceuta',
            'Africa/Conakry' => 'Africa/Conakry',
            'Africa/Dakar' => 'Africa/Dakar',
            'Africa/Dar_es_Salaam' => 'Africa/Dar_es_Salaam',
            'Africa/Djibouti' => 'Africa/Djibouti',
            'Africa/Douala' => 'Africa/Douala',
            'Africa/El_Aaiun' => 'Africa/El_Aaiun',
            'Africa/Freetown' => 'Africa/Freetown',
            'Africa/Gaborone' => 'Africa/Gaborone',
            'Africa/Harare' => 'Africa/Harare',
            'Africa/Johannesburg' => 'Africa/Johannesburg',
            'Africa/Juba' => 'Africa/Juba',
            'Africa/Kampala' => 'Africa/Kampala',
            'Africa/Khartoum' => 'Africa/Khartoum',
            'Africa/Kigali' => 'Africa/Kigali',
            'Africa/Kinshasa' => 'Africa/Kinshasa',
            'Africa/Lagos' => 'Africa/Lagos',
            'Africa/Libreville' => 'Africa/Libreville',
            'Africa/Lome' => 'Africa/Lome',
            'Africa/Luanda' => 'Africa/Luanda',
            'Africa/Lubumbashi' => 'Africa/Lubumbashi',
            'Africa/Lusaka' => 'Africa/Lusaka',
            'Africa/Malabo' => 'Africa/Malabo',
            'Africa/Maputo' => 'Africa/Maputo',
            'Africa/Maseru' => 'Africa/Maseru',
            'Africa/Mbabane' => 'Africa/Mbabane',
            'Africa/Mogadishu' => 'Africa/Mogadishu',
            'Africa/Monrovia' => 'Africa/Monrovia',
            'Africa/Nairobi' => 'Africa/Nairobi',
            'Africa/Ndjamena' => 'Africa/Ndjamena',
            'Africa/Niamey' => 'Africa/Niamey',
            'Africa/Nouakchott' => 'Africa/Nouakchott',
            'Africa/Ouagadougou' => 'Africa/Ouagadougou',
            'Africa/Porto-Novo' => 'Africa/Porto-Novo',
            'Africa/Sao_Tome' => 'Africa/Sao_Tome',
            'Africa/Tripoli' => 'Africa/Tripoli',
            'Africa/Tunis' => 'Africa/Tunis',
            'Africa/Windhoek' => 'Africa/Windhoek',
            'America/Adak' => 'America/Adak',
            'America/Anchorage' => 'America/Anchorage',
            'America/Anguilla' => 'America/Anguilla',
            'America/Antigua' => 'America/Antigua',
            'America/Araguaina' => 'America/Araguaina',
            'America/Argentina/Buenos_Aires' => 'America/Argentina/Buenos_Aires',
            'America/Argentina/Catamarca' => 'America/Argentina/Catamarca',
            'America/Argentina/Cordoba' => 'America/Argentina/Cordoba',
            'America/Argentina/Jujuy' => 'America/Argentina/Jujuy',
            'America/Argentina/La_Rioja' => 'America/Argentina/La_Rioja',
            'America/Argentina/Mendoza' => 'America/Argentina/Mendoza',
            'America/Argentina/Rio_Gallegos' => 'America/Argentina/Rio_Gallegos',
            'America/Argentina/Salta' => 'America/Argentina/Salta',
            'America/Argentina/San_Juan' => 'America/Argentina/San_Juan',
            'America/Argentina/San_Luis' => 'America/Argentina/San_Luis',
            'America/Argentina/Tucuman' => 'America/Argentina/Tucuman',
            'America/Argentina/Ushuaia' => 'America/Argentina/Ushuaia',
            'America/Aruba' => 'America/Aruba',
            'America/Asuncion' => 'America/Asuncion',
            'America/Atikokan' => 'America/Atikokan',
            'America/Bahia' => 'America/Bahia',
            'America/Bahia_Banderas' => 'America/Bahia_Banderas',
            'America/Barbados' => 'America/Barbados',
            'America/Belem' => 'America/Belem',
            'America/Belize' => 'America/Belize',
            'America/Blanc-Sablon' => 'America/Blanc-Sablon',
            'America/Boa_Vista' => 'America/Boa_Vista',
            'America/Bogota' => 'America/Bogota',
            'America/Boise' => 'America/Boise',
            'America/Cambridge_Bay' => 'America/Cambridge_Bay',
            'America/Campo_Grande' => 'America/Campo_Grande',
            'America/Cancun' => 'America/Cancun',
            'America/Caracas' => 'America/Caracas',
            'America/Cayenne' => 'America/Cayenne',
            'America/Cayman' => 'America/Cayman',
            'America/Chicago' => 'America/Chicago',
            'America/Chihuahua' => 'America/Chihuahua',
            'America/Costa_Rica' => 'America/Costa_Rica',
            'America/Creston' => 'America/Creston',
            'America/Cuiaba' => 'America/Cuiaba',
            'America/Curacao' => 'America/Curacao',
            'America/Danmarkshavn' => 'America/Danmarkshavn',
            'America/Dawson' => 'America/Dawson',
            'America/Dawson_Creek' => 'America/Dawson_Creek',
            'America/Denver' => 'America/Denver',
            'America/Detroit' => 'America/Detroit',
            'America/Dominica' => 'America/Dominica',
            'America/Edmonton' => 'America/Edmonton',
            'America/Eirunepe' => 'America/Eirunepe',
            'America/El_Salvador' => 'America/El_Salvador',
            'America/Fort_Nelson' => 'America/Fort_Nelson',
            'America/Fortaleza' => 'America/Fortaleza',
            'America/Glace_Bay' => 'America/Glace_Bay',
            'America/Goose_Bay' => 'America/Goose_Bay',
            'America/Grand_Turk' => 'America/Grand_Turk',
            'America/Grenada' => 'America/Grenada',
            'America/Guadeloupe' => 'America/Guadeloupe',
            'America/Guatemala' => 'America/Guatemala',
            'America/Guayaquil' => 'America/Guayaquil',
            'America/Guyana' => 'America/Guyana',
            'America/Halifax' => 'America/Halifax',
            'America/Havana' => 'America/Havana',
            'America/Hermosillo' => 'America/Hermosillo',
            'America/Indiana/Indianapolis' => 'America/Indiana/Indianapolis',
            'America/Indiana/Knox' => 'America/Indiana/Knox',
            'America/Indiana/Marengo' => 'America/Indiana/Marengo',
            'America/Indiana/Petersburg' => 'America/Indiana/Petersburg',
            'America/Indiana/Tell_City' => 'America/Indiana/Tell_City',
            'America/Indiana/Vevay' => 'America/Indiana/Vevay',
            'America/Indiana/Vincennes' => 'America/Indiana/Vincennes',
            'America/Indiana/Winamac' => 'America/Indiana/Winamac',
            'America/Inuvik' => 'America/Inuvik',
            'America/Iqaluit' => 'America/Iqaluit',
            'America/Jamaica' => 'America/Jamaica',
            'America/Juneau' => 'America/Juneau',
            'America/Kentucky/Louisville' => 'America/Kentucky/Louisville',
            'America/Kentucky/Monticello' => 'America/Kentucky/Monticello',
            'America/Kralendijk' => 'America/Kralendijk',
            'America/La_Paz' => 'America/La_Paz',
            'America/Lima' => 'America/Lima',
            'America/Los_Angeles' => 'America/Los_Angeles',
            'America/Lower_Princes' => 'America/Lower_Princes',
            'America/Maceio' => 'America/Maceio',
            'America/Managua' => 'America/Managua',
            'America/Manaus' => 'America/Manaus',
            'America/Marigot' => 'America/Marigot',
            'America/Martinique' => 'America/Martinique',
            'America/Matamoros' => 'America/Matamoros',
            'America/Mazatlan' => 'America/Mazatlan',
            'America/Menominee' => 'America/Menominee',
            'America/Merida' => 'America/Merida',
            'America/Metlakatla' => 'America/Metlakatla',
            'America/Mexico_City' => 'America/Mexico_City',
            'America/Miquelon' => 'America/Miquelon',
            'America/Moncton' => 'America/Moncton',
            'America/Monterrey' => 'America/Monterrey',
            'America/Montevideo' => 'America/Montevideo',
            'America/Montserrat' => 'America/Montserrat',
            'America/Nassau' => 'America/Nassau',
            'America/New_York' => 'America/New_York',
            'America/Nipigon' => 'America/Nipigon',
            'America/Nome' => 'America/Nome',
            'America/Noronha' => 'America/Noronha',
            'America/North_Dakota/Beulah' => 'America/North_Dakota/Beulah',
            'America/North_Dakota/Center' => 'America/North_Dakota/Center',
            'America/North_Dakota/New_Salem' => 'America/North_Dakota/New_Salem',
            'America/Nuuk' => 'America/Nuuk',
            'America/Ojinaga' => 'America/Ojinaga',
            'America/Panama' => 'America/Panama',
            'America/Pangnirtung' => 'America/Pangnirtung',
            'America/Paramaribo' => 'America/Paramaribo',
            'America/Phoenix' => 'America/Phoenix',
            'America/Port-au-Prince' => 'America/Port-au-Prince',
            'America/Port_of_Spain' => 'America/Port_of_Spain',
            'America/Porto_Velho' => 'America/Porto_Velho',
            'America/Puerto_Rico' => 'America/Puerto_Rico',
            'America/Punta_Arenas' => 'America/Punta_Arenas',
            'America/Rainy_River' => 'America/Rainy_River',
            'America/Rankin_Inlet' => 'America/Rankin_Inlet',
            'America/Recife' => 'America/Recife',
            'America/Regina' => 'America/Regina',
            'America/Resolute' => 'America/Resolute',
            'America/Rio_Branco' => 'America/Rio_Branco',
            'America/Santarem' => 'America/Santarem',
            'America/Santiago' => 'America/Santiago',
            'America/Santo_Domingo' => 'America/Santo_Domingo',
            'America/Sao_Paulo' => 'America/Sao_Paulo',
            'America/Scoresbysund' => 'America/Scoresbysund',
            'America/Sitka' => 'America/Sitka',
            'America/St_Barthelemy' => 'America/St_Barthelemy',
            'America/St_Johns' => 'America/St_Johns',
            'America/St_Kitts' => 'America/St_Kitts',
            'America/St_Lucia' => 'America/St_Lucia',
            'America/St_Thomas' => 'America/St_Thomas',
            'America/St_Vincent' => 'America/St_Vincent',
            'America/Swift_Current' => 'America/Swift_Current',
            'America/Tegucigalpa' => 'America/Tegucigalpa',
            'America/Thule' => 'America/Thule',
            'America/Thunder_Bay' => 'America/Thunder_Bay',
            'America/Tijuana' => 'America/Tijuana',
            'America/Toronto' => 'America/Toronto',
            'America/Tortola' => 'America/Tortola',
            'America/Vancouver' => 'America/Vancouver',
            'America/Whitehorse' => 'America/Whitehorse',
            'America/Winnipeg' => 'America/Winnipeg',
            'America/Yakutat' => 'America/Yakutat',
            'America/Yellowknife' => 'America/Yellowknife',
            'Antarctica/Casey' => 'Antarctica/Casey',
            'Antarctica/Davis' => 'Antarctica/Davis',
            'Antarctica/DumontDUrville' => 'Antarctica/DumontDUrville',
            'Antarctica/Macquarie' => 'Antarctica/Macquarie',
            'Antarctica/Mawson' => 'Antarctica/Mawson',
            'Antarctica/McMurdo' => 'Antarctica/McMurdo',
            'Antarctica/Palmer' => 'Antarctica/Palmer',
            'Antarctica/Rothera' => 'Antarctica/Rothera',
            'Antarctica/Syowa' => 'Antarctica/Syowa',
            'Antarctica/Troll' => 'Antarctica/Troll',
            'Antarctica/Vostok' => 'Antarctica/Vostok',
            'Arctic/Longyearbyen' => 'Arctic/Longyearbyen',
            'Asia/Aden' => 'Asia/Aden',
            'Asia/Almaty' => 'Asia/Almaty',
            'Asia/Amman' => 'Asia/Amman',
            'Asia/Anadyr' => 'Asia/Anadyr',
            'Asia/Aqtau' => 'Asia/Aqtau',
            'Asia/Aqtobe' => 'Asia/Aqtobe',
            'Asia/Ashgabat' => 'Asia/Ashgabat',
            'Asia/Atyrau' => 'Asia/Atyrau',
            'Asia/Baghdad' => 'Asia/Baghdad',
            'Asia/Bahrain' => 'Asia/Bahrain',
            'Asia/Baku' => 'Asia/Baku',
            'Asia/Bangkok' => 'Asia/Bangkok',
            'Asia/Barnaul' => 'Asia/Barnaul',
            'Asia/Beirut' => 'Asia/Beirut',
            'Asia/Bishkek' => 'Asia/Bishkek',
            'Asia/Brunei' => 'Asia/Brunei',
            'Asia/Chita' => 'Asia/Chita',
            'Asia/Choibalsan' => 'Asia/Choibalsan',
            'Asia/Colombo' => 'Asia/Colombo',
            'Asia/Damascus' => 'Asia/Damascus',
            'Asia/Dhaka' => 'Asia/Dhaka',
            'Asia/Dili' => 'Asia/Dili',
            'Asia/Dubai' => 'Asia/Dubai',
            'Asia/Dushanbe' => 'Asia/Dushanbe',
            'Asia/Famagusta' => 'Asia/Famagusta',
            'Asia/Gaza' => 'Asia/Gaza',
            'Asia/Hebron' => 'Asia/Hebron',
            'Asia/Ho_Chi_Minh' => 'Asia/Ho_Chi_Minh',
            'Asia/Hong_Kong' => 'Asia/Hong_Kong',
            'Asia/Hovd' => 'Asia/Hovd',
            'Asia/Irkutsk' => 'Asia/Irkutsk',
            'Asia/Jakarta' => 'Asia/Jakarta',
            'Asia/Jayapura' => 'Asia/Jayapura',
            'Asia/Jerusalem' => 'Asia/Jerusalem',
            'Asia/Kabul' => 'Asia/Kabul',
            'Asia/Kamchatka' => 'Asia/Kamchatka',
            'Asia/Karachi' => 'Asia/Karachi',
            'Asia/Kathmandu' => 'Asia/Kathmandu',
            'Asia/Khandyga' => 'Asia/Khandyga',
            'Asia/Kolkata' => 'Asia/Kolkata',
            'Asia/Krasnoyarsk' => 'Asia/Krasnoyarsk',
            'Asia/Kuala_Lumpur' => 'Asia/Kuala_Lumpur',
            'Asia/Kuching' => 'Asia/Kuching',
            'Asia/Kuwait' => 'Asia/Kuwait',
            'Asia/Macau' => 'Asia/Macau',
            'Asia/Magadan' => 'Asia/Magadan',
            'Asia/Makassar' => 'Asia/Makassar',
            'Asia/Manila' => 'Asia/Manila',
            'Asia/Muscat' => 'Asia/Muscat',
            'Asia/Nicosia' => 'Asia/Nicosia',
            'Asia/Novokuznetsk' => 'Asia/Novokuznetsk',
            'Asia/Novosibirsk' => 'Asia/Novosibirsk',
            'Asia/Omsk' => 'Asia/Omsk',
            'Asia/Oral' => 'Asia/Oral',
            'Asia/Phnom_Penh' => 'Asia/Phnom_Penh',
            'Asia/Pontianak' => 'Asia/Pontianak',
            'Asia/Pyongyang' => 'Asia/Pyongyang',
            'Asia/Qatar' => 'Asia/Qatar',
            'Asia/Qostanay' => 'Asia/Qostanay',
            'Asia/Qyzylorda' => 'Asia/Qyzylorda',
            'Asia/Riyadh' => 'Asia/Riyadh',
            'Asia/Sakhalin' => 'Asia/Sakhalin',
            'Asia/Samarkand' => 'Asia/Samarkand',
            'Asia/Seoul' => 'Asia/Seoul',
            'Asia/Shanghai' => 'Asia/Shanghai',
            'Asia/Singapore' => 'Asia/Singapore',
            'Asia/Srednekolymsk' => 'Asia/Srednekolymsk',
            'Asia/Taipei' => 'Asia/Taipei',
            'Asia/Tashkent' => 'Asia/Tashkent',
            'Asia/Tbilisi' => 'Asia/Tbilisi',
            'Asia/Tehran' => 'Asia/Tehran',
            'Asia/Thimphu' => 'Asia/Thimphu',
            'Asia/Tokyo' => 'Asia/Tokyo',
            'Asia/Tomsk' => 'Asia/Tomsk',
            'Asia/Ulaanbaatar' => 'Asia/Ulaanbaatar',
            'Asia/Urumqi' => 'Asia/Urumqi',
            'Asia/Ust-Nera' => 'Asia/Ust-Nera',
            'Asia/Vientiane' => 'Asia/Vientiane',
            'Asia/Vladivostok' => 'Asia/Vladivostok',
            'Asia/Yakutsk' => 'Asia/Yakutsk',
            'Asia/Yangon' => 'Asia/Yangon',
            'Asia/Yekaterinburg' => 'Asia/Yekaterinburg',
            'Asia/Yerevan' => 'Asia/Yerevan',
            'Atlantic/Azores' => 'Atlantic/Azores',
            'Atlantic/Bermuda' => 'Atlantic/Bermuda',
            'Atlantic/Canary' => 'Atlantic/Canary',
            'Atlantic/Cape_Verde' => 'Atlantic/Cape_Verde',
            'Atlantic/Faroe' => 'Atlantic/Faroe',
            'Atlantic/Madeira' => 'Atlantic/Madeira',
            'Atlantic/Reykjavik' => 'Atlantic/Reykjavik',
            'Atlantic/South_Georgia' => 'Atlantic/South_Georgia',
            'Atlantic/St_Helena' => 'Atlantic/St_Helena',
            'Atlantic/Stanley' => 'Atlantic/Stanley',
            'Australia/Adelaide' => 'Australia/Adelaide',
            'Australia/Brisbane' => 'Australia/Brisbane',
            'Australia/Broken_Hill' => 'Australia/Broken_Hill',
            'Australia/Darwin' => 'Australia/Darwin',
            'Australia/Eucla' => 'Australia/Eucla',
            'Australia/Hobart' => 'Australia/Hobart',
            'Australia/Lindeman' => 'Australia/Lindeman',
            'Australia/Lord_Howe' => 'Australia/Lord_Howe',
            'Australia/Melbourne' => 'Australia/Melbourne',
            'Australia/Perth' => 'Australia/Perth',
            'Australia/Sydney' => 'Australia/Sydney',
            'Europe/Amsterdam' => 'Europe/Amsterdam',
            'Europe/Andorra' => 'Europe/Andorra',
            'Europe/Astrakhan' => 'Europe/Astrakhan',
            'Europe/Athens' => 'Europe/Athens',
            'Europe/Belgrade' => 'Europe/Belgrade',
            'Europe/Berlin' => 'Europe/Berlin',
            'Europe/Bratislava' => 'Europe/Bratislava',
            'Europe/Brussels' => 'Europe/Brussels',
            'Europe/Bucharest' => 'Europe/Bucharest',
            'Europe/Budapest' => 'Europe/Budapest',
            'Europe/Busingen' => 'Europe/Busingen',
            'Europe/Chisinau' => 'Europe/Chisinau',
            'Europe/Copenhagen' => 'Europe/Copenhagen',
            'Europe/Dublin' => 'Europe/Dublin',
            'Europe/Gibraltar' => 'Europe/Gibraltar',
            'Europe/Guernsey' => 'Europe/Guernsey',
            'Europe/Helsinki' => 'Europe/Helsinki',
            'Europe/Isle_of_Man' => 'Europe/Isle_of_Man',
            'Europe/Istanbul' => 'Europe/Istanbul',
            'Europe/Jersey' => 'Europe/Jersey',
            'Europe/Kaliningrad' => 'Europe/Kaliningrad',
            'Europe/Kiev' => 'Europe/Kiev',
            'Europe/Kirov' => 'Europe/Kirov',
            'Europe/Lisbon' => 'Europe/Lisbon',
            'Europe/Ljubljana' => 'Europe/Ljubljana',
            'Europe/London' => 'Europe/London',
            'Europe/Luxembourg' => 'Europe/Luxembourg',
            'Europe/Madrid' => 'Europe/Madrid',
            'Europe/Malta' => 'Europe/Malta',
            'Europe/Mariehamn' => 'Europe/Mariehamn',
            'Europe/Minsk' => 'Europe/Minsk',
            'Europe/Monaco' => 'Europe/Monaco',
            'Europe/Moscow' => 'Europe/Moscow',
            'Europe/Oslo' => 'Europe/Oslo',
            'Europe/Paris' => 'Europe/Paris',
            'Europe/Podgorica' => 'Europe/Podgorica',
            'Europe/Prague' => 'Europe/Prague',
            'Europe/Riga' => 'Europe/Riga',
            'Europe/Rome' => 'Europe/Rome',
            'Europe/Samara' => 'Europe/Samara',
            'Europe/San_Marino' => 'Europe/San_Marino',
            'Europe/Sarajevo' => 'Europe/Sarajevo',
            'Europe/Saratov' => 'Europe/Saratov',
            'Europe/Simferopol' => 'Europe/Simferopol',
            'Europe/Skopje' => 'Europe/Skopje',
            'Europe/Sofia' => 'Europe/Sofia',
            'Europe/Stockholm' => 'Europe/Stockholm',
            'Europe/Tallinn' => 'Europe/Tallinn',
            'Europe/Tirane' => 'Europe/Tirane',
            'Europe/Ulyanovsk' => 'Europe/Ulyanovsk',
            'Europe/Uzhgorod' => 'Europe/Uzhgorod',
            'Europe/Vaduz' => 'Europe/Vaduz',
            'Europe/Vatican' => 'Europe/Vatican',
            'Europe/Vienna' => 'Europe/Vienna',
            'Europe/Vilnius' => 'Europe/Vilnius',
            'Europe/Volgograd' => 'Europe/Volgograd',
            'Europe/Warsaw' => 'Europe/Warsaw',
            'Europe/Zagreb' => 'Europe/Zagreb',
            'Europe/Zaporozhye' => 'Europe/Zaporozhye',
            'Europe/Zurich' => 'Europe/Zurich',
            'Indian/Antananarivo' => 'Indian/Antananarivo',
            'Indian/Chagos' => 'Indian/Chagos',
            'Indian/Christmas' => 'Indian/Christmas',
            'Indian/Cocos' => 'Indian/Cocos',
            'Indian/Comoro' => 'Indian/Comoro',
            'Indian/Kerguelen' => 'Indian/Kerguelen',
            'Indian/Mahe' => 'Indian/Mahe',
            'Indian/Maldives' => 'Indian/Maldives',
            'Indian/Mauritius' => 'Indian/Mauritius',
            'Indian/Mayotte' => 'Indian/Mayotte',
            'Indian/Reunion' => 'Indian/Reunion',
            'Pacific/Apia' => 'Pacific/Apia',
            'Pacific/Auckland' => 'Pacific/Auckland',
            'Pacific/Bougainville' => 'Pacific/Bougainville',
            'Pacific/Chatham' => 'Pacific/Chatham',
            'Pacific/Chuuk' => 'Pacific/Chuuk',
            'Pacific/Easter' => 'Pacific/Easter',
            'Pacific/Efate' => 'Pacific/Efate',
            'Pacific/Fakaofo' => 'Pacific/Fakaofo',
            'Pacific/Fiji' => 'Pacific/Fiji',
            'Pacific/Funafuti' => 'Pacific/Funafuti',
            'Pacific/Galapagos' => 'Pacific/Galapagos',
            'Pacific/Gambier' => 'Pacific/Gambier',
            'Pacific/Guadalcanal' => 'Pacific/Guadalcanal',
            'Pacific/Guam' => 'Pacific/Guam',
            'Pacific/Honolulu' => 'Pacific/Honolulu',
            'Pacific/Kanton' => 'Pacific/Kanton',
            'Pacific/Kiritimati' => 'Pacific/Kiritimati',
            'Pacific/Kosrae' => 'Pacific/Kosrae',
            'Pacific/Kwajalein' => 'Pacific/Kwajalein',
            'Pacific/Majuro' => 'Pacific/Majuro',
            'Pacific/Marquesas' => 'Pacific/Marquesas',
            'Pacific/Midway' => 'Pacific/Midway',
            'Pacific/Nauru' => 'Pacific/Nauru',
            'Pacific/Niue' => 'Pacific/Niue',
            'Pacific/Norfolk' => 'Pacific/Norfolk',
            'Pacific/Noumea' => 'Pacific/Noumea',
            'Pacific/Pago_Pago' => 'Pacific/Pago_Pago',
            'Pacific/Palau' => 'Pacific/Palau',
            'Pacific/Pitcairn' => 'Pacific/Pitcairn',
            'Pacific/Pohnpei' => 'Pacific/Pohnpei',
            'Pacific/Port_Moresby' => 'Pacific/Port_Moresby',
            'Pacific/Rarotonga' => 'Pacific/Rarotonga',
            'Pacific/Saipan' => 'Pacific/Saipan',
            'Pacific/Tahiti' => 'Pacific/Tahiti',
            'Pacific/Tarawa' => 'Pacific/Tarawa',
            'Pacific/Tongatapu' => 'Pacific/Tongatapu',
            'Pacific/Wake' => 'Pacific/Wake',
            'Pacific/Wallis' => 'Pacific/Wallis',
            'UTC' => 'UTC',
          ),
          'value' => 'UTC',
        ),
      ),
    ),
    'email' => 
    array (
      'title' => 'Email',
      'key' => 'email',
      'desc' => 'Email and SMPT settings',
      'icon' => 'fas fa-mail-bulk',
      'elements' => 
      array (
        0 => 
        array (
          'type' => 'email',
          'data' => 'string',
          'name' => 'mail_from_address',
          'label' => 'From Email',
          'rules' => 'required|email',
        ),
        1 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'mail_from_name',
          'label' => 'From Name',
          'rules' => 'required|min:2|max:50',
        ),
        2 => 
        array (
          'type' => 'select',
          'data' => 'string',
          'name' => 'mail_channel',
          'label' => 'Mail channel',
          'class' => 'w-auto px-2',
          'rules' => 'string',
          'options' => 
          array (
            'sendmail' => 'PHP mail',
            'smtp' => 'SMTP',
          ),
          'value' => 'sendmail',
        ),
        3 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'smtp_host',
          'label' => 'SMTP host',
          'rules' => 'required_if:mail_channel,smtp',
        ),
        4 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'smtp_username',
          'label' => 'SMTP username',
          'rules' => 'required_if:mail_channel,smtp',
        ),
        5 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'smtp_password',
          'label' => 'SMTP password',
          'rules' => 'required_if:mail_channel,smtp',
        ),
        6 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'smtp_port',
          'label' => 'SMTP port',
          'rules' => 'required_if:mail_channel,smtp',
        ),
        7 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'smtp_encryption',
          'label' => 'SMTP encryption',
          'rules' => 'required_if:mail_channel,smtp',
        ),
      ),
    ),
    'oauth' => 
    array (
      'title' => 'oauth settings',
      'key' => 'oauth_settings',
      'desc' => '',
      'icon' => 'fas fa-cog',
      'hidden' => true,
      'elements' => 
      array (
        0 => 
        array (
          'type' => 'checkbox',
          'data' => 'boolean',
          'name' => 'envato_oauth_enabled',
          'label' => 'envato_oauth_enabled',
          'rules' => '',
        ),
        1 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'envato_oauth_app_id',
          'label' => 'envato_oauth_app_id',
          'rules' => '',
        ),
        2 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'envato_oauth_app_secret',
          'label' => 'envato_oauth_app_secret',
          'rules' => '',
        ),
        3 => 
        array (
          'type' => 'checkbox',
          'data' => 'boolean',
          'name' => 'facebook_oauth_enabled',
          'label' => 'facebook_oauth_enabled',
          'rules' => '',
        ),
        4 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'facebook_oauth_app_id',
          'label' => 'facebook_oauth_app_id',
          'rules' => '',
        ),
        5 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'facebook_oauth_app_secret',
          'label' => 'facebook_oauth_app_secret',
          'rules' => '',
        ),
        6 => 
        array (
          'type' => 'checkbox',
          'data' => 'boolean',
          'name' => 'google_oauth_enabled',
          'label' => 'google_oauth_enabled',
          'rules' => '',
        ),
        7 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'google_oauth_app_id',
          'label' => 'google_oauth_app_id',
          'rules' => '',
        ),
        8 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'google_oauth_app_secret',
          'label' => 'google_oauth_app_secret',
          'rules' => '',
        ),
      ),
    ),
    'advanced_settings' => 
    array (
      'title' => 'Advanced settings',
      'key' => 'advanced_settings',
      'desc' => '',
      'icon' => 'fas fa-cog',
      'hidden' => true,
      'elements' => 
      array (
        0 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'custom_js',
          'label' => 'Custom js',
          'rules' => '',
        ),
        1 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'site_title',
          'label' => 'title',
          'rules' => '',
        ),
        2 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'site_description',
          'label' => 'description',
          'rules' => '',
        ),
        3 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'site_keywords',
          'label' => 'keywords',
          'rules' => '',
        ),
        4 => 
        array (
          'type' => 'checkbox',
          'data' => 'string',
          'name' => 'app_debug',
          'label' => 'Debug mode',
          'rules' => '',
        ),
        5 => 
        array (
          'type' => 'checkbox',
          'data' => 'string',
          'name' => 'enable_cache',
          'label' => 'Enable cache',
          'rules' => '',
        ),
      ),
    ),
  ),
  'settings' => 
  array (
    'app_name' => 'Ticky',
    'app_url' => 'http://soporte.recargaloya.com',
    'app_env' => 'production',
    'app_key' => 'base64:VmtiRGZqZFlkcGtpT1Y2NVpTZ3FtYlJLSFludGlEMVg=',
    'app_debug' => false,
    'app_debug_level' => 'debug',
    'mysql_host' => '127.0.0.1',
    'mysql_port' => '3306',
    'mysql_database' => 'fastbrao_soporte_recargaloya',
    'mysql_username' => 'fastbrao_soporte_recargaloya',
    'mysql_password' => '(c;AmBmDP7aO',
    'mail_driver' => 'sendmail',
    'mail_host' => '',
    'mail_port' => '587',
    'mail_username' => '',
    'mail_password' => '',
    'mail_encryption' => 'tls',
    'mail_from_address' => 'support@soporte.recargaloya.com',
    'mail_from_name' => 'Ticky',
    'disk_ticket_driver' => 'local',
    'disk_ticket_root' => 'tickets',
    'disk_article_driver' => 'local',
    'disk_article_root' => 'articles',
    'disk_avatar_driver' => 'local',
    'disk_avatar_root' => 'avatars',
    'AWS_ACCESS_KEY_ID' => '',
    'AWS_SECRET_ACCESS_KEY' => '',
    'AWS_DEFAULT_REGION' => '',
    'AWS_BUCKET' => '',
    'AWS_URL' => '',
    'product_code' => '8dc83d02c8a7c7e80dd8585ee786bc77',
    'app_parent_folder' => NULL,
  ),
  'vars' => 
  array (
    'app_version' => '1.7.0.9',
    'app_version_dev' => 1709,
    'asset_version' => '61e2f3ac2a16b',
    'date_format' => 'd-m-Y',
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/home/fastbrao/soporte.recargaloya.com/resources/views',
    ),
    'compiled' => '/home/fastbrao/soporte.recargaloya.com/storage/framework/views',
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'excel' => 
  array (
    'exports' => 
    array (
      'chunk_size' => 1000,
      'pre_calculate_formulas' => false,
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'line_ending' => '
',
        'use_bom' => false,
        'include_separator_line' => false,
        'excel_compatibility' => false,
      ),
    ),
    'imports' => 
    array (
      'read_only' => true,
      'heading_row' => 
      array (
        'formatter' => 'slug',
      ),
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'escape_character' => '\\',
        'contiguous' => false,
        'input_encoding' => 'UTF-8',
      ),
    ),
    'extension_detector' => 
    array (
      'xlsx' => 'Xlsx',
      'xlsm' => 'Xlsx',
      'xltx' => 'Xlsx',
      'xltm' => 'Xlsx',
      'xls' => 'Xls',
      'xlt' => 'Xls',
      'ods' => 'Ods',
      'ots' => 'Ods',
      'slk' => 'Slk',
      'xml' => 'Xml',
      'gnumeric' => 'Gnumeric',
      'htm' => 'Html',
      'html' => 'Html',
      'csv' => 'Csv',
      'tsv' => 'Csv',
      'pdf' => 'Dompdf',
    ),
    'value_binder' => 
    array (
      'default' => 'Maatwebsite\\Excel\\DefaultValueBinder',
    ),
    'cache' => 
    array (
      'driver' => 'memory',
      'batch' => 
      array (
        'memory_limit' => 60000,
      ),
      'illuminate' => 
      array (
        'store' => NULL,
      ),
    ),
    'transactions' => 
    array (
      'handler' => 'db',
    ),
    'temporary_files' => 
    array (
      'local_path' => '/tmp',
      'remote_disk' => NULL,
      'remote_prefix' => NULL,
    ),
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 94,
  ),
  'translation' => 
  array (
    'name' => 'Translation',
    'driver' => 'file',
    'route_group_config' => 
    array (
      'middleware' => 
      array (
        0 => 'vendor_web',
        1 => 'auth',
        2 => 'admin_only',
      ),
    ),
    'translation_methods' => 
    array (
      0 => 'trans',
      1 => '__',
    ),
    'scan_paths' => 
    array (
      0 => '/home/fastbrao/soporte.recargaloya.com/app',
      1 => '/home/fastbrao/soporte.recargaloya.com/resources',
    ),
    'ui_url' => 'dashboard/languages',
    'database' => 
    array (
      'connection' => '',
      'languages_table' => 'languages',
      'translations_table' => 'translations',
    ),
  ),
  'customizer' => 
  array (
    'name' => 'Customizer',
  ),
);
