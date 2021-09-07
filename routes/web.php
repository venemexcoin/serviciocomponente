<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;

use App\Http\Livewire\Javascript\AutomaticaComponent;
use App\Http\Livewire\Javascript\CodificarComponent;
use App\Http\Livewire\Javascript\AutMaiizaComponent;

use App\Http\Livewire\User\UserDashboardComponent;

use App\Http\Livewire\Collaborator\collaboratorDashboardComponent;

use App\Http\Livewire\Admin\AdminDashboardComponent;

use App\Http\Livewire\Menus\MenuJavasciptComponent;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class)->name('index');
Route::get('menu/JavasciptComponent', MenuJavasciptComponent::class)->name('menu.javascript');


// Sona de practica jabascript

Route::get('javascript/automatica', AutomaticaComponent::class)->name('javascript.automatica');
Route::get('javascript/codificar', CodificarComponent::class)->name('javascript.codificar');
Route::get('javascript/automatizacion', AutMaiizaComponent::class)->name('javascript.automatizacion');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// From User
Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/user/dashboard', UserDashboardComponent::class )->name('user.dashboard');
});

// From collaborator
Route::middleware(['auth:sanctum', 'verified','Authcollaborator'])->group(function() {
    Route::get('/collaborator.dashboard', collaboratorDashboardComponent::class)->name('collaborator.dashboard');
});

// From Admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function() {
   Route::get('/admin/dashboard', adminDashboardComponent::class)->name('admin.dashboard'); 
});

