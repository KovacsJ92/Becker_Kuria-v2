<?php

use Illuminate\Http\Request;
use App\Mail\SendContactMail;
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

Route::group(
[
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'localize' ]
],function()
{

    // Route::view('/', 'pages.index')->name('pages.index');

    Route::get('/', function () {
        return view ('pages.index');
    });

    Route::get(LaravelLocalization::transRoute('route.room'), function () {
        return view('pages.room');
    })->name('pages.room');

    // Route::get('szoba', function () {
    //     return view ('pages.room');
    // })->name('pages.room');

    Route::get('lakosztaly', function () {
        return view ('pages.suite');
    })->name('pages.suite');

    Route::post('kapcsolat-uzenet-kuldese', function (Request $request) {
        \Mail::to(env('MAIL_TO_ADDRESS'))
            ->send(new SendContactMail($request->all()));

        return redirect('/#kapcsolat')->with('status', 'Sikeres üzenet küldés!');
    })->name('send-contact-mail');
});
