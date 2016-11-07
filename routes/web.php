<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | This file is where you may define all of the routes that are handled
  | by your application. Just tell Laravel the URIs it should respond
  | to using a Closure or controller method. Build something great!
  |
 */

Route::get('/', function () {
    return view('home');
});


Route::get('settings/users', function () {
    return view('settings/users');
});

Route::get('settings/roles', function () {
    return view('settings/roles');
});

Route::get('settings/machine-types', function () {
    return view('settings/machine-types');
});

Route::get('settings/workflow-stages', function () {
    return view('settings/workflow-stages');
});

Route::get('settings/workflow-stages', function () {
    return view('settings/workflow-stages');
});

Route::get('settings/notifications', function () {
    return view('settings/notifications');
});

Route::get('settings/shipping', function () {
    return view('settings/shipping');
});

Route::get('settings/email-templates', function () {
    return view('settings/email-templates');
});

Route::get('settings/payment-gateways', function () {
    return view('settings/payment-gateways');
});

Route::get('settings/pricing', function () {
    return view('settings/pricing');
});







//Route::get('layouts/grids', function () {
//    return view('layouts/grids');
//});
//Route::get('layouts/layout-grids', function () {
//    return view('layouts/layout-grids');
//});
//Route::get('layouts/headers', function () {
//    return view('layouts/headers');
//});
//Route::get('layouts/panel-transition', function () {
//    return view('layouts/panel-transition');
//});
//Route::get('layouts/boxed', function () {
//    return view('layouts/boxed');
//});
//Route::get('layouts/two-columns', function () {
//    return view('layouts/two-columns');
//});
//Route::get('layouts/bordered-header', function () {
//    return view('layouts/bordered-header');
//});
//Route::get('layouts/aside-left-static', function () {
//    return view('layouts/aside-left-static');
//});
//Route::get('layouts/aside-right-static', function () {
//    return view('layouts/aside-right-static');
//});
//Route::get('layouts/aside-left-fixed', function () {
//    return view('layouts/aside-left-fixed');
//});
//Route::get('layouts/aside-right-fixed', function () {
//    return view('layouts/aside-right-fixed');
//});
//
//
//
//Route::get('pages/erroe-400', function () {
//    return view('pages/erroe-400');
//});
//Route::get('pages/erroe-403', function () {
//    return view('pages/erroe-403');
//});
//Route::get('pages/erroe-404', function () {
//    return view('pages/erroe-404');
//});
//Route::get('pages/erroe-500', function () {
//    return view('pages/erroe-500');
//});
//Route::get('pages/erroe-503', function () {
//    return view('pages/erroe-503');
//});
//
//Route::get('pages/faq', function () {
//    return view('pages/faq');
//});
//Route::get('pages/gallery', function () {
//    return view('pages/gallery');
//});
//Route::get('pages/gallery-grid', function () {
//    return view('pages/gallery-grid');
//});
//Route::get('pages/search-result', function () {
//    return view('pages/search-result');
//});
//
//
//
//Route::get('pages/map-google', function () {
//    return view('pages/map-google');
//});
//Route::get('pages/map-vector', function () {
//    return view('pages/map-vector');
//});
//Route::get('pages/maintenance', function () {
//    return view('pages/maintenance');
//});
