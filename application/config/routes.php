<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'makanan';

$route['makanan'] = 'makanan';
$route['makanan/create'] = 'makanan/create';
$route['makanan/store'] = 'makanan/store';
$route['makanan/edit/(:num)'] = 'makanan/edit/$1';
$route['makanan/update/(:num)'] = 'makanan/update/$1';
$route['makanan/delete/(:num)'] = 'makanan/delete/$1';
$route['makanan/order/(:num)'] = 'makanan/order/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

