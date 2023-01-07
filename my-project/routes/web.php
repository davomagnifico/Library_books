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
    return view('welcome', [ 
            'list' => 'list'
        ]   
    );
});

Route::get('view_book/{book_id}', function($book_id) {
    // find a book by virtue of its id and return the view
    if ($book_id == null) { 
        return view('page_not_here');
    } else { 
        return view('view_book');
    }
})->where('book_id', '[0-9]+' );

Route::get('add_book', function() {
    //  Use form to receive the data and put it into the database

    return view('add_book');
});

Route::get('loan_book', function() {
    return view('loan_book');
});

Route::get('return_book', function() {
    return view('return_book');
});

Route::get('remove_book/{book_id}', function() {
    return view('remove_book');
});