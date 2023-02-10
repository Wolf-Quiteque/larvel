<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CLientController;
use App\Http\Controllers\Frontend\BlogController as FrontendBlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavigationsController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\TeamController;
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

// Navigations Site Principal

Route::get('/',[HomeController::class, 'index']);

Route::controller(FrontendBlogController::class)->group(function(){
    Route::get('noticias/{slug}','show')->name('single.post');
});

Route::get('/sobre-nós', function () {
    return view('site.omnidata');
})->name('site.omnidata');


// Soluções

Route::get('/solucoes/redes-sem-fio', function () {
    return view('site.redes_sem_fio');
})->name('site.redes_sem_fio');

Route::get('/solucoes/seguranca', function () {
    return view('site.seguranca');
})->name('site.seguranca');

Route::get('/solucoes/storage', function () {
    return view('site.storage');
})->name('site.storage');

Route::get('/solucoes/cabeamento-utp', function () {
    return view('site.cabeamento-utp');
})->name('site.cabeamento-utp');


// Serviços

Route::get('/servicos/servico-e-suporte-em-ti', function () {
    return view('site.servicos.servico-suporte-ti');
})->name('site.servico-suporte-ti');

Route::get('/servicos/sistema-de-informacoes', function () {
    return view('site.servicos.sistema-de-informacao');
})->name('site.sistema-de-informacao');

Route::get('/servicos/gestao-de-ti', function () {
    return view('site.servicos.gestao-de-ti');
})->name('site.gestao-de-ti');

Route::get('/servicos/gestao-de-infraestruturas', function () {
    return view('site.servicos.gestao-de-infraestruturas');
})->name('site.gestao-de-infraestruturas');


// Team
Route::get('/equipa',[NavigationsController::class,'index'])->name('site.team');

Route::get('/certificados-e-premios', function () {
    return view('site.certificados-e-premios');
})->name('site.certificados-e-premios');

Route::get('/clientes', function () {
    return view('site.clientes');
})->name('site.clientes');

Route::get('/galeria', function () {
    return view('site.galeria');
})->name('site.galeria');

Route::get('/parceiros', function () {
    return view('site.parceiros');
})->name('site.parceiros');

Route::get('/noticias', function () {
    return view('site.blogs');
})->name('site.noticias');

Route::get('/contactos', function () {
    return view('site.contactos');
})->name('site.contactos');


// Navegação site de carreiras

Route::get('/jobs', function () {
    return view('carreiras.carreiras');
})->name('jobs.carreiras');

Route::get('/ser-omnidata', function () {
    return view('carreiras.seromnidata');
})->name('jobs.seromnidata');

Route::get('/areas-de-trabalho', function () {
    return view('carreiras.areas-de-trabalho');
})->name('jobs.areas');

Route::get('/beneficios-e-vantagens', function () {
    return view('carreiras.beneficios-e-vantagens');
})->name('jobs.beneficios');

Route::get('/testemunhos', function () {
    return view('carreiras.testemunhos');
})->name('jobs.testemunhos');

Route::get('/candidatura', function () {
    return view('carreiras.jobs');
})->name('jobs');


// Ãdmin Routes
Route::controller(AdminController::class)->middleware(['auth','verified'])->group(function(){
    Route::get('/dashboard','index')->name('dashboard'); 
});




// Blog
Route::controller(BlogController::class)->group(function(){
    Route::get('/blog/create','create')->name('admin.blog.create');
    Route::get('/blog/all','index')->name('admin.blog.all');
    Route::get('/blog/edit/{id}','edit')->name('admin.blog.edit');
    Route::post('/blog/store','store')->name('admin.blog.store');
    Route::post('/blog/update/{id}','update')->name('admin.blog.update');
    Route::get('/blog/delete/{id}','destroy')->name('admin.blog.destroy');
});

// Category
Route::controller(CategoryController::class)->group(function(){
    Route::get('/category/create','create')->name('admin.category.create');
    Route::post('/category/store','store')->name('admin.category.store');
    Route::post('/category/update/{id}','update')->name('admin.category.update');
    Route::get('/category/edit/{id}','edit')->name('admin.category.edit');
    Route::get('/category/delete/{id}','destroy')->name('admin.category.destroy');
});

// Promotion
Route::controller(PromotionController::class)->group(function(){
    Route::get('/promotion/create','create')->name('admin.promotion.create');
    Route::post('/promotion/store','store')->name('admin.promotion.store');
    Route::post('/promotion/activate/{id}','activate')->name('admin.promotion.activate');
    Route::post('/promotion/deactivate/{id}','deactivate')->name('admin.promotion.deactivate');
    // Route::post('/category/update/{id}','update')->name('admin.category.update');
    // Route::get('/category/edit/{id}','edit')->name('admin.category.edit');
    // Route::get('/category/delete/{id}','destroy')->name('admin.category.destroy');
});

// Slides
Route::controller(SlideController::class)->group(function(){
    Route::get('/slide/create','create')->name('admin.slide.create');
    Route::post('/slide/store','store')->name('admin.slide.store');
    Route::get('/slide/edit/{id}','edit')->name('admin.slide.edit');
    Route::post('/slide/update/{id}','update')->name('admin.slide.update');
    // Route::get('/category/delete/{id}','destroy')->name('admin.category.destroy');
});

// Areas
Route::controller(AreaController::class)->group(function(){
    Route::get('/area/all','create')->name('admin.area.create');
    Route::post('/area/store','store')->name('admin.area.store');
    Route::get('/area/edit/{id}','edit')->name('admin.area.edit');
    Route::post('/area/update/{id}','update')->name('admin.area.update');
    Route::get('/area/delete/{id}','destroy')->name('admin.area.destroy');
});

// Team
Route::controller(TeamController::class)->group(function(){
    Route::get('/team/all','create')->name('admin.team.index');
    Route::post('/team/store','store')->name('admin.team.store');
    Route::get('/team/edit/{id}','edit')->name('admin.team.edit');
    // Route::post('/slide/update/{id}','update')->name('admin.slide.update');
    // Route::get('/category/delete/{id}','destroy')->name('admin.category.destroy');
});

// Clients
Route::controller(CLientController::class)->group(function(){
    Route::get('/client/all','index')->name('admin.client.index');
    Route::post('/client/store','store')->name('admin.client.store');
    Route::get('/client/edit/{id}','edit')->name('admin.client.edit');
    Route::post('/client/update/{id}','update')->name('admin.client.update');
    Route::get('/client/delete/{id}','destroy')->name('admin.client.destroy');
});

// Parceiros
Route::controller(PartnerController::class)->group(function(){
    Route::get('/partner/all','index')->name('admin.partner.index');
    Route::post('/partner/store','store')->name('admin.partner.store');
    Route::get('/partner/edit/{id}','edit')->name('admin.partner.edit');
    Route::post('/partner/update/{id}','update')->name('admin.partner.update');
    Route::get('/partner/delete/{id}','destroy')->name('admin.partner.destroy');
});

require __DIR__.'/auth.php';
