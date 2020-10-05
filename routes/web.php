<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Http\Controllers\StudentController;



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
// Route::view('/student',);
// Tạo route resource students Controller
Route::resource('students', StudentController::class);
// ->only(['index']); chỉ dùng hàm nào đó
// ->except(['edit']); bỏ qua hàm nào đó
// Tạo route cho SubjectControler k dùng resouce
Route::get('subject', [SubjectController::class, 'index'])->name('subjects.index');
// Route::get('/students', function () {
//     // Su dung query builder
//     // Lay ra mang students
//     $students =  DB::table('students')->get();

//     return view('students.student-list', [
//         'students' => $students
//     ]);
// })->name('student-list');
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
