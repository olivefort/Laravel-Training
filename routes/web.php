<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentairesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DeltaController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\ORMController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\QBController;
use App\Http\Controllers\TagsController;

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

Route::get('/', function () {
    return view('welcome');
});




//cette route la : 
// Route::group(['middleware' => ['web']], function() {
//     Route::get('user/{name?}', function($name=null) { 
//         return 'bonjour ' .$name; 
//     });
//     Route::get('user/affiche/{name?}', function($name=null) { 
//         return 'bonjour ' .$name; 
//     });
//     Route::get('user/supprimer/{name?}', function($name=null) { 
//         return 'bonjour ' .$name; 
//     });
// });


// Et celle ci sont identique, la seule différence c'est qu'on les groupe avec un prefix
// Route::group(['middleware' => ['web']], function() {
//     Route::group(['prefix'=>'user'],function(){
//         Route::get('{name?}', function($name=null) { 
//             return 'bonjour ' .$name; 
//         });
//         Route::get('affiche/{name?}', function($name=null) { 
//             return 'bonjour ' .$name; 
//         });
//         Route::get('supprimer/{name?}', function($name=null) { 
//             return 'bonjour ' .$name; 
//         });
//     });
// });

//Exemple d'une route avec plusieurs paramètre
// Route::get('prenom/{firstname}/nom/{name}/age/{age}', function($firstname, $name, $age) { 
//     return 'Utilisateur : Prénom : ' .$firstname .' Nom : ' .$name .' Age :' .$age ; ;
// });

//la même avec saut de ligne
// Route::group(['middleware' => ['web']], function() {
//     Route::get('prenom/{firstname}/nom/{name}/age/{age}', function($firstname, $name, $age) {
// 		$response = "L'utilisateur :<br>";
// 		$response .= "Prénom : ".$firstname."<br>";
// 		$response .= "Nom : ".$name."<br>";
// 		$response .= "Age : ".$age."<br>";
//         return $response; 
//     });
// });

//Avec renvois vers une vue (resource/views/user/name.php)
// Route::group(['middleware' => ['web']], function() {
//     Route::get('calendrier/users/{id}', function ($id) {
//         return view('callendrier.calendar', ['user' => $id, 'titre' => 'callendrier']);
//     });
//     Route::get('bureau/users/{id}', function ($id) {
//         return view('docu.bureau', ['user' => $id, 'titre' => 'bureau']);
//     });
//     Route::get('comission/users/{id}', function ($id) {
//         return view('docu.comission', ['user' => $id, 'titre' => 'comission']);
//     });
//     Route::get('projet/users/{id}', function ($id) {
//         return view('docu.projet', ['user' => $id, 'titre' => 'projet']);
//     });
//     Route::get('discussion/users/{id}', [MembreController::class, 'chat'])->name('membre.chat');
//     Route::get('liste/users/{id}', [MembreController::class, 'list'])->name('membre.list');
//     Route::get('profil/users/{id}', function ($id) {
//         return view('profil.profil', ['user' => $id, 'titre' => 'profil']);
//     });
//     Route::get('messagerie/users/{id}', function ($id) {
//         return view('profil.messagerie', ['user' => $id, 'titre' => 'messagerie']);
//     });
//     Route::get('prestation/users/{id}', function ($id) {
//         return view('rdv.prestation', ['user' => $id, 'titre' => 'prestation']);
//     });
//     Route::get('interne/users/{id}', function ($id) {
//         return view('rdv.interne', ['user' => $id, 'titre' => 'interne']);
//     });
// });


// Route::group(['middleware' => ['web']], function() {
//     Route::get('prenom/{firstname}/nom/{name}/age/{age}', function($firstname, $name, $age) {
//         return view('test.name', ['prenom' => $firstname, 'nom' => $name, 'age' => $age]);
//     });
//     Route::get('mois', function(){
//         $mois = [
//             'janvier' => 31,
//             'février' => 29,
//             'mars' => 31,
//             'avril' => 30,
//             'mai' => 31,
//             'juin' => 30,
//             'juillet' => 31,
//             'août' => 31,
//             'septembre' => 30,
//             'octobre' => 31,
//             'novembre' => 30,
//             'décembre' => 31
//             ];
//         return view('test.mois', compact('mois'));
//     });
//     Route::get('prenom/{profil}/nom/{name}', function($profil, $name){
//         return view('test.profil',['prenom' => $profil, 'nom' => $name, 'titre'=>'profil']);
//     });
//     Route::get('promotion/{promo}', function($promo){
//         return view('test.promotion',['promotion' => $promo, 'titre'=>'promotion']);
//     });
    
   

// });

// Route::get('article/{article}', [ArticleController::class, 'index']);
// Route::get('article/{article}/page/{page}', [ArticleController::class, 'lecture']);

// Route::get('livre/{nom}', [PagesController::class, 'index']);
// Route::get('livre/page/{page}', [PagesController::class, 'page']);

// Route::get('delta', [DeltaController::class, 'index']);

// Route::get('monsite/QB', [QBController::class, 'index']);
// Route::get('monsite/ORM', [ORMController::class, 'index']);



// Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
// Route::post('contact', [ContactController::class, 'postForm'])->name('contact.postForm');

//form = article
Route::resource('form', FormsController::class);

// Route::resource('tags', TagsController::class);

Route::get('tags', [TagsController::class, 'index'])->name('tags.index');
Route::get('tags/{tag}/{article}', [TagsController::class, 'show'])->name('tags.show');
Route::get('tags/edit/{tag}/{article}',  [TagsController::class, 'edit'])->name('tags.edit');
Route::put('tags/{tag}/{article}',  [TagsController::class, 'update'])->name('tags.update');
Route::get('tags/{tag}/{article}',  [TagsController::class, 'create'])->name('tags.create');
Route::post('tags/{tag}/{article}',  [TagsController::class, 'store'])->name('tags.store');
Route::delete('tags/{tag}/{article}',  [TagsController::class, 'destroy'])->name('tags.destroy');

Route::resource('commentaires', CommentairesController::class)->except('index','destroy','show');
//Pour creer un commentaire d'un article bien précis on est obligé de creer une route un peu plus précise en ajoutant l'id de l'article sur la fin. 
Route::get('commentaires/create/{article_id}', [CommentairesController::class, 'create'])->name('commentaires.create');

