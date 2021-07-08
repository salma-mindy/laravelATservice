<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RecrutementController;
use App\Http\Controllers\CandidaterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard\EmployeController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', [IndexController::class, 'index'])->name('home');
// Route::get('/at-eservice/recrutement', [RecrutementController::class, 'offres'])->name('recrutement');

/*
Route::get('/recrutement/2/show-offre', [RecrutementController::class, 'showOffre'])->name('show.offre');
Route::get('/recrutement/2/postuler', [CandidaterController::class, 'apply'])->name('apply');
*/

Route::get('/login', [LoginController::class, 'form'])->name('login');
Route::get('/register', [RegisterController::class, 'form'])->name('register');
/*
Route::post('/login-store', [LoginController::class, 'login'])->name('store.login');
Route::post('/register-store', [RegisterController::class, 'register'])->name('store.register');
*/


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/add-offre', [DashboardController::class, 'addOffre'])->name('add.offre');
Route::get('/dashboard/employes/liste', [EmployeController::class, 'liste'])->name('view.employe');

Route::get('/devenir-prestataire', [CandidaterController::class, 'devenirPrestataire'])->name('prestataire');
Route::get('/demander-ressource', [DemandeController::class, 'demandeRessource'])->name('demandeRessource');
Route::get('/add-recruteur', [RecrutementController::class, 'formRecruteur'])->name('formRecruteur');


Route::get('/nos-offres', [RecrutementController::class, 'offres'])->name('offres');
Route::get('/details-offres', [RecrutementController::class, 'detailOffre'])->name('detailOffre');

Route::get('/contact-us', [ContactController::class, 'contact'])->name('contact');


//services routes
Route::get('/nos-service', [ServiceController::class, 'index'])->name('service');

// Route::get('.')