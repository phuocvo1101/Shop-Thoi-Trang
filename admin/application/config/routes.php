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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['login'] = 'login';
$route['default_controller'] = 'quantri';
$route['san-pham']='sanpham/danhsach';
$route['san-pham/(:any)']='sanpham/danhsach';
$route['san-pham/them']='sanpham/themsanpham';
$route['san-pham/cap-nhat/(:num)']='sanpham/capnhat';
$route['san-pham/xoa/(:num)']='sanpham/xoa';
$route['san-pham/thuc-hien-xoa/(:num)']='sanpham/thuchienxoa';
$route['nguoi-dung']='nguoidung/danhsachnguoidung';
$route['nguoi-dung/them']='nguoidung/themnguoidung';
$route['nguoi-dung/cap-nhat/(:num)']='nguoidung/capnhatnguoidung';
$route['nguoi-dung/xoa/(:num)']='nguoidung/xoa';
$route['nguoi-dung/thuc-hien-xoa/(:num)']='nguoidung/thuc_hien_xoa';
$route['nguoi-dung/(:any)']='nguoidung/danhsachnguoidung';
$route['khach-hang']='khachhang/danhsachkhachhang';
$route['khach-hang/(:any)']='khachhang/danhsachkhachhang';
$route['khach-hang/them']='khachhang/themkhachhang';
$route['khach-hang/cap-nhat/(:num)']='khachhang/capnhatkhachhang';
$route['khach-hang/xoa/(:num)']='khachhang/xoa';
$route['khach-hang/thuc-hien-xoa/(:num)']='khachhang/thuc_hien_xoa';
$route['don-hang']='donhang/danhsachdonhang';
$route['don-hang/(:any)']='donhang/danhsachdonhang';
$route['don-hang/them']='donhang/themdonhang';
$route['don-hang/cap-nhat/(:num)']='donhang/capnhatdonhang';
$route['don-hang/xoa/(:num)']='donhang/xoa';
$route['don-hang/thuc-hien-xoa/(:num)']='donhang/thuc_hien_xoa';
$route['chi-tiet-don-hang/(:num)']='donhang/chitietdonhang';

$route['dang-xuat']='quantri/logout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
