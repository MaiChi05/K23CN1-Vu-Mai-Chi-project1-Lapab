<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VMCKhoaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/khoas',[VMCKhoaController::class,'vmcGetAllKhoa'])->name('vmckhoa.vmcgetallkhoa');
Route::get('/khoas/detail/{vmcmakh}',
[VMCKhoaController::class,'vmcGetKhoa'])->name('vmckhoa.vmcgetKhoa');

Route::get('/khoas/edit/{vmcmakh}',
[VMCKhoaController::class,'vmcEdit'])->name('vmckhoa.vmcEdit');

Route::post('/khoas/edit',
[VMCKhoaController::class,'vmcEditSubmit'])->name('vmckhoa.vmcEditSubmit');

Route::get('/khoas/create',[VMCKhoaController::class,'vmccreate'])->name('vmckhoa.vmccreate');
Route::post('/khoas/create',[VMCKhoaController::class,'vmccreateSubmit'])->name('vmckhoa.vmccreateSubmit');

Route::get('/khoas/delete/{vmcmakh}',
[VMCKhoaController::class,'vmcDelete'])->name('vmckhoa.vmcDelete');

Route::post('/khoas/delete',
[VMCKhoaController::class,'vmcDeleteSubmit'])->name('vmckhoa.vmcDeleteSubmit');