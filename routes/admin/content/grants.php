<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProgramsController;


// ===> rutele pentru programe
Route::prefix('staff/grants')->middleware(['auth:staff'])->group(function () {

    // ruta pentru afisare granturi
    Route::get('list', [ProgramsController::class, 'listGrants'])->name('grants.list');

    //rutele pentru adaugare grant
    Route::get('new', [ProgramsController::class, 'newGrant'])->name('grants.new');
    Route::post('new', [ProgramsController::class, 'addGrant'])->name('grants.add');

    //rutele pentru editare grant
    Route::get('edit/{id}', [ProgramsController::class, 'editGrant'])->name('grants.edit');
    Route::put('update/{id}', [ProgramsController::class, 'updateGrant'])->name('grants.update');

    //ruta pentru stergere grant
    Route::delete('delete/{id}', [ProgramsController::class, 'deleteGrant'])->name('grants.delete');

});
