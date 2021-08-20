<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NginxController;
use App\Http\Controllers\UwsgiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CsvExportController;
use Illuminate\Support\Facades\Redis;

Route::get('/', HomeController::class)->name('home');
Route::get('/home', [HomeController::class, 'index']);

// Nginx
Route::get('nginx', [NginxController::class, 'nginx'])->name('nginx');
Route::get('nginx.exportexcel', [NginxController::class, 'exportexcel'])->name('nginx.export');
Route::get('/search', [NginxController::class, 'search'])->name('searchnginx');

// Uwsgi
Route::get('uwsgi', [UwsgiController::class, 'uwsgi'])->name('uwsgi');
Route::get('uwsgi.exportexcel', [UwsgiController::class, 'exportexcel'])->name('uwsgi.export');
Route::get('/searchuwsgi', [UwsgiController::class, 'searchuwsgi'])->name('searchuwsgi');

// Redis
// Route::get('/', function () {
//     $p = Redis::incr('p');
//     return $p;
// });
Route::get("users_with_cache", [UserController::class, 'index']);
Route::get("users_with_query", [UserController::class, 'getUser']);
