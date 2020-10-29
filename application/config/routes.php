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

// Akses di block
$route['blocked'] = 'Main/blocked'; 

// Login user
$route['login_user'] = 'Auth';
$route['register'] = 'Auth/register';

// User
$route['dashboard'] = 'User'; 
$route['edit_user'] = 'User/edit_user'; 
$route['matakuliah/(:num)'] = 'User/matkul/$1'; 
$route['delete_matkul/(:num)'] = 'User/delete_matkul/$1'; 

// Admin
$route['login_admin'] = 'Auth/login_admin'; 
$route['register_admin'] = 'Auth/register_admin'; 
$route['logout'] = 'Auth/logout'; 
$route['logout_admin'] = 'Auth/logout_admin'; 


// Data master
$route['dashboard_administrator'] = 'Main/index'; 
$route['administrator'] = 'Main/data_administrator'; 
$route['hapus_admin/(:num)'] = 'Main/hapus_admin/$1'; 
$route['data_mahasiswa'] = 'Main/data_mahasiswa'; 
$route['hapus_mahasiswa/(:num)'] = 'Main/hapus_mahasiswa/$1';
$route['data_matkul'] = 'Main/data_matkul'; 
$route['save_matkul'] = 'Main/save_matkul'; 
$route['hapus_matkul/(:num)'] = 'Main/hapus_matkul/$1'; 
$route['edit_admin/(:num)'] = 'Main/edit_admin/$1'; 
$route['edit_admistrator/(:num)'] = 'Main/edit_administrator/$1'; 
$route['edit_mahasiswa/(:num)'] = 'Main/edit_mahasiswa/$1'; 
$route['edit_matkul/(:num)'] = 'Main/edit_matkul/$1'; 

$route['default_controller'] = 'Auth';
$route['404_override'] = '404_notfound';
$route['translate_uri_dashes'] = FALSE;
