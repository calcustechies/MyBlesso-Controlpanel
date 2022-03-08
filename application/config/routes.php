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
$route['default_controller'] = 'WelcomeCtrl';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//INDEX PAGE
$route['Index'] = 'WelcomeCtrl/index';

//INDEX PAGE
$route['Dashboard'] = 'WelcomeCtrl/dashboard';

//JOB DETAILS PAGE
$route['Jobsdetails'] = 'WelcomeCtrl/jobsdetails';

//EMPLOYE USER DETAILS PAGE
$route['Employeeusers'] = 'WelcomeCtrl/employeeusers';

//EMPLOYER  DETAILS PAGE
$route['Employerusers'] = 'WelcomeCtrl/employerusers';

//COMPANY  DETAILS PAGE
$route['Companydetails'] = 'WelcomeCtrl/companydetails';

//PAYMENT ORDER CLIENT PAGE
$route['Paymentordersclient'] = 'WelcomeCtrl/paymentordersclient';

//PAYMENT ORDER COMPANY PAGE
$route['paymentorderscompany'] = 'WelcomeCtrl/paymentorderscompany';


//ADVERTISEMENT PAGE
$route['Advertisement'] = 'WelcomeCtrl/advertisement';



//PROFILE PAGE
$route['Profile'] = 'WelcomeCtrl/profile';


// edit PROFILE PAGE
$route['Editprofile'] = 'WelcomeCtrl/editprofile';

// Add advertisement PAGE
$route['Addadvertisement'] = 'WelcomeCtrl/addadvertisement';

// Edit advertisement PAGE
$route['Editadvertisement/(:any)'] = 'WelcomeCtrl/editadvertisement/$1';

// add advertisement PAGE
$route['InsertAdvertisement'] = 'AdvertisementCtrl/addAdvertisement';

// add advertisement PAGE
$route['UpdateAdvertisement'] = 'AdvertisementCtrl/updateAdvertisement';

// VIEW advertisement PAGE
$route['Viewadvertisement/(:any)'] = 'WelcomeCtrl/viewadvertisement/$1';


// VIEW Category PAGE
$route['Category'] = 'WelcomeCtrl/category';

// VIEW Category PAGE
$route['Editcategory/(:any)'] = 'WelcomeCtrl/editcategory/$1';


// VIEW Category PAGE
$route['Addcategory'] = 'WelcomeCtrl/addcategory';


// View One Job 
$route['viewJobDetails/(:any)'] = 'WelcomeCtrl/viewJobDetails/$1';


// View One Job 
$route['viewUserDetails/(:any)'] = 'WelcomeCtrl/viewUserDetails/$1';