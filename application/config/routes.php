<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['(about-us)']    = 'About/index/';
$route['(contact-us)']  = 'Contact/index/';
$route['(our-faculty)'] = 'Faculty/index/';
$route['(our-courses)'] = 'Course/index/';
$route['(gallery)'] = 'Gallery/index/';
$route['(send-inq)'] = 'Sendinq/index/';

$route['(privacy)'] = 'Privacy/index/';
$route['(terms)']   = 'Terms/index/';
$route['(admission-policies)'] = 'Admission_policies/index/';
$route['(:any)'] = 'Course_details/index/';