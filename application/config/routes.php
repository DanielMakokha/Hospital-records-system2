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
$route['default_controller'] = 'Usercontrol/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//====================

$route['Indexcontrol/index_view'] = 'Indexcontrol/index_view';
$route['Indexcontrol/datatables'] = 'Indexcontrol/datatables';
$route['Admissioncontrol/opd_form'] = 'Admissioncontrol/opd_form';
$route['Admissioncontrol/patient_edit_option'] = 'Admissioncontrol/patient_edit_option';
$route['Admissioncontrol/edit_opd_form'] = 'Admissioncontrol/edit_opd_form';
$route['Admissioncontrol/patientdataview'] = 'Admissioncontrol/patientdataview';
$route['Indexcontrol/settings'] = 'Indexcontrol/settings';
$route['Indexcontrol/forgotpass'] = 'Indexcontrol/forgotpass';
$route['Indexcontrol/forgot_secretquestion'] = 'Indexcontrol/forgot_secretquestion';
$route['Indexcontrol/create_newpass'] = 'Indexcontrol/create_newpass';
$route['Indexcontrol/secretquestion'] = 'Indexcontrol/secretquestion';
$route['Usercontrol/register'] = 'Usercontrol/register';
$route['Usercontrol/login'] = 'Usercontrol/login';