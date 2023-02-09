<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
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
//index
Route :: get('/', [MainController :: class, 'home'])
-> name('home');

//show
Route :: get('/project/show/{project}', [MainController :: class, 'projectShow'])
        -> name('project.show');


//private
Route :: middleware(['auth', 'verified'])
   ->name('admin.')
   ->prefix('ad')
   ->group(function () {

        //delete 
        Route :: get('/project/delete,{project}', [MainController :: class, 'projectDelete'])
         ->name('project.delete');
        
        //create && store
        Route :: get('/project/create', [MainController :: class, 'projectCreate'])
                ->name('project.create'); 
        Route :: post('/project/store', [MainController :: class, 'projectStore'])
                -> name('project.store');

        //update
        Route :: get('/project/edit/{project}', [MainController :: class, 'projectEdit'])
                -> name('project.edit');
   });


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
