<?php

use App\Http\Controllers\Usuariocontrolador;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;


//Crea una ruta en Laravel que responda a la URL /hello y devuelva el texto “¡Hola,
//Laravel!” cuando se acceda a ella.
Route::get('/hello', function () {
    return '¡Hola, Laravel!';
});

//Define una ruta que acepte un parámetro id y devuelva un mensaje que diga “El ID del
//artículo es [id]”, donde [id] es el valor del parámetro.
Route::get('/articulo/{id}', function ($id) {
    return "El ID del artículo es {$id}";
});


//Crea una ruta que acepte un parámetro opcional name. Si se proporciona, devuelve
//“Hola, [name]”; si no se proporciona, devuelve “Hola, invitado”.
Route::get('/saludo/{name?}', function ($name = 'invitado') {
    return "Hola, {$name}";
});


//Asigna el nombre profile a una ruta que acepte un parámetro username y muestra una
//vista que salude al usuario con su nombre. Usa el nombre de la ruta para generar la URL
//en una vista.
Route::get('/profile/{username}', function ($username) {
    return view('profile', ['username' => $username]);
})->name('profile');


//Crea una ruta /welcome que devuelva la vista welcome.blade.php. Asegúrate de que
//la vista se muestre cuando se accede a esta ruta.
Route::get('/welcome', function () {
    return view('welcome');
});


//Crea una ruta /old-page que redirija a /new-page. Asegúrate de que la redirección
//funcione correctamente cuando accedas a /old-page.
Route::redirect('/old-page', '/new-page');

Route::get('/new-page', function () {
    return 'Esta es la nueva página.';
});


//Define una ruta /items que llame al método list del ItemController. Asegúrate de
//que esta ruta esté correctamente vinculada al método del controlador.

Route::get('/items', [ItemController::class, 'list']);
