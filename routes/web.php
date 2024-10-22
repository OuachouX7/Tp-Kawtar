<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/page/1', function () {
    return view('page');
});

Route::get('/test/{param}', function ($param) {
    return view('test',['param'=> $param]);
});

Route::get('/Formation/{Formation}/filiere/{filiere}/groupe/{groupe}/stagiaire/{stagiaire?}',
    function ($Formation,$filiere,$groupe,$stagiaire=null) {
    $annee = '2024';
    if ($stagiaire) {
        return view('rt',['Formation'=>$Formation,'filiere'=>$filiere,'groupe'=>$groupe,'stagiaire'=>$stagiaire]);
    }else{
        return view('rt',['Formation'=>$Formation,'filiere'=>$filiere,'groupe'=>$groupe,'stagiaire'=>$annee]);
    }
});

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::post('/profile', function (\Illuminate\Http\Request $request) {
    $n1 = $request->input('n1');
    $n2 = $request->input('n2');
    return $n1 + $n2;
})->name('profile');

Route::get('/notes', [NotesController::class, 'index'])->name('all');
Route::get('/notes/statistiques', [NotesController::class, 'statistics'])->name('statistics');
Route::get('/notes/show', [NotesController::class, 'show'])->name('show');
Route::get('/notes/decorate', [NotesController::class, 'decorate'])->name('decorate');  


Route::get('/Accueil', function () {
    return view('Accueil');
});

Route::get('/contact', function () {
    return view('contact');
});