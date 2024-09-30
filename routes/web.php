<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
   ->middleware('auth');

Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);

Route::add(['GET', 'POST'], '/employee', [Controller\Site::class, 'employee'])
   ->middleware('auth', "admin");

Route::add(['GET', 'POST'], '/emp', [Controller\Site::class, 'emp'])
   ->middleware('auth', "hr");
Route::add(['GET', 'POST'], '/subunit', [Controller\Site::class, 'subunit'])
   ->middleware('auth', "hr");
Route::add(['GET', 'POST'], '/calculate', [Controller\Site::class, 'calculate'])
   ->middleware('auth', "hr");
Route::add(['GET', 'POST'], '/subunit_sel', [Controller\Site::class, 'subunit_sel'])
   ->middleware('auth', "hr");