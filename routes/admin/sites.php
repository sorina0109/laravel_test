<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;



//rutele pentru administrarea userilor externi
Route::prefix('staff/cpanel/sites')->middleware(['auth:staff', 'manager'])->group(function () {


    // ruta pentru afisare mesaje de la utilizatori
    Route::get('list', [UsersController::class, 'listSite'])->name('list.site');

    // ruta pentru stergerea mesajelor de la utilizatori
    Route::delete('list/site/{id}', [UsersController::class, 'deleteSite'])->name('site.delete');

});
