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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['auth'] = 'Back/auth';

////////////////// UANG SALDO KAS MASJID //////////////////
$route['uang-kas'] = 'Back/kas/uang_kas';
$route['pemasukan-kas-sv'] = 'Back/kas/pemasukan_kas_sv';
$route['pengeluaran-kas-sv'] = 'Back/kas/pengeluaran_kas_sv';
$route['ubah-saldo'] = 'Back/kas/ubah_saldo';
$route['ubah-saldo-sv'] = 'Back/kas/ubah_saldo_sv';
$route['delete-saldo'] = 'Back/kas/delete_saldo';
//////////////////////////////////////////////////////////



//////////////////// JADWAL KHOTIB /////////////////////////
$route['jadwal-imam-khotib'] = 'Back/Jadwal_imam';
$route['tambah-imam'] = 'Back/Jadwal_imam/tambah_imam';
$route['delete-imam'] = 'Back/Jadwal_imam/delete_imam';
///////////////////////////////////////////////////////////

//////////// RUNNING TEKS ///////////////////////////
$route['running-teks-berita'] = 'Back/runningteks';
$route['running-text-sv'] = 'Back/runningteks/running_text_sv';
/////////////////////////////////////////////////////


/////////////////// VIDEO DISPLAY ///////////////////
$route['video-setting'] = 'Back/videodisplay';
$route['video-upload-setting'] = 'Back/videodisplay/video_upload_setting';
/////////////////////////////////////////////////////


////////////// DASHBOARD //////////////////////////////
$route['get-data-by-month'] = 'Back/dash/get_data_by_month';
$route['imam/(:any)'] = 'Back/dash/imam/$1';
///////////////////////////////////////////////////////


////////////// KAS ///////////////////////////////////
$route['kas/(:any)'] = 'Back/dash/kas/$1';
/////////////////////////////////////////////////////


////////////// HADIST QUOTE //////////////////////////
$route['hadist_quote/(:any)'] = 'Back/dash/hadist_quote/$1';
$route['get-hadist'] = 'Back/dash/get_hadist';
$route['save-hadist-quote'] = 'Back/dash/save_hadist_quote';
$route['hapus-hadist/(:any)'] = 'Back/dash/hapus_hadist/$1';
/////////////////////////////////////////////////////


////////////// JADWAL SHOLAT ////////////////////////
$route['running_text/(:any)'] = 'Back/dash/running_text/$1';
$route['save-running-text'] = 'Back/dash/save_running_text';
////////////////////////////////////////////////////

//////////////////// VIDEO DISPLAY ///////////////////
$route['video_display/(:any)'] = 'Back/dash/video_display/$1';
$route['save-video-display'] = 'Back/dash/save_video_display';


////////////////// SETTTING ////////////////////////
$route['background'] = 'Back/dash/background';
$route['save-background-image'] = 'Back/dash/save_background_image';
$route['hapus_background/(:any)'] = 'Back/dash/hapus_background/$1';
