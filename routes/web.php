<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

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
    return view('welcome');
});

Route::get('/students', function () {
    // Su dung query builder
    // Lay ra mang students
    $students =  DB::table('students')->get();

    return view('students.student-list', [
        'students' => $students
    ]);
})->name('student-list');
// Chuc nang Login + route POST
Route::get('/login', function () {
    return view('login');
})->name('get-login');


Route::post('/post-login', function (Request $request) {
    $username = $request->username;
    $student = DB::table('students')
        ->where('name', 'like', "%$username%")->first();
    if ($student) {
        return redirect()->route('student-list');
    }
    return redirect()->route('get-login');
})->name('post-login');
