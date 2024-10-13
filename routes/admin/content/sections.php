<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Content\SectionsController;

Route::prefix('staff/content/sections')->middleware(['auth:staff'])->group(function () {
    //afisam lista cu sectiuni
    Route::get('list', [SectionsController::class, 'listSections'])->name('sections.list');
    Route::get('new', [SectionsController::class, 'newSection'])->name('sections.new');

    //crearea unei noi sectiuni
    Route::post('new', [SectionsController::class, 'addSection'])->name('sections.add');
    //afisarea formularului de editare a unei sectiuni
    Route::get('edit/{id}', [SectionsController::class, 'editSection'])->name('sections.edit');
    //updatarea unei sectiuni
    Route::put('update/{id}', [SectionsController::class, 'updateSection'])->name('sections.update');
    //Stergerea unei sectiuni
    Route::delete('delete/{id}', [SectionsController::class, 'deleteSection'])->name('section.delete');
});
