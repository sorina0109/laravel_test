<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProgramsController;


// ===> rutele pentru programe
Route::prefix('staff/programs')->middleware(['auth:staff'])->group(function () {

    // ruta pentru afisare programe
    Route::get('list', [ProgramsController::class, 'listPrograms'])->name('programs.list');

    //rutele pentru adaugare program
    Route::get('new', [ProgramsController::class, 'newProgram'])->name('programs.new');
    Route::post('new', [ProgramsController::class, 'addProgram'])->name('programs.add');

    //rutele pentru editare program
    Route::get('edit/{id}', [ProgramsController::class, 'editProgram'])->name('programs.edit');
    Route::put('update/{id}', [ProgramsController::class, 'updateProgram'])->name('programs.update');

    //ruta pentru stergere program
    Route::delete('delete/{id}', [ProgramsController::class, 'deleteProgram'])->name('programs.delete');

});
