<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['404_override'] = 'errors/error_404';
$route['default_controller'] = 'site/landing/index';
$route['logout'] = 'site/user/logout';
$route['s'] = 'site/search/product_search';
$route['add_listing'] = 'site/product/add_listing';

$route['add_new_listing/(:num)'] = 'site/product/add_new_listing/$1';
$route['rooms/(:num)'] = 'site/product/rooms/$1';
$route['calendar'] = 'site/product/calendar';
$route['payment/book/house-rules'] = 'site/product/booking_step1';
$route['payment/book/whos-coming'] = 'site/product/booking_step2';
$route['payment/book/confirm-and-pay'] = 'site/product/booking_step3';
$route['inbox'] = 'site/user/inbox';
$route['user_inbox'] = 'site/user/user_inbox';
$route['request_response/(:num)'] = 'site/user/request_response/$1';
$route['request_approve/(:num)'] = 'site/user/request_approve/$1';
$route['request_book_payment/(:num)'] = 'site/product/request_book_payment/$1';
$route['trips'] = 'site/user/trips';
$route['listings'] = 'site/user/listings';
$route['stats'] = 'site/user/stats';
$route['users/edit'] = 'site/user/edit';
$route['users/show/(:num)'] = 'site/user/user_profile/$1';
$route['users/account_settings'] = 'site/user/account_settings';
$route['users/payment'] = 'site/user/payment';
$route['email_verification/(:num)'] = 'site/user/email_verification/$1';
$route['id_verify/step1'] = 'site/user/id_step1';
$route['id_verify/step2'] = 'site/user/id_step2';
$route['host_dashboard'] = 'site/user/host_dashboard';
$route['view_notification'] = 'site/user/view_notification';
$route['page/(:any)'] = 'site/cms/page/$1';
$route['services/(:any)/(:num)'] = 'site/cms/services/$1/$1';
$route['contact_us'] = 'site/landing/contact_us';
$route['email_verify/(:num)'] = 'site/user/email_verification/$1';
$route['invoice/(:num)'] = 'site/product/invoice/$1';
//admin
$route['admin'] = 'admin/admin_settings/login';
$route['admin/dashboard'] = 'admin/admin_settings/dashboard';

