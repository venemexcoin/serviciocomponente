<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;

use App\Http\Livewire\Javascript\AutomaticaComponent;
use App\Http\Livewire\Javascript\CodificarComponent;
use App\Http\Livewire\Javascript\AutMaiizaComponent;

use App\Http\Livewire\User\UserDashboardComponent;

use App\Http\Livewire\Collaborator\collaboratorDashboardComponent;

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Controllers\API\PacienteController;

use App\Http\Livewire\Menus\MenuJavasciptComponent;

use App\Http\Livewire\Javascript\Curso\CodificacionCSSComponent;
use App\Http\Livewire\Javascript\Curso\Ejemplo1Component;
use App\Http\Livewire\Javascript\Curso\Ejemplo2Component;
use App\Http\Livewire\Javascript\Curso\Ejemplo3Component;
use App\Http\Livewire\Javascript\Curso\Ejemplo4Component;
use App\Http\Livewire\Javascript\Curso\Ejemplo5Component;
use App\Http\Livewire\Javascript\Curso\Ejemplo6Component;
use App\Http\Livewire\Javascript\Curso\Ejemplo7Component;
use App\Http\Livewire\Javascript\Curso\Ejemplo8Component;
use App\Http\Livewire\Javascript\Curso\Ejemplo9Component;
use App\Http\Livewire\Javascript\Curso\Ejemplo10Component;
use App\Http\Livewire\Javascript\Curso\Ejemplo11Component;
use App\Http\Livewire\Javascript\Curso\Ejemplo12Component;
use App\Http\Livewire\Javascript\Curso\Ejemplo13Component;
use App\Http\Livewire\Javascript\Curso\Ejemplo14Component;
use App\Http\Livewire\Javascript\Curso\Ejemplo15Component;

// Pruebas tecnicas
use App\Http\Livewire\Javascript\PuebasTecnicas\Ejecicio1000Component;
use App\Http\Livewire\Javascript\PuebasTecnicas\Ejecicio1001Component;

//Cuestionarios de Javascript
use App\Http\Livewire\Javascript\Question\Question1Component;

//ejemplos con HTML
use App\Http\Livewire\Javascript\PuebasEjecucion\Ejecicio1002Component;

//pagina de practicas de youtube
use App\Http\Livewire\Ejercicio\HomePacticaComponent;
use App\Http\Livewire\Ejercicio\Practica\MenuPegajosoComponent;


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

Route::get('javascript/codificacion', CodificacionCSSComponent::class)->name('javascript.codificacion');
Route::get('javascript/ejemplo1',Ejemplo1Component::class)->name('javascript.ejemplo1');
Route::get('javascript/ejemplo2',Ejemplo2Component::class)->name('javascript.ejemplo2');
Route::get('javascript/ejemplo3',Ejemplo3Component::class)->name('javascript.ejemplo3');
Route::get('javascript/ejemplo4',Ejemplo4Component::class)->name('javascript.ejemplo4');
Route::get('javascript/ejemplo5',Ejemplo5Component::class)->name('javascript.ejemplo5');
Route::get('javascript/ejemplo6',Ejemplo6Component::class)->name('javascript.ejemplo6');
Route::get('javascript/ejemplo7',Ejemplo7Component::class)->name('javascript.ejemplo7');
Route::get('javascript/ejemplo8',Ejemplo8Component::class)->name('javascript.ejemplo8');
Route::get('javascript/ejemplo9',Ejemplo9Component::class)->name('javascript.ejemplo9');
Route::get('javascript/ejemplo10',Ejemplo10Component::class)->name('javascript.ejemplo10');
Route::get('javascript/ejemplo11',Ejemplo11Component::class)->name('javascript.ejemplo11');
Route::get('javascript/ejemplo12',Ejemplo12Component::class)->name('javascript.ejemplo12');
Route::get('javascript/ejemplo13',Ejemplo13Component::class)->name('javascript.ejemplo13');
Route::get('javascript/ejemplo14',Ejemplo14Component::class)->name('javascript.ejemplo14');
Route::get('javascript/ejemplo15',Ejemplo15Component::class)->name('javascript.ejemplo15');

Route::get('javascript/ejercicio1',Ejecicio1000Component::class)->name('javascript.ejercicio1');
Route::get('javascript/ejercicio2',Ejecicio1001Component::class)->name('javascript.ejercicio2');

Route::get('javascript/ejercicio1002',Ejecicio1002Component::class)->name('javascript.ejercicio1002');

Route::get('javascript/question1',Question1Component::class)->name('javascript.question1');

Route::get('ejercicio/home/practica',HomePacticaComponent::class)->name('ejercicio.homePractica');
Route::get('ejercicio/menu/practica',MenuPegajosoComponent::class)->name('ejercicio.menuPractica');



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
   Route::apiResource('/pacientes',PacienteController::class);
});

