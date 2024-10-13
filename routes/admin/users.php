<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;



//rutele pentru administrarea userilor externi
Route::prefix('staff/cpanel/users')->middleware(['auth:staff', 'manager'])->group(function () {

    //ruta pentru afisarea userilor externi
    Route::get('show', [UsersController::class, 'showUsers'])->name('show.users');

    // ruta pentru afisare mesaje de la utilizatori
    Route::get('list', [UsersController::class, 'listContact'])->name('list.contact');

    // ruta pentru stergerea mesajelor de la utilizatori
    Route::delete('list/contact/{id}', [UsersController::class, 'deleteContact'])->name('contact.delete');

});
