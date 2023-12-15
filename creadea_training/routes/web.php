<?php

use App\Http\Controllers\MyController;
use App\Models\Developers;
use App\Models\Software;
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
    return redirect('/page1');
});


Route::get('/page1', function () {
    $softwares = Software::all();

    return view('software', compact('softwares'));
})->name('page1');

Route::get('/page2', function () {
    $softwares = Software::all();

    $developer = Developers::leftjoin('software', 'software.id', '=', 'developers.software_id')
        ->select('developers.*', 'software.software_name')
        ->get()->all();

    return view('developers', compact('softwares', 'developer'));
})->name('page2');

Route::get('/page3', function () {
    $softwares = Software::all();

    return view('all', compact('softwares'));
})->name('page3');


Route::post('/store/software', [MyController::class, 'SoftwareStore'])->name('SoftwareStore');
Route::post('/store/developer', [MyController::class, 'DeveloperStore'])->name('DeveloperStore');

Route::get('/software/delete/{id}', [MyController::class, 'deleteSoftware'])->name('deleteSoftware');
Route::get('/software/edit/{id}', [MyController::class, 'editSoftware'])->name('editSoftware');
Route::post('/software/update/{id}', [MyController::class, 'SoftwareUpdate'])->name('SoftwareUpdate');

Route::get('/developer/delete/{id}', [MyController::class, 'deleteDeveloper'])->name('deleteDeveloper');
Route::get('/developer/edit/{id}', [MyController::class, 'editDeveloper'])->name('editDeveloper');
Route::post('/developer/update/{id}', [MyController::class, 'DeveloperUpdate'])->name('DeveloperUpdate');
