<?php
use App\Http\Controllers\LeadController;
use App\Http\Controllers\IkoController;
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


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
//     ])->group(function () {
//         Route::get('/dashboard', function () {
//             return view('dashboard');
//         })->name('dashboard');
// });


Route::get('/',[LeadController::class,'index'])->name('index');
Route::prefix('leads')->group(function () {
    Route::post('/saveLeads',[LeadController::class,'save'])->name('saveLead');
});
Route::get('/iko',[IkoController::class,'index'])->name('indexIko')->middleware('lead');
Route::prefix('iko/actions')->group(function(){
Route::post('/select',[IkoController::class,'select'])->name('selectBearing');
});
