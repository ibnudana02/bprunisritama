<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = 'custom404';


$route['admin/kantor'] = 'admin/manage/kantor';
$route['admin/add_kantor'] = 'admin/manage/tambah_kantor';
$route['admin/dashboard'] = 'admin/welcome/home';
$route['admin/welcome'] = 'admin/welcome/index';
$route['admin/corporate'] = 'admin/corporate';
$route['pembayaran_mahasiswa_uir'] = 'produk/pmb';
$route['payment-point'] = 'produk/ppob';
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
$route['admin/edit/(:any)'] = 'admin/produk/edit/$1';
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
//Routes for Berita
$route['admin/berita'] = 'admin/berita';
$route['admin/update/(:any)'] = 'admin/berita/update/$1';
$route['admin/add_berita'] = 'admin/berita/add_berita';
$route['admin/delete_berita/(:any)'] = 'admin/berita/delete/$1';
// Routes for Laporan
$route['admin/laporan'] = 'admin/laporan/index';
$route['admin/delete_laporan/(:any)'] = 'admin/laporan/delete/$1';
$route['admin/add_laporan'] = 'admin/laporan/tambah_laporan';

//Routes for Auth function
$route['admin'] = 'admin/welcome/index';
$route['admin/logout'] = 'admin/welcome/logout';

// Routes for data master
$route['send-mail'] = 'produk/send';
$route['del-nsb/(:any)'] = 'admin/master/delete/$1';
$route['nasabah-tab'] = 'admin/master';
$route['acc-nsb/(:any)'] = 'admin/master/approve/$1';
$route['cetak-nasabah-tab/(:any)'] = 'admin/master/print_nasabah/$1';


$route['gcg'] = 'news/gcg';
$route['publikasi'] = 'news/publikasi';
$route['berita'] = 'news/berita';
$route['berita/(:any)'] = 'news/detailBerita/$1';
$route['produk/(:any)'] = 'produk/detailProduk/$1';
$route['kategori_berita/(:any)'] = 'news/kategoriBerita/$1';

//Routes for Page Tentang
$route['pembukaan-rekening-tabungan'] = 'produk/createTab';
$route['pembukaan-rekening-deposito'] = 'produk/createDps';
$route['pengajuan-aplikasi-kredit'] = 'produk/createKrd';
$route['produk'] = 'produk/produk';
$route['getDati'] = 'welcome/getDati';
$route['dana'] = 'produk/dana';
$route['deposito'] = 'produk/deposito';
$route['kredit'] = 'produk/kredit';
$route['tabungan'] = 'produk/tabungan';
$route['profil'] = 'tentang_kami/index';
$route['sejarah'] = 'tentang_kami/sejarah';
$route['visi_misi'] = 'tentang_kami/visi_misi';
$route['manajemen'] = 'tentang_kami/manajemen';
$route['struktur'] = 'tentang_kami/struktur';
$route['awards'] = 'tentang_kami/awards';
$route['location'] = 'tentang_kami/location';
$route['contact'] = 'tentang_kami/contact';
// $route['(.*)'] = 'custom404';
$route['translate_uri_dashes'] = FALSE;
