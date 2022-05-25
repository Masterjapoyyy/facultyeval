<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('Faculty/editfaculty/(:num)', 'Home::editfaculty/$1');
$routes->get('Faculty/updatefaculty/(:num)', 'Faculty::updatefaculty/$1');
$routes->get('Faculty/deletefaculty/(:num)', 'Faculty::deletefaculty/$1');

$routes->get('Admin/editadmin/(:num)', 'Home::editadmin/$1');
$routes->get('Admin/updateadmin/(:num)', 'Admin::updateadmin/$1');
$routes->get('Admin/deleteadmin/(:num)', 'Admin::deleteadmin/$1');
$routes->get('Home/singleemailadmin/(:num)', 'Home::singleemailadmin/$1');

$routes->get('Student/editstudent/(:num)', 'Home::editstudent/$1');
$routes->get('Student/updatestudent/(:num)', 'Student::updatestudent/$1');
$routes->get('Student/updatestudent/(:num)', 'Student::updatestudent/$1');
$routes->get('Student/studentLogout/(:num)', 'Student::studentLogout/$1');
$routes->get('Home/singleemailstudent/(:num)', 'Home::singleemailstudent/$1');
$routes->get('/sendemail', 'Home::sendemail');

$routes->get('Subject/editsubject/(:num)', 'Home::editsubject/$1');
$routes->get('Subject/updatesubject/(:num)', 'Subject::updatesubject/$1');
$routes->get('Subject/deletesubject/(:num)', 'Subject::deletesubject/$1');

$routes->get('Course/editcourse/(:num)', 'Home::editcourse/$1');
$routes->get('Course/updatecourse/(:num)', 'Course::updatecourse/$1');
$routes->get('Course/deletecourse/(:num)', 'Course::deletecourse/$1');

$routes->get('AcademicYear/editacademicyear/(:num)', 'Home::editacademicyear/$1');
$routes->get('AcademicYear/updateacademicyear/(:num)', 'AcademicYear::updateacademicyear/$1');
$routes->get('AcademicYear/deleteacademicyear/(:num)', 'AcademicYear::deleteacademicyear/$1');

$routes->get('/', 'Home::questions/$1');
$routes->get('Question/managequestion/(:num)', 'Home::managequestion/$1');
$routes->get('Question/addquestion/(:num)', 'Question::addquestion/$1');
$routes->get('Question/deletequestion/(:num)', 'Question::deletequestion/$1');
$routes->match(['get', 'post'], '/Question/save', 'Question::save/$1');
$routes->match(['get', 'post'], '/Question/savecriteria', 'Question::savecriteria/$1');
$routes->match(['get', 'post'], '/Question/saverestrictions', 'Question::saverestrictions/$1');

$routes->match(['get', 'post'], '/Answers/saveanswers', 'Answers::saveanswers/$1');
$routes->get('Home/answer/(:num)', 'Home::answer/$1');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
