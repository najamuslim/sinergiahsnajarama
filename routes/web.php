<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('pages/home');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/home', function () {
    return view('pages/home');
});

Route::get('/admission', function () {
    return view('pages/admissionsinergiahomeschooling');
});

Route::get('/pre-school', function () {
    return view('pages/preschool');
});

Route::get('/kindergarten', function () {
    return view('pages/kindergarten');
});

Route::get('/primary', function () {
    return view('pages/primary');
});

Route::get('/secondary-1', function () {
    return view('pages/secondary-1');
});

Route::get('/a-as-level', function () {
    return view('pages/a-as-level');
});

Route::get('/igcse', function () {
    return view('pages/igcse');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/registration-form', function () {
    return view('pages/registrationform');
});

Route::get('/news', function () {
    return view('pages/news');
});

Route::get('/article', function () {
    return view('pages/article');
});

Route::get('/news-article-form', function () {
    return view('pages/newsarticleform');
});

Route::get('/we-are-hiring-teacher', function () {
    return view('pages/we-are-hiring');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('submit','RegistrantController@save');

Route::post('submit-job','AdminController@saveJob');

Route::get('/job', 'AdminController@job')->name('job');

Route::delete('/job-destroy/{id}', 'AdminController@jobDestroy')->name('job-destroy');

Route::post('/submit-working-area','AdminController@saveWorkingArea');

Route::get('/working-area', 'AdminController@workingArea')->name('working-area');

Route::delete('/working-area-destroy/{id}', 'AdminController@workingAreaDestroy')->name('working-area-destroy');

Route::get('/list-registrant', 'AdminController@getRegistrants')->name('list-registrant');

Route::get('/list-job-registrant', 'AdminController@getJobRegistrants')->name('list-job-registrant');

Route::get('list-registrant/export', 'AdminController@export');

Route::get('/download-cv/{id}', 'AdminController@downloadCV')->name('download-cv');

Route::get('/job-form', 'JobController@jobForm')->name('job-form');

Route::post('submit-job-registrant','JobController@saveJobRegistrant');

Route::get('/admin', 'AdminController@index')->name('admin');

//ckeditor
Route::post('ckeditor/upload', 'CKEditorController@upload')->name('ckeditor.image-upload');
Route::post('/save-content','CKEditorController@storeContent')->name('store.content');
Route::get('/content/{id}','CKEditorController@showContent')->name('show.content');
Route::get('/list-articles', 'CKEditorController@getArticles')->name('list-articles');
Route::get('/list-news', 'CKEditorController@getNews')->name('list-news');
Route::get('/list-careers', 'CKEditorController@getCareers')->name('list-careers');
