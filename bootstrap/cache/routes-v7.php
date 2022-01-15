<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6OrnQFLzUISnTmjb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.search_json',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lang.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.lang',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my_account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'my_account',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my_account/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'my_account.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OHqfj2rmyreqsIg5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my_account/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xQhsXCL34Mu1aqgI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my_account/tickets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'my_account.tickets',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my_account/tickets/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'my_account.tickets.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my_account/tickets/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NfkaDAW2BYMlO11a',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my_account/tickets/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::te7JxOdU0bK13vO0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my_account/tickets/fetch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XnJrRzAclU0fZPb9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my_account/tickets/conversation/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T2w8K2Bw6dfPMLPj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my_account/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AbNSK7j6yM2I0EtR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my_account/notifications/unread' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::es3olB69Er8snn1Y',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my_account/notifications/mark_as_read' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ctk623WzuRWqEQic',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my_account/lang.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'my_account.lang',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iKnsFsBatL8dTIoR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/advanced_settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.advanced_settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/clear_cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::szfyLKkd29WFsdoj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/fetch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::75zXSOFjVQJy74pT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t6f9T9C4mMKqxrFs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/toggle_maintenance_mode' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3fmhNaGMJqcxcTza',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/toggle_enable_cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ItjDPB1Mrv95nLEW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/server_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EDU4HPEAljur0Fs2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/saved_replies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.saved_replies',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GhiMl1XDJpmf2X5a',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::np9x8dTjL0jtaHUB',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D54f0baWW7vYKzVZ',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/saved_replies/fetch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VMGlcrbJH3g44BSK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/tickets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tickets',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/tickets/conversation/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ABtbi211UqneZZ84',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/tickets/conversation/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NRIzHQ08vCug8VdS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/tickets/conversation/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Sqy9indPNPeQZtV5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/tickets/fetch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lNFH2540Ke7e02F2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/manage_categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.categories',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ALUNvMEOAPypbABL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/manage_articles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.manage_articles',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eTSZHlZnPeQtVuQ2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l7dzMyfWGnnjR51E',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/manage_articles/fetch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MnmAr7PjAb4RID1m',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/manage_articles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.articles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FCFLYiTiBgYsTURN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/employees' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employees',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/employees/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9d6JoScfH67IDxkI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/employees/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yhPaKRNxMjawSdfV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/employees/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oBfGaq3rC0t1gE8A',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/employees/user/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::23I8Q64SeZ0ubGJg',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/customers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.customers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/customers/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0MLQz2sGGt42Ank9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/customers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cwF31I0BzdpwU3a1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/customers/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GErza7A9fNGyeIVl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/customers/user/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uVY3WQrnYPH0REhM',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/roles/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b6rFP2TMDy1XL3i5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/acl/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rXi0maNwIKguio1s',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Tcww1BLgQi0Gp01G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/notifications/unread' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jqx1zN5VhSuzFHU8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/notifications/mark_as_read' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wpt4DlubbPdjdq0n',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HaIlJDeVaWQktkps',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/error_logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.error_logs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BvC5iUk0w8mEI2I5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/update/refresh_app' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K07PL6zoWlvNqWTd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/insights/tickets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::66h60uKrOD2LESfK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/lang.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.lang',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/available_languages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::linCQPnrclajQsiL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/modules_manager' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.modules_manager',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/modules_manager/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BVu1i7scmlY159zZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/database/migration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fOP95cVWozTqBWyk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BG8Rfx0xnDWEJ8bb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l5XKQF0zrN7vScVj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.notice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/resend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.resend',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/requirements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.requirements',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/folder_permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.folder_permissions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/product_license' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.product_license',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.database',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/admin_account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.admin_account',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/finish' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.finish',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/customizer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modules.customizer',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/customizer/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DldQ3fNAdoeMeRNB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/customizer/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hdtb8REM01LiCSiu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/languages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wx8KtrL9YZrdFec4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/languages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'languages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/([a-z]{2})(?|(*:21)|/(?|articles/(?|([^/]++)(?:/([^/]++))?(*:66)|rate(*:77))|tags/([^/]++)(?:/([^/]++))?(*:112)|categories/([^/]++)(?:/([^/]++))?(*:153)|search(?|(*:170))|lang\\.js(*:187)))|/articles/(?|([^/]++)(?:/([^/]++))?(*:232)|rate(*:244))|/tags/([^/]++)(?:/([^/]++))?(*:281)|/categories/([^/]++)(?:/([^/]++))?(*:323)|/my_account/tickets/([^/]++)(?|(*:362)|/conversation(*:383))|/dashboard/(?|users/user/([^/]++)(*:425)|saved_replies/([^/]++)(*:455)|tickets/(?|re_assign/([^/]++)(*:492)|update/([^/]++)(*:515)|([^/]++)(?|/conversation(*:547)|(*:555)))|manage_(?|categories/(?|([^/]++)(*:597)|fetch(*:610)|view(*:622)|([^/]++)(*:638)|toggle_active/([^/]++)(*:668)|categories_tickets(*:694))|articles/(?|edit/([^/]++)(*:728)|show/([^/]++)(*:749)|([^/]++)(*:765)|toggle_published(*:789)))|employees/([^/]++)(?|(*:820))|customers/([^/]++)(?|(*:850)|(*:858))|acl/roles/([^/]++)/(?|permissions(*:900)|toggle_permission/([^/]++)(*:934))|([^/]++)/purchases(?|(*:964)|/refresh(*:980))|modules_manager/([^/]++)/t(?|oggle_module_status(*:1037)|humbnail(*:1054))|languages/([^/]++)(?|/(?|delete(*:1095)|translations(?|(*:1119)|/create(*:1135)|(*:1144)))|(*:1155)))|/password/reset/([^/]++)(*:1190)|/email/verify/([^/]++)/([^/]++)(*:1230))/?$}sDu',
    ),
    3 => 
    array (
      21 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => '_frontend',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      66 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => '_frontend.article',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
            2 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      77 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => '_frontend.article.update_rate',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => '_frontend.tag',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
            2 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      153 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => '_frontend.category',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
            2 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      170 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => '_frontend.search_json',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => '_frontend.search',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => '_frontend.lang',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      232 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.article',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.article.update_rate',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      281 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.tag',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      323 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.category',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      362 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'my_account.tickets.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0BAGMIvg47i00xZt',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cnwwVZop4WRIWkIC',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      425 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      455 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.saved_replies.single',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      492 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xhB6vodj3lMu7IKs',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      515 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zqqg5THSqlOghmGO',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      547 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YuRvKU9VpYYgQbfy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      555 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.ticket.single',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::czY3DA21tnfZS07O',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oAsHcISAOViXC9du',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      597 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SCn2JEffp4F0PUPo',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      610 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ndSx7N7IPZwn1r5z',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      622 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vQGvysBwwmAVDCYJ',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      638 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CNVF75Html0Wf74j',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      668 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sMqLydHYuyYhEFzi',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      694 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eacc0IWkNS5B9PmK',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      728 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.manage_articles.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      749 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5Q2PWmP1h91dmqs6',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      765 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8KPuYP9T21Efnv7q',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      789 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OIen9AJ0VOjfOJOT',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      820 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E5vZEyme3byVdQyw',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h6U4oHD64g1DHoYc',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      850 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HXLRaQhv2uT5BTZa',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      858 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n5Yhq2AQ2l4fjzLr',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      900 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3RjBYwuSLpncxO4g',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      934 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2EDRuN703ZlklDjH',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'permission',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      964 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LOz0MKe8xAQ3FQEj',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      980 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AdB9W8VQlNMvO1OH',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1037 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.modules_manager.toggle_module_status',
          ),
          1 => 
          array (
            0 => 'module',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1054 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.modules_manager.thumbnail',
          ),
          1 => 
          array (
            0 => 'module',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1095 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZVAlDunCKrnyEv4z',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1119 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.translations.index',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.translations.create',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1144 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.translations.store',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1155 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.translations.update',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1230 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.verify',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::6OrnQFLzUISnTmjb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::6OrnQFLzUISnTmjb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    '_frontend' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\IndexController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\IndexController@index',
        'as' => '_frontend',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    '_frontend.article' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/articles/{id}/{slug?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\ArticlesController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ArticlesController@index',
        'as' => '_frontend.article',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/articles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    '_frontend.article.update_rate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/articles/rate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\ArticlesController@updateRate',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ArticlesController@updateRate',
        'as' => '_frontend.article.update_rate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/articles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    '_frontend.tag' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/tags/{id}/{slug?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TagController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TagController@index',
        'as' => '_frontend.tag',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    '_frontend.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/categories/{id}/{slug?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CategoryController@index',
        'as' => '_frontend.category',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    '_frontend.search_json' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SearchController@search',
        'controller' => 'App\\Http\\Controllers\\SearchController@search',
        'as' => '_frontend.search_json',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/search',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    '_frontend.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\SearchController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\SearchController@index',
        'as' => '_frontend.search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/search',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    '_frontend.lang' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/lang.js',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@langJs',
        'file' => 'frontend_js',
        'controller' => 'App\\Http\\Controllers\\LanguageController@langJs',
        'as' => '_frontend.lang',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\IndexController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\IndexController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'frontend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.article' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'articles/{id}/{slug?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\ArticlesController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ArticlesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/articles',
        'where' => 
        array (
        ),
        'as' => 'frontend.article',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.article.update_rate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'articles/rate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\ArticlesController@updateRate',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ArticlesController@updateRate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/articles',
        'where' => 
        array (
        ),
        'as' => 'frontend.article.update_rate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.tag' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tags/{id}/{slug?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\TagController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\TagController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/tags',
        'where' => 
        array (
        ),
        'as' => 'frontend.tag',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories/{id}/{slug?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CategoryController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/categories',
        'where' => 
        array (
        ),
        'as' => 'frontend.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.search_json' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SearchController@search',
        'controller' => 'App\\Http\\Controllers\\SearchController@search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/search',
        'where' => 
        array (
        ),
        'as' => 'frontend.search_json',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\SearchController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\SearchController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/search',
        'where' => 
        array (
        ),
        'as' => 'frontend.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'frontend.lang' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang.js',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@langJs',
        'file' => 'frontend_js',
        'controller' => 'App\\Http\\Controllers\\LanguageController@langJs',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'frontend.lang',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'my_account' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'my_account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'my_account',
          1 => 'role:customer|non-restricted_agent|agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\MyAccount\\IndexController@index',
        'controller' => 'App\\Http\\Controllers\\MyAccount\\IndexController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'my_account',
        'where' => 
        array (
        ),
        'as' => 'my_account',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'my_account.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'my_account/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'my_account',
          1 => 'role:customer|non-restricted_agent|agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\MyAccount\\ProfileController@profile',
        'controller' => 'App\\Http\\Controllers\\MyAccount\\ProfileController@profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'my_account/profile',
        'where' => 
        array (
        ),
        'as' => 'my_account.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OHqfj2rmyreqsIg5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'my_account/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'my_account',
          1 => 'role:customer|non-restricted_agent|agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\MyAccount\\ProfileController@profile',
        'controller' => 'App\\Http\\Controllers\\MyAccount\\ProfileController@profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'my_account/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::OHqfj2rmyreqsIg5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xQhsXCL34Mu1aqgI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'my_account/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'my_account',
          1 => 'role:customer|non-restricted_agent|agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\UploadController@index',
        'controller' => 'App\\Http\\Controllers\\UploadController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'my_account',
        'where' => 
        array (
        ),
        'as' => 'generated::xQhsXCL34Mu1aqgI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'my_account.tickets' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'my_account/tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'my_account',
          1 => 'role:customer|non-restricted_agent|agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\MyAccount\\TicketsController@index',
        'controller' => 'App\\Http\\Controllers\\MyAccount\\TicketsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'my_account/tickets',
        'where' => 
        array (
        ),
        'as' => 'my_account.tickets',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'my_account.tickets.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'my_account/tickets/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'my_account',
          1 => 'role:customer|non-restricted_agent|agent|admin|super_admin',
          2 => 'verified',
          3 => 'permission:create_ticket',
        ),
        'uses' => 'App\\Http\\Controllers\\MyAccount\\TicketsController@new',
        'controller' => 'App\\Http\\Controllers\\MyAccount\\TicketsController@new',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'my_account/tickets',
        'where' => 
        array (
        ),
        'as' => 'my_account.tickets.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NfkaDAW2BYMlO11a' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'my_account/tickets/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'my_account',
          1 => 'role:customer|non-restricted_agent|agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\MyAccount\\TicketsController@categories',
        'controller' => 'App\\Http\\Controllers\\MyAccount\\TicketsController@categories',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'my_account/tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::NfkaDAW2BYMlO11a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::te7JxOdU0bK13vO0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'my_account/tickets/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'my_account',
          1 => 'role:customer|non-restricted_agent|agent|admin|super_admin',
          2 => 'verified',
          3 => 'permission:create_ticket',
        ),
        'uses' => 'App\\Http\\Controllers\\MyAccount\\TicketsController@save',
        'controller' => 'App\\Http\\Controllers\\MyAccount\\TicketsController@save',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'my_account/tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::te7JxOdU0bK13vO0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XnJrRzAclU0fZPb9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'my_account/tickets/fetch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'my_account',
          1 => 'role:customer|non-restricted_agent|agent|admin|super_admin',
          2 => 'verified',
          3 => 'permission:view_ticket',
        ),
        'uses' => 'App\\Http\\Controllers\\MyAccount\\TicketsController@fetch',
        'controller' => 'App\\Http\\Controllers\\MyAccount\\TicketsController@fetch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'my_account/tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::XnJrRzAclU0fZPb9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::T2w8K2Bw6dfPMLPj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'my_account/tickets/conversation/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'my_account',
          1 => 'role:customer|non-restricted_agent|agent|admin|super_admin',
          2 => 'verified',
          3 => 'permission:view_ticket',
        ),
        'uses' => 'App\\Http\\Controllers\\MyAccount\\TicketConversationController@store',
        'controller' => 'App\\Http\\Controllers\\MyAccount\\TicketConversationController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'my_account/tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::T2w8K2Bw6dfPMLPj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'my_account.tickets.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'my_account/tickets/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'my_account',
          1 => 'role:customer|non-restricted_agent|agent|admin|super_admin',
          2 => 'verified',
          3 => 'permission:view_ticket',
        ),
        'uses' => 'App\\Http\\Controllers\\MyAccount\\TicketsController@view',
        'controller' => 'App\\Http\\Controllers\\MyAccount\\TicketsController@view',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'my_account/tickets',
        'where' => 
        array (
        ),
        'as' => 'my_account.tickets.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0BAGMIvg47i00xZt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'my_account/tickets/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'my_account',
          1 => 'role:customer|non-restricted_agent|agent|admin|super_admin',
          2 => 'verified',
          3 => 'permission:view_ticket',
        ),
        'uses' => 'App\\Http\\Controllers\\MyAccount\\TicketsController@details',
        'controller' => 'App\\Http\\Controllers\\MyAccount\\TicketsController@details',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'my_account/tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::0BAGMIvg47i00xZt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cnwwVZop4WRIWkIC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'my_account/tickets/{id}/conversation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'my_account',
          1 => 'role:customer|non-restricted_agent|agent|admin|super_admin',
          2 => 'verified',
          3 => 'permission:view_ticket',
        ),
        'uses' => 'App\\Http\\Controllers\\MyAccount\\TicketConversationController@fetch',
        'controller' => 'App\\Http\\Controllers\\MyAccount\\TicketConversationController@fetch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'my_account/tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::cnwwVZop4WRIWkIC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AbNSK7j6yM2I0EtR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'my_account/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'my_account',
          1 => 'role:customer|non-restricted_agent|agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\MyAccount\\NotificationsController@all',
        'controller' => 'App\\Http\\Controllers\\MyAccount\\NotificationsController@all',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'my_account/notifications',
        'where' => 
        array (
        ),
        'as' => 'generated::AbNSK7j6yM2I0EtR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::es3olB69Er8snn1Y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'my_account/notifications/unread',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'my_account',
          1 => 'role:customer|non-restricted_agent|agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\MyAccount\\NotificationsController@unread',
        'controller' => 'App\\Http\\Controllers\\MyAccount\\NotificationsController@unread',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'my_account/notifications',
        'where' => 
        array (
        ),
        'as' => 'generated::es3olB69Er8snn1Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ctk623WzuRWqEQic' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'my_account/notifications/mark_as_read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'my_account',
          1 => 'role:customer|non-restricted_agent|agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\MyAccount\\NotificationsController@markAsRead',
        'controller' => 'App\\Http\\Controllers\\MyAccount\\NotificationsController@markAsRead',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'my_account/notifications',
        'where' => 
        array (
        ),
        'as' => 'generated::ctk623WzuRWqEQic',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'my_account.lang' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'my_account/lang.js',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'my_account',
          1 => 'role:customer|non-restricted_agent|agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@langJs',
        'file' => 'js',
        'controller' => 'App\\Http\\Controllers\\LanguageController@langJs',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'my_account',
        'where' => 
        array (
        ),
        'as' => 'my_account.lang',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\IndexController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\IndexController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ProfileController@profile',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ProfileController@profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/profile',
        'where' => 
        array (
        ),
        'as' => 'dashboard.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::iKnsFsBatL8dTIoR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ProfileController@profile',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ProfileController@profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::iKnsFsBatL8dTIoR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard.users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'dashboard.users.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard.users.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@list',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'dashboard.users.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'dashboard.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard.advanced_settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/advanced_settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@advancedSettings',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@advancedSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'dashboard.advanced_settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::szfyLKkd29WFsdoj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/settings/clear_cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@clearCache',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@clearCache',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::szfyLKkd29WFsdoj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::75zXSOFjVQJy74pT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/settings/fetch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@fetch',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@fetch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::75zXSOFjVQJy74pT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::t6f9T9C4mMKqxrFs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/settings/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@save',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@save',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::t6f9T9C4mMKqxrFs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3fmhNaGMJqcxcTza' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/settings/toggle_maintenance_mode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@toggleMaintenanceMode',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@toggleMaintenanceMode',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::3fmhNaGMJqcxcTza',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ItjDPB1Mrv95nLEW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/settings/toggle_enable_cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@toggleEnableCache',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@toggleEnableCache',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::ItjDPB1Mrv95nLEW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EDU4HPEAljur0Fs2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/settings/server_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@serverStatus',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@serverStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::EDU4HPEAljur0Fs2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard.saved_replies' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/saved_replies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SavedRepliesController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SavedRepliesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/saved_replies',
        'where' => 
        array (
        ),
        'as' => 'dashboard.saved_replies',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VMGlcrbJH3g44BSK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/saved_replies/fetch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SavedRepliesController@fetch',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SavedRepliesController@fetch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/saved_replies',
        'where' => 
        array (
        ),
        'as' => 'generated::VMGlcrbJH3g44BSK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GhiMl1XDJpmf2X5a' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/saved_replies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SavedRepliesController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SavedRepliesController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/saved_replies',
        'where' => 
        array (
        ),
        'as' => 'generated::GhiMl1XDJpmf2X5a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::np9x8dTjL0jtaHUB' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/saved_replies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SavedRepliesController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SavedRepliesController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/saved_replies',
        'where' => 
        array (
        ),
        'as' => 'generated::np9x8dTjL0jtaHUB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::D54f0baWW7vYKzVZ' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/saved_replies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SavedRepliesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SavedRepliesController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/saved_replies',
        'where' => 
        array (
        ),
        'as' => 'generated::D54f0baWW7vYKzVZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard.saved_replies.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/saved_replies/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SavedRepliesController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SavedRepliesController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/saved_replies',
        'where' => 
        array (
        ),
        'as' => 'dashboard.saved_replies.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard.tickets' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TicketController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TicketController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/tickets',
        'where' => 
        array (
        ),
        'as' => 'dashboard.tickets',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xhB6vodj3lMu7IKs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/tickets/re_assign/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TicketController@reAssign',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TicketController@reAssign',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::xhB6vodj3lMu7IKs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Zqqg5THSqlOghmGO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/tickets/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TicketController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TicketController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::Zqqg5THSqlOghmGO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ABtbi211UqneZZ84' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/tickets/conversation/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TicketConversationController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TicketConversationController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::ABtbi211UqneZZ84',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NRIzHQ08vCug8VdS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/tickets/conversation/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TicketConversationController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TicketConversationController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::NRIzHQ08vCug8VdS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Sqy9indPNPeQZtV5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/tickets/conversation/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TicketConversationController@updateReply',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TicketConversationController@updateReply',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::Sqy9indPNPeQZtV5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lNFH2540Ke7e02F2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/tickets/fetch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TicketController@fetch',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TicketController@fetch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::lNFH2540Ke7e02F2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YuRvKU9VpYYgQbfy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/tickets/{id}/conversation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TicketConversationController@fetch',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TicketConversationController@fetch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::YuRvKU9VpYYgQbfy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard.ticket.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/tickets/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TicketController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TicketController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/tickets',
        'where' => 
        array (
        ),
        'as' => 'dashboard.ticket.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::czY3DA21tnfZS07O' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/tickets/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TicketController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TicketController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::czY3DA21tnfZS07O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oAsHcISAOViXC9du' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/tickets/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TicketController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TicketController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::oAsHcISAOViXC9du',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard.categories' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/manage_categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ManageCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ManageCategoryController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/manage_categories',
        'where' => 
        array (
        ),
        'as' => 'dashboard.categories',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ALUNvMEOAPypbABL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/manage_categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ManageCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ManageCategoryController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/manage_categories',
        'where' => 
        array (
        ),
        'as' => 'generated::ALUNvMEOAPypbABL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SCn2JEffp4F0PUPo' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/manage_categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ManageCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ManageCategoryController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/manage_categories',
        'where' => 
        array (
        ),
        'as' => 'generated::SCn2JEffp4F0PUPo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ndSx7N7IPZwn1r5z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/manage_categories/fetch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ManageCategoryController@fetch',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ManageCategoryController@fetch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/manage_categories',
        'where' => 
        array (
        ),
        'as' => 'generated::ndSx7N7IPZwn1r5z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vQGvysBwwmAVDCYJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/manage_categories/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ManageCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ManageCategoryController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/manage_categories',
        'where' => 
        array (
        ),
        'as' => 'generated::vQGvysBwwmAVDCYJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CNVF75Html0Wf74j' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/manage_categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ManageCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ManageCategoryController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/manage_categories',
        'where' => 
        array (
        ),
        'as' => 'generated::CNVF75Html0Wf74j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::sMqLydHYuyYhEFzi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/manage_categories/toggle_active/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ManageCategoryController@toggleActive',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ManageCategoryController@toggleActive',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/manage_categories',
        'where' => 
        array (
        ),
        'as' => 'generated::sMqLydHYuyYhEFzi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eacc0IWkNS5B9PmK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/manage_categories/categories_tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ManageCategoryController@categoriesWithtickets',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ManageCategoryController@categoriesWithtickets',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/manage_categories',
        'where' => 
        array (
        ),
        'as' => 'generated::eacc0IWkNS5B9PmK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard.manage_articles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/manage_articles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ManageArticlesController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ManageArticlesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/manage_articles',
        'where' => 
        array (
        ),
        'as' => 'dashboard.manage_articles',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MnmAr7PjAb4RID1m' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/manage_articles/fetch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ManageArticlesController@fetch',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ManageArticlesController@fetch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/manage_articles',
        'where' => 
        array (
        ),
        'as' => 'generated::MnmAr7PjAb4RID1m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard.articles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/manage_articles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ManageArticlesController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ManageArticlesController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/manage_articles',
        'where' => 
        array (
        ),
        'as' => 'dashboard.articles.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard.manage_articles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/manage_articles/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ManageArticlesController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ManageArticlesController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/manage_articles',
        'where' => 
        array (
        ),
        'as' => 'dashboard.manage_articles.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eTSZHlZnPeQtVuQ2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/manage_articles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ManageArticlesController@save',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ManageArticlesController@save',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/manage_articles',
        'where' => 
        array (
        ),
        'as' => 'generated::eTSZHlZnPeQtVuQ2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::l7dzMyfWGnnjR51E' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/manage_articles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ManageArticlesController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ManageArticlesController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/manage_articles',
        'where' => 
        array (
        ),
        'as' => 'generated::l7dzMyfWGnnjR51E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5Q2PWmP1h91dmqs6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/manage_articles/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ManageArticlesController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ManageArticlesController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/manage_articles',
        'where' => 
        array (
        ),
        'as' => 'generated::5Q2PWmP1h91dmqs6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8KPuYP9T21Efnv7q' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/manage_articles/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ManageArticlesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ManageArticlesController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/manage_articles',
        'where' => 
        array (
        ),
        'as' => 'generated::8KPuYP9T21Efnv7q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OIen9AJ0VOjfOJOT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/manage_articles/toggle_published',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ManageArticlesController@togglePublished',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ManageArticlesController@togglePublished',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/manage_articles',
        'where' => 
        array (
        ),
        'as' => 'generated::OIen9AJ0VOjfOJOT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FCFLYiTiBgYsTURN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TagController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TagController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/tags',
        'where' => 
        array (
        ),
        'as' => 'generated::FCFLYiTiBgYsTURN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard.employees' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/employees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
          4 => 'permission:view_user',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@employees',
        'as' => 'dashboard.employees',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@employees',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/employees',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9d6JoScfH67IDxkI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/employees/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@list',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/employees',
        'where' => 
        array (
        ),
        'as' => 'generated::9d6JoScfH67IDxkI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yhPaKRNxMjawSdfV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/employees/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/employees',
        'where' => 
        array (
        ),
        'as' => 'generated::yhPaKRNxMjawSdfV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oBfGaq3rC0t1gE8A' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/employees/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/employees',
        'where' => 
        array (
        ),
        'as' => 'generated::oBfGaq3rC0t1gE8A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::23I8Q64SeZ0ubGJg' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/employees/user/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
          4 => 'permission:delete_user',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/employees',
        'where' => 
        array (
        ),
        'as' => 'generated::23I8Q64SeZ0ubGJg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::E5vZEyme3byVdQyw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/employees/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/employees',
        'where' => 
        array (
        ),
        'as' => 'generated::E5vZEyme3byVdQyw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::h6U4oHD64g1DHoYc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/employees/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@employeeProfile',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@employeeProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/employees',
        'where' => 
        array (
        ),
        'as' => 'generated::h6U4oHD64g1DHoYc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard.customers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@customers',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@customers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/customers',
        'where' => 
        array (
        ),
        'as' => 'dashboard.customers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0MLQz2sGGt42Ank9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/customers/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@customersList',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@customersList',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/customers',
        'where' => 
        array (
        ),
        'as' => 'generated::0MLQz2sGGt42Ank9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cwF31I0BzdpwU3a1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/customers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@createCustomer',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@createCustomer',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/customers',
        'where' => 
        array (
        ),
        'as' => 'generated::cwF31I0BzdpwU3a1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GErza7A9fNGyeIVl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/customers/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@storeCustomer',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@storeCustomer',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/customers',
        'where' => 
        array (
        ),
        'as' => 'generated::GErza7A9fNGyeIVl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::uVY3WQrnYPH0REhM' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/customers/user/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
          4 => 'permission:delete_user',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/customers',
        'where' => 
        array (
        ),
        'as' => 'generated::uVY3WQrnYPH0REhM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HXLRaQhv2uT5BTZa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/customers/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/customers',
        'where' => 
        array (
        ),
        'as' => 'generated::HXLRaQhv2uT5BTZa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::n5Yhq2AQ2l4fjzLr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/customers/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@customerProfile',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@customerProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/customers',
        'where' => 
        array (
        ),
        'as' => 'generated::n5Yhq2AQ2l4fjzLr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::b6rFP2TMDy1XL3i5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/roles/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\RolesController@listRoles',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\RolesController@listRoles',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::b6rFP2TMDy1XL3i5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rXi0maNwIKguio1s' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/acl/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\RolesController@roles',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\RolesController@roles',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/acl/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::rXi0maNwIKguio1s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3RjBYwuSLpncxO4g' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/acl/roles/{id}/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\RolesController@permissions',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\RolesController@permissions',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/acl/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::3RjBYwuSLpncxO4g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2EDRuN703ZlklDjH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/acl/roles/{id}/toggle_permission/{permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\RolesController@togglePermissions',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\RolesController@togglePermissions',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/acl/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::2EDRuN703ZlklDjH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Tcww1BLgQi0Gp01G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NotificationsController@all',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NotificationsController@all',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/notifications',
        'where' => 
        array (
        ),
        'as' => 'generated::Tcww1BLgQi0Gp01G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jqx1zN5VhSuzFHU8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/notifications/unread',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NotificationsController@unread',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NotificationsController@unread',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/notifications',
        'where' => 
        array (
        ),
        'as' => 'generated::jqx1zN5VhSuzFHU8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Wpt4DlubbPdjdq0n' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/notifications/mark_as_read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NotificationsController@markAsRead',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NotificationsController@markAsRead',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/notifications',
        'where' => 
        array (
        ),
        'as' => 'generated::Wpt4DlubbPdjdq0n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HaIlJDeVaWQktkps' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\UploadController@index',
        'controller' => 'App\\Http\\Controllers\\UploadController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::HaIlJDeVaWQktkps',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard.error_logs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/error_logs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'permission:view_error_logs',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ErrorLogsController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ErrorLogsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'dashboard.error_logs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BvC5iUk0w8mEI2I5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UpdateController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UpdateController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::BvC5iUk0w8mEI2I5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::K07PL6zoWlvNqWTd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/update/refresh_app',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UpdateController@resetAppAfterUpdate',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UpdateController@resetAppAfterUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::K07PL6zoWlvNqWTd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::66h60uKrOD2LESfK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/insights/tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\InsightsController@ticketsOverview',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\InsightsController@ticketsOverview',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::66h60uKrOD2LESfK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard.lang' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/lang.js',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@langJs',
        'file' => 'js',
        'controller' => 'App\\Http\\Controllers\\LanguageController@langJs',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'dashboard.lang',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::linCQPnrclajQsiL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/available_languages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@languages',
        'controller' => 'App\\Http\\Controllers\\LanguageController@languages',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::linCQPnrclajQsiL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LOz0MKe8xAQ3FQEj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/{user_id}/purchases',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CustomerPurchaseController@listPurchase',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CustomerPurchaseController@listPurchase',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/{user_id}/purchases',
        'where' => 
        array (
        ),
        'as' => 'generated::LOz0MKe8xAQ3FQEj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AdB9W8VQlNMvO1OH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/{user_id}/purchases/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CustomerPurchaseController@updateEnvatoCustomerPurchaseList',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CustomerPurchaseController@updateEnvatoCustomerPurchaseList',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/{user_id}/purchases',
        'where' => 
        array (
        ),
        'as' => 'generated::AdB9W8VQlNMvO1OH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard.modules_manager' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/modules_manager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ModulesManagerController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ModulesManagerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/modules_manager',
        'where' => 
        array (
        ),
        'as' => 'dashboard.modules_manager',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BVu1i7scmlY159zZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/modules_manager/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ModulesManagerController@list',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ModulesManagerController@list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/modules_manager',
        'where' => 
        array (
        ),
        'as' => 'generated::BVu1i7scmlY159zZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard.modules_manager.toggle_module_status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/modules_manager/{module}/toggle_module_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ModulesManagerController@toggleModuleStatus',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ModulesManagerController@toggleModuleStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/modules_manager',
        'where' => 
        array (
        ),
        'as' => 'dashboard.modules_manager.toggle_module_status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard.modules_manager.thumbnail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/modules_manager/{module}/thumbnail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ModulesManagerController@moduleThumbnail',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ModulesManagerController@moduleThumbnail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/modules_manager',
        'where' => 
        array (
        ),
        'as' => 'dashboard.modules_manager.thumbnail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fOP95cVWozTqBWyk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/database/migration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'dashboard',
          1 => 'role:agent|non-restricted_agent|admin|super_admin',
          2 => 'verified',
          3 => 'role:admin|super_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@migration',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SettingsController@migration',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'dashboard/database',
        'where' => 
        array (
        ),
        'as' => 'generated::fOP95cVWozTqBWyk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'public',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BG8Rfx0xnDWEJ8bb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'public',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::BG8Rfx0xnDWEJ8bb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'public',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'public',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::l5XKQF0zrN7vScVj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'public',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::l5XKQF0zrN7vScVj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'public',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'public',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'public',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'public',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'verification.notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'public',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VerificationController@show',
        'controller' => 'App\\Http\\Controllers\\Auth\\VerificationController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'verification.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email/verify/{id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'public',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VerificationController@verify',
        'controller' => 'App\\Http\\Controllers\\Auth\\VerificationController@verify',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'verification.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'verification.resend' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'email/resend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'public',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VerificationController@resend',
        'controller' => 'App\\Http\\Controllers\\Auth\\VerificationController@resend',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'verification.resend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'install.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Install\\InstallController@index',
        'controller' => 'App\\Http\\Controllers\\Install\\InstallController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
        'as' => 'install.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'install.requirements' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'install/requirements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Install\\InstallController@requirements',
        'controller' => 'App\\Http\\Controllers\\Install\\InstallController@requirements',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
        'as' => 'install.requirements',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'install.folder_permissions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'install/folder_permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Install\\InstallController@folderPermissions',
        'controller' => 'App\\Http\\Controllers\\Install\\InstallController@folderPermissions',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
        'as' => 'install.folder_permissions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'install.product_license' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'install/product_license',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Install\\InstallController@productLicense',
        'controller' => 'App\\Http\\Controllers\\Install\\InstallController@productLicense',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
        'as' => 'install.product_license',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'install.database' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'install/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Install\\InstallController@database',
        'controller' => 'App\\Http\\Controllers\\Install\\InstallController@database',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
        'as' => 'install.database',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'install.admin_account' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'install/admin_account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Install\\InstallController@createUser',
        'controller' => 'App\\Http\\Controllers\\Install\\InstallController@createUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
        'as' => 'install.admin_account',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'install.finish' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'install/finish',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Install\\InstallController@finish',
        'controller' => 'App\\Http\\Controllers\\Install\\InstallController@finish',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
        'as' => 'install.finish',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'modules.customizer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/customizer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin_only',
          1 => 'web',
        ),
        'uses' => 'Modules\\Customizer\\Http\\Controllers\\CustomizerController@index',
        'controller' => 'Modules\\Customizer\\Http\\Controllers\\CustomizerController@index',
        'namespace' => 'Modules\\Customizer\\Http\\Controllers',
        'prefix' => 'dashboard/customizer',
        'where' => 
        array (
        ),
        'as' => 'modules.customizer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DldQ3fNAdoeMeRNB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/customizer/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin_only',
          1 => 'web',
        ),
        'uses' => 'Modules\\Customizer\\Http\\Controllers\\CustomizerController@store',
        'controller' => 'Modules\\Customizer\\Http\\Controllers\\CustomizerController@store',
        'namespace' => 'Modules\\Customizer\\Http\\Controllers',
        'prefix' => 'dashboard/customizer',
        'where' => 
        array (
        ),
        'as' => 'generated::DldQ3fNAdoeMeRNB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hdtb8REM01LiCSiu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/customizer/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin_only',
          1 => 'web',
        ),
        'uses' => 'Modules\\Customizer\\Http\\Controllers\\CustomizerController@fetch',
        'controller' => 'Modules\\Customizer\\Http\\Controllers\\CustomizerController@fetch',
        'namespace' => 'Modules\\Customizer\\Http\\Controllers',
        'prefix' => 'dashboard/customizer',
        'where' => 
        array (
        ),
        'as' => 'generated::hdtb8REM01LiCSiu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'languages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/languages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'vendor_web',
          2 => 'auth',
          3 => 'admin_only',
        ),
        'uses' => 'Modules\\Translation\\Http\\Controllers\\LanguageController@index',
        'controller' => 'Modules\\Translation\\Http\\Controllers\\LanguageController@index',
        'namespace' => 'Modules\\Translation\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'languages.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Wx8KtrL9YZrdFec4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/languages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'vendor_web',
          2 => 'auth',
          3 => 'admin_only',
        ),
        'uses' => 'Modules\\Translation\\Http\\Controllers\\LanguageController@list',
        'controller' => 'Modules\\Translation\\Http\\Controllers\\LanguageController@list',
        'namespace' => 'Modules\\Translation\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::Wx8KtrL9YZrdFec4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'languages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/languages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'vendor_web',
          2 => 'auth',
          3 => 'admin_only',
        ),
        'uses' => 'Modules\\Translation\\Http\\Controllers\\LanguageController@create',
        'controller' => 'Modules\\Translation\\Http\\Controllers\\LanguageController@create',
        'namespace' => 'Modules\\Translation\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'languages.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'languages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/languages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'vendor_web',
          2 => 'auth',
          3 => 'admin_only',
        ),
        'uses' => 'Modules\\Translation\\Http\\Controllers\\LanguageController@store',
        'controller' => 'Modules\\Translation\\Http\\Controllers\\LanguageController@store',
        'namespace' => 'Modules\\Translation\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'languages.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZVAlDunCKrnyEv4z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/languages/{language}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'vendor_web',
          2 => 'auth',
          3 => 'admin_only',
        ),
        'uses' => 'Modules\\Translation\\Http\\Controllers\\LanguageController@delete',
        'controller' => 'Modules\\Translation\\Http\\Controllers\\LanguageController@delete',
        'namespace' => 'Modules\\Translation\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::ZVAlDunCKrnyEv4z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'languages.translations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/languages/{language}/translations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'vendor_web',
          2 => 'auth',
          3 => 'admin_only',
        ),
        'uses' => 'Modules\\Translation\\Http\\Controllers\\LanguageTranslationController@index',
        'controller' => 'Modules\\Translation\\Http\\Controllers\\LanguageTranslationController@index',
        'namespace' => 'Modules\\Translation\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'languages.translations.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'languages.translations.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/languages/{language}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'vendor_web',
          2 => 'auth',
          3 => 'admin_only',
        ),
        'uses' => 'Modules\\Translation\\Http\\Controllers\\LanguageTranslationController@update',
        'controller' => 'Modules\\Translation\\Http\\Controllers\\LanguageTranslationController@update',
        'namespace' => 'Modules\\Translation\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'languages.translations.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'languages.translations.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/languages/{language}/translations/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'vendor_web',
          2 => 'auth',
          3 => 'admin_only',
        ),
        'uses' => 'Modules\\Translation\\Http\\Controllers\\LanguageTranslationController@create',
        'controller' => 'Modules\\Translation\\Http\\Controllers\\LanguageTranslationController@create',
        'namespace' => 'Modules\\Translation\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'languages.translations.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'languages.translations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/languages/{language}/translations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'vendor_web',
          2 => 'auth',
          3 => 'admin_only',
        ),
        'uses' => 'Modules\\Translation\\Http\\Controllers\\LanguageTranslationController@store',
        'controller' => 'Modules\\Translation\\Http\\Controllers\\LanguageTranslationController@store',
        'namespace' => 'Modules\\Translation\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'languages.translations.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'locale' => '[a-z]{2}',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
