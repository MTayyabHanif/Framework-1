<?php

/**
 * SilverEngine  - PHP MVC framework
 *
 * @package   SilverEngine
 * @author    SilverEngine Team
 * @copyright 2015-2017
 * @license   MIT
 * @link      https://github.com/SilverEngine/Framework
 */

namespace App;

use Silver\Core\Route;

Route::get('/', 'Welcome@index', 'home', 'public');
Route::get('/register', 'Auth/Auth@register', 'auth_login', 'public');

// Route for Blog controller.
Route::resource('/blog', 'Blog@get', 'blog');


// Route handling login admin
Route::get('/login', 'Login@get', 'admin_login');

// Route for Contact controller.
Route::resource('/contact', 'Contact@get', 'contact');

Route::group(['prefix' => 'admin'], function(){
  Route::resource('/', 'Test@get', 'contact');
});

// no cookie or something?


