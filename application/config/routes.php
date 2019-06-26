<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'BukuController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['getData'] = 'BukuController/getData';
$route['getDataBuku/(:any)'] = 'BukuController/getDataBuku/$1';
$route['simpanBuku'] = 'BukuController/simpanData';
$route['ubahBuku'] = 'BukuController/ubahData';
$route['filterData/(:any)/(:any)'] = 'BukuController/filterData/$1/$2'; //any digunakan agar inputan bisa huruf/angka ..$1 & $2 digunakan untuk penamaan parameter
$route['getDataPengarang'] = 'PengarangController/getData';
$route['getDataPenerbit'] = 'PenerbitController/getData';
$route['getDataKategori'] = 'KategoriController/getData';
