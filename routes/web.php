<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/admin', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('admin');
Route::post('/admin/do_login', [App\Http\Controllers\Admin\AuthController::class, 'do_login'])->name('admin.do_login');
Route::get('/admin/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('admin.logout');
Route::get('/admin/password', [App\Http\Controllers\Admin\AuthController::class, 'password'])->name('admin.password');

Route::group(['middleware' => 'auth'], function () {

    Route::prefix('admin')->name('admin.')->group(function(){

        Route::prefix('dashboard')->name('dashboard.')->group(function(){
            Route::get('', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('index');
        });

        Route::resources([
            'users' => UserController::class,
            'banners' => BannerController::class,
        ]);

        // BANNERS
        Route::prefix('banners')->name('banners.')->group(function(){
            Route::post('/delete', [BannerController::class, 'delete'])->name('delete');
        });

        // USUÁRIOS
        Route::prefix('users')->name('users.')->group(function(){
            Route::post('/delete', [UserController::class, 'delete'])->name('delete');
        });


        // MESSAGES
        Route::prefix('messages')->name('messages.')->group(function(){
            Route::get('', [MessageController::class, 'index'])->name('index');
            Route::get('/{message}', [MessageController::class, 'show'])->name('show');
            Route::post('/delete', [MessageController::class, 'delete'])->name('delete');
        });

    });
    
});


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('contato')->name('contato.')->group(function(){
    Route::get('/', [App\Http\Controllers\ContatoController::class, 'index'])->name('index');
    Route::post('/enviaEmail', [App\Http\Controllers\ContatoController::class, 'enviaEmail'])->name('enviaEmail');
});

Route::prefix('quem-somos')->name('quemsomos.')->group(function(){
    Route::get('/', [App\Http\Controllers\QuemSomosController::class, 'index'])->name('index');
});

Route::prefix('servicos')->name('servicos.')->group(function(){
    Route::get('/', [App\Http\Controllers\ServicoController::class, 'index'])->name('index');
});

Route::prefix('clientes')->name('clientes.')->group(function(){
    Route::get('/', [App\Http\Controllers\ClienteController::class, 'index'])->name('index');
});
