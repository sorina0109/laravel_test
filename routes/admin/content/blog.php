<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\DomainsController;
use App\Http\Controllers\Admin\ArticlesController;





// ===> routele pentru categorii blog
Route::prefix('staff/blog')->middleware(['auth:staff'])->group(function () {

    // afisam categoriile
    Route::get('domains', [DomainsController::class, 'showDomains'])->name('domains.list');
    Route::get('domains/new', [DomainsController::class, 'newDomains'])->name('domains.new');
    Route::post('domains/new', [DomainsController::class, 'addDomains'])->name('domains.add');

    Route::get('domains/edit/{id}', [DomainsController::class, 'editDomains'])->name('domains.edit');
    Route::put('domains/edit/{id}', [DomainsController::class, 'updateDomains'])->name('domains.update');
    Route::delete('domains/delete/{id}', [DomainsController::class, 'deleteDomains'])->name('domains.delete');


    // <==== routele pentru pagini ====

    Route::get('pages', [ArticlesController::class, 'showPages'])->name('pages.list');
    Route::get('pages/new', [ArticlesController::class, 'newPage'])->name('pages.new');
    Route::post('pages/new', [ArticlesController::class, 'addPage'])->name('pages.add');

    Route::get('pages/edit/{id}', [ArticlesController::class, 'editPage'])->name('pages.edit');
    Route::put('pages/edit/{id}', [ArticlesController::class, 'updatePage'])->name('pages.update');
    Route::delete('pages/delete/{id}', [ArticlesController::class, 'deletePage'])->name('pages.delete');

    Route::get('pages/domains/{id}', [ArticlesController::class, 'showDomains'])->name('pages.showDomains');
    Route::put('pages/domains/{id}', [ArticlesController::class, 'setDomains'])->name('pages.setDomains');

    // ==== rutele pentru galeria foto a paginilor
    Route::get('page-photos/{id}', [PhotoController::class, 'showForm'])->name('pages.galery');
    Route::post('page-photos/{id}', [PhotoController::class, 'uploadPhotos'])->name('pages.upload.photos');
    Route::put('page-photo/{id}', [PhotoController::class, 'savePhoto'])->name('pages.save.photo');
    Route::delete('page-photos/{id}', [PhotoController::class, 'deleteAllPhotos'])->name('pages.delete-all.photos');
    Route::delete('page-singlePhoto/{id}', [PhotoController::class, 'deletePhoto'])->name('pages.delete.photo');

});
