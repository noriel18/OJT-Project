<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'studentcontroller@index');
Route::get('/index', 'studentcontroller@index')->name('student.index');
Route::get('/create', 'studentcontroller@create')->name('student.create');
Route::post('/store', 'studentcontroller@store')->name('student.store');

Route::get('/edit/{student}', 'studentcontroller@edit')->name('student.edit');
Route::post('/student/{student}', 'studentcontroller@update')->name('student.update');

Route::post('/student_delete', 'studentcontroller@destroy')->name('student.destroy');

Route::get('/delete', 'studentcontroller@delete')->name('student.delete');

Route::get('/view/{id}', 'studentcontroller@view')->name('student.view');
Route::get('/view2', 'studentcontroller@view2')->name('student.view2');

Route::post('/destroyer', 'studentcontroller@destroyer')->name('student.destroyer');

Route::get('/search', 'studentcontroller@search');

Route::get('/studentinfo', 'studentcontroller@studentinfo')->name('student.studentinfo');

Route::get('/view3', 'studentcontroller@view3')->name('student.view3');

Route::get('/archive', 'studentcontroller@archive')->name('student.archive');


