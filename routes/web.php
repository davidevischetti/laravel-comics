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
    return view('home');
})->name('home');

Route::get('/comics', function () {
    return view('comics', [
        'title' => 'Comics',
        'comics_arr' => config('comics'),
    ]);
})->name('comics');

Route::get('/comics/{id}', function ($id) {
    $comic = null;
    foreach (config('comics') as $value) {
        if ($value['id'] == $id) {
            $comic = $value;
            break;
        }
    }

    if ($comic) {
        return view('comic_info', [
            'comic' => $comic,
        ]);
    } else {
        abort(404);
    }
})->name('comic_info');


// Route::get('/comics/{id}', function ($id) {
    // foreach (config('comics_arr') as $value) {
    //     if ($value['id'] == $id) {
    //         $comic = $value;
    //         break;
    //     }
    // }

    // if ($comic) {
        // return view('comic_info', [
        //     'title' => 'wewe',
        //     'comic' => $comic,
        // ]);
    // } else {
    //     abort(404);
    // }

// })->name('comic_info');
