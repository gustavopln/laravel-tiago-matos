<?php

use Illuminate\Support\Facades\Route;

// Route::redirect('rota-a', 'rota-b', 301);
// Route::permanentRedirect('rota-a', 'rota-b');

// Route::get('rota-a', function () {
//     // Lógica cabulosa
//     return redirect()->route('rotab');
// });

// Route::get('rota-b', function () {
//     return 'Rota B';
// })->name('rotab');

Route::get('/', function () {
  return view('welcome');
});

// Route::get('users', function () {
//     return 'Hello world';
// })->name('users');

// Rotas com parâmetros
// Route::get('/user/{id?}/{name}', function ($id = null, $name = null) {
//     return 'User ' . $id . ' - ' . $name;
// });

// Validando parâmetros
// Route::get('/user/{id?}/{name}', function ($id = null, $name = null) {
//     return 'User ' . $id . ' - ' . $name;
// })->where([
//     'id' => '[0-9]+',
//     'name' => '[A-Za-z]+'
// ]);

// Route::get('token/{token}', function ($token) {
//     return $token;
//     //})->whereAlphaNumeric('token');
// })->whereUuid('token');

//Agrupando rotas usando prefixo
// Route::prefix('admin')->name('admin.')->group((function () {
//     Route::get('', function () {
//         return 'Hello world!';
//     })->name('users');

//     Route::get('/{id}', function ($id) {
//         return 'Hello world!' . $id;
//     })->name('user');

//     Route::put('/{id}', function ($id) {
//         return 'Hello world!' . $id;
//     });
// }));

//Agrupando rotas com middleware

// Route::get('test', function () {
//     return 'Teste';
// })->middleware('signed');

// Route::middleware('signed')->group(function () {
//     Route::get('user', function () {
//         return 'Hello world!';
//     })->name('users');

//     Route::get('user/{id}', function ($id) {
//         return 'Hello world! ' . $id;
//     })->name('user');
// });

//Agrupando rotas com sub domínio
// Route::domain('{user}.cursolaravelpro.test')->group(function () {
//     Route::get('{id}', function ($user, $id) {
//         return $user . ' - ' . $id;
//     });
// });

// Roteamento - Fallback
// Route::fallback(function () {
//     return 'Hello World';
// });

// Roteamento - injeção de dependência
// Route::get('/', function (\Illuminate\Http\Request $request) {
//     //return $request;
//     dd($request);
// });

// Route::get('/user/{user}', function (\App\Models\User $user) {
//     dd($user);
// });

// MIDDLEWARE - Criando e aplicando middlewares
Route::get('users', function () {
  // dd('x');
})->middleware('userAgent');
