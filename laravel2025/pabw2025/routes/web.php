<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuthController;



Route::get('/tambah-matakuliah',[MataKuliahController::class,'tambah']);
Route::post('/tambah-matakuliah',[MataKuliahController::class,'simpan']);
Route::get('/matakuliah/{idmatakuliah}', [MataKuliahController::class,'show']);

Route::get('/matakuliah', 
    [MataKuliahController::class, 'index'])
    ->middleware(['is_admin']) ;

Route::middleware(['auth'])->group(function () {
    Route::get('/create-menu', [MenuController::class, 'create']);
    Route::post('/create-menu', [MenuController::class, 'store']);
    Route::get('/form_customer', [CustomerController::class, 'form']);
    Route::get('/list-customer', [CustomerController::class, 'index']);
    Route::post('/store', [CustomerController::class, 'store'])->name('customers.store');
});

Route::get('/form_mk', function () {
    return view('form_mata_kuliah');
})->middleware(['auth']);

Route::get('/form-login', function () {
    return view('form_login');
})->name('login');

Route::get('/admin-login', function () {
    return "Halaman login admin";
})->name('admin.login');

Route::post('/do-login', [AuthController::class, 'login'])->name('do.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');