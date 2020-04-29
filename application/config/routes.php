<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'welcome';
$route['404_override'] = 'custom404';
$route['admin/dashboard'] = 'admin/welcome/home';
$route['admin/corporate'] = 'admin/corporate';
$route['pembayaran_mahasiswa_uir'] = 'produk/pmb';
$route['admin/profil'] = 'admin/profil';
$route['pengkinian_nasabah'] = 'news/pengkinian_data';


$route['admin/registration'] = 'admin/welcome/registration';
$route['admin/add_slider'] = 'admin/slider/tambahSlider';
$route['admin/slider'] = 'admin/slider';

// Routes for Layanan
$route['admin/layanan'] = 'admin/layanan';
$route['admin/add_layanan'] = 'admin/layanan/add_layanan';
$route['admin/delete_layanan/(:any)'] = 'admin/layanan/delete/$1';

// Routes for Produk
$route['admin/produk'] = 'admin/produk';
$route['admin/add_produk'] = 'admin/produk/add_produk';
$route['admin/delete_produk/(:any)'] = 'admin/produk/delete/$1';

// Routes for Jenis produk
$route['admin/add_jenis'] = 'admin/jenis/add_jenis';
$route['admin/jenis'] = 'admin/jenis';

// Routes for Jabatan
$route['admin/add_jabatan'] = 'admin/jabatan/tambahJabatan';
$route['admin/jabatan'] = 'admin/jabatan/jabatan';

// Routes for Pegawai
$route['admin/pegawai'] = 'admin/pegawai';
$route['admin/add_pegawai'] = 'admin/pegawai/tambahPegawai';

// Routes for Awards
$route['admin/add_awards'] = 'admin/awards/tambahAwards';
$route['admin/awards'] = 'admin/awards';
$route['admin/delete_awards/(:any)'] = 'admin/awards/delete/$1';

//Routes for kategori
$route['admin/kategori'] = 'admin/kategori/index';
$route['admin/add_kategori'] = 'admin/kategori/add_kategori';
$route['admin/delete_kategori/(:any)'] = 'admin/kategori/delete_kategori/$1';
//Routes for kategori
$route['admin/berita'] = 'admin/berita';
$route['admin/update/(:any)'] = 'admin/berita/update/$1';
$route['admin/add_berita'] = 'admin/berita/add_berita';
$route['admin/delete_berita/(:any)'] = 'admin/berita/delete/$1';
//Routes for Auth function
$route['admin'] = 'admin/welcome/index';
$route['admin/logout'] = 'admin/welcome/logout';
//Routes for Page Tentang
$route['profil'] = 'tentang_kami/index';
$route['sejarah'] = 'tentang_kami/sejarah';
$route['visi_misi'] = 'tentang_kami/visi_misi';
$route['manajemen'] = 'tentang_kami/manajemen';
$route['struktur'] = 'tentang_kami/struktur';
$route['awards'] = 'tentang_kami/awards';
$route['location'] = 'tentang_kami/location';
$route['translate_uri_dashes'] = FALSE;
