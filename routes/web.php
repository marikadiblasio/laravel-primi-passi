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

Route::get('/', function () {
    $data =
    [
        'title' => 'Hello Word',
        'navlinks' => [
            'about' =>'About Us',
            'info' =>'Info',
            'contacts' => 'Contact Us'
        ]
    ];
    return view('home', $data);
})->name('home');
Route::get('/about', function () {
    $data =
    [
        'title' => 'About Us',
        'links' => [
            'Our History',
            'Our Mission',
            'Our Goals'
        ],
    ];
    return view('about', $data);
})->name('about');
Route::get('/contacts', function () {
    $data =
    [
        'title' => 'Contatti',
        'ourcontacts' => [
            'address' => 'via Pluto, 10',
            'phone' => '392939204',
            'email' =>'cipcip@cip.com'
        ]
    ];
    return view('contacts', $data);
}) ->name('contacts');
Route::get('/info', function () {
    $data =
    [
        'title' => 'Info'
    ];
    return view('info', $data);
}) ->name('info');
