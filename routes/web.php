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

function getContacts()
{
    return [
        1 => ['id' => 1, 'name' => 'Name 1', 'phone' => '1234567890'],
        2 => ['id' => 2, 'name' => 'Name 2', 'phone' => '2345678901'],
        3 => ['id' => 3, 'name' => 'Name 3', 'phone' => '3456789012'],
    ];
}


Route::get('/', function () {

    return view('welcome');
});


Route::get('/contacts', function () {
    $companies = [
        1 => ['name' => 'Company One', 'contacts' => 3],
        2 => ['name' => 'Company Two', 'contacts' => 5],
    ];

    $contacts = getContacts();

    return view('contacts.index', compact('contacts', 'companies'));
})->name('contacts.index');


Route::get('/contact/create', function () {
    return view('contacts.create');
   
})->name('contacts.create');

Route::get('/contact/{id}', function ($id) {

    // return "Contact " . $id;

    $contacts = getContacts();
    
    abort_unless(isset($contacts[$id]), 404);
    $contact = $contacts[$id];

    return view('contacts.show')->with('contact', $contact);

    //to only accept numbers
    // })->whereNumber('id');

})->name('contacts.show');


Route::get('/companies/{name?}', function ($name = null) {
    if ($name) {
        return "Company " . $name;
    } else {
        return "All Companies";
    }

             //to only accept alphabets
            // })->whereAlpha('Name');

            // to accept both numbers and letters
})->whereAlphaNumeric('Name');

//fallback routes
Route::fallback(function () {

    return '<h1> Sorry Page Does not  exist </h1> ';
});
