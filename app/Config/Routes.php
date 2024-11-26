<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'landing::index');
$routes->get('/login-member', 'landing::login_member');
$routes->post('login-member', 'landing::prosesLoginMember');
$routes->get('/member', 'landing::member');
$routes->get('/menurunkan-berat-badan', 'landing::k1');
$routes->get('/penaikan-berat-badan', 'landing::k2');
$routes->get('/maintenance-berat-badan', 'landing::k3');
$routes->get('/daftar', 'landing::daftar_member');
$routes->post('/daftar', 'landing::proses_daftar');
$routes->get('/admin123', 'admin::index');
$routes->post('/admin123', 'admin::prosesloginadmin');
$routes->get('/dashboard', 'admin::dashboard');
$routes->get('/produk', 'admin::produk');
$routes->get('/akun', 'admin::user_login');
$routes->get('/hitung-bmi', 'landing::bmi');
$routes->post('/hitung-bmi', 'landing::calculate');

$routes->get('/tambah-produk', 'admin::add_produk');
$routes->post('/tambah-produk', 'admin::proses_add_produk');
$routes->get('/edit-menu/(:any)', 'admin::edit_menu/$1');
$routes->post('/edit-menu', 'admin::proses_edit_menu');
$routes->get('/hapus-menu/(:any)', 'admin::hapusMenu/$1');

$routes->get('/tambah-user', 'admin::add_user_login');
$routes->post('/tambah-user', 'admin::proses_add_user');
$routes->get('/edit-user/(:any)', 'admin::edit_user/$1');
$routes->post('/edit-user', 'admin::proses_edit_user');
$routes->get('/hapus-user/(:any)', 'admin::hapususer/$1');

$routes->get('/pengaturan/(:any)', 'admin::setting/$1');
$routes->post('/pengaturan/(:any)', 'admin::proses_edit_admin');

$routes->get('/logout', 'admin::logout');
$routes->get('/member-logout', 'admin::mem_logout');

